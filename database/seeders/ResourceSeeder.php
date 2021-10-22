<?php

namespace Database\Seeders;

use App\Models\Resource;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ResourceSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->addResources();
        $this->addRecipesPieces();
    }

    /**
     * Copy file from resources path to another directory
     *
     * @param string $name
     * @param int $priceSell
     * @param int $priceBuy
     *
     * @return Resource
     */
    protected function createResource( string $name, int $priceSell, int $priceBuy = null, $filePath = null ): Resource {
        $imagePath = 'resource';
        if ( ! $filePath ) {
            $filePath = "image/$imagePath/" . $name . '.png';
        }

        return Resource::create( [
            'name'       => $name,
            'slug'       => Str::slug( $name, '-' ),
            'price_sell' => $priceSell,
            'price_buy'  => $priceBuy,
            'img'        => copyFile( $filePath, "app/public/uploads/$imagePath/" ),
        ] );
    }

    protected function addResources() {
        $resources = [];

        $resources[] = [
            'name'       => 'Adamantine',
            'price_sell' => 50000,
            'price_buy'  => 43000,
        ];
        $resources[] = [
            'name'       => 'Crafted Leather',
            'price_sell' => 10000,
            'price_buy'  => 21000,
        ];
        $resources[] = [
            'name'       => 'Durable Metal Plate',
            'price_sell' => 24000,
            'price_buy'  => 21000,
        ];
        $resources[] = [
            'name'       => 'Enria',
            'price_sell' => 22000,
            'price_buy'  => 16500,
        ];
        $resources[] = [
            'name'       => 'High-grade Suede',
            'price_sell' => 6000,
            'price_buy'  => 2250,
        ];
        $resources[] = [
            'name'       => 'Mithril Alloy',
            'price_sell' => 22000,
            'price_buy'  => 22600,
        ];
        $resources[] = [
            'name'       => 'Synthetic Cokes',
            'price_sell' => 10500,
            'price_buy'  => 11100,
        ];


        $resources[] = [
            'name'       => 'Warsmith Holder',
            'price_sell' => 5000000,
            'price_buy'  => 5000000,
        ];
        $resources[] = [
            'name'       => 'Craftsman Mold',
            'price_sell' => 1600000,
            'price_buy'  => 5000000,
        ];
        $resources[] = [
            'name'       => 'Artisans Frame',
            'price_sell' => 220000,
            'price_buy'  => 5000000,
        ];

        $resources[] = [
            'name'       => 'Crystal S',
            'price_sell' => 40000,
            'price_buy'  => 36000,
        ];
        $resources[] = [
            'name'       => 'Crystal B',
            'price_sell' => 15000,
            'price_buy'  => 36000,
        ];
        $resources[] = [
            'name'       => 'Gemstone (S-grade)',
            'price_sell' => 415000,
            'price_buy'  => 405000,
        ];
        $resources[] = [
            'name'       => 'Gemstone (B-grade)',
            'price_sell' => 11600,
            'price_buy'  => 405000,
        ];

        foreach ( $resources as $resource ) {

            $this->createResource(
                $resource['name'],
                $resource['price_sell'],
                $resource[ 'price_buy' ?? null ],
                $resource['filePath'] ?? null,
            );
        }
    }

    protected function addRecipesPieces() {
        $resources        = [];
        $pieceFolderPath  = 'image/resource/piece/';
        $recipeFolderPath = 'image/resource/recipe/';

        $defaultWeaponBladeFilePath = $pieceFolderPath . 'Weapon Blade.png';
        $recipeSImageFilePath       = $recipeFolderPath . 'Recipe S.png';
        $recipeBImageFilePath       = $recipeFolderPath . 'Recipe B.png';

        $resources[] = [
            'name'       => 'Saint Spear Blade',
            'price_sell' => 100000,
            'price_buy'  => 60000,
            'filePath'   => $defaultWeaponBladeFilePath,
        ];
        $resources[] = [
            'name'       => 'Recipe: Saint Spear (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $recipeSImageFilePath,
        ];

        $resources[] = [
            'name'       => 'Damascus Sword Blade',
            'price_sell' => 30000,
            'price_buy'  => 60000,
            'filePath'   => $defaultWeaponBladeFilePath,
        ];

        $resources[] = [
            'name'       => 'Recipe: Damascus Sword (60%)',
            'price_sell' => 1000000,
            'price_buy'  => 3200000,
            'filePath'   => $recipeBImageFilePath,
        ];
        $resources[] = [
            'name'       => 'Recipe: Damascus Sword',
            'price_sell' => 5000000,
            'price_buy'  => 3200000,
            'filePath'   => $recipeBImageFilePath,
        ];

        $resources[] = [
            'name'       => 'Dynasty Knife Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $defaultWeaponBladeFilePath,
        ];
        $resources[] = [
            'name'       => 'Recipe: Dynasty Knife (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $recipeSImageFilePath,
        ];

        $resources[] = [
            'name'       => 'Forgotten Blade Edge',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $defaultWeaponBladeFilePath,
        ];
        $resources[] = [
            'name'       => 'Recipe: Forgotten Blade (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $recipeSImageFilePath,
        ];

        $resources[] = [
            'name'       => 'Heavens Divider Edge',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $defaultWeaponBladeFilePath,
        ];
        $resources[] = [
            'name'       => 'Recipe: Heavens Divider (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $recipeSImageFilePath,
        ];

        $resources[] = [
            'name'       => 'Dynasty Sword Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $defaultWeaponBladeFilePath,
        ];
        $resources[] = [
            'name'       => 'Recipe: Dynasty Sword (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $recipeSImageFilePath,
        ];

        $resources[] = [
            'name'       => 'Dynasty Blade Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $defaultWeaponBladeFilePath,
        ];
        $resources[] = [
            'name'       => 'Recipe: Dynasty Blade (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $recipeSImageFilePath,
        ];

        $resources[] = [
            'name'       => 'Dynasty Phantom Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $defaultWeaponBladeFilePath,
        ];
        $resources[] = [
            'name'       => 'Recipe: Dynasty Phantom (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $recipeSImageFilePath,
        ];

        $resources[] = [
            'name'       => 'Recipe: Icarus Sawsword (60%)',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $defaultWeaponBladeFilePath,
        ];
        $resources[] = [
            'name'       => 'Icarus Sawsword Piece',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $recipeSImageFilePath,
        ];

        $resources[] = [
            'name'       => 'Icarus Spirit Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $defaultWeaponBladeFilePath,
        ];
        $resources[] = [
            'name'       => 'Recipe: Icarus Spirit (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $recipeSImageFilePath,
        ];

        $resources[] = [
            'name'       => 'Icarus Heavy Arms Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $defaultWeaponBladeFilePath,
        ];
        $resources[] = [
            'name'       => 'Recipe: Icarus Heavy Arms (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $recipeSImageFilePath,
        ];

        $resources[] = [
            'name'                       => 'Vesper Cutter Piece',
            'price_sell'                 => 1800000,
            'price_buy'                  => 600000,
            'is_non_default_piece_image' => true,
        ];
        $resources[] = [
            'name'       => 'Recipe: Vesper Cutter (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $recipeSImageFilePath,
        ];

        $resources[] = [
            'name'                       => 'Vesper Slasher Piece',
            'price_sell'                 => 1800000,
            'price_buy'                  => 600000,
            'is_non_default_piece_image' => true,
        ];
        $resources[] = [
            'name'       => 'Recipe: Vesper Slasher (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $recipeSImageFilePath,
        ];

        $resources[] = [
            'name'                       => 'Vesper Buster Piece',
            'price_sell'                 => 1800000,
            'price_buy'                  => 600000,
            'is_non_default_piece_image' => true,
        ];
        $resources[] = [
            'name'       => 'Recipe: Vesper Buster (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $recipeSImageFilePath,
        ];

        $resources[] = [
            'name'       => 'Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $defaultWeaponBladeFilePath,
        ];
        $resources[] = [
            'name'       => 'Recipe',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $recipeSImageFilePath,
        ];


        foreach ( $resources as $resource ) {
            $filePath = isset( $resource['is_non_default_piece_image'] ) && $resource['is_non_default_piece_image'] ? "{$pieceFolderPath}{$resource['name']}.png" : $resource['filePath'] ?? null;

            $this->createResource(
                $resource['name'],
                $resource['price_sell'],
                $resource[ 'price_buy' ?? null ],
                $filePath,
            );
        }
    }

}
