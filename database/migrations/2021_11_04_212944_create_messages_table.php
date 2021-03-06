<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'messages', function ( Blueprint $table ) {
            $table->id();
            $table->text( 'text' );
            $table->boolean( 'is_read' )->default( 0 );
            $table->bigInteger( 'user_id' )->unsigned();
            $table->foreign( 'user_id' )->references( 'id' )->on( 'users' )->onDelete( 'cascade' );
            $table->bigInteger( 'conversation_id' )->unsigned();
            $table->foreign( 'conversation_id' )->references( 'id' )->on( 'conversations' )->onDelete( 'cascade' );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'messages' );
    }
}
