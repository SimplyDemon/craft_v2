<?php

namespace Database\Seeders\Resource\Armor\Universal;

use Database\Seeders\Resource\ResourceMain;

class Gloves extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Doom Gloves Part',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Doom Gloves (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Doom Gloves',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Zubei\'s Gauntlets Part',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Zubei\'s Gauntlets (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Zubei\'s Gauntlets',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Avadon Gloves Part',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Avadon Gloves (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Avadon Gloves',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Blue Wolf Gloves Fabric',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Blue Wolf Gloves (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Blue Wolf Gloves',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Dark Crystal Gloves Design',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Dark Crystal Gloves (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeAImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Tallum Gloves Design',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Tallum Gloves (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeAImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Gauntlets of Nightmare Design',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Gauntlets of Nightmare (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeAImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Majestic Gauntlets Design',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Majestic Gauntlets (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeAImageFilePath,
        ];

    }
}
