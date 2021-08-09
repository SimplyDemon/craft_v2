<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRecipesTableMakeFieldsNullable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table( 'recipes', function ( Blueprint $table ) {
            $table->dropForeign( [ 'resource_id' ] );
            $table->dropColumn( 'resource_id' );
            $table->dropColumn( 'craft_cost' );


        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table( 'recipes', function ( Blueprint $table ) {
            $table->bigInteger( 'resource_id' )->unsigned();
            $table->foreign( 'resource_id' )->references( 'id' )->on( 'resources' )->onDelete( 'cascade' );
            $table->string( 'craft_cost' );
        } );
    }
}
