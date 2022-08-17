<?php

namespace Database\Seeders\Recipe\NonCraftable;

use App\Models\Category;
use App\Models\Recipe;
use Database\Seeders\NonCraftableRecipesSeeder;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Ramsey\Collection\Collection;

class Jewelry extends NonCraftableRecipesSeeder
{
    protected Category $jewelryNecklaceCategory;
    protected Category $jewelryEarringCategory;
    protected Category $jewelryRingCategory;

    public function seed()
    {
        $this->setJewelryCategories();
        $this->addJewelry();
    }

    protected function addJewelry()
    {
        $this->addJewelryNecklace();
        $this->addJewelryEarring();
        $this->addJewelryRing();
    }


    protected function setJewelryCategories()
    {
        $jewelryCategory = Category::where('name', 'Jewelry')->firstOrFail();

        $this->jewelryNecklaceCategory = Category::where('name', 'Necklace')->where(
            'category_id',
            $jewelryCategory->id
        )->firstOrFail();
        $this->jewelryEarringCategory = Category::where('name', 'Earring')->where(
            'category_id',
            $jewelryCategory->id
        )->firstOrFail();
        $this->jewelryRingCategory = Category::where('name', 'Ring')->where(
            'category_id',
            $jewelryCategory->id
        )->firstOrFail();
    }

    protected function addJewelryNecklace()
    {
        $categoryId = $this->jewelryNecklaceCategory->id;
        $imagePath = 'item/jewelry/necklace';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Necklace of Frintezza',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Фринта шея, фринтеза',
                crystalsCount: 230,
                defenceMagic: 95,
                favoriteText: 'Увеличивает МП на 42. Увеличивает сопротивление к Ядам на 25. Увеличивает сопротивление к Кровотечениям на 25. Увеличивает сопротивление к Параличу на 15. Увеличивает сопротивление к Станам на 15. Увеличивает сопротивление к Слипу на 15. Увеличивает сопротивление к Тьме на 15. Увеличивает вероятность Ядов на 25. Увеличивает вероятность Кровотечениий на 25. Увеличивает вероятность Паралича на 15. Увеличивает вероятность Стана на 15. Увеличивает вероятность Слипа на 15. Ускоряет откат на 5%. Увеличивает отражение урона на 4%',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Necklace of Valakas',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Валакаса шея',
                crystalsCount: 237,
                defenceMagic: 125,
                favoriteText: 'Увеличивает МП на 50. Увеличивает сопротивление к Огню на 15. Увеличивает сопротивление к Слипу на 40. Увеличивает вероятность Слипа на 40. Увеличивает ХП на 445. Увеличивает Физ. Атаку на 4%. Увеличивает Маг. Атаку на 8%. Увеличивает вероятность Маг. Крит. Атаки на 2. Ускоряет откат на 10%. Увеличивает отражение урона на 5%',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Necklace of Freya',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Фрея шея, фреи',
                crystalsCount: 729,
                defenceMagic: 125,
                favoriteText: 'Увеличивает МП на 50. Увеличивает реген МП на 0.23. Увеличивает сопротивление к Кровотечениям на 20. Увеличивает сопротивление к Ментальным атакам на 10. Увеличивает сопротивление к Параличу на 15. Увеличивает сопротивление к Стану на 15. Увеличивает сопротивление к Слипу на 15. Увеличивает сопротивление к Воде на 10.  Ускоряет откат Маг. Скилов на 5%. Увеличивает отражение урона на 4%',
                isNonCraftable: true,
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Blessed Necklace of Freya',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Блесс Фрея шея, фреи',
                crystalsCount: 729,
                defenceMagic: 132,
                favoriteText: 'Увеличивает МП на 50. Увеличивает реген МП на 0.46. Увеличивает сопротивление к Кровотечениям на 25. Увеличивает сопротивление к Ментальным атакам на 10. Увеличивает сопротивление к Параличу на 20. Увеличивает сопротивление к Стану на 20. Увеличивает сопротивление к Слипу на 20. Увеличивает сопротивление к Воде на 15. Ускоряет откат Маг. Скилов на 5%. Уменьшает потребление МП на Маг Скилы на 5%. Увеличивает отражение урона на 4%. Увеличивает ХП на 15. MEN +2. CON +1. STR-1',
                isNonCraftable: true,
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Necklace',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал шея',
                crystalsCount: 872,
                defenceMagic: 131,
                favoriteText: 'Увеличивает МП на 51',
                isNonCraftable: true,
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Necklace',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия шея',
                crystalsCount: 1046,
                defenceMagic: 138,
                favoriteText: 'Увеличивает МП на 52',
                isNonCraftable: true,
            )
        );
    }

    protected function addJewelryEarring()
    {
        $categoryId = $this->jewelryEarringCategory->id;
        $imagePath = 'item/jewelry/earring';


        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Earring of Orfen',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Орфена серьги',
                crystalsCount: 104,
                defenceMagic: 71,
                favoriteText: 'Увеличивает МП на 31. Увеличивает сопротивление к Кровотечениям на 20. Увеличивает вероятность Кровотечения на 20. Увеличивает ХП на 6%',
                isNonCraftable: true,
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Earring of Zaken',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Закена серьги',
                crystalsCount: 124,
                defenceMagic: 71,
                favoriteText: 'Увеличивает МП на 31. Увеличивает сопротивление к Кровотечениям на 30. Увеличивает сопротивление к Станам на 20. Увеличивает сопротивление к Ментальным Атакам на 20. Увеличивает вероятность Кровотечения на 30. Увеличивает вероятность Стана на 20. Увеличивает вероятность Ментальной Атаки на 20. Увеличивает восстановление ХП на 10%. Увеличивает Вампиризм на 4%',
                isNonCraftable: true,
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Earring of Antharas',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Антараса серьги',
                crystalsCount: 178,
                defenceMagic: 94,
                favoriteText: 'Увеличивает МП на 37. Увеличивает сопротивление к Кровотечениям на 40. Увеличивает сопротивление к Станам на 30. Увеличивает сопротивление к Ментальным Атакам на 30. Увеличивает вероятность Кровотечения на 40. Увеличивает вероятность Стана на 30. Увеличивает вероятность Ментальной Атаки на 30. Увеличивает ХП на 10%. Увеличивает Вампиризм на 4%. Увеличивает сопротивление к Земле на 15. Уменьшает потребление МП на 5%',
                isNonCraftable: true,
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Blessed Earring of Zaken',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Блес Закена серьги',
                crystalsCount: 547,
                defenceMagic: 94,
                favoriteText: 'Увеличивает МП на 37. Увеличивает сопротивление к Кровотечениям на 30. Увеличивает сопротивление к Станам на 30. Увеличивает сопротивление к Ментальным Атакам на 30. Увеличивает вероятность Кровотечения на 30. Увеличивает вероятность Стана на 30. Увеличивает вероятность Ментальной Атаки на 30. Увеличивает восстановление ХП на 15%. Увеличивает Вампиризм на 4%. Увеличивает сопротивление к Тьме на 15',
                isNonCraftable: true,
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Baylor\'s Earring',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Байлора серьги',
                crystalsCount: 654,
                defenceMagic: 98,
                favoriteText: 'Увеличивает МП на 31. Увеличивает сопротивление к Тьме на 30',
                isNonCraftable: true,
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Earring',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал серьги',
                crystalsCount: 654,
                defenceMagic: 98,
                favoriteText: 'Увеличивает МП на 38',
                isNonCraftable: true,
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Earring',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия серьги',
                crystalsCount: 785,
                defenceMagic: 104,
                favoriteText: 'Увеличивает МП на 39',
                isNonCraftable: true,
            )
        );
    }

    protected function addJewelryRing()
    {
        $categoryId = $this->jewelryRingCategory->id;
        $imagePath = 'item/jewelry/ring';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Ring of Queen Ant',
                $imagePath,
                0,
                'B',
                $categoryId,
                keywords: 'АК кольцо',
                crystalsCount: 82,
                defenceMagic: 48,
                favoriteText: 'Увеличивает МП на 21. Увеличивает сопротивления к ядам на 30.  Увеличивает сопротивления к рутам на 20. Увеличивает вероятность отравления на 30. Увеличивает вероятность рута на 20. Увеличивает Точность на 2. Увеличивает мощь Крит Удара на 15%',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Ring of Core',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Коре кольцо',
                crystalsCount: 69,
                defenceMagic: 48,
                favoriteText: 'Увеличивает МП на 21. Увеличивает сопротивления к ядам на 20. Увеличивает вероятность отравления на 30. Увеличивает Точность на 1',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Ring of Baium',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Баюма кольцо',
                crystalsCount: 83,
                defenceMagic: 48,
                favoriteText: 'Увеличивает МП на 21. Увеличивает сопротивления к ядам на 40.  Увеличивает сопротивления к рутам на 30. Увеличивает вероятность отравления на 40. Увеличивает вероятность рута на 30. Увеличивает Точность на 2. Увеличивает мощь Крит Удара на 15%. Увеличивает Скорость Физ. Атаки на 4%. Увеличивает Скорость Маг. Атаки на 4%',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Ring of Beleth',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Белефа кольцо',
                crystalsCount: 436,
                defenceMagic: 48,
                favoriteText: 'Увеличивает МП на 38. Увеличивает Маг Защиту на 12%. Увеличивает сопротивления к Ментальным Атакам на 10. Увеличивает вероятность Ментальных Атак на 10. Увеличивает сопротивление к Тьме на 30. Увеличивает ХП на 105. Увеличивает реген МП на 0.23',
                isNonCraftable: true,
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Ring',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал кольцо',
                crystalsCount: 436,
                defenceMagic: 65,
                favoriteText: 'Увеличивает МП на 26',
                isNonCraftable: true,
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Ring',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия кольцо',
                crystalsCount: 523,
                defenceMagic: 69,
                favoriteText: 'Увеличивает МП на 27',
                isNonCraftable: true,
            )
        );
    }

}
