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

class Weapon extends NonCraftableRecipesSeeder
{
    protected Category $swordCategory;
    protected Category $bluntCategory;
    protected Category $bowCategory;
    protected Category $daggerCategory;
    protected Category $polearmCategory;
    protected Category $fistCategory;
    protected Category $dualSwordCategory;
    protected Category $dualDaggerCategory;


    public function seed()
    {
        try {
            $this->setWeaponCategories();
            $this->addWeapon();
        } catch (Exception $e) {
            $this->addedRecipesCollection->each(function ($value, $key) {
                $value->forceDelete();
            });
            var_dump($e->getMessage());
            var_dump($this->addedRecipesCollection->count());
            Log::error('Seeder error' . $e->getMessage());
        }
    }

    protected function setWeaponCategories()
    {
        $this->swordCategory = Category::where('name', 'Sword')->firstOrFail();
        $this->bluntCategory = Category::where('name', 'Blunt')->firstOrFail();
        $this->bowCategory = Category::where('name', 'Bow')->firstOrFail();
        $this->daggerCategory = Category::where('name', 'Dagger')->firstOrFail();
        $this->polearmCategory = Category::where('name', 'Polearm')->firstOrFail();
        $this->fistCategory = Category::where('name', 'Fist')->firstOrFail();

        $weaponCategoryId = 1;
        $dualSwordCategory = Category::where('name', 'Dual Sword')->first() ?? Category::create([
                'name' => 'Dual Sword',
                'slug' => Str::slug('Dual Sword', '-'),
                'category_id' => $weaponCategoryId,
            ]);
        $this->dualSwordCategory = $dualSwordCategory;

        $dualDaggerCategory = Category::where('name', 'Dual Dagger')->first() ?? Category::create([
                'name' => 'Dual Dagger',
                'slug' => Str::slug('Dual Dagger', '-'),
                'category_id' => $weaponCategoryId,
            ]);
        $this->dualDaggerCategory = $dualDaggerCategory;
    }

    protected function addWeapon()
    {
        $this->addSwords();
        $this->addBlunts();
        $this->addBows();
        $this->addDaggers();
        $this->addPolearms();
        $this->addFists();
        $this->addDualSwords();
        $this->addDualDaggers();
    }

    protected function addSwords()
    {
        $categoryId = $this->swordCategory->id;
        $imagePath = 'item/weapon/sword';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Mardil\'s Fan',
                $imagePath,
                0,
                'A',
                $categoryId,
                masterworkDescription: 'Увеличивает Силу Хила',
                masterworkName: 'Holy Spirit',
                keywords: 'Веер, Мардилла',
                crystalsCount: 840,
                saLvl: 12,
                saGemCount: 140,
                saRedName: 'Acumen',
                saGreenName: 'Magic Silence',
                saBlueName: 'M. Atk.',
                saRedDescription: 'Увеличивает Скорость Каста на 15%',
                saGreenDescription: 'Даёт 10% шанс наложить Безмолвие при использовании вредоносного умения на цель',
                saBlueDescription: 'При использовании магических умений увеличивает потребление МП на 15% и Увеличивает Маг. Атк. на 167',
                isMage: true,
                attackPhysic: 186,
                attackMagic: 152,
                favoriteText: 'С вероятностью 4% при получении урона увеличит Скорость Каста на 15%, АТТ ветра на 30 единиц в течении 15 сек.',
                isTwoHands: false,
                age: null,
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Blood Brother',
                $imagePath,
                0,
                'S',
                $categoryId,
                masterworkDescription: 'Увеличивает Скорость Атаки на 5%',
                masterworkName: 'Great Gale',
                keywords: 'блуд, братан',
                crystalsCount: 3597,
                saLvl: 14,
                saGemCount: 285,
                saRedName: 'Focus',
                saGreenName: 'Health',
                saBlueName: 'Light',
                saRedDescription: 'Увеличивает Физ. Крит. Атк. на 111',
                saGreenDescription: 'Увеличивает HP на 25%',
                saBlueDescription: 'Увеличивает лимит веса на 20%',
                isMage: false,
                attackPhysic: 405,
                attackMagic: 151,
                favoriteText: 'С вероятностью 2%, во время атаки, Застанит и уменьшит Физ. Защиту цели на 23% в течении 9 сек.',
                isTwoHands: true,
                age: 'dynasty',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Hellblade',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Хелблейд',
                crystalsCount: 7050,
                saLvl: 16,
                saGemCount: 623,
                saRedName: 'Haste',
                saGreenName: 'Focus',
                saBlueName: 'Health',
                saRedDescription: 'Увеличивает Скорость атаки на 11%',
                saGreenDescription: 'Увеличивает Физ. Крит. Атк. на 131',
                saBlueDescription: 'Увеличивает HP на 25%',
                isMage: false,
                attackPhysic: 396,
                attackMagic: 176,
                favoriteText: 'С вероятностью 2%, во время атаки, наносит урон и вызывает кровотечении (52 урона в секунду) в течении 20 сек.',
                isTwoHands: false,
                age: 'vesper',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Periel Sword',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Пирил',
                crystalsCount: 8233,
                saLvl: 17,
                saGemCount: 1073,
                saRedName: 'Focus',
                saGreenName: 'Haste',
                saBlueName: 'Health',
                saRedDescription: 'Увеличивает Физ. Крит. Атк. на 134',
                saGreenDescription: 'Увеличивает Скорость атаки на 11%',
                saBlueDescription: 'Увеличивает HP на 25%',
                isMage: false,
                attackPhysic: 415,
                attackMagic: 183,
                favoriteText: null,
                isTwoHands: false,
                age: 'vorpal',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Feather Eye Blade',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                crystalsCount: 8233,
                saLvl: 17,
                saGemCount: 1073,
                saRedName: 'Focus',
                saGreenName: 'Haste',
                saBlueName: 'Health',
                saRedDescription: 'Увеличивает Физ. Крит. Атк. на 134',
                saGreenDescription: 'Увеличивает Скорость атаки на 11%',
                saBlueDescription: 'Увеличивает HP на 25%',
                isMage: false,
                attackPhysic: 505,
                attackMagic: 183,
                favoriteText: null,
                isTwoHands: true,
                age: 'vorpal',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Veniplant Sword',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                crystalsCount: 8233,
                saLvl: 17,
                saGemCount: 1073,
                saRedName: 'Magic Hold',
                saGreenName: 'Mana Up',
                saBlueName: 'Acumen',
                saRedDescription: 'Дает шанс 20% наложить Dryad Root при использовании вредоносного умения на цель',
                saGreenDescription: 'Увеличивает MP на 30%',
                saBlueDescription: 'Увеличивает Скорость Каста на 15%',
                isMage: true,
                attackPhysic: 332,
                attackMagic: 244,
                isTwoHands: false,
                age: 'vorpal',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Eternal Core Sword',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Етернал, Этернал',
                crystalsCount: 9872,
                saLvl: 18,
                saGemCount: 2022,
                saRedName: 'Health',
                saGreenName: 'Focus',
                saBlueName: 'Haste',
                saRedDescription: 'Увеличивает HP на 25%',
                saGreenDescription: 'Увеличивает Физ. Крит. Атк. на 134',
                saBlueDescription: 'Увеличивает Скорость атаки на 11%',
                isMage: false,
                attackPhysic: 437,
                attackMagic: 192,
                isTwoHands: false,
                age: 'elegia',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Lava Saw',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Лава',
                crystalsCount: 9872,
                saLvl: 18,
                saGemCount: 2022,
                saRedName: 'Health',
                saGreenName: 'Focus',
                saBlueName: 'Haste',
                saRedDescription: 'Увеличивает HP на 25%',
                saGreenDescription: 'Увеличивает Физ. Крит. Атк. на 134',
                saBlueDescription: 'Увеличивает Скорость атаки на 11%',
                isMage: false,
                attackPhysic: 532,
                attackMagic: 192,
                isTwoHands: true,
                age: 'elegia',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Archangel Sword',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Архангел',
                crystalsCount: 9872,
                saLvl: 18,
                saGemCount: 2022,
                saRedName: 'Acumen',
                saGreenName: 'Magic Hold',
                saBlueName: 'Mana Up',
                saRedDescription: 'Увеличивает Скорость Каста на 15%',
                saGreenDescription: 'Дает шанс 20% наложить Dryad Root при использовании вредоносного умения на цель',
                saBlueDescription: 'Увеличивает MP на 30%',
                isMage: true,
                attackPhysic: 350,
                attackMagic: 256,
                isTwoHands: false,
                age: 'elegia',
                isNonCraftable: true,
            )
        );
    }

    protected function addBlunts()
    {
        $categoryId = $this->bluntCategory->id;
        $imagePath = 'item/weapon/blunt';
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Claw of Destruction',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Коса',
                crystalsCount: 7050,
                saLvl: 16,
                saGemCount: 623,
                saRedName: 'Health',
                saGreenName: 'HP Regeneration',
                saBlueName: 'HP Drain',
                saRedDescription: 'Увеличивает HP на 25%',
                saGreenDescription: 'Увеличивает восстановление HP',
                saBlueDescription: 'Даёт 4% вампиризма',
                isMage: false,
                attackPhysic: 396,
                attackMagic: 176,
                favoriteText: 'С вероятностью 2%, во время атаки, зафиряет цель в течении 10 сек.',
                isTwoHands: false,
                age: 'vesper',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vigwik Axe',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Вигвик',
                crystalsCount: 8233,
                saLvl: 17,
                saGemCount: 1073,
                saRedName: 'HP Drain',
                saGreenName: 'HP Regeneration',
                saBlueName: 'Health',
                saRedDescription: 'Даёт 4% вампиризма',
                saGreenDescription: 'Увеличивает восстановление HP',
                saBlueDescription: 'Увеличивает HP на 25%',
                isMage: false,
                attackPhysic: 415,
                attackMagic: 183,
                isTwoHands: false,
                age: 'vorpal',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Devilish Maul',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Маул',
                crystalsCount: 8233,
                saLvl: 17,
                saGemCount: 1073,
                saRedName: 'HP Drain',
                saGreenName: 'HP Regeneration',
                saBlueName: 'Health',
                saRedDescription: 'Даёт 4% вампиризма',
                saGreenDescription: 'Увеличивает восстановление HP',
                saBlueDescription: 'Увеличивает HP на 25%',
                isMage: false,
                attackPhysic: 505,
                attackMagic: 183,
                isTwoHands: true,
                age: 'vorpal',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Rising Star',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Стар',
                crystalsCount: 8233,
                saLvl: 17,
                saGemCount: 1073,
                saRedName: 'Mana Up',
                saGreenName: 'Acumen',
                saBlueName: 'MP Regeneration',
                saRedDescription: 'Увеличивает MP на 30%',
                saGreenDescription: 'Увеличивает Скорость Каста на 15%',
                saBlueDescription: 'Увеличивает восстановление MP',
                isMage: true,
                attackPhysic: 332,
                attackMagic: 244,
                isTwoHands: false,
                age: 'vorpal',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Black Visage',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Визаж',
                crystalsCount: 8233,
                saLvl: 17,
                saGemCount: 1073,
                saRedName: 'Magic Hold',
                saGreenName: 'Empower',
                saBlueName: 'MP Regeneration',
                saRedDescription: 'Дает шанс 20% наложить Dryad Root при использовании вредоносного умения на цель',
                saGreenDescription: 'Увеличивает Маг. Атк. на 167',
                saBlueDescription: 'Увеличивает восстановление MP',
                isMage: true,
                attackPhysic: 332,
                attackMagic: 244,
                isTwoHands: false,
                age: 'vorpal',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Eversor Mace',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Еверзор',
                crystalsCount: 9872,
                saLvl: 18,
                saGemCount: 2022,
                saRedName: 'Health',
                saGreenName: 'HP Regeneration',
                saBlueName: 'HP Drain',
                saRedDescription: 'Увеличивает HP на 25%',
                saGreenDescription: 'Увеличивает восстановление HP',
                saBlueDescription: 'Даёт 4% вампиризма',
                isMage: false,
                attackPhysic: 437,
                attackMagic: 192,
                isTwoHands: false,
                age: 'elegia',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Contristo Hammer',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Канистра, Конистро',
                crystalsCount: 9872,
                saLvl: 18,
                saGemCount: 2022,
                saRedName: 'Health',
                saGreenName: 'HP Drain',
                saBlueName: 'HP Regeneration',
                saRedDescription: 'Увеличивает HP на 25%',
                saGreenDescription: 'Даёт 4% вампиризма',
                saBlueDescription: 'Увеличивает восстановление HP',
                isMage: false,
                attackPhysic: 532,
                attackMagic: 192,
                isTwoHands: true,
                age: 'elegia',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Sacredium',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Сакредиум, сакра',
                crystalsCount: 9872,
                saLvl: 18,
                saGemCount: 2022,
                saRedName: 'MP Regeneration',
                saGreenName: 'Mana Up',
                saBlueName: 'Acumen',
                saRedDescription: 'Увеличивает восстановление MP',
                saGreenDescription: 'Увеличивает MP на 30%',
                saBlueDescription: 'Увеличивает Скорость Каста на 15%',
                isMage: true,
                attackPhysic: 350,
                attackMagic: 256,
                isTwoHands: false,
                age: 'elegia',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Cyclic Cane',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Суслик',
                crystalsCount: 9872,
                saLvl: 18,
                saGemCount: 2022,
                saRedName: 'MP Regeneration',
                saGreenName: 'Magic Hold',
                saBlueName: 'Empower',
                saRedDescription: 'Увеличивает восстановление MP',
                saGreenDescription: 'Дает шанс 20% наложить Dryad Root при использовании вредоносного умения на цель',
                saBlueDescription: 'Увеличивает Маг. Атк. на 167',
                isMage: true,
                attackPhysic: 426,
                attackMagic: 281,
                isTwoHands: true,
                age: 'elegia',
                isNonCraftable: true,
            )
        );
    }

    protected function addBows()
    {
        $categoryId = $this->bowCategory->id;
        $imagePath = 'item/weapon/bow';
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Skull Carnium Bow',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Карниум',
                crystalsCount: 8233,
                saLvl: 17,
                saGemCount: 1073,
                saRedName: 'Critical Slow',
                saGreenName: 'Cheap Shot',
                saBlueName: 'Focus',
                saRedDescription: 'Даёт 33% шанс наложения Slow при крит. атаке',
                saGreenDescription: 'Дает 8% шанс понизить расход MP до 1 при обычной атаке',
                saBlueDescription: 'Увеличивает Физ. Крит. Атк. на 139',
                isMage: false,
                attackPhysic: 768,
                attackMagic: 183,
                isTwoHands: false,
                age: 'vorpal',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Recurve Thorne Bow',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Торн',
                crystalsCount: 9872,
                saLvl: 18,
                saGemCount: 2022,
                saRedName: 'Focus',
                saGreenName: 'Critical Slow',
                saBlueName: 'Cheap Shot',
                saRedDescription: 'Увеличивает Физ. Крит. Атк. на 139',
                saGreenDescription: 'Даёт 44% шанс наложения Slow при крит. атаке',
                saBlueDescription: 'Дает 8% шанс понизить расход MP до 1 при обычной атаке',
                isMage: false,
                attackPhysic: 794,
                attackMagic: 192,
                isTwoHands: false,
                age: 'elegia',
                isNonCraftable: true,
            )
        );
    }

    protected function addDaggers()
    {
        $categoryId = $this->daggerCategory->id;
        $imagePath = 'item/weapon/dagger';
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Skull Edge',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Скулл',
                crystalsCount: 8233,
                saLvl: 17,
                saGemCount: 1073,
                saRedName: 'Haste',
                saGreenName: 'Critical Damage',
                saBlueName: 'HP Drain',
                saRedDescription: 'Увеличивает Скорость Атаки на 11%',
                saGreenDescription: 'Увеличивает Физ. Атк. на 1 000 при Критической атаке',
                saBlueDescription: 'Даёт 4% вампиризма',
                isMage: false,
                attackPhysic: 363,
                attackMagic: 183,
                isTwoHands: false,
                age: 'vorpal',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Mamba Edge',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Мамба',
                crystalsCount: 9872,
                saLvl: 18,
                saGemCount: 2022,
                saRedName: 'HP Drain',
                saGreenName: 'Haste',
                saBlueName: 'Critical Damage',
                saRedDescription: 'Даёт 4% вампиризма',
                saGreenDescription: 'Увеличивает Скорость Атаки на 11%',
                saBlueDescription: 'Увеличивает Физ. Атк. на 1 060 при Критической атаке',
                isMage: false,
                attackPhysic: 382,
                attackMagic: 192,
                isTwoHands: false,
                age: 'elegia',
                isNonCraftable: true,
            )
        );
    }

    protected function addPolearms()
    {
        $categoryId = $this->polearmCategory->id;
        $imagePath = 'item/weapon/polearm';
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Doubletop Spear',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Даблтоп',
                crystalsCount: 8233,
                saLvl: 17,
                saGemCount: 1073,
                saRedName: 'Haste',
                saGreenName: 'Health',
                saBlueName: 'Guidance',
                saRedDescription: 'Увеличивает Скорость Атаки на 11%',
                saGreenDescription: 'Увеличивает HP на 25%',
                saBlueDescription: 'Увеличивает Точность на 8',
                isMage: false,
                attackPhysic: 415,
                attackMagic: 183,
                isTwoHands: false,
                age: 'vorpal',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Demitelum',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Демитель',
                crystalsCount: 9872,
                saLvl: 18,
                saGemCount: 2022,
                saRedName: 'Guidance',
                saGreenName: 'Haste',
                saBlueName: 'Health',
                saRedDescription: 'Увеличивает Точность на 8',
                saGreenDescription: 'Увеличивает Скорость Атаки на 11%',
                saBlueDescription: 'Увеличивает HP на 25%',
                isMage: false,
                attackPhysic: 437,
                attackMagic: 192,
                isTwoHands: false,
                age: 'elegia',
                isNonCraftable: true,
            )
        );
    }

    protected function addFists()
    {
        $categoryId = $this->fistCategory->id;
        $imagePath = 'item/weapon/fist';
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Octo Claw',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Окто',
                crystalsCount: 8233,
                saLvl: 17,
                saGemCount: 1073,
                saRedName: 'Critical Stun',
                saGreenName: 'Focus',
                saBlueName: 'Health',
                saRedDescription: 'Даёт 43% шанс застанить При критической атаке',
                saGreenDescription: 'Увеличивает Физ. Крит. Атк. на 129',
                saBlueDescription: 'Увеличивает HP на 25%',
                isMage: false,
                attackPhysic: 505,
                attackMagic: 183,
                isTwoHands: false,
                age: 'vorpal',
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Jade Claw',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Джейды',
                crystalsCount: 9872,
                saLvl: 18,
                saGemCount: 2022,
                saRedName: 'Health',
                saGreenName: 'Critical Stun',
                saBlueName: 'Focus',
                saRedDescription: 'Увеличивает HP на 25%',
                saGreenDescription: 'Даёт 43% шанс застанить При критической атаке',
                saBlueDescription: 'Увеличивает Физ. Крит. Атк. на 129',
                isMage: false,
                attackPhysic: 532,
                attackMagic: 192,
                isTwoHands: false,
                age: 'elegia',
                isNonCraftable: true,
            )
        );
    }

    protected function addDualSwords()
    {
        $categoryId = $this->dualSwordCategory->id;
        $imagePath = 'item/weapon/dual-sword';
        $recipe = seederAddRecipe(
            'Samurai Long Sword+Samurai Long Sword',
            $imagePath,
            0,
            'B',
            $categoryId,
            keywords: 'Слсы, самураи',
            crystalsCount: 1346,
            isMage: false,
            attackPhysic: 236,
            attackMagic: 99,
            isNonCraftable: true,
            description: 'При заточки на +4 появляется бонус: Увеличивает Скорость Атаки на 4%',
        );
        $this->addedRecipesCollection->push($recipe);
        $recipe->recipes()->attach([
            Recipe::where('name', 'Samurai Long Sword')->firstOrFail()->id => ['is_duplicate' => true],
        ]);
        $recipe = seederAddRecipe(
            'Keshanberk+Keshanberk',
            $imagePath,
            0,
            'A',
            $categoryId,
            keywords: 'Кеши дули',
            crystalsCount: 1128,
            isMage: false,
            attackPhysic: 259,
            attackMagic: 107,
            isNonCraftable: true,
            description: 'При заточки на +4 появляется бонус: Увеличивает Скорость Атаки на 8%',
        );
        $this->addedRecipesCollection->push($recipe);
        $recipe->recipes()->attach([
            Recipe::where('name', 'Keshanberk')->firstOrFail()->id => ['is_duplicate' => true],
        ]);

        $this->addedRecipesCollection->push($recipe);
        $recipe = seederAddRecipe(
            'Keshanberk+Damascus',
            $imagePath,
            0,
            'A',
            $categoryId,
            keywords: 'Кеш, Дам',
            crystalsCount: 1485,
            isMage: false,
            attackPhysic: 275,
            attackMagic: 112,
            isNonCraftable: true,
            description: 'При заточки на +4 появляется бонус: Увеличивает ХП на 25%',
        );
        $this->addedRecipesCollection->push($recipe);
        $recipe->recipes()->attach([
            Recipe::where('name', 'Keshanberk')->firstOrFail()->id,
            Recipe::where('name', 'Damascus Sword')->firstOrFail()->id,
        ]);

        $this->addedRecipesCollection->push($recipe);
        $recipe = seederAddRecipe(
            'Damascus+Damascus',
            $imagePath,
            0,
            'A',
            $categoryId,
            keywords: 'Дамаскусы дули',
            crystalsCount: 1659,
            isMage: false,
            attackPhysic: 282,
            attackMagic: 114,
            isNonCraftable: true,
            description: 'При заточки на +4 появляется бонус: Увеличивает Точность на 6',
        );
        $this->addedRecipesCollection->push($recipe);
        $recipe->recipes()->attach([
            Recipe::where('name', 'Damascus Sword')->firstOrFail()->id => ['is_duplicate' => true],
        ]);

        $this->addedRecipesCollection->push($recipe);
        $recipe = seederAddRecipe(
            'Tallum Blade+Damascus',
            $imagePath,
            0,
            'A',
            $categoryId,
            keywords: 'Талум, дамаскус',
            crystalsCount: 2157,
            attackPhysic: 305,
            attackMagic: 121,
            isNonCraftable: true,
            description: 'При заточки на +4 появляется бонус: Увеличивает Скорость Атаки на 8%',
        );
        $this->addedRecipesCollection->push($recipe);
        $recipe->recipes()->attach([
            Recipe::where('name', 'Tallum Blade')->firstOrFail()->id,
            Recipe::where('name', 'Damascus Sword')->firstOrFail()->id,
        ]);

        $recipe = seederAddRecipe(
            'Tallum Blade+Dark Legion\'s Edge',
            $imagePath,
            0,
            'S',
            $categoryId,
            keywords: 'Талум, Дарк легион',
            crystalsCount: 2052,
            attackPhysic: 342,
            attackMagic: 132,
            age: 's',
            isNonCraftable: true,
            description: 'При заточки на +4 появляется бонус: Увеличивает ХП на 15%, МП на 20%, ЦП на 30%',
        );
        $this->addedRecipesCollection->push($recipe);
        $recipe->recipes()->attach([
            Recipe::where('name', 'Tallum Blade')->firstOrFail()->id,
            Recipe::where('name', 'Dark Legion\'s Edge')->firstOrFail()->id,
        ]);

        $recipe = seederAddRecipe(
            'Dynasty Dualsword',
            $imagePath,
            0,
            'S',
            $categoryId,
            keywords: 'Талум, Дарк легион',
            crystalsCount: 3597,
            attackPhysic: 405,
            attackMagic: 151,
            age: 'dynasty',
            isNonCraftable: true,
            description: 'При заточки на +4 появляется бонус: Увеличивает ХП на 10%, Шанс Крита на 109',
        );
        $this->addedRecipesCollection->push($recipe);
        $recipe->recipes()->attach([
            Recipe::where('name', 'Dynasty Sword')->firstOrFail()->id,
            Recipe::where('name', 'Dark Legion\'s Edge')->firstOrFail()->id,
        ]);

        $recipe = seederAddRecipe(
            'Blades of Delusion',
            $imagePath,
            0,
            'S',
            $categoryId,
            keywords: 'Делюжен дули',
            crystalsCount: 3597,
            attackPhysic: 405,
            attackMagic: 151,
            favoriteText: 'С вероятностью 2%, во время атаки, уменьшит Физ Защиту врага на 23%',
            age: 'dynasty',
            isNonCraftable: true,
            description: 'При заточки на +4 появляется бонус: Увеличивает ХП на 10%, Шанс Крита на 109',
        );
        $this->addedRecipesCollection->push($recipe);


        $recipe = seederAddRecipe(
            'Icarus Dualsword',
            $imagePath,
            0,
            'S-80',
            $categoryId,
            keywords: 'Икарус дули',
            crystalsCount: 4965,
            attackPhysic: 442,
            attackMagic: 163,
            age: 'moirai',
            isNonCraftable: true,
            description: 'При заточки на +4 появляется бонус: Увеличивает ХП на 10%, Шанс Крита на 109',
        );
        $this->addedRecipesCollection->push($recipe);
        $recipe->recipes()->attach([
            Recipe::where('name', 'Icarus Sawsword')->firstOrFail()->id,
            Recipe::where('name', 'Dark Legion\'s Edge')->firstOrFail()->id,
        ]);

        $recipe = seederAddRecipe(
            'Vesper Dualsword',
            $imagePath,
            0,
            'S-84',
            $categoryId,
            keywords: 'Веспер дули',
            crystalsCount: 7050,
            attackPhysic: 482,
            attackMagic: 176,
            age: 'vesper',
            isNonCraftable: true,
            description: 'При заточки на +4 появляется бонус: Увеличивает ХП на 10%, Шанс Крита на 109',
        );
        $this->addedRecipesCollection->push($recipe);
        $recipe->recipes()->attach([
            Recipe::where('name', 'Vesper Cutter')->firstOrFail()->id,
            Recipe::where('name', 'Sirra\'s Blade')->firstOrFail()->id,
        ]);

        $recipe = seederAddRecipe(
            'Periel Dualsword',
            $imagePath,
            0,
            'S-84',
            $categoryId,
            keywords: 'Перил дули',
            crystalsCount: 7050,
            attackPhysic: 505,
            attackMagic: 183,
            age: 'vorpal',
            isNonCraftable: true,
            description: 'При заточки на +4 появляется бонус: Увеличивает ХП на 10%, Шанс Крита на 109',
        );
        $this->addedRecipesCollection->push($recipe);
        $recipe->recipes()->attach([
            Recipe::where('name', 'Periel Sword')->firstOrFail()->id,
            Recipe::where('name', 'Sirra\'s Blade')->firstOrFail()->id,
        ]);

        $recipe = seederAddRecipe(
            'Eternal Core Dualsword',
            $imagePath,
            0,
            'S-84',
            $categoryId,
            keywords: 'Етернал кор дули',
            crystalsCount: 7050,
            attackPhysic: 532,
            attackMagic: 192,
            age: 'elegia',
            isNonCraftable: true,
            description: 'При заточки на +4 появляется бонус: Увеличивает ХП на 10%, Шанс Крита на 109',
        );
        $this->addedRecipesCollection->push($recipe);
        $recipe->recipes()->attach([
            Recipe::where('name', 'Eternal Core Sword')->firstOrFail()->id,
            Recipe::where('name', 'Forgotten Blade')->firstOrFail()->id,
        ]);
    }

    protected function addDualDaggers()
    {
        $categoryId = $this->dualDaggerCategory->id;
        $imagePath = 'item/weapon/dual-dagger';

        $recipe = seederAddRecipe(
            'Dynasty Dual Dagger',
            $imagePath,
            0,
            'S',
            $categoryId,
            keywords: 'Дино дагеры',
            crystalsCount: 4219,
            isMage: false,
            attackPhysic: 304,
            attackMagic: 157,
            age: 'dynasty',
            isNonCraftable: true,
            description: 'При заточки на +4 появляется бонус: Увеличивает Шанс Крита на 109',
        );
        $this->addedRecipesCollection->push($recipe);
        $recipe->recipes()->attach([
            Recipe::where('name', 'Dynasty Knife')->firstOrFail()->id,
            Recipe::where('name', 'Soul Separator')->firstOrFail()->id,
        ]);

        $recipe = seederAddRecipe(
            'Icarus Dual Daggers',
            $imagePath,
            0,
            'S-80',
            $categoryId,
            keywords: 'ИК дагеры',
            crystalsCount: 5845,
            isMage: false,
            attackPhysic: 332,
            attackMagic: 169,
            age: 'moirai',
            isNonCraftable: true,
            description: 'При заточки на +4 появляется бонус: Увеличивает Шанс Крита на 109',
        );
        $this->addedRecipesCollection->push($recipe);
        $recipe->recipes()->attach([
            Recipe::where('name', 'Icarus Disperser')->firstOrFail()->id,
            Recipe::where('name', 'Soul Separator')->firstOrFail()->id,
        ]);

        $recipe = seederAddRecipe(
            'Butcher Blades',
            $imagePath,
            0,
            'S-80',
            $categoryId,
            keywords: 'Дагеры мясника',
            crystalsCount: 5845,
            isMage: false,
            attackPhysic: 332,
            attackMagic: 169,
            favoriteText: 'С вероятностью 2%, во время атаки, вызывает кровотечении (67 урона в секунду) в течении 20 сек',
            age: 'moirai',
            isNonCraftable: true,
            description: 'При заточки на +4 появляется бонус: Увеличивает Шанс Крита на 109',
        );
        $this->addedRecipesCollection->push($recipe);


        $recipe = seederAddRecipe(
            'Vesper Dual Daggers',
            $imagePath,
            0,
            'S-84',
            $categoryId,
            keywords: 'Веспер дагеры',
            crystalsCount: 8233,
            isMage: false,
            attackPhysic: 360,
            attackMagic: 181,
            age: 'vesper',
            isNonCraftable: true,
            description: 'При заточки на +4 появляется бонус: Увеличивает Шанс Крита на 109',
        );
        $this->addedRecipesCollection->push($recipe);
        $recipe->recipes()->attach([
            Recipe::where('name', 'Vesper Shaper')->firstOrFail()->id,
            Recipe::where('name', 'Naga Storm')->firstOrFail()->id,
        ]);

        $recipe = seederAddRecipe(
            'Skull Edge Dual Daggers',
            $imagePath,
            0,
            'S-84',
            $categoryId,
            keywords: 'Скул дагеры',
            crystalsCount: 9872,
            isMage: false,
            attackPhysic: 415,
            attackMagic: 183,
            age: 'vorpal',
            isNonCraftable: true,
            description: 'При заточки на +4 появляется бонус: Увеличивает Шанс Крита на 109',
        );
        $this->addedRecipesCollection->push($recipe);
        $recipe->recipes()->attach([
            Recipe::where('name', 'Skull Edge')->firstOrFail()->id,
            Recipe::where('name', 'Naga Storm')->firstOrFail()->id,
        ]);

        $recipe = seederAddRecipe(
            'Mamba Edge Dual Daggers',
            $imagePath,
            0,
            'S-84',
            $categoryId,
            keywords: 'Мамба дагеры',
            crystalsCount: 11421,
            isMage: false,
            attackPhysic: 437,
            attackMagic: 192,
            age: 'elegia',
            isNonCraftable: true,
            description: 'При заточки на +4 появляется бонус: Увеличивает Шанс Крита на 109',
        );
        $this->addedRecipesCollection->push($recipe);
        $recipe->recipes()->attach([
            Recipe::where('name', 'Mamba Edge')->firstOrFail()->id,
            Recipe::where('name', 'Angel Slayer')->firstOrFail()->id,
        ]);
    }
}
