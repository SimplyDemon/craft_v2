<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        /*
         * Weapon
         */
        $weapon = Category::create( [
            'name' => 'Weapon',
            'slug' => Str::slug( 'Weapon', '-' ),
        ] );
        Category::create( [
            'name'        => 'Sword',
            'slug'        => Str::slug( 'Sword', '-' ),
            'category_id' => $weapon->id,
        ] );
        Category::create( [
            'name'        => 'Blunt',
            'slug'        => Str::slug( 'Blunt', '-' ),
            'category_id' => $weapon->id,
        ] );
        Category::create( [
            'name'        => 'Bow',
            'slug'        => Str::slug( 'Bow', '-' ),
            'category_id' => $weapon->id,
        ] );
        Category::create( [
            'name'        => 'Dagger',
            'slug'        => Str::slug( 'Dagger', '-' ),
            'category_id' => $weapon->id,
        ] );
        Category::create( [
            'name'        => 'Polearm',
            'slug'        => Str::slug( 'Polearm', '-' ),
            'category_id' => $weapon->id,
        ] );
        Category::create( [
            'name'        => 'Fist',
            'slug'        => Str::slug( 'Fist', '-' ),
            'category_id' => $weapon->id,
        ] );

        /*
         * Armor
         */
        $armor = Category::create( [
            'name' => 'Armor',
            'slug' => Str::slug( 'Armor', '-' ),
        ] );
        /*
         * Light
         */
        $armorLight         = Category::create( [
            'name'        => 'Light',
            'slug'        => Str::slug( 'Light', '-' ),
            'category_id' => $armor->id,
        ] );
        $armorLightFullBody = Category::create( [
            'name'        => 'Full body',
            'slug'        => Str::slug( 'Full body', '-' ),
            'category_id' => $armorLight->id,
        ] );
        $armorLightUpper    = Category::create( [
            'name'        => 'Upper',
            'slug'        => Str::slug( 'Upper', '-' ),
            'category_id' => $armorLight->id,
        ] );
        $armorLightLower    = Category::create( [
            'name'        => 'Lower',
            'slug'        => Str::slug( 'Lower', '-' ),
            'category_id' => $armorLight->id,
        ] );
        $armorLightHelmet   = Category::create( [
            'name'        => 'Helmet',
            'slug'        => Str::slug( 'Helmet', '-' ),
            'category_id' => $armorLight->id,
        ] );
        $armorLightBoot     = Category::create( [
            'name'        => 'Boot',
            'slug'        => Str::slug( 'Boot', '-' ),
            'category_id' => $armorLight->id,
        ] );
        $armorLightGloves   = Category::create( [
            'name'        => 'Gloves',
            'slug'        => Str::slug( 'Gloves', '-' ),
            'category_id' => $armorLight->id,
        ] );

        /*
         * Heavy
         */
        $armorHeavy       = Category::create( [
            'name'        => 'Heavy',
            'slug'        => Str::slug( 'Heavy', '-' ),
            'category_id' => $armor->id,
        ] );
        $armorHeavyUpper  = Category::create( [
            'name'        => 'Upper',
            'slug'        => Str::slug( 'Upper', '-' ),
            'category_id' => $armorHeavy->id,
        ] );
        $armorHeavyLower  = Category::create( [
            'name'        => 'Lower',
            'slug'        => Str::slug( 'Lower', '-' ),
            'category_id' => $armorHeavy->id,
        ] );
        $armorHeavyHelmet = Category::create( [
            'name'        => 'Helmet',
            'slug'        => Str::slug( 'Helmet', '-' ),
            'category_id' => $armorHeavy->id,
        ] );
        $armorHeavyBoot   = Category::create( [
            'name'        => 'Boot',
            'slug'        => Str::slug( 'Boot', '-' ),
            'category_id' => $armorHeavy->id,
        ] );
        $armorHeavyGloves = Category::create( [
            'name'        => 'Gloves',
            'slug'        => Str::slug( 'Gloves', '-' ),
            'category_id' => $armorHeavy->id,
        ] );


        /*
         * Robe
         */
        $armorRobe         = Category::create( [
            'name'        => 'Robe',
            'slug'        => Str::slug( 'Robe', '-' ),
            'category_id' => $armor->id,
        ] );
        $armorRobeFullBody = Category::create( [
            'name'        => 'Full body',
            'slug'        => Str::slug( 'Full body', '-' ),
            'category_id' => $armorRobe->id,
        ] );
        $armorRobeUpper    = Category::create( [
            'name'        => 'Upper',
            'slug'        => Str::slug( 'Upper', '-' ),
            'category_id' => $armorRobe->id,
        ] );
        $armorRobeLower    = Category::create( [
            'name'        => 'Lower',
            'slug'        => Str::slug( 'Lower', '-' ),
            'category_id' => $armorRobe->id,
        ] );
        $armorRobeHelmet   = Category::create( [
            'name'        => 'Helmet',
            'slug'        => Str::slug( 'Helmet', '-' ),
            'category_id' => $armorRobe->id,
        ] );
        $armorRobeBoot     = Category::create( [
            'name'        => 'Boot',
            'slug'        => Str::slug( 'Boot', '-' ),
            'category_id' => $armorRobe->id,
        ] );
        $armorRobeGloves   = Category::create( [
            'name'        => 'Gloves',
            'slug'        => Str::slug( 'Gloves', '-' ),
            'category_id' => $armorRobe->id,
        ] );

        /*
         * Jewerly
         */
        $jewerly = Category::create( [
            'name' => 'Jewerly',
            'slug' => Str::slug( 'Jewerly', '-' ),
        ] );
        Category::create( [
            'name'        => 'Necklace',
            'slug'        => Str::slug( 'Necklace', '-' ),
            'category_id' => $jewerly->id,
        ] );
        Category::create( [
            'name'        => 'Earring',
            'slug'        => Str::slug( 'Earring', '-' ),
            'category_id' => $jewerly->id,
        ] );
        Category::create( [
            'name'        => 'Ring',
            'slug'        => Str::slug( 'Ring', '-' ),
            'category_id' => $jewerly->id,
        ] );


        /*
         * Shield
         */
        $shield = Category::create( [
            'name' => 'Shield',
            'slug' => Str::slug( 'Shield', '-' ),
        ] );

        /*
         * Sigil
         */
        $shield = Category::create( [
            'name' => 'Sigil',
            'slug' => Str::slug( 'Sigil', '-' ),
        ] );


    }
}
