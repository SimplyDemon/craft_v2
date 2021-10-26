<?php

namespace Database\Seeders\Resource\Weapon;

use Database\Seeders\ResourceSeeder;

class Sword {
    protected array $resources;
    protected ResourceSeeder $resourceSeeder;

    public function __construct() {
        $this->resources      = [];
        $this->resourceSeeder = new ResourceSeeder();
        $this->add();
    }

    public function getResources(): array {
        return $this->resources;
    }

    protected function add() {
        $this->resources[] = [
            'name'       => 'Damascus Sword Blade',
            'price_sell' => 30000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Recipe: Damascus Sword (60%)',
            'price_sell' => 1000000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Damascus Sword',
            'price_sell' => 5000000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Forgotten Blade Edge',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Forgotten Blade (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Heavens Divider Edge',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Heavens Divider (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Dynasty Sword Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Sword (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Dynasty Blade Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Blade (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Dynasty Phantom Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Phantom (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Recipe: Icarus Sawsword (60%)',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Icarus Sawsword Piece',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Icarus Spirit Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Icarus Spirit (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Icarus Heavy Arms Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Icarus Heavy Arms (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Cutter Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Cutter (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Slasher Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Slasher (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Buster Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Buster (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];
    }
}
