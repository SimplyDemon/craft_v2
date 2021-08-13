<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRecipesTableAddResourceId extends Migration {
    /**
     * For case if it recipe of resource
     *
     * @return void
     */
    public function up() {
        Schema::table( 'recipes', function ( Blueprint $table ) {
            $table->bigInteger( 'resource_id' )->unsigned()->nullable();
            $table->foreign( 'resource_id' )->references( 'id' )->on( 'resources' )->onDelete( 'cascade' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table( 'recipes', function ( Blueprint $table ) {
            $table->dropForeign( [ 'resource_id' ] );
            $table->dropColumn( 'resource_id' );
        } );
    }
}
