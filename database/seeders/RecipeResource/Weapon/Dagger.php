<?php

namespace Database\Seeders\RecipeResource\Weapon;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use Database\Seeders\RecipeResource\RecipeResourceMain;

class Dagger extends RecipeResourceMain {
    protected function setCategory() {
        $this->category = Category::where( 'name', 'Dagger' )->firstOrFail();
    }

    protected function add() {
        $this->addAngelSlayer();
        $this->addDynastyKnife();
        $this->addIcarusDisperser();
        $this->addVesperShaper();

    }

    protected function addAngelSlayer() {
        $piece  = Resource::where( 'name', 'Angel Slayer Blade' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Angel Slayer (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Angel Slayer' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 211,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 264,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 264,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 43,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 132,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 132,
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

    protected function addDynastyKnife() {
        $piece       = Resource::where( 'name', 'Dynasty Knife Piece' )->firstOrFail();
        $recipe      = Resource::where( 'name', 'Recipe: Dynasty Knife (60%)' )->firstOrFail();
        $item        = Recipe::where( 'name', 'Dynasty Knife' )->firstOrFail();
        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 350,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 376,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 376,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 69,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 188,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 188,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 94,
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

    protected function addIcarusDisperser() {
        $piece       = Resource::where( 'name', 'Icarus Disperser Piece' )->firstOrFail();
        $recipe      = Resource::where( 'name', 'Recipe: Icarus Disperser (60%)' )->firstOrFail();
        $item        = Recipe::where( 'name', 'Icarus Disperser' )->firstOrFail();
        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 400,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 600,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 600,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 99,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 300,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 300,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 150,
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

    protected function addVesperShaper() {
        $piece       = Resource::where( 'name', 'Vesper Shaper Piece' )->firstOrFail();
        $recipe      = Resource::where( 'name', 'Recipe: Vesper Shaper (60%)' )->firstOrFail();
        $item        = Recipe::where( 'name', 'Vesper Shaper' )->firstOrFail();
        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 621,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 728,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 728,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 108,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 364,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 364,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 182,
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
