<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\M_menu;
use App\Models\M_penyakit;

class C_penyakit extends Controller
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
            'title'          => 'Data Penyakit',
            'menu_byidlevel' => $this->menu_byidlevel,
            'penyakits'      => M_penyakit::orderBy('id_penyakit', 'DESC')->get()
        ];

        return view('penyakit.V_penyakit', $data);
    }

    public function create()
    {
        // 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_penyakit' => 'required|string|max:255',
        ], [
            Session::flash('error', 'Data gagal ditambah.')
        ]);

        $penyakit                = new M_penyakit();
        $penyakit->nama_penyakit = $request->nama_penyakit;
        $penyakit->keterangan    = $request->keterangan;
        $penyakit->save();

        return redirect()->route('penyakit_index')->with('success', 'Data berhasil ditambah.');
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
            'nama_penyakit' => 'required|string|max:255',
        ], [
            Session::flash('error', 'Data gagal diperbarui.')
        ]);

        $penyakit = M_penyakit::findOrFail($id);

        $penyakit->nama_penyakit = $request->nama_penyakit;
        $penyakit->keterangan    = $request->keterangan;
        $penyakit->save();

        return redirect()->route('penyakit_index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $penyakit = M_penyakit::findOrFail($id);
        $penyakit->delete();

        return redirect()->route('penyakit_index')->with('success', 'Data berhasil dihapus.');
    }
}
