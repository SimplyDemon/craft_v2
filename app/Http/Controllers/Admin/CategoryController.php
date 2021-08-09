<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddCategory;
use App\Http\Requests\EditCategory;
use App\Models\Category;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CategoryController extends Controller {

    protected $name = 'categories.';
    protected $folderPath = 'admin.pages.categories.';
    const QUERY_EXCEPTION_READABLE_MESSAGE = 2;



    public function index() {
        $all = Category::orderBy( 'name', 'asc' )->whereNull( 'category_id' )->get();

        $i = 0;
        foreach ( $all as $item ) {
            $subCategories = Category::orderBy( 'name', 'asc' )->where( 'category_id', $item->id )->get();
            if ( $subCategories ) {
                $all[ $i ]['subCategories'] = $subCategories;
            }

            $i ++;
        }

        return view( $this->folderPath . 'index', [ 'all' => $all ] );
    }

    public function create() {
        $all = Category::orderBy( 'name', 'asc' )->whereNull( 'category_id' )->get();

        return view( $this->folderPath . 'create', [ 'all' => $all ] );
    }

    public function store( AddCategory $request ) {
        $slug = Str::slug( $request->name, '-' );

        $request->merge( [ 'slug' => $slug ] );

        try {
            Category::create( $request->all() );
            $message = 'Добавление выполнено успешно!';
        } catch ( QueryException $exception ) {
            $message = $exception->errorInfo[ self::QUERY_EXCEPTION_READABLE_MESSAGE ];
        }

        $request->session()->flash( 'message', $message );

        return Redirect::to( route( $this->name . 'create' ) );
    }


    public function show( int $id ) {
        $single = Category::findOrFail( $id );

        return view( $this->folderPath . 'show', [ 'single' => $single ] );
    }


    public function edit( int $id ) {
        $single = Category::findOrFail( $id );
        $all    = Category::orderBy( 'name', 'asc' )->get();

        return view( $this->folderPath . 'edit', [ 'single' => $single, 'all' => $all, 'id' => $id ] );
    }


    public function update( EditCategory $request, int $id ) {
        $method = $request->input( 'method' );
        $single = Category::findOrFail( $id );
        $all    = Category::orderBy( 'name', 'asc' )->get();

        try {
            $slug = Str::slug( $request->name, '-' );
//			$category_id = $request->category_id;
//			if ( empty( $category_id ) ) {
//				$category_id = null;
//			}
            $request->merge( [ 'slug' => $slug ] );
//			$request->merge( [ 'category_id' => $category_id ] );
            $single->update( $request->except( 'currentID', 'method' ) );
            $message = 'Обновление выполнено успешно!';
        } catch ( QueryException $exception ) {
            $message = $exception->errorInfo[ self::QUERY_EXCEPTION_READABLE_MESSAGE ];
        }

        $request->session()->flash( 'message', $message );

        if ( $method == 'Применить' ) {
            return Redirect::to( route( $this->name . 'edit', [ 'all' => $all, 'id' => $id ] ) );
        }

        return Redirect::to( route( $this->name . 'index' ) );


    }


    public function destroy( int $id ) {
        $single = Category::findOrFail( $id );

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
