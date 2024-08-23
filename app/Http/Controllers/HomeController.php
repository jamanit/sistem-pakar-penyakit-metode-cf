<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\M_menu;
use App\Models\M_pasien;
use App\Models\M_diagnosa;
use App\Models\M_gejala;
use App\Models\M_penyakit;

class HomeController extends Controller
{
    protected $menu_byidlevel;

    public function __construct()
    {
        $this->middleware('auth');
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
            'title'          => 'Dashboard',
            'menu_byidlevel' => $this->menu_byidlevel,
            'total_pasien'   => M_pasien::count(),
            'total_diagnosa' => M_diagnosa::count(),
            'total_gejala'   => M_gejala::count(),
            'total_penyakit' => M_penyakit::count()
        ];
        return view('home', $data);
    }
}
