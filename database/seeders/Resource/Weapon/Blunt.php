<?php

namespace Database\Seeders\Resource\Weapon;

use Database\Seeders\Resource\ResourceMain;

class Blunt extends ResourceMain {
    protected function add() {
        $this->resources[] = [
            'name'                   => 'Basalt Battlehammer Head',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Basalt Battlehammer (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Imperial Staff Head',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Imperial Staff (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Dragon Hunter Axe Blade',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dragon Hunter Axe (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Arcana Mace Head',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'filePath'               => $this->resourceSeeder->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Arcana Mace (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Dynasty Cudgel Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'filePath'               => $this->resourceSeeder->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Cudgel (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Dynasty Mace Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'filePath'               => $this->resourceSeeder->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Mace (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Dynasty Staff Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Staff (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Dynasty Crusher Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->resourceSeeder->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Crusher (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Icarus Hammer Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'filePath'               => $this->resourceSeeder->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Icarus Hammer (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Icarus Hall Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'filePath'               => $this->resourceSeeder->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Icarus Hall (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Avenger Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'filePath'               => $this->resourceSeeder->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Avenger (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Retributer Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'filePath'               => $this->resourceSeeder->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Retributer (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Caster Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'filePath'               => $this->resourceSeeder->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Caster (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Singer Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'filePath'               => $this->resourceSeeder->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Singer (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->resourceSeeder->recipeSImageFilePath,
        ];

    }
}
