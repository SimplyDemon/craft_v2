<?php

namespace Database\Seeders\RecipeResource\Jewelry;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use Database\Seeders\RecipeResource\RecipeResourceMain;

class Necklace extends RecipeResourceMain {
    protected function setCategory() {
        $this->category = Category::where( 'name', 'Necklace' )->firstOrFail();
    }

    protected function add() {
        $this->addTateossianNecklace();
        $this->addDynastyNecklace();
        $this->addMoiraiNecklace();
        $this->addVesperNecklace();
    }

    protected function addTateossianNecklace() {
        $piece  = Resource::where( 'name', 'Tateossian Necklace Chain' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Tateossian Necklace (70%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Tateossian Necklace' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 24,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->varnishOfPurity->id,
            'resourceQuantity' => 96,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->metallicFiber->id,
            'resourceQuantity' => 160,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->thons->id,
            'resourceQuantity' => 32,
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

    protected function addDynastyNecklace() {
        $piece  = Resource::where( 'name', 'Dynasty Necklace Gemstone' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dynasty Necklace (70%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dynasty Necklace' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 23,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->varnishOfPurity->id,
            'resourceQuantity' => 96,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->metallicFiber->id,
            'resourceQuantity' => 160,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->thons->id,
            'resourceQuantity' => 32,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->leonard->id,
            'resourceQuantity' => 16,
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

    protected function addMoiraiNecklace() {
        $piece  = Resource::where( 'name', 'Moirai Necklace Gem' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Moirai Necklace (70%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Moirai Necklace' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 53,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->varnishOfPurity->id,
            'resourceQuantity' => 186,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->metallicFiber->id,
            'resourceQuantity' => 310,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->thons->id,
            'resourceQuantity' => 62,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->leonard->id,
            'resourceQuantity' => 31,
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

    protected function addVesperNecklace() {
        $piece  = Resource::where( 'name', 'Vesper Necklace Gem' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Vesper Necklace (70%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Vesper Necklace' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 76,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->varnishOfPurity->id,
            'resourceQuantity' => 264,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->metallicFiber->id,
            'resourceQuantity' => 440,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->thons->id,
            'resourceQuantity' => 88,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->leonard->id,
            'resourceQuantity' => 44,
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
