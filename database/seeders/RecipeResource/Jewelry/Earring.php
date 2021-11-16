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
        $this->addAdamantiteEarring();
        $this->addAdamantiteEarring100();
        $this->addBlackOreEarring();
        $this->addBlackOreEarring100();
        $this->addPhoenixEarring();
        $this->addMajesticEarring();
        $this->addTateossianEarring();
        $this->addDynastyEarring();
        $this->addMoiraiEarring();
        $this->addVesperEarring();
    }

    protected function addAdamantiteEarring() {
        $piece  = Resource::where( 'name', 'Adamantite Earring Gemstone' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Adamantite Earring (70%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Adamantite Earring' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 28,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->varnishOfPurity->id,
            'resourceQuantity' => 6,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->blacksmithFrame->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->metallicFiber->id,
            'resourceQuantity' => 30,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->thons->id,
            'resourceQuantity' => 6,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 12,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addAdamantiteEarring100() {
        $piece  = Resource::where( 'name', 'Adamantite Earring Gemstone' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Adamantite Earring' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Adamantite Earring 100%' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 35,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->varnishOfPurity->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->metallicFiber->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->thons->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 12,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addBlackOreEarring() {
        $piece  = Resource::where( 'name', 'Black Ore Earring Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Black Ore Earring (70%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Black Ore Earring' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 16,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->varnishOfPurity->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->blacksmithFrame->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->metallicFiber->id,
            'resourceQuantity' => 50,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 6,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->thons->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addBlackOreEarring100() {
        $piece  = Resource::where( 'name', 'Black Ore Earring Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Black Ore Earring' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Black Ore Earring 100%' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 25,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->varnishOfPurity->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->metallicFiber->id,
            'resourceQuantity' => 65,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 6,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->thons->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addPhoenixEarring() {
        $piece  = Resource::where( 'name', 'Phoenix Earring Gemstone' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Phoenix Earring (70%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Phoenix Earring' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 18,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->varnishOfPurity->id,
            'resourceQuantity' => 21,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->metallicFiber->id,
            'resourceQuantity' => 35,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 29,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->thons->id,
            'resourceQuantity' => 7,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addMajesticEarring() {
        $piece  = Resource::where( 'name', 'Majestic Earring Gemstone' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Majestic Earring (70%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Majestic Earring' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 15,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->varnishOfPurity->id,
            'resourceQuantity' => 39,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->maestroMold->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->metallicFiber->id,
            'resourceQuantity' => 65,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneA->id,
            'resourceQuantity' => 5,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->thons->id,
            'resourceQuantity' => 13,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 14,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
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
