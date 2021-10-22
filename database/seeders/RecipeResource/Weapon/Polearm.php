<?php

namespace Database\Seeders\RecipeResource\Weapon;

use App\Helpers\ResourceHelper;
use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use Illuminate\Database\Seeder;

class Polearm extends Seeder {
    protected Category $category;
    protected ResourceHelper $ResourceHelper;

    public function seed() {
        $this->ResourceHelper = new ResourceHelper();
        $this->setCategory();
        $this->add();
    }

    protected function setCategory() {
        $this->category = Category::where( 'name', 'Dagger' )->firstOrFail();
    }

    protected function add() {
        $this->addSaintSpear();
        $this->addDynastyHalberd();
        $this->addIcarusTrident();
        $this->addVesperStormer();
    }


    protected function addSaintSpear() {
        $piece  = Resource::where( 'name', 'Saint Spear Blade' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Saint Spear (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Saint Spear' )->firstOrFail();

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

    protected function addDynastyHalberd() {
        $piece  = Resource::where( 'name', 'Dynasty Halberd Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dynasty Halberd (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dynasty Halberd' )->firstOrFail();

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

    protected function addIcarusTrident() {
        $piece  = Resource::where( 'name', 'Icarus Trident Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Icarus Trident (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Icarus Trident' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 403,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 164,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->syntheticCokes->id,
            'resourceQuantity' => 328,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 656,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 99,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->enria->id,
            'resourceQuantity' => 164,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->durableMetalPlate->id,
            'resourceQuantity' => 656,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->adamantine->id,
            'resourceQuantity' => 82,
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

    protected function addVesperStormer() {
        $piece  = Resource::where( 'name', 'Vesper Stormer Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Vesper Stormer (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Vesper Stormer' )->firstOrFail();

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

}
