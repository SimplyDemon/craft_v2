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

        //        seederAddRecipe( 'Damascus Sword', $imagePath, 20000000, 'B', $categoryId, 0, '60', '', '' );
        //        seederAddRecipe( 'Damascus Sword (60%)', $imagePath, 20000000, 'B', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Forgotten Blade', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Adds Rate Crit by 54.4', 'Lightning' );
        seederAddRecipe( 'Heavens Divider', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Adds Crit. Atk Add by 340', 'Thunder' );
        seederAddRecipe( 'Dynasty Sword', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Increases Max HP by 492', 'Earth' );
        seederAddRecipe( 'Dynasty Blade', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Great Gale' );
        seederAddRecipe( 'Dynasty Phantom', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Increases Max MP by 334', 'Nature' );
        seederAddRecipe( 'Icarus Sawsword', $imagePath, 100000000, 'S-80', $categoryId, 0, '60', 'Increases P. Atk by 42.12', 'Destruction' );
        seederAddRecipe( 'Icarus Spirit', $imagePath, 100000000, 'S-80', $categoryId, 0, '60', 'Adds Max MP by 334', 'Nature' );
        seederAddRecipe( 'Icarus Heavy Arms', $imagePath, 100000000, 'S-80', $categoryId, 0, '60', 'Adds Rate Crit by 54.4', 'Lightning' );
        seederAddRecipe( 'Vesper Cutter', $imagePath, 100000000, 'S-84', $categoryId, 0, '60', 'Adds Rate Crit by 54.4', 'Thunder' );
        seederAddRecipe( 'Vesper Slasher', $imagePath, 100000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Gale' );
        seederAddRecipe( 'Vesper Buster', $imagePath, 100000000, 'S-84', $categoryId, 0, '60', 'Multiplies Regen MP by 1.05', 'Clevernes' );
    }

    protected function addBlunts() {
        $categoryId = $this->bluntCategory->id;
        $imagePath  = 'item/weapon/blunt';

        seederAddRecipe( 'Basalt Battlehammer', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Adds Accuracy Combat by 4.2', 'Concentration' );
        seederAddRecipe( 'Imperial Staff', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Adds Max MP by 289', 'Nature' );
        seederAddRecipe( 'Dragon Hunter Axe', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Adds Crit. Atk Add by 415', 'Thunder' );
        seederAddRecipe( 'Arcana Mace', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Adds Max MP by 289', 'Nature' );
        seederAddRecipe( 'Dynasty Cudgel', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Has a chance to stun the enemy during a regular attack. (chance = 8%)', 'Landslide' );
        seederAddRecipe( 'Dynasty Mace', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Adds Max HP by 492', 'Earth' );
        seederAddRecipe( 'Dynasty Staff', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Increases the power of ones own recovery magic by 43', 'Holy Spirit' );
        seederAddRecipe( 'Dynasty Crusher', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Great Gale' );
        seederAddRecipe( 'Icarus Hammer', $imagePath, 100000000, 'S-80', $categoryId, 0, '60', 'Adds Max HP by 511', 'Earth' );
        seederAddRecipe( 'Icarus Hall', $imagePath, 100000000, 'S-80', $categoryId, 0, '60', 'Adds M.Atk by 45.81', 'Hail' );
        seederAddRecipe( 'Vesper Avenger', $imagePath, 100000000, 'S-84', $categoryId, 0, '60', 'Has a chance to stun the enemy during a regular attack. (chance = 8%)', 'Landslide' );
        seederAddRecipe( 'Vesper Retributer', $imagePath, 100000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Gale' );
        seederAddRecipe( 'Vesper Caster', $imagePath, 100000000, 'S-84', $categoryId, 0, '60', 'Multiplies Regen MP by 1.05', 'Cleverness' );
        seederAddRecipe( 'Vesper Singer', $imagePath, 100000000, 'S-84', $categoryId, 0, '60', 'Adds M.Atk by 45.81', 'Hail' );
    }

    protected function addBows() {
        $categoryId = $this->bowCategory->id;
        $imagePath  = 'item/weapon/bow';

        seederAddRecipe( 'Draconic Bow', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Adds Max HP by 444', 'Earth' );
        seederAddRecipe( 'Dynasty Bow', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Great Gale' );
        seederAddRecipe( 'Icarus Spitter', $imagePath, 100000000, 'S-80', $categoryId, 0, '60', 'Adds Accuracy Combat by 3.3', 'Concentration' );
        seederAddRecipe( 'Vesper Thrower', $imagePath, 100000000, 'S-84', $categoryId, 0, '60', 'Adds P.Atk Range by 100', 'Clairvoyance' );
    }

    protected function addDaggers() {
        $categoryId = $this->daggerCategory->id;
        $imagePath  = 'item/weapon/dagger';

        seederAddRecipe( 'Angel Slayer', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Adds Accuracy Combat by 3.3', 'Concentration' );
        seederAddRecipe( 'Dynasty Knife', $imagePath, 275000000, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Great Gale' );
        seederAddRecipe( 'Icarus Disperser', $imagePath, 100000000, 'S-80', $categoryId, 0, '60', 'Adds Rate Evasion by 3.3', 'Confusion' );
        seederAddRecipe( 'Vesper Shaper', $imagePath, 100000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Gale' );
    }

    protected function addPolearms() {
        $categoryId = $this->polearmCategory->id;
        $imagePath  = 'item/weapon/polearm';

        seederAddRecipe( 'Saint Spear', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Adds P.Atk by 31.25', 'Destruction' );
        seederAddRecipe( 'Dynasty Halberd', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Adds Max HP by 492', 'Earth' );
        seederAddRecipe( 'Icarus Trident', $imagePath, 100000000, 'S-80', $categoryId, 0, '60', 'Adds Crit. Atk Add by 377', 'Thunder' );
        seederAddRecipe( 'Vesper Stormer', $imagePath, 100000000, 'S-84', $categoryId, 0, '60', 'Adds Rate Crit by 54.4', 'Thunder' );
    }

    protected function addFists() {
        $categoryId = $this->fistCategory->id;
        $imagePath  = 'item/weapon/fist';

        seederAddRecipe( 'Demon Splinter', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Adds Crit. Atk Add by 528', 'Thunder' );
        seederAddRecipe( 'Dynasty Bagh-Nakh', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Great Gale' );
        seederAddRecipe( 'Icarus Hand', $imagePath, 100000000, 'S-80', $categoryId, 0, '60', 'Adds P.Atk by 51.26', 'Destruction' );
        seederAddRecipe( 'Vesper Fighter', $imagePath, 100000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Gale' );
    }

}
