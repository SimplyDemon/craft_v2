<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotResourceUserTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'resource_user', function ( Blueprint $table ) {
            $table->bigIncrements( 'id' );
            $table->bigInteger( 'user_id' )->unsigned();
            $table->bigInteger( 'resource_id' )->unsigned();
            $table->foreign( 'user_id' )->references( 'id' )->on( 'users' )->onDelete( 'cascade' );
            $table->foreign( 'resource_id' )->references( 'id' )->on( 'resources' )->onDelete( 'cascade' );
            $table->bigInteger( 'price' );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'resource_user' );
    }
}
