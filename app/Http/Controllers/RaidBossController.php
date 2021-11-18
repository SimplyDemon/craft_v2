<?php

namespace App\Http\Controllers;

use App\Models\RaidBoss;
use Illuminate\Http\Request;

class RaidBossController extends Controller {

    /**
     * $type 'epic' or 'subclass'
     */
    public function getBossesDeathTime( $type ) {
        if ( $type === 'epic' ) {
            $feed = 'https://asterios.tm/index.php?cmd=rss&serv=3&filter=epic&count=100&out=xml';
        } else if ( $type === 'subclass' ) {
            $feed = 'https://asterios.tm/index.php?cmd=rss&serv=3&filter=keyboss&count=30&out=xml';
        } else {
            return null;
        }

        $boss = RaidBoss::where( [
            [ 'type', $type ],
        ] )->get()->first();

        /* Disable on local case of errors */
        if ( env( 'APP_ENV' ) !== 'local' ) {

            /* Update respawn info every 5 min */
            if ( getCurrentTimeInUnix() > strtotime( '+5 minutes', strtotime( $boss->updated_at ) ) ) {
                $subclassBossesFeed = simplexml_load_file( $feed );
                $this->updateRaidBossTime( $subclassBossesFeed );
            }
        }

        return RaidBoss::where( [
            [ 'type', $type ],
        ] )->get();
    }

    protected function updateRaidBossTime( $feed ) {
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
                    $respawnBase    = $boss->respawn_base;
                    $respawnDynamic = $boss->respawn_dynamic;

                    $dateFormat        = 'Y-m-d H:i:s';
                    $respawnHoursStart = $respawnBase - $respawnDynamic;
                    $respawnHoursEnd   = $respawnBase + $respawnDynamic;
                    $dateKill          = strtotime( $item->pubDate );
                    $respawnStart      = strtotime( "+{$respawnHoursStart} hours", $dateKill );
                    $respawnEnd        = strtotime( "+{$respawnHoursEnd} hours", $dateKill );
                    $currentTime       = getCurrentTimeInUnix();
                    $isRespawnStarted  = $currentTime > $respawnStart;
                    $statusRespawn     = $isRespawnStarted ? 'Респ идёт' : 'Респ не начался';
                    $timerStatus       = $isRespawnStarted ? 'До макс респа:' : 'До начала респа:';
                    $timerDate         = $isRespawnStarted ? $respawnEnd : $respawnStart;
                    $timerDate         = date( $dateFormat, $timerDate );

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
