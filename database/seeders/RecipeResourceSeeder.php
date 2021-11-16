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
use Database\Seeders\RecipeResource\Other;
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
        $this->addJewelry();
        $this->addShield();
        $this->addSigil();
        $this->addOther();
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
        $this->addArmorRobe();
        $this->addArmorUniversal();
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
        $fullBody = new RecipeResource\Armor\Heavy\FullBody();
        $fullBody->seed();

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

    protected function addArmorUniversal() {

        $boot = new RecipeResource\Armor\Universal\Boot();
        $boot->seed();

        $helmet = new RecipeResource\Armor\Universal\Helmet();
        $helmet->seed();

        $gloves = new RecipeResource\Armor\Universal\Gloves();
        $gloves->seed();
    }

    protected function addArmorRobe() {
        $fullBody = new RecipeResource\Armor\Robe\FullBody();
        $fullBody->seed();

        $upper = new RecipeResource\Armor\Robe\Upper();
        $upper->seed();

        $lower = new RecipeResource\Armor\Robe\Lower();
        $lower->seed();

        $boot = new RecipeResource\Armor\Robe\Boot();
        $boot->seed();

        $helmet = new RecipeResource\Armor\Robe\Helmet();
        $helmet->seed();

        $gloves = new RecipeResource\Armor\Robe\Gloves();
        $gloves->seed();
    }

    protected function addJewelry() {
        $necklace = new RecipeResource\Jewelry\Necklace();
        $necklace->seed();

        $earring = new RecipeResource\Jewelry\Earring();
        $earring->seed();

        $ring = new RecipeResource\Jewelry\Ring();
        $ring->seed();
    }

    protected function addShield() {
        $shield = new RecipeResource\Shield();
        $shield->seed();
    }

    protected function addSigil() {
        $sigil = new RecipeResource\Sigil();
        $sigil->seed();
    }

    protected function addOther() {
        $other = new Other();
        $other->seed();
    }
}
