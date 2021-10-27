<?php

namespace Database\Seeders\RecipeResource\Weapon;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use Database\Seeders\RecipeResource\RecipeResourceMain;

class Blunt extends RecipeResourceMain {
    protected function setCategory() {
        $this->category = Category::where( 'name', 'Blunt' )->firstOrFail();
    }

    protected function add() {
        $this->addBasaltBattlehammerd();
        $this->addImperialStaff();
        $this->addDragonHunterAxe();
        $this->addArcanaMace();
        $this->addDynastyCudgel();
        $this->addDynastyMace();
        $this->addDynastyStaff();
        $this->addDynastyCrusher();
        $this->addIcarusHammer();
        $this->addIcarusHall();
        $this->addVesperAvenger();
        $this->addVesperRetributer();
        $this->addVesperCaster();
        $this->addVesperSinger();
    }

    protected function addBasaltBattlehammerd() {
        $piece  = Resource::where( 'name', 'Basalt Battlehammer Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Basalt Battlehammer (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Basalt Battlehammer' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 211,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 77,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 154,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 154,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 43,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 77,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 308,
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

    protected function addImperialStaff() {
        $piece  = Resource::where( 'name', 'Imperial Staff Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Imperial Staff (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Imperial Staff' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 210,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->coarseBonePowder->id,
            'resourceQuantity' => 242,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->compoundBraid->id,
            'resourceQuantity' => 121,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->oriharukon->id,
            'resourceQuantity' => 121,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 43,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 121,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 242,
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

    protected function addDragonHunterAxe() {
        $piece  = Resource::where( 'name', 'Dragon Hunter Axe Blade' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dragon Hunter Axe (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dragon Hunter Axe' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 214,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 62,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 124,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 248,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 43,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 62,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 248,
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

    protected function addArcanaMace() {
        $piece  = Resource::where( 'name', 'Arcana Mace Head' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Arcana Mace (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Arcana Mace' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 211,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 77,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 154,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 154,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 43,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 77,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 308,
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

    protected function addDynastyCudgel() {
        $piece  = Resource::where( 'name', 'Dynasty Cudgel Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dynasty Cudgel (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dynasty Cudgel' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 349,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 122,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 244,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 244,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 69,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 122,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 488,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 61,
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

    protected function addDynastyMace() {
        $piece  = Resource::where( 'name', 'Dynasty Mace Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dynasty Mace (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dynasty Mace' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 349,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 122,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 244,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 244,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 69,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 122,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 488,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 61,
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

    protected function addDynastyStaff() {
        $piece  = Resource::where( 'name', 'Dynasty Staff Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dynasty Staff (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dynasty Staff' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 342,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->coarseBonePowder->id,
            'resourceQuantity' => 356,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->compoundBraid->id,
            'resourceQuantity' => 178,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->oriharukon->id,
            'resourceQuantity' => 178,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 69,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 178,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 356,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 89,
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

    protected function addDynastyCrusher() {
        $piece  = Resource::where( 'name', 'Dynasty Crusher Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dynasty Crusher (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dynasty Crusher' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 358,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 102,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 204,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 408,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 69,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 102,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 408,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 51,
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

    protected function addIcarusHammer() {
        $piece  = Resource::where( 'name', 'Icarus Hammer Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Icarus Hammer (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Icarus Hammer' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 400,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 196,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 392,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 392,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 99,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 196,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 784,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 98,
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

    protected function addIcarusHall() {
        $piece  = Resource::where( 'name', 'Icarus Hall Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Icarus Hall (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Icarus Hall' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 400,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 196,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 392,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 392,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 99,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 196,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 784,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 98,
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

    protected function addVesperAvenger() {
        $piece  = Resource::where( 'name', 'Vesper Avenger Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Vesper Avenger (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Vesper Avenger' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 621,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 238,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 476,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 476,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 108,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 238,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 952,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 119,
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

    protected function addVesperRetributer() {
        $piece  = Resource::where( 'name', 'Vesper Retributer Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Vesper Retributer (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Vesper Retributer' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 619,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 200,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 400,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 800,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 108,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 200,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 800,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 100,
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

    protected function addVesperCaster() {
        $piece  = Resource::where( 'name', 'Vesper Caster Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Vesper Caster (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Vesper Caster' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 621,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 238,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 476,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 476,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 108,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 238,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 952,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 119,
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

    protected function addVesperSinger() {
        $piece  = Resource::where( 'name', 'Vesper Singer Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Vesper Singer (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Vesper Singer' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 622,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->coarseBonePowder->id,
            'resourceQuantity' => 680,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->compoundBraid->id,
            'resourceQuantity' => 340,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->oriharukon->id,
            'resourceQuantity' => 340,
        ];

        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 108,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 340,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 680,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 170,
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
