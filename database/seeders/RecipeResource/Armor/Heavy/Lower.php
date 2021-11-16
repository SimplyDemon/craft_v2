<?php

namespace Database\Seeders\RecipeResource\Armor\Heavy;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use Database\Seeders\RecipeResource\RecipeResourceMain;

class Lower extends RecipeResourceMain {
    protected function setCategory() {
        $armorCategory      = Category::where( 'name', 'Armor' )->firstOrFail();
        $armorHeavyCategory = Category::where( 'name', 'Heavy' )->where( 'category_id', $armorCategory->id )->firstOrFail();
        $this->category     = Category::where( 'name', 'Lower' )->where( 'category_id', $armorHeavyCategory->id )->firstOrFail();
    }

    protected function add() {
	    $this->addZubeisGaiters();
	    $this->addZubeisGaiters100();
	    $this->addAvadonGaiters();
	    $this->addAvadonGaiters100();
	    $this->addBlueWolfGaiters();
	    $this->addBlueWolfGaiters100();
	    $this->addDarkCrystalGaiters();
	    $this->addImperialCrusaderGaiters();
	    $this->addDynastyGaiters();
	    $this->addMoiraiGaiters();
	    $this->addVesperGaiters();
    }

	protected function addZubeisGaiters() {
		$piece  = Resource::where( 'name', 'Zubei\'s Gaiters Material' )->firstOrFail();
		$recipe = Resource::where( 'name', 'Recipe: Zubei\'s Gaiters (60%)' )->firstOrFail();
		$item   = Recipe::where( 'name', 'Zubei\'s Gaiters' )->firstOrFail();

		$resources   = [];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->crystalC->id,
			'resourceQuantity' => 45,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
			'resourceQuantity' => 12,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->blacksmithFrame->id,
			'resourceQuantity' => 2,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->gemstoneB->id,
			'resourceQuantity' => 7,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->asofe->id,
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

	protected function addZubeisGaiters100() {
		$piece  = Resource::where( 'name', 'Zubei\'s Gaiters Material' )->firstOrFail();
		$recipe = Resource::where( 'name', 'Recipe: Zubei\'s Gaiters' )->firstOrFail();
		$item   = Recipe::where( 'name', 'Zubei\'s Gaiters 100%' )->firstOrFail();

		$resources   = [];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->crystalC->id,
			'resourceQuantity' => 72,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
			'resourceQuantity' => 21,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->maestroMold->id,
			'resourceQuantity' => 2,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->gemstoneB->id,
			'resourceQuantity' => 7,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->asofe->id,
			'resourceQuantity' => 14,
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

	protected function addAvadonGaiters() {
		$piece  = Resource::where( 'name', 'Avadon Gaiters Material' )->firstOrFail();
		$recipe = Resource::where( 'name', 'Recipe: Avadon Gaiters (60%)' )->firstOrFail();
		$item   = Recipe::where( 'name', 'Avadon Gaiters' )->firstOrFail();

		$resources   = [];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->crystalC->id,
			'resourceQuantity' => 45,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
			'resourceQuantity' => 12,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->blacksmithFrame->id,
			'resourceQuantity' => 2,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->gemstoneB->id,
			'resourceQuantity' => 7,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->asofe->id,
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

	protected function addAvadonGaiters100() {
		$piece  = Resource::where( 'name', 'Avadon Gaiters Material' )->firstOrFail();
		$recipe = Resource::where( 'name', 'Recipe: Avadon Gaiters' )->firstOrFail();
		$item   = Recipe::where( 'name', 'Avadon Gaiters 100%' )->firstOrFail();

		$resources   = [];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->crystalC->id,
			'resourceQuantity' => 72,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
			'resourceQuantity' => 21,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->maestroMold->id,
			'resourceQuantity' => 2,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->gemstoneB->id,
			'resourceQuantity' => 7,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->asofe->id,
			'resourceQuantity' => 14,
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

	protected function addBlueWolfGaiters() {
        $piece  = Resource::where( 'name', 'Blue Wolf Gaiters Material' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Blue Wolf Gaiters (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Blue Wolf Gaiters' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalB->id,
            'resourceQuantity' => 20,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 24,
        ];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->blacksmithFrame->id,
			'resourceQuantity' => 2,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->gemstoneB->id,
			'resourceQuantity' => 12,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->asofe->id,
			'resourceQuantity' => 16,
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

	protected function addBlueWolfGaiters100() {
		$piece  = Resource::where( 'name', 'Blue Wolf Gaiters Material' )->firstOrFail();
		$recipe = Resource::where( 'name', 'Recipe: Blue Wolf Gaiters' )->firstOrFail();
		$item   = Recipe::where( 'name', 'Blue Wolf Gaiters 100%' )->firstOrFail();

		$resources   = [];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->crystalB->id,
			'resourceQuantity' => 49,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
			'resourceQuantity' => 36,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->maestroMold->id,
			'resourceQuantity' => 2,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->gemstoneB->id,
			'resourceQuantity' => 12,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->asofe->id,
			'resourceQuantity' => 24,
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

	protected function addDarkCrystalGaiters() {
		$piece  = Resource::where( 'name', 'Dark Crystal Gaiters Pattern' )->firstOrFail();
		$recipe = Resource::where( 'name', 'Recipe: Dark Crystal Gaiters (60%)' )->firstOrFail();
		$item   = Recipe::where( 'name', 'Dark Crystal Gaiters' )->firstOrFail();

		$resources   = [];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->crystalB->id,
			'resourceQuantity' => 27,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
			'resourceQuantity' => 24,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->maestroMold->id,
			'resourceQuantity' => 2,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->gemstoneB->id,
			'resourceQuantity' => 59,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->asofe->id,
			'resourceQuantity' => 16,
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

	protected function addImperialCrusaderGaiters() {
		$piece  = Resource::where( 'name', 'Imperial Crusader Gaiters Pattern' )->firstOrFail();
		$recipe = Resource::where( 'name', 'Recipe: Imperial Crusader Gaiters (60%)' )->firstOrFail();
		$item   = Recipe::where( 'name', 'Imperial Crusader Gaiters' )->firstOrFail();

		$resources   = [];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->crystalS->id,
			'resourceQuantity' => 37,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 72,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 6,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 48,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->arcsmithAnvil->id,
            'resourceQuantity' => 2,
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

    protected function addDynastyGaiters() {
        $piece  = Resource::where( 'name', 'Dynasty Gaiters Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dynasty Gaiters (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dynasty Gaiters' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 60,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 144,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 12,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 96,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->arcsmithAnvil->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->orichalcum->id,
            'resourceQuantity' => 24,
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

    protected function addMoiraiGaiters() {
        $piece  = Resource::where( 'name', 'Moirai Gaiters Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Moirai Gaiters (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Moirai Gaiters' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 92,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 180,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 16,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 120,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->arcsmithAnvil->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->orichalcum->id,
            'resourceQuantity' => 30,
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

    protected function addVesperGaiters() {
        $piece  = Resource::where( 'name', 'Vesper Gaiters Piece' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Vesper Gaiters (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Vesper Gaiters' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalS->id,
            'resourceQuantity' => 125,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->mithrilAlloy->id,
            'resourceQuantity' => 270,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneS->id,
            'resourceQuantity' => 22,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
            'resourceQuantity' => 180,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->arcsmithAnvil->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->orichalcum->id,
            'resourceQuantity' => 45,
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
