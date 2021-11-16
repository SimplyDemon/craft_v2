<?php

namespace Database\Seeders\Resource\Jewelry;

use Database\Seeders\Resource\ResourceMain;

class Earring extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Adamantite Earring Gemstone',
            'price_sell'              => 0,
            'price_buy'               => 0,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Adamantite Earring (70%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Adamantite Earring',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Black Ore Earring Piece',
            'price_sell'              => 0,
            'price_buy'               => 0,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Black Ore Earring (70%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Black Ore Earring',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Phoenix Earring Gemstone',
            'price_sell'              => 0,
            'price_buy'               => 0,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Phoenix Earring (70%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeAImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Majestic Earring Gemstone',
            'price_sell'              => 0,
            'price_buy'               => 0,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Majestic Earring (70%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeAImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Tateossian Earring Part',
            'price_sell'              => 12000,
            'price_buy'               => 12000,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Tateossian Earring (70%)',
            'price_sell' => 4000000,
            'price_buy'  => 4000000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Dynasty Earring Gemstone',
            'price_sell'              => 0,
            'price_buy'               => 0,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Dynasty Earring (70%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Moirai Earring Gem',
            'price_sell'              => 1250000,
            'price_buy'               => 1250000,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Moirai Earring (70%)',
            'price_sell' => 6900000,
            'price_buy'  => 6900000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Vesper Earring Gem',
            'price_sell'              => 0,
            'price_buy'               => 0,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Vesper Earring (70%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

    }
}
