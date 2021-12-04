<?php

namespace App\Http\Controllers;


use App\Models\Recipe;
use App\Models\Resource;

class IndexController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $recipesCount   = Recipe::all()->count();
        $resourcesCount = Resource::where( 'type', 'resource' )->count();
        $piecesCount    = Resource::where( 'type', '!=', 'resource' )->count();

        $faq                                                                                = [];
        $faq['Как часто обновляются цены на ресурсы?']                                      = '<b>Несколько раз в неделю</b>. Я иду в гх к брокеру (сервер х1) и обновляю цены в ручном режиме. На главной странице показно время последнего обновления цен.';
        $faq['Нормальная ли это цена на ресурс? Может дешёво или наоборот слишком дорого?'] = 'На странице ресурса есть небольшая <b>аналитика цены</b> для понимания. На сколько цена изменилась с прошлого обновления, график наглядно показывает, в какой промежуток времени, какая была цена на ресурс.';
        $faq['Какие особенности работы поиска?']                                            = '<b>Поиск предметов так же работает по «народным» фразам</b>, как мы привыкли называть предметы: «Шторм», «Хомка», «Слс», «Сом», «Боп» и тд. Так же можно найти по названию «поколения« предмета: «Дино дагер», «Веспер меч», «Морай низ», «Морай лайт шлем», «ТТ шея» и тд.';
        $faq['Куда делись цены на предметы и куски?']                                       = "<b>Не хватает времени держать их в актуальном состоянии</b>, лучше вообще не показывать никакую цену, чем показывать устаревшую или не актуальную. На сайте ресурсов: {$resourcesCount}, предметов: {$recipesCount}, кусков: {$piecesCount}, в связи с системой поиска в Item Broker (только по одному слову) находить их сложно и на это тратится большое количество времени. А самих кусков в продаже может быть несколько штук, и как только их купят, новые торговец может поставить абсолютно другую цену. Так что цен не будет, по крайнем мере, до тех пор, пока я не найду способ автоматизировать их получение.";
        $faq['Какой шикарный сайт, как я могу поддержать разработку?']                      = '<b>Никак</b>. Сайт создан не для монетизации и заработка, а для простых игроков, как я, которым всё еще нравится эта игра.';
        $faq['Я нашёл баг, это вообще нормально?']                                          = '<b>Это вполне естественно</b>. Даже огромные компании со штатом в десятки сотрудников и тестеров периодично пропускают баги. Я сам периодично сталкиваюсь с багами и их правлю. Огромная просьба - сообщайте в поддержку о них.';

        $lastResourcesUpdateTime = date( 'd.m.Y H:i', strtotime( Resource::where( 'name', 'Adamantine' )->firstOrFail()->updated_at ) );

        $raidBossController = new RaidBossController();
        $bossesX1           = [
            'subclass' => $raidBossController->getBossesDeathTime( 'subclass', 'x1' ),
            'epic'     => $raidBossController->getBossesDeathTime( 'epic', 'x1' ),
        ];
        $bossesX5           = [
            'subclass' => $raidBossController->getBossesDeathTime( 'subclass', 'x5' ),
            'epic'     => $raidBossController->getBossesDeathTime( 'epic', 'x5' ),
        ];

        return view( 'pages.index.index', [
            'bossesX1'                => $bossesX1,
            'bossesX5'                => $bossesX5,
            'title'                   => 'Калькулятор крафта Asterios',
            'lastResourcesUpdateTime' => $lastResourcesUpdateTime,
            'faq'                     => $faq,
        ] );
    }


}
