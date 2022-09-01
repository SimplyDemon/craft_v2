<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class BeltController extends Controller
{
    public function index()
    {
        $beltCategory = Category::where('name', 'Belt')->firstOrFail();
        $beltTopDef = Recipe::where('name', 'Top-grade Magic Ornament Mithril Belt PvP Defense')->firstOrFail();
        $beltTopDefUrl = route('recipes.show', $beltTopDef);
        $recipes = Recipe::where('category_id', $beltCategory->id)->get();

        $content = "<p>В списке находятся только пояса <b>A</b> и <b>S</b> грейда, как самые актуальные. Сами пояса и их вставки можно купить за баджи TW, метод получения - чистый рандом. Если открывать пояс, то может выпать либо <b>A</b> либо <b>S</b> грейд, зависит от вашей удачи.</p>";
        $content .= '<p>С орнаментами дела обстоят на много хуже, шанс получение ТОП-грейда равняется около 1%. Из-за того что из пояса невозможно достать вставку и редкости ТОП грейда, они дико дорогие.</p>';
        $content .= "<p>Самая распространённый пояс это <a href='{$beltTopDefUrl}'>{$beltTopDef->name}</a>, но нужно понимать, что профит он даёт только в ПвП замесах, на время кача имеет смысл взять расшиирение инвентаря или увеличение грузоподъёмности.</p>";

        return view('pages.belt.index', [
            'title' => 'Пояса за ТВ (Территориальные войны) и их бонусы',
            'recipes' => $recipes,
            'content' => $content,
            'colValue' => 3,
        ]);
    }
}
