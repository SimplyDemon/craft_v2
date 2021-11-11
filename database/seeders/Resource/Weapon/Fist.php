<?php

namespace Database\Seeders\Resource\Weapon;

use Database\Seeders\Resource\ResourceMain;

class Fist extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Demon Splinter Blade',
            'price_sell' => 50000,
            'price_buy'  => 50000,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Demon Splinter (60%)',
            'price_sell' => 400000,
            'price_buy'  => 400000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Dynasty Bagh-Nakh Piece',
            'price_sell'             => 500000,
            'price_buy'              => 500000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Dynasty Bagh-Nakh (60%)',
            'price_sell' => 3000000,
            'price_buy'  => 3000000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];


        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Icarus Hand Piece',
            'price_sell'             => 2500000,
            'price_buy'              => 2500000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Icarus Hand (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Vesper Fighter Piece',
            'price_sell'             => 0,
            'price_buy'              => 0,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Vesper Fighter (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];
    }
}
