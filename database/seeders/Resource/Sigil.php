<?php

namespace Database\Seeders\Resource;

class Sigil extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'name'                  => 'Arcana Sigil Piece',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
            'type'                  => 'sigil',
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Arcana Sigil (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
            'type'       => 'sigil',
        ];

        $this->resources[] = [
            'name'                  => 'Dynasty Sigil Piece',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
            'type'                  => 'sigil',
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Sigil (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
            'type'       => 'sigil',
        ];

        $this->resources[] = [
            'name'                  => 'Moirai Sigil Piece',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
            'type'                  => 'sigil',
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Moirai Sigil (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
            'type'       => 'sigil',
        ];

        $this->resources[] = [
            'name'                  => 'Vesper Sigil Piece',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
            'type'                  => 'sigil',
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Sigil (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
            'type'       => 'sigil',
        ];

    }
}
