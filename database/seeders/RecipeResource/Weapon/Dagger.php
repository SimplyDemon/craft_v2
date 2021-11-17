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
        $this->addKris();
        $this->addKris100();
        $this->addTwilightKnife();
        $this->addTwilightKnife100();
        $this->addDemonsDagger();
        $this->addDemonsDagger100();
        $this->addBloodyOrchid();
        $this->addSoulSeparator();
        $this->addNagaStorm();
        $this->addAngelSlayer();
        $this->addDynastyKnife();
        $this->addIcarusDisperser();
        $this->addVesperShaper();
    }

    protected function addKris() {
        $piece  = Resource::where( 'name', 'Kris Edge' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Kris (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Kris' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 360,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 72,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 72,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 62,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 36,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->artisansFrame->id,
            'resourceQuantity' => 2,
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

    protected function addKris100() {
        $piece  = Resource::where( 'name', 'Kris Edge' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Kris' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Kris 100%' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 517,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 114,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 114,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 62,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 57,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftsmanMold->id,
            'resourceQuantity' => 2,
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

    protected function addTwilightKnife() {
        $piece  = Resource::where( 'name', 'Hell Knife Edge' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Hell Knife (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Hell Knife' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 360,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 72,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 72,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 62,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 36,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->artisansFrame->id,
            'resourceQuantity' => 2,
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

    protected function addTwilightKnife100() {
        $piece  = Resource::where( 'name', 'Hell Knife Edge' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Hell Knife' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Hell Knife 100%' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 517,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 114,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 114,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 62,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 57,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftsmanMold->id,
            'resourceQuantity' => 2,
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

    protected function addDemonsDagger() {
        $piece  = Resource::where( 'name', 'Demon\'s Dagger Edge' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Demon\'s Dagger (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Demon\'s Dagger' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 160,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 120,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 120,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 98,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 60,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->artisansFrame->id,
            'resourceQuantity' => 2,
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

    protected function addDemonsDagger100() {
        $piece  = Resource::where( 'name', 'Demon\'s Dagger Edge' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Demon\'s Dagger' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Demon\'s Dagger 100%' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 341,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 172,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 172,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 98,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 86,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftsmanMold->id,
            'resourceQuantity' => 2,
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

    protected function addBloodyOrchid() {
        $piece  = Resource::where( 'name', 'Bloody Orchid Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Bloody Orchid (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Bloody Orchid' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 193,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 82,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 82,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 143,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 41,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 41,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftsmanMold->id,
            'resourceQuantity' => 3,
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

    protected function addSoulSeparator() {
        $piece  = Resource::where( 'name', 'Soul Separator Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Soul Separator (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Soul Separator' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalA->id,
            'resourceQuantity' => 161,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 156,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 156,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneA->id,
            'resourceQuantity' => 74,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 78,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 78,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftsmanMold->id,
            'resourceQuantity' => 3,
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

    protected function addNagaStorm() {
        $piece  = Resource::where( 'name', 'Naga Storm Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Naga Storm (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Naga Storm' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalA->id,
            'resourceQuantity' => 254,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 204,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 204,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneA->id,
            'resourceQuantity' => 100,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 102,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 102,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftsmanMold->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 15,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
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
