<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\M_menu;
use App\Models\M_pasien;

class C_pasien extends Controller
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
            'title'          => 'Data Pasien',
            'menu_byidlevel' => $this->menu_byidlevel,
            'pasiens'        => M_pasien::orderBy('id_pasien', 'DESC')->get()
        ];

        return view('pasien.V_pasien', $data);
    }

    public function create()
    {
        // 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pasien'   => 'required|string|max:255',
            'no_nik'        => 'required|string|max:255',
            'tanggal_lahir' => 'required|string',
            'tempat_lahir'  => 'required|string|max:255',
            'alamat'        => 'required|string',
        ], [
            Session::flash('error', 'Data gagal ditambah.')
        ]);

        $pasien                = new M_pasien();
        $pasien->nama_pasien   = $request->nama_pasien;
        $pasien->no_nik        = $request->no_nik;
        $pasien->tanggal_lahir = $request->tanggal_lahir;
        $pasien->tempat_lahir  = $request->tempat_lahir;
        $pasien->alamat        = $request->alamat;
        $pasien->save();

        return redirect()->route('pasien_index')->with('success', 'Data berhasil ditambah.');
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
            'nama_pasien'   => 'required|string|max:255',
            'no_nik'        => 'required|string|max:255',
            'tanggal_lahir' => 'required|string',
            'tempat_lahir'  => 'required|string|max:255',
            'alamat'        => 'required|string',
        ], [
            Session::flash('error', 'Data gagal diperbarui.')
        ]);

        $pasien = M_pasien::findOrFail($id);

        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->no_nik        = $request->no_nik;
        $pasien->tanggal_lahir = $request->tanggal_lahir;
        $pasien->tempat_lahir  = $request->tempat_lahir;
        $pasien->alamat        = $request->alamat;
        $pasien->save();

        return redirect()->route('pasien_index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $pasien = M_pasien::findOrFail($id);
        $pasien->delete();

        return redirect()->route('pasien_index')->with('success', 'Data berhasil dihapus.');
    }
}
