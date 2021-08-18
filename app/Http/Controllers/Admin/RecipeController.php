<?php

namespace App\Http\Controllers\Admin;

use App\Http\Helpers\Enum;
use App\Http\Requests\AddRecipe;
use App\Http\Requests\EditRecipe;
use App\Models\Category;
use App\Models\Item;
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
        $all        = Recipe::all();

        $i = 0;
        foreach ( $categories as $item ) {
            $subCategories = Category::orderBy( 'name', 'asc' )->where( 'category_id', $item->id )->get();
            if ( $subCategories ) {
                $categories[ $i ]['subCategories'] = $subCategories;
            }

            $i ++;
        }


        return view( $this->folderPath . 'index', [ 'all' => $all, 'categories' => $categories ] );
    }

    public function create() {
        $percentValues = Enum::getPossibleValues( 'recipes', 'percent' );
        $items         = Item::all();
        $resources     = Resource::orderBy( 'name', 'asc' )->get();

        return view( $this->folderPath . 'create', [
            'percentValues' => $percentValues,
            'resources'     => $resources,
            'items'         => $items,
        ] );
    }

    public function store( AddRecipe $request ) {
        //if its resource or item recipe don't need put name, just get name from resource id
        if ( $request->resource_id ) {
            $resourceName = $request->name = Resource::findOrFail( $request->resource_id )->name;
            $request->merge( [ 'name' => $resourceName ] );
        } else if ( $request->item_id ) {
            $itemName = $request->name = Item::findOrFail( $request->item_id )->name;
            $request->merge( [ 'name' => $itemName ] );
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
        $single = Recipe::findOrFail( $id );

        return view( $this->folderPath . 'show', [ 'single' => $single, 'id' => $single->id ] );
    }


    public function edit( int $id ) {
        $single = Recipe::findOrFail( $id );

        $percentValues = Enum::getPossibleValues( 'recipes', 'percent' );

        $recipeResources = DB::table( 'recipe_resource' )->where( [
            [ 'recipe_id', '=', $single->id ],
        ] )->get();

        $items     = Item::all();
        $resources = Resource::orderBy( 'name', 'asc' )->get();

        return view( $this->folderPath . 'edit', [
            'single'          => $single,
            'percentValues'   => $percentValues,
            'resources'       => $resources,
            'recipeResources' => $recipeResources,
            'items'           => $items,
        ] );
    }


    public function update( EditRecipe $request, int $id ) {
        $method             = $request->input( 'method' );
        $resourceIDs        = $request->input( 'resource_ids' );
        $resourceQuantities = $request->input( 'resource_quantity' );

        $single = Recipe::findOrFail( $id );

        //if its resource or item recipe don't need put name, just get name from resource id
        if ( $request->resource_id && $single->resource_id != $request->resource_id ) {
            $resourceName = $request->name = Resource::findOrFail( $request->resource_id )->name;
            $request->merge( [ 'name' => $resourceName ] );
        } else if ( $request->item_id && $single->item_id != $request->item_id ) {
            $itemName = $request->name = Item::findOrFail( $request->item_id )->name;
            $request->merge( [ 'name' => $itemName ] );
        }

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
            return Redirect::to( route( $this->name . 'edit', [ 'id' => $single->id ] ) );
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
