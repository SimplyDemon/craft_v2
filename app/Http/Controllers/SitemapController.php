<?php namespace App\Http\Controllers;

use App\Models\RaidBoss;
use App\Models\Recipe;
use Illuminate\Http\Request;


class SitemapController extends Controller {

    public function index( Request $r ) {
        $recipes        = Recipe::orderBy( 'id', 'desc' )->get();
        $pageChangeFreq = 'weekly';
        $pagePriority   = '0.7';

        $boss   = RaidBoss::firstOrFail();
        $routes = [
            'index'         => [
                'lastmod' => date( 'c', strtotime( $boss->updated_at ) ),
            ],
            'search'        => [
                'lastmod' => date( 'c', filemtime( resource_path( 'views/pages/search/index.blade.php' ) ) ),
            ],
            'recipes.index' => [
                'lastmod' => date( 'c', filemtime( resource_path( 'views/pages/recipes/index.blade.php' ) ) ),
            ],
            'login'         => [
                'lastmod' => date( 'c', filemtime( resource_path( 'views/auth/login.blade.php' ) ) ),
            ],
            'register'      => [
                'lastmod' => date( 'c', filemtime( resource_path( 'views/auth/register.blade.php' ) ) ),
            ],
        ];

        $pageRoutes = [];

        foreach ( $routes as $route => $params ) {
            $pageRoutes[] = [
                'loc'        => route( $route ),
                'lastmod'    => $params['lastmod'],
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
