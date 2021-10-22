<?php

namespace Database\Seeders;

use App\Helpers\ResourceHelper;
use App\Models\Recipe;
use App\Models\Resource;
use Database\Seeders\RecipeResource\Weapon\Blunt;
use Database\Seeders\RecipeResource\Weapon\Bow;
use Database\Seeders\RecipeResource\Weapon\Dagger;
use Database\Seeders\RecipeResource\Weapon\Fist;
use Database\Seeders\RecipeResource\Weapon\Polearm;
use Database\Seeders\RecipeResource\Weapon\Sword;
use Illuminate\Database\Seeder;

class RecipeResourceSeeder extends Seeder {
    protected ResourceHelper $ResourceHelper;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $this->addWeapon();

    }


    protected function addWeapon() {
        $dagger = new Dagger();
        $dagger->seed();

        $polearm = new Polearm();
        $polearm->seed();

        $sword = new Sword();
        $sword->seed();

        $blunt = new Blunt();
        $blunt->seed();

        $bow = new Bow();
        $bow->seed();

        $fist = new Fist();
        $fist->seed();
    }

}
