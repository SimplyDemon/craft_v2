<?php

namespace Database\Seeders;

use Database\Seeders\Recipe\Extra\Attack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipesExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipesAttack = new Attack();
        $recipesAttack->seed();
    }
}
