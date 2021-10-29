<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddResourceTypeColumnToResourcesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table( 'resources', function ( Blueprint $table ) {
            $table->enum( 'type', [
                'resource',
                'weapon',
                'armor',
                'jewelry',
                'shield',
                'sigil',
            ] )->default( 'resource' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table( 'resources', function ( Blueprint $table ) {
            //
        } );
    }
}
