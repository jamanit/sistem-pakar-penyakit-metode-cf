<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tb_levels')->insert([
            [
                'id_level'   => 1,
                'level_name' => 'Admin',
                'create'     => true,
                'read'       => true,
                'update'     => true,
                'delete'     => true,
            ],
            [
                'id_level'   => 2,
                'level_name' => 'Doktor',
                'create'     => true,
                'read'       => true,
                'update'     => true,
                'delete'     => false,
            ],
            [
                'id_level'   => 14,
                'level_name' => 'Anonim',
                'create'     => false,
                'read'       => true,
                'update'     => false,
                'delete'     => false,
            ],
        ]);
    }
}
