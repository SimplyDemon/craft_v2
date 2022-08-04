<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Database\Seeders\Recipe\Extra\Attack;
use Database\Seeders\Recipe\Extra\Def;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Exception;

class RecipesExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $recipesAttack = new Attack();
        $recipesAttack->seed();

        $recipesDef = new Def();
        $recipesDef->seed();
    }

    /**
     * @throws Exception
     */
    protected function updateAttributes(
        string $name,
        bool $isMage = false,
        int $attackPhysic = null,
        int $attackMagic = null,
        int $defenceMagic = null,
        int $defencePhysic = null,
        string $masterworkDescription = null,
        string $favoriteText = null,
        bool $isTwoHands = false,
    ) {
        $recipe = Recipe::where('name', $name)->firstOrFail();

        /* If item has 100% recipe update info also */
        $recipePercent100 = Recipe::where('name', $name.' 100%')->first();

        $args = [];

        if ( ! empty($isMage)) {
            $args['is_mage'] = 1;
        }
        if ( ! empty($isTwoHands)) {
            $args['is_two_hands'] = 1;
        }
        if ( ! empty($attackMagic)) {
            $args['m_attack'] = $attackMagic;
        }
        if ( ! empty($attackPhysic)) {
            $args['p_attack'] = $attackPhysic;
        }
        if ( ! empty($defenceMagic)) {
            $args['m_def'] = $defenceMagic;
        }
        if ( ! empty($defencePhysic)) {
            $args['p_def'] = $defencePhysic;
        }
        if ( ! empty($masterworkDescription)) {
            $args['masterwork_description'] = $masterworkDescription;
        }
        if ( ! empty($favoriteText)) {
            $args['favorite_text'] = $favoriteText;
        }

        if ( ! empty($args)) {
            $recipe->update($args);
            if ( ! empty($recipePercent100)) {
                $recipePercent100->update($args);
            }
        } else {
            throw new Exception('empty Args!');
        }
    }
}
