<?php

namespace Database\Seeders\RecipeResource\Armor\Robe;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use Database\Seeders\RecipeResource\RecipeResourceMain;

class FullBody extends RecipeResourceMain {
    protected function setCategory() {
        $armorCategory     = Category::where( 'name', 'Armor' )->firstOrFail();
        $armorRobeCategory = Category::where( 'name', 'Robe' )->where( 'category_id', $armorCategory->id )->firstOrFail();
        $this->category    = Category::where( 'name', 'Full body' )->where( 'category_id', $armorRobeCategory->id )->firstOrFail();
    }

    protected function add() {
        $this->addMajorArcanaRobe();
    }

    protected function addMajorArcanaRobe() {
        $piece  = Resource::where( 'name', 'Major Arcana Robe Part' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Major Arcana Robe (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Major Arcana Robe' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 75,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->compoundBraid->id,
            'resourceQuantity' => 84,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 336,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->metallicFiber->id,
            'resourceQuantity' => 168,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 14,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 84,
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


}
