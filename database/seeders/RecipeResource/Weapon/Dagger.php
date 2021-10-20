<?php

namespace Database\Seeders\RecipeResource\Weapon;

use App\Helpers\ResourceHelper;
use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use Illuminate\Database\Seeder;

class Dagger extends Seeder {
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
        $this->addDynastyKnife();

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

}
