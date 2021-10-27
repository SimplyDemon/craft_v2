<?php

namespace Database\Seeders\Resource\Armor\Light;

use Database\Seeders\Resource\ResourceMain;

class FullBody extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'name'       => 'Draconic Leather Armor Part',
            'price_sell' => 100000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Draconic Leather Armor (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];
    }
}
