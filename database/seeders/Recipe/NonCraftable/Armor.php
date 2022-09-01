<?php

namespace Database\Seeders\Recipe\NonCraftable;

use App\Models\Category;
use Database\Seeders\NonCraftableRecipesSeeder;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use Ramsey\Collection\Collection;

class Armor extends NonCraftableRecipesSeeder
{
    protected Category $shieldCategory;
    protected Category $sigilCategory;

    protected Category $armorLightCategory;
    protected Category $armorLightFullBodyCategory;
    protected Category $armorLightUpperCategory;
    protected Category $armorLightLowerCategory;
    protected Category $armorLightHelmetCategory;
    protected Category $armorLightBootCategory;
    protected Category $armorLightGlovesCategory;

    protected Category $armorHeavyCategory;
    protected Category $armorHeavyFullBodyCategory;
    protected Category $armorHeavyUpperCategory;
    protected Category $armorHeavyLowerCategory;
    protected Category $armorHeavyHelmetCategory;
    protected Category $armorHeavyBootCategory;
    protected Category $armorHeavyGlovesCategory;

    protected Category $armorRobeCategory;
    protected Category $armorRobeFullBodyCategory;
    protected Category $armorRobeUpperCategory;
    protected Category $armorRobeLowerCategory;
    protected Category $armorRobeHelmetCategory;
    protected Category $armorRobeBootCategory;
    protected Category $armorRobeGlovesCategory;

    protected Category $beltCategory;

    public function seed()
    {
        try {
            $this->setArmorCategories();
            $this->addArmors();
        } catch (Exception $e) {
            $this->addedRecipesCollection->each(function ($value, $key) {
                $value->forceDelete();
            });
            var_dump($e->getMessage());
            var_dump($this->addedRecipesCollection->count());
            Log::error('Seeder error' . $e->getMessage());
        }
    }

    protected function setArmorCategories()
    {
        $armorCategory = Category::where('name', 'Armor')->firstOrFail();

        $this->sigilCategory = Category::where('name', 'Sigil')->firstOrFail();
        $this->shieldCategory = Category::where('name', 'Shield')->firstOrFail();

        $this->armorLightCategory = Category::where('name', 'Light')->where(
            'category_id',
            $armorCategory->id
        )->firstOrFail();
        $this->armorLightFullBodyCategory = Category::where('name', 'Full body')->where(
            'category_id',
            $this->armorLightCategory->id
        )->firstOrFail();
        $this->armorLightUpperCategory = Category::where('name', 'Upper')->where(
            'category_id',
            $this->armorLightCategory->id
        )->firstOrFail();
        $this->armorLightLowerCategory = Category::where('name', 'Lower')->where(
            'category_id',
            $this->armorLightCategory->id
        )->firstOrFail();
        $this->armorLightHelmetCategory = Category::where('name', 'Helmet')->where(
            'category_id',
            $this->armorLightCategory->id
        )->firstOrFail();
        $this->armorLightBootCategory = Category::where('name', 'Boot')->where(
            'category_id',
            $this->armorLightCategory->id
        )->firstOrFail();
        $this->armorLightGlovesCategory = Category::where('name', 'Gloves')->where(
            'category_id',
            $this->armorLightCategory->id
        )->firstOrFail();

        $this->armorRobeCategory = Category::where('name', 'Robe')->where(
            'category_id',
            $armorCategory->id
        )->firstOrFail();
        $this->armorRobeFullBodyCategory = Category::where('name', 'Full body')->where(
            'category_id',
            $this->armorRobeCategory->id
        )->firstOrFail();
        $this->armorRobeUpperCategory = Category::where('name', 'Upper')->where(
            'category_id',
            $this->armorRobeCategory->id
        )->firstOrFail();
        $this->armorRobeLowerCategory = Category::where('name', 'Lower')->where(
            'category_id',
            $this->armorRobeCategory->id
        )->firstOrFail();
        $this->armorRobeHelmetCategory = Category::where('name', 'Helmet')->where(
            'category_id',
            $this->armorRobeCategory->id
        )->firstOrFail();
        $this->armorRobeBootCategory = Category::where('name', 'Boot')->where(
            'category_id',
            $this->armorRobeCategory->id
        )->firstOrFail();
        $this->armorRobeGlovesCategory = Category::where('name', 'Gloves')->where(
            'category_id',
            $this->armorRobeCategory->id
        )->firstOrFail();

        $this->armorHeavyCategory = Category::where('name', 'Heavy')->where(
            'category_id',
            $armorCategory->id
        )->firstOrFail();
        $this->armorHeavyFullBodyCategory = Category::where('name', 'Full Body')->where(
            'category_id',
            $this->armorHeavyCategory->id
        )->firstOrFail();
        $this->armorHeavyUpperCategory = Category::where('name', 'Upper')->where(
            'category_id',
            $this->armorHeavyCategory->id
        )->firstOrFail();
        $this->armorHeavyLowerCategory = Category::where('name', 'Lower')->where(
            'category_id',
            $this->armorHeavyCategory->id
        )->firstOrFail();
        $this->armorHeavyHelmetCategory = Category::where('name', 'Helmet')->where(
            'category_id',
            $this->armorHeavyCategory->id
        )->firstOrFail();
        $this->armorHeavyBootCategory = Category::where('name', 'Boot')->where(
            'category_id',
            $this->armorHeavyCategory->id
        )->firstOrFail();
        $this->armorHeavyGlovesCategory = Category::where('name', 'Gloves')->where(
            'category_id',
            $this->armorHeavyCategory->id
        )->firstOrFail();
        $this->beltCategory = Category::where('name', 'Belt')->firstOrFail();
    }

    protected function addArmors()
    {
        $this->addArmorLight();
        $this->addArmorHeavy();
        $this->addArmorRobe();
        $this->addShield();
        $this->addSigil();
        $this->addBelt();
    }

    protected function addArmorLight()
    {
        $this->addArmorLightBoot();
        $this->addArmorLightGloves();
        $this->addArmorLightHelmet();
        $this->addArmorLightLower();
        $this->addArmorLightUpper();
    }

    protected function addArmorHeavy()
    {
        $this->addArmorHeavyBoot();
        $this->addArmorHeavyGloves();
        $this->addArmorHeavyHelmet();
        $this->addArmorHeavyLower();
        $this->addArmorHeavyUpper();
    }

    protected function addArmorRobe()
    {
        $this->addArmorRobeBoot();
        $this->addArmorRobeGloves();
        $this->addArmorRobeHelmet();
        $this->addArmorRobeLower();
        $this->addArmorRobeUpper();
    }


    protected function addShield()
    {
        $categoryId = $this->shieldCategory->id;
        $imagePath = 'item/shield';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Shield',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал щит, shield',
                crystalsCount: 704,
                defencePhysic: 399,
                isNonCraftable: true,
                descriptionSeo: 'Vorpal Shield характеристики и статы щита Ворпал.',
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Shield',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия щит, shield',
                crystalsCount: 844,
                defencePhysic: 413,
                isNonCraftable: true,
                descriptionSeo: 'Elegia Shield характеристики и статы щита Элегии.',
            )
        );
    }

    protected function addSigil()
    {
        $categoryId = $this->sigilCategory->id;
        $imagePath = 'item/sigil';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Sigil',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал сигиль',
                crystalsCount: 704,
                defencePhysic: 19,
                isNonCraftable: true,
                descriptionSeo: 'Vorpal Sigil характеристики и статы сигиля Ворпал.',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Sigil',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия сигиль',
                crystalsCount: 844,
                defencePhysic: 21,
                isNonCraftable: true,
                descriptionSeo: 'Elegia Sigil характеристики и статы сигиля Элегии.',
            )
        );
    }


    protected function addArmorLightUpper()
    {
        $categoryId = $this->armorLightUpperCategory->id;
        $imagePath = 'item/armor/light/upper';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Leather Breastplate',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал лайт верх',
                crystalsCount: 2010,
                defencePhysic: 197,
                isNonCraftable: true,
                descriptionSeo: 'Vorpal Leather Breastplate характеристики и статы лайт Ворпал верха.',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Leather Breastplate',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал',
                crystalsCount: 2410,
                defencePhysic: 204,
                isNonCraftable: true,
                descriptionSeo: 'Elegia Leather Breastplate характеристики и статы лайт Элегия верха.',
            )
        );
    }

    protected function addArmorLightLower()
    {
        $categoryId = $this->armorLightLowerCategory->id;
        $imagePath = 'item/armor/light/lower';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Leather Leggings',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал лайт низ',
                crystalsCount: 1256,
                defencePhysic: 123,
                isNonCraftable: true,
                descriptionSeo: 'Vorpal Leather Leggings характеристики и статы лайт Ворпал низа.',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Leather Leggings',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия лайт низ',
                crystalsCount: 1506,
                defencePhysic: 128,
                isNonCraftable: true,
                descriptionSeo: 'Elegia Leather Leggings характеристики и статы лайт Элегия низа.',
            )
        );
    }

    protected function addArmorLightHelmet()
    {
        $categoryId = $this->armorLightHelmetCategory->id;
        $imagePath = 'item/armor/light/helmet';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Leather Helmet',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал лайт шлем',
                crystalsCount: 1005,
                defencePhysic: 107,
                isNonCraftable: true,
                descriptionSeo: 'Vorpal Leather Helmet характеристики и статы лайт Элегия низа.',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Leather Helmet',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия лайт шлем',
                crystalsCount: 1205,
                defencePhysic: 110,
                isNonCraftable: true,
            )
        );
    }

    protected function addArmorLightBoot()
    {
        $categoryId = $this->armorLightBootCategory->id;
        $imagePath = 'item/armor/light/boot';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Leather Boots',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал лайт боты',
                crystalsCount: 670,
                defencePhysic: 71,
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Leather Boots',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия лайт боты',
                crystalsCount: 803,
                defencePhysic: 74,
                isNonCraftable: true,
            )
        );
    }

    protected function addArmorLightGloves()
    {
        $categoryId = $this->armorLightGlovesCategory->id;
        $imagePath = 'item/armor/light/gloves';
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Leather Gloves',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал лайт перчи',
                crystalsCount: 670,
                defencePhysic: 71,
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Leather Gloves',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия лайт перчи',
                crystalsCount: 803,
                defencePhysic: 74,
                isNonCraftable: true,
            )
        );
    }

    protected function addArmorHeavyUpper()
    {
        $categoryId = $this->armorHeavyUpperCategory->id;
        $imagePath = 'item/armor/heavy/upper';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Breastplate',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал хеви верх',
                crystalsCount: 2680,
                defencePhysic: 263,
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Breastplate',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия хеви верх',
                crystalsCount: 3214,
                defencePhysic: 272,
                isNonCraftable: true,
            )
        );
    }

    protected function addArmorHeavyLower()
    {
        $categoryId = $this->armorHeavyLowerCategory->id;
        $imagePath = 'item/armor/heavy/lower';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Gaiters',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал хеви низ',
                crystalsCount: 1675,
                defencePhysic: 164,
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Gaiters',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия хеви низ',
                crystalsCount: 2009,
                defencePhysic: 170,
                isNonCraftable: true,
            )
        );
    }

    protected function addArmorHeavyHelmet()
    {
        $categoryId = $this->armorHeavyHelmetCategory->id;
        $imagePath = 'item/armor/heavy/helmet';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Helmet',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал хеви шлем',
                crystalsCount: 1005,
                defencePhysic: 107,
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Helmet',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия хеви шлем',
                crystalsCount: 1205,
                defencePhysic: 110,
                isNonCraftable: true,
            )
        );
    }

    protected function addArmorHeavyBoot()
    {
        $categoryId = $this->armorHeavyBootCategory->id;
        $imagePath = 'item/armor/heavy/boot';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Boots',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал хеви боты',
                crystalsCount: 670,
                defencePhysic: 71,
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Boots',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия хеви боты',
                crystalsCount: 803,
                defencePhysic: 74,
                isNonCraftable: true,
            )
        );
    }

    protected function addArmorHeavyGloves()
    {
        $categoryId = $this->armorHeavyGlovesCategory->id;
        $imagePath = 'item/armor/heavy/gloves';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Gauntlets',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал хеви перчи',
                crystalsCount: 670,
                defencePhysic: 71,
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Gauntlets',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия хеви перчи',
                crystalsCount: 803,
                defencePhysic: 74,
                isNonCraftable: true,
            )
        );
    }

    protected function addArmorRobeUpper()
    {
        $categoryId = $this->armorRobeUpperCategory->id;
        $imagePath = 'item/armor/robe/upper';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Tunic',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал маг верх',
                crystalsCount: 2010,
                defencePhysic: 132,
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Tunic',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия маг верх',
                crystalsCount: 2410,
                defencePhysic: 136,
                isNonCraftable: true,
            )
        );
    }

    protected function addArmorRobeLower()
    {
        $categoryId = $this->armorRobeLowerCategory->id;
        $imagePath = 'item/armor/robe/lower';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Stockings',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал маг низ',
                crystalsCount: 1256,
                defencePhysic: 82,
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Stockings',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия маг низ',
                crystalsCount: 1506,
                defencePhysic: 85,
                isNonCraftable: true,
            )
        );
    }

    protected function addArmorRobeHelmet()
    {
        $categoryId = $this->armorRobeHelmetCategory->id;
        $imagePath = 'item/armor/robe/helmet';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Circlet',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал маг шлем',
                crystalsCount: 1005,
                defencePhysic: 107,
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Circlet',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия маг шлем',
                crystalsCount: 1205,
                defencePhysic: 110,
                isNonCraftable: true,
            )
        );
    }

    protected function addArmorRobeBoot()
    {
        $categoryId = $this->armorRobeBootCategory->id;
        $imagePath = 'item/armor/robe/boot';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Shoes',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал маг боты',
                crystalsCount: 670,
                defencePhysic: 71,
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Shoes',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия маг боты',
                crystalsCount: 803,
                defencePhysic: 74,
                isNonCraftable: true,
            )
        );
    }

    protected function addArmorRobeGloves()
    {
        $categoryId = $this->armorRobeGlovesCategory->id;
        $imagePath = 'item/armor/robe/gloves';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Gloves',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал маг перчатки',
                crystalsCount: 670,
                defencePhysic: 71,
                isNonCraftable: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Gloves',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия маг перчатки',
                crystalsCount: 803,
                defencePhysic: 74,
                isNonCraftable: true,
            )
        );
    }

    protected function addBelt()
    {
        $categoryId = $this->beltCategory->id;
        $imagePath = 'other/belt';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Low-grade Magic Pouch Mithril Belt',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает количество слотов в инвентаре на 27',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Standard Magic Pouch Mithril Belt',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает количество слотов в инвентаре на 30',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'High-grade Magic Pouch Mithril Belt',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает количество слотов в инвентаре на 33',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Top-grade Magic Pouch Mithril Belt',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает количество слотов в инвентаре на 36',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Low-grade Magic Pin Mithril Belt',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает грузоподъёмность на 9000',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Standard Magic Pin Mithril Belt',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает грузоподъёмность на 10000',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'High-grade Magic Pin Mithril Belt',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает грузоподъёмность на 11000',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Top-grade Magic Pin Mithril Belt',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает грузоподъёмность на 12000',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Low-grade Magic Rune Clip Mithril Belt HP Recovery',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает ХП реген на 0.78',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Standard Magic Rune Clip Mithril Belt HP Recovery',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает ХП реген на 1.95',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'High-grade Magic Rune Clip Mithril Belt HP Recovery',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает ХП реген на 2.73',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Top-grade Magic Rune Clip Mithril Belt HP Recovery',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает ХП реген на 3.9',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Low-grade Magic Rune Clip Mithril Belt MP Recovery',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает МП реген на 0.3',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Standard Magic Rune Clip Mithril Belt MP Recovery',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает МП реген на 0.75',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'High-grade Magic Rune Clip Mithril Belt MP Recovery',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает МП реген на 1.05',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Top-grade Magic Rune Clip Mithril Belt MP Recovery',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает МП реген на 1.5',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Low-grade Magic Ornament Mithril Belt PvP Physical Attack',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает урон в ПвП от автоатаки на 1%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Standard Magic Ornament Mithril Belt PvP Physical Attack',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает урон в ПвП от автоатаки на 2.5%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'High-grade Magic Ornament Mithril Belt PvP Physical Attack',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает урон в ПвП от автоатаки на 3.5%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Top-grade Magic Ornament Mithril Belt PvP Physical Attack',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает урон в ПвП от автоатаки на 5%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Low-grade Magic Ornament Mithril Belt PvP Skill Attack',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает урон в ПвП от скилов на 1%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Standard Magic Ornament Mithril Belt PvP Skill Attack',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает урон в ПвП от скилов на 2.5%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'High-grade Magic Ornament Mithril Belt PvP Skill Attack',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает урон в ПвП от скилов на 3.5%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Top-grade Magic Ornament Mithril Belt PvP Skill Attack',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает урон в ПвП от скилов на 5%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Low-grade Magic Ornament Mithril Belt PvP Defense',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает защиту в ПвП от скилов и автоатак на 1.2%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Standard Magic Ornament Mithril Belt PvP Defense',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает защиту в ПвП от скилов и автоатак на 3%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'High-grade Magic Ornament Mithril Belt PvP Defense',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает защиту в ПвП от скилов и автоатак на 4.2%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Top-grade Magic Ornament Mithril Belt PvP Defense',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, S grade, Ы',
                defencePhysic: 14,
                isNonCraftable: true,
                description: 'Увеличивает защиту в ПвП от скилов и автоатак на 6%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Low-grade Magic Pouch Iron Belt',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает количество слотов в инвентаре на 21',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Standard Magic Pouch Iron Belt',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает количество слотов в инвентаре на 24',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'High-grade Magic Pouch Iron Belt',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает количество слотов в инвентаре на 27',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Top-grade Magic Pouch Iron Belt',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает количество слотов в инвентаре на 30',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Low-grade Magic Pin Iron Belt',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает грузоподъёмность на 7000',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Standard Magic Pin Iron Belt',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает грузоподъёмность на 8000',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'High-grade Magic Pin Iron Belt',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает грузоподъёмность на 9000',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Top-grade Magic Pin Iron Belt',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает грузоподъёмность на 10000',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Low-grade Magic Rune Clip Iron Belt HP Recovery',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает ХП реген на 0.4',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Standard Magic Rune Clip Iron Belt HP Recovery',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает ХП реген на 1',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'High-grade Magic Rune Clip Iron Belt HP Recovery',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает ХП реген на 1.4',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Top-grade Magic Rune Clip Iron Belt HP Recovery',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает ХП реген на 2',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Low-grade Magic Rune Clip Iron Belt MP Recovery',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает МП реген на 0.14',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Standard Magic Rune Clip Iron Belt MP Recovery',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает МП реген на 0.35',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'High-grade Magic Rune Clip Iron Belt MP Recovery',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает МП реген на 0.49',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Top-grade Magic Rune Clip Iron Belt MP Recovery',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает МП реген на 0.7',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Low-grade Magic Ornament Iron Belt PvP Physical Attack',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает урон в ПвП от автоатаки на 0.6%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Standard Magic Ornament Iron Belt PvP Physical Attack',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает урон в ПвП от автоатаки на 1.5%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'High-grade Magic Ornament Iron Belt PvP Physical Attack',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает урон в ПвП от автоатаки на 2.1%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Top-grade Magic Ornament Iron Belt PvP Physical Attack',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает урон в ПвП от автоатаки на 3%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Low-grade Magic Ornament Iron Belt PvP Skill Attack',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает урон в ПвП от скилов на 0.6%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Standard Magic Ornament Iron Belt PvP Skill Attack',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает урон в ПвП от скилов на 1.5%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'High-grade Magic Ornament Iron Belt PvP Skill Attack',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает урон в ПвП от скилов на 2.1%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Top-grade Magic Ornament Iron Belt PvP Skill Attack',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает урон в ПвП от скилов на 3%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Low-grade Magic Ornament Iron Belt PvP Defense',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает защиту в ПвП от скилов и автоатак на 0.6%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Standard Magic Ornament Iron Belt PvP Defense',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает защиту в ПвП от скилов и автоатак на 1.5%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'High-grade Magic Ornament Iron Belt PvP Defense',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает защиту в ПвП от скилов и автоатак на 2.1%',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Top-grade Magic Ornament Iron Belt PvP Defense',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Пояс, belt, бонусы, A grade, А',
                defencePhysic: 12,
                isNonCraftable: true,
                description: 'Увеличивает защиту в ПвП от скилов и автоатак на 3%',
            )
        );
    }
}
