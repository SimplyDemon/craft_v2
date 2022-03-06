<?php

namespace App\Http\Controllers;

use App\Models\RaidBoss;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RaidBossController extends Controller {
    const QUERY_EXCEPTION_READABLE_MESSAGE = 2;

    /**
     * $type 'epic' or 'subclass'
     * $server x1 is 3; x5 is 0; x7 is 8
     */
    public function getBossesDeathTime( string $type, string $server ) {
        $feedFilter = $type;
        if ( $type === 'subclass' ) {
            $feedFilter = 'keyboss';
        }

        if ( $server === 'x1' ) {
            $feedServer = 3;
        } elseif ($server === 'x5') {
            $feedServer = 0;
        } elseif ($server === 'x7') {
            $feedServer = 8;
        } else {
            return null;
        }

        $feed = "https://asterios.tm/index.php?cmd=rss&serv={$feedServer}&filter={$feedFilter}&count=1000&out=xml";

        $boss = RaidBoss::where( [
            [ 'type', $type ],
        ] )->where( [
            [ 'server', $server ],
        ] )->get()->first();

        /* Disable on local case of errors */
        if ( env( 'APP_ENV' ) !== 'local' ) {

            /* Update respawn info every 5 min */
            if ( getCurrentTimeInUnix() > strtotime( '+5 minutes', strtotime( $boss->updated_at ) ) ) {
                try {
                    $subclassBossesFeed = @simplexml_load_file($feed);
                    $this->updateRaidBossTime($subclassBossesFeed, $server);
                } catch (\Exception $exception) {
                    $message = $exception->getMessage();
                    Log::channel('bossesParser')->info('Feed Url: '.$feed);
                    Log::channel('bossesParser')->info($message);
                }
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
