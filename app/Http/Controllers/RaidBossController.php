<?php

namespace App\Http\Controllers;

use App\Models\RaidBoss;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RaidBossController extends Controller
{
    const QUERY_EXCEPTION_READABLE_MESSAGE = 2;
    protected bool $isUseProxy = true;
    protected int $intervalForUpdateBossTimerInMin = 10;

    /**
     * $type 'epic' or 'subclass'
     * $server x1 is 3; x5 is 0; x7 is 8
     */
    public function getBossesDeathTime(string $type, string $server)
    {
        $feedFilter = $type;
        if ($type === 'subclass') {
            $feedFilter = 'keyboss';
        }

        if ($server === 'x1') {
            $feedServer = 3;
        } elseif ($server === 'x5') {
            $feedServer = 0;
        } elseif ($server === 'x7') {
            $feedServer = 8;
        } else {
            return null;
        }

        $feed = "https://asterios.tm/index.php?cmd=rss&serv={$feedServer}&filter={$feedFilter}&count=1000&out=xml";

        $boss = RaidBoss::where([
            ['type', $type],
        ])->where([
            ['server', $server],
        ])->get()->first();

        /* Update respawn info by interval time */
        if (getCurrentTimeInUnix() > strtotime("+{$this->intervalForUpdateBossTimerInMin} minutes",
                strtotime($boss->updated_at))) {
            try {
                if ($this->isUseProxy) {
                    $feedXml            = curlRequestWithProxy($feed);
                    $subclassBossesFeed = simplexml_load_string($feedXml);
                } else {
                    $subclassBossesFeed = simplexml_load_file($feed);
                }

                $this->updateRaidBossTime($subclassBossesFeed, $server);
            } catch (\Exception $exception) {
                $exceptionMessage = $exception->getMessage();
                $exceptionLine    = $exception->getLine();
                $exceptionFile    = $exception->getFile();
                Log::channel('bossesParser')->info('Feed Url: '.$feed);
                Log::channel('bossesParser')->info("Message: {$exceptionMessage}. {$exceptionFile}:{$exceptionLine}");
            }
        }

        return RaidBoss::where([
            ['type', $type],
        ])->where([
            ['server', $server],
        ])->get();
    }

    protected function updateRaidBossTime($feed, $server)
    {
        $updatedBosses = [];

        if (isset($feed->channel) && isset($feed->channel->item)) {
            foreach ($feed->channel->item as $item) {
                $bossMessagePrefix = ' was killed';

                /* If that info not about raid boss */
                if (strpos($item->title, $bossMessagePrefix) === false) {
                    continue;
                }
                $bossName = explode($bossMessagePrefix, $item->title)[0];
                $bossName = str_replace('Boss ', '', $bossName);

                if (in_array($bossName, $updatedBosses)) {
                    continue;
                }
                $updatedBosses[] = $bossName;
                $boss            = RaidBoss::where('name', 'like', "%$bossName%")->where([
                    ['server', $server],
                ])->first();
                if ( ! empty($boss)) {
                    $respawnBase    = $boss->respawn_base;
                    $respawnDynamic = $boss->respawn_dynamic;

                    $dateFormat        = 'Y-m-d H:i:s';
                    $respawnHoursStart = $respawnBase - $respawnDynamic;
                    $respawnHoursEnd   = $respawnBase + $respawnDynamic;
                    $dateKill          = strtotime($item->pubDate);
                    $respawnStart      = strtotime("+{$respawnHoursStart} hours", $dateKill);
                    $respawnEnd        = strtotime("+{$respawnHoursEnd} hours", $dateKill);
                    $currentTime       = getCurrentTimeInUnix();
                    $isRespawnStarted  = $currentTime > $respawnStart;
                    $statusRespawn     = $isRespawnStarted ? 'Респ идёт' : 'Респ не начался';
                    $timerStatus       = $isRespawnStarted ? 'До макс респа:' : 'До начала респа:';
                    $timerDate         = $isRespawnStarted ? $respawnEnd : $respawnStart;
                    $timerDate         = date($dateFormat, $timerDate);

                    $boss->update([
                        'status_respawn'     => $statusRespawn,
                        'respawn_start'      => date($dateFormat, $respawnStart),
                        'respawn_end'        => date($dateFormat, $respawnEnd),
                        'timer_date'         => $timerDate,
                        'timer_status'       => $timerStatus,
                        'updated_at'         => getCurrentTimeInUnix(),
                        'is_respawn_started' => $isRespawnStarted,
                    ]);
                }
            }
        }
    }

}
