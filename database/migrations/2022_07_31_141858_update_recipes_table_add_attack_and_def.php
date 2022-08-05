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
            $table->boolean('is_two_hands')->default(0); /* Only for physic weapons */
            $table->integer('m_attack')->nullable();
            $table->integer('p_attack')->nullable();
            $table->text('favorite_text')->nullable(); /* Some weapons are favorite like Great Sword for summoners */

            /* For armor */
            $table->integer('p_def')->nullable();

            /* For jewelry */
            $table->integer('m_def')->nullable();

            /* Item age for calculate fame for pvp item  */
            $table->enum('age', [
                's',
                'dynasty',
                'moirai',
                'vesper',
                'vorpal',
                'elegia',
            ])->nullable();

            /* For vesper armor */
            $table->integer('noble_stones_for_upgrade')->nullable();
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
            $table->dropColumn('is_mage');
            $table->dropColumn('is_two_hands');
            $table->dropColumn('m_attack');
            $table->dropColumn('p_attack');
            $table->dropColumn('favorite_text');
            $table->dropColumn('p_def');
            $table->dropColumn('m_def');
            $table->dropColumn('age');
            $table->dropColumn('noble_stones_for_upgrade');
        });
    }
};
