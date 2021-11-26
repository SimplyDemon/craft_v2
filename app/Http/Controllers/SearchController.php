<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class SearchController extends Controller {
    protected string $folderPath = 'pages.search.';

    public function index( Request $request ) {
        $search  = $request->input( 's' );
        $search  = $this->sanitizeString( $search );
        $results = $this->getResults( $search );

        return view( $this->folderPath . 'index', [
            'recipes' => $results['recipes'],
            'search'  => $search,
            'title'   => 'Поиск',
        ] );
    }

    public function ajax( Request $request ) {
        $search = $request->input( 's' );
        $search = $this->sanitizeString( $search );
        $result = $this->getResults( $search, true );
        if ( ! empty( $result['recipes'] ) ) {
            foreach ( $result['recipes'] as &$recipe ) {
                $recipe->jsUrl = route( 'recipes.show', [ 'id' => $recipe->id ] );
                $recipe->jsImg = asset( 'storage' ) . '/' . $recipe->img;
            }
        }


        return $result;
    }

    protected function sanitizeString( $string ) {
        $string = strip_tags( $string );
        $string = addslashes( $string );

        return filter_var( $string, FILTER_SANITIZE_STRING );
    }

    protected function getResults( $search, $isAjax = false ) {
        $hasMoreResults           = false;
        $result                   = [];
        $result['recipes']        = [];
        $result['hasMoreResults'] = $hasMoreResults;
        if ( ! $search ) {
            return [];
        }

        $recipes        = Recipe::where( 'name', 'like', "%$search%" )->orWhere( 'keywords', 'like', "%$search%" )->orderBy( 'grade', 'desc' )->get();
        $explodedSearch = explode( ' ', $search );
        if ( is_array( $explodedSearch ) && count( $explodedSearch ) > 0 ) {
            $searchCollection = Recipe::orderBy( 'grade', 'desc' );
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

        if ( $isAjax ) {
            /* Show only 15 items */
            if ( $recipes->count() > 15 ) {
                $recipes                  = $recipes->chunk( 15 )[0];
                $result['hasMoreResults'] = true;
            }
        }
        $result['recipes'] = $recipes;

        return $result;
    }
}
