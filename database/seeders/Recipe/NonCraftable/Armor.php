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
    }

    protected function addArmors()
    {
        $this->addArmorLight();
        $this->addArmorHeavy();
        $this->addArmorRobe();
        $this->addShield();
        $this->addSigil();
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
                keywords: 'Ворпал щит',
                crystalsCount: 704,
                defencePhysic: 399,
                isNonCraftable: true,
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Shield',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия щит',
                crystalsCount: 844,
                defencePhysic: 413,
                isNonCraftable: true,
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


}
