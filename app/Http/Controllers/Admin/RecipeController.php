<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddRecipe;
use App\Http\Requests\EditRecipe;
use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class RecipeController extends Controller {
    protected $name = 'recipes.';
    protected $folderPath = 'admin.pages.recipes.';
    const QUERY_EXCEPTION_READABLE_MESSAGE = 2;


    public function index() {
        $categories = Category::orderBy( 'name', 'asc' )->whereNull( 'category_id' )->get();


        return view( $this->folderPath . 'index', [ 'categories' => $categories ] );
    }

    public function create() {
        $percentTypes = DB::select( DB::raw( 'SHOW COLUMNS FROM recipes WHERE Field = "percent"' ) )[0]->Type;
        $gradeTypes   = DB::select( DB::raw( 'SHOW COLUMNS FROM recipes WHERE Field = "grade"' ) )[0]->Type;

        preg_match( '/^enum\((.*)\)$/', $percentTypes, $matches );
        $percentValues = [];
        foreach ( explode( ',', $matches[1] ) as $value ) {
            $percentValues[] = trim( $value, "'" );
        }

        preg_match( '/^enum\((.*)\)$/', $gradeTypes, $matches );
        $gradeValues = [];
        foreach ( explode( ',', $matches[1] ) as $value ) {
            $gradeValues[] = trim( $value, "'" );
        }


        $categories = Category::orderBy( 'name', 'asc' )->get();
        $resources  = Resource::orderBy( 'name', 'asc' )->get();


        return view( $this->folderPath . 'create', [
            'percentValues' => $percentValues,
            'gradeValues'   => $gradeValues,
            'categories'    => $categories,
            'resources'     => $resources,
        ] );
    }

    public function store( AddRecipe $request ) {
        //if its resource recipe don't need put name, just get name from resource id
        if ( $request->resource_id ) {
            $resourceName = $request->name = Resource::findOrFail( $request->resource_id )->name;
            $request->merge( [ 'name' => $resourceName ] );
        }


        $slug = Str::slug( $request->name, '-' );

        $request->merge( [ 'slug' => $slug ] );


        try {
            $recipe = Recipe::create( $request->except( 'image' ) );

            $url     = route( $this->name . 'show', [ 'single' => $recipe, 'id' => $recipe->id ] );
            $message = "Добавление выполнено успешно! Нажмите <a href='{$url}'>сюда</a> что бы посмотреть";
        } catch ( QueryException $exception ) {
            $message = $exception->errorInfo[ self::QUERY_EXCEPTION_READABLE_MESSAGE ];
        }

        $request->session()->flash( 'message', $message );

        return Redirect::to( route( $this->name . 'create' ) );
    }


    public function show( int $id ) {
        $single          = Recipe::findOrFail( $id );
        $recipeResources = DB::table( 'recipe_resource' )->where( [
            [ 'recipe_id', '=', $single->id ],
        ] )->get();

        return view( $this->folderPath . 'show', [
            'single'          => $single,
            'id'              => $single->id,
            'recipeResources' => $recipeResources,
        ] );
    }


    public function edit( int $id ) {
        $single       = Recipe::findOrFail( $id );
        $percentTypes = DB::select( DB::raw( 'SHOW COLUMNS FROM recipes WHERE Field = "percent"' ) )[0]->Type;
        $gradeTypes   = DB::select( DB::raw( 'SHOW COLUMNS FROM recipes WHERE Field = "grade"' ) )[0]->Type;

        preg_match( '/^enum\((.*)\)$/', $percentTypes, $matches );
        $percentValues = [];
        foreach ( explode( ',', $matches[1] ) as $value ) {
            $percentValues[] = trim( $value, "'" );
        }

        preg_match( '/^enum\((.*)\)$/', $gradeTypes, $matches );
        $gradeValues = [];
        foreach ( explode( ',', $matches[1] ) as $value ) {
            $gradeValues[] = trim( $value, "'" );
        }


        $recipeResources = DB::table( 'recipe_resource' )->where( [
            [ 'recipe_id', '=', $single->id ],
        ] )->get();

        $categories = Category::orderBy( 'name', 'asc' )->get();
        $resources  = Resource::orderBy( 'name', 'asc' )->get();

        return view( $this->folderPath . 'edit', [
            'single'          => $single,
            'percentValues'   => $percentValues,
            'gradeValues'     => $gradeValues,
            'categories'      => $categories,
            'resources'       => $resources,
            'recipeResources' => $recipeResources,
        ] );
    }


    public function update( EditRecipe $request, int $id ) {
        $method             = $request->input( 'method' );
        $resourceIDs        = $request->input( 'resource_ids' );
        $resourceQuantities = $request->input( 'resource_quantity' );

        $single = Recipe::findOrFail( $id );


        //default delete all recipe values and write again its much better then make 1000 checks
        DB::table( 'recipe_resource' )->where( [
            [ 'recipe_id', '=', $single->id ],
        ] )->delete();

        $i = 0;
        if ( $resourceIDs && is_array( $resourceIDs ) ) {
            foreach ( $resourceIDs as $resourceID ) {
                $single->resources()->attach( $resourceID, [ 'resource_quantity' => $resourceQuantities[ $i ] ] );

                $i ++;
            }
        }

        $all = Recipe::orderBy( 'name', 'asc' )->get();

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
            return Redirect::to( route( $this->name . 'edit', [ 'single' => $single, 'all' => $all ] ) );
        }

        return Redirect::to( route( $this->name . 'index' ) );


    }


    public function destroy( int $id ) {
        $single = Recipe::findOrFail( $id );

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
