<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\M_menu;

class C_menu extends Controller
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
            'title'          => 'Menu',
            'menu_byidlevel' => $this->menu_byidlevel,
            'firstmenus'     => M_menu::firstmenus(),
            'secondmenus'    => M_menu::secondmenus()
        ];

        return view('menu.V_menu', $data);
    }

    // firstmenu
    public function firstmenu_store(Request $request)
    {
        $request->validate([
            'firstmenu_name' => 'required|string|max:255',
            'firstmenu_link' => 'max:255',
            'firstmenu_icon' => 'max:255',
        ], [
            Session::flash('error', 'Data failed to be saved.')
        ]);

        $data = [
            'created_at'     => date('Y-m-d H:i:s'),
            'created_by'     => Auth::user()->name,
            'firstmenu_name' => $request->firstmenu_name,
            'firstmenu_name' => $request->firstmenu_name,
            'firstmenu_link' => $request->firstmenu_link,
            'firstmenu_icon' => $request->firstmenu_icon,
        ];
        M_menu::firstmenu_store($data);

        return redirect()->route('menu_index')->with('success', 'Data added successfully.');
    }

    public function firstmenu_update(Request $request, string $id)
    {
        $request->validate([
            'firstmenu_name' => 'required|string|max:255',
            'firstmenu_link' => 'max:255',
            'firstmenu_icon' => 'max:255',
        ]);

        $data = [
            'updated_at'     => date('Y-m-d H:i:s'),
            'updated_by'     => Auth::user()->name,
            'firstmenu_name' => $request->firstmenu_name,
            'firstmenu_link' => $request->firstmenu_link,
            'firstmenu_icon' => $request->firstmenu_icon,
        ];

        M_menu::firstmenu_update($id, $data);

        return redirect()->route('menu_index')->with('success', 'Data updated successfully.');
    }

    public function firstmenu_destroy(string $id)
    {
        M_menu::firstmenu_destroy($id);
        return redirect()->route('menu_index')->with('success', 'Data deleted successfully.');
    }

    // secondmenu
    public function secondmenu_store(Request $request)
    {
        $request->validate([
            'id_firstmenu'    => 'required|int',
            'secondmenu_name' => 'required|string|max:255',
            'secondmenu_link' => 'max:255',
            'secondmenu_icon' => 'max:255',
        ], [
            Session::flash('error', 'Data failed to be saved.')
        ]);

        $data = [
            'created_at'      => date('Y-m-d H:i:s'),
            'created_by'      => Auth::user()->name,
            'id_firstmenu'    => $request->id_firstmenu,
            'secondmenu_name' => $request->secondmenu_name,
            'secondmenu_name' => $request->secondmenu_name,
            'secondmenu_link' => $request->secondmenu_link,
            'secondmenu_icon' => $request->secondmenu_icon,
        ];
        M_menu::secondmenu_store($data);

        return redirect()->route('menu_index')->with('success', 'Data added successfully.');
    }

    public function secondmenu_update(Request $request, string $id)
    {
        $request->validate([
            'id_firstmenu'    => 'required|int',
            'secondmenu_name' => 'required|string|max:255',
            'secondmenu_link' => 'max:255',
            'secondmenu_icon' => 'max:255',
        ]);

        $data = [
            'updated_at'      => date('Y-m-d H:i:s'),
            'updated_by'      => Auth::user()->name,
            'id_firstmenu'    => $request->id_firstmenu,
            'secondmenu_name' => $request->secondmenu_name,
            'secondmenu_link' => $request->secondmenu_link,
            'secondmenu_icon' => $request->secondmenu_icon,
        ];

        M_menu::secondmenu_update($id, $data);

        return redirect()->route('menu_index')->with('success', 'Data updated successfully.');
    }

    public function secondmenu_destroy(string $id)
    {
        M_menu::secondmenu_destroy($id);
        return redirect()->route('menu_index')->with('success', 'Data deleted successfully.');
    }

    public function firstmenu_list()
    {
        $firstmenuList = M_menu::firstmenu_list();
        return response()->json($firstmenuList);
    }
}
