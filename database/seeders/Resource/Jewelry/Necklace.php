<?php

namespace Database\Seeders\Resource\Jewelry;

use Database\Seeders\Resource\ResourceMain;

class Necklace extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'name'                    => 'Tateossian Necklace Chain',
            'price_sell'              => 1800000,
            'price_buy'               => 600000,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Tateossian Necklace (70%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                    => 'Dynasty Necklace Gemstone',
            'price_sell'              => 1800000,
            'price_buy'               => 600000,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Necklace (70%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                    => 'Moirai Necklace Gem',
            'price_sell'              => 1800000,
            'price_buy'               => 600000,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Moirai Necklace (70%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                    => 'Vesper Necklace Gem',
            'price_sell'              => 1800000,
            'price_buy'               => 600000,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Necklace (70%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

    }
}
