<?php

namespace Database\Seeders\RecipeResource\Armor\Light;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use Database\Seeders\RecipeResource\RecipeResourceMain;

class Lower extends RecipeResourceMain {
    protected function setCategory() {
        $armorCategory      = Category::where( 'name', 'Armor' )->firstOrFail();
        $armorLightCategory = Category::where( 'name', 'Light' )->where( 'category_id', $armorCategory->id )->firstOrFail();
        $this->category     = Category::where( 'name', 'Lower' )->where( 'category_id', $armorLightCategory->id )->firstOrFail();
    }

    protected function add() {
        $this->addDynastyLeatherLeggings();
        $this->addMoiraiLeatherLeggings();
        $this->addVesperLeatherLeggings();
    }

    protected function addDynastyLeatherLeggings() {
        $piece  = Resource::where( 'name', 'Dynasty Leather Leggings Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dynasty Leather Leggings (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dynasty Leather Leggings' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 290,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->metallicFiber->id,
            'resourceQuantity' => 174,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 58,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->reorinsMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->orichalcum->id,
            'resourceQuantity' => 29,
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

    protected function addMoiraiLeatherLeggings() {
        $piece  = Resource::where( 'name', 'Moirai Leather Leggings Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Moirai Leather Leggings (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Moirai Leather Leggings' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 70,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 330,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->metallicFiber->id,
            'resourceQuantity' => 198,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 12,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 66,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->reorinsMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->orichalcum->id,
            'resourceQuantity' => 33,
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

    protected function addVesperLeatherLeggings() {
        $piece  = Resource::where( 'name', 'Vesper Leather Leggings Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Vesper Leather Leggings (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Vesper Leather Leggings' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 96,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 470,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->metallicFiber->id,
            'resourceQuantity' => 282,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 16,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 94,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->reorinsMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->orichalcum->id,
            'resourceQuantity' => 47,
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
