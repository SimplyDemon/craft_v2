<?php

namespace Database\Seeders\Recipe;

use App\Models\Category;
use Illuminate\Database\Seeder;

class JewerlySeeder extends Seeder {
    protected Category $jewerlyNecklaceCategory;
    protected Category $jewerlyEarringCategory;
    protected Category $jewerlyRingCategory;

    public function seedJewerly() {
        $this->setJewerlyCategories();
        $this->addJewerly();
    }

    protected function addJewerly() {
        $this->addJewerlyNecklace();
        $this->addJewerlyEarring();
        $this->addJewerlyRing();
    }


    protected function setJewerlyCategories() {
        $jewerlyCategory = Category::where( 'name', 'Jewerly' )->firstOrFail();

        $this->jewerlyNecklaceCategory = Category::where( 'name', 'Necklace' )->where( 'category_id', $jewerlyCategory->id )->firstOrFail();
        $this->jewerlyEarringCategory  = Category::where( 'name', 'Earring' )->where( 'category_id', $jewerlyCategory->id )->firstOrFail();
        $this->jewerlyRingCategory     = Category::where( 'name', 'Ring' )->where( 'category_id', $jewerlyCategory->id )->firstOrFail();
    }

    protected function addJewerlyNecklace() {
        $categoryId = $this->jewerlyNecklaceCategory->id;
        $imagePath  = 'item/jewerly/necklace';

        seederAddRecipe( 'Tateossian Necklace', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Necklace', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Necklace', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Necklace', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addJewerlyEarring() {
        $categoryId = $this->jewerlyEarringCategory->id;
        $imagePath  = 'item/jewerly/earring';

        seederAddRecipe( 'Tateossian Earring', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Earring', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Earring', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Earring', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addJewerlyRing() {
        $categoryId = $this->jewerlyRingCategory->id;
        $imagePath  = 'item/jewerly/ring';

        seederAddRecipe( 'Tateossian Ring', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Ring', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Ring', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Ring', $imagePath, 100000000, 'S-84', $categoryId );
    }
}
