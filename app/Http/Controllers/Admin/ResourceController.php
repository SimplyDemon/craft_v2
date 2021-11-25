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

        return view( $this->folderPathUser . 'index', [
            'all'   => $all,
            'title' => 'Ресурсы',
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
        $pricesHistory = ResourceAdminPrice::where( 'resource_id', $id )->orderBy( 'id', 'desc' )->limit( 12 )->get();

        $priceHistoryDates  = [];
        $priceHistoryPrices = [];
        if ( ! $pricesHistory->isEmpty() ) {
            foreach ( $pricesHistory as $priceHistory ) {
                $priceHistoryDates[]  = date( 'd.m.Y', strtotime( $priceHistory->created_at ) );
                $priceHistoryPrices[] = $priceHistory->price_sell;
            }
        }

        return view( $this->folderPathUser . 'show', [
            'single'             => $single,
            'priceHistoryDates'  => json_encode( $priceHistoryDates ),
            'priceHistoryPrices' => json_encode( $priceHistoryPrices ),
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
}
