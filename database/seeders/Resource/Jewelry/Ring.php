<?php

namespace Database\Seeders\Resource\Jewelry;

use Database\Seeders\Resource\ResourceMain;

class Ring extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Adamantite Ring Wire',
            'price_sell'              => 0,
            'price_buy'               => 0,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Adamantite Ring (70%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Adamantite Ring',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Black Ore Ring Gemstone',
            'price_sell'              => 0,
            'price_buy'               => 0,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Black Ore Ring (70%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Black Ore Ring',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Phoenix Ring Gemstone',
            'price_sell'              => 0,
            'price_buy'               => 0,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Phoenix Ring (70%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeAImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Majestic Ring Gemstone',
            'price_sell'              => 0,
            'price_buy'               => 0,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Majestic Ring (70%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeAImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Tateossian Ring Gem',
            'price_sell'              => 50000,
            'price_buy'               => 50000,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Tateossian Ring (70%)',
            'price_sell' => 1650000,
            'price_buy'  => 1650000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Dynasty Ring Gemstone',
            'price_sell'              => 0,
            'price_buy'               => 0,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Dynasty Ring (70%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Moirai Ring Gem',
            'price_sell'              => 500000,
            'price_buy'               => 500000,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Moirai Ring (70%)',
            'price_sell' => 2000000,
            'price_buy'  => 2000000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Vesper Ring Gem',
            'price_sell'              => 0,
            'price_buy'               => 0,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Vesper Ring (70%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

    }
}
