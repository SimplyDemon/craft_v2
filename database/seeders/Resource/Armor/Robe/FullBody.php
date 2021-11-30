<?php

namespace Database\Seeders\Resource\Armor\Robe;

use Database\Seeders\Resource\ResourceMain;

class FullBody extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Robe of Seal Fabric',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Robe of Seal',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeCImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Avadon Robe Fabric',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Avadon Robe (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Avadon Robe',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Dark Crystal Robe Fabric',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Dark Crystal Robe (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeAImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Robe of Nightmare Fabric',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Robe of Nightmare (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeAImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Majestic Robe Fabric',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Majestic Robe (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeAImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Major Arcana Robe Part',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Major Arcana Robe (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];
    }
}
