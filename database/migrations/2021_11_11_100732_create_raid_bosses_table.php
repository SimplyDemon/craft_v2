<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaidBossesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'raid_bosses', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'name' )->unique();
            $table->string( 'status_respawn' );
            $table->string( 'timer_status' );
            $table->text( 'description' )->nullable();
            $table->text( 'target' )->nullable();
            $table->integer( 'respawn_base' ); // in hours
            $table->integer( 'respawn_dynamic' ); // in hours
            $table->timestamp( 'respawn_start' )->nullable();
            $table->timestamp( 'respawn_end' )->nullable();
            $table->timestamp( 'timer_date' )->nullable();
            $table->enum( 'type', [
                    'subclass',
                    'epic',
                ]
            )->default( 'subclass' );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'raid_boss_respawns' );
    }
}
