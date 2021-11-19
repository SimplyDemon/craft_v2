<?php

namespace App\Http\Controllers;

use App\Models\RaidBoss;
use Illuminate\Http\Request;

class RaidBossController extends Controller {

    /**
     * $type 'epic' or 'subclass'
     * $server x1 is 3; x5 is 0
     */
    public function getBossesDeathTime( string $type, string $server ) {
        $feedFilter = $type;
        if ( $type === 'subclass' ) {
            $feedFilter = 'keyboss';
        }

        if ( $server === 'x1' ) {
            $feedServer = 3;
        } else if ( $server === 'x5' ) {
            $feedServer = 0;
        } else {
            return null;
        }

        $feed = "https://asterios.tm/index.php?cmd=rss&serv={$feedServer}&filter={$feedFilter}&count=100&out=xml";

        $boss = RaidBoss::where( [
            [ 'type', $type ],
        ] )->where( [
            [ 'server', $server ],
        ] )->get()->first();

        /* Disable on local case of errors */
        if ( env( 'APP_ENV' ) !== 'local' ) {

            /* Update respawn info every 5 min */
            if ( getCurrentTimeInUnix() > strtotime( '+5 minutes', strtotime( $boss->updated_at ) ) ) {
                $subclassBossesFeed = simplexml_load_file( $feed );
                $this->updateRaidBossTime( $subclassBossesFeed, $server );
            }
        }

        return RaidBoss::where( [
            [ 'type', $type ],
        ] )->where( [
            [ 'server', $server ],
        ] )->get();
    }

    protected function updateRaidBossTime( $feed, $server ) {
        $updatedBosses = [];

        if ( isset( $feed->channel ) && isset( $feed->channel->item ) ) {
            foreach ( $feed->channel->item as $item ) {
                $bossName = explode( 'Убит босс ', $item->title )[1];

                if ( in_array( $bossName, $updatedBosses ) ) {
                    continue;
                }
                $updatedBosses[] = $bossName;
                $boss            = RaidBoss::where( 'name', 'like', "%$bossName%" )->where( [
                    [ 'server', $server ],
                ] )->first();
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
