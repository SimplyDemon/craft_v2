<?php

namespace Database\Seeders\RecipeResource\Armor\Robe;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use Database\Seeders\RecipeResource\RecipeResourceMain;

class Helmet extends RecipeResourceMain {
    protected function setCategory() {
        $armorCategory     = Category::where( 'name', 'Armor' )->firstOrFail();
        $armorRobeCategory = Category::where( 'name', 'Robe' )->where( 'category_id', $armorCategory->id )->firstOrFail();
        $this->category    = Category::where( 'name', 'Helmet' )->where( 'category_id', $armorRobeCategory->id )->firstOrFail();
    }

    protected function add() {
        $this->addMajorArcanaCirclet();
        $this->addDynastyCirclet();
        $this->addMoiraiCirclet();
        $this->addVesperCirclet();
    }

    protected function addMajorArcanaCirclet() {
        $piece  = Resource::where( 'name', 'Major Arcana Circlet Pattern' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Major Arcana Circlet (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Major Arcana Circlet' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 25,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 170,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 17,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->reorinsMold->id,
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

    protected function addDynastyCirclet() {
        $piece  = Resource::where( 'name', 'Dynasty Circlet Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dynasty Circlet (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dynasty Circlet' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 35,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 300,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 7,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 30,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->reorinsMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->orichalcum->id,
            'resourceQuantity' => 15,
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

    protected function addMoiraiCirclet() {
        $piece  = Resource::where( 'name', 'Moirai Circlet Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Moirai Circlet (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Moirai Circlet' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 54,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 360,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 9,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 36,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->reorinsMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->orichalcum->id,
            'resourceQuantity' => 18,
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

    protected function addVesperCirclet() {
        $piece  = Resource::where( 'name', 'Vesper Circlet Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Vesper Circlet (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Vesper Circlet' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 76,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 510,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 51,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->reorinsMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->orichalcum->id,
            'resourceQuantity' => 26,
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
