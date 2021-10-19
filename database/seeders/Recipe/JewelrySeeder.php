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

        seederAddRecipe( 'Tateossian Necklace', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Necklace', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Necklace', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Necklace', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addJewelryEarring() {
        $categoryId = $this->jewelryEarringCategory->id;
        $imagePath  = 'item/jewelry/earring';

        seederAddRecipe( 'Tateossian Earring', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Earring', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Earring', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Earring', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addJewelryRing() {
        $categoryId = $this->jewelryRingCategory->id;
        $imagePath  = 'item/jewelry/ring';

        seederAddRecipe( 'Tateossian Ring', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Ring', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Ring', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Ring', $imagePath, 100000000, 'S-84', $categoryId );
    }
}
