<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRecipesTableRemoveNameAndSlug extends Migration {
    /**
     * Get that data from chosen resource or item, don't need duplicate it and in some case it can be deprecated
     *
     * @return void
     */
    public function up() {
        Schema::table( 'recipes', function ( Blueprint $table ) {
            $table->dropColumn( 'name' );
            $table->dropColumn( 'slug' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table( 'recipes', function ( Blueprint $table ) {
            $table->string( 'name' )->unique();
            $table->string( 'slug' )->unique();
        } );
    }
}
