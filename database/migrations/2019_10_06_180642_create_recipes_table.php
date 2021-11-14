<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'recipes', function ( Blueprint $table ) {
            $table->bigIncrements( 'id' );
            $table->string( 'name' )->unique();
            $table->string( 'slug' )->unique();
            $table->integer( 'price_sell' )->nullable(); // set price sell as admin for all users, if they don't inserted their price
            $table->integer( 'price_buy' )->nullable(); // set price buy as admin for all users, if they don't inserted their price
            $table->integer( 'description' )->nullable();
            $table->string( 'img' )->nullable(); //url
            $table->enum( 'percent', [ '60', '70', '100' ] )->default( '100' ); //chance to craft
            $table->enum( 'grade', [ 'none', 'NG', 'D', 'C', 'B', 'A', 'S', 'S-80', 'S-84' ] )->default( 'none' );
            $table->bigInteger( 'category_id' )->unsigned();
            $table->foreign( 'category_id' )->references( 'id' )->on( 'categories' )->onDelete( 'cascade' );
            $table->timestamps();
            $table->softDeletes();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'recipes' );
    }
}
