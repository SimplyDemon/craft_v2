<?php

namespace Database\Seeders\RecipeResource\Armor\Heavy;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use Database\Seeders\RecipeResource\RecipeResourceMain;

class Upper extends RecipeResourceMain {
    protected function setCategory() {
        $armorCategory      = Category::where( 'name', 'Armor' )->firstOrFail();
        $armorHeavyCategory = Category::where( 'name', 'Heavy' )->where( 'category_id', $armorCategory->id )->firstOrFail();
        $this->category     = Category::where( 'name', 'Upper' )->where( 'category_id', $armorHeavyCategory->id )->firstOrFail();
    }

    protected function add() {
        $this->addImperialCrusaderBreastplate();
        $this->addDynastyBreastplate();
        $this->addMoiraiBreastplate();
        $this->addVesperBreastplate();
    }

    protected function addImperialCrusaderBreastplate() {
        $piece  = Resource::where( 'name', 'Imperial Crusader Breastplate Part' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Imperial Crusader Breastplate (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Imperial Crusader Breastplate' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 62,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 117,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 11,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 78,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->arcsmithAnvil->id,
            'resourceQuantity' => 3,
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

    protected function addDynastyBreastplate() {
        $piece  = Resource::where( 'name', 'Dynasty Breastplate Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dynasty Breastplate (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dynasty Breastplate' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 98,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 234,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 20,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 156,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->arcsmithAnvil->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->orichalcum->id,
            'resourceQuantity' => 39,
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

    protected function addMoiraiBreastplate() {
        $piece  = Resource::where( 'name', 'Moirai Breastplate Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Moirai Breastplate (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Moirai Breastplate' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 145,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 294,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 25,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 196,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->arcsmithAnvil->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->orichalcum->id,
            'resourceQuantity' => 49,
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

    protected function addVesperBreastplate() {
        $piece  = Resource::where( 'name', 'Vesper Breastplate Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Vesper Breastplate (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Vesper Breastplate' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 201,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 435,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 35,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 290,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->arcsmithAnvil->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->orichalcum->id,
            'resourceQuantity' => 73,
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
