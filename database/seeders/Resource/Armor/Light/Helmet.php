<?php

namespace Database\Seeders\Resource\Armor\Light;

use Database\Seeders\Resource\ResourceMain;

class Helmet extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Draconic Leather Helmet Pattern',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Draconic Leather Helmet (60%)',
            'price_sell' => 800000,
            'price_buy'  => 800000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Dynasty Leather Helmet Piece',
            'price_sell' => 35000,
            'price_buy'  => 35000,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Dynasty Leather Helmet (60%)',
            'price_sell' => 2000000,
            'price_buy'  => 2000000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Moirai Leather Helmet Piece',
            'price_sell'            => 2400000,
            'price_buy'             => 2400000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Moirai Leather Helmet (60%)',
            'price_sell' => 5000000,
            'price_buy'  => 5000000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Vesper Leather Helmet Piece',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Vesper Leather Helmet (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];
    }
}
