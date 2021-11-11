<?php

namespace Database\Seeders\Resource\Weapon;

use Database\Seeders\Resource\ResourceMain;

class Polearm extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Saint Spear Blade',
            'price_sell' => 55000,
            'price_buy'  => 55000,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Saint Spear (60%)',
            'price_sell' => 450000,
            'price_buy'  => 450000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Dynasty Halberd Piece',
            'price_sell'             => 500000,
            'price_buy'              => 500000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Dynasty Halberd (60%)',
            'price_sell' => 2500000,
            'price_buy'  => 2500000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Icarus Trident Piece',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Icarus Trident (60%)',
            'price_sell' => 20000000,
            'price_buy'  => 20000000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Vesper Stormer Piece',
            'price_sell'             => 0,
            'price_buy'              => 0,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Vesper Stormer (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];
    }
}
