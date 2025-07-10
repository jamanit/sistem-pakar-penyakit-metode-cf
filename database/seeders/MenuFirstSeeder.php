<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuFirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_menufirsts')->insert([
            [
                'id_firstmenu'   => 20,
                'created_at'     => '2024-07-01 09:32:11',
                'created_by'     => 'Admin',
                'firstmenu_name' => 'Pengguna',
                'firstmenu_link' => 'user',
                'firstmenu_icon' => 'fas fa-user',
            ],
            [
                'id_firstmenu'   => 28,
                'created_at'     => '2024-07-04 11:07:14',
                'created_by'     => 'Admin',
                'firstmenu_name' => 'Aplikasi',
                'firstmenu_link' => '#',
                'firstmenu_icon' => 'fas fa-table',
            ],
            [
                'id_firstmenu'   => 29,
                'created_at'     => '2024-07-10 09:58:20',
                'created_by'     => 'Admin',
                'firstmenu_name' => 'Master',
                'firstmenu_link' => '#',
                'firstmenu_icon' => 'fas fa-table',
            ],
            [
                'id_firstmenu'   => 30,
                'created_at'     => '2024-07-10 11:24:57',
                'created_by'     => 'Admin',
                'firstmenu_name' => 'Diagnosa',
                'firstmenu_link' => 'diagnosa',
                'firstmenu_icon' => 'bi bi-heart-pulse-fill',
            ],
            [
                'id_firstmenu'   => 31,
                'created_at'     => '2024-07-10 13:38:50',
                'created_by'     => 'Admin',
                'firstmenu_name' => 'Pasien',
                'firstmenu_link' => 'pasien',
                'firstmenu_icon' => 'fas fa-users',
            ],
        ]);
    }
}
