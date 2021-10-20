<?php

namespace Database\Seeders;

use Database\Seeders\Recipe\ArmorSeeder;
use Database\Seeders\Recipe\JewelrySeeder;
use Database\Seeders\Recipe\ShieldSeeder;
use Database\Seeders\Recipe\SigilSeeder;
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

        $shieldSeeder = new ShieldSeeder();
        $shieldSeeder->seedShield();

        $sigilSeeder = new SigilSeeder();
        $sigilSeeder->seedSigil();
    }
}
