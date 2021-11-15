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

    public function seedArmor() {
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
        $this->armorHeavyFullBodyCategory = Category::where( 'name', 'FullBody' )->where( 'category_id', $this->armorHeavyCategory->id )->firstOrFail();
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

        seederAddRecipe( 'Imperial Crusader Shield', $imagePath, 10000000, 'S', $categoryId, 0, '60', 'Multiplies M.Def by 1.02' );
        seederAddRecipe( 'Dynasty Shield', $imagePath, 36000000, 'S', $categoryId, 0, '60', 'Multiplies M.Def by 1.02' );
        seederAddRecipe( 'Moirai Shield', $imagePath, 25000000, 'S-80', $categoryId, 0, '60', 'Multiplies Magic Damage Vulnerability by 0.98' );
        seederAddRecipe( 'Vesper Shield', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Multiplies Magic Damage Vulnerability by 0.98' );
    }

    protected function addSigil() {
        $categoryId = $this->sigilCategory->id;
        $imagePath  = 'item/sigil';

        seederAddRecipe( 'Arcana Sigil', $imagePath, 0, 'S', $categoryId, 0, '60', 'Increases M. Def by 2% and decreases magic canceling damage by 13.' );
        seederAddRecipe( 'Dynasty Sigil', $imagePath, 30000000, 'S', $categoryId, 0, '60', 'Increases M. Def by 2% and Resistance to Dark by 2.' );
        seederAddRecipe( 'Moirai Sigil', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Multiplies Magic Damage Vulnerability by 0.98' );
        seederAddRecipe( 'Vesper Sigil', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Multiplies Magic Damage Vulnerability by 0.98' );
    }

    protected function addArmorLightFullBody() {
        $categoryId = $this->armorLightFullBodyCategory->id;
        $imagePath  = 'item/armor/light/full-body';

        seederAddRecipe( 'Avadon Leather Armor', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Blue Wolf Leather Armor', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Leather Armor of Doom', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Tallum Leather Armor', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Armor of Nightmare', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Majestic Leather Armor', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Draconic Leather Armor', $imagePath, 0, 'S', $categoryId, 0, '60', 'Adds Max Load by 8159<br>Adds Max MP by 630<br>Multiplies P.Atk by 1.058<br>Multiplies P.Atk Speed by 1.058' );
    }

    protected function addArmorLightUpper() {
        $categoryId = $this->armorLightUpperCategory->id;
        $imagePath  = 'item/armor/light/upper';

        seederAddRecipe( 'Zubei\'s Leather Shirt', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Dark Crystal Leather Armor', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Dynasty Leather Armor', $imagePath, 0, 'S', $categoryId, 0, '60', 'Adds Accuracy Combat by 3.4<br>Adds Dark Resistance by 3.2<br>Adds Max MP by 492<br>Multiplies P.Atk Speed by 1.0477<br>Adds Rate Evasion by 3.4' );
        seederAddRecipe( 'Moirai Leather Breastplate', $imagePath, 150000000, 'S-80', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0426<br>Decreases Root Vulnerability by 5<br>Multiplies Regen MP by 1.04<br>Adds Water Resistance by 3' );
        seederAddRecipe( 'Vesper Leather Breastplate', $imagePath, 100000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0557<br>Multiplies P.Atk Speed by 1.05<br>Multiplies Regen MP by 1.05<br>Adds Max MP by 347<br>' );
    }

    protected function addArmorLightLower() {
        $categoryId = $this->armorLightLowerCategory->id;
        $imagePath  = 'item/armor/light/lower';

        seederAddRecipe( 'Zubei\'s Leather Gaiters', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Dark Crystal Leggings', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Dynasty Leather Leggings', $imagePath, 0, 'S', $categoryId, 0, '60', 'Adds Accuracy Combat by 0.79<br>Adds Rate Evasion by 0.79<br>Adds Max HP by 205<br>Multiplies P.Atk Speed by 1.0068<br>Adds Dark Resistance by 2<br>' );
        seederAddRecipe( 'Moirai Leather Leggings', $imagePath, 40000000, 'S-80', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0208<br>Decreases Root Vulnerability by 5<br>Multiplies Regen MP by 1.0167<br>Adds Water Resistance by 3<br>' );
        seederAddRecipe( 'Vesper Leather Leggings', $imagePath, 40000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0068<br>Multiplies P.Atk Speed by 1.0068<br>Multiplies Regen MP by 1.0068<br>Adds Max MP by 145' );
    }

    protected function addArmorLightHelmet() {
        $categoryId = $this->armorLightHelmetCategory->id;
        $imagePath  = 'item/armor/light/helmet';

        seederAddRecipe( 'Draconic Leather Helmet', $imagePath, 0, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.0062<br>Multiplies P.Atk by 1.0062<br>Adds Max MP by 111<br>Adds Max Load by 1440<br>' );
        seederAddRecipe( 'Dynasty Leather Helmet', $imagePath, 10000000, 'S', $categoryId, 0, '60', 'Adds Accuracy Combat by 0.47<br>Adds Rate Evasion by 0.47<br>Adds Max HP by 123<br>Multiplies P.Atk Speed by 1.0041<br>Adds Dark Resistance by 1.2' );
        seederAddRecipe( 'Moirai Leather Helmet', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0125<br>Decreases Root Vulnerability by 5<br>Multiplies Regen MP by 1.01<br>Adds Fire Resistance by 3<br>' );
        seederAddRecipe( 'Vesper Leather Helmet', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0041<br>Multiplies P.Atk Speed by 1.0041<br>Multiplies Regen MP by 1.0041<br>Adds Max MP by 87<br>' );
    }

    protected function addArmorLightBoot() {
        $categoryId = $this->armorLightBootCategory->id;
        $imagePath  = 'item/armor/light/boot';

        seederAddRecipe( 'Draconic Leather Boots', $imagePath, 0, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.0041<br>Multiplies P.Atk by 1.0041<br>Adds Max MP by 74<br>Adds Max Load by 960<br>' );
        seederAddRecipe( 'Dynasty Leather Boots', $imagePath, 35000000, 'S', $categoryId, 0, '60', 'Adds Accuracy Combat by 0.31<br>Adds Rate Evasion by 0.31<br>Adds Max HP by 82<br>Multiplies P.Atk Speed by 1.0027<br>Adds Dark Resistance by 0.8<br>' );
        seederAddRecipe( 'Moirai Leather Boots', $imagePath, 20000000, 'S-80', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0083<br>Decreases Root Vulnerability by 5<br>Multiplies Regen MP by 1.0067<br>Adds Earth Resistance by 3<br>' );
        seederAddRecipe( 'Vesper Leather Boots', $imagePath, 30000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0027<br>Multiplies P.Atk Speed by 1.0027<br>Multiplies Regen MP by 1.0027<br>Adds Max MP by 58<br>' );
    }

    protected function addArmorLightGloves() {
        $categoryId = $this->armorLightGlovesCategory->id;
        $imagePath  = 'item/armor/light/gloves';

        seederAddRecipe( 'Draconic Leather Gloves', $imagePath, 0, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.0041<br>Multiplies P.Atk by 1.0041<br>Adds Max MP by 74<br>Adds Max Load by 960<br>' );
        seederAddRecipe( 'Dynasty Leather Gloves', $imagePath, 0, 'S', $categoryId, 0, '60', 'Adds Rate Evasion by 0.31<br>Adds Accuracy Combat by 0.31<br>Adds Max HP by 82<br>Multiplies P.Atk Speed by 1.0027<br>Adds Dark Resistance by 0.8<br>' );
        seederAddRecipe( 'Moirai Leather Gloves', $imagePath, 15000000, 'S-80', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0083<br>Decreases Root Vulnerability by 5<br>Multiplies Regen MP by 1.0067<br>Adds Wind Resistance by 3<br>' );
        seederAddRecipe( 'Vesper Leather Gloves', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0027<br>Multiplies P.Atk Speed by 1.0027<br>Multiplies Regen MP by 1.0027<br>Adds Max MP by 58<br>' );
    }

    protected function addArmorHeavyFullBody() {
        $categoryId = $this->armorHeavyFullBodyCategory->id;
        $imagePath  = 'item/armor/heavy/full-body';
        seederAddRecipe( 'Doom Plate Armor', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Tallum Plate Armor', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Armor of Nightmare', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Majestic Plate Armor', $imagePath, 0, 'A', $categoryId, 0, '60', '' );

    }

    protected function addArmorHeavyUpper() {
        $categoryId = $this->armorHeavyUpperCategory->id;
        $imagePath  = 'item/armor/heavy/upper';

        seederAddRecipe( 'Zubei\'s Breastplate', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Avadon Breastplate', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Blue Wolf Breastplate', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Dark Crystal breastplate', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Imperial Crusader Breastplate', $imagePath, 5000000, 'S', $categoryId, 0, '60', 'Adds Max HP by 889<br>Multiplies P.Def by 1.0724<br>Decreases Root Vulnerability by 28<br>Decreases Sleep Vulnerability by 28<br>' );
        seederAddRecipe( 'Dynasty Breastplate', $imagePath, 95000000, 'S', $categoryId, 0, '60', 'Adds Dark Resistance by 3.2<br>Adds Max HP by 984<br>Multiplies P.Def by 1.0724' );
        seederAddRecipe( 'Moirai Breastplate', $imagePath, 100000000, 'S-80', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0426<br>Multiplies P.Atk Speed by 1.04<br>Decreases Stun Vulnerability by 5<br>Adds Water Resistance by 1<br>Adds Fire Resistance by 1<br>Adds Wind Resistance by 1<br>Adds Earth Resistance by 1<br>' );
        seederAddRecipe( 'Vesper Breastplate', $imagePath, 100000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0557<br>Multiplies P.Def by 1.0557<br>Adds Max HP by 531<br>Decreases Sleep Vulnerability by 28<br>Decreases Root Vulnerability by 28<br>' );
    }

    protected function addArmorHeavyLower() {
        $categoryId = $this->armorHeavyLowerCategory->id;
        $imagePath  = 'item/armor/heavy/lower';

        seederAddRecipe( 'Zubei\'s Gaiters', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Avadon Gaiters', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Blue Wolf Gaiters', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Dark Crystal Gaiters', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Imperial Crusader Gaiters', $imagePath, 0, 'S', $categoryId, 0, '60', 'Multiplies P.Def by 1.0208<br>Adds Max HP by 185<br>Decreases Sleep Vulnerability by 17.5<br>Decreases Root Vulnerability by 17.5<br>' );
        seederAddRecipe( 'Dynasty Gaiters', $imagePath, 40000000, 'S', $categoryId, 0, '60', 'Multiplies P.Def by 1.0208<br>Adds Max HP by 205<br>Adds Dark Resistance by 2<br>' );
        seederAddRecipe( 'Moirai Gaiters', $imagePath, 40000000, 'S-80', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0208<br>Multiplies P.Atk Speed by 1.0167<br>Decreases Stun Vulnerability by 5<br>Adds Water Resistance by 3<br>' );
        seederAddRecipe( 'Vesper Gaiters', $imagePath, 100000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0103<br>Multiplies P.Def by 1.0103<br>Adds Max HP by 55<br>Decreases Sleep Vulnerability by 18<br>Decreases Root Vulnerability by 18<br>' );
    }

    protected function addArmorHeavyHelmet() {
        $categoryId = $this->armorHeavyHelmetCategory->id;
        $imagePath  = 'item/armor/heavy/helmet';

        seederAddRecipe( 'Imperial Crusader Helmet', $imagePath, 8000000, 'S', $categoryId, 0, '60', 'Multiplies P.Def by 1.0125<br>Adds Max HP by 111<br>Decreases Sleep Vulnerability by 10.5<br>Decreases Root Vulnerability by 10.5<br>' );
        seederAddRecipe( 'Dynasty Helmet', $imagePath, 15000000, 'S', $categoryId, 0, '60', 'Multiplies P.Def by 1.0125<br>Adds Max HP by 123<br>Adds Dark Resistance by 1.2<br>' );
        seederAddRecipe( 'Moirai Helmet', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0125<br>Multiplies P.Atk Speed by 1.01<br>Decreases Stun Vulnerability by 5<br>Adds Fire Resistance by 3<br>' );
        seederAddRecipe( 'Vesper Helmet', $imagePath, 40000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0062<br>Multiplies P.Def by 1.0062<br>Adds Max HP by 133<br>Decreases Sleep Vulnerability by 1<br>Decreases Root Vulnerability by 1<br>' );
    }

    protected function addArmorHeavyBoot() {
        $categoryId = $this->armorHeavyBootCategory->id;
        $imagePath  = 'item/armor/heavy/boot';

        seederAddRecipe( 'Imperial Crusader Boots', $imagePath, 0, 'S', $categoryId, 0, '60', 'Multiplies P.Def by 1.0083<br>Adds Max HP by 74<br>Decreases Sleep Vulnerability by 7<br>Decreases Root Vulnerability by 7' );
        seederAddRecipe( 'Dynasty Boots', $imagePath, 45000000, 'S', $categoryId, 0, '60', 'Multiplies P.Def by 1.0083<br>Adds Max HP by 82<br>Adds Dark Resistance by 0.8<br>' );
        seederAddRecipe( 'Moirai Boots', $imagePath, 20000000, 'S-80', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0083<br>Multiplies P.Atk Speed by 1.0067<br>Decreases Stun Vulnerability by 5<br>Adds Earth Resistance by 3<br>' );
        seederAddRecipe( 'Vesper Boots', $imagePath, 40000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0041<br>Multiplies P.Def by 1.0041<br>Adds Max HP by 22<br>Decreases Sleep Vulnerability by 7<br>Decreases Root Vulnerability by 7' );
    }

    protected function addArmorHeavyGloves() {
        $categoryId = $this->armorHeavyGlovesCategory->id;
        $imagePath  = 'item/armor/heavy/gloves';

        seederAddRecipe( 'Imperial Crusader Gauntlets', $imagePath, 3500000, 'S', $categoryId, 0, '60', 'Multiplies P.Def by 1.0083<br>Adds Max HP by 74<br>Decreases Sleep Vulnerability by 7<br>Decreases Root Vulnerability by 7<br>' );
        seederAddRecipe( 'Dynasty Gauntlets', $imagePath, 0, 'S', $categoryId, 0, '60', 'Multiplies P.Def by 1.0083<br>Adds Max HP by 82<br>Adds Dark Resistance by 0.8<br>' );
        seederAddRecipe( 'Moirai Gauntlets', $imagePath, 15000000, 'S-80', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0083<br>Multiplies P.Atk Speed by 1.0067<br>Decreases Stun Vulnerability by 5<br>Adds Wind Resistance by 3<br>' );
        seederAddRecipe( 'Vesper Gauntlets', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk by 1.0041<br>Multiplies P.Def by 1.0041<br>Adds Max HP by 22<br>Decreases Sleep Vulnerability by 7<br>Decreases Root Vulnerability by 7<br>' );
    }


    protected function addArmorRobeFullBody() {
        $categoryId = $this->armorRobeFullBodyCategory->id;
        $imagePath  = 'item/armor/robe/full-body';

        seederAddRecipe( 'Avadon Robe', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Dark Crystal Robe', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Robe of Nightmare', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Majestic Robe', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Major Arcana Robe', $imagePath, 25000000, 'S', $categoryId, 0, '60', 'Decreases Cancel by 21<br>Adds Max Load by 8159<br>Multiplies M.Atk by 1.1603<br>Multiplies Run Speed by 1.0991<br>Decreases Stun Vulnerability by 20.83<br>' );
    }

    protected function addArmorRobeUpper() {
        $categoryId = $this->armorRobeUpperCategory->id;
        $imagePath  = 'item/armor/robe/upper';

        seederAddRecipe( 'Tunic of Zubei', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Blue Wolf Tunic', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Tunic of Doom', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Tallum Tunic', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Dynasty Tunic', $imagePath, 40000000, 'S', $categoryId, 0, '60', 'Multiplies M.Atk Spd by 1.15' );
        seederAddRecipe( 'Moirai Tunic', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0811<br>Multiplies M.Atk Spd by 1.15<br>Decreases Paralyze Vulnerability by 5<br>Adds Water Resistance by 1<br>Adds Fire Resistance by 1<br>Adds Wind Resistance by 1<br>Adds Earth Resistance by 1<br>' );
        seederAddRecipe( 'Vesper Tunic', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0847<br>Multiplies M.Atk Spd by 1.15<br>Multiplies Regen MP by 1.05<br>Decreases Stun Vulnerability by 20<br>Decreases Cancel by 12<br>' );
    }

    protected function addArmorRobeLower() {
        $categoryId = $this->armorRobeLowerCategory->id;
        $imagePath  = 'item/armor/robe/lower';

        seederAddRecipe( 'Stockings of Doom', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Blue Wolf Stockings', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Stockings of Zubei', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Tallum Stockings', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Dynasty Stockings', $imagePath, 0, 'S', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0208<br>Adds Max MP by 133<br>Adds Dark Resistance by 3.33<br>' );
        seederAddRecipe( 'Moirai Stockings', $imagePath, 40000000, 'S-80', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0103<br>Decreases Paralyze Vulnerability by 5<br>Adds Water Resistance by 5<br>' );
        seederAddRecipe( 'Vesper Stockings', $imagePath, 70000000, 'S-84', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0068<br>Multiplies Regen MP by 1.0068<br>Decreases Stun Vulnerability by 5<br>Decreases Cancel by 7.5<br>' );
    }

    protected function addArmorRobeHelmet() {
        $categoryId = $this->armorRobeHelmetCategory->id;
        $imagePath  = 'item/armor/robe/helmet';

        seederAddRecipe( 'Major Arcana Circlet', $imagePath, 0, 'S', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0062<br>Adds Run Speed by 1.175<br>Decreases Cancel by 13<br>Adds Max Load by 1440<br>Decreases Stun Vulnerability by 12.5<br>' );
        seederAddRecipe( 'Dynasty Circlet', $imagePath, 18000000, 'S', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0125<br>Adds Max MP by 80<br>Adds Dark Resistance by 2<br>' );
        seederAddRecipe( 'Moirai Circlet', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0062<br>Decreases Paralyze Vulnerability by 5<br>Adds Fire Resistance by 5<br>' );
        seederAddRecipe( 'Vesper Circlet', $imagePath, 60000000, 'S-84', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0041<br>Multiplies Regen MP by 1.0041<br>Decreases Stun Vulnerability by 8<br>Decreases Cancel by 4.5<br>' );
    }

    protected function addArmorRobeBoot() {
        $categoryId = $this->armorRobeBootCategory->id;
        $imagePath  = 'item/armor/robe/boot';

        seederAddRecipe( 'Major Arcana Boots', $imagePath, 8000000, 'S', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0041<br>Adds Run Speed by 1.16<br>Decreases Cancel by 8<br>Adds Max Load by 960<br>Decreases Stun Vulnerability by 8.3<br>' );
        seederAddRecipe( 'Dynasty Shoes', $imagePath, 15000000, 'S', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0083<br>Adds Max MP by 53<br>Adds Dark Resistance by 1.33<br>' );
        seederAddRecipe( 'Moirai Shoes', $imagePath, 10000000, 'S-80', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0041<br>Decreases Paralyze Vulnerability by 5<br>Adds Earth Resistance by 5<br>' );
        seederAddRecipe( 'Vesper Shoes', $imagePath, 40000000, 'S-84', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0027<br>Multiplies Regen MP by 1.0027<br>Decreases Stun Vulnerability by 5<br>Decreases Cancel by 3<br>' );
    }

    protected function addArmorRobeGloves() {
        $categoryId = $this->armorRobeGlovesCategory->id;
        $imagePath  = 'item/armor/robe/gloves';

        seederAddRecipe( 'Major Arcana Gloves', $imagePath, 10000000, 'S', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0041<br>Adds Run Speed by 1.16<br>Decreases Cancel by 8<br>Adds Max Load by 960<br>Decreases Stun Vulnerability by 8.3<br>' );
        seederAddRecipe( 'Dynasty Gloves', $imagePath, 0, 'S', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0083<br>Adds Max MP by 53<br>Adds Dark Resistance by 1.33<br>' );
        seederAddRecipe( 'Moirai Gloves', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0041<br>Decreases Paralyze Vulnerability by 5<br>Adds Wind Resistance by 5' );
        seederAddRecipe( 'Vesper Gloves', $imagePath, 30000000, 'S-84', $categoryId, 0, '60', 'Multiplies M.Atk by 1.0027<br>Multiplies Regen MP by 1.0027<br>Decreases Stun Vulnerability by 5<br>Decreases Cancel by 3<br>' );
    }

    protected function addArmorUniversalHelmet() {
        $categoryId = $this->armorRobeGlovesCategory->id;
        $imagePath  = 'item/armor/universal/helmet';

        seederAddRecipe( 'Doom Helmet', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Blue Wolf Helmet', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Avadon Circlet', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Zubei\'s Helmet', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Majestic Circlet', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Helm of Nightmare', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Tallum Helmet', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Dark Crystal Helmet', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
    }

    protected function addArmorUniversalBoot() {
        $categoryId = $this->armorRobeBootCategory->id;
        $imagePath  = 'item/armor/universal/boot';

        seederAddRecipe( 'Blue Wolf Boots', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Doom Boots', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Avadon Boots', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Zubei\'s Boots', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Majestic Circlet', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Boots of Nightmare', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Tallum Boots', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Dark Crystal Boots', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
    }

    protected function addArmorUniversalGloves() {
        $categoryId = $this->armorRobeGlovesCategory->id;
        $imagePath  = 'item/armor/universal/gloves';

        seederAddRecipe( 'Dark Crystal Gloves', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Blue Wolf Gloves', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Avadon Gloves', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Zubei\'s Gauntlets', $imagePath, 0, 'B', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Majestic Gauntlets', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Gauntlets of Nightmare', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Tallum Gloves', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
        seederAddRecipe( 'Dark Crystal Gloves', $imagePath, 0, 'A', $categoryId, 0, '60', '' );
    }

}
