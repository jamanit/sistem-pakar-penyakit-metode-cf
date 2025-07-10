<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSecondSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_menuseconds')->insert([
            [
                'id_secondmenu'   => 28,
                'created_at'     => '2024-07-10 13:38:50',
                'created_by'     => 'Admin',
                'secondmenu_name' => 'Menu',
                'secondmenu_link' => 'menu',
                'secondmenu_icon' => 'far fa-circle',
                'id_firstmenu'    => 28,
            ],
            [
                'id_secondmenu'   => 29,
                'created_at'     => '2024-07-10 13:38:50',
                'created_by'     => 'Admin',
                'secondmenu_name' => 'Level',
                'secondmenu_link' => 'level',
                'secondmenu_icon' => 'far fa-circle',
                'id_firstmenu'    => 28,
            ],
            [
                'id_secondmenu'   => 35,
                'created_at'     => '2024-07-10 13:38:50',
                'created_by'     => 'Admin',
                'secondmenu_name' => 'Gejala',
                'secondmenu_link' => 'gejala',
                'secondmenu_icon' => 'far fa-circle',
                'id_firstmenu'    => 29,
            ],
            [
                'id_secondmenu'   => 36,
                'created_at'     => '2024-07-10 13:38:50',
                'created_by'     => 'Admin',
                'secondmenu_name' => 'Penyakit',
                'secondmenu_link' => 'penyakit',
                'secondmenu_icon' => 'far fa-circle',
                'id_firstmenu'    => 29,
            ],
            [
                'id_secondmenu'   => 37,
                'created_at'     => '2024-07-10 13:38:50',
                'created_by'     => 'Admin',
                'secondmenu_name' => 'Aturan Diagnosa',
                'secondmenu_link' => 'aturan_diagnosa',
                'secondmenu_icon' => 'far fa-circle',
                'id_firstmenu'    => 29,
            ],
        ]);
    }
}
