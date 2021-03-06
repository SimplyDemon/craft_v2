<?php

namespace Database\Seeders\RecipeResource\Armor\Universal;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use Database\Seeders\RecipeResource\RecipeResourceMain;

class Gloves extends RecipeResourceMain {
    protected function setCategory() {
        $armorCategory          = Category::where( 'name', 'Armor' )->firstOrFail();
        $armorUniversalCategory = Category::where( 'name', 'Universal' )->where( 'category_id', $armorCategory->id )->firstOrFail();
        $this->category         = Category::where( 'name', 'Gloves' )->where( 'category_id', $armorUniversalCategory->id )->firstOrFail();
    }

    protected function add() {
        $this->addReinforcedMithrilGloves();
        $this->addChainGloves();
        $this->addKarmianGloves();
        $this->addPlatedLeatherGloves();
        $this->addRindLeatherGloves();
        $this->addMithrilGauntlets();
        $this->addDemonsGloves();
        $this->addThecaLeatherGloves();
        $this->addDrakeLeatherGloves();
        $this->addFullPlateGauntlets();
        $this->addDivineGloves();
        $this->addDoomGloves();
        $this->addDoomGloves100();
        $this->addZubeisGauntlets();
        $this->addZubeisGauntlets100();
        $this->addAvadonGloves();
        $this->addAvadonGloves100();
        $this->addBlueWolfGloves();
        $this->addBlueWolfGloves100();
        $this->addDarkCrystalGloves();
        $this->addTallumGloves();
        $this->addGauntletsOfNightmare();
        $this->addMajesticGauntlets();
    }

    protected function addReinforcedMithrilGloves() {
        $piece  = Resource::where( 'name', 'Reinforced Mithril Gloves Design' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Reinforced Mithril Gloves' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Reinforced Mithril Gloves' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalD->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addChainGloves() {
        $piece  = Resource::where( 'name', 'Chain Gloves Design' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Chain Gloves' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Chain Gloves' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalD->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addKarmianGloves() {
        $piece  = Resource::where( 'name', 'Karmian Gloves Fabric' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Karmian Gloves' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Karmian Gloves' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalD->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addPlatedLeatherGloves() {
        $piece  = Resource::where( 'name', 'Plated Leather Gloves Design' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Plated Leather Gloves' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Plated Leather Gloves' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 9,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addRindLeatherGloves() {
        $piece  = Resource::where( 'name', 'Rind Leather Gloves Design' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Rind Leather Gloves' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Rind Leather Gloves' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 12,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 9,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addMithrilGauntlets() {
        $piece  = Resource::where( 'name', 'Mithril Gauntlets Design' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Mithril Gauntlets' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Mithril Gauntlets' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 16,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 16,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 6,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addDemonsGloves() {
        $piece  = Resource::where( 'name', 'Demon\'s Gloves Fabric' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Demon\'s Gloves' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Demon\'s Gloves' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 16,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 16,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 6,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addThecaLeatherGloves() {
        $piece  = Resource::where( 'name', 'Theca Leather Gloves Texture' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Theca Leather Gloves' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Theca Leather Gloves' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 20,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 18,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 7,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addDrakeLeatherGloves() {
        $piece  = Resource::where( 'name', 'Drake Leather Gloves Design' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Drake Leather Gloves' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Drake Leather Gloves' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 24,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 24,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 11,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addFullPlateGauntlets() {
        $piece  = Resource::where( 'name', 'Full Plate Gauntlets Part' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Full Plate Gauntlets' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Full Plate Gauntlets' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 24,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 24,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 11,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addDivineGloves() {
        $piece  = Resource::where( 'name', 'Divine Gloves Pattern' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Divine Gloves' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Divine Gloves' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 24,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 24,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 11,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addDoomGloves() {
        $piece  = Resource::where( 'name', 'Doom Gloves Part' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Doom Gloves (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Doom Gloves' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 32,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
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

    protected function addDoomGloves100() {
        $piece  = Resource::where( 'name', 'Doom Gloves Part' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Doom Gloves' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Doom Gloves 100%' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 15,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 6,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 48,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 6,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroAnvilLock->id,
            'resourceQuantity' => 1,
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

    protected function addZubeisGauntlets() {
        $piece  = Resource::where( 'name', 'Zubei\'s Gauntlets Part' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Zubei\'s Gauntlets (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Zubei\'s Gauntlets' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 25,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 16,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 2,
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

    protected function addZubeisGauntlets100() {
        $piece  = Resource::where( 'name', 'Zubei\'s Gauntlets Part' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Zubei\'s Gauntlets' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Zubei\'s Gauntlets 100%' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 33,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 24,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroAnvilLock->id,
            'resourceQuantity' => 1,
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

    protected function addAvadonGloves() {
        $piece  = Resource::where( 'name', 'Avadon Gloves Part' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Avadon Gloves (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Avadon Gloves' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 25,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 16,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 2,
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

    protected function addAvadonGloves100() {
        $piece  = Resource::where( 'name', 'Avadon Gloves Part' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Avadon Gloves' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Avadon Gloves 100%' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 33,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 24,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroAnvilLock->id,
            'resourceQuantity' => 1,
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

    protected function addBlueWolfGloves() {
        $piece  = Resource::where( 'name', 'Blue Wolf Gloves Fabric' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Blue Wolf Gloves (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Blue Wolf Gloves' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 32,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
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

    protected function addBlueWolfGloves100() {
        $piece  = Resource::where( 'name', 'Blue Wolf Gloves Fabric' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Blue Wolf Gloves' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Blue Wolf Gloves 100%' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 15,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 6,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 48,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 6,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroAnvilLock->id,
            'resourceQuantity' => 1,
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

    protected function addDarkCrystalGloves() {
        $piece  = Resource::where( 'name', 'Dark Crystal Gloves Design' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dark Crystal Gloves (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dark Crystal Gloves' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 15,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 25,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 21,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 5,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroAnvilLock->id,
            'resourceQuantity' => 1,
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

    protected function addTallumGloves() {
        $piece  = Resource::where( 'name', 'Tallum Gloves Design' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Tallum Gloves (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Tallum Gloves' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 15,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 25,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 21,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 5,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroAnvilLock->id,
            'resourceQuantity' => 1,
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

    protected function addGauntletsOfNightmare() {
        $piece  = Resource::where( 'name', 'Gauntlets of Nightmare Design' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Gauntlets of Nightmare (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Gauntlets of Nightmare' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalA->id,
            'resourceQuantity' => 11,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 24,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneA->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroAnvilLock->id,
            'resourceQuantity' => 1,
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

    protected function addMajesticGauntlets() {
        $piece  = Resource::where( 'name', 'Majestic Gauntlets Design' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Majestic Gauntlets (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Majestic Gauntlets' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalA->id,
            'resourceQuantity' => 11,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 24,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneA->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroAnvilLock->id,
            'resourceQuantity' => 1,
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


}
