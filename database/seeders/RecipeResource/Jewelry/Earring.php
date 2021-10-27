<?php

namespace Database\Seeders\RecipeResource\Jewelry;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use Database\Seeders\RecipeResource\RecipeResourceMain;

class Earring extends RecipeResourceMain {
    protected function setCategory() {
        $this->category = Category::where( 'name', 'Earring' )->firstOrFail();
    }

    protected function add() {
        $this->addTateossianEarring();
        $this->addDynastyEarring();
        $this->addMoiraiEarring();
        $this->addVesperEarring();
    }

    protected function addTateossianEarring() {
        $piece  = Resource::where( 'name', 'Tateossian Earring Part' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Tateossian Earring (70%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Tateossian Earring' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 18,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->varnishOfPurity->id,
            'resourceQuantity' => 63,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->metallicFiber->id,
            'resourceQuantity' => 105,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->thons->id,
            'resourceQuantity' => 21,
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

    protected function addDynastyEarring() {
        $piece  = Resource::where( 'name', 'Dynasty Earring Gemstone' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dynasty Earring (70%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dynasty Earring' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 21,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->varnishOfPurity->id,
            'resourceQuantity' => 60,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->metallicFiber->id,
            'resourceQuantity' => 100,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->thons->id,
            'resourceQuantity' => 20,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->leonard->id,
            'resourceQuantity' => 10,
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

    protected function addMoiraiEarring() {
        $piece  = Resource::where( 'name', 'Moirai Earring Gem' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Moirai Earring (70%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Moirai Earring' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 41,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->varnishOfPurity->id,
            'resourceQuantity' => 132,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->metallicFiber->id,
            'resourceQuantity' => 220,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 7,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->thons->id,
            'resourceQuantity' => 44,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->leonard->id,
            'resourceQuantity' => 22,
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

    protected function addVesperEarring() {
        $piece  = Resource::where( 'name', 'Vesper Earring Gem' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Vesper Earring (70%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Vesper Earring' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 57,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->varnishOfPurity->id,
            'resourceQuantity' => 192,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->metallicFiber->id,
            'resourceQuantity' => 320,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->thons->id,
            'resourceQuantity' => 64,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->leonard->id,
            'resourceQuantity' => 32,
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
