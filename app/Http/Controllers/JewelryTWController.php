<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class JewelryTWController extends Controller
{
    public function index()
    {
        $recipes = Recipe::where('is_tw', true)->orderBy('category_id', 'desc')->orderBy('grade', 'desc')->get();
        $epicJewelryUrl = route('jewelry.epic');
        $recipeJewelryStunResist = Recipe::where('name', 'Aden Guard Earring')->firstOrFail();
        $recipeJewelryStunResistUrl = route('recipes.show', $recipeJewelryStunResist);

        $recipeJewelryStunAttackRate = Recipe::where('name', 'Goddard Guard Earring')->firstOrFail();
        $recipeJewelryStunAttackRateUrl = route('recipes.show', $recipeJewelryStunAttackRate);

        $content = "<p>Из ТВ бижи самое важное это серьги они полезны, до тех пора, пока нет своей <a href='{$epicJewelryUrl}'>Эпик Бижи</a>. Чаще всего берут для олимпиады, и в зависимости от вражеской профессии меняют бижу, пока тикает таймер подготовки.</p>
<p>Например против танков, гномов важно сопротивление Стану, поэтому рекомендуется одеть <a href='{$recipeJewelryStunResistUrl}'>{$recipeJewelryStunResist->name}</a>. Если вы сами играете за эти классы, то есть смысл увеличить вероятность стана с помощью <a href='{$recipeJewelryStunAttackRateUrl}'>{$recipeJewelryStunAttackRate->name}</a>. В общем вы поняли смысл, какие статы для вас в приоритете - выбирайте сами и регайтесь за нужную территорию на следующем ТВ.</p>";

        return view('pages.jewelry-tw.index', [
            'title' => 'ТВ (Territory Wars) Бижутерия',
            'recipes' => $recipes,
            'content' => $content,
        ]);
    }
}
