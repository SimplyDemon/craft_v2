<?php

namespace Database\Seeders\RecipeResource\Jewelry;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use Database\Seeders\RecipeResource\RecipeResourceMain;

class Ring extends RecipeResourceMain {
    protected function setCategory() {
        $this->category = Category::where( 'name', 'Ring' )->firstOrFail();
    }

    protected function add() {
        $this->addTateossianRing();
        $this->addDynastyRing();
        $this->addMoiraiRing();
        $this->addVesperRing();
    }

    protected function addTateossianRing() {
        $piece  = Resource::where( 'name', 'Tateossian Ring Gem' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Tateossian Ring (70%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Tateossian Ring' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 12,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->varnishOfPurity->id,
            'resourceQuantity' => 51,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->metallicFiber->id,
            'resourceQuantity' => 85,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->thons->id,
            'resourceQuantity' => 17,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroMold->id,
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

    protected function addDynastyRing() {
        $piece  = Resource::where( 'name', 'Dynasty Ring Gemstone' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dynasty Ring (70%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dynasty Ring' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->varnishOfPurity->id,
            'resourceQuantity' => 48,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->metallicFiber->id,
            'resourceQuantity' => 80,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->thons->id,
            'resourceQuantity' => 16,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->leonard->id,
            'resourceQuantity' => 8,
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

    protected function addMoiraiRing() {
        $piece  = Resource::where( 'name', 'Moirai Ring Gem' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Moirai Ring (70%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Moirai Ring' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 26,
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
            'resourceQuantity' => 5,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->thons->id,
            'resourceQuantity' => 32,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroMold->id,
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

    protected function addVesperRing() {
        $piece  = Resource::where( 'name', 'Vesper Ring Gem' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Vesper Ring (70%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Vesper Ring' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 40,
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
            'resourceId'       => $this->ResourceHelper->maestroMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->leonard->id,
            'resourceQuantity' => 22,
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
