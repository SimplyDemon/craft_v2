<?php

namespace Database\Seeders\Recipe\Extra;

use App\Models\Category;
use App\Models\Recipe;
use Database\Seeders\RecipesExtraSeeder;
use Exception;
use Illuminate\Database\Seeder;

class Attack extends RecipesExtraSeeder
{

    public function seed()
    {
        try {
            $this->updateWeapons();
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    /**
     * @throws Exception
     */
    protected function updateWeapons()
    {
        $swords   = [
            [
                'name'         => 'Flamberge',
                'isMage'       => false,
                'attackPhysic' => 130,
                'attackMagic'  => 61,
            ],
            [
                'name'         => 'StormBringer',
                'isMage'       => false,
                'attackPhysic' => 107,
                'attackMagic'  => 61,
            ],
            [
                'name'         => 'Mysterious Sword',
                'isMage'       => true,
                'attackPhysic' => 85,
                'attackMagic'  => 81,
            ],
            [
                'name'         => 'Shamshir',
                'isMage'       => false,
                'attackPhysic' => 122,
                'attackMagic'  => 68,
            ],
            [
                'name'         => 'Katana',
                'isMage'       => false,
                'attackPhysic' => 122,
                'attackMagic'  => 68,
            ],
            [
                'name'         => 'Spirit Sword',
                'isMage'       => false,
                'attackPhysic' => 122,
                'attackMagic'  => 68,
            ],
            [
                'name'         => 'Raid Sword',
                'isMage'       => false,
                'attackPhysic' => 122,
                'attackMagic'  => 68,
            ],
            [
                'name'         => 'Caliburs',
                'isMage'       => false,
                'attackPhysic' => 139,
                'attackMagic'  => 76,
            ],
            [
                'name'         => 'Sword of Delusion',
                'isMage'       => false,
                'attackPhysic' => 139,
                'attackMagic'  => 76,
            ],
            [
                'name'         => 'Tsurugi',
                'isMage'       => false,
                'attackPhysic' => 139,
                'attackMagic'  => 76,
            ],
            [
                'name'         => 'Homunkulus\' Sword',
                'isMage'       => true,
                'attackPhysic' => 111,
                'attackMagic'  => 101,
            ],
            [
                'name'         => 'Sword of Limit',
                'isMage'       => false,
                'attackPhysic' => 139,
                'attackMagic'  => 76,
            ],
            [
                'name'         => 'Sword of Nightmare',
                'isMage'       => false,
                'attackPhysic' => 139,
                'attackMagic'  => 76,
            ],
            [
                'name'         => 'Sword of Whispering Death',
                'isMage'       => true,
                'attackPhysic' => 111,
                'attackMagic'  => 101,
            ],
            [
                'name'         => 'Pa\'agrian Sword',
                'isMage'       => false,
                'attackPhysic' => 169,
                'attackMagic'  => 76,
            ],
            [
                'name'         => 'Samurai Long Sword',
                'isMage'       => false,
                'attackPhysic' => 156,
                'attackMagic'  => 83,
            ],
            [
                'name'         => 'Berserker Blade',
                'isMage'       => false,
                'attackPhysic' => 190,
                'attackMagic'  => 83,
            ],
            [
                'name'         => 'Ecliptic Sword',
                'isMage'       => true,
                'attackPhysic' => 125,
                'attackMagic'  => 111,
            ],
            [
                'name'         => 'Great Sword',
                'isMage'       => false,
                'attackPhysic' => 213,
                'attackMagic'  => 91,
                'favoriteText' => 'Лучшее оружие для сумонера до Dynasty Knife. Даёт огромное количество шанса крита (122) за счёт СА и рар бонуса, которое передаются сумону. Так же с таким оружие комфортно качать физ саб классы.',
            ],
            [
                'name'         => 'Keshanberk',
                'isMage'       => false,
                'attackPhysic' => 175,
                'attackMagic'  => 91,
            ],
            [
                'name'         => 'Sword of Valhalla',
                'isMage'       => true,
                'attackPhysic' => 140,
                'attackMagic'  => 122,
            ],
            [
                'name'         => 'Damascus Sword',
                'isMage'       => false,
                'attackPhysic' => 194,
                'attackMagic'  => 99,
            ],
            [
                'name'         => 'Guardian\'s Sword',
                'isMage'       => false,
                'attackPhysic' => 236,
                'attackMagic'  => 99,
            ],
            [
                'name'         => 'Wizard\'s Tear',
                'isMage'       => true,
                'attackPhysic' => 155,
                'attackMagic'  => 132,
            ],
            [
                'name'         => 'Tallum Blade',
                'isMage'       => false,
                'attackPhysic' => 213,
                'attackMagic'  => 107,
            ],
            [
                'name'         => 'Elemental Sword',
                'isMage'       => false,
                'attackPhysic' => 170,
                'attackMagic'  => 143,
            ],
            [
                'name'         => 'Infernal Master',
                'isMage'       => false,
                'attackPhysic' => 259,
                'attackMagic'  => 107,
            ],
            [
                'name'         => 'Dragon Slayer',
                'isMage'       => false,
                'attackPhysic' => 282,
                'attackMagic'  => 114,
            ],
            [
                'name'         => 'Sword of Miracles',
                'isMage'       => true,
                'attackPhysic' => 186,
                'attackMagic'  => 152,
            ],
            [
                'name'         => 'Dark Legion\'s Edge',
                'isMage'       => false,
                'attackPhysic' => 232,
                'attackMagic'  => 114,
            ],
            [
                'name'         => 'Sirra\'s Blade',
                'isMage'       => true,
                'attackPhysic' => 251,
                'attackMagic'  => 121,
            ],
            [
                'name'         => 'Sword of Ipos',
                'isMage'       => false,
                'attackPhysic' => 305,
                'attackMagic'  => 121,
            ],
            [
                'name'         => 'Themis\' Tongue',
                'isMage'       => true,
                'attackPhysic' => 202,
                'attackMagic'  => 161,
            ],
            [
                'name'         => 'Forgotten Blade',
                'isMage'       => false,
                'attackPhysic' => 281,
                'attackMagic'  => 132,
            ],
            [
                'name'         => 'Heavens Divider',
                'isMage'       => false,
                'attackPhysic' => 342,
                'attackMagic'  => 132,
            ],
            [
                'name'         => 'Dynasty Sword',
                'isMage'       => false,
                'attackPhysic' => 333,
                'attackMagic'  => 151,
            ],
            [
                'name'         => 'Dynasty Blade',
                'isMage'       => false,
                'attackPhysic' => 405,
                'attackMagic'  => 151,
            ],
            [
                'name'         => 'Dynasty Phantom',
                'isMage'       => true,
                'attackPhysic' => 267,
                'attackMagic'  => 202,
            ],
            [
                'name'         => 'Icarus Sawsword',
                'isMage'       => false,
                'attackPhysic' => 363,
                'attackMagic'  => 163,
            ],
            [
                'name'         => 'Icarus Spirit',
                'isMage'       => false,
                'attackPhysic' => 290,
                'attackMagic'  => 217,
            ],
            [
                'name'         => 'Icarus Heavy Arms',
                'isMage'       => false,
                'attackPhysic' => 442,
                'attackMagic'  => 163,
            ],
            [
                'name'         => 'Vesper Cutter',
                'isMage'       => false,
                'attackPhysic' => 396,
                'attackMagic'  => 176,
                'favoriteText' => 'Рарный кутер - лучшее оружие для разгона шанса крита для сумона, даёт колоссальное количество шанса крита (185) за счёт СА и рар бонуса. Дико дорогой.',
            ],
            [
                'name'         => 'Vesper Slasher',
                'isMage'       => false,
                'attackPhysic' => 482,
                'attackMagic'  => 176,
            ],
            [
                'name'         => 'Vesper Buster',
                'isMage'       => true,
                'attackPhysic' => 317,
                'attackMagic'  => 234,
            ],
        ];
        $blunts   = [
            [
                'name'         => 'Big Hammer',
                'isMage'       => false,
                'attackPhysic' => 107,
                'attackMagic'  => 61,
            ],
            [
                'name'         => 'Battle Axe',
                'isMage'       => false,
                'attackPhysic' => 107,
                'attackMagic'  => 61,
            ],
            [
                'name'         => 'Silver Axe',
                'isMage'       => false,
                'attackPhysic' => 107,
                'attackMagic'  => 61,
            ],
            [
                'name'         => 'Skull Graver',
                'isMage'       => false,
                'attackPhysic' => 107,
                'attackMagic'  => 61,
            ],
            [
                'name'         => 'Heavy Doom Hammer',
                'isMage'       => true,
                'attackPhysic' => 103,
                'attackMagic'  => 89,
            ],
            [
                'name'         => 'Crystal Staff',
                'isMage'       => true,
                'attackPhysic' => 103,
                'attackMagic'  => 89,
            ],
            [
                'name'         => 'Stick of Faith',
                'isMage'       => true,
                'attackPhysic' => 85,
                'attackMagic'  => 81,
            ],
            [
                'name'         => 'Heavy Doom Axe',
                'isMage'       => true,
                'attackPhysic' => 103,
                'attackMagic'  => 89,
            ],
            [
                'name'         => 'Cursed Staff',
                'isMage'       => true,
                'attackPhysic' => 119,
                'attackMagic'  => 100,
            ],
            [
                'name'         => 'Dwarven War Hammer',
                'isMage'       => false,
                'attackPhysic' => 122,
                'attackMagic'  => 68,
            ],
            [
                'name'         => 'War Axe',
                'isMage'       => false,
                'attackPhysic' => 139,
                'attackMagic'  => 76,
            ],
            [
                'name'         => 'Nirvana Axe',
                'isMage'       => false,
                'attackPhysic' => 111,
                'attackMagic'  => 101,
            ],
            [
                'name'         => 'Stick of Eternity',
                'isMage'       => true,
                'attackPhysic' => 111,
                'attackMagic'  => 101,
            ],
            [
                'name'         => 'Paradia Staff',
                'isMage'       => true,
                'attackPhysic' => 135,
                'attackMagic'  => 111,
            ],
            [
                'name'         => 'Inferno Staff',
                'isMage'       => true,
                'attackPhysic' => 135,
                'attackMagic'  => 111,
            ],
            [
                'name'         => 'Pa\'agrio Hammer',
                'isMage'       => true,
                'attackPhysic' => 135,
                'attackMagic'  => 111,
            ],
            [
                'name'         => 'Sage\'s Staff',
                'isMage'       => true,
                'attackPhysic' => 135,
                'attackMagic'  => 111,
            ],
            [
                'name'         => 'Club of Nature',
                'isMage'       => true,
                'attackPhysic' => 111,
                'attackMagic'  => 101,
            ],
            [
                'name'         => 'Mace of Underworld',
                'isMage'       => true,
                'attackPhysic' => 111,
                'attackMagic'  => 101,
            ],
            [
                'name'         => 'Karik Horn',
                'isMage'       => false,
                'attackPhysic' => 169,
                'attackMagic'  => 76,
            ],
            [
                'name'         => 'Pa\'agrio Axe',
                'isMage'       => true,
                'attackPhysic' => 141,
                'attackMagic'  => 114,
            ],
            [
                'name'         => 'Deadman\'s Staff',
                'isMage'       => true,
                'attackPhysic' => 152,
                'attackMagic'  => 122,
            ],
            [
                'name'         => 'Ghoul\'s Staff',
                'isMage'       => true,
                'attackPhysic' => 152,
                'attackMagic'  => 122,
            ],
            [
                'name'         => 'Demon\'s Staff',
                'isMage'       => true,
                'attackPhysic' => 152,
                'attackMagic'  => 122,
            ],
            [
                'name'         => 'Yaksa Mace',
                'isMage'       => false,
                'attackPhysic' => 156,
                'attackMagic'  => 83,
            ],
            [
                'name'         => 'Ecliptic Axe',
                'isMage'       => true,
                'attackPhysic' => 125,
                'attackMagic'  => 111,
            ],
            [
                'name'         => 'Dwarven Hammer',
                'isMage'       => false,
                'attackPhysic' => 190,
                'attackMagic'  => 83,
            ],
            [
                'name'         => 'Heavy War Axe',
                'isMage'       => false,
                'attackPhysic' => 175,
                'attackMagic'  => 91,
            ],
            [
                'name'         => 'Spirit\'s Staff',
                'isMage'       => true,
                'attackPhysic' => 170,
                'attackMagic'  => 134,
            ],
            [
                'name'         => 'Spell Breaker',
                'isMage'       => true,
                'attackPhysic' => 140,
                'attackMagic'  => 122,
            ],
            [
                'name'         => 'Ice Storm Hammer',
                'isMage'       => false,
                'attackPhysic' => 213,
                'attackMagic'  => 91,
            ],
            [
                'name'         => 'Deadman\'s Glory',
                'isMage'       => false,
                'attackPhysic' => 194,
                'attackMagic'  => 99,
            ],
            [
                'name'         => 'Art of Battle Axe',
                'isMage'       => false,
                'attackPhysic' => 194,
                'attackMagic'  => 99,
            ],
            [
                'name'         => 'Staff of Evil Spirits',
                'isMage'       => true,
                'attackPhysic' => 189,
                'attackMagic'  => 145,
            ],
            [
                'name'         => 'Kaim Vanul\'s Bones',
                'isMage'       => true,
                'attackPhysic' => 155,
                'attackMagic'  => 132,
            ],
            [
                'name'         => 'Star Buster',
                'isMage'       => false,
                'attackPhysic' => 236,
                'attackMagic'  => 99,
            ],
            [
                'name'         => 'Dasparion\'s Staff',
                'isMage'       => true,
                'attackPhysic' => 207,
                'attackMagic'  => 157,
            ],
            [
                'name'         => 'Meteor Shower',
                'isMage'       => false,
                'attackPhysic' => 213,
                'attackMagic'  => 107,
            ],
            [
                'name'         => 'Spiritual Eye',
                'isMage'       => true,
                'attackPhysic' => 170,
                'attackMagic'  => 143,
            ],
            [
                'name'         => 'Destroyer Hammer',
                'isMage'       => false,
                'attackPhysic' => 259,
                'attackMagic'  => 107,
            ],
            [
                'name'         => 'Elysian',
                'isMage'       => false,
                'attackPhysic' => 232,
                'attackMagic'  => 114,
            ],
            [
                'name'         => 'Branch of the Mother Tree',
                'isMage'       => true,
                'attackPhysic' => 226,
                'attackMagic'  => 167,
            ],
            [
                'name'         => 'Flaming Dragon Skull',
                'isMage'       => true,
                'attackPhysic' => 186,
                'attackMagic'  => 152,
                'favoriteText' => 'Лучшее оружие для заливка за счёт рар бонуса, который позволяет тратить меньше маны на залив мп своей пати.',
            ],
            [
                'name'         => 'Doom Crusher',
                'isMage'       => false,
                'attackPhysic' => 282,
                'attackMagic'  => 114,
            ],
            [
                'name'         => 'Barakiel\'s Axe',
                'isMage'       => false,
                'attackPhysic' => 251,
                'attackMagic'  => 121,
            ],
            [
                'name'         => 'Behemoth\' Tuning Fork',
                'isMage'       => false,
                'attackPhysic' => 305,
                'attackMagic'  => 121,
            ],
            [
                'name'         => 'Cabrio\'s Hand',
                'isMage'       => true,
                'attackPhysic' => 202,
                'attackMagic'  => 161,
            ],
            [
                'name'         => 'Daimon Crystal',
                'isMage'       => true,
                'attackPhysic' => 245,
                'attackMagic'  => 177,
            ],
            [
                'name'         => 'Basalt Battlehammer',
                'isMage'       => false,
                'attackPhysic' => 281,
                'attackMagic'  => 132,
            ],
            [
                'name'         => 'Imperial Staff',
                'isMage'       => true,
                'attackPhysic' => 274,
                'attackMagic'  => 193,
            ],
            [
                'name'         => 'Dragon Hunter Axe',
                'isMage'       => false,
                'attackPhysic' => 342,
                'attackMagic'  => 132,
            ],
            [
                'name'         => 'Arcana Mace',
                'isMage'       => true,
                'attackPhysic' => 225,
                'attackMagic'  => 175,
            ],
            [
                'name'         => 'Dynasty Cudgel',
                'isMage'       => false,
                'attackPhysic' => 333,
                'attackMagic'  => 151,
            ],
            [
                'name'         => 'Dynasty Mace',
                'isMage'       => true,
                'attackPhysic' => 267,
                'attackMagic'  => 202,
            ],
            [
                'name'         => 'Dynasty Staff',
                'isMage'       => false,
                'attackPhysic' => 325,
                'attackMagic'  => 222,
            ],
            [
                'name'         => 'Dynasty Crusher',
                'isMage'       => false,
                'attackPhysic' => 405,
                'attackMagic'  => 151,
            ],
            [
                'name'         => 'Icarus Hammer',
                'isMage'       => false,
                'attackPhysic' => 363,
                'attackMagic'  => 163,
            ],
            [
                'name'         => 'Icarus Hall',
                'isMage'       => true,
                'attackPhysic' => 290,
                'attackMagic'  => 217,
            ],
            [
                'name'         => 'Vesper Avenger',
                'isMage'       => false,
                'attackPhysic' => 396,
                'attackMagic'  => 176,
            ],
            [
                'name'         => 'Vesper Retributer',
                'isMage'       => false,
                'attackPhysic' => 482,
                'attackMagic'  => 176,
            ],
            [
                'name'         => 'Vesper Caster',
                'isMage'       => true,
                'attackPhysic' => 317,
                'attackMagic'  => 234,
            ],
            [
                'name'         => 'Vesper Singer',
                'isMage'       => false,
                'attackPhysic' => 386,
                'attackMagic'  => 257,
            ],
        ];
        $bows     = [
            [
                'name'         => 'Crystallized Ice Bow',
                'isMage'       => false,
                'attackPhysic' => 220,
                'attackMagic'  => 61,
            ],
            [
                'name'         => 'Elemental Bow',
                'isMage'       => false,
                'attackPhysic' => 277,
                'attackMagic'  => 75,
            ],
            [
                'name'         => 'Noble Elven Bow',
                'isMage'       => false,
                'attackPhysic' => 252,
                'attackMagic'  => 68,
            ],
            [
                'name'         => 'Akat Longbow',
                'isMage'       => false,
                'attackPhysic' => 316,
                'attackMagic'  => 84,
            ],
            [
                'name'         => 'Eminence Bow',
                'isMage'       => false,
                'attackPhysic' => 323,
                'attackMagic'  => 83,
            ],
            [
                'name'         => 'Dark Elven Longbow',
                'isMage'       => false,
                'attackPhysic' => 397,
                'attackMagic'  => 100,
            ],
            [
                'name'         => 'Bow of Peril',
                'isMage'       => false,
                'attackPhysic' => 400,
                'attackMagic'  => 99,
            ],
            [
                'name'         => 'Carnage Bow',
                'isMage'       => false,
                'attackPhysic' => 440,
                'attackMagic'  => 107,
            ],
            [
                'name'         => 'Soul Bow',
                'isMage'       => false,
                'attackPhysic' => 528,
                'attackMagic'  => 125,
            ],
            [
                'name'         => 'Shyeed\'s Bow',
                'isMage'       => false,
                'attackPhysic' => 570,
                'attackMagic'  => 133,
            ],
            [
                'name'         => 'Draconic Bow',
                'isMage'       => false,
                'attackPhysic' => 581,
                'attackMagic'  => 132,
            ],
            [
                'name'         => 'Dynasty Bow',
                'isMage'       => false,
                'attackPhysic' => 654,
                'attackMagic'  => 151,
            ],
            [
                'name'         => 'Icarus Spitter',
                'isMage'       => false,
                'attackPhysic' => 689,
                'attackMagic'  => 163,
            ],
            [
                'name'         => 'Vesper Thrower',
                'isMage'       => false,
                'attackPhysic' => 724,
                'attackMagic'  => 176,
            ],
        ];
        $daggers  = [
            [
                'name'         => 'Cursed Dagger',
                'isMage'       => false,
                'attackPhysic' => 94,
                'attackMagic'  => 61,
            ],
            [
                'name'         => 'Dark Elven Dagger',
                'isMage'       => false,
                'attackPhysic' => 94,
                'attackMagic'  => 61,
            ],
            [
                'name'         => 'Stiletto',
                'isMage'       => false,
                'attackPhysic' => 107,
                'attackMagic'  => 68,
            ],
            [
                'name'         => 'Soulfire Dirk',
                'isMage'       => true,
                'attackPhysic' => 86,
                'attackMagic'  => 91,
            ],
            [
                'name'         => 'Grace Dagger',
                'isMage'       => false,
                'attackPhysic' => 122,
                'attackMagic'  => 76,
            ],
            [
                'name'         => 'Dark Screamer',
                'isMage'       => false,
                'attackPhysic' => 122,
                'attackMagic'  => 76,
            ],
            [
                'name'         => 'Crystal Dagger',
                'isMage'       => false,
                'attackPhysic' => 136,
                'attackMagic'  => 83,
            ],
            [
                'name'         => 'Kris',
                'isMage'       => false,
                'attackPhysic' => 153,
                'attackMagic'  => 91,
            ],
            [
                'name'         => 'Hell Knife',
                'isMage'       => true,
                'attackPhysic' => 122,
                'attackMagic'  => 122,
            ],
            [
                'name'         => 'Demon\'s Dagger',
                'isMage'       => false,
                'attackPhysic' => 170,
                'attackMagic'  => 99,
            ],
            [
                'name'         => 'Bloody Orchid',
                'isMage'       => false,
                'attackPhysic' => 186,
                'attackMagic'  => 107,
            ],
            [
                'name'         => 'Soul Separator',
                'isMage'       => false,
                'attackPhysic' => 203,
                'attackMagic'  => 114,
            ],
            [
                'name'         => 'Naga Storm',
                'isMage'       => false,
                'attackPhysic' => 220,
                'attackMagic'  => 121,
            ],
            [
                'name'         => 'Angel Slayer',
                'isMage'       => false,
                'attackPhysic' => 246,
                'attackMagic'  => 132,
            ],
            [
                'name'         => 'Dynasty Knife',
                'isMage'       => false,
                'attackPhysic' => 291,
                'attackMagic'  => 151,
                'favoriteText' => 'Для львиной доли сумонеров это лучшее оружие в игре. Лишь немного уступает Vesper Cutter.',
            ],
            [
                'name'         => 'Icarus Disperser',
                'isMage'       => false,
                'attackPhysic' => 318,
                'attackMagic'  => 163,
            ],
            [
                'name'         => 'Vesper Shaper',
                'isMage'       => false,
                'attackPhysic' => 346,
                'attackMagic'  => 176,
            ],
        ];
        $polearms = [
            [
                'name'         => 'Scythe',
                'isMage'       => false,
                'attackPhysic' => 107,
                'attackMagic'  => 61,
            ],
            [
                'name'         => 'Orcish Glaive',
                'isMage'       => false,
                'attackPhysic' => 107,
                'attackMagic'  => 61,
            ],
            [
                'name'         => 'Body Slasher',
                'isMage'       => false,
                'attackPhysic' => 107,
                'attackMagic'  => 61,
            ],
            [
                'name'         => 'Bec de Corbin',
                'isMage'       => false,
                'attackPhysic' => 122,
                'attackMagic'  => 68,
            ],
            [
                'name'         => 'Poleaxe',
                'isMage'       => false,
                'attackPhysic' => 139,
                'attackMagic'  => 76,
            ],
            [
                'name'         => 'Scorpion',
                'isMage'       => false,
                'attackPhysic' => 144,
                'attackMagic'  => 78,
            ],
            [
                'name'         => 'Widow Maker',
                'isMage'       => false,
                'attackPhysic' => 144,
                'attackMagic'  => 78,
            ],
            [
                'name'         => 'Orcish Poleaxe',
                'isMage'       => false,
                'attackPhysic' => 156,
                'attackMagic'  => 83,
            ],
            [
                'name'         => 'Great Axe',
                'isMage'       => false,
                'attackPhysic' => 175,
                'attackMagic'  => 91,
            ],
            [
                'name'         => 'Lance',
                'isMage'       => false,
                'attackPhysic' => 194,
                'attackMagic'  => 99,
            ],
            [
                'name'         => 'Halberd',
                'isMage'       => false,
                'attackPhysic' => 213,
                'attackMagic'  => 107,
                'favoriteText' => 'Одна из двух пик, рар бонус которой, даёт шанс крита (54). Вторая пика с критом - Vesper Stormer.',
            ],
            [
                'name'         => 'Tallum Glaive',
                'isMage'       => false,
                'attackPhysic' => 232,
                'attackMagic'  => 114,
            ],
            [
                'name'         => 'Tiphon\'s Spear',
                'isMage'       => false,
                'attackPhysic' => 251,
                'attackMagic'  => 121,
            ],
            [
                'name'         => 'Saint Spear',
                'isMage'       => false,
                'attackPhysic' => 281,
                'attackMagic'  => 132,
            ],
            [
                'name'         => 'Dynasty Halberd',
                'isMage'       => false,
                'attackPhysic' => 333,
                'attackMagic'  => 151,
            ],
            [
                'name'         => 'Icarus Trident',
                'isMage'       => false,
                'attackPhysic' => 363,
                'attackMagic'  => 163,
            ],
            [
                'name'         => 'Vesper Stormer',
                'isMage'       => false,
                'attackPhysic' => 396,
                'attackMagic'  => 176,
            ],
        ];
        $fists    = [
            [
                'name'         => 'Chakram',
                'isMage'       => false,
                'attackPhysic' => 130,
                'attackMagic'  => 61,
            ],
            [
                'name'         => 'Knuckle Duster',
                'isMage'       => false,
                'attackPhysic' => 148,
                'attackMagic'  => 68,
            ],
            [
                'name'         => 'Fisted Blade',
                'isMage'       => false,
                'attackPhysic' => 169,
                'attackMagic'  => 76,
            ],
            [
                'name'         => 'Great Pata',
                'isMage'       => false,
                'attackPhysic' => 190,
                'attackMagic'  => 83,
            ],
            [
                'name'         => 'Arthro Nail',
                'isMage'       => false,
                'attackPhysic' => 213,
                'attackMagic'  => 91,
            ],
            [
                'name'         => 'Bellion Cestus',
                'isMage'       => false,
                'attackPhysic' => 236,
                'attackMagic'  => 99,
            ],
            [
                'name'         => 'Blood Tornado',
                'isMage'       => false,
                'attackPhysic' => 259,
                'attackMagic'  => 107,
            ],
            [
                'name'         => 'Dragon Grinder',
                'isMage'       => false,
                'attackPhysic' => 282,
                'attackMagic'  => 114,
            ],
            [
                'name'         => 'Sobekk\'s Hurricane',
                'isMage'       => false,
                'attackPhysic' => 305,
                'attackMagic'  => 121,
            ],
            [
                'name'         => 'Demon Splinter',
                'isMage'       => false,
                'attackPhysic' => 342,
                'attackMagic'  => 132,
            ],
            [
                'name'         => 'Dynasty Bagh-Nakh',
                'isMage'       => false,
                'attackPhysic' => 405,
                'attackMagic'  => 151,
            ],
            [
                'name'         => 'Icarus Hand',
                'isMage'       => false,
                'attackPhysic' => 442,
                'attackMagic'  => 163,
            ],
            [
                'name'         => 'Vesper Fighter',
                'isMage'       => false,
                'attackPhysic' => 482,
                'attackMagic'  => 176,
            ],
        ];

        $weapons = array_merge($swords, $blunts, $bows, $daggers, $polearms, $fists);

        foreach ($weapons as $weapon) {
            $this->updateAttributes(
                $weapon['name'],
                isMage: $weapon['isMage'],
                attackPhysic: $weapon['attackPhysic'],
                attackMagic: $weapon['attackMagic'],
                favoriteText: $weapon['favoriteText'] ?? null,
            );
        }
    }



}
