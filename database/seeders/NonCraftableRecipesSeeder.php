<?php

namespace Database\Seeders;

use App\Models\Category;
use Database\Seeders\Recipe\NonCraftable\Armor;
use Database\Seeders\Recipe\NonCraftable\Jewelry;
use Database\Seeders\Recipe\NonCraftable\Weapon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Collection;

class NonCraftableRecipesSeeder extends Seeder
{
    protected \Illuminate\Support\Collection $addedRecipesCollection;

    public function __construct()
    {
        $this->addedRecipesCollection = collect();
    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Belt',
            'slug' => Str::slug('Belt', '-'),
            'category_id' => Category::where('name', 'Other')->firstOrFail()->id,
        ]);

        $recipesWeapon = new Weapon();
        $recipesWeapon->seed();
        $armorsWeapon = new Armor();
        $armorsWeapon->seed();
        $jewelryWeapon = new Jewelry();
        $jewelryWeapon->seed();
    }
}
