<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $weapon  = Category::create( [
            'name' => 'Weapon',
            'slug' => Str::slug( 'Weapon', '-' ),
        ] );
        $dagger  = Category::create( [
            'name'        => 'Dagger',
            'slug'        => Str::slug( 'Dagger', '-' ),
            'category_id' => $weapon->id,
        ] );
        $polearm = Category::create( [
            'name'        => 'Polearm',
            'slug'        => Str::slug( 'Polearm', '-' ),
            'category_id' => $weapon->id,
        ] );
    }
}
