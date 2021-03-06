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

        seederAddRecipe( 'Aquastone Necklace', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 64, );
        seederAddRecipe( 'Necklace of Protection', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 80, );
        seederAddRecipe( 'Necklace of Mermaid', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 121, );
        seederAddRecipe( 'Necklace of Seal', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 6, 174, );
        seederAddRecipe( 'Adamantite Necklace', $imagePath, 0, 'B', $categoryId, 0, '70', 'Увеличивает Сопротивление к Стану на 3.57', null, 1, false, 'Адамантитовое Ожерелье, некля, шея, necklace, ожерелье', 6, 83, );
        seederAddRecipe( 'Adamantite Necklace 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Сопротивление к Стану на 3.57', null, 1, false, 'Адамантитовое Ожерелье, некля, шея, necklace, ожерелье', 6, 83, );
        seederAddRecipe( 'Black Ore Necklace', $imagePath, 0, 'B', $categoryId, 0, '70', 'Увеличивает Сопротивление к Стану на 4.76', null, 1, false, 'Черное Ожерелье, bo, бо, некля, шея, necklace, ожерелье', 126, );
        seederAddRecipe( 'Black Ore Necklace 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Сопротивление к Стану на 4.76', null, 1, false, 'Черное Ожерелье, bo, бо, некля, шея, necklace, ожерелье', 126, );
        seederAddRecipe( 'Phoenix Necklace', $imagePath, 0, 'A', $categoryId, 0, '70', 'Увеличивает MP на 21', null, 1, false, 'Ожерелье Феникса, некля, шея, necklace, ожерелье', 7, 107, );
        seederAddRecipe( 'Majestic Necklace', $imagePath, 0, 'A', $categoryId, 0, '70', 'Увеличивает Маг. Защ. на 1%', null, 1, false, 'Ожерелье Величия, мж, mj, некля, шея, necklace, ожерелье', null, 160 );
        seederAddRecipe( 'Tateossian Necklace', $imagePath, 0, 'S', $categoryId, 0, '70', 'Увеличивает Защиту от Кровотечений на 7.61', null, 1, false, 'Ожерелье Татеосса, тт, tt, некля, шея, necklace, ожерелье', null, 209 );
        seederAddRecipe( 'Dynasty Necklace', $imagePath, 0, 'S', $categoryId, 0, '70', 'Увеличивает MP на 30', null, 1, false, 'Ожерелье Династии, дино, некля, шея, necklace, ожерелье', null, 258 );
        seederAddRecipe( 'Moirai Necklace', $imagePath, 0, 'S-80', $categoryId, 0, '70', 'Увеличивает Защиту от Отправления на 6', null, 1, false, 'Ожерелье Дестино, moirai, морай, некля, шея, necklace, ожерелье', null, 356 );
        seederAddRecipe( 'Vesper Necklace', $imagePath, 0, 'S-84', $categoryId, 0, '70', 'Увеличивает MP на 33', null, 1, false, 'Ожерелье Венеры, веспер, некля, шея, necklace, ожерелье', null, 494 );
    }

    protected function addJewelryEarring() {
        $categoryId = $this->jewelryEarringCategory->id;
        $imagePath  = 'item/jewelry/earring';

        seederAddRecipe( 'Moonstone Earring', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 48, );
        seederAddRecipe( 'Earring of Protection', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 60, );
        seederAddRecipe( 'Earring of Seal', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 91, );
        seederAddRecipe( 'Nassen\'s Earring', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 6, 130, );
        seederAddRecipe( 'Adamantite Earring', $imagePath, 0, 'B', $categoryId, 0, '70', 'Увеличивает MP на 17', null, 1, false, 'Адамантитовая Серьга', 6, 62, );
        seederAddRecipe( 'Adamantite Earring 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает MP на 17', null, 1, false, 'Адамантитовая Серьга', 6, 62, );
        seederAddRecipe( 'Black Ore Earring', $imagePath, 0, 'B', $categoryId, 0, '70', 'Увеличивает Защиту от Тьмы на 1.71', null, 1, false, 'Черная Серьга, бо, bo', null, 95 );
        seederAddRecipe( 'Black Ore Earring 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Защиту от Тьмы на 1.71', null, 1, false, 'Черная Серьга, бо, bo', null, 95 );
        seederAddRecipe( 'Phoenix Earring', $imagePath, 0, 'A', $categoryId, 0, '70', 'Увеличивает Маг. Защ. на 1%', null, 1, false, 'Серьга Феникса', 7, 80, );
        seederAddRecipe( 'Majestic Earring', $imagePath, 0, 'A', $categoryId, 0, '70', 'Увеличивает Защиту от Отправления на 5.71', null, 1, false, 'Серьга Величия, мж, mj', null, 104 );
        seederAddRecipe( 'Tateossian Earring', $imagePath, 0, 'S', $categoryId, 0, '70', 'Увеличивает MP на 20', null, 1, false, 'Серьга Татеосса, тт, tt', null, 157 );
        seederAddRecipe( 'Dynasty Earring', $imagePath, 0, 'S', $categoryId, 0, '70', 'Увеличивает Защиту от Сна на 5', null, 1, false, 'Серьга Династии, дино', null, 194 );
        seederAddRecipe( 'Moirai Earring', $imagePath, 0, 'S-80', $categoryId, 0, '70', 'Увеличивает Защиту от Кровотечений на 7.62', null, 1, false, 'Серьга Дестино, moirai, морай', null, 267 );
        seederAddRecipe( 'Vesper Earring', $imagePath, 0, 'S-84', $categoryId, 0, '70', 'Увеличивает Защиту от Сна на 5<br>Увеличивает Защиту от Рута на 5', null, 1, false, 'Серьга Венеры, веспер', null, 370 );
    }

    protected function addJewelryRing() {
        $categoryId = $this->jewelryRingCategory->id;
        $imagePath  = 'item/jewelry/ring';

        seederAddRecipe( 'Aquastone Ring', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 32, );
        seederAddRecipe( 'Ring of Protection', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 40, );
        seederAddRecipe( 'Ring of Ages', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 60, );
        seederAddRecipe( 'Ring of Seal', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 6, 87, );
        seederAddRecipe( 'Adamantite Ring', $imagePath, 0, 'B', $categoryId, 0, '70', 'Увеличивает Реген MP на 0.71%', null, 1, false, 'Адамантитовое Кольцо', 6, 41, );
        seederAddRecipe( 'Adamantite Ring 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Реген MP на 0.71%', null, 1, false, 'Адамантитовое Кольцо', 6, 41, );
        seederAddRecipe( 'Black Ore Ring', $imagePath, 0, 'B', $categoryId, 0, '70', 'Увеличивает MP на 9', null, 1, false, 'Черное Кольцо, бо, bo', null, 63 );
        seederAddRecipe( 'Black Ore Ring 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает MP на 9', null, 1, false, 'Черное Кольцо, бо, bo', null, 63 );
        seederAddRecipe( 'Phoenix Ring', $imagePath, 0, 'A', $categoryId, 0, '70', 'Увеличивает Реген MP на 0.71%', null, 1, false, 'Кольцо Феникса', 7, 54, );
        seederAddRecipe( 'Majestic Ring', $imagePath, 0, 'A', $categoryId, 0, '70', 'Увеличивает MP на 11', null, 1, false, 'Кольцо Величия, мж, mj', null, 80 );
        seederAddRecipe( 'Tateossian Ring', $imagePath, 0, 'S', $categoryId, 0, '70', 'Увеличивает Защиту от Земли на 1.14', null, 1, false, 'Кольцо Татеосса, тт, tt', null, 105 );
        seederAddRecipe( 'Dynasty Ring', $imagePath, 0, 'S', $categoryId, 0, '70', 'Увеличивает Защиту от Тьмы на 1.14', null, 1, false, 'Кольцо Династии, дино', null, 129 );
        seederAddRecipe( 'Moirai Ring', $imagePath, 0, 'S-80', $categoryId, 0, '70', 'Увеличивает MP на 16', null, 1, false, 'Кольцо Дестино, moirai, морай', null, 178 );
        seederAddRecipe( 'Vesper Ring', $imagePath, 0, 'S-84', $categoryId, 0, '70', 'Увеличивает Сопротивление к Стану на 4.76', null, 1, false, 'Кольцо Венеры, веспер', null, 247 );
    }
}
