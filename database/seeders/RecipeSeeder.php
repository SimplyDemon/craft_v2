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
    protected Category $swordCategory;
    protected Category $bluntCategory;
    protected Category $bowCategory;
    protected Category $daggerCategory;
    protected Category $polearmCategory;
    protected Category $fistCategory;


    public function run() {
        /*
         * Weapon
         */
        /*
         * Sword
         */
        $this->swordCategory   = Category::where( 'name', 'Sword' )->firstOrFail();
        $this->bluntCategory   = Category::where( 'name', 'Blunt' )->firstOrFail();
        $this->bowCategory     = Category::where( 'name', 'Bow' )->firstOrFail();
        $this->daggerCategory  = Category::where( 'name', 'Dagger' )->firstOrFail();
        $this->polearmCategory = Category::where( 'name', 'Polearm' )->firstOrFail();
        $this->fistCategory    = Category::where( 'name', 'Fist' )->firstOrFail();

        $this->addSwords();
        $this->addBlunts();
        $this->addBows();
        $this->addDaggers();
        $this->addPolearms();
        $this->addFists();
    }

    protected function addRecipe( string $name, string $imagePath, int $price, string $grade, int $categoryId, int $craftCost = 0, string $percent = '60' ) {
        return Recipe::create( [
            'name'        => $name,
            'slug'        => Str::slug( $name, '-' ),
            'price_sell'  => $price,
            'percent'     => $percent,
            'grade'       => $grade,
            'img'         => copyFile( "image/$imagePath/" . $name . '.png', "app/public/uploads/$imagePath/" ),
            'category_id' => $categoryId,
            'craft_cost'  => $craftCost,
        ] );
    }

    protected function addSwords() {
        $imagePath = 'item/weapon/sword';
        $this->addRecipe( 'Forgotten Blade', $imagePath, 100000000, 'S', $this->swordCategory->id );
        $this->addRecipe( 'Heavens Divider', $imagePath, 100000000, 'S', $this->swordCategory->id );
        $this->addRecipe( 'Dynasty Sword', $imagePath, 100000000, 'S', $this->swordCategory->id );
        $this->addRecipe( 'Dynasty Blade', $imagePath, 100000000, 'S', $this->swordCategory->id );
        $this->addRecipe( 'Dynasty Phantom', $imagePath, 100000000, 'S', $this->swordCategory->id );
        $this->addRecipe( 'Icarus Sawsword', $imagePath, 100000000, 'S-80', $this->swordCategory->id );
        $this->addRecipe( 'Icarus Spirit', $imagePath, 100000000, 'S-80', $this->swordCategory->id );
        $this->addRecipe( 'Icarus Heavy Arms', $imagePath, 100000000, 'S-80', $this->swordCategory->id );
        $this->addRecipe( 'Vesper Cutter', $imagePath, 100000000, 'S-84', $this->swordCategory->id );
        $this->addRecipe( 'Vesper Slasher', $imagePath, 100000000, 'S-84', $this->swordCategory->id );
        $this->addRecipe( 'Vesper Buster', $imagePath, 100000000, 'S-84', $this->swordCategory->id );
    }

    protected function addBlunts() {
        $imagePath = 'item/weapon/blunt';
        $this->addRecipe( 'Basalt Battlehammer', $imagePath, 100000000, 'S', $this->bluntCategory->id );
        $this->addRecipe( 'Imperial Staff', $imagePath, 100000000, 'S', $this->bluntCategory->id );
        $this->addRecipe( 'Dragon Hunter Axe', $imagePath, 100000000, 'S', $this->bluntCategory->id );
        $this->addRecipe( 'Arcana Mace', $imagePath, 100000000, 'S', $this->bluntCategory->id );
        $this->addRecipe( 'Dynasty Cudgel', $imagePath, 100000000, 'S', $this->bluntCategory->id );
        $this->addRecipe( 'Dynasty Mace', $imagePath, 100000000, 'S', $this->bluntCategory->id );
        $this->addRecipe( 'Dynasty Staff', $imagePath, 100000000, 'S', $this->bluntCategory->id );
        $this->addRecipe( 'Dynasty Crusher', $imagePath, 100000000, 'S', $this->bluntCategory->id );
        $this->addRecipe( 'Icarus Hammer', $imagePath, 100000000, 'S-80', $this->bluntCategory->id );
        $this->addRecipe( 'Icarus Hall', $imagePath, 100000000, 'S-80', $this->bluntCategory->id );
        $this->addRecipe( 'Vesper Avenger', $imagePath, 100000000, 'S-84', $this->bluntCategory->id );
        $this->addRecipe( 'Vesper Retributer', $imagePath, 100000000, 'S-84', $this->bluntCategory->id );
        $this->addRecipe( 'Vesper Caster', $imagePath, 100000000, 'S-84', $this->bluntCategory->id );
        $this->addRecipe( 'Vesper Singer', $imagePath, 100000000, 'S-84', $this->bluntCategory->id );
    }

    protected function addBows() {
        $imagePath = 'item/weapon/bow';
        $this->addRecipe( 'Draconic Bow', $imagePath, 100000000, 'S', $this->bowCategory->id );
        $this->addRecipe( 'Dynasty Bow', $imagePath, 100000000, 'S', $this->bowCategory->id );
        $this->addRecipe( 'Icarus Spitter', $imagePath, 100000000, 'S-80', $this->bowCategory->id );
        $this->addRecipe( 'Vesper Thrower', $imagePath, 100000000, 'S-84', $this->bowCategory->id );
    }

    protected function addDaggers() {
        $imagePath = 'item/weapon/dagger';
        $this->addRecipe( 'Angel Slayer', $imagePath, 100000000, 'S', $this->daggerCategory->id );
        $this->addRecipe( 'Dynasty Knife', $imagePath, 100000000, 'S', $this->daggerCategory->id );
        $this->addRecipe( 'Icarus Disperser', $imagePath, 100000000, 'S-80', $this->daggerCategory->id );
        $this->addRecipe( 'Vesper Shaper', $imagePath, 100000000, 'S-84', $this->daggerCategory->id );
    }

    protected function addPolearms() {
        $imagePath = 'item/weapon/polearm';
        $this->addRecipe( 'Saint Spear', $imagePath, 100000000, 'S', $this->polearmCategory->id );
        $this->addRecipe( 'Dynasty Halberd', $imagePath, 100000000, 'S', $this->polearmCategory->id );
        $this->addRecipe( 'Icarus Trident', $imagePath, 100000000, 'S-80', $this->polearmCategory->id );
        $this->addRecipe( 'Vesper Stormer', $imagePath, 100000000, 'S-84', $this->polearmCategory->id );
    }

    protected function addFists() {
        $imagePath = 'item/weapon/fist';
        $this->addRecipe( 'Demon Splinter', $imagePath, 100000000, 'S', $this->fistCategory->id );
        $this->addRecipe( 'Dynasty Bagh-Nakh', $imagePath, 100000000, 'S', $this->fistCategory->id );
        $this->addRecipe( 'Icarus Hand', $imagePath, 100000000, 'S-80', $this->fistCategory->id );
        $this->addRecipe( 'Vesper Fighter', $imagePath, 100000000, 'S-84', $this->fistCategory->id );
    }

}
