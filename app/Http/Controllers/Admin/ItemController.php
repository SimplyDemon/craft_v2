<?php

namespace App\Http\Controllers\Admin;

use App\Http\Helpers\Enum;
use App\Http\Requests\AddItem;
use App\Http\Requests\EditItem;
use App\Models\Category;
use App\Models\Item;
use App\Models\Resource;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ItemController extends Controller {
    protected $name = 'items.';
    protected $folderPath = 'admin.pages.items.';
    const QUERY_EXCEPTION_READABLE_MESSAGE = 2;


    public function index() {
        $categories = Category::orderBy( 'name', 'asc' )->whereNull( 'category_id' )->get();
        $all        = Item::all();

        $groupedItems = $all->groupBy( 'category_id' );

        $i = 0;
        foreach ( $categories as $item ) {
            $subCategories = Category::orderBy( 'name', 'asc' )->where( 'category_id', $item->id )->get();
            if ( $subCategories ) {
                $categories[ $i ]['subCategories'] = $subCategories;
            }

            $i ++;
        }


        return view( $this->folderPath . 'index', [
            'all'          => $all,
            'categories'   => $categories,
            'groupedItems' => $groupedItems,
        ] );
    }

    public function create() {
        $gradeValues = Enum::getPossibleValues( 'items', 'grade' );

        $categories = Category::orderBy( 'name', 'asc' )->get();

        return view( $this->folderPath . 'create', [
            'gradeValues' => $gradeValues,
            'categories'  => $categories,
        ] );
    }

    public function store( AddItem $request ) {
        $img = $request->file( 'image' );

        if ( $img ) {
            $imgName = time() . '-' . Str::slug( pathinfo( $img->getClientOriginalName(), PATHINFO_FILENAME ), '-' ) . '.' . $img->getClientOriginalExtension();
            $imgPath = $img->storeAs( 'uploads/items', $imgName, 'public' );

            $request->merge( [ 'img' => $imgPath ] );
        }

        $slug = Str::slug( $request->name, '-' );
        $request->merge( [ 'slug' => $slug ] );

        try {
            $item = Item::create( $request->except( 'image' ) );

            $url     = route( $this->name . 'show', [ 'id' => $item->id ] );
            $message = "Добавление выполнено успешно! Нажмите <a href='{$url}'>сюда</a> что бы посмотреть";
        } catch ( QueryException $exception ) {
            $message = $exception->errorInfo[ self::QUERY_EXCEPTION_READABLE_MESSAGE ];
        }

        $request->session()->flash( 'message', $message );

        return Redirect::to( route( $this->name . 'create' ) );
    }


    public function show( int $id ) {
        $single = Item::findOrFail( $id );

        return view( $this->folderPath . 'show', [ 'single' => $single, 'id' => $single->id ] );
    }


    public function edit( int $id ) {
        $single      = Item::findOrFail( $id );
        $gradeValues = Enum::getPossibleValues( 'items', 'grade' );

        $categories = Category::orderBy( 'name', 'asc' )->get();

        return view( $this->folderPath . 'edit', [
            'single'      => $single,
            'gradeValues' => $gradeValues,
            'categories'  => $categories,
        ] );
    }


    public function update( EditItem $request, int $id ) {
        $method = $request->input( 'method' );
        $single = Item::findOrFail( $id );

        $img = $request->file( 'image' );
        if ( $img ) {
            $imgName = time() . '-' . Str::slug( pathinfo( $img->getClientOriginalName(), PATHINFO_FILENAME ), '-' ) . '.' . $img->getClientOriginalExtension();
            $imgPath = $img->storeAs( 'uploads/items', $imgName, 'public' );

            $request->merge( [ 'img' => $imgPath ] );
        }
        $all = Item::orderBy( 'name', 'asc' )->get();

        try {
            $slug = Str::slug( $request->name, '-' );
            $request->merge( [ 'slug' => $slug ] );

            $single->update( $request->except( 'currentID', 'method', 'image', 'resource_ids', 'resource_quantity' ) );;
            $message = 'Обновление выполнено успешно!';
        } catch ( QueryException $exception ) {
            $message = $exception->errorInfo[ self::QUERY_EXCEPTION_READABLE_MESSAGE ];
        }

        $request->session()->flash( 'message', $message );

        if ( $method == 'Применить' ) {
            return Redirect::to( route( $this->name . 'edit', [ 'id' => $single->id ] ) );
        }

        return Redirect::to( route( $this->name . 'index' ) );


    }


    public function destroy( int $id ) {
        $single = Item::findOrFail( $id );

        try {
            $single->delete();
            $message = 'Удаление выполнено успешно!';
        } catch ( QueryException $exception ) {
            $message = $exception->errorInfo[ self::QUERY_EXCEPTION_READABLE_MESSAGE ];
        }

        Session::flash( 'message', $message );

        return Redirect::to( route( $this->name . 'index' ) );
    }
}
