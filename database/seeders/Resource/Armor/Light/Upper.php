<?php

namespace Database\Seeders\Resource\Armor\Light;

use Database\Seeders\Resource\ResourceMain;

class Upper extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Reinforced Mithril Shirt Fabric',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Reinforced Mithril Shirt',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeCImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Plated Leather Armor Fragment',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Plated Leather Armor',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeCImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Rind Leather Armor Design',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Rind Leather Armor',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeCImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Theca Leather Armor Pattern',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Theca Leather Armor',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeCImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Zubei\'s Leather Shirt Fabric',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Zubei\'s Leather Shirt (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Zubei\'s Leather Shirt',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeBImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Dark Crystal Leather Armor Pattern',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Dark Crystal Leather Armor (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeAImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Dynasty Leather Armor Piece',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Dynasty Leather Armor (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Moirai Leather Breastplate Piece',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Moirai Leather Breastplate (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Vesper Leather Breastplate Piece',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Vesper Leather Breastplate (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];
    }
}
