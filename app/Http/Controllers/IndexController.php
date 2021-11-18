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
        $RaidBossController      = new RaidBossController();
        $subclassBossesDeathTime = $RaidBossController->getBossesDeathTime( 'subclass' );
        $epicBossesDeathTime     = $RaidBossController->getBossesDeathTime( 'epic' );

        return view( 'pages.index.index', [
            'subclassBossesDeathTime' => $subclassBossesDeathTime,
            'epicBossesDeathTime'     => $epicBossesDeathTime,
            'title'                   => 'Калькулятор крафта Asterios',
        ] );
    }


}
