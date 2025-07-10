<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_penyakits')->insert([
            [
                'id_penyakit'   => 1,
                'nama_penyakit' => 'Flu',
                'keterangan'    => 'Penyakit ringan akibat virus',
                'solusi'        => 'Minum obat flu dan istirahat',
            ],
        ]);
    }
}
