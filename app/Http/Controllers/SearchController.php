<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class SearchController extends Controller {
    protected $folderPath = 'pages.search.';

    public function index( Request $request ) {
        $search  = $request->input( 's' );
        $search  = $this->sanitizeString( $search );
        $recipes = [];
        if ( $search ) {
            $recipes = Recipe::where( 'name', 'like', "%$search%" )->get();
        }

        return view( $this->folderPath . 'index', [
            'recipes' => $recipes,
            'search'  => $search,
        ] );
    }

    protected function sanitizeString( $string ) {
        $string = strip_tags( $string );
        $string = addslashes( $string );

        return filter_var( $string, FILTER_SANITIZE_STRING );
    }
}
