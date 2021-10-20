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
        $resources   = [];
        $resources[] = [
            'name'       => 'Crystal S',
            'price_sell' => 48000,
            'price_buy'  => 36000,
        ];
        $resources[] = [
            'name'       => 'Gemstone (S-grade)',
            'price_sell' => 415000,
            'price_buy'  => 405000,
        ];

        $resources[] = [
            'name'       => 'Adamantine',
            'price_sell' => 60000,
            'price_buy'  => 43000,
        ];
        $resources[] = [
            'name'       => 'Crafted Leather',
            'price_sell' => 32000,
            'price_buy'  => 21000,
        ];
        $resources[] = [
            'name'       => 'Durable Metal Plate',
            'price_sell' => 32000,
            'price_buy'  => 21000,
        ];
        $resources[] = [
            'name'       => 'Enria',
            'price_sell' => 20000,
            'price_buy'  => 16500,
        ];
        $resources[] = [
            'name'       => 'High-grade Suede',
            'price_sell' => 6000,
            'price_buy'  => 2250,
        ];
        $resources[] = [
            'name'       => 'Mithril Alloy',
            'price_sell' => 24000,
            'price_buy'  => 22600,
        ];
        $resources[] = [
            'name'       => 'Synthetic Cokes',
            'price_sell' => 12000,
            'price_buy'  => 11100,
        ];
        $resources[] = [
            'name'       => 'Warsmith Holder',
            'price_sell' => 5000000,
            'price_buy'  => 5000000,
        ];


        $resources[] = [
            'name'       => 'Saint Spear Blade',
            'price_sell' => 100000,
            'price_buy'  => 60000,
            'filePath'   => 'image/resource/Weapon Blade.png',
        ];
        $resources[] = [
            'name'       => 'Dynasty Knife Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => 'image/resource/Weapon Blade.png',
        ];
        $resources[] = [
            'name'       => 'Recipe: Dynasty Knife (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => 'image/resource/Recipe S.png',
        ];
        $resources[] = [
            'name'       => 'Recipe: Saint Spear (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => 'image/resource/Recipe S.png',
        ];

        foreach ( $resources as $resource ) {
            $args = [];

            $this->createResource(
                $resource['name'],
                $resource['price_sell'],
                $resource[ 'price_buy' ?? null ],
                $resource['filePath'] ?? null,
            );
        }
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

}
