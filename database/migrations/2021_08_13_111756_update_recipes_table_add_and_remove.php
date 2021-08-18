<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRecipesTableAddAndRemove extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table( 'recipes', function ( Blueprint $table ) {
            $table->bigInteger( 'item_id' )->nullable()->unsigned();
            $table->foreign( 'item_id' )->references( 'id' )->on( 'items' )->onDelete( 'cascade' );

            $table->dropForeign( [ 'category_id' ] );
            $table->dropColumn( 'category_id' );

            $table->dropColumn( 'grade' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table( 'recipes', function ( Blueprint $table ) {
            $table->dropForeign( [ 'item_id' ] );
            $table->dropColumn( 'item_id' );

            $table->bigInteger( 'category_id' )->nullable()->unsigned();
            $table->foreign( 'category_id' )->references( 'id' )->on( 'categories' )->onDelete( 'cascade' );

            $table->enum( 'grade', [ 'none', 'NG', 'C', 'B', 'A', 'S', 'S-80', 'S-84' ] )->default( 'none' );
        } );
    }
}
