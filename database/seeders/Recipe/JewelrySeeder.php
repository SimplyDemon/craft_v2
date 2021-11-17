<?php

namespace Database\Seeders\Recipe;

use App\Models\Category;
use Illuminate\Database\Seeder;

class JewelrySeeder extends Seeder {
    protected Category $jewelryNecklaceCategory;
    protected Category $jewelryEarringCategory;
    protected Category $jewelryRingCategory;

    public function seed() {
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

        seederAddRecipe( 'Adamantite Necklace', $imagePath, 0, 'B', $categoryId, 0, '70', 'Decreases Stun Vulnerability by 3.57' );
        seederAddRecipe( 'Adamantite Necklace 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Decreases Stun Vulnerability by 3.57' );
        seederAddRecipe( 'Black Ore Necklace', $imagePath, 0, 'B', $categoryId, 0, '70', 'Decreases Stun Vulnerability by 4.76' );
        seederAddRecipe( 'Black Ore Necklace 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Decreases Stun Vulnerability by 4.76' );
        seederAddRecipe( 'Phoenix Necklace', $imagePath, 0, 'A', $categoryId, 0, '70', 'Adds Max MP by 21' );
        seederAddRecipe( 'Majestic Necklace', $imagePath, 0, 'A', $categoryId, 0, '70', 'Multiplies M.Def by 1.01' );
        seederAddRecipe( 'Tateossian Necklace', $imagePath, 8000000, 'S', $categoryId, 0, '70', 'Decreases Bleed Vulnerability by 7.61' );
        seederAddRecipe( 'Dynasty Necklace', $imagePath, 0, 'S', $categoryId, 0, '70', 'Adds Max MP by 30' );
        seederAddRecipe( 'Moirai Necklace', $imagePath, 0, 'S-80', $categoryId, 0, '70', 'Decreases Poison Vulnerability by 6' );
        seederAddRecipe( 'Vesper Necklace', $imagePath, 0, 'S-84', $categoryId, 0, '70', 'Adds Max MP by 33' );
    }

    protected function addJewelryEarring() {
        $categoryId = $this->jewelryEarringCategory->id;
        $imagePath  = 'item/jewelry/earring';

        seederAddRecipe( 'Adamantite Earring', $imagePath, 0, 'B', $categoryId, 0, '70', 'Adds Max MP by 17' );
        seederAddRecipe( 'Adamantite Earring 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Adds Max MP by 17' );
        seederAddRecipe( 'Black Ore Earring', $imagePath, 0, 'B', $categoryId, 0, '70', 'Adds Dark Resistance by 1.71' );
        seederAddRecipe( 'Black Ore Earring 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Adds Dark Resistance by 1.71' );
        seederAddRecipe( 'Phoenix Earring', $imagePath, 0, 'A', $categoryId, 0, '70', 'Multiplies M.Def by 1.01' );
        seederAddRecipe( 'Majestic Earring', $imagePath, 0, 'A', $categoryId, 0, '70', 'Decreases Poison Vulnerability by 5.71' );
        seederAddRecipe( 'Tateossian Earring', $imagePath, 10000000, 'S', $categoryId, 0, '70', 'Adds Max MP by 20' );
        seederAddRecipe( 'Dynasty Earring', $imagePath, 0, 'S', $categoryId, 0, '70', 'Decreases Sleep Vulnerability by 5' );
        seederAddRecipe( 'Moirai Earring', $imagePath, 40000000, 'S-80', $categoryId, 0, '70', 'Decreases Bleed Vulnerability by 7.62' );
        seederAddRecipe( 'Vesper Earring', $imagePath, 12000000, 'S-84', $categoryId, 0, '70', 'Decreases Sleep Vulnerability by 5<br>Decreases Root Vulnerability by 5' );
    }

    protected function addJewelryRing() {
        $categoryId = $this->jewelryRingCategory->id;
        $imagePath  = 'item/jewelry/ring';

        seederAddRecipe( 'Adamantite Ring', $imagePath, 0, 'B', $categoryId, 0, '70', 'Multiplies Regen MP by 1.0071' );
        seederAddRecipe( 'Adamantite Ring 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Multiplies Regen MP by 1.0071' );
        seederAddRecipe( 'Black Ore Ring', $imagePath, 0, 'B', $categoryId, 0, '70', 'Adds Max MP by 9' );
        seederAddRecipe( 'Black Ore Ring 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Adds Max MP by 9' );
        seederAddRecipe( 'Phoenix Ring', $imagePath, 0, 'A', $categoryId, 0, '70', 'Multiplies Regen MP by 1.0071' );
        seederAddRecipe( 'Majestic Ring', $imagePath, 0, 'A', $categoryId, 0, '70', 'Adds Max MP by 11' );
        seederAddRecipe( 'Tateossian Ring', $imagePath, 5000000, 'S', $categoryId, 0, '70', 'Adds Earth Resistance by 1.14' );
        seederAddRecipe( 'Dynasty Ring', $imagePath, 0, 'S', $categoryId, 0, '70', 'Adds Dark Resistance by 1.14' );
        seederAddRecipe( 'Moirai Ring', $imagePath, 0, 'S-80', $categoryId, 0, '70', 'Adds Max MP by 16' );
        seederAddRecipe( 'Vesper Ring', $imagePath, 6000000, 'S-84', $categoryId, 0, '70', 'Decreases Stun Vulnerability by 4.76' );
    }
}
