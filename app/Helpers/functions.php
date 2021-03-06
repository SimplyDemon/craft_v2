<?php

use App\Models\RaidBoss;
use App\Models\Recipe;
use App\Models\Resource;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

/**
 * Copy file from resources path to another directory
 *
 * @param string $filePath Relative path to file from resource path
 * @param string $pathTo Relative path to directory from storage path
 *
 * @return string|bool Return false in error case and relative path if ok
 */
function copyFile( string $filePath, string $pathTo ) {
    $filePath     = '/' . $filePath;
    $path         = resource_path() . $filePath;
    $baseName     = File::basename( $path );
    $folderPath   = storage_path( $pathTo );
    $filePathTo   = $folderPath . $baseName;
    $explodedPath = explode( '/public/', $filePathTo );
    if ( ! isset( $explodedPath[1] ) || empty( $explodedPath[1] ) ) {
        return false;
    }

    if ( ! file_exists( $folderPath ) ) {
        mkdir( $folderPath, 0777, true );
    }

    File::copy( $path, $filePathTo );

    return $explodedPath[1];
}

function seederAddRecipe(
    string $name,
    string $imagePath,
    int $price,
    string $grade,
    int $categoryId,
    int $craftCost = 0,
    string $percent = '60',
    $masterworkDescription = null,
    $masterworkName = null,
    $count = 1,
    $isResource = false,
    $keywords = null,
    $lvl = null,
    $crystalsCount = null,
    $saLvl = null,
    $saGemCount = null,
    $saRedName = null,
    $saGreenName = null,
    $saBlueName = null,
    $saRedDescription = null,
    $saGreenDescription = null,
    $saBlueDescription = null
) {
    /* case for 100% recipes, don't want copy paste every image B-grade */
    $imageName  = str_replace( ' 100%', '', $name );
    $resourceId = null;
    if ( $isResource ) {
        $resource   = Resource::where( 'name', $name )->firstOrFail();
        $price      = $resource->price_sell;
        $resourceId = $resource->id;
    }

    return Recipe::create( [
        'name'                   => $name,
        'slug'                   => Str::slug( $name, '-' ),
        'price_sell'             => $price,
        'percent'                => $percent,
        'grade'                  => $grade,
        'img'                    => copyFile( "image/{$imagePath}/{$imageName}.webp", "app/public/uploads/{$imagePath}/" ),
        'category_id'            => $categoryId,
        'craft_cost'             => $craftCost,
        'masterwork_description' => $masterworkDescription,
        'masterwork_name'        => $masterworkName,
        'craft_count'            => $count,
        'resource_id'            => $resourceId,
        'keywords'               => $keywords,
        'lvl'                    => $lvl,
        'crystals_count'         => $crystalsCount,
        'sa_lvl'                 => $saLvl,
        'sa_gem_count'           => $saGemCount,
        'sa_red_name'            => $saRedName,
        'sa_red_description'     => $saRedDescription,
        'sa_green_name'          => $saGreenName,
        'sa_green_description'   => $saGreenDescription,
        'sa_blue_name'           => $saBlueName,
        'sa_blue_description'    => $saBlueDescription,
    ] );
}

function getCurrentTimeInUnix() {
    return time();
}

function generateSitemap() {
    $recipes        = Recipe::orderBy( 'id', 'desc' )->get();
    $resources      = Resource::orderBy( 'name', 'asc' )->where( 'type', 'resource' )->get();
    $pageChangeFreq = 'weekly';
    $pagePriority   = '0.7';

    $boss   = RaidBoss::firstOrFail();
    $routes = [
        'index'           => [
            'lastmod' => date( 'c', strtotime( $boss->updated_at ) ),
        ],
        'search'          => [
            'lastmod' => date( 'c', filemtime( resource_path( 'views/pages/search/index.blade.php' ) ) ),
        ],
        'recipes.index'   => [
            'lastmod' => date( 'c', filemtime( resource_path( 'views/pages/recipes/index.blade.php' ) ) ),
        ],
        'resources.index' => [
            'lastmod' => date( 'c', filemtime( resource_path( 'views/pages/resources/index.blade.php' ) ) ),
        ],
        'login'           => [
            'lastmod' => date( 'c', filemtime( resource_path( 'views/auth/login.blade.php' ) ) ),
        ],
        'register'        => [
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

    $xml = new XMLWriter();
    $xml->openUri( public_path() . '/sitemap.xml' );
    $xml->startDocument( '1.0', 'utf-8' );
    $xml->setIndent( 4 );
    $xml->startElement( 'urlset' );
    $xml->writeAttribute( 'xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9' );
    foreach ( $pageRoutes as $route ) {
        $xml->startElement( 'url' );
        $xml->writeElement( 'loc', $route['loc'] );
        $xml->writeElement( 'lastmod', $route['lastmod'] );
        $xml->writeElement( 'changefreq', $route['changefreq'] );
        $xml->writeElement( 'priority', $route['priority'] );
        $xml->endElement();
    }

    foreach ( $recipes as $recipe ) {
        $xml->startElement( 'url' );
        $xml->writeElement( 'loc', route( 'recipes.show', $recipe->id ) );
        $xml->writeElement( 'lastmod', date( 'c', strtotime( $recipe->updated_at ) ) );
        $xml->writeElement( 'changefreq', 'weekly' );
        $xml->writeElement( 'priority', '0.5' );
        $xml->endElement();
    }

    foreach ( $resources as $resource ) {
        $xml->startElement( 'url' );
        $xml->writeElement( 'loc', route( 'recipes.show', $resource->id ) );
        $xml->writeElement( 'lastmod', date( 'c', strtotime( $resource->updated_at ) ) );
        $xml->writeElement( 'changefreq', 'weekly' );
        $xml->writeElement( 'priority', '0.5' );
        $xml->endElement();
    }

    $xml->endElement();
    $xml->endDocument();
}

function prettifyNumber( int $number ): string {
    return number_format( $number, 0, ' ', ' ' );
}

function getFaqSchemaHtml( $faq ) {
    return view( 'pages.index.faq-schema', [
        'faq' => $faq,
    ]);
}

function getRecipeSchemaHtml($recipe)
{
    return view('pages.recipes.schema', [
        'single' => $recipe,
    ]);
}

/**
 * Access to url with curl and proxy
 *
 * @param  string  $url
 * @param  bool  $isRemoveHeaders  // Remove headers for xml document parse
 *
 * @return bool|string
 * @throws Exception
 */
function curlRequestWithProxy(string $url, bool $isRemoveHeaders = true)
{
    $proxyIp       = env('PROXY_IP');
    $proxyPort     = env('PROXY_PORT');
    $proxyLogin    = env('PROXY_LOGIN');
    $proxyPassword = env('PROXY_PASSWORD');
    if (empty($proxyIp) || empty($proxyPort) || empty($proxyLogin) || empty($proxyPassword)) {
        throw new \Exception('Not enough proxy data');
    }
    $proxy     = "{$proxyIp}:{$proxyPort}";
    $proxyAuth = "{$proxyLogin}:{$proxyPassword}";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_PROXY, $proxy);
    curl_setopt($curl, CURLOPT_PROXYUSERPWD, $proxyAuth);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HEADER, 1);
    $response = curl_exec($curl);
    curl_close($curl);

    if ($isRemoveHeaders) {
        $response = preg_replace('/HTTP(.*)<?xml/s', '<?xml', $response);
    }

    return $response;
}
