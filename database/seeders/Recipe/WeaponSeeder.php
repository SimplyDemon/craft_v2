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

        seederAddRecipe( 'Great Sword', $imagePath, 0, 'B', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Great Sword 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '', '' );
        seederAddRecipe( 'Keshanberk', $imagePath, 0, 'B', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Keshanberk 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '', '' );
        seederAddRecipe( 'Sword of Valhalla', $imagePath, 0, 'B', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Sword of Valhalla 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '', '' );
        seederAddRecipe( 'Damascus Sword', $imagePath, 20000000, 'B', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Damascus Sword 100%', $imagePath, 20000000, 'B', $categoryId, 0, '100', '', '' );
        seederAddRecipe( 'Guardian\'s Sword', $imagePath, 0, 'B', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Guardian\'s Sword 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '', '' );
        seederAddRecipe( 'Wizard\'s Tear', $imagePath, 0, 'B', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Wizard\'s Tear 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '', '' );
        seederAddRecipe( 'Tallum Blade', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Elemental Sword', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Infernal Master', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Dragon Slayer', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Sword of Miracles', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Dark Legion\'s Edge', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Sirra\'s Blade', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Sword of Ipos', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Themis\' Tongue', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Forgotten Blade', $imagePath, 60000000, 'S', $categoryId, 0, '60', 'Adds Rate Crit by 54.4', 'Lightning' );
        seederAddRecipe( 'Heavens Divider', $imagePath, 60000000, 'S', $categoryId, 0, '60', 'Adds Crit. Atk Add by 340', 'Thunder' );
        seederAddRecipe( 'Dynasty Sword', $imagePath, 160000000, 'S', $categoryId, 0, '60', 'Increases Max HP by 492', 'Earth' );
        seederAddRecipe( 'Dynasty Blade', $imagePath, 0, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Great Gale' );
        seederAddRecipe( 'Dynasty Phantom', $imagePath, 140000000, 'S', $categoryId, 0, '60', 'Increases Max MP by 334', 'Nature' );
        seederAddRecipe( 'Icarus Sawsword', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Increases P. Atk by 42.12', 'Destruction' );
        seederAddRecipe( 'Icarus Spirit', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Adds Max MP by 334', 'Nature' );
        seederAddRecipe( 'Icarus Heavy Arms', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Adds Rate Crit by 54.4', 'Lightning' );
        seederAddRecipe( 'Vesper Cutter', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Adds Rate Crit by 54.4', 'Thunder' );
        seederAddRecipe( 'Vesper Slasher', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Gale' );
        seederAddRecipe( 'Vesper Buster', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Multiplies Regen MP by 1.05', 'Clevernes' );
    }

    protected function addBlunts() {
        $categoryId = $this->bluntCategory->id;
        $imagePath  = 'item/weapon/blunt';

        seederAddRecipe( 'Heavy War Axe', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Heavy War Axe 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '' );
        seederAddRecipe( 'Spirit\'s Staff', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Spirit\'s Staff 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '' );
        seederAddRecipe( 'Spell Breaker', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Spell Breaker 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '' );
        seederAddRecipe( 'Ice Storm Hammer', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Ice Storm Hammer 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '' );
        seederAddRecipe( 'Deadman\'s Glory', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Deadman\'s Glory 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '' );
        seederAddRecipe( 'Art of Battle Axe', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Art of Battle Axe 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '' );
        seederAddRecipe( 'Staff of Evil Spirits', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Staff of Evil Spirits 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '' );
        seederAddRecipe( 'Kaim Vanul\'s Bones', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Kaim Vanul\'s Bones 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '' );
        seederAddRecipe( 'Star Buster', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Star Buster 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '' );
        seederAddRecipe( 'Dasparion\'s Staff', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Meteor Shower', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Spiritual Eye', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Destroyer Hammer', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Elysian', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Branch of the Mother Tree', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Flaming Dragon Skull', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Doom Crusher', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Barakiel\'s Axe', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Behemoth\' Tuning Fork', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Cabrio\'s Hand', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Daimon Crystal', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Basalt Battlehammer', $imagePath, 70000000, 'S', $categoryId, 0, '60', 'Adds Accuracy Combat by 4.2', 'Concentration' );
        seederAddRecipe( 'Imperial Staff', $imagePath, 50000000, 'S', $categoryId, 0, '60', 'Adds Max MP by 289', 'Nature' );
        seederAddRecipe( 'Dragon Hunter Axe', $imagePath, 0, 'S', $categoryId, 0, '60', 'Adds Crit. Atk Add by 415', 'Thunder' );
        seederAddRecipe( 'Arcana Mace', $imagePath, 0, 'S', $categoryId, 0, '60', 'Adds Max MP by 289', 'Nature' );
        seederAddRecipe( 'Dynasty Cudgel', $imagePath, 0, 'S', $categoryId, 0, '60', 'Has a chance to stun the enemy during a regular attack. (chance = 8%)', 'Landslide' );
        seederAddRecipe( 'Dynasty Mace', $imagePath, 200000000, 'S', $categoryId, 0, '60', 'Adds Max HP by 492', 'Earth' );
        seederAddRecipe( 'Dynasty Staff', $imagePath, 250000000, 'S', $categoryId, 0, '60', 'Increases the power of ones own recovery magic by 43', 'Holy Spirit' );
        seederAddRecipe( 'Dynasty Crusher', $imagePath, 0, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Great Gale' );
        seederAddRecipe( 'Icarus Hammer', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Adds Max HP by 511', 'Earth' );
        seederAddRecipe( 'Icarus Hall', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Adds M.Atk by 45.81', 'Hail' );
        seederAddRecipe( 'Vesper Avenger', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Has a chance to stun the enemy during a regular attack. (chance = 8%)', 'Landslide' );
        seederAddRecipe( 'Vesper Retributer', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Gale' );
        seederAddRecipe( 'Vesper Caster', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Multiplies Regen MP by 1.05', 'Cleverness' );
        seederAddRecipe( 'Vesper Singer', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Adds M.Atk by 45.81', 'Hail' );
    }

    protected function addBows() {
        $categoryId = $this->bowCategory->id;
        $imagePath  = 'item/weapon/bow';

        seederAddRecipe( 'Dark Elven Longbow', $imagePath, 0, 'B', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Dark Elven Longbow 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '', '' );
        seederAddRecipe( 'Bow of Peril', $imagePath, 0, 'B', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Bow of Peril 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '', '' );
        seederAddRecipe( 'Carnage Bow', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Soul Bow', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Shyeed\'s Bow', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Draconic Bow', $imagePath, 60000000, 'S', $categoryId, 0, '60', 'Adds Max HP by 444', 'Earth' );
        seederAddRecipe( 'Dynasty Bow', $imagePath, 0, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Great Gale' );
        seederAddRecipe( 'Icarus Spitter', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Adds Accuracy Combat by 3.3', 'Concentration' );
        seederAddRecipe( 'Vesper Thrower', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Adds P.Atk Range by 100', 'Clairvoyance' );
    }

    protected function addDaggers() {
        $categoryId = $this->daggerCategory->id;
        $imagePath  = 'item/weapon/dagger';

        seederAddRecipe( 'Kris', $imagePath, 0, 'B', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Kris 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '', '' );
        seederAddRecipe( 'Twilight Knife', $imagePath, 0, 'B', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Twilight Knife 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '', '' );
        seederAddRecipe( 'Demon\'s Dagger', $imagePath, 0, 'B', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Demon\'s Dagger 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '', '' );
        seederAddRecipe( 'Bloody Orchid', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Soul Separator', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Naga Storm', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Angel Slayer', $imagePath, 0, 'S', $categoryId, 0, '60', 'Adds Accuracy Combat by 3.3', 'Concentration' );
        seederAddRecipe( 'Dynasty Knife', $imagePath, 230000000, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Great Gale' );
        seederAddRecipe( 'Icarus Disperser', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Adds Rate Evasion by 3.3', 'Confusion' );
        seederAddRecipe( 'Vesper Shaper', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Gale' );
    }

    protected function addPolearms() {
        $categoryId = $this->polearmCategory->id;
        $imagePath  = 'item/weapon/polearm';

        seederAddRecipe( 'Great Axe', $imagePath, 0, 'B', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Great Axe 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '', '' );
        seederAddRecipe( 'Lance', $imagePath, 0, 'B', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Lance 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '', '' );
        seederAddRecipe( 'Halberd', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Tallum Glaive', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Tiphon\'s Spear', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Saint Spear', $imagePath, 65000000, 'S', $categoryId, 0, '60', 'Adds P.Atk by 31.25', 'Destruction' );
        seederAddRecipe( 'Dynasty Halberd', $imagePath, 160000000, 'S', $categoryId, 0, '60', 'Adds Max HP by 492', 'Earth' );
        seederAddRecipe( 'Icarus Trident', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Adds Crit. Atk Add by 377', 'Thunder' );
        seederAddRecipe( 'Vesper Stormer', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Adds Rate Crit by 54.4', 'Thunder' );
    }

    protected function addFists() {
        $categoryId = $this->fistCategory->id;
        $imagePath  = 'item/weapon/fist';

        seederAddRecipe( 'Arthro Nail', $imagePath, 0, 'B', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Arthro Nail 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '', '' );
        seederAddRecipe( 'Bellion Cestus', $imagePath, 0, 'B', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Bellion Cestus 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '', '' );
        seederAddRecipe( 'Blood Tornado', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Dragon Grinder', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Sobekk\'s Hurricane', $imagePath, 0, 'A', $categoryId, 0, '60', '', '' );
        seederAddRecipe( 'Demon Splinter', $imagePath, 50000000, 'S', $categoryId, 0, '60', 'Adds Crit. Atk Add by 528', 'Thunder' );
        seederAddRecipe( 'Dynasty Bagh-Nakh', $imagePath, 0, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Great Gale' );
        seederAddRecipe( 'Icarus Hand', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Adds P.Atk by 51.26', 'Destruction' );
        seederAddRecipe( 'Vesper Fighter', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Gale' );
    }

}
