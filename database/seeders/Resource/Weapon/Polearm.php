<?php

namespace Database\Seeders\Resource\Weapon;

use Database\Seeders\ResourceSeeder;

class Polearm {
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
            'name'       => 'Saint Spear Blade',
            'price_sell' => 100000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Saint Spear (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Dynasty Halberd Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Halberd (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Icarus Trident Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Icarus Trident (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Stormer Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Stormer (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];
    }
}
