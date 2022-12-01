<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class EnchantmentController extends Controller
{
    public function index()
    {
        /* Weapons */
        $recipesMage = Recipe::whereNotNull('p_attack')->where('is_mage', true)->orderBy('m_attack')->get();
        $recipesPhysic = Recipe::whereNotNull('p_attack')->where('is_mage', false)->orderBy('p_attack')->get();

        /* Clear 100% recipes from collection */
        $recipesMage = $recipesMage->filter(function ($recipe) {
            return !str_contains($recipe->name, '100%');
        });
        $recipesPhysic = $recipesPhysic->filter(function ($recipe) {
            return !str_contains($recipe->name, '100%');
        });

        $recipesSword = $recipesPhysic->filter(function ($recipe) {
            return $recipe->category->name === 'Sword' && !$recipe->is_two_hands;
        });
        $recipesSwordTwoHands = $recipesPhysic->filter(function ($recipe) {
            return $recipe->category->name === 'Sword' && $recipe->is_two_hands;
        });
        $recipesBlunt = $recipesPhysic->filter(function ($recipe) {
            return $recipe->category->name === 'Blunt' && !$recipe->is_two_hands;
        });
        $recipesBluntTwoHands = $recipesPhysic->filter(function ($recipe) {
            return $recipe->category->name === 'Blunt' && $recipe->is_two_hands;
        });
        $recipesBow = $recipesPhysic->filter(function ($recipe) {
            return $recipe->category->name === 'Bow';
        });
        $recipesDagger = $recipesPhysic->filter(function ($recipe) {
            return $recipe->category->name === 'Dagger';
        });
        $recipesPolearm = $recipesPhysic->filter(function ($recipe) {
            return $recipe->category->name === 'Polearm';
        });
        $recipesFist = $recipesPhysic->filter(function ($recipe) {
            return $recipe->category->name === 'Fist';
        });
        $recipesDualSword = $recipesPhysic->filter(function ($recipe) {
            return $recipe->category->name === 'Dual Sword';
        });
        $recipesDualDagger = $recipesPhysic->filter(function ($recipe) {
            return $recipe->category->name === 'Dual Dagger';
        });
        $recipesWeapon = [
            'sword' => $recipesSword,
            'swordTwoHands' => $recipesSwordTwoHands,
            'blunt' => $recipesBlunt,
            'bluntTwoHands' => $recipesBluntTwoHands,
            'bow' => $recipesBow,
            'dagger' => $recipesDagger,
            'polearm' => $recipesPolearm,
            'fist' => $recipesFist,
            'dualSword' => $recipesDualSword,
            'dualDagger' => $recipesDualDagger,
            'magic' => $recipesMage,
        ];


        $content = "<p>Хорошо заточенная дино пуха вполне может сравняться с топ оружием, помимо всего она имеет бонус от МВ и вставка СА требует минимум гемов, хороший выбор для старта.</p><p>При заточке топ пухи от +8 и выше, бонус от МВ меркнет, в сравнении с огромным приростом физ и маг атаки.</p>";
        $description = 'Калькулятор заточки ла2 поможет сравнить характеристики двух предметов при определённом энчанте и наглядно продемонстрирует аналогичное оружие.';

        return view('pages.enchantment.index', [
            'title' => 'Калькулятор заточки',
            'recipesWeapon' => $recipesWeapon,
            'content' => $content,
            'description' => $description,
        ]);
    }
}
