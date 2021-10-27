<?php

namespace Database\Seeders\Resource\Weapon;

use Database\Seeders\Resource\ResourceMain;

class Fist extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'name'       => 'Demon Splinter Blade',
            'price_sell' => 100000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Demon Splinter (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Dynasty Bagh-Nakh Piece',
            'price_sell'             => 100000,
            'price_buy'              => 60000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Bagh-Nakh (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];


        $this->resources[] = [
            'name'                   => 'Icarus Hand Piece',
            'price_sell'             => 100000,
            'price_buy'              => 60000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Icarus Hand (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Fighter Piece',
            'price_sell'             => 100000,
            'price_buy'              => 60000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Fighter (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];
    }
}
