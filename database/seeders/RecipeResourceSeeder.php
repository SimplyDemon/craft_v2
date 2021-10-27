<?php

namespace Database\Seeders;

use App\Helpers\ResourceHelper;
use App\Models\Recipe;
use App\Models\Resource;
use Database\Seeders\RecipeResource\Armor\Light\Boot;
use Database\Seeders\RecipeResource\Armor\Light\FullBody;
use Database\Seeders\RecipeResource\Armor\Light\Gloves;
use Database\Seeders\RecipeResource\Armor\Light\Helmet;
use Database\Seeders\RecipeResource\Armor\Light\Lower;
use Database\Seeders\RecipeResource\Armor\Light\Upper;
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
        $this->addArmor();

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

    protected function addArmor() {
        $this->addArmorLight();
        $this->addArmorHeavy();
    }

    protected function addArmorLight() {
        $fullBody = new FullBody();
        $fullBody->seed();

        $upper = new Upper();
        $upper->seed();

        $lower = new Lower();
        $lower->seed();

        $boot = new Boot();
        $boot->seed();

        $helmet = new Helmet();
        $helmet->seed();

        $gloves = new Gloves();
        $gloves->seed();
    }

    protected function addArmorHeavy() {
        $upper = new RecipeResource\Armor\Heavy\Upper();
        $upper->seed();

        $lower = new RecipeResource\Armor\Heavy\Lower();
        $lower->seed();

        $boot = new RecipeResource\Armor\Heavy\Boot();
        $boot->seed();

        $helmet = new RecipeResource\Armor\Heavy\Helmet();
        $helmet->seed();

        $gloves = new RecipeResource\Armor\Heavy\Gloves();
        $gloves->seed();
    }
}
