<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class SearchController extends Controller {
    protected string $folderPath = 'pages.search.';

    public function index( Request $request ) {
        $search  = $request->input( 's' );
        $search  = $this->sanitizeString( $search );
        $recipes = $this->getResults( $search );

        return view( $this->folderPath . 'index', [
            'recipes' => $recipes,
            'search'  => $search,
            'title'   => 'Поиск',
        ] );
    }

    public function ajax( Request $request ) {
        $search  = $request->input( 's' );
        $search  = $this->sanitizeString( $search );
        $recipes = $this->getResults( $search );
        if ( ! empty( $recipes ) ) {
            foreach ( $recipes as &$recipe ) {
                $recipe->jsUrl = route( 'recipes.show', [ 'id' => $recipe->id ] );
                $recipe->jsImg = asset( 'storage' ) . '/' . $recipe->img;
            }
        }


        return $recipes;
    }

    protected function sanitizeString( $string ) {
        $string = strip_tags( $string );
        $string = addslashes( $string );

        return filter_var( $string, FILTER_SANITIZE_STRING );
    }

    protected function getResults( $search ) {
        if ( ! $search ) {
            return [];
        }
        $recipes = Recipe::where( 'name', 'like', "%$search%" )->orWhere( 'keywords', 'like', "%$search%" )->get();


        $explodedSearch = explode( ' ', $search );

        if ( is_array( $explodedSearch ) && count( $explodedSearch ) > 0 ) {
            $searchCollection = Recipe::orderBy( 'name', 'asc' );
            foreach ( $explodedSearch as $word ) {
                $word = trim( $word );
                if ( strlen( $word ) > 0 ) {
                    $searchCollection = $searchCollection->where( 'keywords', 'like', "%$word%" );
                }
            }

            $keywordResults = $searchCollection->get();
            if ( ! $keywordResults->isEmpty() ) {
                $recipes = $recipes->merge( $keywordResults );
            }
        }

        return $recipes;
    }
}
