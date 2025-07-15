<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\M_pasien;
use App\Models\M_gejala;
use App\Models\M_penyakit;
use App\Models\M_aturan_diagnosa;
use App\Models\M_diagnosa;
use App\Models\M_diagnosa_detail;

class FrontController extends Controller
{
    protected $menu_byidlevel;

    public function __construct()
    {
        //
    }

    public function index(string $id = null)
    {
        $data = [
            'title' => 'Halaman Depan',
        ];
        return view('front', $data);
    }

    public function check_pasien(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required|string',
            'alamat'      => 'required|string',
        ]);

        $diagnosa                = new M_diagnosa();
        $diagnosa->id_user       = '3';
        $diagnosa->kode_diagnosa = 'DIAG' . rand(0000, 9999);
        $diagnosa->nama_pasien   = $request->nama_pasien;
        $diagnosa->alamat        = $request->alamat;
        $diagnosa->status        = 'Proses';
        $diagnosa->save();

        return redirect()->route('front_edit_diagnosa', $diagnosa->id_diagnosa);
    }

    public function edit_diagnosa(string $id = null)
    {
        $data = [
            'title'            => 'Diagnosa',
            'diagnosa'         => M_diagnosa::with('pasien', 'penyakit', 'user')->find($id),
            'aturan_diagnosas' => M_aturan_diagnosa::with('gejala')->orderBy('id_aturan_diagnosa', 'DESC')->get(),
            'gejalas'          => M_gejala::orderBy('nama_gejala', 'ASC')->get(),
            'diagnosa_details' => M_diagnosa_detail::with('gejala')->orderBy('id_diagnosa_detail', 'DESC')->where('id_diagnosa', $id)->get()
        ];
        return view('front', $data);
    }

    private function hitungCF($cf_user, $cf_expert)
    {
        // Menghitung CF berdasarkan formula: CF = CF User * CF Expert
        return $cf_user * $cf_expert;
    }

    private function combineCF($cf_hasil)
    {
        // Menggabungkan CF berdasarkan formula: CF Combinasi = CF1 + CF2 * (1 - CF1)
        $cf_combine = array_shift($cf_hasil);
        foreach ($cf_hasil as $cf) {
            $cf_combine = $cf_combine + $cf * (1 - $cf_combine);
        }
        return $cf_combine;
    }

    private function getCFExpert($id_gejala)
    {
        // Mengambil CF Expert dari aturan berdasarkan ID gejala
        $aturan = M_aturan_diagnosa::where('id_gejala', $id_gejala)->first();
        return $aturan ? $aturan->cf_expert : 0;
    }

    private function hitungCFHE($cf_user, $cf_expert)
    {
        // Menghitung CF (H, E) berdasarkan formula: CF(H, E) = CF User * CF Expert
        return $cf_user * $cf_expert;
    }

    public function store_diagnosa_detail(Request $request)
    {
        $id_diagnosa = $request->id_diagnosa;

        // Validasi input dari request
        $request->validate([
            'gejala.*' => 'integer|distinct',   // Pastikan setiap id gejala adalah integer dan unik
        ], [
            'gejala.array'      => 'Gejala harus berupa array.',
            'gejala.*.integer'  => 'ID gejala harus berupa integer.',
            'gejala.*.distinct' => 'Gejala tidak boleh duplikat.',
        ]);

        $gejala_terpilih = $request->gejala;

        // Mengambil detail diagnosa yang ada
        $detail_diagnosa = M_diagnosa_detail::where('id_diagnosa', $id_diagnosa)->get();

        // Menghapus detail diagnosa yang tidak ada dalam daftar yang dipilih
        if (is_array($gejala_terpilih)) {
            foreach ($detail_diagnosa as $detail) {
                if (!in_array($detail->id_gejala, $gejala_terpilih)) {
                    $detail->delete();
                }
            }
        }

        $diagnosa = M_diagnosa::findOrFail($id_diagnosa);

        // Periksa apakah ada gejala yang dipilih
        if (empty($gejala_terpilih)) {
            $diagnosa->update([
                'id_penyakit' => null,
                'cf_result'   => null,
            ]);
            return redirect()->route('front_edit_diagnosa', $id_diagnosa)->with('error', 'Gejala harus dipilih.');
        } else {
            foreach ($gejala_terpilih as $id_gejala) {
                // Periksa apakah gejala sudah ada di detail diagnosa
                $existingDetail = M_diagnosa_detail::where('id_diagnosa', $id_diagnosa)
                    ->where('id_gejala', $id_gejala)
                    ->first();

                // Jika gejala belum ada, insert baru
                if (!$existingDetail) {
                    M_diagnosa_detail::create([
                        'id_diagnosa' => $id_diagnosa,
                        'id_gejala'   => $id_gejala,
                    ]);
                }
            }
        }

        return redirect()->route('front_edit_diagnosa', $id_diagnosa)->with('success', 'Data berhasil ditambah.');
    }

    public function start_diagnosa_detail(Request $request)
    {
        $id_diagnosa = $request->id_diagnosa;

        // Validasi input dari request
        $request->validate([
            'cf_user.*' => 'required|in:1,0.8,0.6,0.4,0.2,0',
        ], [
            'cf_user.*.required' => 'CF User harus diisi.',
            'cf_user.*.in'       => 'CF User tidak valid.'
        ]);

        $diagnosa = M_diagnosa::findOrFail($id_diagnosa);

        $gejala_terpilih = $request->gejala;
        $cf_users        = $request->cf_user;

        $cf_hasil = [];
        foreach ($gejala_terpilih as $index => $id_gejala) {
            $cf_user = $cf_users[$index];
            $aturan  = M_aturan_diagnosa::where('id_gejala', $id_gejala)->first();

            if ($aturan) {
                $cf_hasil[] = $this->hitungCF($cf_user, $aturan->cf_expert);
            }

            // Menyimpan detail diagnosa baru
            $cf_expert = $this->getCFExpert($id_gejala);
            $cf_he     = $this->hitungCFHE($cf_user, $cf_expert);

            M_diagnosa_detail::updateOrCreate([
                'id_diagnosa' => $id_diagnosa,
                'id_gejala'   => $id_gejala,
            ], [
                'cf_user'   => $cf_user,
                'cf_expert' => $cf_expert,
                'cf_he'     => $cf_he,
            ]);
        }

        // Mengambil keterangan penyakit berdasarkan ID penyakit yang ditemukan
        if ($aturan->id_penyakit) {
            $penyakit            = M_penyakit::find($aturan->id_penyakit);

            $nama_penyakit       = $penyakit->nama_penyakit ?? '-';
            $keterangan          = $penyakit->keterangan ?? '-';
            $solusi              = $penyakit->solusi ?? '-';
            $keterangan_penyakit = "Nama Penyakit: $nama_penyakit\nKeterangan: $keterangan\nSolusi: $solusi";
        }

        // Menghitung CF total dan update diagnosa
        $cf_total = $this->combineCF($cf_hasil);
        $diagnosa->update([
            'id_penyakit' => $aturan->id_penyakit ?? null,
            'cf_result'   => $cf_total,
            'keterangan'  => $keterangan_penyakit,
        ]);

        return redirect()->route('front_edit_diagnosa', $id_diagnosa)->with('success', 'Data berhasil diperbarui.');
    }

    public function print_diagnosa(string $id)
    {
        $data = [
            'title'            => 'LAPORAN DIAGNOSA PASIEN',
            'menu_byidlevel'   => $this->menu_byidlevel,
            'diagnosa'         => M_diagnosa::with('pasien', 'penyakit', 'user')->find($id),
            'aturan_diagnosas' => M_aturan_diagnosa::with('gejala')->orderBy('id_aturan_diagnosa', 'DESC')->get(),
            'gejalas'          => M_gejala::orderBy('nama_gejala', 'ASC')->get(),
            'diagnosa_details' => M_diagnosa_detail::with('gejala')->orderBy('id_diagnosa_detail', 'DESC')->where('id_diagnosa', $id)->get()
        ];

        return view('front_print_diagnosa', $data);
    }
}
