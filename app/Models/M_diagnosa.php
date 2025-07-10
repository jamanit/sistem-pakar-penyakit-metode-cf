<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_diagnosa extends Model
{
    use HasFactory;

    protected $table = 'tb_diagnosas';

    protected $primaryKey = 'id_diagnosa';

    protected $guarded = [];

    public $timestamps = true;

    public function pasien()
    {
        return $this->belongsTo(M_pasien::class, 'id_pasien', 'id_pasien');
    }

    public function penyakit()
    {
        return $this->belongsTo(M_penyakit::class, 'id_penyakit', 'id_penyakit');
    }

    public function user()
    {
        return $this->belongsTo(M_user::class, 'id_user', 'id');
    }
}
