<?php

namespace Database\Seeders\Resource\Weapon;

use Database\Seeders\Resource\ResourceMain;

class Dagger extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Kris Edge',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Kris (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Kris',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];

        $this->resources[] = [
	        'type'       => 'weapon',
	        'name'       => 'Hell Knife Edge',
	        'price_sell' => 0,
	        'price_buy'  => 0,
	        'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
	        'type'       => 'weapon',
	        'name'       => 'Recipe: Hell Knife (60%)',
	        'price_sell' => 0,
	        'price_buy'  => 0,
	        'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];
        $this->resources[] = [
	        'type'       => 'weapon',
	        'name'       => 'Recipe: Hell Knife',
	        'price_sell' => 0,
	        'price_buy'  => 0,
	        'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Demon\'s Dagger Edge',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Demon\'s Dagger (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Demon\'s Dagger',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Bloody Orchid Head',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Bloody Orchid (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeAImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Soul Separator Head',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Soul Separator (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeAImageFilePath,
        ];

        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Naga Storm Piece',
            'price_sell'             => 0,
            'price_buy'              => 0,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Naga Storm (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeAImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Angel Slayer Blade',
            'price_sell' => 90000,
            'price_buy'  => 90000,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Angel Slayer (60%)',
            'price_sell' => 350000,
            'price_buy'  => 350000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Dynasty Knife Piece',
            'price_sell' => 1800000,
            'price_buy'  => 1400000,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Dynasty Knife (60%)',
            'price_sell' => 2400000,
            'price_buy'  => 2400000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Icarus Disperser Piece',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Icarus Disperser (60%)',
            'price_sell' => 23000000,
            'price_buy'  => 23000000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Vesper Shaper Piece',
            'price_sell'             => 0,
            'price_buy'              => 0,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Vesper Shaper (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

    }
}
