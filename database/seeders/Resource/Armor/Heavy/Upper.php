<?php

namespace Database\Seeders\Resource\Armor\Heavy;

use Database\Seeders\Resource\ResourceMain;

class Upper extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Imperial Crusader Breastplate Part',
            'price_sell'            => 3000000,
            'price_buy'             => 3000000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Imperial Crusader Breastplate (60%)',
            'price_sell' => 3,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Dynasty Breastplate Piece',
            'price_sell'            => 850000,
            'price_buy'             => 850000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Dynasty Breastplate (60%)',
            'price_sell' => 3500000,
            'price_buy'  => 3500000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Moirai Breastplate Piece',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Moirai Breastplate (60%)',
            'price_sell' => 650000,
            'price_buy'  => 650000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Vesper Breastplate Piece',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Vesper Breastplate (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];
    }
}
