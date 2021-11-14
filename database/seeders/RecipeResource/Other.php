<?php

namespace Database\Seeders\RecipeResource;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;

class Other extends RecipeResourceMain {
    protected function setCategory() {
        $this->category = Category::where( 'name', 'Other' )->firstOrFail();
    }

    protected function add() {
        $this->addSoulshotes();
        $this->addSpiritshoes();
    }

    protected function addSoulshotes() {
        $this->addSoulshotD();
        $this->addSoulshotC();
        $this->addSoulshotB();
        $this->addSoulshotA();
        $this->addSoulshotS();
    }

    protected function addSpiritshoes() {
        $this->addSpiritshotD();
        $this->addSpiritshotC();
        $this->addSpiritshotB();
        $this->addSpiritshotA();
        $this->addSpiritshotS();
    }

    protected function addSoulshotD() {
        $item = Recipe::where( 'name', 'Soulshot (D-grade)' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalD->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->soulOre->id,
            'resourceQuantity' => 9,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addSoulshotC() {
        $item = Recipe::where( 'name', 'Soulshot (C-grade)' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->soulOre->id,
            'resourceQuantity' => 30,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addSoulshotB() {
        $item = Recipe::where( 'name', 'Soulshot (B-grade)' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->soulOre->id,
            'resourceQuantity' => 54,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addSoulshotA() {
        $item = Recipe::where( 'name', 'Soulshot (A-grade)' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalA->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->soulOre->id,
            'resourceQuantity' => 36,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addSoulshotS() {
        $item = Recipe::where( 'name', 'Soulshot (S-grade)' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->soulOre->id,
            'resourceQuantity' => 40,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }


    protected function addSpiritshotD() {
        $item = Recipe::where( 'name', 'Blessed Spiritshot (D-grade)' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalD->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->spiritOre->id,
            'resourceQuantity' => 8,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addSpiritshotC() {
        $item = Recipe::where( 'name', 'Blessed Spiritshot (C-grade)' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->spiritOre->id,
            'resourceQuantity' => 30,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addSpiritshotB() {
        $item = Recipe::where( 'name', 'Blessed Spiritshot (B-grade)' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->spiritOre->id,
            'resourceQuantity' => 16,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addSpiritshotA() {
        $item = Recipe::where( 'name', 'Blessed Spiritshot (A-grade)' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalA->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->spiritOre->id,
            'resourceQuantity' => 70,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addSpiritshotS() {
        $item = Recipe::where( 'name', 'Blessed Spiritshot (S-grade)' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->spiritOre->id,
            'resourceQuantity' => 50,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }


}
