<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\M_menu;
use App\Models\M_aturan_diagnosa;
use App\Models\M_gejala;
use App\Models\M_penyakit;

class C_aturan_diagnosa extends Controller
{
    protected $menu_byidlevel;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (auth()->check() && auth()->user()->id_level) {
                $this->menu_byidlevel = M_menu::menu_byidlevel(auth()->user()->id_level);
            }
            return $next($request);
        });
    }

    public function index()
    {
        $data = [
            'title'            => 'Data Aturan Diagnosa',
            'menu_byidlevel'   => $this->menu_byidlevel,
            'gejalas'          => M_gejala::orderBy('nama_gejala', 'ASC')->get(),
            'penyakits'        => M_penyakit::orderBy('nama_penyakit', 'ASC')->get(),
            'aturan_diagnosas' => M_aturan_diagnosa::with('gejala', 'penyakit')->orderBy('id_aturan_diagnosa', 'DESC')->get()
        ];

        return view('aturan_diagnosa.V_aturan_diagnosa', $data);
    }

    public function create()
    {
        // 
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_gejala'   => 'required|string',
            'id_penyakit' => 'required|string',
            'cf_expert'   => 'required|string|max:255',
        ], [
            Session::flash('error', 'Data gagal ditambah.')
        ]);

        $aturan_diagnosa              = new M_aturan_diagnosa();
        $aturan_diagnosa->id_gejala   = $request->id_gejala;
        $aturan_diagnosa->id_penyakit = $request->id_penyakit;
        $aturan_diagnosa->cf_expert   = $request->cf_expert;
        $aturan_diagnosa->save();

        return redirect()->route('aturan_diagnosa_index')->with('success', 'Data berhasil ditambah.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //   
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_gejala'   => 'required|string',
            'id_penyakit' => 'required|string',
            'cf_expert'   => 'required|string|max:255',
        ], [
            Session::flash('error', 'Data gagal diperbarui.')
        ]);

        $aturan_diagnosa = M_aturan_diagnosa::findOrFail($id);

        $aturan_diagnosa->id_gejala   = $request->id_gejala;
        $aturan_diagnosa->id_penyakit = $request->id_penyakit;
        $aturan_diagnosa->cf_expert   = $request->cf_expert;
        $aturan_diagnosa->save();

        return redirect()->route('aturan_diagnosa_index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $aturan_diagnosa = M_aturan_diagnosa::findOrFail($id);
        $aturan_diagnosa->delete();

        return redirect()->route('aturan_diagnosa_index')->with('success', 'Data berhasil dihapus.');
    }
}
