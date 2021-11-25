<?php

namespace App\Http\Controllers;


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
        $inProgresses = [
            'Поправить баги бета версии.',
            'Выпустить стабильный продакшен.',
            'Добавить поиск на страницу управления ценами.',
            'Доработать чат.',
            'Книга рецептов - возможность добавлять рецепты в личный кабинет.',
            'Добавить блог для публикации статей, инфы о ченджлогах.',
        ];

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
            'inProgresses'            => $inProgresses,
            'title'                   => 'Калькулятор крафта Asterios',
            'lastResourcesUpdateTime' => $lastResourcesUpdateTime,
        ] );
    }


}
