<?php

namespace Database\Seeders\Resource\Jewelry;

use Database\Seeders\Resource\ResourceMain;

class Ring extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Tateossian Ring Gem',
            'price_sell'              => 1800000,
            'price_buy'               => 600000,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Tateossian Ring (70%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Dynasty Ring Gemstone',
            'price_sell'              => 1800000,
            'price_buy'               => 600000,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Dynasty Ring (70%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Moirai Ring Gem',
            'price_sell'              => 1800000,
            'price_buy'               => 600000,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Moirai Ring (70%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Vesper Ring Gem',
            'price_sell'              => 1800000,
            'price_buy'               => 600000,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Vesper Ring (70%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

    }
}
