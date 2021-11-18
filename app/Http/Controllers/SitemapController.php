<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Recipe;
use Illuminate\Http\Request;


class SitemapController extends Controller {

    public function index( Request $r ) {

        $recipes        = Recipe::orderBy( 'id', 'desc' )->get();
        $pageLastMod    = '2021-11-17T20:00:00Z';
        $pageChangeFreq = 'weekly';
        $pagePriority   = '0.7';

        $routes = [
            'index',
            'search',
            'recipes.index',
            'login',
            'register',
        ];

        $pageRoutes = [];

        foreach ( $routes as $route ) {
            $pageRoutes[] = [
                'loc'        => route( $route ),
                'lastmod'    => $pageLastMod,
                'changefreq' => $pageChangeFreq,
                'priority'   => $pagePriority,
            ];
        }


        $contents = view( 'pages.sitemap.index', [
            'recipes'    => $recipes,
            'pageRoutes' => $pageRoutes,
        ] );

        return response( $contents )->header( 'Content-Type', 'text/xml' );

    }
}
