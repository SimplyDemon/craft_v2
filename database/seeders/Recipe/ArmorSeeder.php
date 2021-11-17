<?php

namespace Database\Seeders\Recipe;

use App\Models\Category;
use Illuminate\Database\Seeder;

class ArmorSeeder extends Seeder {
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

    protected Category $armorUniversalCategory;
    protected Category $armorUniversalHelmetCategory;
    protected Category $armorUniversalBootCategory;
    protected Category $armorUniversalGlovesCategory;

    public function seed() {
	    $this->setArmorCategories();
	    $this->addArmors();
    }

    protected function setArmorCategories() {
        $armorCategory = Category::where( 'name', 'Armor' )->firstOrFail();

        $this->sigilCategory  = Category::where( 'name', 'Sigil' )->firstOrFail();
        $this->shieldCategory = Category::where( 'name', 'Shield' )->firstOrFail();

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

        $this->armorHeavyCategory         = Category::where( 'name', 'Heavy' )->where( 'category_id', $armorCategory->id )->firstOrFail();
        $this->armorHeavyFullBodyCategory = Category::where( 'name', 'Full Body' )->where( 'category_id', $this->armorHeavyCategory->id )->firstOrFail();
        $this->armorHeavyUpperCategory    = Category::where( 'name', 'Upper' )->where( 'category_id', $this->armorHeavyCategory->id )->firstOrFail();
        $this->armorHeavyLowerCategory    = Category::where( 'name', 'Lower' )->where( 'category_id', $this->armorHeavyCategory->id )->firstOrFail();
        $this->armorHeavyHelmetCategory   = Category::where( 'name', 'Helmet' )->where( 'category_id', $this->armorHeavyCategory->id )->firstOrFail();
        $this->armorHeavyBootCategory     = Category::where( 'name', 'Boot' )->where( 'category_id', $this->armorHeavyCategory->id )->firstOrFail();
        $this->armorHeavyGlovesCategory   = Category::where( 'name', 'Gloves' )->where( 'category_id', $this->armorHeavyCategory->id )->firstOrFail();

        $this->armorUniversalCategory       = Category::where( 'name', 'Universal' )->where( 'category_id', $armorCategory->id )->firstOrFail();
        $this->armorUniversalHelmetCategory = Category::where( 'name', 'Helmet' )->where( 'category_id', $this->armorUniversalCategory->id )->firstOrFail();
        $this->armorUniversalBootCategory   = Category::where( 'name', 'Boot' )->where( 'category_id', $this->armorUniversalCategory->id )->firstOrFail();
        $this->armorUniversalGlovesCategory = Category::where( 'name', 'Gloves' )->where( 'category_id', $this->armorUniversalCategory->id )->firstOrFail();
    }

    protected function addArmors() {
        $this->addArmorLight();
        $this->addArmorHeavy();
        $this->addArmorRobe();
        $this->addArmorUniversal();
        $this->addShield();
        $this->addSigil();

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
        $this->addArmorHeavyFullBody();
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

    protected function addArmorUniversal() {
        $this->addArmorUniversalBoot();
        $this->addArmorUniversalGloves();
        $this->addArmorUniversalHelmet();
    }

    protected function addShield() {
        $categoryId = $this->shieldCategory->id;
        $imagePath  = 'item/shield';

        seederAddRecipe( 'Zubei\'s Shield', $imagePath, 1300000, 'B', $categoryId, 0, '60', 'Multiplies M.Def by 1.02' );
        seederAddRecipe( 'Zubei\'s Shield 100%', $imagePath, 1300000, 'B', $categoryId, 0, '100', 'Multiplies M.Def by 1.02' );
        seederAddRecipe( 'Avadon Shield', $imagePath, 0, 'B', $categoryId, 0, '60', 'Multiplies M.Def by 1.01' );
        seederAddRecipe( 'Avadon Shield 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Multiplies M.Def by 1.01' );
        seederAddRecipe( 'Doom Shield', $imagePath, 350000, 'B', $categoryId, 0, '60', 'Multiplies M.Def by 1.02' );
        seederAddRecipe( 'Doom Shield 100%', $imagePath, 350000, 'B', $categoryId, 0, '100', 'Multiplies M.Def by 1.02' );
        seederAddRecipe( 'Dark Crystal Shield', $imagePath, 3000000, 'A', $categoryId, 0, '60', 'Multiplies M.Def by 1.02' );
        seederAddRecipe( 'Shield of Nightmare', $imagePath, 5000000, 'A', $categoryId, 0, '60', 'Multiplies M.Def by 1.02' );
        seederAddRecipe( 'Imperial Crusader Shield', $imagePath, 13000000, 'S', $categoryId, 0, '60', 'Multiplies M.Def by 1.02' );
        seederAddRecipe( 'Dynasty Shield', $imagePath, 7000000, 'S', $categoryId, 0, '60', 'Multiplies M.Def by 1.02' );
        seederAddRecipe( 'Moirai Shield', $imagePath, 25000000, 'S-80', $categoryId, 0, '60', 'Multiplies Magic Damage Vulnerability by 0.98' );
        seederAddRecipe( 'Vesper Shield', $imagePath, 19000000, 'S-84', $categoryId, 0, '60', 'Multiplies Magic Damage Vulnerability by 0.98' );
    }

    protected function addSigil() {
        $categoryId = $this->sigilCategory->id;
        $imagePath  = 'item/sigil';

        seederAddRecipe( 'Arcana Sigil', $imagePath, 0, 'S', $categoryId, 0, '60', 'Increases M. Def by 2% and decreases magic canceling damage by 13.' );
        seederAddRecipe( 'Dynasty Sigil', $imagePath, 24000000, 'S', $categoryId, 0, '60', 'Increases M. Def by 2% and Resistance to Dark by 2.' );
        seederAddRecipe( 'Moirai Sigil', $imagePath, 25000000, 'S-80', $categoryId, 0, '60', 'Multiplies Magic Damage Vulnerability by 0.98' );
        seederAddRecipe( 'Vesper Sigil', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Multiplies Magic Damage Vulnerability by 0.98' );
    }

    protected function addArmorLightFullBody() {
        $categoryId = $this->armorLightFullBodyCategory->id;
        $imagePath  = 'item/armor/light/full-body';

        seederAddRecipe( 'Avadon Leather Armor', $imagePath, 0, 'B', $categoryId, 0, '60', 'Adds Max Load by 11038<br>Multiplies M.Def by 1.1708' );
        seederAddRecipe( 'Avadon Leather Armor 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Adds Max Load by 11038<br>Multiplies M.Def by 1.1708' );
        seederAddRecipe( 'Blue Wolf Leather Armor', $imagePath, 5000000, 'B', $categoryId, 0, '60', 'Multiplies M.Atk Spd by 1.15<br>Multiplies P.Def by 1.0219' );
        seederAddRecipe( 'Blue Wolf Leather Armor 100%', $imagePath, 5000000, 'B', $categoryId, 0, '100', 'Multiplies M.Atk Spd by 1.15<br>Multiplies P.Def by 1.0219' );
        seederAddRecipe( 'Leather Armor of Doom', $imagePath, 6500000, 'B', $categoryId, 0, '60', 'Adds Breath by 383<br>Multiplies P.Atk by 1.0827<br>Decreases Poison Vulnerability by 13<br>Multiplies Regen MP by 1.0827' );
        seederAddRecipe( 'Leather Armor of Doom 100%', $imagePath, 6500000, 'B', $categoryId, 0, '100', 'Adds Breath by 383<br>Multiplies P.Atk by 1.0827<br>Decreases Poison Vulnerability by 13<br>Multiplies Regen MP by 1.0827' );
        seederAddRecipe( 'Tallum Leather Armor', $imagePath, 27000000, 'A', $categoryId, 0, '60', 'Adds Bleed Vulnerability by 52<br>Adds Max MP by 315<br>Adds Poison Vulnerability by 52<br>Multiplies Regen MP by 1.0932' );
        seederAddRecipe( 'Leather Armor of Nightmare', $imagePath, 14000000, 'A', $categoryId, 0, '60', 'Adds Life Steal by 3<br>Multiplies M.Def by 1.0827<br>Decreases Root Vulnerability by 29.16<br>Decreases Sleep Vulnerability by 29.16' );
        seederAddRecipe( 'Majestic Leather Armor', $imagePath, 17500000, 'A', $categoryId, 0, '60', 'Adds Max Load by 8159<br>Adds Max MP by 340<br>Multiplies P.Atk by 1.0932<br>Adds Stun Vulnerability by 20.83' );
        seederAddRecipe( 'Draconic Leather Armor', $imagePath, 0, 'S', $categoryId, 0, '60', 'Adds Max Load by 8159<br>Adds Max MP by 630<br>Multiplies P.Atk by 1.058<br>Multiplies P.Atk Speed by 1.058' );
    }

    protected function addArmorLightUpper() {
        $categoryId = $this->armorLightUpperCategory->id;
        $imagePath  = 'item/armor/light/upper';

        seederAddRecipe( 'Zubei\'s Leather Shirt', $imagePath, 1500000, 'B', $categoryId, 0, '60', 'Adds Rate Evasion by 9.55' );
        seederAddRecipe( 'Zubei\'s Leather Shirt 100%', $imagePath, 1500000, 'B', $categoryId, 0, '100', 'Adds Rate Evasion by 9.55' );
        seederAddRecipe( 'Dark Crystal Leather Armor', $imagePath, 4500000, 'A', $categoryId, 0, '60', 'Decreases Paralyze Vulnerability by 20<br>Multiplies P.Atk Speed by 1.0724<br>Multiplies P.Atk by 1.0724' );
        seederAddRecipe( 'Dynasty Leather Armor', $imagePath, 62000000, 'S', $categoryId, 0, '60', 'Adds Accuracy Combat by 3.4<br>Adds Dark Resistance by 3.2<br>Adds Max MP by 492<br>Multiplies P.Atk Speed by 1.0477<br>Adds Rate Evasion by 3.4' );
        seederAddRecipe( 'Moirai Leather Breastplate', $imagePath, 117000000, 'S-80', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0426<br>Decreases Root Vulnerability by 5<br>Multiplies Regen MP by 1.04<br>Adds Water Resistance by 3' );
        seederAddRecipe( 'Vesper Leather Breastplate', $imagePath, 35000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0557<br>Multiplies P.Atk Speed by 1.05<br>Multiplies Regen MP by 1.05<br>Adds Max MP by 347' );
    }

    protected function addArmorLightLower() {
        $categoryId = $this->armorLightLowerCategory->id;
        $imagePath  = 'item/armor/light/lower';

        seederAddRecipe( 'Zubei\'s Leather Gaiters', $imagePath, 2500000, 'B', $categoryId, 0, '60', 'Adds Rate Evasion by 1.47' );
        seederAddRecipe( 'Zubei\'s Leather Gaiters 100%', $imagePath, 2500000, 'B', $categoryId, 0, '100', 'Adds Rate Evasion by 1.47' );
        seederAddRecipe( 'Dark Crystal Leggings', $imagePath, 4400000, 'A', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.0103<br>Multiplies P.Atk by 1.0103<br>Decreases Paralyze Vulnerability by 12.5' );
        seederAddRecipe( 'Dynasty Leather Leggings', $imagePath, 0, 'S', $categoryId, 0, '60', 'Adds Accuracy Combat by 0.79<br>Adds Rate Evasion by 0.79<br>Adds Max HP by 205<br>Multiplies P.Atk Speed by 1.0068<br>Adds Dark Resistance by 2' );
        seederAddRecipe( 'Moirai Leather Leggings', $imagePath, 69000000, 'S-80', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0208<br>Decreases Root Vulnerability by 5<br>Multiplies Regen MP by 1.0167<br>Adds Water Resistance by 3' );
        seederAddRecipe( 'Vesper Leather Leggings', $imagePath, 40000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0068<br>Multiplies P.Atk Speed by 1.0068<br>Multiplies Regen MP by 1.0068<br>Adds Max MP by 145' );
    }

    protected function addArmorLightHelmet() {
        $categoryId = $this->armorLightHelmetCategory->id;
        $imagePath  = 'item/armor/light/helmet';

        seederAddRecipe( 'Draconic Leather Helmet', $imagePath, 20000000, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.0062<br>Multiplies P.Atk by 1.0062<br>Adds Max MP by 111<br>Adds Max Load by 1440' );
        seederAddRecipe( 'Dynasty Leather Helmet', $imagePath, 11000000, 'S', $categoryId, 0, '60', 'Adds Accuracy Combat by 0.47<br>Adds Rate Evasion by 0.47<br>Adds Max HP by 123<br>Multiplies P.Atk Speed by 1.0041<br>Adds Dark Resistance by 1.2' );
        seederAddRecipe( 'Moirai Leather Helmet', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0125<br>Decreases Root Vulnerability by 5<br>Multiplies Regen MP by 1.01<br>Adds Fire Resistance by 3' );
        seederAddRecipe( 'Vesper Leather Helmet', $imagePath, 22000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0041<br>Multiplies P.Atk Speed by 1.0041<br>Multiplies Regen MP by 1.0041<br>Adds Max MP by 87' );
    }

    protected function addArmorLightBoot() {
        $categoryId = $this->armorLightBootCategory->id;
        $imagePath  = 'item/armor/light/boot';

        seederAddRecipe( 'Draconic Leather Boots', $imagePath, 0, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.0041<br>Multiplies P.Atk by 1.0041<br>Adds Max MP by 74<br>Adds Max Load by 960' );
        seederAddRecipe( 'Dynasty Leather Boots', $imagePath, 21000000, 'S', $categoryId, 0, '60', 'Adds Accuracy Combat by 0.31<br>Adds Rate Evasion by 0.31<br>Adds Max HP by 82<br>Multiplies P.Atk Speed by 1.0027<br>Adds Dark Resistance by 0.8' );
        seederAddRecipe( 'Moirai Leather Boots', $imagePath, 20000000, 'S-80', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0083<br>Decreases Root Vulnerability by 5<br>Multiplies Regen MP by 1.0067<br>Adds Earth Resistance by 3' );
        seederAddRecipe( 'Vesper Leather Boots', $imagePath, 30000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0027<br>Multiplies P.Atk Speed by 1.0027<br>Multiplies Regen MP by 1.0027<br>Adds Max MP by 58' );
    }

    protected function addArmorLightGloves() {
        $categoryId = $this->armorLightGlovesCategory->id;
        $imagePath  = 'item/armor/light/gloves';

        seederAddRecipe( 'Draconic Leather Gloves', $imagePath, 3000000, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.0041<br>Multiplies P.Atk by 1.0041<br>Adds Max MP by 74<br>Adds Max Load by 960' );
        seederAddRecipe( 'Dynasty Leather Gloves', $imagePath, 0, 'S', $categoryId, 0, '60', 'Adds Rate Evasion by 0.31<br>Adds Accuracy Combat by 0.31<br>Adds Max HP by 82<br>Multiplies P.Atk Speed by 1.0027<br>Adds Dark Resistance by 0.8' );
        seederAddRecipe( 'Moirai Leather Gloves', $imagePath, 15000000, 'S-80', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0083<br>Decreases Root Vulnerability by 5<br>Multiplies Regen MP by 1.0067<br>Adds Wind Resistance by 3' );
        seederAddRecipe( 'Vesper Leather Gloves', $imagePath, 43000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0027<br>Multiplies P.Atk Speed by 1.0027<br>Multiplies Regen MP by 1.0027<br>Adds Max MP by 58' );
    }

    protected function addArmorHeavyFullBody() {
        $categoryId = $this->armorHeavyFullBodyCategory->id;
        $imagePath  = 'item/armor/heavy/full-body';
        seederAddRecipe( 'Doom Plate Armor', $imagePath, 11000000, 'B', $categoryId, 0, '60', 'Adds Breath by 383<br>Adds Max HP by 1093' );
        seederAddRecipe( 'Doom Plate Armor 100%', $imagePath, 11000000, 'B', $categoryId, 0, '100', 'Adds Breath by 383<br>Adds Max HP by 1093' );
        seederAddRecipe( 'Tallum Plate Armor', $imagePath, 42000000, 'A', $categoryId, 0, '60', 'Adds Bleed Vulnerability by 52<br>Adds Max Load by 8159<br>Adds Poison Vulnerability by 52<br>Multiplies P.Atk Speed by 1.0932' );
        seederAddRecipe( 'Armor of Nightmare', $imagePath, 0, 'A', $categoryId, 0, '60', 'Multiplies P.Atk by 1.1708<br>Decreases Root Vulnerability by 29.16<br>Decreases Sleep Vulnerability by 29.16' );
        seederAddRecipe( 'Majestic Plate Armor', $imagePath, 25000000, 'A', $categoryId, 0, '60', 'Adds Accuracy Combat by 0.579<br>Multiplies P.Atk by 1.0827<br>Adds Stun Vulnerability by 20.83' );

    }

    protected function addArmorHeavyUpper() {
        $categoryId = $this->armorHeavyUpperCategory->id;
        $imagePath  = 'item/armor/heavy/upper';

        seederAddRecipe( 'Zubei\'s Breastplate', $imagePath, 0, 'B', $categoryId, 0, '60', 'Adds Max HP by 294<br>Multiplies P.Def by 1.0724' );
        seederAddRecipe( 'Zubei\'s Breastplate 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Adds Max HP by 294<br>Multiplies P.Def by 1.0724' );
        seederAddRecipe( 'Avadon Breastplate', $imagePath, 3000000, 'B', $categoryId, 0, '60', 'Adds Max HP by 833' );
        seederAddRecipe( 'Avadon Breastplate 100%', $imagePath, 3000000, 'B', $categoryId, 0, '100', 'Adds Max HP by 833' );
        seederAddRecipe( 'Blue Wolf Breastplate', $imagePath, 5000000, 'B', $categoryId, 0, '60', 'Multiplies Regen HP by 1.0724<br>Adds Run Speed by 7' );
        seederAddRecipe( 'Blue Wolf Breastplate 100%', $imagePath, 5000000, 'B', $categoryId, 0, '100', 'Multiplies Regen HP by 1.0724<br>Adds Run Speed by 7' );
        seederAddRecipe( 'Dark Crystal breastplate', $imagePath, 4500000, 'A', $categoryId, 0, '60', 'Multiplies Gain Hp by 1.12<br>Adds Paralyze Vulnerability by 20' );
        seederAddRecipe( 'Imperial Crusader Breastplate', $imagePath, 5000000, 'S', $categoryId, 0, '60', 'Adds Max HP by 889<br>Multiplies P.Def by 1.0724<br>Decreases Root Vulnerability by 28<br>Decreases Sleep Vulnerability by 28' );
        seederAddRecipe( 'Dynasty Breastplate', $imagePath, 83000000, 'S', $categoryId, 0, '60', 'Adds Dark Resistance by 3.2<br>Adds Max HP by 984<br>Multiplies P.Def by 1.0724' );
        seederAddRecipe( 'Moirai Breastplate', $imagePath, 160000000, 'S-80', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0426<br>Multiplies P.Atk Speed by 1.04<br>Decreases Stun Vulnerability by 5<br>Adds Water Resistance by 1<br>Adds Fire Resistance by 1<br>Adds Wind Resistance by 1<br>Adds Earth Resistance by 1' );
        seederAddRecipe( 'Vesper Breastplate', $imagePath, 80000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0557<br>Multiplies P.Def by 1.0557<br>Adds Max HP by 531<br>Decreases Sleep Vulnerability by 28<br>Decreases Root Vulnerability by 28' );
    }

    protected function addArmorHeavyLower() {
        $categoryId = $this->armorHeavyLowerCategory->id;
        $imagePath  = 'item/armor/heavy/lower';

        seederAddRecipe( 'Zubei\'s Gaiters', $imagePath, 0, 'B', $categoryId, 0, '60', 'Multiplies P.Def by 1.0208<br>Adds Max HP by 123' );
        seederAddRecipe( 'Zubei\'s Gaiters 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Multiplies P.Def by 1.0208<br>Adds Max HP by 123' );
        seederAddRecipe( 'Avadon Gaiters', $imagePath, 2000000, 'B', $categoryId, 0, '60', 'Adds Max HP by 122' );
        seederAddRecipe( 'Avadon Gaiters 100%', $imagePath, 2000000, 'B', $categoryId, 0, '100', 'Adds Max HP by 122' );
        seederAddRecipe( 'Blue Wolf Gaiters', $imagePath, 0, 'B', $categoryId, 0, '60', 'Adds Run Speed by 2.91<br>Multiplies Regen HP by 1.0208' );
        seederAddRecipe( 'Blue Wolf Gaiters 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Adds Run Speed by 2.91<br>Multiplies Regen HP by 1.0208' );
        seederAddRecipe( 'Dark Crystal Gaiters', $imagePath, 6000000, 'A', $categoryId, 0, '60', 'Multiplies Gain Hp by 1.02<br>Decreases Paralyze Vulnerability by 12.5' );
        seederAddRecipe( 'Imperial Crusader Gaiters', $imagePath, 27000000, 'S', $categoryId, 0, '60', 'Multiplies P.Def by 1.0208<br>Adds Max HP by 185<br>Decreases Sleep Vulnerability by 17.5<br>Decreases Root Vulnerability by 17.5' );
        seederAddRecipe( 'Dynasty Gaiters', $imagePath, 30000000, 'S', $categoryId, 0, '60', 'Multiplies P.Def by 1.0208<br>Adds Max HP by 205<br>Adds Dark Resistance by 2' );
        seederAddRecipe( 'Moirai Gaiters', $imagePath, 40000000, 'S-80', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0208<br>Multiplies P.Atk Speed by 1.0167<br>Decreases Stun Vulnerability by 5<br>Adds Water Resistance by 3' );
        seederAddRecipe( 'Vesper Gaiters', $imagePath, 36000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0103<br>Multiplies P.Def by 1.0103<br>Adds Max HP by 55<br>Decreases Sleep Vulnerability by 18<br>Decreases Root Vulnerability by 18' );
    }

    protected function addArmorHeavyHelmet() {
        $categoryId = $this->armorHeavyHelmetCategory->id;
        $imagePath  = 'item/armor/heavy/helmet';

        seederAddRecipe( 'Imperial Crusader Helmet', $imagePath, 8000000, 'S', $categoryId, 0, '60', 'Multiplies P.Def by 1.0125<br>Adds Max HP by 111<br>Decreases Sleep Vulnerability by 10.5<br>Decreases Root Vulnerability by 10.5' );
        seederAddRecipe( 'Dynasty Helmet', $imagePath, 14000000, 'S', $categoryId, 0, '60', 'Multiplies P.Def by 1.0125<br>Adds Max HP by 123<br>Adds Dark Resistance by 1.2' );
        seederAddRecipe( 'Moirai Helmet', $imagePath, 250000000, 'S-80', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0125<br>Multiplies P.Atk Speed by 1.01<br>Decreases Stun Vulnerability by 5<br>Adds Fire Resistance by 3' );
        seederAddRecipe( 'Vesper Helmet', $imagePath, 40000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0062<br>Multiplies P.Def by 1.0062<br>Adds Max HP by 133<br>Decreases Sleep Vulnerability by 1<br>Decreases Root Vulnerability by 1' );
    }

    protected function addArmorHeavyBoot() {
        $categoryId = $this->armorHeavyBootCategory->id;
        $imagePath  = 'item/armor/heavy/boot';

        seederAddRecipe( 'Imperial Crusader Boots', $imagePath, 3000000, 'S', $categoryId, 0, '60', 'Multiplies P.Def by 1.0083<br>Adds Max HP by 74<br>Decreases Sleep Vulnerability by 7<br>Decreases Root Vulnerability by 7' );
        seederAddRecipe( 'Dynasty Boots', $imagePath, 38000000, 'S', $categoryId, 0, '60', 'Multiplies P.Def by 1.0083<br>Adds Max HP by 82<br>Adds Dark Resistance by 0.8' );
        seederAddRecipe( 'Moirai Boots', $imagePath, 20000000, 'S-80', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0083<br>Multiplies P.Atk Speed by 1.0067<br>Decreases Stun Vulnerability by 5<br>Adds Earth Resistance by 3' );
        seederAddRecipe( 'Vesper Boots', $imagePath, 12000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0041<br>Multiplies P.Def by 1.0041<br>Adds Max HP by 22<br>Decreases Sleep Vulnerability by 7<br>Decreases Root Vulnerability by 7' );
    }

    protected function addArmorHeavyGloves() {
        $categoryId = $this->armorHeavyGlovesCategory->id;
        $imagePath  = 'item/armor/heavy/gloves';

        seederAddRecipe( 'Imperial Crusader Gauntlets', $imagePath, 9500000, 'S', $categoryId, 0, '60', 'Multiplies P.Def by 1.0083<br>Adds Max HP by 74<br>Decreases Sleep Vulnerability by 7<br>Decreases Root Vulnerability by 7' );
        seederAddRecipe( 'Dynasty Gauntlets', $imagePath, 0, 'S', $categoryId, 0, '60', 'Multiplies P.Def by 1.0083<br>Adds Max HP by 82<br>Adds Dark Resistance by 0.8' );
        seederAddRecipe( 'Moirai Gauntlets', $imagePath, 15000000, 'S-80', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0083<br>Multiplies P.Atk Speed by 1.0067<br>Decreases Stun Vulnerability by 5<br>Adds Wind Resistance by 3' );
        seederAddRecipe( 'Vesper Gauntlets', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0041<br>Multiplies P.Def by 1.0041<br>Adds Max HP by 22<br>Decreases Sleep Vulnerability by 7<br>Decreases Root Vulnerability by 7' );
    }


    protected function addArmorRobeFullBody() {
        $categoryId = $this->armorRobeFullBodyCategory->id;
        $imagePath  = 'item/armor/robe/full-body';

        seederAddRecipe( 'Avadon Robe', $imagePath, 3700000, 'B', $categoryId, 0, '60', 'Multiplies M.Atk Spd by 1.15<br>Multiplies M.Def by 1.1708' );
        seederAddRecipe( 'Avadon Robe 100%', $imagePath, 3700000, 'B', $categoryId, 0, '100', 'Multiplies M.Atk Spd by 1.15<br>Multiplies M.Def by 1.1708' );
        seederAddRecipe( 'Dark Crystal Robe', $imagePath, 1250000, 'A', $categoryId, 0, '60', 'Adds Cancel Vulnerability by 8.33<br>Multiplies M.Atk Spd by 1.15<br>Adds Paralyze Vulnerability by 20<br>Multiplies P.Def by 1.0333<br>Adds Run Speed by 2.91' );
        seederAddRecipe( 'Robe of Nightmare', $imagePath, 12000000, 'A', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0827<br>Multiplies Regen MP by 1.0827<br>Decreases Root Vulnerability by 29.16<br>Decreases Sleep Vulnerability by 29.16' );
        seederAddRecipe( 'Majestic Robe', $imagePath, 0, 'A', $categoryId, 0, '60', 'Multiplies M.Atk Spd by 1.15<br>Multiplies Regen MP by 1.0333<br>Adds Stun Vulnerability by 20.83' );
        seederAddRecipe( 'Major Arcana Robe', $imagePath, 21000000, 'S', $categoryId, 0, '60', 'Decreases Cancel by 21<br>Adds Max Load by 8159<br>Multiplies M.Atk by 1.1603<br>Multiplies Run Speed by 1.0991<br>Decreases Stun Vulnerability by 20.83' );
    }

    protected function addArmorRobeUpper() {
        $categoryId = $this->armorRobeUpperCategory->id;
        $imagePath  = 'item/armor/robe/upper';

        seederAddRecipe( 'Tunic of Zubei', $imagePath, 2000000, 'B', $categoryId, 0, '60', 'Multiplies M.Atk by 1.15' );
        seederAddRecipe( 'Tunic of Zubei 100%', $imagePath, 2000000, 'B', $categoryId, 0, '100', 'Multiplies M.Atk by 1.15' );
        seederAddRecipe( 'Blue Wolf Tunic', $imagePath, 5500000, 'B', $categoryId, 0, '60', 'Adds Max MP by 205<br>Multiplies Regen MP by 1.0724' );
        seederAddRecipe( 'Blue Wolf Tunic 100%', $imagePath, 5500000, 'B', $categoryId, 0, '100', 'Adds Max MP by 205<br>Multiplies Regen MP by 1.0724' );
        seederAddRecipe( 'Tunic of Doom', $imagePath, 4500000, 'B', $categoryId, 0, '60', 'Adds Breath by 200<br>Multiplies Regen MP by 1.0724<br>Adds Run Speed by 7' );
        seederAddRecipe( 'Tunic of Doom 100%', $imagePath, 4500000, 'B', $categoryId, 0, '100', 'Adds Breath by 200<br>Multiplies Regen MP by 1.0724<br>Adds Run Speed by 7' );
        seederAddRecipe( 'Tallum Tunic', $imagePath, 4000000, 'A', $categoryId, 0, '60', 'Multiplies M.Atk Spd by 1.15' );
        seederAddRecipe( 'Dynasty Tunic', $imagePath, 60000000, 'S', $categoryId, 0, '60', 'Multiplies M.Atk Spd by 1.15' );
        seederAddRecipe( 'Moirai Tunic', $imagePath, 190000000, 'S-80', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0811<br>Multiplies M.Atk Spd by 1.15<br>Decreases Paralyze Vulnerability by 5<br>Adds Water Resistance by 1<br>Adds Fire Resistance by 1<br>Adds Wind Resistance by 1<br>Adds Earth Resistance by 1' );
        seederAddRecipe( 'Vesper Tunic', $imagePath, 111000000, 'S-84', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0847<br>Multiplies M.Atk Spd by 1.15<br>Multiplies Regen MP by 1.05<br>Decreases Stun Vulnerability by 20<br>Decreases Cancel by 12' );
    }

    protected function addArmorRobeLower() {
        $categoryId = $this->armorRobeLowerCategory->id;
        $imagePath  = 'item/armor/robe/lower';

        seederAddRecipe( 'Stockings of Doom', $imagePath, 2000000, 'B', $categoryId, 0, '60', 'Adds Run Speed by 2.91<br>Adds Breath by 88<br>Multiplies Regen MP by 1.0208' );
        seederAddRecipe( 'Stockings of Doom 100%', $imagePath, 2000000, 'B', $categoryId, 0, '100', 'Adds Run Speed by 2.91<br>Adds Breath by 88<br>Multiplies Regen MP by 1.0208' );
        seederAddRecipe( 'Blue Wolf Stockings', $imagePath, 5800000, 'B', $categoryId, 0, '60', 'Adds Max MP by 85<br>Multiplies Regen MP by 1.0208' );
        seederAddRecipe( 'Blue Wolf Stockings 100%', $imagePath, 5800000, 'B', $categoryId, 0, '100', 'Adds Max MP by 85<br>Multiplies Regen MP by 1.0208' );
        seederAddRecipe( 'Stockings of Zubei', $imagePath, 0, 'B', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0208' );
        seederAddRecipe( 'Stockings of Zubei 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Multiplies M.Atk by 1.0208' );
        seederAddRecipe( 'Tallum Stockings', $imagePath, 2800000, 'A', $categoryId, 0, '60', 'Multiplies M.Def by 1.0333<br>Decreases Poison Vulnerability by 33.33<br>Decreases Bleed Vulnerability by 33.33' );
        seederAddRecipe( 'Dynasty Stockings', $imagePath, 28000000, 'S', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0208<br>Adds Max MP by 133<br>Adds Dark Resistance by 3.33' );
        seederAddRecipe( 'Moirai Stockings', $imagePath, 33000000, 'S-80', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0103<br>Decreases Paralyze Vulnerability by 5<br>Adds Water Resistance by 5' );
        seederAddRecipe( 'Vesper Stockings', $imagePath, 60000000, 'S-84', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0068<br>Multiplies Regen MP by 1.0068<br>Decreases Stun Vulnerability by 5<br>Decreases Cancel by 7.5' );
    }

    protected function addArmorRobeHelmet() {
        $categoryId = $this->armorRobeHelmetCategory->id;
        $imagePath  = 'item/armor/robe/helmet';

        seederAddRecipe( 'Major Arcana Circlet', $imagePath, 79000000, 'S', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0062<br>Adds Run Speed by 1.175<br>Decreases Cancel by 13<br>Adds Max Load by 1440<br>Decreases Stun Vulnerability by 12.5' );
        seederAddRecipe( 'Dynasty Circlet', $imagePath, 24000000, 'S', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0125<br>Adds Max MP by 80<br>Adds Dark Resistance by 2' );
        seederAddRecipe( 'Moirai Circlet', $imagePath, 217000000, 'S-80', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0062<br>Decreases Paralyze Vulnerability by 5<br>Adds Fire Resistance by 5' );
        seederAddRecipe( 'Vesper Circlet', $imagePath, 85000000, 'S-84', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0041<br>Multiplies Regen MP by 1.0041<br>Decreases Stun Vulnerability by 8<br>Decreases Cancel by 4.5' );
    }

    protected function addArmorRobeBoot() {
        $categoryId = $this->armorRobeBootCategory->id;
        $imagePath  = 'item/armor/robe/boot';

        seederAddRecipe( 'Major Arcana Boots', $imagePath, 5000000, 'S', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0041<br>Adds Run Speed by 1.16<br>Decreases Cancel by 8<br>Adds Max Load by 960<br>Decreases Stun Vulnerability by 8.3' );
        seederAddRecipe( 'Dynasty Shoes', $imagePath, 20000000, 'S', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0083<br>Adds Max MP by 53<br>Adds Dark Resistance by 1.33' );
        seederAddRecipe( 'Moirai Shoes', $imagePath, 26000000, 'S-80', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0041<br>Decreases Paralyze Vulnerability by 5<br>Adds Earth Resistance by 5' );
        seederAddRecipe( 'Vesper Shoes', $imagePath, 40000000, 'S-84', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0027<br>Multiplies Regen MP by 1.0027<br>Decreases Stun Vulnerability by 5<br>Decreases Cancel by 3' );
    }

    protected function addArmorRobeGloves() {
        $categoryId = $this->armorRobeGlovesCategory->id;
        $imagePath  = 'item/armor/robe/gloves';

        seederAddRecipe( 'Major Arcana Gloves', $imagePath, 4000000, 'S', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0041<br>Adds Run Speed by 1.16<br>Decreases Cancel by 8<br>Adds Max Load by 960<br>Decreases Stun Vulnerability by 8.3' );
        seederAddRecipe( 'Dynasty Gloves', $imagePath, 39000000, 'S', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0083<br>Adds Max MP by 53<br>Adds Dark Resistance by 1.33' );
        seederAddRecipe( 'Moirai Gloves', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0041<br>Decreases Paralyze Vulnerability by 5<br>Adds Wind Resistance by 5' );
        seederAddRecipe( 'Vesper Gloves', $imagePath, 30000000, 'S-84', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0027<br>Multiplies Regen MP by 1.0027<br>Decreases Stun Vulnerability by 5<br>Decreases Cancel by 3' );
    }

    protected function addArmorUniversalHelmet() {
        $categoryId = $this->armorUniversalHelmetCategory->id;
        $imagePath  = 'item/armor/universal/helmet';

        seederAddRecipe( 'Doom Helmet', $imagePath, 4000000, 'B', $categoryId, 0, '60', 'Heavy:<br>Adds Max HP by 80<br>Adds Breath by 50<br>Light:<br>Adds Breath by 50<br>Multiplies P.Atk by 1.0062<br>Multiplies Regen MP by 1.0062<br>Decreases Poison Vulnerability by 2<br>Robe:<br>Adds Run Speed by 1.75<br>Adds Breath by 50<br>Multiplies Regen MP by 1.0125' );
        seederAddRecipe( 'Doom Helmet 100%', $imagePath, 4000000, 'B', $categoryId, 0, '100', 'Heavy:<br>Adds Max HP by 80<br>Adds Breath by 50<br>Light:<br>Adds Breath by 50<br>Multiplies P.Atk by 1.0062<br>Multiplies Regen MP by 1.0062<br>Decreases Poison Vulnerability by 2<br>Robe:<br>Adds Run Speed by 1.75<br>Adds Breath by 50<br>Multiplies Regen MP by 1.0125' );
        seederAddRecipe( 'Blue Wolf Helmet', $imagePath, 0, 'B', $categoryId, 0, '60', 'Heavy:<br>Adds Run Speed by 1.75<br>Multiplies Regen HP by 1.0125<br>Light:<br>Multiplies P.Def by 1.0132<br>Robe:<br>Adds Max MP by 51<br>Multiplies Regen MP by 1.0125' );
        seederAddRecipe( 'Blue Wolf Helmet 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Heavy:<br>Adds Run Speed by 1.75<br>Multiplies Regen HP by 1.0125<br>Light:<br>Multiplies P.Def by 1.0132<br>Robe:<br>Adds Max MP by 51<br>Multiplies Regen MP by 1.0125' );
        seederAddRecipe( 'Avadon Circlet', $imagePath, 7500000, 'B', $categoryId, 0, '60', 'Heavy:<br>Adds Max HP by 73<br>Light:<br>Multiplies M.Def by 1.0125<br>Adds Max Load by 1440<br>Robe:<br>Multiplies P.Def by 1.0125' );
        seederAddRecipe( 'Avadon Circlet 100%', $imagePath, 7500000, 'B', $categoryId, 0, '100', 'Heavy:<br>Adds Max HP by 73<br>Light:<br>Multiplies M.Def by 1.0125<br>Adds Max Load by 1440<br>Robe:<br>Multiplies P.Def by 1.0125' );
        seederAddRecipe( 'Zubei\'s Helmet', $imagePath, 1600000, 'B', $categoryId, 0, '60', 'Heavy:<br>Multiplies P.Def by 1.0125<br>Adds Max HP by 74<br>Light:<br>Adds Rate Evasion by 0.88<br>Robe:<br>Multiplies M.Atk by 1.0125' );
        seederAddRecipe( 'Zubei\'s Helmet 100%', $imagePath, 1600000, 'B', $categoryId, 0, '100', 'Heavy:<br>Multiplies P.Def by 1.0125<br>Adds Max HP by 74<br>Light:<br>Adds Rate Evasion by 0.88<br>Robe:<br>Multiplies M.Atk by 1.0125' );
        seederAddRecipe( 'Majestic Circlet', $imagePath, 11000000, 'A', $categoryId, 0, '60', 'Heavy:<br>Multiplies P.Atk by 1.0062<br>Adds Accuracy Combat by 0.47<br>Decreases Stun Vulnerability by 12.5<br>Light:<br>Multiplies P.Atk by 1.0125<br>Adds Max MP by 60<br>Adds Max Load by 1440<br>Decreases Stun Vulnerability by 12.5<br>Robe:<br>Adds Max MP by 60<br>Multiplies Regen MP by 1.02<br>Decreases Stun Vulnerability by 12.5' );
        seederAddRecipe( 'Helm of Nightmare', $imagePath, 15000000, 'A', $categoryId, 0, '60', 'Heavy:<br>Multiplies P.Atk by 1.0125<br>Decreases Sleep Vulnerability by 17.5<br>Decreases Root Vulnerability by 17.5<br>Light:<br>Multiplies M.Def by 1.0062<br>Decreases Sleep Vulnerability by 17.5<br>Decreases Root Vulnerability by 17.5<br>Robe:<br>Multiplies Regen MP by 1.0062<br>Multiplies M.Atk by 1.0062<br>Decreases Sleep Vulnerability by 17.5<br>Decreases Root Vulnerability by 17.5' );
        seederAddRecipe( 'Tallum Helmet', $imagePath, 4000000, 'A', $categoryId, 0, '60', 'Heavy:<br>Multiplies P.Atk Speed by 1.0125<br>Adds Max Load by 1440<br>Decreases Poison Vulnerability by 12<br>Decreases Bleed Vulnerability by 12<br>Light:<br>Multiplies Regen MP by 1.0125<br>Adds Max MP by 56<br>Decreases Poison Vulnerability by 12<br>Decreases Bleed Vulnerability by 12<br>Robe:<br>Multiplies M.Def by 1.02<br>Decreases Poison Vulnerability by 20<br>Decreases Bleed Vulnerability by 20' );
        seederAddRecipe( 'Dark Crystal Helmet', $imagePath, 13000000, 'A', $categoryId, 0, '60', 'Heavy:<br>Multiplies Gain Hp by 1.01<br>Decreases Paralyze Vulnerability by 7.5<br>Light:<br>Multiplies P.Atk Speed by 1.0062<br>Multiplies P.Atk by 1.0062<br>Decreases Paralyze Vulnerability by 7.5<br>Robe:<br>Multiplies P.Def by 1.02<br>Adds Run Speed by 1.75<br>Decreases Cancel by 13<br>Decreases Paralyze Vulnerability by 12.5' );
    }

    protected function addArmorUniversalBoot() {
        $categoryId = $this->armorUniversalBootCategory->id;
        $imagePath  = 'item/armor/universal/boot';

        seederAddRecipe( 'Blue Wolf Boots', $imagePath, 1500000, 'B', $categoryId, 0, '60', 'Heavy:<br>Adds Run Speed by 1.16<br>Multiplies Regen HP by 1.0083<br>Light:<br>Multiplies P.Def by 1.0088<br>Robe:<br>Adds Max MP by 34<br>Multiplies Regen MP by 1.0083' );
        seederAddRecipe( 'Blue Wolf Boots 100%', $imagePath, 1500000, 'B', $categoryId, 0, '100', 'Heavy:<br>Adds Run Speed by 1.16<br>Multiplies Regen HP by 1.0083<br>Light:<br>Multiplies P.Def by 1.0088<br>Robe:<br>Adds Max MP by 34<br>Multiplies Regen MP by 1.0083' );
        seederAddRecipe( 'Doom Boots', $imagePath, 1000000, 'B', $categoryId, 0, '60', 'Heavy:<br>Adds Max HP by 53<br>Adds Breath by 33<br>Light:<br>Adds Breath by 33<br>Multiplies P.Atk by 1.0041<br>Multiplies Regen MP by 1.0041<br>Decreases Poison Vulnerability by 3<br>Robe:<br>Adds Run Speed by 1.16<br>Adds Breath by 33<br>Multiplies Regen MP by 1.0083' );
        seederAddRecipe( 'Doom Boots 100%', $imagePath, 2200000, 'B', $categoryId, 0, '100', 'Heavy:<br>Adds Max HP by 53<br>Adds Breath by 33<br>Light:<br>Adds Breath by 33<br>Multiplies P.Atk by 1.0041<br>Multiplies Regen MP by 1.0041<br>Decreases Poison Vulnerability by 3<br>Robe:<br>Adds Run Speed by 1.16<br>Adds Breath by 33<br>Multiplies Regen MP by 1.0083' );
        seederAddRecipe( 'Avadon Boots', $imagePath, 0, 'B', $categoryId, 0, '60', 'Heavy:<br>Adds Max HP by 49<br>Light:<br>Multiplies M.Def by 1.0083<br>Adds Max Load by 960<br>Robe:<br>Multiplies P.Def by 1.0083' );
        seederAddRecipe( 'Avadon Boots 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Heavy:<br>Adds Max HP by 49<br>Light:<br>Multiplies M.Def by 1.0083<br>Adds Max Load by 960<br>Robe:<br>Multiplies P.Def by 1.0083' );
        seederAddRecipe( 'Zubei\'s Boots', $imagePath, 4000000, 'B', $categoryId, 0, '60', 'Heavy:<br>Multiplies P.Def by 1.0083<br>Adds Max HP by 49<br>Light:<br>Adds Rate Evasion by 0.59<br>Robe:<br>Multiplies M.Atk by 1.0083' );
        seederAddRecipe( 'Zubei\'s Boots 100%', $imagePath, 4000000, 'B', $categoryId, 0, '100', 'Heavy:<br>Multiplies P.Def by 1.0083<br>Adds Max HP by 49<br>Light:<br>Adds Rate Evasion by 0.59<br>Robe:<br>Multiplies M.Atk by 1.0083' );
        seederAddRecipe( 'Majestic Boots', $imagePath, 14500000, 'A', $categoryId, 0, '60', 'Heavy:<br>Multiplies P.Atk by 1.0062<br>Adds Accuracy Combat by 0.47<br>Decreases Stun Vulnerability by 8.33<br>Light:<br>Multiplies P.Atk by 1.0083<br>Adds Max MP by 40<br>Adds Max Load by 960<br>Decreases Stun Vulnerability by 8.33<br>Robe:<br>Adds Max MP by 40<br>Multiplies Regen MP by 1.0133<br>Decreases Stun Vulnerability by 8.33' );
        seederAddRecipe( 'Boots of Nightmare', $imagePath, 9000000, 'A', $categoryId, 0, '60', 'Heavy:<br>Multiplies P.Atk by 1.0083<br>Decreases Sleep Vulnerability by 11.66<br>Decreases Root Vulnerability by 11.66<br>Light:<br>Multiplies P.Atk by 1.0041<br>Decreases Sleep Vulnerability by 11.66<br>Decreases Root Vulnerability by 11.66<br>Robe:<br>Multiplies Regen MP by 1.0041<br>Multiplies M.Atk by 1.0041<br>Decreases Sleep Vulnerability by 11.66<br>Decreases Root Vulnerability by 11.66' );
        seederAddRecipe( 'Tallum Boots', $imagePath, 3500000, 'A', $categoryId, 0, '60', 'Heavy:<br>Multiplies P.Atk Speed by 1.0083<br>Adds Max Load by 960<br>Decreases Poison Vulnerability by 8<br>Decreases Bleed Vulnerability by 8<br>Light:<br>Multiplies Regen MP by 1.0083<br>Adds Max MP by 37<br>Decreases Poison Vulnerability by 8<br>Decreases Bleed Vulnerability by 8<br>Robe:<br>Multiplies M.Def by 1.0133<br>Decreases Poison Vulnerability by 13.33<br>Decreases Bleed Vulnerability by 13.33' );
        seederAddRecipe( 'Dark Crystal Boots', $imagePath, 3500000, 'A', $categoryId, 0, '60', 'Heavy:<br>Multiplies Gain Hp by 1.01<br>Decreases Paralyze Vulnerability by 5<br>Light:<br>Multiplies P.Atk Speed by 1.0041<br>Multiplies P.Atk by 1.0041<br>Decreases Paralyze Vulnerability by 5<br>Robe:<br>Multiplies P.Def by 1.0133<br>Adds Run Speed by 1.16<br>Decreases Cancel by 8<br>Decreases Paralyze Vulnerability by 8.33' );
    }

    protected function addArmorUniversalGloves() {
        $categoryId = $this->armorUniversalGlovesCategory->id;
        $imagePath  = 'item/armor/universal/gloves';

        seederAddRecipe( 'Doom Gloves', $imagePath, 1700000, 'B', $categoryId, 0, '60', 'Heavy:<br>Adds Max HP by 53<br>Adds Breath by 33<br>Light:<br>Adds Breath by 33<br>Multiplies P.Atk by 1.0041<br>Multiplies Regen MP by 1.0041<br>Decreases Poison Vulnerability by 2<br>Robe:<br>Adds Run Speed by 1.16<br>Adds Breath by 33<br>Multiplies Regen MP by 1.0083' );
        seederAddRecipe( 'Doom Gloves 100%', $imagePath, 1700000, 'B', $categoryId, 0, '100', 'Heavy:<br>Adds Max HP by 53<br>Adds Breath by 33<br>Light:<br>Adds Breath by 33<br>Multiplies P.Atk by 1.0041<br>Multiplies Regen MP by 1.0041<br>Decreases Poison Vulnerability by 2<br>Robe:<br>Adds Run Speed by 1.16<br>Adds Breath by 33<br>Multiplies Regen MP by 1.0083' );
        seederAddRecipe( 'Blue Wolf Gloves', $imagePath, 3200000, 'B', $categoryId, 0, '60', 'Heavy:<br>Adds Run Speed by 1.16<br>Multiplies Regen HP by 1.0083<br>Light:<br>Multiplies P.Def by 1.0088<br>Robe:<br>Adds Max MP by 34<br>Multiplies Regen MP by 1.0083' );
        seederAddRecipe( 'Blue Wolf Gloves 100%', $imagePath, 3200000, 'B', $categoryId, 0, '100', 'Heavy:<br>Adds Run Speed by 1.16<br>Multiplies Regen HP by 1.0083<br>Light:<br>Multiplies P.Def by 1.0088<br>Robe:<br>Adds Max MP by 34<br>Multiplies Regen MP by 1.0083' );
        seederAddRecipe( 'Avadon Gloves', $imagePath, 2300000, 'B', $categoryId, 0, '60', 'Heavy:<br>Adds Max HP by 49<br>Light:<br>Multiplies M.Def by 1.0083<br>Adds Max Load by 960<br>Robe:<br>Multiplies P.Def by 1.0083' );
        seederAddRecipe( 'Avadon Gloves 100%', $imagePath, 2300000, 'B', $categoryId, 0, '100', 'Heavy:<br>Adds Max HP by 49<br>Light:<br>Multiplies M.Def by 1.0083<br>Adds Max Load by 960<br>Robe:<br>Multiplies P.Def by 1.0083' );
        seederAddRecipe( 'Zubei\'s Gauntlets', $imagePath, 0, 'B', $categoryId, 0, '60', 'Heavy:<br>Multiplies P.Atk Speed by 1.0041<br>Multiplies P.Atk by 1.0041<br>Decreases Paralyze Vulnerability by 5<br>Light:<br>Multiplies P.Def by 1.0083<br>Adds Max HP by 49<br>Robe:<br>Adds Rate Evasion by 0.59' );
        seederAddRecipe( 'Zubei\'s Gauntlets 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Heavy:<br>Multiplies P.Atk Speed by 1.0041<br>Multiplies P.Atk by 1.0041<br>Decreases Paralyze Vulnerability by 5<br>Light:<br>Multiplies P.Def by 1.0083<br>Adds Max HP by 49<br>Robe:<br>Adds Rate Evasion by 0.59' );
        seederAddRecipe( 'Majestic Gauntlets', $imagePath, 24000000, 'A', $categoryId, 0, '60', 'Heavy:<br>Multiplies P.Atk by 1.0041<br>Adds Accuracy Combat by 0.31<br>Decreases Stun Vulnerability by 8.33<br>Light:<br>Multiplies P.Atk by 1.0083<br>Adds Max MP by 40<br>Adds Max Load by 960<br>Decreases Stun Vulnerability by 8.33<br>Robe:<br>Adds Max MP by 40<br>Multiplies Regen MP by 1.0133<br>Decreases Stun Vulnerability by 8.33' );
        seederAddRecipe( 'Gauntlets of Nightmare', $imagePath, 3500000, 'A', $categoryId, 0, '60', 'Heavy:<br>Multiplies P.Atk by 1.0083<br>Decreases Sleep Vulnerability by 11.66<br>Decreases Root Vulnerability by 11.66<br>Light:<br>Multiplies P.Atk by 1.0041<br>Decreases Sleep Vulnerability by 11.66<br>Decreases Root Vulnerability by 11.66<br>Robe:<br>Multiplies Regen MP by 1.0041<br>Multiplies M.Atk by 1.0041<br>Decreases Sleep Vulnerability by 11.66<br>Decreases Root Vulnerability by 11.66' );
        seederAddRecipe( 'Tallum Gloves', $imagePath, 17000000, 'A', $categoryId, 0, '60', 'Heavy:<br>Multiplies P.Atk Speed by 1.0083<br>Adds Max Load by 960<br>Decreases Poison Vulnerability by 8<br>Decreases Bleed Vulnerability by 8<br>Light:<br>Multiplies Regen MP by 1.0083<br>Adds Max MP by 37<br>Decreases Poison Vulnerability by 8<br>Decreases Bleed Vulnerability by 8<br>Robe:<br>Multiplies M.Def by 1.0133<br>Decreases Poison Vulnerability by 13.33<br>Decreases Bleed Vulnerability by 13.33' );
        seederAddRecipe( 'Dark Crystal Gloves', $imagePath, 5000000, 'A', $categoryId, 0, '60', 'Heavy:<br>Multiplies Gain Hp by 1.01<br>Decreases Paralyze Vulnerability by 5<br>Light:<br>Multiplies P.Atk Speed by 1.0041<br>Multiplies P.Atk by 1.0041<br>Decreases Paralyze Vulnerability by 5<br>Robe:<br>Multiplies P.Def by 1.0133<br>Adds Run Speed by 1.16<br>Decreases Cancel by 8<br>Decreases Paralyze Vulnerability by 8.33' );
    }

}
