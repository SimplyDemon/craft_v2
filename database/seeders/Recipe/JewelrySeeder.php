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

        seederAddRecipe( 'Adamantite Necklace', $imagePath, 1800000, 'B', $categoryId, 0, '70', 'Decreases Stun Vulnerability by 3.57', null, 1, false, 'Адамантитовое Ожерелье, некля, шея, necklace, ожерелье' );
        seederAddRecipe( 'Adamantite Necklace 100%', $imagePath, 1800000, 'B', $categoryId, 0, '100', 'Decreases Stun Vulnerability by 3.57', null, 1, false, 'Адамантитовое Ожерелье, некля, шея, necklace, ожерелье' );
        seederAddRecipe( 'Black Ore Necklace', $imagePath, 2000000, 'B', $categoryId, 0, '70', 'Decreases Stun Vulnerability by 4.76', null, 1, false, 'Черное Ожерелье, bo, бо, некля, шея, necklace, ожерелье' );
        seederAddRecipe( 'Black Ore Necklace 100%', $imagePath, 2000000, 'B', $categoryId, 0, '100', 'Decreases Stun Vulnerability by 4.76', null, 1, false, 'Черное Ожерелье, bo, бо, некля, шея, necklace, ожерелье' );
        seederAddRecipe( 'Phoenix Necklace', $imagePath, 0, 'A', $categoryId, 0, '70', 'Adds Max MP by 21', null, 1, false, 'Ожерелье Феникса, некля, шея, necklace, ожерелье' );
        seederAddRecipe( 'Majestic Necklace', $imagePath, 0, 'A', $categoryId, 0, '70', 'Multiplies M.Def by 1.01', null, 1, false, 'Ожерелье Величия, мж, mj, некля, шея, necklace, ожерелье' );
        seederAddRecipe( 'Tateossian Necklace', $imagePath, 8000000, 'S', $categoryId, 0, '70', 'Decreases Bleed Vulnerability by 7.61', null, 1, false, 'Ожерелье Татеосса, тт, tt, некля, шея, necklace, ожерелье' );
        seederAddRecipe( 'Dynasty Necklace', $imagePath, 0, 'S', $categoryId, 0, '70', 'Adds Max MP by 30', null, 1, false, 'Ожерелье Династии, дино, некля, шея, necklace, ожерелье' );
        seederAddRecipe( 'Moirai Necklace', $imagePath, 0, 'S-80', $categoryId, 0, '70', 'Decreases Poison Vulnerability by 6', null, 1, false, 'Ожерелье Дестино, moirai, морай, некля, шея, necklace, ожерелье' );
        seederAddRecipe( 'Vesper Necklace', $imagePath, 15000000, 'S-84', $categoryId, 0, '70', 'Adds Max MP by 33', null, 1, false, 'Ожерелье Венеры, веспер, некля, шея, necklace, ожерелье' );
    }

    protected function addJewelryEarring() {
        $categoryId = $this->jewelryEarringCategory->id;
        $imagePath  = 'item/jewelry/earring';

        seederAddRecipe( 'Adamantite Earring', $imagePath, 800000, 'B', $categoryId, 0, '70', 'Adds Max MP by 17', null, 1, false, 'Адамантитовая Серьга' );
        seederAddRecipe( 'Adamantite Earring 100%', $imagePath, 800000, 'B', $categoryId, 0, '100', 'Adds Max MP by 17', null, 1, false, 'Адамантитовая Серьга' );
        seederAddRecipe( 'Black Ore Earring', $imagePath, 1200000, 'B', $categoryId, 0, '70', 'Adds Dark Resistance by 1.71', null, 1, false, 'Черная Серьга, бо, bo' );
        seederAddRecipe( 'Black Ore Earring 100%', $imagePath, 1200000, 'B', $categoryId, 0, '100', 'Adds Dark Resistance by 1.71', null, 1, false, 'Черная Серьга, бо, bo' );
        seederAddRecipe( 'Phoenix Earring', $imagePath, 0, 'A', $categoryId, 0, '70', 'Multiplies M.Def by 1.01', null, 1, false, 'Серьга Феникса' );
        seederAddRecipe( 'Majestic Earring', $imagePath, 5500000, 'A', $categoryId, 0, '70', 'Decreases Poison Vulnerability by 5.71', null, 1, false, 'Серьга Величия, мж, mj' );
        seederAddRecipe( 'Tateossian Earring', $imagePath, 10000000, 'S', $categoryId, 0, '70', 'Adds Max MP by 20', null, 1, false, 'Серьга Татеосса, тт, tt' );
        seederAddRecipe( 'Dynasty Earring', $imagePath, 0, 'S', $categoryId, 0, '70', 'Decreases Sleep Vulnerability by 5', null, 1, false, 'Серьга Династии, дино' );
        seederAddRecipe( 'Moirai Earring', $imagePath, 27000000, 'S-80', $categoryId, 0, '70', 'Decreases Bleed Vulnerability by 7.62', null, 1, false, 'Серьга Дестино, moirai, морай' );
        seederAddRecipe( 'Vesper Earring', $imagePath, 10000000, 'S-84', $categoryId, 0, '70', 'Decreases Sleep Vulnerability by 5<br>Decreases Root Vulnerability by 5', null, 1, false, 'Серьга Венеры, веспер' );
    }

    protected function addJewelryRing() {
        $categoryId = $this->jewelryRingCategory->id;
        $imagePath  = 'item/jewelry/ring';

        seederAddRecipe( 'Adamantite Ring', $imagePath, 650000, 'B', $categoryId, 0, '70', 'Multiplies Regen MP by 1.0071', null, 1, false, 'Адамантитовое Кольцо' );
        seederAddRecipe( 'Adamantite Ring 100%', $imagePath, 650000, 'B', $categoryId, 0, '100', 'Multiplies Regen MP by 1.0071', null, 1, false, 'Адамантитовое Кольцо' );
        seederAddRecipe( 'Black Ore Ring', $imagePath, 1000000, 'B', $categoryId, 0, '70', 'Adds Max MP by 9', null, 1, false, 'Черное Кольцо, бо, bo' );
        seederAddRecipe( 'Black Ore Ring 100%', $imagePath, 1000000, 'B', $categoryId, 0, '100', 'Adds Max MP by 9', null, 1, false, 'Черное Кольцо, бо, bo' );
        seederAddRecipe( 'Phoenix Ring', $imagePath, 3000000, 'A', $categoryId, 0, '70', 'Multiplies Regen MP by 1.0071', null, 1, false, 'Кольцо Феникса' );
        seederAddRecipe( 'Majestic Ring', $imagePath, 0, 'A', $categoryId, 0, '70', 'Adds Max MP by 11', null, 1, false, 'Кольцо Величия, мж, mj' );
        seederAddRecipe( 'Tateossian Ring', $imagePath, 8000000, 'S', $categoryId, 0, '70', 'Adds Earth Resistance by 1.14', null, 1, false, 'Кольцо Татеосса, тт, tt' );
        seederAddRecipe( 'Dynasty Ring', $imagePath, 0, 'S', $categoryId, 0, '70', 'Adds Dark Resistance by 1.14', null, 1, false, 'Кольцо Династии, дино' );
        seederAddRecipe( 'Moirai Ring', $imagePath, 0, 'S-80', $categoryId, 0, '70', 'Adds Max MP by 16', null, 1, false, 'Кольцо Дестино, moirai, морай' );
        seederAddRecipe( 'Vesper Ring', $imagePath, 6000000, 'S-84', $categoryId, 0, '70', 'Decreases Stun Vulnerability by 4.76', null, 1, false, 'Кольцо Венеры, веспер' );
    }
}
