<?php

namespace Database\Seeders\Recipe\Extra;

use App\Models\Category;
use App\Models\Recipe;
use Database\Seeders\RecipesExtraSeeder;
use Exception;
use Illuminate\Database\Seeder;

class Def extends RecipesExtraSeeder
{

    public function seed()
    {
        try {
            $this->updateDef();
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    /**
     * @throws Exception
     */
    protected function updateDef()
    {
        $light     = [
            [
                'name'          => 'Reinforced Mithril Gaiters',
                'defencePhysic' => 56,
            ],
            [
                'name'          => 'Plated Leather Gaiters',
                'defencePhysic' => 59,
            ],
            [
                'name'          => 'Rind Leather Gaiters',
                'defencePhysic' => 60,
            ],
            [
                'name'          => 'Reinforced Mithril Shirt',
                'defencePhysic' => 90,
            ],
            [
                'name'          => 'Plated Leather Armor',
                'defencePhysic' => 94,
            ],
            [
                'name'          => 'Rind Leather Armor',
                'defencePhysic' => 97,
            ],
            [
                'name'          => 'Theca Leather Gaiters',
                'defencePhysic' => 66,
            ],
            [
                'name'          => 'Theca Leather Armor',
                'defencePhysic' => 106,
            ],
            [
                'name'          => 'Zubei\'s Leather Gaiters',
                'defencePhysic' => 73,
            ],
            [
                'name'          => 'Zubei\'s Leather Shirt',
                'defencePhysic' => 117,
            ],
            [
                'name'          => 'Drake Leather Armor',
                'defencePhysic' => 179,
            ],
            [
                'name'          => 'Dark Crystal Leggings',
                'defencePhysic' => 80,
            ],
            [
                'name'          => 'Avadon Leather Armor',
                'defencePhysic' => 191,
            ],
            [
                'name'          => 'Dark Crystal Leather Armor',
                'defencePhysic' => 128,
            ],
            [
                'name'          => 'Blue Wolf Leather Armor',
                'defencePhysic' => 202,
            ],
            [
                'name'          => 'Leather Armor of Doom',
                'defencePhysic' => 202,
            ],
            [
                'name'          => 'Tallum Leather Armor',
                'defencePhysic' => 209,
            ],
            [
                'name'          => 'Leather Armor of Nightmare',
                'defencePhysic' => 220,
            ],
            [
                'name'          => 'Majestic Leather Armor',
                'defencePhysic' => 220,
            ],
            [
                'name'          => 'Dynasty Leather Leggings',
                'defencePhysic' => 106,
            ],
            [
                'name'          => 'Draconic Leather Armor',
                'defencePhysic' => 249,
            ],
            [
                'name'          => 'Moirai Leather Leggings',
                'defencePhysic' => 111,
            ],
            [
                'name'          => 'Dynasty Leather Armor',
                'defencePhysic' => 170,
            ],
            [
                'name'          => 'Vesper Leather Leggings',
                'defencePhysic' => 117,
            ],
            [
                'name'          => 'Moirai Leather Breastplate',
                'defencePhysic' => 178,
            ],
            [
                'name'          => 'Vesper Leather Breastplate',
                'defencePhysic' => 187,
            ],
        ];
        $heavy     = [
            [
                'name'          => 'Chain Gaiters',
                'defencePhysic' => 75,
            ],
            [
                'name'          => 'Dwarven Chain Gaiters',
                'defencePhysic' => 80,
            ],
            [
                'name'          => 'Chain Mail Shirt',
                'defencePhysic' => 120,
            ],
            [
                'name'          => 'Dwarven Chain Mail Shirt',
                'defencePhysic' => 129,
            ],
            [
                'name'          => 'Zubei\'s Gaiters',
                'defencePhysic' => 98,
            ],
            [
                'name'          => 'Avadon Gaiters',
                'defencePhysic' => 98,
            ],
            [
                'name'          => 'Compound Armor',
                'defencePhysic' => 224,
            ],
            [
                'name'          => 'Blue Wolf Gaiters',
                'defencePhysic' => 104,
            ],
            [
                'name'          => 'Zubei\'s Breastplate',
                'defencePhysic' => 157,
            ],
            [
                'name'          => 'Avadon Breastplate',
                'defencePhysic' => 157,
            ],
            [
                'name'          => 'Full Plate Armor',
                'defencePhysic' => 239,
            ],
            [
                'name'          => 'Dark Crystal Gaiters',
                'defencePhysic' => 107,
            ],
            [
                'name'          => 'Blue Wolf Breastplate',
                'defencePhysic' => 166,
            ],
            [
                'name'          => 'Dark Crystal breastplate',
                'defencePhysic' => 171,
            ],
            [
                'name'          => 'Doom Plate Armor',
                'defencePhysic' => 270,
            ],
            [
                'name'          => 'Tallum Plate Armor',
                'defencePhysic' => 278,
            ],
            [
                'name'          => 'Imperial Crusader Gaiters',
                'defencePhysic' => 128,
            ],
            [
                'name'          => 'Armor of Nightmare',
                'defencePhysic' => 293,
            ],
            [
                'name'          => 'Majestic Plate Armor',
                'defencePhysic' => 293,
            ],
            [
                'name'          => 'Imperial Crusader Breastplate',
                'defencePhysic' => 205,
            ],
            [
                'name'          => 'Dynasty Gaiters',
                'defencePhysic' => 141,
            ],
            [
                'name'          => 'Moirai Gaiters',
                'defencePhysic' => 141,
            ],
            [
                'name'          => 'Dynasty Breastplate',
                'defencePhysic' => 226,
            ],
            [
                'name'          => 'Vesper Gaiters',
                'defencePhysic' => 156,
            ],
            [
                'name'          => 'Moirai Breastplate',
                'defencePhysic' => 238,
            ],
            [
                'name'          => 'Vesper Breastplate',
                'defencePhysic' => 250,
            ],
        ];
        $robe      = [
            [
                'name'          => 'Karmian Stockings',
                'defencePhysic' => 37,
            ],
            [
                'name'          => 'Karmian Tunic',
                'defencePhysic' => 60,
            ],
            [
                'name'          => 'Demon\'s Stockings',
                'defencePhysic' => 43,
            ],
            [
                'name'          => 'Divine Stockings',
                'defencePhysic' => 46,
            ],
            [
                'name'          => 'Demon\'s Tunic',
                'defencePhysic' => 69,
            ],
            [
                'name'          => 'Robe of Seal',
                'defencePhysic' => 105,
            ],
            [
                'name'          => 'Stockings of Zubei',
                'defencePhysic' => 49,
            ],
            [
                'name'          => 'Divine Tunic',
                'defencePhysic' => 74,
            ],
            [
                'name'          => 'Blue Wolf Stockings',
                'defencePhysic' => 52,
            ],
            [
                'name'          => 'Stockings of Doom',
                'defencePhysic' => 52,
            ],
            [
                'name'          => 'Tunic of Zubei',
                'defencePhysic' => 78,
            ],
            [
                'name'          => 'Tallum Stockings',
                'defencePhysic' => 53,
            ],
            [
                'name'          => 'Blue Wolf Tunic',
                'defencePhysic' => 83,
            ],
            [
                'name'          => 'Tunic of Doom',
                'defencePhysic' => 83,
            ],
            [
                'name'          => 'Avadon Robe',
                'defencePhysic' => 127,
            ],
            [
                'name'          => 'Tallum Tunic',
                'defencePhysic' => 86,
            ],
            [
                'name'          => 'Dark Crystal Robe',
                'defencePhysic' => 139,
            ],
            [
                'name'          => 'Robe of Nightmare',
                'defencePhysic' => 147,
            ],
            [
                'name'          => 'Majestic Robe',
                'defencePhysic' => 147,
            ],
            [
                'name'          => 'Dynasty Stockings',
                'defencePhysic' => 71,
            ],
            [
                'name'          => 'Major Arcana Robe',
                'defencePhysic' => 166,
            ],
            [
                'name'          => 'Moirai Stockings',
                'defencePhysic' => 74,
            ],
            [
                'name'          => 'Dynasty Tunic',
                'defencePhysic' => 113,
            ],
            [
                'name'          => 'Vesper Stockings',
                'defencePhysic' => 78,
            ],
            [
                'name'          => 'Moirai Tunic',
                'defencePhysic' => 119,
            ],
            [
                'name'          => 'Vesper Tunic',
                'defencePhysic' => 125,
            ],
        ];
        $helmet    = [
            [
                'name'          => 'Chain Hood',
                'defencePhysic' => 47,
            ],
            [
                'name'          => 'Compound Helmet',
                'defencePhysic' => 54,
            ],
            [
                'name'          => 'Full Plate Helmet',
                'defencePhysic' => 58,
            ],
            [
                'name'          => 'Zubei\'s Helmet',
                'defencePhysic' => 62,
            ],
            [
                'name'          => 'Avadon Circlet',
                'defencePhysic' => 62,
            ],
            [
                'name'          => 'Blue Wolf Helmet',
                'defencePhysic' => 66,
            ],
            [
                'name'          => 'Doom Helmet',
                'defencePhysic' => 66,
            ],
            [
                'name'          => 'Dark Crystal Helmet',
                'defencePhysic' => 69,
            ],
            [
                'name'          => 'Tallum Helmet',
                'defencePhysic' => 69,
            ],
            [
                'name'          => 'Helm of Nightmare',
                'defencePhysic' => 73,
            ],
            [
                'name'          => 'Majestic Circlet',
                'defencePhysic' => 73,
            ],
            [
                'name'          => 'Imperial Crusader Helmet',
                'defencePhysic' => 83,
            ],
            [
                'name'          => 'Draconic Leather Helmet',
                'defencePhysic' => 83,
            ],
            [
                'name'          => 'Major Arcana Circlet',
                'defencePhysic' => 83,
            ],
            [
                'name'          => 'Dynasty Helmet',
                'defencePhysic' => 92,
            ],
            [
                'name'          => 'Dynasty Leather Helmet',
                'defencePhysic' => 92,
            ],
            [
                'name'          => 'Dynasty Circlet',
                'defencePhysic' => 92,
            ],
            [
                'name'          => 'Moirai Helmet',
                'defencePhysic' => 96,
            ],
            [
                'name'          => 'Moirai Leather Helmet',
                'defencePhysic' => 96,
            ],
            [
                'name'          => 'Moirai Circlet',
                'defencePhysic' => 96,
            ],
            [
                'name'          => 'Vesper Helmet',
                'defencePhysic' => 101,
            ],
            [
                'name'          => 'Vesper Leather Helmet',
                'defencePhysic' => 101,
            ],
            [
                'name'          => 'Vesper Circlet',
                'defencePhysic' => 101,
            ],
        ];
        $boots     = [
            [
                'name'          => 'Reinforced Mithril Boots',
                'defencePhysic' => 32,
            ],
            [
                'name'          => 'Chain Boots',
                'defencePhysic' => 32,
            ],
            [
                'name'          => 'Karmian Boots',
                'defencePhysic' => 32,
            ],
            [
                'name'          => 'Plated Leather Boots',
                'defencePhysic' => 32,
            ],
            [
                'name'          => 'Dwarven Chain Boots',
                'defencePhysic' => 32,
            ],
            [
                'name'          => 'Boots of Seal',
                'defencePhysic' => 32,
            ],
            [
                'name'          => 'Crimson Boots',
                'defencePhysic' => 34,
            ],
            [
                'name'          => 'Rind Leather Boots',
                'defencePhysic' => 34,
            ],
            [
                'name'          => 'Compound Boots',
                'defencePhysic' => 36,
            ],
            [
                'name'          => 'Demon\'s Boots',
                'defencePhysic' => 36,
            ],
            [
                'name'          => 'Theca Leather Boots',
                'defencePhysic' => 37,
            ],
            [
                'name'          => 'Drake Leather Boots',
                'defencePhysic' => 39,
            ],
            [
                'name'          => 'Full Plate Boots',
                'defencePhysic' => 39,
            ],
            [
                'name'          => 'Zubei\'s Boots',
                'defencePhysic' => 41,
            ],
            [
                'name'          => 'Avadon Boots',
                'defencePhysic' => 41,
            ],
            [
                'name'          => 'Doom Boots',
                'defencePhysic' => 44,
            ],
            [
                'name'          => 'Blue Wolf Boots',
                'defencePhysic' => 44,
            ],
            [
                'name'          => 'Dark Crystal Boots',
                'defencePhysic' => 46,
            ],
            [
                'name'          => 'Tallum Boots',
                'defencePhysic' => 46,
            ],
            [
                'name'          => 'Boots of Nightmare',
                'defencePhysic' => 49,
            ],
            [
                'name'          => 'Majestic Boots',
                'defencePhysic' => 49,
            ],
            [
                'name'          => 'Imperial Crusader Boots',
                'defencePhysic' => 55,
            ],
            [
                'name'          => 'Draconic Leather Boots',
                'defencePhysic' => 55,
            ],
            [
                'name'          => 'Major Arcana Boots',
                'defencePhysic' => 55,
            ],
            [
                'name'          => 'Dynasty Boots',
                'defencePhysic' => 61,
            ],
            [
                'name'          => 'Dynasty Leather Boots',
                'defencePhysic' => 61,
            ],
            [
                'name'          => 'Dynasty Shoes',
                'defencePhysic' => 61,
            ],
            [
                'name'          => 'Moirai Boots',
                'defencePhysic' => 64,
            ],
            [
                'name'          => 'Moirai Leather Boots',
                'defencePhysic' => 64,
            ],
            [
                'name'          => 'Moirai Shoes',
                'defencePhysic' => 64,
            ],
            [
                'name'          => 'Vesper Boots',
                'defencePhysic' => 68,
            ],
            [
                'name'          => 'Vesper Boots',
                'defencePhysic' => 68,
            ],
            [
                'name'          => 'Vesper Leather Boots',
                'defencePhysic' => 68,
            ],
            [
                'name'          => 'Vesper Shoes',
                'defencePhysic' => 68,
            ],
        ];
        $shields   = [
            [
                'name'          => 'Eldarake',
                'defencePhysic' => 166,
            ],
            [
                'name'          => 'Chain Shield',
                'defencePhysic' => 166,
            ],
            [
                'name'          => 'Dwarven Chain Shield',
                'defencePhysic' => 174,
            ],
            [
                'name'          => 'Knight\'s Shield',
                'defencePhysic' => 178,
            ],
            [
                'name'          => 'Tower Shield',
                'defencePhysic' => 190,
            ],
            [
                'name'          => 'Compound Shield',
                'defencePhysic' => 190,
            ],
            [
                'name'          => 'Full Plate Shield',
                'defencePhysic' => 203,
            ],
            [
                'name'          => 'Zubei\'s Shield',
                'defencePhysic' => 216,
            ],
            [
                'name'          => 'Avadon Shield',
                'defencePhysic' => 216,
            ],
            [
                'name'          => 'Doom Shield',
                'defencePhysic' => 230,
            ],
            [
                'name'          => 'Dark Crystal Shield',
                'defencePhysic' => 243,
            ],
            [
                'name'          => 'Shield of Nightmare',
                'defencePhysic' => 256,
            ],
            [
                'name'          => 'Imperial Crusader Shield',
                'defencePhysic' => 290,
            ],
            [
                'name'          => 'Dynasty Shield',
                'defencePhysic' => 321,
            ],
            [
                'name'          => 'Moirai Shield',
                'defencePhysic' => 355,
            ],
            [
                'name'          => 'Vesper Shield',
                'defencePhysic' => 371,
            ],
        ];
        $sigils    = [
            [
                'name'          => 'Arcana Sigil',
                'defencePhysic' => 13,
            ],
            [
                'name'          => 'Dynasty Sigil',
                'defencePhysic' => 15,
            ],
            [
                'name'          => 'Moirai Sigil',
                'defencePhysic' => 16,
            ],
            [
                'name'          => 'Vesper Sigil',
                'defencePhysic' => 17,
            ],
        ];
        $rings     = [
            [
                'name'         => 'Aquastone Ring',
                'defenceMagic' => 26,
            ],
            [
                'name'         => 'Ring of Protection',
                'defenceMagic' => 28,
            ],
            [
                'name'         => 'Ring of Ages',
                'defenceMagic' => 30,
            ],
            [
                'name'         => 'Ring of Seal',
                'defenceMagic' => 32,
            ],
            [
                'name'         => 'Adamantite Ring',
                'defenceMagic' => 34,
            ],
            [
                'name'         => 'Black Ore Ring',
                'defenceMagic' => 36,
            ],
            [
                'name'         => 'Phoenix Ring',
                'defenceMagic' => 40,
            ],
            [
                'name'         => 'Majestic Ring',
                'defenceMagic' => 42,
            ],
            [
                'name'         => 'Tateossian Ring',
                'defenceMagic' => 48,
            ],
            [
                'name'         => 'Dynasty Ring',
                'defenceMagic' => 60,
            ],
            [
                'name'         => 'Moirai Ring',
                'defenceMagic' => 61,
            ],
            [
                'name'         => 'Vesper Ring',
                'defenceMagic' => 62,
            ],
        ];
        $earrings  = [
            [
                'name'         => 'Moonstone Earring',
                'defenceMagic' => 39,
            ],
            [
                'name'         => 'Earring of Protection',
                'defenceMagic' => 42,
            ],
            [
                'name'         => 'Earring of Seal',
                'defenceMagic' => 45,
            ],
            [
                'name'         => 'Earring of Seal',
                'defenceMagic' => 45,
            ],
            [
                'name'         => 'Nassen\'s Earring',
                'defenceMagic' => 48,
            ],
            [
                'name'         => 'Adamantite Earring',
                'defenceMagic' => 51,
            ],
            [
                'name'         => 'Black Ore Earring',
                'defenceMagic' => 54,
            ],
            [
                'name'         => 'Phoenix Earring',
                'defenceMagic' => 60,
            ],
            [
                'name'         => 'Majestic Earring',
                'defenceMagic' => 63,
            ],
            [
                'name'         => 'Tateossian Earring',
                'defenceMagic' => 71,
            ],
            [
                'name'         => 'Dynasty Earring',
                'defenceMagic' => 79,
            ],
            [
                'name'         => 'Moirai Earring',
                'defenceMagic' => 86,
            ],
            [
                'name'         => 'Vesper Earring',
                'defenceMagic' => 94,
            ],
        ];
        $necklaces = [
            [
                'name'         => 'Aquastone Necklace',
                'defenceMagic' => 52,
            ],
            [
                'name'         => 'Necklace of Protection',
                'defenceMagic' => 56,
            ],
            [
                'name'         => 'Necklace of Mermaid',
                'defenceMagic' => 60,
            ],
            [
                'name'         => 'Necklace of Seal',
                'defenceMagic' => 64,
            ],
            [
                'name'         => 'Adamantite Necklace',
                'defenceMagic' => 68,
            ],
            [
                'name'         => 'Black Ore Necklace',
                'defenceMagic' => 72,
            ],
            [
                'name'         => 'Phoenix Necklace',
                'defenceMagic' => 80,
            ],
            [
                'name'         => 'Majestic Necklace',
                'defenceMagic' => 85,
            ],
            [
                'name'         => 'Tateossian Necklace',
                'defenceMagic' => 95,
            ],
            [
                'name'         => 'Dynasty Necklace',
                'defenceMagic' => 106,
            ],
            [
                'name'         => 'Moirai Necklace',
                'defenceMagic' => 115,
            ],
            [
                'name'         => 'Vesper Necklace',
                'defenceMagic' => 125,
            ],
        ];

        $items = array_merge($light, $heavy, $robe, $helmet, $boots, $shields, $sigils, $rings, $earrings, $necklaces);

        foreach ($items as $item) {
            $this->updateAttributes(
                $item['name'],
                defenceMagic: $item['defenceMagic'] ?? null,
                defencePhysic: $item['defencePhysic'] ?? null,
            );
        }


    }

}
