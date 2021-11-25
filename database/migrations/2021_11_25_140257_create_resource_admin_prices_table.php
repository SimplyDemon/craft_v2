<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourceAdminPricesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'resource_admin_prices', function ( Blueprint $table ) {
            $table->id();
            $table->integer( 'price_buy' )->nullable(); // set buy price  as admin for all users, if they don't inserted their price
            $table->integer( 'price_sell' )->nullable(); // set sell price  as admin for all users, if they don't inserted their price
            $table->bigInteger( 'resource_id' )->unsigned();
            $table->foreign( 'resource_id' )->references( 'id' )->on( 'resources' )->onDelete( 'cascade' );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'resource_admin_prices' );
    }
}
