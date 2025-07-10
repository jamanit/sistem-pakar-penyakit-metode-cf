<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenyakitSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tb_penyakits')->insert([
            [
                'id_penyakit'   => 1,
                'nama_penyakit' => 'Pilek Biasa',
                'keterangan'    => 'Infeksi ringan saluran pernapasan atas yang disebabkan oleh virus.',
                'solusi'        => 'Istirahat yang cukup, perbanyak cairan, dan konsumsi obat pereda gejala.',
            ],
            [
                'id_penyakit'   => 2,
                'nama_penyakit' => 'Pneumonia',
                'keterangan'    => 'Infeksi paru-paru yang menyebabkan peradangan pada kantung udara.',
                'solusi'        => 'Antibiotik (jika bakteri), rawat inap bila berat, dan terapi oksigen jika perlu.',
            ],
            [
                'id_penyakit'   => 3,
                'nama_penyakit' => 'Malaria',
                'keterangan'    => 'Penyakit menular akibat parasit Plasmodium yang ditularkan nyamuk.',
                'solusi'        => 'Obat anti-malaria seperti klorokuin atau artemisinin kombinasi.',
            ],
            [
                'id_penyakit'   => 4,
                'nama_penyakit' => 'Tipes',
                'keterangan'    => 'Infeksi bakteri Salmonella typhi yang menyerang saluran pencernaan.',
                'solusi'        => 'Antibiotik, rehidrasi, dan makanan lunak selama pemulihan.',
            ],
            [
                'id_penyakit'   => 5,
                'nama_penyakit' => 'Cacingan',
                'keterangan'    => 'Infeksi saluran pencernaan oleh cacing parasit.',
                'solusi'        => 'Pemberian obat cacing seperti albendazole atau mebendazole.',
            ],
            [
                'id_penyakit'   => 6,
                'nama_penyakit' => 'Influenza',
                'keterangan'    => 'Penyakit pernapasan akibat virus flu yang menular.',
                'solusi'        => 'Istirahat, konsumsi antivirus jika dibutuhkan, dan perbanyak cairan.',
            ],
            [
                'id_penyakit'   => 7,
                'nama_penyakit' => 'Hepatitis',
                'keterangan'    => 'Peradangan pada hati yang bisa disebabkan virus atau toksin.',
                'solusi'        => 'Terapi antiviral (untuk hepatitis B/C), istirahat dan pola hidup sehat.',
            ],
            [
                'id_penyakit'   => 8,
                'nama_penyakit' => 'Campak',
                'keterangan'    => 'Infeksi virus yang sangat menular dan menyebabkan ruam kulit.',
                'solusi'        => 'Imunisasi MMR, isolasi, dan penanganan simptomatik.',
            ],
            [
                'id_penyakit'   => 9,
                'nama_penyakit' => 'Demam Berdarah Dengue (DBD)',
                'keterangan'    => 'Infeksi virus dengue akibat gigitan nyamuk Aedes aegypti.',
                'solusi'        => 'Pantau trombosit, beri cairan, dan rawat inap jika parah.',
            ],
            [
                'id_penyakit'   => 10,
                'nama_penyakit' => 'Bronkitis Akut',
                'keterangan'    => 'Peradangan saluran bronkus akibat infeksi atau iritasi.',
                'solusi'        => 'Obat batuk, hindari rokok, dan cukup istirahat.',
            ],
            [
                'id_penyakit'   => 11,
                'nama_penyakit' => 'Laringitis',
                'keterangan'    => 'Peradangan pada pita suara atau laring.',
                'solusi'        => 'Istirahat suara, konsumsi air hangat, dan hindari iritan.',
            ],
            [
                'id_penyakit'   => 12,
                'nama_penyakit' => 'Faringitis',
                'keterangan'    => 'Peradangan pada faring (tenggorokan) akibat virus/bakteri.',
                'solusi'        => 'Kumur air garam, antibiotik jika bakteri, dan cukup cairan.',
            ],
            [
                'id_penyakit'   => 13,
                'nama_penyakit' => 'Sinusitis Akut',
                'keterangan'    => 'Peradangan pada sinus akibat infeksi atau alergi.',
                'solusi'        => 'Dekongestan, antibiotik bila bakteri, dan uap hangat.',
            ],
            [
                'id_penyakit'   => 14,
                'nama_penyakit' => 'Tuberkulosis (TBC)',
                'keterangan'    => 'Infeksi bakteri Mycobacterium tuberculosis yang menyerang paru-paru.',
                'solusi'        => 'Minum obat TBC secara rutin selama minimal 6 bulan.',
            ],
            [
                'id_penyakit'   => 15,
                'nama_penyakit' => 'Infeksi Telinga Tengah',
                'keterangan'    => 'Peradangan di rongga telinga tengah, sering terjadi pada anak-anak.',
                'solusi'        => 'Antibiotik bila perlu, pereda nyeri, dan pantau komplikasi.',
            ],
            [
                'id_penyakit'   => 16,
                'nama_penyakit' => 'Tonsilitis',
                'keterangan'    => 'Radang amandel yang disebabkan virus atau bakteri.',
                'solusi'        => 'Istirahat, pereda nyeri, dan antibiotik jika perlu.',
            ],
            [
                'id_penyakit'   => 17,
                'nama_penyakit' => 'Bronkiolitis',
                'keterangan'    => 'Infeksi saluran napas kecil (bronkiolus), sering pada bayi.',
                'solusi'        => 'Pantau pernapasan, berikan cairan, dan terapi oksigen jika parah.',
            ],
            [
                'id_penyakit'   => 18,
                'nama_penyakit' => 'Alergi Debu',
                'keterangan'    => 'Reaksi imun terhadap partikel debu yang terhirup.',
                'solusi'        => 'Hindari pemicu, minum antihistamin, dan jaga kebersihan.',
            ],
            [
                'id_penyakit'   => 19,
                'nama_penyakit' => 'Infeksi Jamur Paru-Paru',
                'keterangan'    => 'Infeksi paru-paru yang disebabkan oleh jamur seperti Aspergillus.',
                'solusi'        => 'Pemberian antijamur sesuai petunjuk dokter.',
            ],
        ]);
    }
}
