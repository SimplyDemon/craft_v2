<?php

namespace Database\Seeders;

use App\Helpers\ResourceHelper;
use App\Models\Recipe;
use App\Models\Resource;
use Database\Seeders\RecipeResource\Weapon\Dagger;
use Database\Seeders\RecipeResource\Weapon\Polearm;
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
    }


}
