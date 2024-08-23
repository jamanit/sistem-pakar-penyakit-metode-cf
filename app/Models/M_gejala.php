<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_gejala extends Model
{
    use HasFactory;

    protected $table = 'tb_gejalas';

    protected $primaryKey = 'id_gejala';

    protected $fillable = [
        'nama_gejala',
    ];

    public $timestamps = true;

    public function aturan_diagnosas()
    {
        return $this->hasMany(M_aturan_diagnosa::class, 'id_gejala', 'id_gejala');
    }

    public function diagnosa_details()
    {
        return $this->hasMany(M_diagnosa_detail::class, 'id_gejala', 'id_gejala');
    }
}
