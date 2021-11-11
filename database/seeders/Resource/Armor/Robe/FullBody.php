<?php

namespace Database\Seeders\Resource\Armor\Robe;

use Database\Seeders\Resource\ResourceMain;

class FullBody extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Major Arcana Robe Part',
            'price_sell' => 35000,
            'price_buy'  => 35000,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Major Arcana Robe (60%)',
            'price_sell' => 3500000,
            'price_buy'  => 3500000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];
    }
}
