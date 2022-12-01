<?php

namespace App\Http\Controllers;


use App\Http\Controllers\OptionsController;
use App\Models\Recipe;
use App\Models\Resource;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $recipesCount = Recipe::where('category_id', '!=', 5)->where('category_id', '!=', 4)->count();
        $resourcesCount = Resource::where('type', 'resource')->count();
        $postController = new PostController();

        $recentPosts = $postController->getRecentPosts(0, 2);

        $resourcesLink = route('resources.index');
        $faq = [];
        $faq['Нормальная ли это цена на ресурс? Может дешёво или наоборот слишком дорого?'] = "На странице ресурса есть небольшая <a href='{$resourcesLink}'><b>аналитика цены</b></a> для понимания. На сколько цена изменилась с прошлого обновления, график наглядно показывает, в какой промежуток времени, какая была цена на ресурс.";
        $faq['Какие особенности работы поиска?'] = '<b>Поиск предметов так же работает по «народным» фразам</b>, как мы привыкли называть предметы: «Шторм», «Хомка», «Слс», «Сом», «Боп» и тд. Так же можно найти по названию «поколения« предмета: «Дино дагер», «Веспер меч», «Морай низ», «Морай лайт шлем», «ТТ шея» и тд.';
        $faq['Куда делись цены на предметы и куски?'] = "<b>Не хватает времени держать их в актуальном состоянии</b>, лучше вообще не показывать никакую цену, чем показывать устаревшую или не актуальную. На сайте ресурсов: {$resourcesCount}, предметов: {$recipesCount}, в связи с системой поиска в Item Broker (только по одному слову) находить их сложно и на это тратится большое количество времени. А самих кусков в продаже может быть несколько штук, и как только их купят, новые торговец может поставить абсолютно другую цену. Так что цен не будет, по крайнем мере, до тех пор, пока я не найду способ автоматизировать их получение.";
        $faq['Какой шикарный сайт, как я могу поддержать разработку?'] = '<b>Никак</b>. Сайт создан не для монетизации и заработка, а для простых игроков, как я, которым всё еще нравится эта игра.';
        $faq['Я нашёл баг, это вообще нормально?'] = '<b>Это вполне естественно</b>. Даже огромные компании со штатом в десятки сотрудников и тестеров периодично пропускают баги. Я сам периодично сталкиваюсь с багами и их правлю. Огромная просьба - сообщайте в поддержку о них.';
        $faq['Всё сам сделал?'] = '<b>Да</b>. Сервис был создан с нуля одним человеком. Спасибо всем за фидбек и ваши предложения, всегда открыт к ним! Отдельно благодарю за помощь <b>Стурн</b> - создал парсер скринов и цену можно выгружать в полуавтоматическом режиме.';

        $lastResourcesUpdateTime = OptionsController::getLastResourcesPricesUpdateTime();

        return view('pages.index.index', [
            'title' => 'Калькулятор крафта Asterios',
            'lastResourcesUpdateTime' => $lastResourcesUpdateTime ?? '???',
            'faq' => $faq,
            'recentPosts' => $recentPosts,
        ]);
    }


}
