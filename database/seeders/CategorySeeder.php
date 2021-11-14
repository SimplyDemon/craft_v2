<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder {
    protected Category $weaponCategory;
    protected Category $armorCategory;
    protected Category $jewelryCategory;
    protected Category $otherCategory;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->weaponCategory  = Category::create( [
            'name' => 'Weapon',
            'slug' => Str::slug( 'Weapon', '-' ),
        ] );
        $this->armorCategory   = Category::create( [
            'name' => 'Armor',
            'slug' => Str::slug( 'Armor', '-' ),
        ] );
        $this->jewelryCategory = Category::create( [
            'name' => 'Jewelry',
            'slug' => Str::slug( 'Jewelry', '-' ),
        ] );
        $this->otherCategory   = Category::create( [
            'name' => 'Other',
            'slug' => Str::slug( 'Other', '-' ),
        ] );

        $this->addArmorHeavy();
        $this->addArmorLight();
        $this->addArmorRobe();
        $this->addJewelry();
        $this->addWeapons();
        $this->addShield();
        $this->addSigil();


    }

    protected function addShield() {
        Category::create( [
            'name'        => 'Shield',
            'slug'        => Str::slug( 'Shield', '-' ),
            'category_id' => $this->armorCategory->id,
        ] );
    }

    protected function addSigil() {
        Category::create( [
            'name'        => 'Sigil',
            'slug'        => Str::slug( 'Sigil', '-' ),
            'category_id' => $this->armorCategory->id,
        ] );
    }

    protected function addWeapons() {
        Category::create( [
            'name'        => 'Sword',
            'slug'        => Str::slug( 'Sword', '-' ),
            'category_id' => $this->weaponCategory->id,
        ] );
        Category::create( [
            'name'        => 'Blunt',
            'slug'        => Str::slug( 'Blunt', '-' ),
            'category_id' => $this->weaponCategory->id,
        ] );
        Category::create( [
            'name'        => 'Bow',
            'slug'        => Str::slug( 'Bow', '-' ),
            'category_id' => $this->weaponCategory->id,
        ] );
        Category::create( [
            'name'        => 'Dagger',
            'slug'        => Str::slug( 'Dagger', '-' ),
            'category_id' => $this->weaponCategory->id,
        ] );
        Category::create( [
            'name'        => 'Polearm',
            'slug'        => Str::slug( 'Polearm', '-' ),
            'category_id' => $this->weaponCategory->id,
        ] );
        Category::create( [
            'name'        => 'Fist',
            'slug'        => Str::slug( 'Fist', '-' ),
            'category_id' => $this->weaponCategory->id,
        ] );

    }

    protected function addArmorLight() {
        $armorLight = Category::create( [
            'name'        => 'Light',
            'slug'        => Str::slug( 'Light', '-' ),
            'category_id' => $this->armorCategory->id,
        ] );
        Category::create( [
            'name'        => 'Full body',
            'slug'        => Str::slug( 'Full body', '-' ),
            'category_id' => $armorLight->id,
        ] );
        Category::create( [
            'name'        => 'Upper',
            'slug'        => Str::slug( 'Upper', '-' ),
            'category_id' => $armorLight->id,
        ] );
        Category::create( [
            'name'        => 'Lower',
            'slug'        => Str::slug( 'Lower', '-' ),
            'category_id' => $armorLight->id,
        ] );
        Category::create( [
            'name'        => 'Helmet',
            'slug'        => Str::slug( 'Helmet', '-' ),
            'category_id' => $armorLight->id,
        ] );
        Category::create( [
            'name'        => 'Boot',
            'slug'        => Str::slug( 'Boot', '-' ),
            'category_id' => $armorLight->id,
        ] );
        Category::create( [
            'name'        => 'Gloves',
            'slug'        => Str::slug( 'Gloves', '-' ),
            'category_id' => $armorLight->id,
        ] );
    }

    protected function addArmorHeavy() {
        $armorHeavy = Category::create( [
            'name'        => 'Heavy',
            'slug'        => Str::slug( 'Heavy', '-' ),
            'category_id' => $this->armorCategory->id,
        ] );
        Category::create( [
            'name'        => 'Upper',
            'slug'        => Str::slug( 'Upper', '-' ),
            'category_id' => $armorHeavy->id,
        ] );
        Category::create( [
            'name'        => 'Lower',
            'slug'        => Str::slug( 'Lower', '-' ),
            'category_id' => $armorHeavy->id,
        ] );
        Category::create( [
            'name'        => 'Helmet',
            'slug'        => Str::slug( 'Helmet', '-' ),
            'category_id' => $armorHeavy->id,
        ] );
        Category::create( [
            'name'        => 'Boot',
            'slug'        => Str::slug( 'Boot', '-' ),
            'category_id' => $armorHeavy->id,
        ] );
        Category::create( [
            'name'        => 'Gloves',
            'slug'        => Str::slug( 'Gloves', '-' ),
            'category_id' => $armorHeavy->id,
        ] );
    }

    protected function addArmorRobe() {
        $armorRobe = Category::create( [
            'name'        => 'Robe',
            'slug'        => Str::slug( 'Robe', '-' ),
            'category_id' => $this->armorCategory->id,
        ] );
        Category::create( [
            'name'        => 'Full body',
            'slug'        => Str::slug( 'Full body', '-' ),
            'category_id' => $armorRobe->id,
        ] );
        Category::create( [
            'name'        => 'Upper',
            'slug'        => Str::slug( 'Upper', '-' ),
            'category_id' => $armorRobe->id,
        ] );
        Category::create( [
            'name'        => 'Lower',
            'slug'        => Str::slug( 'Lower', '-' ),
            'category_id' => $armorRobe->id,
        ] );
        Category::create( [
            'name'        => 'Helmet',
            'slug'        => Str::slug( 'Helmet', '-' ),
            'category_id' => $armorRobe->id,
        ] );
        Category::create( [
            'name'        => 'Boot',
            'slug'        => Str::slug( 'Boot', '-' ),
            'category_id' => $armorRobe->id,
        ] );
        Category::create( [
            'name'        => 'Gloves',
            'slug'        => Str::slug( 'Gloves', '-' ),
            'category_id' => $armorRobe->id,
        ] );
    }

    protected function addJewelry() {
        Category::create( [
            'name'        => 'Necklace',
            'slug'        => Str::slug( 'Necklace', '-' ),
            'category_id' => $this->jewelryCategory->id,
        ] );
        Category::create( [
            'name'        => 'Earring',
            'slug'        => Str::slug( 'Earring', '-' ),
            'category_id' => $this->jewelryCategory->id,
        ] );
        Category::create( [
            'name'        => 'Ring',
            'slug'        => Str::slug( 'Ring', '-' ),
            'category_id' => $this->jewelryCategory->id,
        ] );
    }
}
