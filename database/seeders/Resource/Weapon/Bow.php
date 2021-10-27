<?php

namespace Database\Seeders\Resource\Weapon;

use Database\Seeders\Resource\ResourceMain;

class Bow extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'name'                   => 'Draconic Bow Shaft',
            'price_sell'             => 100000,
            'price_buy'              => 60000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Draconic Bow (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Dynasty Bow Piece',
            'price_sell'             => 100000,
            'price_buy'              => 60000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Bow (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Icarus Spitter Piece',
            'price_sell'             => 100000,
            'price_buy'              => 60000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Icarus Spitter (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Thrower Piece',
            'price_sell'             => 100000,
            'price_buy'              => 60000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Thrower (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

    }
}
