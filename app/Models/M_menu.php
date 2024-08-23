<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_menu extends Model
{
    // firstmenu
    public static function firstmenus()
    {
        $query = DB::select('SELECT
                                    * 
                                FROM
                                    tb_menufirsts 
                                ORDER BY
                                    id_firstmenu DESC');
        return $query;
    }

    public static function firstmenu_byid($id)
    {
        return DB::table('tb_levels')->select('level_name')->where('id_level', $id)->first();
    }

    public static function firstmenu_store($data)
    {
        DB::table('tb_menufirsts')->insert($data);
    }

    public static function firstmenu_update($id, $data)
    {
        DB::table('tb_menufirsts')->where('id_firstmenu', $id)->update($data);
    }

    public static function firstmenu_destroy($id)
    {
        DB::table('tb_menufirsts')->where('id_firstmenu', $id)->delete();
    }

    // secondmenu
    public static function secondmenus()
    {
        $query = DB::select('SELECT
                                    A.*,
                                    b.firstmenu_name 
                                FROM
                                    tb_menuseconds AS A
                                    LEFT JOIN tb_menufirsts AS b ON A.id_firstmenu = b.id_firstmenu 
                                ORDER BY
                                    id_secondmenu DESC');
        return $query;
    }

    public static function secondmenu_store($data)
    {
        DB::table('tb_menuseconds')->insert($data);
    }

    public static function secondmenu_update($id, $data)
    {
        DB::table('tb_menuseconds')->where('id_secondmenu', $id)->update($data);
    }

    public static function secondmenu_destroy($id)
    {
        DB::table('tb_menuseconds')->where('id_secondmenu', $id)->delete();
    }

    // other
    public static function firstmenu_list()
    {
        $query = DB::select('SELECT id_firstmenu, firstmenu_name FROM tb_menufirsts ORDER BY firstmenu_name ASC');
        return $query;
    }

    public static function menu_byidlevel($id_level)
    {
        $menus = [];

        // Get first menu by level
        $firstMenus = DB::table('tb_menufirsts')
            ->join('tb_accessmenus', 'tb_menufirsts.id_firstmenu', '=', 'tb_accessmenus.id_firstmenu')
            ->where('tb_accessmenus.id_level', $id_level)
            ->select('tb_menufirsts.*')
            ->distinct()
            ->get();

        foreach ($firstMenus as $firstMenu) {
            $menu = [
                'id' => $firstMenu->id_firstmenu,
                'name' => $firstMenu->firstmenu_name,
                'link' => $firstMenu->firstmenu_link,
                'icon' => $firstMenu->firstmenu_icon,
                'children' => []
            ];

            // Get second menu by first menu
            $secondMenus = DB::table('tb_menuseconds')
                ->join('tb_accessmenus', 'tb_menuseconds.id_secondmenu', '=', 'tb_accessmenus.id_secondmenu')
                ->where('tb_accessmenus.id_level', $id_level)
                ->where('tb_menuseconds.id_firstmenu', $firstMenu->id_firstmenu)
                ->select('tb_menuseconds.*')
                ->distinct()
                ->get();

            foreach ($secondMenus as $secondMenu) {
                $secondMenuData = [
                    'id' => $secondMenu->id_secondmenu,
                    'name' => $secondMenu->secondmenu_name,
                    'link' => $secondMenu->secondmenu_link,
                    'icon' => $secondMenu->secondmenu_icon,
                    'children' => []
                ];

                $menu['children'][] = $secondMenuData;
            }

            $menus[] = $menu;
        }

        return $menus;
    }
}
