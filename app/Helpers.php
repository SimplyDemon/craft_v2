<?php

use Illuminate\Support\Facades\File;

/**
 * Copy file from resources path to another directory
 *
 * @param string $filePath Relative path to file from resource path
 * @param string $pathTo Relative path to directory from storage path
 *
 * @return string|bool Return false in error case and relative path if ok
 */
function copyFile( string $filePath, string $pathTo ) {
    $path         = resource_path() . $filePath;
    $baseName     = File::basename( $path );
    $filePathTo   = storage_path( $pathTo . $baseName );
    $explodedPath = explode( '/public/', $filePathTo );

    if ( ! isset( $explodedPath[1] ) || empty( $explodedPath[1] ) ) {
        return false;
    }

    File::copy( $path, $filePathTo );

    return $explodedPath[1];
}
