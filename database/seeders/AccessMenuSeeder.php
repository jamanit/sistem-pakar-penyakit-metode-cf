<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_accessmenus')->insert([
            [
                'id_accessmenu' => 245,
                'created_at'    => '2024-07-10 13:38:50',
                'created_by'    => 'Admin',
                'id_level'      => 1,
                'id_firstmenu'  => 28,
                'id_secondmenu' => 29,
            ],
            [
                'id_accessmenu' => 246,
                'created_at'    => '2024-07-10 13:38:50',
                'created_by'    => 'Admin',
                'id_level'      => 1,
                'id_firstmenu'  => 28,
                'id_secondmenu' => 28,
            ],
            [
                'id_accessmenu' => 247,
                'created_at'    => '2024-07-10 13:38:50',
                'created_by'    => 'Admin',
                'id_level'      => 1,
                'id_firstmenu'  => 30,
                'id_secondmenu' => null,
            ],
            [
                'id_accessmenu' => 248,
                'created_at'    => '2024-07-10 13:38:50',
                'created_by'    => 'Admin',
                'id_level'      => 1,
                'id_firstmenu'  => 29,
                'id_secondmenu' => 37,
            ],
            [
                'id_accessmenu' => 249,
                'created_at'    => '2024-07-10 13:38:50',
                'created_by'    => 'Admin',
                'id_level'      => 1,
                'id_firstmenu'  => 29,
                'id_secondmenu' => 35,
            ],
            [
                'id_accessmenu' => 250,
                'created_at'    => '2024-07-10 13:38:50',
                'created_by'    => 'Admin',
                'id_level'      => 1,
                'id_firstmenu'  => 29,
                'id_secondmenu' => 36,
            ],
            [
                'id_accessmenu' => 251,
                'created_at'    => '2024-07-10 13:38:50',
                'created_by'    => 'Admin',
                'id_level'      => 1,
                'id_firstmenu'  => 31,
                'id_secondmenu' => null,
            ],
            [
                'id_accessmenu' => 252,
                'created_at'    => '2024-07-10 13:38:50',
                'created_by'    => 'Admin',
                'id_level'      => 1,
                'id_firstmenu'  => 20,
                'id_secondmenu' => null,
            ],
            [
                'id_accessmenu' => 253,
                'created_at'    => '2024-07-10 13:38:50',
                'created_by'    => 'Admin',
                'id_level'      => 2,
                'id_firstmenu'  => 30,
                'id_secondmenu' => null,
            ],
            [
                'id_accessmenu' => 254,
                'created_at'    => '2024-07-10 13:38:50',
                'created_by'    => 'Admin',
                'id_level'      => 2,
                'id_firstmenu'  => 31,
                'id_secondmenu' => null,
            ],
        ]);
    }
}
