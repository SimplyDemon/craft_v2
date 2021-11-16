<?php

namespace Database\Seeders\RecipeResource\Weapon;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use Database\Seeders\RecipeResource\RecipeResourceMain;

class Blunt extends RecipeResourceMain {
    protected function setCategory() {
        $this->category = Category::where( 'name', 'Blunt' )->firstOrFail();
    }

    protected function add() {
        $this->addHeavyWarAxe();
        $this->addHeavyWarAxe100();
        $this->addSpiritsStaff();
        $this->addSpiritsStaff100();
        $this->addSpellBreaker();
        $this->addSpellBreaker100();
        $this->addIceStormHammer();
        $this->addIceStormHammer100();
        $this->addDeadmansGlory();
        $this->addDeadmansGlory100();
        $this->addArtOfBattleAxe();
        $this->addArtOfBattleAxe100();
        $this->addStaffOfEvilSpirits();
        $this->addStaffOfEvilSpirits100();
        $this->addKaimVanulsBones();
        $this->addKaimVanulsBones100();
        $this->addStarBuster();
        $this->addStarBuster100();
        $this->addDasparionsStaff();
        $this->addMeteorShower();
        $this->addSpiritualEye();
        $this->addDestroyerHammer();
        $this->addElysian();
        $this->addBranchOfTheMotherTree();
        $this->addFlamingDragonSkull();
        $this->addDoomCrusher();
        $this->addBarakielsAxe();
        $this->addBehemothTuningFork();
        $this->addCabriosHand();
        $this->addDaimonCrystal();
        $this->addBasaltBattlehammer();
        $this->addImperialStaff();
        $this->addDragonHunterAxe();
        $this->addArcanaMace();
        $this->addDynastyCudgel();
        $this->addDynastyMace();
        $this->addDynastyStaff();
        $this->addDynastyCrusher();
        $this->addIcarusHammer();
        $this->addIcarusHall();
        $this->addVesperAvenger();
        $this->addVesperRetributer();
        $this->addVesperCaster();
        $this->addVesperSinger();
    }

    protected function addHeavyWarAxe() {
        $piece  = Resource::where( 'name', 'Heavy War Axe Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Heavy War Axe (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Heavy War Axe' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 325,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 80,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 80,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 62,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 12,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addHeavyWarAxe100() {
        $piece  = Resource::where( 'name', 'Heavy War Axe Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Heavy War Axe' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Heavy War Axe 100%' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 498,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 59,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 118,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 118,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 62,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 59,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 12,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addSpiritsStaff() {
        $piece  = Resource::where( 'name', 'Spirit\'s Staff Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Spirit\'s Staff (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Spirit\'s Staff' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 330,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->coarseBonePowder->id,
            'resourceQuantity' => 100,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->compoundBraid->id,
            'resourceQuantity' => 50,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->oriharukon->id,
            'resourceQuantity' => 50,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 62,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 50,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 12,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addSpiritsStaff100() {
        $piece  = Resource::where( 'name', 'Spirit\'s Staff Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Spirit\'s Staff' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Spirit\'s Staff 100%' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 491,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->coarseBonePowder->id,
            'resourceQuantity' => 150,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->compoundBraid->id,
            'resourceQuantity' => 75,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->oriharukon->id,
            'resourceQuantity' => 75,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 62,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 75,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 12,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addSpellBreaker() {
        $piece  = Resource::where( 'name', 'Spell Breaker Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Spell Breaker (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Spell Breaker' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 325,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 80,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 80,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 62,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 12,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addSpellBreaker100() {
        $piece  = Resource::where( 'name', 'Spell Breaker Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Spell Breaker' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Spell Breaker 100%' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 498,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 59,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 118,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 118,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 62,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 59,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 12,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addIceStormHammer() {
        $piece  = Resource::where( 'name', 'Ice Storm Hammer Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Ice Storm Hammer (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Ice Storm Hammer' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 360,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 25,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 50,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 100,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 62,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 25,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 12,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addIceStormHammer100() {
        $piece  = Resource::where( 'name', 'Ice Storm Hammer Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Ice Storm Hammer' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Ice Storm Hammer 100%' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 353,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 80,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 160,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 62,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 12,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addDeadmansGlory() {
        $piece  = Resource::where( 'name', 'Deadman\'s Glory Stone' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Deadman\'s Glory (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Deadman\'s Glory' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 165,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 60,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 120,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 120,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 98,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 60,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addDeadmansGlory100() {
        $piece  = Resource::where( 'name', 'Deadman\'s Glory Stone' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Deadman\'s Glory' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Deadman\'s Glory 100%' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 339,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 86,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 172,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 172,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 98,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 86,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addArtOfBattleAxe() {
        $piece  = Resource::where( 'name', 'Art of Battle Axe Blade' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Art of Battle Axe (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Art of Battle Axe' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 165,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 60,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 120,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 120,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 98,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 60,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addArtOfBattleAxe100() {
        $piece  = Resource::where( 'name', 'Art of Battle Axe Blade' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Art of Battle Axe' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Art of Battle Axe 100%' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 339,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 86,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 172,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 172,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 98,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 86,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addStaffOfEvilSpirits() {
        $piece  = Resource::where( 'name', 'Staff of Evil Spirits Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Staff of Evil Spirits (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Staff of Evil Spirits' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 165,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->coarseBonePowder->id,
            'resourceQuantity' => 150,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->compoundBraid->id,
            'resourceQuantity' => 75,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->oriharukon->id,
            'resourceQuantity' => 75,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 98,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 75,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addStaffOfEvilSpirits100() {
        $piece  = Resource::where( 'name', 'Spirit\'s Staff Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Staff of Evil Spirits' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Staff of Evil Spirits 100%' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 342,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->coarseBonePowder->id,
            'resourceQuantity' => 216,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->compoundBraid->id,
            'resourceQuantity' => 108,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->oriharukon->id,
            'resourceQuantity' => 108,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 98,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 108,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addKaimVanulsBones() {
        $piece  = Resource::where( 'name', 'Kaim Vanul\'s Bones Vanul' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Kaim Vanul\'s Bones (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Kaim Vanul\'s Bones' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 165,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 60,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 120,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 120,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 98,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 60,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addKaimVanulsBones100() {
        $piece  = Resource::where( 'name', 'Kaim Vanul\'s Bones Vanul' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Kaim Vanul\'s Bones' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Kaim Vanul\'s Bones 100%' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 339,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 86,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 172,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 172,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 98,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 86,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addStarBuster() {
        $piece  = Resource::where( 'name', 'Star Buster Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Star Buster (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Star Buster' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 168,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 80,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 160,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 98,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addStarBuster100() {
        $piece  = Resource::where( 'name', 'Star Buster Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Star Buster' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Star Buster 100%' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 291,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 58,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 116,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 232,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 98,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 58,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addDasparionsStaff() {
        $piece  = Resource::where( 'name', 'Dasparion\'s Staff Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dasparion\'s Staff (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dasparion\'s Staff' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 216,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->coarseBonePowder->id,
            'resourceQuantity' => 94,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->compoundBraid->id,
            'resourceQuantity' => 47,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->oriharukon->id,
            'resourceQuantity' => 47,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 143,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 47,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 94,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addMeteorShower() {
        $piece  = Resource::where( 'name', 'Meteor Shower Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Meteor Shower (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Meteor Shower' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 215,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 30,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 60,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 60,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 143,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 30,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 120,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addSpiritualEye() {
        $piece  = Resource::where( 'name', 'Spiritual Eye Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Spiritual Eye (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Spiritual Eye' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 215,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 30,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 60,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 60,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 143,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 30,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 120,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addDestroyerHammer() {
        $piece  = Resource::where( 'name', 'Destroyer Hammer Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Destroyer Hammer (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Destroyer Hammer' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 222,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 21,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 42,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 84,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 143,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 21,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 84,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addElysian() {
        $piece  = Resource::where( 'name', 'Elysian Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Elysian (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Elysian' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalA->id,
            'resourceQuantity' => 194,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 49,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 98,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 98,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneA->id,
            'resourceQuantity' => 74,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 49,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 196,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 14,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addBranchOfTheMotherTree() {
        $piece  = Resource::where( 'name', 'Branch of the Mother Tree Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Branch of the Mother Tree (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Branch of the Mother Tree' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalA->id,
            'resourceQuantity' => 193,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->coarseBonePowder->id,
            'resourceQuantity' => 154,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->compoundBraid->id,
            'resourceQuantity' => 77,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->oriharukon->id,
            'resourceQuantity' => 77,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneA->id,
            'resourceQuantity' => 74,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 77,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 154,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 14,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addFlamingDragonSkull() {
        $piece  = Resource::where( 'name', 'Flaming Dragon Skull Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Flaming Dragon Skull (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Flaming Dragon Skull' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalA->id,
            'resourceQuantity' => 194,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 49,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 98,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 98,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneA->id,
            'resourceQuantity' => 74,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 49,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 196,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 14,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addDoomCrusher() {
        $piece  = Resource::where( 'name', 'Doom Crusher Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Doom Crusher (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Doom Crusher' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalA->id,
            'resourceQuantity' => 193,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 37,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 74,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 148,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneA->id,
            'resourceQuantity' => 74,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 37,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 148,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 14,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addBarakielsAxe() {
        $piece  = Resource::where( 'name', 'Barakiel\'s Axe Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Barakiel\'s Axe (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Barakiel\'s Axe' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalA->id,
            'resourceQuantity' => 254,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 68,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 136,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 136,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneA->id,
            'resourceQuantity' => 100,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 68,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 272,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 15,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addBehemothTuningFork() {
        $piece  = Resource::where( 'name', 'Behemoth\' Tuning Fork Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Behemoth\' Tuning Fork (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Behemoth\' Tuning Fork' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalA->id,
            'resourceQuantity' => 254,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 52,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 104,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 208,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneA->id,
            'resourceQuantity' => 100,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 52,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 208,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 15,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addCabriosHand() {
        $piece  = Resource::where( 'name', 'Cabrio\'s Hand Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Cabrio\'s Hand (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Cabrio\'s Hand' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalA->id,
            'resourceQuantity' => 254,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->coarseBonePowder->id,
            'resourceQuantity' => 212,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->compoundBraid->id,
            'resourceQuantity' => 106,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->oriharukon->id,
            'resourceQuantity' => 106,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneA->id,
            'resourceQuantity' => 100,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 106,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 212,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 15,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addDaimonCrystal() {
        $piece  = Resource::where( 'name', 'Daimon Crystal Fragment' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Daimon Crystal (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Daimon Crystal' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalA->id,
            'resourceQuantity' => 254,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->coarseBonePowder->id,
            'resourceQuantity' => 212,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->compoundBraid->id,
            'resourceQuantity' => 106,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->oriharukon->id,
            'resourceQuantity' => 106,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneA->id,
            'resourceQuantity' => 100,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 106,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 212,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroHolder->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 15,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addBasaltBattlehammer() {
        $piece  = Resource::where( 'name', 'Basalt Battlehammer Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Basalt Battlehammer (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Basalt Battlehammer' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 211,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 77,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 154,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 154,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 43,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 77,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 308,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 17,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addImperialStaff() {
        $piece  = Resource::where( 'name', 'Imperial Staff Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Imperial Staff (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Imperial Staff' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 210,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->coarseBonePowder->id,
            'resourceQuantity' => 242,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->compoundBraid->id,
            'resourceQuantity' => 121,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->oriharukon->id,
            'resourceQuantity' => 121,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 43,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 121,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 242,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 17,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addDragonHunterAxe() {
        $piece  = Resource::where( 'name', 'Dragon Hunter Axe Blade' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dragon Hunter Axe (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dragon Hunter Axe' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 214,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 62,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 124,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 248,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 43,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 62,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 248,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 17,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addArcanaMace() {
        $piece  = Resource::where( 'name', 'Arcana Mace Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Arcana Mace (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Arcana Mace' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 211,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 77,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 154,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 154,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 43,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 77,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 308,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 17,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addDynastyCudgel() {
        $piece  = Resource::where( 'name', 'Dynasty Cudgel Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dynasty Cudgel (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dynasty Cudgel' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 349,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 122,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 244,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 244,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 69,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 122,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 488,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 61,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 18,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addDynastyMace() {
        $piece  = Resource::where( 'name', 'Dynasty Mace Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dynasty Mace (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dynasty Mace' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 349,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 122,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 244,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 244,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 69,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 122,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 488,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 61,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 18,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addDynastyStaff() {
        $piece  = Resource::where( 'name', 'Dynasty Staff Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dynasty Staff (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dynasty Staff' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 342,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->coarseBonePowder->id,
            'resourceQuantity' => 356,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->compoundBraid->id,
            'resourceQuantity' => 178,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->oriharukon->id,
            'resourceQuantity' => 178,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 69,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 178,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 356,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 89,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 18,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addDynastyCrusher() {
        $piece  = Resource::where( 'name', 'Dynasty Crusher Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dynasty Crusher (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dynasty Crusher' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 358,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 102,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 204,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 408,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 69,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 102,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 408,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 51,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 18,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addIcarusHammer() {
        $piece  = Resource::where( 'name', 'Icarus Hammer Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Icarus Hammer (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Icarus Hammer' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 400,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 196,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 392,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 392,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 99,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 196,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 784,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 98,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 18,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addIcarusHall() {
        $piece  = Resource::where( 'name', 'Icarus Hall Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Icarus Hall (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Icarus Hall' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 400,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 196,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 392,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 392,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 99,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 196,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 784,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 98,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 18,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addVesperAvenger() {
        $piece  = Resource::where( 'name', 'Vesper Avenger Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Vesper Avenger (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Vesper Avenger' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 621,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 238,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 476,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 476,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 108,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 238,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 952,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 119,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 19,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addVesperRetributer() {
        $piece  = Resource::where( 'name', 'Vesper Retributer Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Vesper Retributer (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Vesper Retributer' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 619,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 200,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 400,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 800,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 108,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 200,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 800,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 100,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 19,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addVesperCaster() {
        $piece  = Resource::where( 'name', 'Vesper Caster Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Vesper Caster (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Vesper Caster' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 621,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 238,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 476,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 476,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 108,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 238,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 952,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 119,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 19,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addVesperSinger() {
        $piece  = Resource::where( 'name', 'Vesper Singer Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Vesper Singer (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Vesper Singer' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 622,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->coarseBonePowder->id,
            'resourceQuantity' => 680,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->compoundBraid->id,
            'resourceQuantity' => 340,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->oriharukon->id,
            'resourceQuantity' => 340,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 108,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 340,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 680,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 170,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 19,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

}
