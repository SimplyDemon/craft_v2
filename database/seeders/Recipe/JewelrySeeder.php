<?php

namespace Database\Seeders\Recipe;

use App\Models\Category;
use Illuminate\Database\Seeder;

class JewelrySeeder extends Seeder {
    protected Category $jewelryNecklaceCategory;
    protected Category $jewelryEarringCategory;
    protected Category $jewelryRingCategory;

    public function seedJewelry() {
        $this->setJewelryCategories();
        $this->addJewelry();
    }

    protected function addJewelry() {
        $this->addJewelryNecklace();
        $this->addJewelryEarring();
        $this->addJewelryRing();
    }


    protected function setJewelryCategories() {
        $jewelryCategory = Category::where( 'name', 'Jewelry' )->firstOrFail();

        $this->jewelryNecklaceCategory = Category::where( 'name', 'Necklace' )->where( 'category_id', $jewelryCategory->id )->firstOrFail();
        $this->jewelryEarringCategory  = Category::where( 'name', 'Earring' )->where( 'category_id', $jewelryCategory->id )->firstOrFail();
        $this->jewelryRingCategory     = Category::where( 'name', 'Ring' )->where( 'category_id', $jewelryCategory->id )->firstOrFail();
    }

    protected function addJewelryNecklace() {
        $categoryId = $this->jewelryNecklaceCategory->id;
        $imagePath  = 'item/jewelry/necklace';

        seederAddRecipe( 'Tateossian Necklace', $imagePath, 100000000, 'S', $categoryId, 0, '70', 'Decreases Bleed Vulnerability by 7.61' );
        seederAddRecipe( 'Dynasty Necklace', $imagePath, 100000000, 'S', $categoryId, 0, '70', 'Adds Max MP by 30' );
        seederAddRecipe( 'Moirai Necklace', $imagePath, 100000000, 'S-80', $categoryId, 0, '70', 'Decreases Poison Vulnerability by 6' );
        seederAddRecipe( 'Vesper Necklace', $imagePath, 100000000, 'S-84', $categoryId, 0, '70', 'Adds Max MP by 33' );
    }

    protected function addJewelryEarring() {
        $categoryId = $this->jewelryEarringCategory->id;
        $imagePath  = 'item/jewelry/earring';

        seederAddRecipe( 'Tateossian Earring', $imagePath, 100000000, 'S', $categoryId, 0, '70', 'Adds Max MP by 20' );
        seederAddRecipe( 'Dynasty Earring', $imagePath, 100000000, 'S', $categoryId, 0, '70', 'Decreases Sleep Vulnerability by 5' );
        seederAddRecipe( 'Moirai Earring', $imagePath, 100000000, 'S-80', $categoryId, 0, '70', 'Decreases Bleed Vulnerability by 7.62' );
        seederAddRecipe( 'Vesper Earring', $imagePath, 100000000, 'S-84', $categoryId, 0, '70', 'Decreases Sleep Vulnerability by 5<br>Decreases Root Vulnerability by 5' );
    }

    protected function addJewelryRing() {
        $categoryId = $this->jewelryRingCategory->id;
        $imagePath  = 'item/jewelry/ring';

        seederAddRecipe( 'Tateossian Ring', $imagePath, 100000000, 'S', $categoryId, 0, '70', 'Adds Earth Resistance by 1.14' );
        seederAddRecipe( 'Dynasty Ring', $imagePath, 100000000, 'S', $categoryId, 0, '70', 'Adds Dark Resistance by 1.14' );
        seederAddRecipe( 'Moirai Ring', $imagePath, 100000000, 'S-80', $categoryId, 0, '70', 'Adds Max MP by 16' );
        seederAddRecipe( 'Vesper Ring', $imagePath, 100000000, 'S-84', $categoryId, 0, '70', 'Decreases Stun Vulnerability by 4.76' );
    }
}
