<?php

namespace Database\Seeders\Resource;

class Shield extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'name'                  => 'Imperial Crusader Shield Part',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
            'type'                  => 'shield',
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Imperial Crusader Shield (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
            'type'       => 'shield',
        ];

        $this->resources[] = [
            'name'                  => 'Dynasty Shield Fragment',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
            'type'                  => 'shield',
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Shield (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
            'type'       => 'shield',
        ];

        $this->resources[] = [
            'name'                  => 'Moirai Shield Fragment',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
            'type'                  => 'shield',
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Moirai Shield (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
            'type'       => 'shield',
        ];

        $this->resources[] = [
            'name'                  => 'Vesper Shield Piece',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
            'type'                  => 'shield',
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Shield (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
            'type'       => 'shield',
        ];

    }
}
