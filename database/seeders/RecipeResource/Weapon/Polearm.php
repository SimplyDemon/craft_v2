<?php

namespace Database\Seeders\RecipeResource\Weapon;

use App\Helpers\ResourceHelper;
use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use Illuminate\Database\Seeder;

class Polearm extends Seeder {
    protected Category $category;
    protected Resource $ResourceHelper;

    public function seed() {
        $this->ResourceHelper = new Resource();
        $this->setCategory();
        $this->add();
    }

    protected function setCategory() {
        $this->category = Category::where( 'name', 'Dagger' )->firstOrFail();
    }

    protected function add() {
        $this->addSaintSpear();

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

}
