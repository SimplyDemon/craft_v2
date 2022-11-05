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


        $content = "<p>Статы всей Эпик бижутерии в читабельном и удобном варианте, сравнивайте, выбирайте лучший вариант под себя.</p><p>Чаще всего цены на Эпик слишком неадекватны, рекомендую для начала просмотреть себе предметы из арсенала ТВ бижи</a>.</p>";

        return view('pages.enchantment.index', [
            'title' => 'Эпик Бижутерия',
            'recipesWeapon' => $recipesWeapon,
            'content' => $content,
        ]);
    }
}
