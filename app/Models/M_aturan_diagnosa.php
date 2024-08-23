<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_aturan_diagnosa extends Model
{
    use HasFactory;

    protected $table = 'tb_aturan_diagnosas';

    protected $primaryKey = 'id_aturan_diagnosa';

    protected $fillable = [
        'id_gejala',
        'id_penyakit',
        'cf_expert',
    ];

    public $timestamps = true;

    public function gejala()
    {
        return $this->belongsTo(M_gejala::class, 'id_gejala', 'id_gejala');
    }

    public function penyakit()
    {
        return $this->belongsTo(M_penyakit::class, 'id_penyakit', 'id_penyakit');
    }

    public function diagnosa_details()
    {
        return $this->hasMany(M_diagnosa_detail::class, 'id_aturan_diagnosa', 'id_aturan_diagnosa');
    }
}
