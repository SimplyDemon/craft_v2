<?php

namespace Database\Seeders\Recipe;

use App\Models\Category;
use Illuminate\Database\Seeder;

class WeaponSeeder extends Seeder {
    protected Category $swordCategory;
    protected Category $bluntCategory;
    protected Category $bowCategory;
    protected Category $daggerCategory;
    protected Category $polearmCategory;
    protected Category $fistCategory;

    public function seedWeapon() {
        $this->setWeaponCategories();
        $this->addWeapons();
    }

    protected function addWeapons() {
        $this->addSwords();
        $this->addBlunts();
        $this->addBows();
        $this->addDaggers();
        $this->addPolearms();
        $this->addFists();
    }

    protected function setWeaponCategories() {
        $this->swordCategory   = Category::where( 'name', 'Sword' )->firstOrFail();
        $this->bluntCategory   = Category::where( 'name', 'Blunt' )->firstOrFail();
        $this->bowCategory     = Category::where( 'name', 'Bow' )->firstOrFail();
        $this->daggerCategory  = Category::where( 'name', 'Dagger' )->firstOrFail();
        $this->polearmCategory = Category::where( 'name', 'Polearm' )->firstOrFail();
        $this->fistCategory    = Category::where( 'name', 'Fist' )->firstOrFail();
        $this->fistCategory    = Category::where( 'name', 'Fist' )->firstOrFail();
    }

    protected function addSwords() {
        $categoryId = $this->swordCategory->id;
        $imagePath  = 'item/weapon/sword';

        seederAddRecipe( 'Forgotten Blade', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Heavens Divider', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Sword', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Blade', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Phantom', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Icarus Sawsword', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Icarus Spirit', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Icarus Heavy Arms', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Cutter', $imagePath, 100000000, 'S-84', $categoryId );
        seederAddRecipe( 'Vesper Slasher', $imagePath, 100000000, 'S-84', $categoryId );
        seederAddRecipe( 'Vesper Buster', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addBlunts() {
        $categoryId = $this->bluntCategory->id;
        $imagePath  = 'item/weapon/blunt';

        seederAddRecipe( 'Basalt Battlehammer', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Imperial Staff', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dragon Hunter Axe', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Arcana Mace', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Cudgel', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Mace', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Staff', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Crusher', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Icarus Hammer', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Icarus Hall', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Avenger', $imagePath, 100000000, 'S-84', $categoryId );
        seederAddRecipe( 'Vesper Retributer', $imagePath, 100000000, 'S-84', $categoryId );
        seederAddRecipe( 'Vesper Caster', $imagePath, 100000000, 'S-84', $categoryId );
        seederAddRecipe( 'Vesper Singer', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addBows() {
        $categoryId = $this->bowCategory->id;
        $imagePath  = 'item/weapon/bow';

        seederAddRecipe( 'Draconic Bow', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Bow', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Icarus Spitter', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Thrower', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addDaggers() {
        $categoryId = $this->daggerCategory->id;
        $imagePath  = 'item/weapon/dagger';

        seederAddRecipe( 'Angel Slayer', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Knife', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Icarus Disperser', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Shaper', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addPolearms() {
        $categoryId = $this->polearmCategory->id;
        $imagePath  = 'item/weapon/polearm';

        seederAddRecipe( 'Saint Spear', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Halberd', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Icarus Trident', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Stormer', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addFists() {
        $categoryId = $this->fistCategory->id;
        $imagePath  = 'item/weapon/fist';

        seederAddRecipe( 'Demon Splinter', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Bagh-Nakh', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Icarus Hand', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Fighter', $imagePath, 100000000, 'S-84', $categoryId );
    }

}
