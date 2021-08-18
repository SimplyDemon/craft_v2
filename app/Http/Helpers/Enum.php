<?php


namespace App\Http\Helpers;


use Illuminate\Support\Facades\DB;

class Enum {
    public static function getPossibleValues( $dbName, $fieldName ) {
        $values = [];
        $column = DB::select( DB::raw( 'SHOW COLUMNS FROM ' . $dbName . ' WHERE Field = "' . $fieldName . '"' ) );
        if ( ! isset( $column[0] ) || empty( $column[0] ) ) {
            return $values;
        }

        $type = $column[0]->Type;
        preg_match( '/^enum\((.*)\)$/', $type, $matches );
        $values = [];
        foreach ( explode( ',', $matches[1] ) as $value ) {
            $values[] = trim( $value, "'" );
        }

        return $values;
    }
}
