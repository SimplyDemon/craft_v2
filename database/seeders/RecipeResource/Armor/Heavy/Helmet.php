<?php

namespace Database\Seeders\RecipeResource\Armor\Heavy;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use Database\Seeders\RecipeResource\RecipeResourceMain;

class Helmet extends RecipeResourceMain {
    protected function setCategory() {
        $armorCategory      = Category::where( 'name', 'Armor' )->firstOrFail();
        $armorHeavyCategory = Category::where( 'name', 'Heavy' )->where( 'category_id', $armorCategory->id )->firstOrFail();
        $this->category     = Category::where( 'name', 'Helmet' )->where( 'category_id', $armorHeavyCategory->id )->firstOrFail();
    }

    protected function add() {
        $this->addImperialCrusaderHelmet();
        $this->addDynastyHelmet();
        $this->addMoiraiHelmet();
        $this->addVesperHelmet();
    }

    protected function addImperialCrusaderHelmet() {
        $piece  = Resource::where( 'name', 'Imperial Crusader Helmet Pattern' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Imperial Crusader Helmet (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Imperial Crusader Helmet' )->firstOrFail();

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

    protected function addDynastyHelmet() {
        $piece  = Resource::where( 'name', 'Dynasty Helmet Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dynasty Helmet (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dynasty Helmet' )->firstOrFail();

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

    protected function addMoiraiHelmet() {
        $piece  = Resource::where( 'name', 'Moirai Helmet Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Moirai Helmet (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Moirai Helmet' )->firstOrFail();

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

    protected function addVesperHelmet() {
        $piece  = Resource::where( 'name', 'Vesper Helmet Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Vesper Helmet (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Vesper Helmet' )->firstOrFail();

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
