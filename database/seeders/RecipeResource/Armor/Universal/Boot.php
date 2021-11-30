<?php

namespace Database\Seeders\RecipeResource\Armor\Universal;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use Database\Seeders\RecipeResource\RecipeResourceMain;

class Boot extends RecipeResourceMain {
	protected function setCategory() {
		$armorCategory          = Category::where( 'name', 'Armor' )->firstOrFail();
		$armorUniversalCategory = Category::where( 'name', 'Universal' )->where( 'category_id', $armorCategory->id )->firstOrFail();
		$this->category         = Category::where( 'name', 'Boot' )->where( 'category_id', $armorUniversalCategory->id )->firstOrFail();
	}

	protected function add() {
        $this->addReinforcedMithrilBoots();
        $this->addChainBoots();
        $this->addKarmianBoots();
        $this->addPlatedLeatherBoots();
        $this->addDwarvenChainBoots();
        $this->addBootsOfSeal();
        $this->addCrimsonBoots();
        $this->addRindLeatherBoots();
        $this->addCompoundBoots();
        $this->addDemonsBoots();
        $this->addThecaLeatherBoots();
        $this->addDrakeLeatherBoots();
        $this->addFullPlateBoots();
        $this->addZubeisBoots();
        $this->addZubeisBoots100();
        $this->addAvadonBoots();
        $this->addAvadonBoots100();
        $this->addDoomBoots();
        $this->addDoomBoots100();
        $this->addBlueWolfBoots();
        $this->addBlueWolfBoots100();
        $this->addDarkCrystalBoots();
        $this->addTallumBoots();
        $this->addBootsOfNightmare();
        $this->addMajesticBoots();
    }

    protected function addReinforcedMithrilBoots() {
        $piece  = Resource::where( 'name', 'Reinforced Mithril Boots Design' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Reinforced Mithril Boots' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Reinforced Mithril Boots' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalD->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 1,
        ];
		$resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 8,
        ];
		$resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneD->id,
            'resourceQuantity' => 9,
        ];
		$resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addChainBoots() {
        $piece  = Resource::where( 'name', 'Chain Boots Part' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Chain Boots' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Chain Boots' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalD->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addKarmianBoots() {
        $piece  = Resource::where( 'name', 'Karmian Boots Fabric' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Karmian Boots' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Karmian Boots' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalD->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addPlatedLeatherBoots() {
        $piece  = Resource::where( 'name', 'Plated Leather Boots Lining' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Plated Leather Boots' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Plated Leather Boots' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalD->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addDwarvenChainBoots() {
        $piece  = Resource::where( 'name', 'Dwarven Chain Boots Part' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Dwarven Chain Boots' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Dwarven Chain Boots' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalD->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addBootsOfSeal() {
        $piece  = Resource::where( 'name', 'Boots of Seal Pattern' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Boots of Seal' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Boots of Seal' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalD->id,
            'resourceQuantity' => 40,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 8,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addCrimsonBoots() {
        $piece  = Resource::where( 'name', 'Crimson Boots Fabric' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Crimson Boots' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Crimson Boots' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 12,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 9,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addRindLeatherBoots() {
        $piece  = Resource::where( 'name', 'Rind Leather Boots Lining' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Rind Leather Boots' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Rind Leather Boots' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 12,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 1,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 4,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 9,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addCompoundBoots() {
        $piece  = Resource::where( 'name', 'Compound Boots Part' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Compound Boots' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Compound Boots' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 16,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 16,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 6,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addDemonsBoots() {
        $piece  = Resource::where( 'name', 'Demon\'s Boots Fabric' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Demon\'s Boots' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Demon\'s Boots' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 16,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 16,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 6,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addThecaLeatherBoots() {
        $piece  = Resource::where( 'name', 'Theca Leather Boots Texture' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Theca Leather Boots' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Theca Leather Boots' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 20,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 18,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 7,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addDrakeLeatherBoots() {
        $piece  = Resource::where( 'name', 'Drake Leather Boots Design' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Drake Leather Boots' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Drake Leather Boots' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 24,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 24,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 11,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addFullPlateBoots() {
        $piece  = Resource::where( 'name', 'Full Plate Boots Part' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Full Plate Boots' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Full Plate Boots' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 24,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 3,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 24,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneC->id,
            'resourceQuantity' => 10,
        ];
        $resources[] = [
            'resourceId'       => $piece->id,
            'resourceQuantity' => 11,
        ];
        $resources[] = [
            'resourceId'       => $recipe->id,
            'resourceQuantity' => 1,
        ];

        foreach ( $resources as $resource ) {
            $item->resources()->attach( $resource['resourceId'], [ 'resource_quantity' => $resource['resourceQuantity'] ] );
        }
    }

    protected function addZubeisBoots() {
        $piece  = Resource::where( 'name', 'Zubei\'s Boots Design' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Zubei\'s Boots (60%)' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Zubei\'s Boots' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 25,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->craftedLeather->id,
            'resourceQuantity' => 16,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->gemstoneB->id,
            'resourceQuantity' => 2,
        ];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->asofe->id,
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

    protected function addZubeisBoots100() {
        $piece  = Resource::where( 'name', 'Zubei\'s Boots Design' )->firstOrFail();
        $recipe = Resource::where( 'name', 'Recipe: Zubei\'s Boots' )->firstOrFail();
        $item   = Recipe::where( 'name', 'Zubei\'s Boots 100%' )->firstOrFail();

        $resources   = [];
        $resources[] = [
            'resourceId'       => $this->ResourceHelper->crystalC->id,
            'resourceQuantity' => 33,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
			'resourceQuantity' => 3,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->craftedLeather->id,
			'resourceQuantity' => 24,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->gemstoneB->id,
			'resourceQuantity' => 2,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->asofe->id,
			'resourceQuantity' => 3,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->maestroAnvilLock->id,
			'resourceQuantity' => 1,
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

	protected function addAvadonBoots() {
		$piece  = Resource::where( 'name', 'Avadon Boots Design' )->firstOrFail();
		$recipe = Resource::where( 'name', 'Recipe: Avadon Boots (60%)' )->firstOrFail();
		$item   = Recipe::where( 'name', 'Avadon Boots' )->firstOrFail();

		$resources   = [];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->crystalC->id,
			'resourceQuantity' => 25,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
			'resourceQuantity' => 2,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->craftedLeather->id,
			'resourceQuantity' => 16,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->gemstoneB->id,
			'resourceQuantity' => 2,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->asofe->id,
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

	protected function addAvadonBoots100() {
		$piece  = Resource::where( 'name', 'Avadon Boots Design' )->firstOrFail();
		$recipe = Resource::where( 'name', 'Recipe: Avadon Boots' )->firstOrFail();
		$item   = Recipe::where( 'name', 'Avadon Boots 100%' )->firstOrFail();

		$resources   = [];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->crystalC->id,
			'resourceQuantity' => 33,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
			'resourceQuantity' => 3,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->craftedLeather->id,
			'resourceQuantity' => 24,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->gemstoneB->id,
			'resourceQuantity' => 2,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->asofe->id,
			'resourceQuantity' => 3,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->maestroAnvilLock->id,
			'resourceQuantity' => 1,
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

	protected function addDoomBoots() {
		$piece  = Resource::where( 'name', 'Doom Boots Part' )->firstOrFail();
		$recipe = Resource::where( 'name', 'Recipe: Doom Boots (60%)' )->firstOrFail();
		$item   = Recipe::where( 'name', 'Doom Boots' )->firstOrFail();

		$resources   = [];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->crystalB->id,
			'resourceQuantity' => 8,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
			'resourceQuantity' => 4,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->craftedLeather->id,
			'resourceQuantity' => 32,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->gemstoneB->id,
			'resourceQuantity' => 4,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->asofe->id,
			'resourceQuantity' => 4,
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

	protected function addDoomBoots100() {
		$piece  = Resource::where( 'name', 'Doom Boots Part' )->firstOrFail();
		$recipe = Resource::where( 'name', 'Recipe: Doom Boots' )->firstOrFail();
		$item   = Recipe::where( 'name', 'Doom Boots 100%' )->firstOrFail();

		$resources   = [];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->crystalB->id,
			'resourceQuantity' => 15,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
			'resourceQuantity' => 6,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->craftedLeather->id,
			'resourceQuantity' => 48,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->gemstoneB->id,
			'resourceQuantity' => 4,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->asofe->id,
			'resourceQuantity' => 6,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->maestroAnvilLock->id,
			'resourceQuantity' => 1,
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

	protected function addBlueWolfBoots() {
		$piece  = Resource::where( 'name', 'Blue Wolf Boots Design' )->firstOrFail();
		$recipe = Resource::where( 'name', 'Recipe: Blue Wolf Boots (60%)' )->firstOrFail();
		$item   = Recipe::where( 'name', 'Blue Wolf Boots' )->firstOrFail();

		$resources   = [];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->crystalB->id,
			'resourceQuantity' => 8,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
			'resourceQuantity' => 4,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->craftedLeather->id,
			'resourceQuantity' => 32,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->gemstoneB->id,
			'resourceQuantity' => 4,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->asofe->id,
			'resourceQuantity' => 4,
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

	protected function addBlueWolfBoots100() {
		$piece  = Resource::where( 'name', 'Blue Wolf Boots Design' )->firstOrFail();
		$recipe = Resource::where( 'name', 'Recipe: Blue Wolf Boots' )->firstOrFail();
		$item   = Recipe::where( 'name', 'Blue Wolf Boots 100%' )->firstOrFail();

		$resources   = [];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->crystalB->id,
			'resourceQuantity' => 15,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
			'resourceQuantity' => 6,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->craftedLeather->id,
			'resourceQuantity' => 48,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->gemstoneB->id,
			'resourceQuantity' => 4,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->asofe->id,
			'resourceQuantity' => 6,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->maestroAnvilLock->id,
			'resourceQuantity' => 1,
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

	protected function addDarkCrystalBoots() {
		$piece  = Resource::where( 'name', 'Dark Crystal Boots Lining' )->firstOrFail();
		$recipe = Resource::where( 'name', 'Recipe: Dark Crystal Boots (60%)' )->firstOrFail();
		$item   = Recipe::where( 'name', 'Dark Crystal Boots' )->firstOrFail();

		$resources   = [];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->crystalB->id,
			'resourceQuantity' => 10,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
			'resourceQuantity' => 15,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->craftedLeather->id,
			'resourceQuantity' => 25,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->gemstoneB->id,
			'resourceQuantity' => 21,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->asofe->id,
			'resourceQuantity' => 5,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->maestroAnvilLock->id,
			'resourceQuantity' => 1,
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

	protected function addTallumBoots() {
		$piece  = Resource::where( 'name', 'Tallum Boots Lining' )->firstOrFail();
		$recipe = Resource::where( 'name', 'Recipe: Tallum Boots (60%)' )->firstOrFail();
		$item   = Recipe::where( 'name', 'Tallum Boots' )->firstOrFail();

		$resources   = [];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->crystalB->id,
			'resourceQuantity' => 10,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
			'resourceQuantity' => 15,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->craftedLeather->id,
			'resourceQuantity' => 25,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->gemstoneB->id,
			'resourceQuantity' => 21,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->asofe->id,
			'resourceQuantity' => 5,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->maestroAnvilLock->id,
			'resourceQuantity' => 1,
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

	protected function addBootsOfNightmare() {
		$piece  = Resource::where( 'name', 'Boots of Nightmare Lining' )->firstOrFail();
		$recipe = Resource::where( 'name', 'Recipe: Boots of Nightmare (60%)' )->firstOrFail();
		$item   = Recipe::where( 'name', 'Boots of Nightmare' )->firstOrFail();

		$resources   = [];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->crystalA->id,
			'resourceQuantity' => 11,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
			'resourceQuantity' => 24,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->craftedLeather->id,
			'resourceQuantity' => 40,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->gemstoneA->id,
			'resourceQuantity' => 3,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->asofe->id,
			'resourceQuantity' => 8,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->maestroAnvilLock->id,
			'resourceQuantity' => 1,
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

	protected function addMajesticBoots() {
		$piece  = Resource::where( 'name', 'Majestic Boots Lining' )->firstOrFail();
		$recipe = Resource::where( 'name', 'Recipe: Majestic Boots (60%)' )->firstOrFail();
		$item   = Recipe::where( 'name', 'Majestic Boots' )->firstOrFail();

		$resources   = [];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->crystalA->id,
			'resourceQuantity' => 11,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->highGradeSuede->id,
			'resourceQuantity' => 24,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->craftedLeather->id,
			'resourceQuantity' => 40,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->gemstoneA->id,
			'resourceQuantity' => 3,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->asofe->id,
			'resourceQuantity' => 8,
		];
		$resources[] = [
			'resourceId'       => $this->ResourceHelper->maestroAnvilLock->id,
			'resourceQuantity' => 1,
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


}
