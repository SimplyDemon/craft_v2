<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::create( [
            'is_admin'            => 1,
            'is_can_update_price' => 1,
            'name'                => 'sd',
            'email'               => 'test@mail.ru',
            'password'            => Hash::make( 'test' ),
        ] );
    }
}
