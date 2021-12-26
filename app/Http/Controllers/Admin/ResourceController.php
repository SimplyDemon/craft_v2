<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddResource;
use App\Http\Requests\EditResource;
use App\Models\Resource;
use App\Models\ResourceAdminPrice;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ResourceController extends Controller {
    protected string $name = 'resources.';
    protected string $folderPath = 'admin.pages.resources.';
    protected string $folderPathUser = 'pages.resources.';
    const QUERY_EXCEPTION_READABLE_MESSAGE = 2;


    public function index() {
        $all = Resource::orderBy( 'name', 'asc' )->where( 'type', 'resource' )->get();

        $historyDifferencePositive = [];
        $historyDifferenceNegative = [];

        foreach ( $all as $single ) {
            $historyDifference = $this->getHistoryDifference( $single );
            if ( isset( $historyDifference['isDifferencePositive'] ) ) {
                if ( $historyDifference['isDifferencePositive'] ) {
                    $historyDifferencePositive[] = $historyDifference;
                } else {
                    $historyDifferenceNegative[] = $historyDifference;
                }
            }
        }

        $historyDifference = [];
        usort( $historyDifferencePositive, function ( $item1, $item2 ) {
            return $item2['number'] <=> $item1['number'];
        } );
        $historyDifference['positiveNumberTop'] = array_slice( $historyDifferencePositive, 0, 3 );
        usort( $historyDifferenceNegative, function ( $item1, $item2 ) {
            return $item1['number'] <=> $item2['number'];
        } );
        $historyDifference['negativeNumberTop'] = array_slice( $historyDifferenceNegative, 0, 3 );

        usort( $historyDifferencePositive, function ( $item1, $item2 ) {
            return $item2['percentNumber'] <=> $item1['percentNumber'];
        } );
        $historyDifference['positivePercentTop'] = array_slice( $historyDifferencePositive, 0, 3 );
        usort( $historyDifferenceNegative, function ( $item1, $item2 ) {
            return $item1['percentNumber'] <=> $item2['percentNumber'];
        } );
        $historyDifference['negativePercentTop'] = array_slice( $historyDifferenceNegative, 0, 3 );

        return view( $this->folderPathUser . 'index', [
            'all'               => $all,
            'title'             => 'Ресурсы',
            'historyDifference' => $historyDifference,
        ] );
    }

    public function create() {

        return view( $this->folderPath . 'create' );
    }

    public function store( AddResource $request ) {
        $slug = Str::slug( $request->name, '-' );
        $img  = $request->file( 'image' );

        if ( $img ) {
            $imgName = time() . '-' . Str::slug( pathinfo( $img->getClientOriginalName(), PATHINFO_FILENAME ), '-' ) . '.' . $img->getClientOriginalExtension();
            $imgPath = $img->storeAs( 'uploads/resources', $imgName, 'public' );

            $request->merge( [ 'img' => $imgPath ] );
        }
        $request->merge( [ 'slug' => $slug ] );

        try {

            $resource = Resource::create( $request->except( 'image' ) );

            $url     = route( $this->name . 'show', [ 'single' => $resource, 'id' => $resource->id ] );
            $message = "Добавление выполнено успешно! Нажмите <a href='{$url}'>сюда</a> что бы посмотреть";
        }
        catch ( QueryException $exception ) {
            $message = $exception->errorInfo[ self::QUERY_EXCEPTION_READABLE_MESSAGE ];
        }

        $request->session()->flash( 'message', $message );

        return Redirect::to( route( $this->name . 'create' ) );
    }


    public function show( int $id ) {
        $single        = Resource::findOrFail( $id );
        $pricesHistory = ResourceAdminPrice::where( 'resource_id', $id )->orderBy( 'id', 'desc' )->limit( 12 )->get()->reverse();

        $priceHistoryDates  = [];
        $priceHistoryPrices = [];
        $historyDifference  = [];
        if ( ! $pricesHistory->isEmpty() ) {
            foreach ( $pricesHistory as $priceHistory ) {
                $priceHistoryDates[]  = date( 'd.m.Y', strtotime( $priceHistory->created_at ) );
                $priceHistoryPrices[] = $priceHistory->price_sell;
            }
        }

        if ( $pricesHistory->count() > 1 ) {
            $historyDifference = $this->getHistoryDifference( $single );
        }

        return view( $this->folderPathUser . 'show', [
            'single'                        => $single,
            'title'                         => $single->name,
            'priceHistoryDates'             => json_encode( $priceHistoryDates ),
            'priceHistoryPrices'            => json_encode( $priceHistoryPrices ),
            'priceHistoryDifference'        => $historyDifference['text'] ?? null,
            'priceHistoryDifferencePercent' => $historyDifference['percentText'] ?? null,
            'priceHistoryDifferenceClass'   => $historyDifference['class'] ?? null,
        ] );
    }


    public function edit( int $id ) {
        $single = Resource::findOrFail( $id );
        $all    = Resource::orderBy( 'name', 'asc' )->get();

        return view( $this->folderPath . 'edit', [ 'single' => $single, 'all' => $all ] );
    }


    /*
     * Заметка по img:
     * ларавель очень страно работает с файлоыми полями, если название поля = названию столбца в mysql то оно работает и вставляет путь к файлу по своим правилам
     * которые я не могу переопределить, даже если насильственно указать $request->merge( [ 'img' => 'SOME VALUE' ] ); это строка будет проигнорирована
     * и поставится то, что считает нужный ларавель, а подставляет он туда шлак со временным путем как C:\xampp\tmp\php23FC.tmp
     * Поэтому меняем имя поля на image - и спокойно с ним работаем
     *
     * Имя файла - текущая метка юникс( для уникальности имен) + слаг имени файла без расширения + расширение файла
     */
    public function update( EditResource $request, int $id ) {
        $method = $request->input( 'method' );
        $single = Resource::findOrFail( $id );
        $all    = Resource::orderBy( 'name', 'asc' )->get();


        try {
            $slug = Str::slug( $request->name, '-' );
            $img  = $request->file( 'image' );

            if ( $img ) {
                $imgName = time() . '-' . Str::slug( pathinfo( $img->getClientOriginalName(), PATHINFO_FILENAME ), '-' ) . '.' . $img->getClientOriginalExtension();
                $imgPath = $img->storeAs( 'uploads/resources', $imgName, 'public' );

                $request->merge( [ 'img' => $imgPath ] );
            }
            $request->merge( [ 'slug' => $slug ] );
            $single->update( $request->except( 'currentID', 'method', 'image' ) );

            $message = 'Обновление выполнено успешно!';
        }
        catch ( QueryException $exception ) {
            $message = $exception->errorInfo[ self::QUERY_EXCEPTION_READABLE_MESSAGE ];
        }

        $request->session()->flash( 'message', $message );

        if ( $method == 'Применить' ) {
            return Redirect::to( route( $this->name . 'edit', [
                'single' => $single,
                'all'    => $all,
                'id'     => $single->id,
            ] ) );
        }

        //save
        return Redirect::to( route( $this->name . 'index' ) );


    }


    public function destroy( int $id ) {
        $single = Resource::findOrFail( $id );

        try {
            $single->delete();
            $message = 'Удаление выполнено успешно!';
        }
        catch ( QueryException $exception ) {
            $message = $exception->errorInfo[ self::QUERY_EXCEPTION_READABLE_MESSAGE ];
        }

        Session::flash( 'message', $message );

        return Redirect::to( route( $this->name . 'index' ) );
    }


    /*
     * Show how price was changed from last prices update
     */
    protected function getHistoryDifference( Resource $single ): array {
        $pricesHistory = ResourceAdminPrice::where( 'resource_id', $single->id )->orderBy( 'id', 'desc' )->limit( 12 )->get()->reverse();
        $result        = [];
        if ( $pricesHistory->count() > 1 && $single->price_sell > 0 && $pricesHistory[1]->price_sell > 0 ) {

            $priceHistoryPreLast = $pricesHistory[1];
            $result['number']    = $single->price_sell - $priceHistoryPreLast->price_sell;

            $result['isDifferencePositive'] = $result['number'] >= 0;
            $result['resourceId']           = $single->id;
            $result['class']                = $result['isDifferencePositive'] ? 'sd-color-green' : 'sd-color-red';

            /* If value positive add symbol "+" if value is negative symbol "-" already set */
            $result['text'] = $result['isDifferencePositive'] ? '+' : '';
            $result['text'] .= $result['number'];


            /* Show percent only if current price not 0 and previously price not 0 */
            if ( $single->price_sell > 0 && $priceHistoryPreLast->price_sell > 0 ) {
                $result['percentText']   = $result['isDifferencePositive'] ? '+' : '';
                $result['percentNumber'] = ( $single->price_sell * 100 ) / $priceHistoryPreLast->price_sell - 100;
                $result['percentText']   .= number_format( $result['percentNumber'], '2', ',', ' ' ) . '%';
            }
        }

        return $result;
    }

}
