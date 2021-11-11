<?php

namespace Database\Seeders\Resource\Weapon;

use Database\Seeders\Resource\ResourceMain;

class Bow extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Draconic Bow Shaft',
            'price_sell'             => 70000,
            'price_buy'              => 70000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Draconic Bow (60%)',
            'price_sell' => 350000,
            'price_buy'  => 350000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Dynasty Bow Piece',
            'price_sell'             => 500000,
            'price_buy'              => 500000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Dynasty Bow (60%)',
            'price_sell' => 2200000,
            'price_buy'  => 2200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Icarus Spitter Piece',
            'price_sell'             => 2000000,
            'price_buy'              => 2000000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Icarus Spitter (60%)',
            'price_sell' => 10000000,
            'price_buy'  => 10000000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Vesper Thrower Piece',
            'price_sell'             => 0,
            'price_buy'              => 0,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Vesper Thrower (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

    }
}
