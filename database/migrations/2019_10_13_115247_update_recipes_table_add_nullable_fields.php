<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRecipesTableAddNullableFields extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table( 'recipes', function ( Blueprint $table ) {
            $table->bigInteger( 'resource_id' )->unsigned()->nullable();
            $table->foreign( 'resource_id' )->references( 'id' )->on( 'resources' )->onDelete( 'cascade' );
            $table->string( 'craft_cost' )->nullable();
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
            $table->dropColumn( 'craft_cost' );
        } );
    }
}
