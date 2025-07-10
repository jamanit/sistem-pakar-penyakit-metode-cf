<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AturanDiagnosaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_aturan_diagnosas')->insert([
            [
                'id_aturan_diagnosa' => 1,
                'id_gejala'          => 1,     // demam
                'id_penyakit'        => 1,     // flu
                'cf_expert'          => 0.8,
            ],
            [
                'id_aturan_diagnosa' => 2,
                'id_gejala'          => 2,       // batuk
                'id_penyakit'        => 1,       // flu
                'cf_expert'          => 0.7,
            ],
        ]);
    }
}
