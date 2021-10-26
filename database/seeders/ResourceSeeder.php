<?php

namespace Database\Seeders;

use App\Models\Resource;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ResourceSeeder extends Seeder {
    protected array $resources;
    protected string $pieceFolderPathWeapon;
    protected string $recipeFolderPath;
    protected string $defaultWeaponBladeFilePath;
    protected string $recipeSImageFilePath;
    protected string $recipeBImageFilePath;
    protected string $pieceFolderPathArmor;
    protected string $pieceFolderPathArmorLight;
    protected string $pieceFolderPathArmorHeavy;
    protected string $pieceFolderPathArmorRobe;
    protected string $defaultArmorPieceFilePath;

    public function run() {
        $this->setup();
        $this->addResources();
        $this->addRecipesPieces();

        $this->seed();
    }

    protected function setup() {
        $this->resources             = [];
        $this->pieceFolderPathWeapon = 'image/resource/piece/weapon/';
        $this->pieceFolderPathArmor  = 'image/resource/piece/armor/';
        $this->recipeFolderPath      = 'image/resource/recipe/';

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
    }

    protected function addRecipesPiecesWeapon() {
        $this->addRecipesPiecesSwords();
        $this->addRecipesPiecesBlunts();
        $this->addRecipesPiecesPolearms();
        $this->addRecipesPiecesBows();
        $this->addRecipesPiecesDaggers();
        $this->addRecipesPiecesFists();
    }

    protected function addRecipesPiecesArmor() {
        $this->addRecipesPiecesArmorLight();
    }

    protected function addRecipesPiecesArmorLight() {
        $this->addRecipesPiecesArmorLightFullBody();
        $this->addRecipesPiecesArmorLightUpper();
        $this->addRecipesPiecesArmorLightLower();
        $this->addRecipesPiecesArmorLightHelmet();
        $this->addRecipesPiecesArmorLightBoot();
        $this->addRecipesPiecesArmorLightGloves();
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

        $this->resources[] = [
            'name'       => 'Adamantine',
            'price_sell' => 50000,
            'price_buy'  => 43000,
        ];
        $this->resources[] = [
            'name'       => 'Crafted Leather',
            'price_sell' => 10000,
            'price_buy'  => 21000,
        ];
        $this->resources[] = [
            'name'       => 'Durable Metal Plate',
            'price_sell' => 24000,
            'price_buy'  => 21000,
        ];
        $this->resources[] = [
            'name'       => 'Enria',
            'price_sell' => 22000,
            'price_buy'  => 16500,
        ];
        $this->resources[] = [
            'name'       => 'High-grade Suede',
            'price_sell' => 6000,
            'price_buy'  => 2250,
        ];
        $this->resources[] = [
            'name'       => 'Mithril Alloy',
            'price_sell' => 22000,
            'price_buy'  => 22600,
        ];
        $this->resources[] = [
            'name'       => 'Synthetic Cokes',
            'price_sell' => 10500,
            'price_buy'  => 11100,
        ];
        $this->resources[] = [
            'name'       => 'Coarse Bone Powder',
            'price_sell' => 10500,
            'price_buy'  => 11100,
        ];
        $this->resources[] = [
            'name'       => 'Compound Braid',
            'price_sell' => 10500,
            'price_buy'  => 11100,
        ];
        $this->resources[] = [
            'name'       => 'Oriharukon',
            'price_sell' => 10500,
            'price_buy'  => 11100,
        ];
        $this->resources[] = [
            'name'       => 'Metallic Fiber',
            'price_sell' => 10500,
            'price_buy'  => 11100,
        ];
        $this->resources[] = [
            'name'       => 'Asofe',
            'price_sell' => 10500,
            'price_buy'  => 11100,
        ];
        $this->resources[] = [
            'name'       => 'Orichalcum',
            'price_sell' => 10500,
            'price_buy'  => 11100,
        ];


        $this->resources[] = [
            'name'       => 'Warsmith Holder',
            'price_sell' => 5000000,
            'price_buy'  => 5000000,
        ];
        $this->resources[] = [
            'name'       => 'Craftsman Mold',
            'price_sell' => 1600000,
            'price_buy'  => 5000000,
        ];
        $this->resources[] = [
            'name'       => 'Artisans Frame',
            'price_sell' => 220000,
            'price_buy'  => 5000000,
        ];
        $this->resources[] = [
            'name'       => 'Arcsmith Anvil',
            'price_sell' => 220000,
            'price_buy'  => 5000000,
        ];
        $this->resources[] = [
            'name'       => 'Reorins Mold',
            'price_sell' => 220000,
            'price_buy'  => 5000000,
        ];
        $this->resources[] = [
            'name'       => 'Warsmith Mold',
            'price_sell' => 220000,
            'price_buy'  => 5000000,
        ];

        $this->resources[] = [
            'name'       => 'Crystal S',
            'price_sell' => 40000,
            'price_buy'  => 36000,
        ];
        $this->resources[] = [
            'name'       => 'Crystal B',
            'price_sell' => 15000,
            'price_buy'  => 36000,
        ];
        $this->resources[] = [
            'name'       => 'Gemstone (S-grade)',
            'price_sell' => 415000,
            'price_buy'  => 405000,
        ];
        $this->resources[] = [
            'name'       => 'Gemstone (B-grade)',
            'price_sell' => 11600,
            'price_buy'  => 405000,
        ];

    }

    protected function addRecipesPiecesBlunts() {

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
            'filePath'   => $this->recipeSImageFilePath,
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
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Dragon Hunter Axe Blade',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dragon Hunter Axe (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Arcana Mace Head',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'filePath'               => $this->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Arcana Mace (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Dynasty Cudgel Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'filePath'               => $this->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Cudgel (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Dynasty Mace Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'filePath'               => $this->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Mace (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Dynasty Staff Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Staff (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Dynasty Crusher Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Crusher (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Icarus Hammer Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'filePath'               => $this->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Icarus Hammer (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Icarus Hall Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'filePath'               => $this->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Icarus Hall (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Avenger Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'filePath'               => $this->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Avenger (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Retributer Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'filePath'               => $this->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Retributer (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Caster Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'filePath'               => $this->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Caster (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Singer Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'filePath'               => $this->defaultWeaponBladeFilePath,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Singer (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

    }

    protected function addRecipesPiecesSwords() {
        $this->resources[] = [
            'name'       => 'Damascus Sword Blade',
            'price_sell' => 30000,
            'price_buy'  => 60000,
            'filePath'   => $this->defaultWeaponBladeFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Recipe: Damascus Sword (60%)',
            'price_sell' => 1000000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeBImageFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Damascus Sword',
            'price_sell' => 5000000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeBImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Forgotten Blade Edge',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Forgotten Blade (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Heavens Divider Edge',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Heavens Divider (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Dynasty Sword Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Sword (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Dynasty Blade Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Blade (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Dynasty Phantom Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Phantom (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Recipe: Icarus Sawsword (60%)',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Icarus Sawsword Piece',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Icarus Spirit Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Icarus Spirit (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Icarus Heavy Arms Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Icarus Heavy Arms (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Cutter Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Cutter (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Slasher Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Slasher (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Buster Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Buster (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

    }

    protected function addRecipesPiecesPolearms() {
        $this->resources[] = [
            'name'       => 'Saint Spear Blade',
            'price_sell' => 100000,
            'price_buy'  => 60000,
            'filePath'   => $this->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Saint Spear (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Dynasty Halberd Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Halberd (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Icarus Trident Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Icarus Trident (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Stormer Piece',
            'price_sell'             => 1800000,
            'price_buy'              => 600000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Stormer (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];
    }

    protected function addRecipesPiecesBows() {
        $this->resources[] = [
            'name'                   => 'Draconic Bow Shaft',
            'price_sell'             => 100000,
            'price_buy'              => 60000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Draconic Bow (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Dynasty Bow Piece',
            'price_sell'             => 100000,
            'price_buy'              => 60000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Bow (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Icarus Spitter Piece',
            'price_sell'             => 100000,
            'price_buy'              => 60000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Icarus Spitter (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Thrower Piece',
            'price_sell'             => 100000,
            'price_buy'              => 60000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Thrower (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

    }

    protected function addRecipesPiecesDaggers() {
        $this->resources[] = [
            'name'       => 'Angel Slayer Blade',
            'price_sell' => 100000,
            'price_buy'  => 60000,
            'filePath'   => $this->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Angel Slayer (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Dynasty Knife Piece',
            'price_sell' => 1800000,
            'price_buy'  => 600000,
            'filePath'   => $this->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Knife (60%)',
            'price_sell' => 3200000,
            'price_buy'  => 3200000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Icarus Disperser Piece',
            'price_sell' => 100000,
            'price_buy'  => 60000,
            'filePath'   => $this->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Icarus Disperser (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Shaper Piece',
            'price_sell'             => 100000,
            'price_buy'              => 60000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Shaper (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

    }

    protected function addRecipesPiecesFists() {
        $this->resources[] = [
            'name'       => 'Demon Splinter Blade',
            'price_sell' => 100000,
            'price_buy'  => 60000,
            'filePath'   => $this->defaultWeaponBladeFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Demon Splinter (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Dynasty Bagh-Nakh Piece',
            'price_sell'             => 100000,
            'price_buy'              => 60000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Bagh-Nakh (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];


        $this->resources[] = [
            'name'                   => 'Icarus Hand Piece',
            'price_sell'             => 100000,
            'price_buy'              => 60000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Icarus Hand (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                   => 'Vesper Fighter Piece',
            'price_sell'             => 100000,
            'price_buy'              => 60000,
            'is_custom_piece_weapon' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Fighter (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

    }

    protected function addRecipesPiecesArmorLightFullBody() {
        $this->resources[] = [
            'name'       => 'Draconic Leather Armor Part',
            'price_sell' => 100000,
            'price_buy'  => 60000,
            'filePath'   => $this->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Draconic Leather Armor (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

    }

    protected function addRecipesPiecesArmorLightUpper() {
        $this->resources[] = [
            'name'       => 'Dynasty Leather Armor Piece',
            'price_sell' => 100000,
            'price_buy'  => 60000,
            'filePath'   => $this->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Leather Armor (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                  => 'Moirai Leather Breastplate Piece',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Moirai Leather Breastplate (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                  => 'Vesper Leather Breastplate Piece',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Leather Breastplate (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

    }

    protected function addRecipesPiecesArmorLightLower() {
        $this->resources[] = [
            'name'       => 'Dynasty Leather Leggings Piece',
            'price_sell' => 100000,
            'price_buy'  => 60000,
            'filePath'   => $this->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Leather Leggings (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                  => 'Moirai Leather Leggings Piece',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Moirai Leather Leggings (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                  => 'Vesper Leather Leggings Piece',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Leather Leggings (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

    }

    protected function addRecipesPiecesArmorLightHelmet() {
        $this->resources[] = [
            'name'       => 'Draconic Leather Helmet Pattern',
            'price_sell' => 100000,
            'price_buy'  => 60000,
            'filePath'   => $this->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Draconic Leather Helmet (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'       => 'Dynasty Leather Helmet Piece',
            'price_sell' => 100000,
            'price_buy'  => 60000,
            'filePath'   => $this->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Leather Helmet (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                  => 'Moirai Leather Helmet Piece',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Moirai Leather Helmet (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                  => 'Vesper Leather Helmet Piece',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Leather Helmet (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

    }

    protected function addRecipesPiecesArmorLightBoot() {
        $this->resources[] = [
            'name'                  => 'Draconic Leather Boots Design',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Draconic Leather Boots (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                  => 'Dynasty Leather Boots Piece',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Leather Boots (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                  => 'Moirai Leather Boots Piece',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Moirai Leather Boots (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                  => 'Vesper Leather Boots Piece',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Leather Boots (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

    }

    protected function addRecipesPiecesArmorLightGloves() {
        $this->resources[] = [
            'name'       => 'Draconic Leather Gloves Fabric',
            'price_sell' => 100000,
            'price_buy'  => 60000,
            'filePath'   => $this->defaultArmorPieceFilePath,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Draconic Leather Gloves (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                  => 'Dynasty Leather Gloves Piece',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Dynasty Leather Gloves (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                  => 'Moirai Leather Gloves Piece',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Moirai Leather Gloves (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

        $this->resources[] = [
            'name'                  => 'Vesper Leather Gloves Piece',
            'price_sell'            => 100000,
            'price_buy'             => 60000,
            'is_custom_piece_armor' => true,
        ];
        $this->resources[] = [
            'name'       => 'Recipe: Vesper Leather Gloves (60%)',
            'price_sell' => 800000,
            'price_buy'  => 60000,
            'filePath'   => $this->recipeSImageFilePath,
        ];

    }

    protected function seed() {
        foreach ( $this->resources as $resource ) {
            if ( isset( $resource['is_custom_piece_weapon'] ) && $resource['is_custom_piece_weapon'] ) {
                $filePath = "{$this->pieceFolderPathWeapon}{$resource['name']}.png";
            } else if ( isset( $resource['is_custom_piece_armor'] ) && $resource['is_custom_piece_armor'] ) {
                $filePath = "{$this->pieceFolderPathArmor}{$resource['name']}.png";
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
            );
        }
    }
}
