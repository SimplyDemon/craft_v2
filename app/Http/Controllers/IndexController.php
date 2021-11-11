<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $subclassBossesDeathTime = $this->getSubclassBossesDeathTime();


        return view( 'pages.index.index', [
            'subclassBossesDeathTime' => $subclassBossesDeathTime,
        ] );
    }

    protected function getSubclassBossesDeathTime() {
        $bosses = [];

        // Disable on local case of errors
        if ( env( 'APP_ENV' ) === 'local' ) {
            return $bosses;
        }
        $feed         = simplexml_load_file( 'https://asterios.tm/index.php?cmd=rss&serv=3&filter=keyboss&count=20&out=xml' );
        $bossesSearch = [
            'Kernon',
            'Death Lord Hallate',
            'Longhorn Golkonda',
            'Shilen\'s Messenger Cabrio',
        ];
        if ( isset( $feed->channel ) && isset( $feed->channel->item ) ) {
            foreach ( $feed->channel->item as $item ) {
                if ( empty( $bossesSearch ) ) {
                    break;
                }

                foreach ( $bossesSearch as $key => $boss ) {
                    if ( strpos( $item->title, $boss ) !== false ) {
                        $dateKill         = strtotime( $item->pubDate );
                        $respawnStart     = strtotime( '+18 hours', $dateKill );
                        $respawnEnd       = strtotime( '+30 hours', $dateKill );
                        $currentTime      = time() + 3 * 60 * 60;
                        $isRespawnStarted = $currentTime > $respawnStart;
                        $statusResp       = $isRespawnStarted ? 'Респ идёт' : 'Респ не начался';
                        $timerStatus      = $isRespawnStarted ? 'До макс респа:' : 'До начала респа:';
                        $timerDate        = $isRespawnStarted ? $respawnEnd : $respawnStart;
                        $timerDate        = date( 'Y-m-d H:i', $timerDate );

                        $bosses[ $boss ] = [
                            'dateRespawnStart' => date( 'd.m.Y H:i:s', $respawnStart ),
                            'dateRespawnEnd'   => date( 'd.m.Y H:i:s', $respawnEnd ),
                            'statusResp'       => $statusResp,
                            'timerStatus'      => $timerStatus,
                            'timerDate'        => $timerDate,
                        ];
                        unset( $bossesSearch[ $key ] );
                    }
                }
            }

        }

        return $bosses;
    }
}
