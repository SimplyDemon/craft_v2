<?php

namespace Database\Seeders\Recipe;

use App\Models\Category;
use Illuminate\Database\Seeder;

class ArmorSeeder extends Seeder {
    protected Category $armorLightCategory;
    protected Category $armorLightFullBodyCategory;
    protected Category $armorLightUpperCategory;
    protected Category $armorLightLowerCategory;
    protected Category $armorLightHelmetCategory;
    protected Category $armorLightBootCategory;
    protected Category $armorLightGlovesCategory;

    protected Category $armorHeavyCategory;
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

    public function seedArmor() {
        $this->setArmorCategories();
        $this->addArmors();
    }

    protected function addArmors() {
        $this->addArmorLight();
        $this->addArmorHeavy();
        $this->addArmorRobe();
    }

    protected function addArmorLight() {
        $this->addArmorLightFullBody();
        $this->addArmorLightBoot();
        $this->addArmorLightGloves();
        $this->addArmorLightHelmet();
        $this->addArmorLightLower();
        $this->addArmorLightUpper();
    }

    protected function addArmorHeavy() {
        $this->addArmorHeavyBoot();
        $this->addArmorHeavyGloves();
        $this->addArmorHeavyHelmet();
        $this->addArmorHeavyLower();
        $this->addArmorHeavyUpper();
    }

    protected function addArmorRobe() {
        $this->addArmorRobeFullBody();
        $this->addArmorRobeBoot();
        $this->addArmorRobeGloves();
        $this->addArmorRobeHelmet();
        $this->addArmorRobeLower();
        $this->addArmorRobeUpper();
    }


    protected function setArmorCategories() {
        $armorCategory = Category::where( 'name', 'Armor' )->firstOrFail();

        $this->armorLightCategory         = Category::where( 'name', 'Light' )->where( 'category_id', $armorCategory->id )->firstOrFail();
        $this->armorLightFullBodyCategory = Category::where( 'name', 'Full body' )->where( 'category_id', $this->armorLightCategory->id )->firstOrFail();
        $this->armorLightUpperCategory    = Category::where( 'name', 'Upper' )->where( 'category_id', $this->armorLightCategory->id )->firstOrFail();
        $this->armorLightLowerCategory    = Category::where( 'name', 'Lower' )->where( 'category_id', $this->armorLightCategory->id )->firstOrFail();
        $this->armorLightHelmetCategory   = Category::where( 'name', 'Helmet' )->where( 'category_id', $this->armorLightCategory->id )->firstOrFail();
        $this->armorLightBootCategory     = Category::where( 'name', 'Boot' )->where( 'category_id', $this->armorLightCategory->id )->firstOrFail();
        $this->armorLightGlovesCategory   = Category::where( 'name', 'Gloves' )->where( 'category_id', $this->armorLightCategory->id )->firstOrFail();

        $this->armorRobeCategory         = Category::where( 'name', 'Robe' )->where( 'category_id', $armorCategory->id )->firstOrFail();
        $this->armorRobeFullBodyCategory = Category::where( 'name', 'Full body' )->where( 'category_id', $this->armorRobeCategory->id )->firstOrFail();
        $this->armorRobeUpperCategory    = Category::where( 'name', 'Upper' )->where( 'category_id', $this->armorRobeCategory->id )->firstOrFail();
        $this->armorRobeLowerCategory    = Category::where( 'name', 'Lower' )->where( 'category_id', $this->armorRobeCategory->id )->firstOrFail();
        $this->armorRobeHelmetCategory   = Category::where( 'name', 'Helmet' )->where( 'category_id', $this->armorRobeCategory->id )->firstOrFail();
        $this->armorRobeBootCategory     = Category::where( 'name', 'Boot' )->where( 'category_id', $this->armorRobeCategory->id )->firstOrFail();
        $this->armorRobeGlovesCategory   = Category::where( 'name', 'Gloves' )->where( 'category_id', $this->armorRobeCategory->id )->firstOrFail();

        $this->armorHeavyCategory       = Category::where( 'name', 'Heavy' )->where( 'category_id', $armorCategory->id )->firstOrFail();
        $this->armorHeavyUpperCategory  = Category::where( 'name', 'Upper' )->where( 'category_id', $this->armorHeavyCategory->id )->firstOrFail();
        $this->armorHeavyLowerCategory  = Category::where( 'name', 'Lower' )->where( 'category_id', $this->armorHeavyCategory->id )->firstOrFail();
        $this->armorHeavyHelmetCategory = Category::where( 'name', 'Helmet' )->where( 'category_id', $this->armorHeavyCategory->id )->firstOrFail();
        $this->armorHeavyBootCategory   = Category::where( 'name', 'Boot' )->where( 'category_id', $this->armorHeavyCategory->id )->firstOrFail();
        $this->armorHeavyGlovesCategory = Category::where( 'name', 'Gloves' )->where( 'category_id', $this->armorHeavyCategory->id )->firstOrFail();
    }

    protected function addArmorLightFullBody() {
        $categoryId = $this->armorLightFullBodyCategory->id;
        $imagePath  = 'item/armor/light/full-body';

        seederAddRecipe( 'Draconic Leather Armor', $imagePath, 100000000, 'S', $categoryId );
    }

    protected function addArmorLightUpper() {
        $categoryId = $this->armorLightUpperCategory->id;
        $imagePath  = 'item/armor/light/upper';

        seederAddRecipe( 'Dynasty Leather Armor', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Leather Breastplate', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Leather Breastplate', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorLightLower() {
        $categoryId = $this->armorLightLowerCategory->id;
        $imagePath  = 'item/armor/light/lower';

        seederAddRecipe( 'Dynasty Leather Leggings', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Leather Leggings', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Leather Leggings', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorLightHelmet() {
        $categoryId = $this->armorLightHelmetCategory->id;
        $imagePath  = 'item/armor/light/helmet';

        seederAddRecipe( 'Draconic Leather Helmet', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Leather Helmet', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Leather Helmet', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Leather Helmet', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorLightBoot() {
        $categoryId = $this->armorLightBootCategory->id;
        $imagePath  = 'item/armor/light/boot';

        seederAddRecipe( 'Draconic Leather Boots', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Leather Boots', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Leather Boots', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Leather Boots', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorLightGloves() {
        $categoryId = $this->armorLightGlovesCategory->id;
        $imagePath  = 'item/armor/light/gloves';

        seederAddRecipe( 'Draconic Leather Gloves', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Leather Gloves', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Leather Gloves', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Leather Gloves', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorHeavyUpper() {
        $categoryId = $this->armorHeavyUpperCategory->id;
        $imagePath  = 'item/armor/heavy/upper';

        seederAddRecipe( 'Imperial Crusader Breastplate', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Breastplate', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Breastplate', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Breastplate', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorHeavyLower() {
        $categoryId = $this->armorHeavyLowerCategory->id;
        $imagePath  = 'item/armor/heavy/lower';

        seederAddRecipe( 'Imperial Crusader Gaiters', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Gaiters', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Gaiters', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Gaiters', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorHeavyHelmet() {
        $categoryId = $this->armorHeavyHelmetCategory->id;
        $imagePath  = 'item/armor/heavy/helmet';

        seederAddRecipe( 'Imperial Crusader Helmet', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Helmet', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Helmet', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Helmet', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorHeavyBoot() {
        $categoryId = $this->armorHeavyBootCategory->id;
        $imagePath  = 'item/armor/heavy/boot';

        seederAddRecipe( 'Imperial Crusader Boots', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Boots', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Boots', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Boots', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorHeavyGloves() {
        $categoryId = $this->armorHeavyGlovesCategory->id;
        $imagePath  = 'item/armor/heavy/gloves';

        seederAddRecipe( 'Imperial Crusader Gauntlets', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Gauntlets', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Gauntlets', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Gauntlets', $imagePath, 100000000, 'S-84', $categoryId );
    }


    protected function addArmorRobeFullBody() {
        $categoryId = $this->armorRobeFullBodyCategory->id;
        $imagePath  = 'item/armor/robe/full-body';

        seederAddRecipe( 'Major Arcana Robe', $imagePath, 100000000, 'S', $categoryId );
    }

    protected function addArmorRobeUpper() {
        $categoryId = $this->armorRobeUpperCategory->id;
        $imagePath  = 'item/armor/robe/upper';

        seederAddRecipe( 'Dynasty Tunic', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Tunic', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Tunic', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorRobeLower() {
        $categoryId = $this->armorRobeLowerCategory->id;
        $imagePath  = 'item/armor/robe/lower';

        seederAddRecipe( 'Dynasty Stockings', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Stockings', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Stockings', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorRobeHelmet() {
        $categoryId = $this->armorRobeHelmetCategory->id;
        $imagePath  = 'item/armor/robe/helmet';

        seederAddRecipe( 'Major Arcana Circlet', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Circlet', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Circlet', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Circlet', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorRobeBoot() {
        $categoryId = $this->armorRobeBootCategory->id;
        $imagePath  = 'item/armor/robe/boot';

        seederAddRecipe( 'Major Arcana Boots', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Shoes', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Shoes', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Shoes', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorRobeGloves() {
        $categoryId = $this->armorRobeGlovesCategory->id;
        $imagePath  = 'item/armor/robe/gloves';

        seederAddRecipe( 'Major Arcana Gloves', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Gloves', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Gloves', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Gloves', $imagePath, 100000000, 'S-84', $categoryId );
    }

}
