<?php

namespace Database\Seeders\RecipeResource\Armor\Light;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use Database\Seeders\RecipeResource\RecipeResourceMain;

class Gloves extends RecipeResourceMain {
    protected function setCategory() {
        $armorCategory      = Category::where( 'name', 'Armor' )->firstOrFail();
        $armorLightCategory = Category::where( 'name', 'Light' )->where( 'category_id', $armorCategory->id )->firstOrFail();
        $this->category     = Category::where( 'name', 'Gloves' )->where( 'category_id', $armorLightCategory->id )->firstOrFail();
    }

    protected function add() {
        $this->addDraconicLeatherGloves();
        $this->addDynastyLeatherGloves();
        $this->addMoiraiLeatherGloves();
        $this->addVesperLeatherGloves();
    }

    protected function addDraconicLeatherGloves() {
        $piece  = Resource::where( 'name', 'Draconic Leather Gloves Fabric' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Draconic Leather Gloves (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Draconic Leather Gloves' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 16,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 36,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 60,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 12,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithMold->id,
            'resourceQuantity' => 1,
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

    protected function addDynastyLeatherGloves() {
        $piece  = Resource::where( 'name', 'Dynasty Leather Gloves Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dynasty Leather Gloves (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dynasty Leather Gloves' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 22,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 72,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 120,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 24,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->orichalcum->id,
            'resourceQuantity' => 12,
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

    protected function addMoiraiLeatherGloves() {
        $piece  = Resource::where( 'name', 'Moirai Leather Gloves Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Moirai Leather Gloves (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Moirai Leather Gloves' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 37,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 84,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 140,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 6,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 28,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->orichalcum->id,
            'resourceQuantity' => 14,
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

    protected function addVesperLeatherGloves() {
        $piece  = Resource::where( 'name', 'Vesper Leather Gloves Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Vesper Leather Gloves (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Vesper Leather Gloves' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 50,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 126,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 210,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 9,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 42,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->orichalcum->id,
            'resourceQuantity' => 21,
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
