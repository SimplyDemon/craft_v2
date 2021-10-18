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
            'name'     => 'Adamantine',
            'cost'     => 98000,
            'filePath' => '/image/resource/Adamantine.png',
            'pathTo'   => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'     => 'Crystal S',
            'cost'     => 49000,
            'filePath' => '/image/resource/Crystal.png',
            'pathTo'   => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'     => 'Durable Metal Plate',
            'cost'     => 25000,
            'filePath' => '/image/resource/Durable Metal Plate.png',
            'pathTo'   => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'     => 'Enria',
            'cost'     => 26000,
            'filePath' => '/image/resource/Enria.png',
            'pathTo'   => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'     => 'Gemstone (S-grade)',
            'cost'     => 500000,
            'filePath' => '/image/resource/Gemstone (S-grade).png',
            'pathTo'   => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'     => 'High-grade Suede',
            'cost'     => 6000,
            'filePath' => '/image/resource/High-grade Suede.png',
            'pathTo'   => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'     => 'Mithril Alloy',
            'cost'     => 25000,
            'filePath' => '/image/resource/Mithril Alloy.png',
            'pathTo'   => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'     => 'Synthetic Cokes',
            'cost'     => 11000,
            'filePath' => '/image/resource/Synthetic Cokes.png',
            'pathTo'   => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'     => 'Warsmith Holder',
            'cost'     => 5000000,
            'filePath' => '/image/resource/Warsmith Holder.png',
            'pathTo'   => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'     => 'Saint Spear Blade',
            'cost'     => 100000,
            'filePath' => '/image/resource/Weapon Blade.png',
            'pathTo'   => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'     => 'Dynasty Knife Piece',
            'cost'     => 1800000,
            'filePath' => '/image/resource/Weapon Blade.png',
            'pathTo'   => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'     => 'Recipe: Dynasty Knife (60%)',
            'cost'     => 4000000,
            'filePath' => '/image/resource/Recipe S.png',
            'pathTo'   => 'app/public/uploads/resources/',
        ];
        $resources[] = [
            'name'     => 'Recipe: Saint Spear (60%)',
            'cost'     => 800000,
            'filePath' => '/image/resource/Recipe S.png',
            'pathTo'   => 'app/public/uploads/resources/',
        ];

        foreach ( $resources as $resource ) {
            $this->createResource(
                $resource['name'],
                $resource['cost'],
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
    protected function createResource( string $name, int $cost, string $filePath, string $pathTo ): Resource {
        return Resource::create( [
            'name' => $name,
            'slug' => Str::slug( $name, '-' ),
            'cost' => $cost,
            'img'  => copyFile( $filePath, $pathTo ),
        ] );
    }

}
