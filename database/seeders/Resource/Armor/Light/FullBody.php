<?php

namespace Database\Seeders\Resource\Armor\Light;

use Database\Seeders\Resource\ResourceMain;

class FullBody extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Draconic Leather Armor Part',
            'price_sell' => 900000,
            'price_buy'  => 900000,
            'filePath'   => $this->resourceSeeder->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'type'       => 'armor',
            'name'       => 'Recipe: Draconic Leather Armor (60%)',
            'price_sell' => 25000000,
            'price_buy'  => 25000000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];
    }
}
