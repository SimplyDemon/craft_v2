<?php

namespace Database\Seeders\Resource\Jewelry;

use Database\Seeders\Resource\ResourceMain;

class Ring extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'name'                    => 'Tateossian Ring Gem',
            'price_sell'              => 1800000,
            'price_buy'               => 600000,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Tateossian Ring (70%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                    => 'Dynasty Ring Gemstone',
            'price_sell'              => 1800000,
            'price_buy'               => 600000,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Ring (70%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                    => 'Moirai Ring Gem',
            'price_sell'              => 1800000,
            'price_buy'               => 600000,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Moirai Ring (70%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                    => 'Vesper Ring Gem',
            'price_sell'              => 1800000,
            'price_buy'               => 600000,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Ring (70%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

    }
}
