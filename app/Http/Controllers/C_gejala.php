<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\M_menu;
use App\Models\M_gejala;

class C_gejala extends Controller
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
            'title'          => 'Data Gejala',
            'menu_byidlevel' => $this->menu_byidlevel,
            'gejalas'        => M_gejala::orderBy('id_gejala', 'DESC')->get()
        ];

        return view('gejala.V_gejala', $data);
    }

    public function create()
    {
        // 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_gejala' => 'required|string|max:255',
            'keterangan'  => 'nullable|string',
        ], [
            Session::flash('error', 'Data gagal ditambah.')
        ]);

        $gejala              = new M_gejala();
        $gejala->nama_gejala = $request->nama_gejala;
        $gejala->keterangan  = $request->keterangan;
        $gejala->save();

        return redirect()->route('gejala_index')->with('success', 'Data berhasil ditambah.');
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
            'nama_gejala' => 'required|string|max:255',
            'keterangan'  => 'nullable|string',
        ], [
            Session::flash('error', 'Data gagal diperbarui.')
        ]);

        $gejala = M_gejala::findOrFail($id);

        $gejala->nama_gejala = $request->nama_gejala;
        $gejala->keterangan  = $request->keterangan;
        $gejala->save();

        return redirect()->route('gejala_index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $gejala = M_gejala::findOrFail($id);
        $gejala->delete();

        return redirect()->route('gejala_index')->with('success', 'Data berhasil dihapus.');
    }
}
