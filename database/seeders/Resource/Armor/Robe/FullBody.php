<?php

namespace Database\Seeders\Resource\Armor\Robe;

use Database\Seeders\Resource\ResourceMain;

class FullBody extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'name'       => 'Major Arcana Robe Part',
            'price_sell' => 100000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Major Arcana Robe (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];
    }
}
