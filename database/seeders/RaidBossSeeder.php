<?php

namespace Database\Seeders;

use App\Models\RaidBoss;
use Illuminate\Database\Seeder;

class RaidBossSeeder extends Seeder {

    public function run() {
        $this->addSubclassRb();
        $this->addEpicRb();
    }

    protected function addSubclassRb() {
        $respawnBase    = 24;
        $respawnDynamic = 6;
        $someDate       = '2021-11-05 12:30:17';

        $cabrioArgs = [
            'name'            => 'Shilen\'s Messenger Cabrio',
            'status_respawn'  => '',
            'timer_status'    => '',
            'description'     => 'The Cemetery',
            'target'          => '/target Coffer of the Dead',
            'respawn_start'   => $someDate,
            'respawn_end'     => $someDate,
            'timer_date'      => $someDate,
            'updated_at'      => $someDate,
            'created_at'      => $someDate,
            'type'            => 'subclass',
            'respawn_base'    => $respawnBase,
            'respawn_dynamic' => $respawnDynamic,
        ];

        $hallateArgs = [
            'name'            => 'Death Lord Hallate',
            'status_respawn'  => '',
            'timer_status'    => '',
            'description'     => 'ToI 3',
            'target'          => '/target Hallate\'s chest',
            'respawn_start'   => $someDate,
            'respawn_end'     => $someDate,
            'timer_date'      => $someDate,
            'updated_at'      => $someDate,
            'created_at'      => $someDate,
            'type'            => 'subclass',
            'respawn_base'    => $respawnBase,
            'respawn_dynamic' => $respawnDynamic,
        ];

        $kernonArgs = [
            'name'            => 'Kernon',
            'status_respawn'  => '',
            'timer_status'    => '',
            'description'     => 'ToI 8',
            'target'          => '/target Chest of Kernon',
            'respawn_start'   => $someDate,
            'respawn_end'     => $someDate,
            'timer_date'      => $someDate,
            'updated_at'      => $someDate,
            'created_at'      => $someDate,
            'type'            => 'subclass',
            'respawn_base'    => $respawnBase,
            'respawn_dynamic' => $respawnDynamic,
        ];

        $golkondaArgs = [
            'name'            => 'Longhorn Golkonda',
            'status_respawn'  => '',
            'timer_status'    => '',
            'description'     => 'ToI 11',
            'target'          => '/target Chest of Golkonda',
            'respawn_start'   => $someDate,
            'respawn_end'     => $someDate,
            'timer_date'      => $someDate,
            'updated_at'      => $someDate,
            'created_at'      => $someDate,
            'type'            => 'subclass',
            'respawn_base'    => $respawnBase,
            'respawn_dynamic' => $respawnDynamic,
        ];

        $cabrioArgsX5   = $cabrioArgs;
        $hallateArgsX5  = $hallateArgs;
        $kernonArgsX5   = $kernonArgs;
        $golkondaArgsX5 = $golkondaArgs;

        $cabrioArgsX5['server']   = 'x5';
        $hallateArgsX5['server']  = 'x5';
        $kernonArgsX5['server']   = 'x5';
        $golkondaArgsX5['server'] = 'x5';

        $cabrioArgsX7 = $cabrioArgs;
        $hallateArgsX7 = $hallateArgs;
        $kernonArgsX7 = $kernonArgs;
        $golkondaArgsX7 = $golkondaArgs;

        $cabrioArgsX7['server'] = 'x7';
        $hallateArgsX7['server'] = 'x7';
        $kernonArgsX7['server'] = 'x7';
        $golkondaArgsX7['server'] = 'x7';

        $cabrioArgsX15 = $cabrioArgs;
        $hallateArgsX15 = $hallateArgs;
        $kernonArgsX15 = $kernonArgs;
        $golkondaArgsX15 = $golkondaArgs;

        $cabrioArgsX15['server'] = 'x1.5';
        $hallateArgsX15['server'] = 'x1.5';
        $kernonArgsX15['server'] = 'x1.5';
        $golkondaArgsX15['server'] = 'x1.5';


        /* x1 bosses */
        RaidBoss::create($cabrioArgs);
        RaidBoss::create($hallateArgs);
        RaidBoss::create($kernonArgs);
        RaidBoss::create($golkondaArgs);

        /* x5 bosses */
        RaidBoss::create($cabrioArgsX5);
        RaidBoss::create($hallateArgsX5);
        RaidBoss::create($kernonArgsX5);
        RaidBoss::create($golkondaArgsX5);

        /* x7 bosses */
        RaidBoss::create($cabrioArgsX7);
        RaidBoss::create($hallateArgsX7);
        RaidBoss::create($kernonArgsX7);
        RaidBoss::create($golkondaArgsX7);

        /* x1.5 bosses */
        RaidBoss::create($cabrioArgsX15);
        RaidBoss::create($hallateArgsX15);
        RaidBoss::create($kernonArgsX15);
        RaidBoss::create($golkondaArgsX15);
    }

    protected function addEpicRb() {
        $someDate = '2021-11-05 12:30:17';

        $antharasArgs = [
            'name'            => 'Antharas',
            'status_respawn'  => '',
            'timer_status'    => '',
            'description'     => 'LoA',
            'respawn_start'   => $someDate,
            'respawn_end'     => $someDate,
            'timer_date'      => $someDate,
            'updated_at'      => $someDate,
            'created_at'      => $someDate,
            'type'            => 'epic',
            'respawn_base'    => 228,
            'respawn_dynamic' => 12,
        ];

        $valacasArgs = [
            'name'            => 'Valakas',
            'status_respawn'  => '',
            'timer_status'    => '',
            'description'     => 'FoG',
            'respawn_start'   => $someDate,
            'respawn_end'     => $someDate,
            'timer_date'      => $someDate,
            'updated_at'      => $someDate,
            'created_at'      => $someDate,
            'type'            => 'epic',
            'respawn_base'    => 228,
            'respawn_dynamic' => 12,
        ];

        $baiumArgs = [
            'name'            => 'Baium',
            'status_respawn'  => '',
            'timer_status'    => '',
            'description'     => 'ToI',
            'respawn_start'   => $someDate,
            'respawn_end'     => $someDate,
            'timer_date'      => $someDate,
            'updated_at'      => $someDate,
            'created_at'      => $someDate,
            'type'            => 'epic',
            'respawn_base'    => 108,
            'respawn_dynamic' => 12,
        ];

        $antharasArgsX5 = $antharasArgs;
        $valacasArgsX5  = $valacasArgs;
        $baiumArgsX5    = $baiumArgs;

        $antharasArgsX5['server'] = 'x5';
        $valacasArgsX5['server']  = 'x5';
        $baiumArgsX5['server']    = 'x5';

        $antharasArgsX7 = $antharasArgs;
        $valacasArgsX7  = $valacasArgs;
        $baiumArgsX7    = $baiumArgs;

        $antharasArgsX7['server'] = 'x7';
        $valacasArgsX7['server']  = 'x7';
        $baiumArgsX7['server']    = 'x7';

        /* x1 bosses */
        RaidBoss::create($antharasArgs);
        RaidBoss::create($valacasArgs);
        RaidBoss::create($baiumArgs);

        /* x5 bosses */
        RaidBoss::create($antharasArgsX5);
        RaidBoss::create($valacasArgsX5);
        RaidBoss::create($baiumArgsX5);

        /* x7 bosses */
        RaidBoss::create($antharasArgsX7);
        RaidBoss::create($valacasArgsX7);
        RaidBoss::create($baiumArgsX7);
    }
}
