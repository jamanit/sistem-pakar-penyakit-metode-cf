<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_accessmenu extends Model
{
    use HasFactory;

    protected $table = 'tb_accessmenus';

    protected $primaryKey = 'id_accessmenu';

    protected $fillable = [
        'created_by',
        'updated_by',
        'category_name',
        'activity_log',
        'id_level',
        'id_firstmenu',
        'id_secondmenu',
    ];

    public $timestamps = true;

    public static function level($id)
    {
        return DB::table('tb_levels')->select('id_level', 'level_name')->where('id_level', $id)->first();
    }

    public static function menus()
    {
        return DB::table('tb_menufirsts as A')
            ->leftJoin('tb_menuseconds as B', 'A.id_firstmenu', '=', 'B.id_firstmenu')
            ->select('A.id_firstmenu', 'A.firstmenu_name', 'B.id_secondmenu', 'B.secondmenu_name')
            ->orderBy('A.firstmenu_name')
            ->orderBy('B.secondmenu_name')
            ->get();
    }
}
