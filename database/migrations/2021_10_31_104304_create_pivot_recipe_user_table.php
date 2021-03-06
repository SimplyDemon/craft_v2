<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotRecipeUserTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'recipe_user', function ( Blueprint $table ) {
            $table->bigIncrements( 'id' );
            $table->bigInteger( 'user_id' )->unsigned();
            $table->bigInteger( 'recipe_id' )->unsigned();
            $table->foreign( 'user_id' )->references( 'id' )->on( 'users' )->onDelete( 'cascade' );
            $table->foreign( 'recipe_id' )->references( 'id' )->on( 'recipes' )->onDelete( 'cascade' );
            $table->bigInteger( 'price_buy' )->nullable();
            $table->bigInteger( 'price_sell' )->nullable();
            $table->bigInteger( 'quantity' )->nullable();
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'recipe_user' );
    }
}
