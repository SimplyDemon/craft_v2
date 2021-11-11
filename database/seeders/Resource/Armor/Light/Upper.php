<?php

namespace Database\Seeders\Resource\Armor\Light;

use Database\Seeders\Resource\ResourceMain;

class Upper extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Dynasty Leather Armor Piece',
            'price_sell' => 450000,
            'price_buy'  => 450000,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Dynasty Leather Armor (60%)',
            'price_sell' => 2000000,
            'price_buy'  => 2000000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Moirai Leather Breastplate Piece',
            'price_sell'            => 5000000,
            'price_buy'             => 5000000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Moirai Leather Breastplate (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Vesper Leather Breastplate Piece',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Vesper Leather Breastplate (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];
    }
}
