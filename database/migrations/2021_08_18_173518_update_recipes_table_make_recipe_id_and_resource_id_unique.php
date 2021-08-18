<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRecipesTableMakeRecipeIdAndResourceIdUnique extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table( 'recipes', function ( Blueprint $table ) {
            $table->bigInteger( 'item_id' )->nullable()->unsigned()->unique()->change();
            $table->bigInteger( 'resource_id' )->nullable()->unsigned()->unique()->change();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table( 'recipes', function ( Blueprint $table ) {
            $table->bigInteger( 'item_id' )->nullable()->unsigned()->change();
            $table->bigInteger( 'resource_id' )->nullable()->unsigned()->change();
        } );
    }
}
