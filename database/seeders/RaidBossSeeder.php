<?php

namespace Database\Seeders;

use App\Models\RaidBoss;
use Illuminate\Database\Seeder;

class RaidBossSeeder extends Seeder {

    public function run() {
        $this->addSubclassRb();
    }

    protected function addSubclassRb() {
        $someDate = '2021-11-05 12:30:17';

        RaidBoss::create( [
            'name'           => 'Shilen\'s Messenger Cabrio',
            'status_respawn' => '',
            'timer_status'   => '',
            'description'    => 'The Cemetery',
            'target'         => '/target Coffer of the Dead',
            'respawn_start'  => $someDate,
            'respawn_end'    => $someDate,
            'timer_date'     => $someDate,
            'updated_at'     => $someDate,
            'created_at'     => $someDate,
            'type'           => 'subclass',
        ] );

        RaidBoss::create( [
            'name'           => 'Death Lord Hallate',
            'status_respawn' => '',
            'timer_status'   => '',
            'description'    => 'ToI 3',
            'target'         => '/target Hallate\'s chest',
            'respawn_start'  => $someDate,
            'respawn_end'    => $someDate,
            'timer_date'     => $someDate,
            'updated_at'     => $someDate,
            'created_at'     => $someDate,
            'type'           => 'subclass',
        ] );

        RaidBoss::create( [
            'name'           => 'Kernon',
            'status_respawn' => '',
            'timer_status'   => '',
            'description'    => 'ToI 8',
            'target'         => '/target Chest of Kernon',
            'respawn_start'  => $someDate,
            'respawn_end'    => $someDate,
            'timer_date'     => $someDate,
            'updated_at'     => $someDate,
            'created_at'     => $someDate,
            'type'           => 'subclass',
        ] );

        RaidBoss::create( [
            'name'           => 'Longhorn Golkonda',
            'status_respawn' => '',
            'timer_status'   => '',
            'description'    => 'ToI 11',
            'target'         => '/target Chest of Golkonda',
            'respawn_start'  => $someDate,
            'respawn_end'    => $someDate,
            'timer_date'     => $someDate,
            'updated_at'     => $someDate,
            'created_at'     => $someDate,
            'type'           => 'subclass',
        ] );

    }
}
