<?php

namespace Database\Seeders;

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
                'nama_gejala' => 'Demam Ringan',
                'keterangan'  => 'Suhu tubuh meningkat ringan, sekitar 37.5°C hingga 38°C',
            ],
            [
                'id_gejala'   => 2,
                'nama_gejala' => 'Batuk Ringan',
                'keterangan'  => 'Batuk tidak berdahak atau hanya sedikit, tidak terlalu mengganggu',
            ],
            [
                'id_gejala'   => 3,
                'nama_gejala' => 'Sesak Napas',
                'keterangan'  => 'Kesulitan bernapas atau rasa sesak di dada',
            ],
            [
                'id_gejala'   => 4,
                'nama_gejala' => 'Nyeri Otot',
                'keterangan'  => 'Pegal atau sakit di otot tubuh, sering di punggung dan kaki',
            ],
            [
                'id_gejala'   => 5,
                'nama_gejala' => 'Sakit Kepala',
                'keterangan'  => 'Nyeri berdenyut atau tekanan di kepala',
            ],
            [
                'id_gejala'   => 6,
                'nama_gejala' => 'Penyakit Kuning',
                'keterangan'  => 'Kulit dan mata tampak menguning, bisa disebabkan gangguan hati',
            ],
            [
                'id_gejala'   => 7,
                'nama_gejala' => 'Demam Tinggi',
                'keterangan'  => 'Suhu tubuh melebihi 38°C, sering disertai menggigil',
            ],
            [
                'id_gejala'   => 8,
                'nama_gejala' => 'Trombosit Turun',
                'keterangan'  => 'Kadar trombosit rendah dalam darah, bisa menyebabkan perdarahan',
            ],
            [
                'id_gejala'   => 9,
                'nama_gejala' => 'Muncul Bintik Merah',
                'keterangan'  => 'Ruam atau bintik merah muncul di kulit, sering sebagai reaksi tubuh',
            ],
            [
                'id_gejala'   => 10,
                'nama_gejala' => 'Sakit Di Persendian',
                'keterangan'  => 'Nyeri terasa pada area sendi seperti lutut atau siku',
            ],
            [
                'id_gejala'   => 11,
                'nama_gejala' => 'Nyeri Sendi',
                'keterangan'  => 'Rasa nyeri atau tidak nyaman di satu atau lebih sendi',
            ],
            [
                'id_gejala'   => 12,
                'nama_gejala' => 'Nyeri Perut',
                'keterangan'  => 'Rasa sakit atau kram di area perut',
            ],
            [
                'id_gejala'   => 13,
                'nama_gejala' => 'Mual',
                'keterangan'  => 'Rasa ingin muntah, biasanya karena gangguan pencernaan atau infeksi',
            ],
            [
                'id_gejala'   => 14,
                'nama_gejala' => 'Muntah',
                'keterangan'  => 'Mengeluarkan isi lambung melalui mulut secara paksa',
            ],
            [
                'id_gejala'   => 15,
                'nama_gejala' => 'Tubuh Menggigil',
                'keterangan'  => 'Tubuh bergetar karena kedinginan atau demam tinggi',
            ],
            [
                'id_gejala'   => 16,
                'nama_gejala' => 'Tubuh Nyeri',
                'keterangan'  => 'Sensasi sakit menyeluruh di seluruh tubuh',
            ],
            [
                'id_gejala'   => 17,
                'nama_gejala' => 'Pilek Ringan',
                'keterangan'  => 'Hidung berair atau tersumbat, biasanya disebabkan flu ringan',
            ],
        ]);
    }
}
