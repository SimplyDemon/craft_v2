<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRecipesTableAddLvl extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table( 'recipes', function ( Blueprint $table ) {
            $table->text( 'lvl' )->nullable(); // recipe lvl for calculate chance of masterwork and double craft
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table( 'recipes', function ( Blueprint $table ) {
            $table->dropColumn( 'lvl' );
        } );
    }
}
