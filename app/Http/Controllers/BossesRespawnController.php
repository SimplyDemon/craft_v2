<?php

namespace App\Http\Controllers;

class BossesRespawnController extends Controller
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
        $bossesChosenServer = $_COOKIE['bossesChosenServer'] ?? 'x1';
        $raidBossController = new RaidBossController();
        $bossesX1           = [
            'subclass' => $raidBossController->getBossesDeathTime('subclass', 'x1'),
            'epic'     => $raidBossController->getBossesDeathTime('epic', 'x1'),
        ];
        $bossesX5           = [
            'subclass' => $raidBossController->getBossesDeathTime('subclass', 'x5'),
            'epic'     => $raidBossController->getBossesDeathTime('epic', 'x5'),
        ];

        /*
         * x7 was merged, temp dont show x7 bosses on index
        $bossesX7           = [
            'subclass' => $raidBossController->getBossesDeathTime('subclass', 'x7'),
            'epic'     => $raidBossController->getBossesDeathTime('epic', 'x7'),
        ];
*/

        return view('pages.bosses-respawn.index', [
            'bossesX1' => $bossesX1,
            'bossesX5' => $bossesX5,
            //            'bossesX7'                => $bossesX7,
            'bossesChosenServer' => $bossesChosenServer,
            'title' => 'Респ Саб РБ и Эпик РБ',
        ]);
    }


}
