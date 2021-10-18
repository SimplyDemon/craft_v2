<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RecipeSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Recipe::create( [
            'name'        => 'Saint Spear',
            'slug'        => Str::slug( 'Saint Spear', '-' ),
            'cost'        => 100000000,
            'percent'     => '60',
            'grade'       => 'S',
            'category_id' => Category::where( 'name', 'Polearm' )->firstOrFail()->id,
            'craft_cost'  => 300000,
        ] );
        Recipe::create( [
            'name'        => 'Dynasty Knife',
            'slug'        => Str::slug( 'Dynasty Knife', '-' ),
            'cost'        => 100000000,
            'percent'     => '60',
            'grade'       => 'S',
            'category_id' => Category::where( 'name', 'Dagger' )->firstOrFail()->id,
            'craft_cost'  => 300000,
        ] );
    }
}
