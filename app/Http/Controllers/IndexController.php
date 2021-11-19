<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\RaidBossController;

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
            'bossesX1' => $bossesX1,
            'bossesX5' => $bossesX5,
            'title'    => 'Калькулятор крафта Asterios',
        ] );
    }


}
