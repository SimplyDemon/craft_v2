<?php

namespace Database\Seeders;

use App\Models\Recipe;
use App\Models\Resource;
use Illuminate\Database\Seeder;

class RecipeResourceSeeder extends Seeder {
    protected Resource $highGradeSuede;
    protected Resource $syntheticCokes;
    protected Resource $mithrilAlloy;
    protected Resource $gemstoneS;
    protected Resource $enria;
    protected Resource $warsmithHolder;
    protected Resource $durableMetalPlate;
    protected Resource $adamantine;
    protected Resource $crystalS;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->highGradeSuede    = Resource::where( 'name', 'High-grade Suede' )->firstOrFail();
        $this->syntheticCokes    = Resource::where( 'name', 'Synthetic Cokes' )->firstOrFail();
        $this->mithrilAlloy      = Resource::where( 'name', 'Mithril Alloy' )->firstOrFail();
        $this->gemstoneS         = Resource::where( 'name', 'Gemstone (S-grade)' )->firstOrFail();
        $this->enria             = Resource::where( 'name', 'Enria' )->firstOrFail();
        $this->warsmithHolder    = Resource::where( 'name', 'Warsmith Holder' )->firstOrFail();
        $this->durableMetalPlate = Resource::where( 'name', 'Durable Metal Plate' )->firstOrFail();
        $this->adamantine        = Resource::where( 'name', 'Adamantine' )->firstOrFail();
        $this->crystalS          = Resource::where( 'name', 'Crystal S' )->firstOrFail();

        $this->addDynastyKnife();
        $this->addSaintSpear();
    }

    protected function addDynastyKnife() {
        $piece       = Resource::where( 'name', 'Dynasty Knife Piece' )->firstOrFail();
        $recipe      = Resource::where( 'name', 'Recipe: Dynasty Knife (60%)' )->firstOrFail();
        $item        = Recipe::where( 'name', 'Dynasty Knife' )->firstOrFail();
        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->crystalS->id,
            'resourceQuantity' => 350,
        ];
        $resources[] = [
            'resourceId'       => $this->syntheticCokes->id,
            'resourceQuantity' => 376,
        ];
        $resources[] = [
            'resourceId'       => $this->mithrilAlloy->id,
            'resourceQuantity' => 376,
        ];
        $resources[] = [
            'resourceId'       => $this->gemstoneS->id,
            'resourceQuantity' => 69,
        ];
        $resources[] = [
            'resourceId'       => $this->enria->id,
            'resourceQuantity' => 188,
        ];
        $resources[] = [
            'resourceId'       => $this->durableMetalPlate->id,
            'resourceQuantity' => 188,
        ];
        $resources[] = [
            'resourceId'       => $this->warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $this->adamantine->id,
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

    protected function addSaintSpear() {
        $piece  = Resource::where( 'name', 'Saint Spear Blade' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Saint Spear (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Saint Spear' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->crystalS->id,
            'resourceQuantity' => 214,
        ];
        $resources[] = [
            'resourceId'       => $this->highGradeSuede->id,
            'resourceQuantity' => 62,
        ];
        $resources[] = [
            'resourceId'       => $this->syntheticCokes->id,
            'resourceQuantity' => 124,
        ];
        $resources[] = [
            'resourceId'       => $this->mithrilAlloy->id,
            'resourceQuantity' => 248,
        ];
        $resources[] = [
            'resourceId'       => $this->gemstoneS->id,
            'resourceQuantity' => 43,
        ];
        $resources[] = [
            'resourceId'       => $this->durableMetalPlate->id,
            'resourceQuantity' => 248,
        ];
        $resources[] = [
            'resourceId'       => $this->warsmithHolder->id,
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
