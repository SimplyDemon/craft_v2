<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRaidBossesTableAddIsRespawnStartedColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('raid_bosses', function (Blueprint $table) {
            $table->boolean('is_respawn_started')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('raid_bosses', function (Blueprint $table) {
            $table->dropColumn('is_respawn_started');
        });
    }
}
