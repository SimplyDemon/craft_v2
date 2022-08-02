<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recipes', function (Blueprint $table) {
            /* For weapon */
            $table->boolean('is_mage')->default(0);
            $table->boolean('is_two_hand')->default(0); /* For calc weapon enchant  */
            $table->integer('m_attack')->nullable();
            $table->integer('p_attack')->nullable();
            $table->text('favorite_text')->nullable(); /* Some weapons are favorite like Great Sword for summoners */

            /* For armor */
            $table->integer('p_def')->nullable();

            /* For jewelry */
            $table->integer('m_def')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipes', function (Blueprint $table) {
            $table->dropColumn('is_respawn_started');
        });
    }
};
