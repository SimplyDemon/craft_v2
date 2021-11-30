<?php

namespace Database\Seeders;

use Database\Seeders\Recipe\ArmorSeeder;
use Database\Seeders\Recipe\JewelrySeeder;
use Database\Seeders\Recipe\OtherSeeder;
use Database\Seeders\Recipe\ShieldSeeder;
use Database\Seeders\Recipe\SigilSeeder;
use Database\Seeders\Recipe\WeaponSeeder;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder {
    public function run() {
        $resource = new \Database\Seeders\Recipe\ResourceSeeder();
        $resource->seed();

        $other = new OtherSeeder();
        $other->seed();

        $jewelrySeeder = new JewelrySeeder();
        $jewelrySeeder->seed();

        $armorSeeder = new ArmorSeeder();
        $armorSeeder->seed();

        $weaponSeeder = new WeaponSeeder();
        $weaponSeeder->seed();

    }
}
