<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GradeImageSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $grades = [ 'D', 'C', 'B', 'A', 'S', 'S-80', 'S-84' ];
        foreach ( $grades as $grade ) {

            copyFile( "image/grade/{$grade}.webp", "app/public/uploads/grade/" );
        }

    }
}
