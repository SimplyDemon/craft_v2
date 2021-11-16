<?php

namespace Database\Seeders\Resource\Jewelry;

use Database\Seeders\Resource\ResourceMain;

class Necklace extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Adamantite Necklace Chain',
            'price_sell'              => 0,
            'price_buy'               => 0,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Adamantite Necklace (70%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Adamantite Necklace',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Black Ore Necklace Beads',
            'price_sell'              => 0,
            'price_buy'               => 0,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Black Ore Necklace (70%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Black Ore Necklace',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Phoenix Necklace Beads',
            'price_sell'              => 0,
            'price_buy'               => 0,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Phoenix Necklace (70%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeAImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Majestic Necklace Beads',
            'price_sell'              => 0,
            'price_buy'               => 0,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Majestic Necklace (70%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeAImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Tateossian Necklace Chain',
            'price_sell'              => 17000,
            'price_buy'               => 17000,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Tateossian Necklace (70%)',
            'price_sell' => 150000,
            'price_buy'  => 150000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Dynasty Necklace Gemstone',
            'price_sell'              => 0,
            'price_buy'               => 0,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Dynasty Necklace (70%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Moirai Necklace Gem',
            'price_sell'              => 500000,
            'price_buy'               => 500000,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Moirai Necklace (70%)',
            'price_sell' => 2000000,
            'price_buy'  => 2000000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                    => 'jewelry',
            'name'                    => 'Vesper Necklace Gem',
            'price_sell'              => 0,
            'price_buy'               => 0,
            'is_custom_piece_jewelry' => true,
        ];
        $this->resources[] = [
            'type'       => 'jewelry',
            'name'       => 'Recipe: Vesper Necklace (70%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

    }
}
