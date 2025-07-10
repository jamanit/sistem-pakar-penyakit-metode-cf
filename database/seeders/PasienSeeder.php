<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_pasiens')->insert([
            [
                'id_pasien'     => 1,
                'nama_pasien'   => 'Budi',
                'no_nik'        => '1234567890123456',
                'tanggal_lahir' => '2000-01-01',
                'tempat_lahir'  => 'Jakarta',
                'alamat'        => 'Jl. Testing No.1, Jakarta',
            ],
        ]);
    }
}
