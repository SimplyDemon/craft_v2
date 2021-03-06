<?php

namespace Database\Seeders\Resource\Armor\Heavy;

use Database\Seeders\Resource\ResourceMain;

class Upper extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Chain Mail Shirt Material',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Chain Mail Shirt',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeCImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Dwarven Chain Mail Shirt Material',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Dwarven Chain Mail Shirt',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeCImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Zubei\'s Breastplate Part',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Zubei\'s Breastplate (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Zubei\'s Breastplate',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Avadon Breastplate Part',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Avadon Breastplate (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Avadon Breastplate',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Blue Wolf Breastplate Part',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Blue Wolf Breastplate (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Blue Wolf Breastplate',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Dark Crystal Breastplate Pattern',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Dark Crystal Breastplate (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Imperial Crusader Breastplate Part',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Imperial Crusader Breastplate (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Dynasty Breastplate Piece',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Dynasty Breastplate (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Moirai Breastplate Piece',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Moirai Breastplate (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Vesper Breastplate Piece',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Vesper Breastplate (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];
    }
}
