<?php

namespace Database\Seeders\Resource\Armor\Heavy;

use Database\Seeders\Resource\ResourceMain;

class Gloves extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Imperial Crusader Gauntlets Design',
            'price_sell' => 170000,
            'price_buy'  => 170000,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Imperial Crusader Gauntlets (60%)',
            'price_sell' => 2100000,
            'price_buy'  => 2100000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Dynasty Gauntlets Piece',
            'price_sell'            => 800000,
            'price_buy'             => 800000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Dynasty Gauntlets (60%)',
            'price_sell' => 1500000,
            'price_buy'  => 1500000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Moirai Gauntlets Piece',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Moirai Gauntlets (60%)',
            'price_sell' => 7000000,
            'price_buy'  => 7000000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Vesper Gauntlets Piece',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Vesper Gauntlets (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];
    }
}
