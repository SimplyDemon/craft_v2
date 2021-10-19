<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RecipeSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected Category $swordCategory;
    protected Category $bluntCategory;
    protected Category $bowCategory;
    protected Category $daggerCategory;
    protected Category $polearmCategory;
    protected Category $fistCategory;

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


    protected Category $jewerlyNecklaceCategory;
    protected Category $jewerlyEarringCategory;
    protected Category $jewerlyRingCategory;


    public function run() {
        $this->setWeaponCategories();
        $this->setArmorCategories();
        $this->setJewerlyCategories();
        $this->addWeapons();
        $this->addArmors();
        $this->addJewerly();
    }

    protected function addRecipe( string $name, string $imagePath, int $price, string $grade, int $categoryId, int $craftCost = 0, string $percent = '60' ) {
        return Recipe::create( [
            'name'        => $name,
            'slug'        => Str::slug( $name, '-' ),
            'price_sell'  => $price,
            'percent'     => $percent,
            'grade'       => $grade,
            'img'         => copyFile( "image/$imagePath/" . $name . '.png', "app/public/uploads/$imagePath/" ),
            'category_id' => $categoryId,
            'craft_cost'  => $craftCost,
        ] );
    }

    protected function addWeapons() {
        $this->addSwords();
        $this->addBlunts();
        $this->addBows();
        $this->addDaggers();
        $this->addPolearms();
        $this->addFists();
    }

    protected function addArmors() {
        $this->addArmorLight();
        $this->addArmorHeavy();
        $this->addArmorRobe();
    }

    protected function addJewerly() {
        $this->addJewerlyNecklace();
        $this->addJewerlyEarring();
        $this->addJewerlyRing();
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

    protected function setWeaponCategories() {
        $this->swordCategory   = Category::where( 'name', 'Sword' )->firstOrFail();
        $this->bluntCategory   = Category::where( 'name', 'Blunt' )->firstOrFail();
        $this->bowCategory     = Category::where( 'name', 'Bow' )->firstOrFail();
        $this->daggerCategory  = Category::where( 'name', 'Dagger' )->firstOrFail();
        $this->polearmCategory = Category::where( 'name', 'Polearm' )->firstOrFail();
        $this->fistCategory    = Category::where( 'name', 'Fist' )->firstOrFail();
        $this->fistCategory    = Category::where( 'name', 'Fist' )->firstOrFail();
    }

    protected function setJewerlyCategories() {
        $jewerlyCategory = Category::where( 'name', 'Jewerly' )->firstOrFail();

        $this->jewerlyNecklaceCategory = Category::where( 'name', 'Necklace' )->where( 'category_id', $jewerlyCategory->id )->firstOrFail();
        $this->jewerlyEarringCategory  = Category::where( 'name', 'Earring' )->where( 'category_id', $jewerlyCategory->id )->firstOrFail();
        $this->jewerlyRingCategory     = Category::where( 'name', 'Ring' )->where( 'category_id', $jewerlyCategory->id )->firstOrFail();
    }

    protected function addSwords() {
        $categoryId = $this->swordCategory->id;
        $imagePath  = 'item/weapon/sword';

        $this->addRecipe( 'Forgotten Blade', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Heavens Divider', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Sword', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Blade', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Phantom', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Icarus Sawsword', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Icarus Spirit', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Icarus Heavy Arms', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Cutter', $imagePath, 100000000, 'S-84', $categoryId );
        $this->addRecipe( 'Vesper Slasher', $imagePath, 100000000, 'S-84', $categoryId );
        $this->addRecipe( 'Vesper Buster', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addBlunts() {
        $categoryId = $this->bluntCategory->id;
        $imagePath  = 'item/weapon/blunt';

        $this->addRecipe( 'Basalt Battlehammer', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Imperial Staff', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dragon Hunter Axe', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Arcana Mace', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Cudgel', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Mace', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Staff', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Crusher', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Icarus Hammer', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Icarus Hall', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Avenger', $imagePath, 100000000, 'S-84', $categoryId );
        $this->addRecipe( 'Vesper Retributer', $imagePath, 100000000, 'S-84', $categoryId );
        $this->addRecipe( 'Vesper Caster', $imagePath, 100000000, 'S-84', $categoryId );
        $this->addRecipe( 'Vesper Singer', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addBows() {
        $categoryId = $this->bowCategory->id;
        $imagePath  = 'item/weapon/bow';

        $this->addRecipe( 'Draconic Bow', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Bow', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Icarus Spitter', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Thrower', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addDaggers() {
        $categoryId = $this->daggerCategory->id;
        $imagePath  = 'item/weapon/dagger';

        $this->addRecipe( 'Angel Slayer', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Knife', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Icarus Disperser', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Shaper', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addPolearms() {
        $categoryId = $this->polearmCategory->id;
        $imagePath  = 'item/weapon/polearm';

        $this->addRecipe( 'Saint Spear', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Halberd', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Icarus Trident', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Stormer', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addFists() {
        $categoryId = $this->fistCategory->id;
        $imagePath  = 'item/weapon/fist';

        $this->addRecipe( 'Demon Splinter', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Bagh-Nakh', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Icarus Hand', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Fighter', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorLightFullBody() {
        $categoryId = $this->armorLightFullBodyCategory->id;
        $imagePath  = 'item/armor/light/full-body';

        $this->addRecipe( 'Draconic Leather Armor', $imagePath, 100000000, 'S', $categoryId );
    }

    protected function addArmorLightUpper() {
        $categoryId = $this->armorLightUpperCategory->id;
        $imagePath  = 'item/armor/light/upper';

        $this->addRecipe( 'Dynasty Leather Armor', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Moirai Leather Breastplate', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Leather Breastplate', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorLightLower() {
        $categoryId = $this->armorLightLowerCategory->id;
        $imagePath  = 'item/armor/light/lower';

        $this->addRecipe( 'Dynasty Leather Leggings', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Moirai Leather Leggings', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Leather Leggings', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorLightHelmet() {
        $categoryId = $this->armorLightHelmetCategory->id;
        $imagePath  = 'item/armor/light/helmet';

        $this->addRecipe( 'Draconic Leather Helmet', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Leather Helmet', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Moirai Leather Helmet', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Leather Helmet', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorLightBoot() {
        $categoryId = $this->armorLightBootCategory->id;
        $imagePath  = 'item/armor/light/boot';

        $this->addRecipe( 'Draconic Leather Boots', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Leather Boots', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Moirai Leather Boots', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Leather Boots', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorLightGloves() {
        $categoryId = $this->armorLightGlovesCategory->id;
        $imagePath  = 'item/armor/light/gloves';

        $this->addRecipe( 'Draconic Leather Gloves', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Leather Gloves', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Moirai Leather Gloves', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Leather Gloves', $imagePath, 100000000, 'S-84', $categoryId );
    }


    protected function addArmorHeavyUpper() {
        $categoryId = $this->armorHeavyUpperCategory->id;
        $imagePath  = 'item/armor/heavy/upper';

        $this->addRecipe( 'Imperial Crusader Breastplate', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Breastplate', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Moirai Breastplate', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Breastplate', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorHeavyLower() {
        $categoryId = $this->armorHeavyLowerCategory->id;
        $imagePath  = 'item/armor/heavy/lower';

        $this->addRecipe( 'Imperial Crusader Gaiters', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Gaiters', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Moirai Gaiters', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Gaiters', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorHeavyHelmet() {
        $categoryId = $this->armorHeavyHelmetCategory->id;
        $imagePath  = 'item/armor/heavy/helmet';

        $this->addRecipe( 'Imperial Crusader Helmet', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Helmet', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Moirai Helmet', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Helmet', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorHeavyBoot() {
        $categoryId = $this->armorHeavyBootCategory->id;
        $imagePath  = 'item/armor/heavy/boot';

        $this->addRecipe( 'Imperial Crusader Boots', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Boots', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Moirai Boots', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Boots', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorHeavyGloves() {
        $categoryId = $this->armorHeavyGlovesCategory->id;
        $imagePath  = 'item/armor/heavy/gloves';

        $this->addRecipe( 'Imperial Crusader Gauntlets', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Gauntlets', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Moirai Gauntlets', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Gauntlets', $imagePath, 100000000, 'S-84', $categoryId );
    }


    protected function addArmorRobeFullBody() {
        $categoryId = $this->armorRobeFullBodyCategory->id;
        $imagePath  = 'item/armor/robe/full-body';

        $this->addRecipe( 'Major Arcana Robe', $imagePath, 100000000, 'S', $categoryId );
    }

    protected function addArmorRobeUpper() {
        $categoryId = $this->armorRobeUpperCategory->id;
        $imagePath  = 'item/armor/robe/upper';

        $this->addRecipe( 'Dynasty Tunic', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Moirai Tunic', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Tunic', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorRobeLower() {
        $categoryId = $this->armorRobeLowerCategory->id;
        $imagePath  = 'item/armor/robe/lower';

        $this->addRecipe( 'Dynasty Stockings', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Moirai Stockings', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Stockings', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorRobeHelmet() {
        $categoryId = $this->armorRobeHelmetCategory->id;
        $imagePath  = 'item/armor/robe/helmet';

        $this->addRecipe( 'Major Arcana Circlet', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Circlet', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Moirai Circlet', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Circlet', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorRobeBoot() {
        $categoryId = $this->armorRobeBootCategory->id;
        $imagePath  = 'item/armor/robe/boot';

        $this->addRecipe( 'Major Arcana Boots', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Shoes', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Moirai Shoes', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Shoes', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addArmorRobeGloves() {
        $categoryId = $this->armorRobeGlovesCategory->id;
        $imagePath  = 'item/armor/robe/gloves';

        $this->addRecipe( 'Major Arcana Gloves', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Gloves', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Moirai Gloves', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Gloves', $imagePath, 100000000, 'S-84', $categoryId );
    }


    protected function addJewerlyNecklace() {
        $categoryId = $this->jewerlyNecklaceCategory->id;
        $imagePath  = 'item/jewerly/necklace';

        $this->addRecipe( 'Tateossian Necklace', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Necklace', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Moirai Necklace', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Necklace', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addJewerlyEarring() {
        $categoryId = $this->jewerlyEarringCategory->id;
        $imagePath  = 'item/jewerly/earring';

        $this->addRecipe( 'Tateossian Earring', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Earring', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Moirai Earring', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Earring', $imagePath, 100000000, 'S-84', $categoryId );
    }

    protected function addJewerlyRing() {
        $categoryId = $this->jewerlyRingCategory->id;
        $imagePath  = 'item/jewerly/ring';

        $this->addRecipe( 'Tateossian Ring', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Dynasty Ring', $imagePath, 100000000, 'S', $categoryId );
        $this->addRecipe( 'Moirai Ring', $imagePath, 100000000, 'S-80', $categoryId );
        $this->addRecipe( 'Vesper Ring', $imagePath, 100000000, 'S-84', $categoryId );
    }

}
