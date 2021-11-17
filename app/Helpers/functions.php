<?php

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

function seederAddRecipe( string $name, string $imagePath, int $price, string $grade, int $categoryId, int $craftCost = 0, string $percent = '60', $masterworkDescription = null, $masterworkName = null, $count = 1, $isResource = false ) {
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
        'img'                    => copyFile( "image/$imagePath/" . $imageName . '.png', "app/public/uploads/$imagePath/" ),
        'category_id'            => $categoryId,
        'craft_cost'             => $craftCost,
        'masterwork_description' => $masterworkDescription,
        'masterwork_name'        => $masterworkName,
        'craft_count'            => $count,
        'resource_id'            => $resourceId,
    ] );
}

function getCurrentTimeInUnix() {
    return time();
}
