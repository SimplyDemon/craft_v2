<?php

namespace Database\Seeders\Resource\Armor\Light;

use Database\Seeders\Resource\ResourceMain;

class Lower extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Reinforced Mithril Gaiters Fragment',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Reinforced Mithril Gaiters',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeCImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Plated Leather Gaiters Material',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Plated Leather Gaiters',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeCImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Rind Leather Gaiters Material',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Rind Leather Gaiters',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeCImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Theca Leather Gaiters Pattern',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Theca Leather Gaiters',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeCImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Zubei\'s Leather Gaiters Texture',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Zubei\'s Leather Gaiters (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Zubei\'s Leather Gaiters',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Dark Crystal Leggings Design',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Dark Crystal Leggings (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Dynasty Leather Leggings Piece',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Dynasty Leather Leggings (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Moirai Leather Leggings Piece',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Moirai Leather Leggings (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                  => 'armor',
            'name'                  => 'Vesper Leather Leggings Piece',
            'price_sell'            => 0,
            'price_buy'             => 0,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Vesper Leather Leggings (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];
    }
}
