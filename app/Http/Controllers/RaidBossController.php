<?php

namespace App\Http\Controllers;

use App\Models\RaidBoss;
use Illuminate\Http\Request;

class RaidBossController extends Controller {


    public function getSubclassBossesDeathTime() {
        $boss = RaidBoss::where( [
            [ 'type', 'subclass' ],
        ] )->get()->first();

        /* Disable on local case of errors */
        if ( env( 'APP_ENV' ) !== 'local' ) {

            /* Update respawn info every 5 min */
            if ( getCurrentTimeInUnix() > strtotime( '+5 minutes', strtotime( $boss->updated_at ) ) ) {
                $this->updateRaidBossTime();
            }
        }

        return RaidBoss::where( [
            [ 'type', 'subclass' ],
        ] )->get();
    }

    protected function updateRaidBossTime() {
        $feed          = simplexml_load_file( 'https://asterios.tm/index.php?cmd=rss&serv=3&filter=keyboss&count=20&out=xml' );
        $updatedBosses = [];

        if ( isset( $feed->channel ) && isset( $feed->channel->item ) ) {
            foreach ( $feed->channel->item as $item ) {
                $bossName = explode( 'Убит босс ', $item->title )[1];

                if ( in_array( $bossName, $updatedBosses ) ) {
                    continue;
                }
                $updatedBosses[] = $bossName;
                $boss            = RaidBoss::where( 'name', 'like', "%$bossName%" )->first();
                if ( ! empty( $boss ) ) {
                    $dateFormat       = 'Y-m-d H:i:s';
                    $dateKill         = strtotime( $item->pubDate );
                    $respawnStart     = strtotime( '+18 hours', $dateKill );
                    $respawnEnd       = strtotime( '+30 hours', $dateKill );
                    $currentTime      = getCurrentTimeInUnix();
                    $isRespawnStarted = $currentTime > $respawnStart;
                    $statusRespawn    = $isRespawnStarted ? 'Респ идёт' : 'Респ не начался';
                    $timerStatus      = $isRespawnStarted ? 'До макс респа:' : 'До начала респа:';
                    $timerDate        = $isRespawnStarted ? $respawnEnd : $respawnStart;
                    $timerDate        = date( $dateFormat, $timerDate );

                    $boss->update( [
                        'status_respawn' => $statusRespawn,
                        'respawn_start'  => date( $dateFormat, $respawnStart ),
                        'respawn_end'    => date( $dateFormat, $respawnEnd ),
                        'timer_date'     => $timerDate,
                        'timer_status'   => $timerStatus,
                        'updated_at'     => getCurrentTimeInUnix(),
                    ] );

                }

            }

        }
    }
}
