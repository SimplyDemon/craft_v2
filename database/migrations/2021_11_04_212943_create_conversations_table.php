<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConversationsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'conversations', function ( Blueprint $table ) {
            $table->id();
            $table->bigInteger( 'user_id' )->unsigned();
            $table->foreign( 'user_id' )->references( 'id' )->on( 'users' )->onDelete( 'cascade' );
            $table->string( 'title', '185' );
            $table->enum( 'status', [ 'open', 'close' ] )->default( 'open' );
            $table->boolean( 'is_has_new_messages_for_admin' )->default( 1 );
            $table->boolean( 'is_has_new_messages_for_user' )->default( 0 );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'conversations' );
    }
}
