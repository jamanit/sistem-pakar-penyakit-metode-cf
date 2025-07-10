<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AturanDiagnosaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tb_aturan_diagnosas')->insert([
            ['id_aturan_diagnosa' => 1,  'id_gejala' => 2,  'id_penyakit' => 1,  'cf_expert' => 0.7],
            ['id_aturan_diagnosa' => 2,  'id_gejala' => 16, 'id_penyakit' => 2,  'cf_expert' => 0.85],
            ['id_aturan_diagnosa' => 3,  'id_gejala' => 16, 'id_penyakit' => 8,  'cf_expert' => 0.8],
            ['id_aturan_diagnosa' => 4,  'id_gejala' => 13, 'id_penyakit' => 8,  'cf_expert' => 0.8],
            ['id_aturan_diagnosa' => 5,  'id_gejala' => 14, 'id_penyakit' => 8,  'cf_expert' => 0.8],
            ['id_aturan_diagnosa' => 6,  'id_gejala' => 16, 'id_penyakit' => 11, 'cf_expert' => 0.9],
            ['id_aturan_diagnosa' => 7,  'id_gejala' => 17, 'id_penyakit' => 11, 'cf_expert' => 0.9],
            ['id_aturan_diagnosa' => 8,  'id_gejala' => 1,  'id_penyakit' => 6,  'cf_expert' => 0.85],
            ['id_aturan_diagnosa' => 9,  'id_gejala' => 2,  'id_penyakit' => 6,  'cf_expert' => 0.85],
            ['id_aturan_diagnosa' => 10, 'id_gejala' => 3,  'id_penyakit' => 6,  'cf_expert' => 0.85],
        ]);
    }
}
