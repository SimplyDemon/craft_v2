<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class JewelryEpicController extends Controller
{
    public function index()
    {
        $recipes = Recipe::where('is_epic', true)->orderBy('category_id', 'desc')->orderBy('grade', 'desc')->get();
        $twJewelryUrl = route('jewelry.tw');

        $content = "<p>Статы всей Эпик бижутерии в читабельном и удобном варианте, сравнивайте, выбирайте лучший вариант под себя.</p><p>Чаще всего цены на Эпик слишком неадекватны, рекомендую для начала просмотреть себе предметы из арсенала <a href='{$twJewelryUrl}'>ТВ бижи</a>.</p>";

        return view('pages.jewelry-epic.index', [
            'title' => 'Эпик Бижутерия',
            'recipes' => $recipes,
            'content' => $content,
        ]);
    }
}
