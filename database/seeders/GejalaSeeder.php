<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_gejalas')->insert([
            [
                'id_gejala'   => 1,
                'nama_gejala' => 'Demam',
                'keterangan'  => 'Peningkatan suhu tubuh di atas normal (≥ 38°C)',
            ],
            [
                'id_gejala'   => 2,
                'nama_gejala' => 'Batuk',
                'keterangan'  => 'Keluarnya udara secara paksa dari paru-paru disertai suara khas',
            ],
        ]);
    }
}
