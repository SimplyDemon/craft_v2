<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'resources', function ( Blueprint $table ) {
            $table->bigIncrements( 'id' );
            $table->string( 'name' )->unique();
            $table->string( 'slug' )->unique();
            $table->integer( 'price_buy' )->nullable(); // set buy price  as admin for all users, if they don't inserted their price
            $table->integer( 'price_sell' )->nullable(); // set sell price  as admin for all users, if they don't inserted their price
            $table->string( 'img' ); //url
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
        Schema::dropIfExists( 'resources' );
    }
}
