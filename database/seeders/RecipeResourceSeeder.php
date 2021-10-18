<?php

namespace Database\Seeders;

use App\Models\Recipe;
use App\Models\Resource;
use Illuminate\Database\Seeder;

class RecipeResourceSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $highGradeSuede    = Resource::where( 'name', 'High-grade Suede' )->firstOrFail();
        $syntheticCokes    = Resource::where( 'name', 'Synthetic Cokes' )->firstOrFail();
        $mithrilAlloy      = Resource::where( 'name', 'Mithril Alloy' )->firstOrFail();
        $gemstoneS         = Resource::where( 'name', 'Gemstone (S-grade)' )->firstOrFail();
        $enria             = Resource::where( 'name', 'Enria' )->firstOrFail();
        $warsmithHolder    = Resource::where( 'name', 'Warsmith Holder' )->firstOrFail();
        $durableMetalPlate = Resource::where( 'name', 'Durable Metal Plate' )->firstOrFail();
        $adamantine        = Resource::where( 'name', 'Adamantine' )->firstOrFail();
        $crystalS          = Resource::where( 'name', 'Crystal S' )->firstOrFail();

        $dynastyKnifePiece          = Resource::where( 'name', 'Dynasty Knife Piece' )->firstOrFail();
        $dynastyKnifeRecipeResource = Resource::where( 'name', 'Recipe: Dynasty Knife (60%)' )->firstOrFail();
        $saintSpearBlade            = Resource::where( 'name', 'Saint Spear Blade' )->firstOrFail();
        $saintSpearRecipeResource   = Resource::where( 'name', 'Recipe: Saint Spear (60%)' )->firstOrFail();

        $saintSpearRecipe      = Recipe::where( 'name', 'Saint Spear' )->firstOrFail();
        $saintSpearResources   = [];
        $saintSpearResources[] = [
            'resourceId'       => $crystalS->id,
            'resourceQuantity' => 214,
        ];
        $saintSpearResources[] = [
            'resourceId'       => $highGradeSuede->id,
            'resourceQuantity' => 62,
        ];
        $saintSpearResources[] = [
            'resourceId'       => $syntheticCokes->id,
            'resourceQuantity' => 124,
        ];
        $saintSpearResources[] = [
            'resourceId'       => $mithrilAlloy->id,
            'resourceQuantity' => 248,
        ];
        $saintSpearResources[] = [
            'resourceId'       => $gemstoneS->id,
            'resourceQuantity' => 43,
        ];
        $saintSpearResources[] = [
            'resourceId'       => $durableMetalPlate->id,
            'resourceQuantity' => 248,
        ];
        $saintSpearResources[] = [
            'resourceId'       => $warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $saintSpearResources[] = [
            'resourceId'       => $saintSpearBlade->id,
            'resourceQuantity' => 17,
        ];
        $saintSpearResources[] = [
            'resourceId'       => $saintSpearRecipeResource->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $saintSpearResources as $saintSpearResource ) {
            $saintSpearRecipe->resources()->attach( $saintSpearResource['resourceId'], [ 'resource_quantity' => $saintSpearResource['resourceQuantity'] ] );
        }

        $dynastyKnifeRecipe      = Recipe::where( 'name', 'Dynasty Knife' )->firstOrFail();
        $dynastyKnifeResources   = [];
        $dynastyKnifeResources[] = [
            'resourceId'       => $crystalS->id,
            'resourceQuantity' => 350,
        ];
        $dynastyKnifeResources[] = [
            'resourceId'       => $syntheticCokes->id,
            'resourceQuantity' => 376,
        ];
        $dynastyKnifeResources[] = [
            'resourceId'       => $mithrilAlloy->id,
            'resourceQuantity' => 376,
        ];
        $dynastyKnifeResources[] = [
            'resourceId'       => $gemstoneS->id,
            'resourceQuantity' => 69,
        ];
        $dynastyKnifeResources[] = [
            'resourceId'       => $enria->id,
            'resourceQuantity' => 188,
        ];
        $dynastyKnifeResources[] = [
            'resourceId'       => $durableMetalPlate->id,
            'resourceQuantity' => 188,
        ];
        $dynastyKnifeResources[] = [
            'resourceId'       => $warsmithHolder->id,
            'resourceQuantity' => 4,
        ];
        $dynastyKnifeResources[] = [
            'resourceId'       => $dynastyKnifePiece->id,
            'resourceQuantity' => 18,
        ];
        $dynastyKnifeResources[] = [
            'resourceId'       => $adamantine->id,
            'resourceQuantity' => 94,
        ];
        $dynastyKnifeResources[] = [
            'resourceId'       => $dynastyKnifeRecipeResource->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $dynastyKnifeResources as $dynastyKnifeResource ) {
            $dynastyKnifeRecipe->resources()->attach( $dynastyKnifeResource['resourceId'], [ 'resource_quantity' => $dynastyKnifeResource['resourceQuantity'] ] );
        }

    }
}
