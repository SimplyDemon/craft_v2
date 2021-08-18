<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateResourcesTableAddType extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table( 'resources', function ( Blueprint $table ) {
            $table->enum( 'type', [
                'regular', // Normal resource which can be only get by spoil or drop
                'craftable', // It also can be  crafted or manored
                'piece', // Don't want make model for piece, just make type for them
            ] )->default( 'regular' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table( 'resources', function ( Blueprint $table ) {
            $table->dropColumn( 'type' );
        } );
    }
}
