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
        $categories      = Category::orderBy( 'name', 'asc' )->whereNull( 'category_id' )->get();
        $resourceRecipes = Recipe::orderBy( 'id', 'asc' )->whereNotNull( 'resource_id' )->get();
        $itemRecipes     = Recipe::orderBy( 'id', 'asc' )->whereNotNull( 'item_id' )->get();

        $groupedItemRecipes = [];

        foreach ( $itemRecipes as $itemRecipe ) {
            $categoryId                          = $itemRecipe->craft_item->category_id;
            $groupedItemRecipes[ $categoryId ][] = $itemRecipe;
        }

        $i = 0;
        foreach ( $categories as $item ) {
            $subCategories = Category::orderBy( 'name', 'asc' )->where( 'category_id', $item->id )->get();
            if ( $subCategories ) {
                $categories[ $i ]['subCategories'] = $subCategories;
            }

            $i ++;
        }


        return view( $this->folderPath . 'index', [
            'resourceRecipes'    => $resourceRecipes,
            'categories'         => $categories,
            'groupedItemRecipes' => $groupedItemRecipes,
        ] );
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
        $resourceIDs        = $request->input( 'resource_ids' );
        $resourceQuantities = $request->input( 'resource_quantity' );

        try {
            $recipe = Recipe::create( $request->except( 'resource_ids', 'resource_quantity' ) );

            if ( $resourceIDs && is_array( $resourceIDs ) ) {
                $i = 0;
                foreach ( $resourceIDs as $resourceID ) {
                    $recipe->resources()->attach( $resourceID, [ 'resource_quantity' => $resourceQuantities[ $i ] ] );

                    $i ++;
                }
            }

            $url     = route( $this->name . 'show', [ 'id' => $recipe->id ] );
            $message = "Добавление выполнено успешно! Нажмите <a href='{$url}'>сюда</a> что бы посмотреть";
        } catch ( QueryException $exception ) {
            $message = $exception->errorInfo[ self::QUERY_EXCEPTION_READABLE_MESSAGE ];
        }

        $request->session()->flash( 'message', $message );

        return Redirect::to( route( $this->name . 'create' ) );
    }


    public function show( int $id ) {
        $single = Recipe::findOrFail( $id );

        return view( $this->folderPath . 'show', [
            'single' => $single,
            'id'     => $single->id,
        ] );
    }


    public function edit( int $id ) {
        $single          = Recipe::findOrFail( $id );
        $percentValues   = Enum::getPossibleValues( 'recipes', 'percent' );
        $recipeResources = $single->resources;
        $items           = Item::all();
        $resources       = Resource::orderBy( 'name', 'asc' )->get();

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

        try {
            $single->update( $request->except( 'currentID', 'method', 'resource_ids', 'resource_quantity' ) );;
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
