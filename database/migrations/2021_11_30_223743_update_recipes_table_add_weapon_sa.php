<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRecipesTableAddWeaponSa extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table( 'recipes', function ( Blueprint $table ) {
            $table->integer( 'sa_lvl' )->nullable();
            $table->integer( 'sa_gem_count' )->nullable();
            $table->string( 'sa_red_name' )->nullable();
            $table->text( 'sa_red_description' )->nullable();
            $table->string( 'sa_green_name' )->nullable();
            $table->text( 'sa_green_description' )->nullable();
            $table->string( 'sa_blue_name' )->nullable();
            $table->text( 'sa_blue_description' )->nullable();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table( 'recipes', function ( Blueprint $table ) {
            $table->integer( 'crystals_count' )->nullable();
        } );
    }
}
