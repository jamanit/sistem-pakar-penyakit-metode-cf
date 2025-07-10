<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'     => 'Admin',
                'email'    => 'admin@email.com',
                'password' => Hash::make('password'),
                'id_level' => 1,
            ],
            [
                'name'     => 'Dokter',
                'email'    => 'dokter@email.com',
                'password' => Hash::make('password'),
                'id_level' => 2,
            ],
        ]);
    }
}
