<?php

namespace Database\Seeders\Resource\Armor\Light;

use Database\Seeders\ResourceSeeder;

class Upper {
    protected array $resources;
    protected ResourceSeeder $resourceSeeder;

    public function __construct() {
        $this->resources      = [];
        $this->resourceSeeder = new ResourceSeeder();
        $this->add();
    }

    public function getResources(): array {
        return $this->resources;
    }

    protected function add() {
        $this->resources[] = [
            'name'       => 'Dynasty Leather Armor Piece',
            'price_sell' => 100000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Leather Armor (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                  => 'Moirai Leather Breastplate Piece',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Moirai Leather Breastplate (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                  => 'Vesper Leather Breastplate Piece',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Leather Breastplate (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];
    }
}
