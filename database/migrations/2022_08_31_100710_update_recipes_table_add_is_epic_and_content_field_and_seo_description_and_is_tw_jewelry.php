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
            $table->boolean('is_epic')->default(0);
            $table->boolean('is_tw')->default(0);
            $table->text('content')->nullable();
            $table->text('description_seo')->nullable();
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
            $table->dropColumn('is_epic');
            $table->dropColumn('is_tw');
            $table->dropColumn('content');
            $table->dropColumn('description_seo');
        });
    }
};
