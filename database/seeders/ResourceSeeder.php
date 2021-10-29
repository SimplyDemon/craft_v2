<?php

namespace Database\Seeders;

use App\Models\Resource;
use Database\Seeders\Resource\Armor\Light\Boot;
use Database\Seeders\Resource\Armor\Light\FullBody;
use Database\Seeders\Resource\Armor\Light\Gloves;
use Database\Seeders\Resource\Armor\Light\Helmet;
use Database\Seeders\Resource\Armor\Light\Lower;
use Database\Seeders\Resource\Armor\Light\Upper;
use Database\Seeders\Resource\Jewelry\Earring;
use Database\Seeders\Resource\Jewelry\Necklace;
use Database\Seeders\Resource\Jewelry\Ring;
use Database\Seeders\Resource\Shield;
use Database\Seeders\Resource\Sigil;
use Database\Seeders\Resource\Weapon\Blunt;
use Database\Seeders\Resource\Weapon\Bow;
use Database\Seeders\Resource\Weapon\Dagger;
use Database\Seeders\Resource\Weapon\Fist;
use Database\Seeders\Resource\Weapon\Polearm;
use Database\Seeders\Resource\Weapon\Sword;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ResourceSeeder extends Seeder {
    public array $resources;
    public string $pieceFolderPathWeapon;
    public string $pieceFolderPathJewelry;
    public string $recipeFolderPath;
    public string $defaultWeaponBladeFilePath;
    public string $recipeSImageFilePath;
    public string $recipeBImageFilePath;
    public string $pieceFolderPathArmor;
    public string $pieceFolderPathArmorLight;
    public string $pieceFolderPathArmorHeavy;
    public string $pieceFolderPathArmorRobe;
    public string $defaultArmorPieceFilePath;

    public function __construct() {
        $this->setup();
    }

    public function run() {
        $this->addResources();
        $this->addRecipesPieces();

        $this->seed();
    }

    protected function setup() {
        $this->resources              = [];
        $this->pieceFolderPathWeapon  = 'image/resource/piece/weapon/';
        $this->pieceFolderPathArmor   = 'image/resource/piece/armor/';
        $this->pieceFolderPathJewelry = 'image/resource/piece/jewelry/';
        $this->recipeFolderPath       = 'image/resource/recipe/';

        $this->pieceFolderPathArmorLight = $this->pieceFolderPathArmor . 'light/';
        $this->pieceFolderPathArmorHeavy = $this->pieceFolderPathArmor . 'heavy/';
        $this->pieceFolderPathArmorRobe  = $this->pieceFolderPathArmor . 'robe/';


        $this->defaultWeaponBladeFilePath = $this->pieceFolderPathWeapon . 'Blade.png';
        $this->defaultArmorPieceFilePath  = $this->pieceFolderPathArmor . 'Piece.png';

        $this->recipeSImageFilePath = $this->recipeFolderPath . 'Recipe S.png';
        $this->recipeBImageFilePath = $this->recipeFolderPath . 'Recipe B.png';
    }

    protected function addRecipesPieces() {
        $this->addRecipesPiecesWeapon();
        $this->addRecipesPiecesArmor();
        $this->addRecipesPiecesJewelry();
        $this->addRecipesPiecesShield();
        $this->addRecipesPiecesSigil();
    }

    protected function addRecipesPiecesWeapon() {
        $blunt          = new Blunt();
        $bluntResources = $blunt->getResources();

        $bow          = new Bow();
        $bowResources = $bow->getResources();

        $dagger          = new Dagger();
        $daggerResources = $dagger->getResources();

        $fist          = new Fist();
        $fistResources = $fist->getResources();

        $polearm          = new Polearm();
        $polearmResources = $polearm->getResources();

        $sword          = new Sword();
        $swordResources = $sword->getResources();

        $this->resources = array_merge( $this->resources, $bluntResources, $bowResources, $daggerResources, $fistResources, $polearmResources, $swordResources );
    }

    protected function addRecipesPiecesArmor() {
        $this->addRecipesPiecesArmorLight();
        $this->addRecipesPiecesArmorHeavy();
        $this->addRecipesPiecesArmorRobe();
    }

    protected function addRecipesPiecesArmorLight() {
        $boot          = new Boot();
        $bootResources = $boot->getResources();

        $fullBody          = new FullBody();
        $fullBodyResources = $fullBody->getResources();

        $gloves          = new Gloves();
        $glovesResources = $gloves->getResources();

        $helmet          = new Helmet();
        $helmetResources = $helmet->getResources();

        $lower          = new Lower();
        $lowerResources = $lower->getResources();

        $upper          = new Upper();
        $upperResources = $upper->getResources();

        $this->resources = array_merge( $this->resources, $bootResources, $fullBodyResources, $glovesResources, $helmetResources, $lowerResources, $upperResources );
    }

    protected function addRecipesPiecesArmorHeavy() {
        $boot          = new \Database\Seeders\Resource\Armor\Heavy\Boot();
        $bootResources = $boot->getResources();

        $gloves          = new \Database\Seeders\Resource\Armor\Heavy\Gloves();
        $glovesResources = $gloves->getResources();

        $helmet          = new \Database\Seeders\Resource\Armor\Heavy\Helmet();
        $helmetResources = $helmet->getResources();

        $lower          = new \Database\Seeders\Resource\Armor\Heavy\Lower();
        $lowerResources = $lower->getResources();

        $upper          = new \Database\Seeders\Resource\Armor\Heavy\Upper();
        $upperResources = $upper->getResources();

        $this->resources = array_merge( $this->resources, $bootResources, $glovesResources, $helmetResources, $lowerResources, $upperResources );
    }

    protected function addRecipesPiecesArmorRobe() {
        $boot          = new \Database\Seeders\Resource\Armor\Robe\Boot();
        $bootResources = $boot->getResources();

        $fullBody          = new \Database\Seeders\Resource\Armor\Robe\FullBody();
        $fullBodyResources = $fullBody->getResources();

        $gloves          = new \Database\Seeders\Resource\Armor\Robe\Gloves();
        $glovesResources = $gloves->getResources();

        $helmet          = new \Database\Seeders\Resource\Armor\Robe\Helmet();
        $helmetResources = $helmet->getResources();

        $lower          = new \Database\Seeders\Resource\Armor\Robe\Lower();
        $lowerResources = $lower->getResources();

        $upper          = new \Database\Seeders\Resource\Armor\Robe\Upper();
        $upperResources = $upper->getResources();

        $this->resources = array_merge( $this->resources, $bootResources, $fullBodyResources, $glovesResources, $helmetResources, $lowerResources, $upperResources );
    }

    protected function addRecipesPiecesJewelry() {
        $necklace          = new Necklace();
        $necklaceResources = $necklace->getResources();

        $earring          = new Earring();
        $earringResources = $earring->getResources();

        $ring          = new Ring();
        $ringResources = $ring->getResources();

        $this->resources = array_merge( $this->resources, $necklaceResources, $earringResources, $ringResources );
    }

    protected function addRecipesPiecesShield() {
        $shield          = new Shield();
        $shieldResources = $shield->getResources();

        $this->resources = array_merge( $this->resources, $shieldResources );
    }

    protected function addRecipesPiecesSigil() {
        $sigil          = new Sigil();
        $sigilResources = $sigil->getResources();

        $this->resources = array_merge( $this->resources, $sigilResources );
    }

    protected function addResources() {
        $resources          = new \Database\Seeders\Resource\Resource\Resource();
        $resourcesResources = $resources->getResources();

        $this->resources = array_merge( $this->resources, $resourcesResources );
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
    protected function createResource( string $name, int $priceSell, int $priceBuy = null, $filePath = null, $type = 'resource' ): Resource {
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
            'type'       => $type,
        ] );
    }


    protected function seed() {
        foreach ( $this->resources as $resource ) {
            if ( isset( $resource['is_custom_piece_weapon'] ) && $resource['is_custom_piece_weapon'] ) {
                $filePath = "{$this->pieceFolderPathWeapon}{$resource['name']}.png";
            } else if ( isset( $resource['is_custom_piece_armor'] ) && $resource['is_custom_piece_armor'] ) {
                $filePath = "{$this->pieceFolderPathArmor}{$resource['name']}.png";
            } else if ( isset( $resource['is_custom_piece_jewelry'] ) && $resource['is_custom_piece_jewelry'] ) {
                $filePath = "{$this->pieceFolderPathJewelry}{$resource['name']}.png";
            } else if ( isset( $resource['filePath'] ) ) {
                $filePath = $resource['filePath'];
            } else {
                $filePath = null;
            }

            $this->createResource(
                $resource['name'],
                $resource['price_sell'],
                $resource['price_buy'] ?? null,
                $filePath,
                $resource['type'] ?? 'resource',
            );
        }
    }
}
