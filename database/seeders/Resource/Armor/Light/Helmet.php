<?php

namespace Database\Seeders\Resource\Armor\Light;

use Database\Seeders\Resource\ResourceMain;

class Helmet extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'name'       => 'Draconic Leather Helmet Pattern',
            'price_sell' => 100000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Draconic Leather Helmet (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Dynasty Leather Helmet Piece',
            'price_sell' => 100000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Leather Helmet (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                  => 'Moirai Leather Helmet Piece',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Moirai Leather Helmet (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                  => 'Vesper Leather Helmet Piece',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Leather Helmet (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];
    }
}
