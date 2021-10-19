<?php

namespace Database\Seeders;

use Database\Seeders\Recipe\ArmorSeeder;
use Database\Seeders\Recipe\JewelrySeeder;
use Database\Seeders\Recipe\WeaponSeeder;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder {
    public function run() {
        $weaponSeeder = new WeaponSeeder();
        $weaponSeeder->seedWeapon();

        $armorSeeder = new ArmorSeeder();
        $armorSeeder->seedArmor();

        $jewelrySeeder = new JewelrySeeder();
        $jewelrySeeder->seedJewelry();
    }
}
