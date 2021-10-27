<?php

namespace Database\Seeders\RecipeResource\Armor\Heavy;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use Database\Seeders\RecipeResource\RecipeResourceMain;

class Lower extends RecipeResourceMain {
    protected function setCategory() {
        $armorCategory      = Category::where( 'name', 'Armor' )->firstOrFail();
        $armorHeavyCategory = Category::where( 'name', 'Heavy' )->where( 'category_id', $armorCategory->id )->firstOrFail();
        $this->category     = Category::where( 'name', 'Lower' )->where( 'category_id', $armorHeavyCategory->id )->firstOrFail();
    }

    protected function add() {
        $this->addImperialCrusaderGaiters();
        $this->addDynastyGaiters();
        $this->addMoiraiGaiters();
        $this->addVesperGaiters();
    }

    protected function addImperialCrusaderGaiters() {
        $piece  = Resource::where( 'name', 'Imperial Crusader Gaiters Pattern' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Imperial Crusader Gaiters (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Imperial Crusader Gaiters' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 37,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 72,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 6,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 48,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->arcsmithAnvil->id,
            'resourceQuantity' => 2,
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

    protected function addDynastyGaiters() {
        $piece  = Resource::where( 'name', 'Dynasty Gaiters Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dynasty Gaiters (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dynasty Gaiters' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 60,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 144,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 12,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 96,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->arcsmithAnvil->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->orichalcum->id,
            'resourceQuantity' => 24,
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

    protected function addMoiraiGaiters() {
        $piece  = Resource::where( 'name', 'Moirai Gaiters Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Moirai Gaiters (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Moirai Gaiters' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 92,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 180,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 16,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 120,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->arcsmithAnvil->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->orichalcum->id,
            'resourceQuantity' => 30,
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

    protected function addVesperGaiters() {
        $piece  = Resource::where( 'name', 'Vesper Gaiters Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Vesper Gaiters (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Vesper Gaiters' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 125,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 270,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 22,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 180,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->arcsmithAnvil->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->orichalcum->id,
            'resourceQuantity' => 45,
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
