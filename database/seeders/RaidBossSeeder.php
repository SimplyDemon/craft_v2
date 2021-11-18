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

        RaidBoss::create( [
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
        ] );

        RaidBoss::create( [
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
        ] );

        RaidBoss::create( [
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
        ] );

        RaidBoss::create( [
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
        ] );

    }

    protected function addEpicRb() {
        $someDate = '2021-11-05 12:30:17';

        RaidBoss::create( [
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
        ] );

        RaidBoss::create( [
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
        ] );

        RaidBoss::create( [
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
        ] );

    }
}
