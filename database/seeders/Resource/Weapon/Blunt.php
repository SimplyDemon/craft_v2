<?php

namespace Database\Seeders\Resource\Weapon;

use Database\Seeders\Resource\ResourceMain;

class Blunt extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Basalt Battlehammer Head',
            'price_sell'             => 100000,
            'price_buy'              => 100000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Basalt Battlehammer (60%)',
            'price_sell' => 370000,
            'price_buy'  => 370000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Imperial Staff Head',
            'price_sell'             => 100000,
            'price_buy'              => 100000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Imperial Staff (60%)',
            'price_sell' => 390000,
            'price_buy'  => 390000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Dragon Hunter Axe Blade',
            'price_sell' => 100000,
            'price_buy'  => 100000,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Dragon Hunter Axe (60%)',
            'price_sell' => 370000,
            'price_buy'  => 370000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Arcana Mace Head',
            'price_sell'             => 600000,
            'price_buy'              => 600000,
            'filePath'               => $this->resourceSeeder->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Arcana Mace (60%)',
            'price_sell' => 370000,
            'price_buy'  => 370000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Dynasty Cudgel Piece',
            'price_sell'             => 1200000,
            'price_buy'              => 1200000,
            'filePath'               => $this->resourceSeeder->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Dynasty Cudgel (60%)',
            'price_sell' => 3000000,
            'price_buy'  => 3000000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Dynasty Mace Piece',
            'price_sell'             => 1400000,
            'price_buy'              => 1400000,
            'filePath'               => $this->resourceSeeder->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Dynasty Mace (60%)',
            'price_sell' => 13500000,
            'price_buy'  => 13500000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Dynasty Staff Piece',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Dynasty Staff (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Dynasty Crusher Piece',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Dynasty Crusher (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Icarus Hammer Piece',
            'price_sell'             => 0,
            'price_buy'              => 0,
            'filePath'               => $this->resourceSeeder->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Icarus Hammer (60%)',
            'price_sell' => 13000000,
            'price_buy'  => 13000000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Icarus Hall Piece',
            'price_sell'             => 2500000,
            'price_buy'              => 2500000,
            'filePath'               => $this->resourceSeeder->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Icarus Hall (60%)',
            'price_sell' => 20000000,
            'price_buy'  => 20000000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Vesper Avenger Piece',
            'price_sell'             => 0,
            'price_buy'              => 0,
            'filePath'               => $this->resourceSeeder->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Vesper Avenger (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Vesper Retributer Piece',
            'price_sell'             => 0,
            'price_buy'              => 0,
            'filePath'               => $this->resourceSeeder->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Vesper Retributer (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Vesper Caster Piece',
            'price_sell'             => 0,
            'price_buy'              => 0,
            'filePath'               => $this->resourceSeeder->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Vesper Caster (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'type'                   => 'weapon',
            'name'                   => 'Vesper Singer Piece',
            'price_sell'             => 0,
            'price_buy'              => 0,
            'filePath'               => $this->resourceSeeder->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'type'       => 'weapon',
            'name'       => 'Recipe: Vesper Singer (60%)',
            'price_sell' => 0,
            'price_buy'  => 0,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

    }
}
