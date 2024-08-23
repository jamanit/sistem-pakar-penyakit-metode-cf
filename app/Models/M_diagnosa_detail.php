<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_diagnosa_detail extends Model
{
    use HasFactory;

    protected $table = 'tb_diagnosa_details';

    protected $primaryKey = 'id_diagnosa_detail';

    protected $fillable = [
        'id_diagnosa',
        'id_gejala',
        'cf_user',
        'cf_expert',
        'cf_he',
    ];

    public $timestamps = true;

    public function gejala()
    {
        return $this->belongsTo(M_gejala::class, 'id_gejala', 'id_gejala');
    }
}
