<?php

namespace Database\Seeders;

use Database\Seeders\Recipe\ShieldSeeder;
use Database\Seeders\Recipe\SigilSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call( [
            UserSeeder::class,
            CategorySeeder::class,
            ResourceSeeder::class,
            RecipeSeeder::class,
            RecipeResourceSeeder::class,
            GradeImageSeeder::class,
            RaidBossSeeder::class,
        ] );
    }
}
