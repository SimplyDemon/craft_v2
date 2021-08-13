<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'items', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'name' )->unique();
            $table->string( 'slug' )->unique();
            $table->bigInteger( 'crystal_count' )->nullable();
            $table->bigInteger( 'cost' )->nullable();
            $table->bigInteger( 'rare_cost' )->nullable();
            $table->string( 'img' ); //url
            $table->bigInteger( 'category_id' )->unsigned();
            $table->foreign( 'category_id' )->references( 'id' )->on( 'categories' )->onDelete( 'cascade' );
            $table->enum( 'grade', [ 'none', 'NG', 'C', 'B', 'A', 'S', 'S-80', 'S-84' ] )->default( 'none' );
            $table->timestamps();

            //Weapon stats
            $table->bigInteger( 'p_attack' )->nullable();
            $table->bigInteger( 'm_attack' )->nullable();
            $table->bigInteger( 'soul_shots_count' )->default( 1 )->nullable();
            $table->bigInteger( 'spirit_shots_count' )->default( 1 )->nullable();

            //Armor stats
            $table->bigInteger( 'p_def' )->nullable();

            //Jewel stats
            $table->bigInteger( 'm_def' )->nullable();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'items' );
    }
}
