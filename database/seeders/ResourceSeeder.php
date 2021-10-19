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
            'name'       => 'Adamantine',
            'price_sell' => 60000,
            'price_buy'  => 43000,
            'filePath'   => 'image/resource/Adamantine.png',
            'pathTo'     => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'       => 'Crystal S',
            'price_sell' => 48000,
            'price_buy'  => 36000,
            'filePath'   => 'image/resource/Crystal.png',
            'pathTo'     => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'       => 'Durable Metal Plate',
            'price_sell' => 32000,
            'price_buy'  => 21000,
            'filePath'   => 'image/resource/Durable Metal Plate.png',
            'pathTo'     => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'       => 'Enria',
            'price_sell' => 20000,
            'price_buy'  => 16500,
            'filePath'   => 'image/resource/Enria.png',
            'pathTo'     => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'       => 'Gemstone (S-grade)',
            'price_sell' => 415000,
            'price_buy'  => 405000,
            'filePath'   => 'image/resource/Gemstone (S-grade).png',
            'pathTo'     => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'       => 'High-grade Suede',
            'price_sell' => 6000,
            'price_buy'  => 2250,
            'filePath'   => 'image/resource/High-grade Suede.png',
            'pathTo'     => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'       => 'Mithril Alloy',
            'price_sell' => 24000,
            'price_buy'  => 22600,
            'filePath'   => 'image/resource/Mithril Alloy.png',
            'pathTo'     => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'       => 'Synthetic Cokes',
            'price_sell' => 12000,
            'price_buy'  => 11100,
            'filePath'   => 'image/resource/Synthetic Cokes.png',
            'pathTo'     => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'       => 'Warsmith Holder',
            'price_sell' => 5000000,
            'price_buy'  => 5000000,
            'filePath'   => 'image/resource/Warsmith Holder.png',
            'pathTo'     => 'app/public/uploads/resources/',
        ];


        $resources[] = [
            'name'       => 'Saint Spear Blade',
            'price_sell' => 100000,
            'price_buy'  => 60000,
            'filePath'   => 'image/resource/Weapon Blade.png',
            'pathTo'     => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'       => 'Dynasty Knife Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => 'image/resource/Weapon Blade.png',
            'pathTo'     => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'       => 'Recipe: Dynasty Knife (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => 'image/resource/Recipe S.png',
            'pathTo'     => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'       => 'Recipe: Saint Spear (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => 'image/resource/Recipe S.png',
            'pathTo'     => 'app/public/uploads/resources/',
        ];

        foreach ( $resources as $resource ) {
            $this->createResource(
                $resource['name'],
                $resource['price_sell'],
                $resource['price_buy'],
                $resource['filePath'],
                $resource['pathTo'],
            );
        }


    }

    /**
     * Copy file from resources path to another directory
     *
     * @param string $name
     * @param int $cost
     * @param string $filePath Relative path to file from resource path
     * @param string $pathTo Relative path to directory from storage path
     *
     * @return Resource
     */
    protected function createResource( string $name, int $priceSell, int $priceBuy, string $filePath, string $pathTo ): Resource {
        return Resource::create( [
            'name'       => $name,
            'slug'       => Str::slug( $name, '-' ),
            'price_sell' => $priceSell,
            'price_buy'  => $priceBuy,
            'img'        => copyFile( $filePath, $pathTo ),
        ] );
    }

}
