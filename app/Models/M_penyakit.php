<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_penyakit extends Model
{
    use HasFactory;

    protected $table = 'tb_penyakits';

    protected $primaryKey = 'id_penyakit';

    protected $fillable = [
        'nama_penyakit',
        'keterangan',
    ];

    public $timestamps = true;

    public function aturan_diagnosas()
    {
        return $this->hasMany(M_aturan_diagnosa::class, 'id_penyakit', 'id_penyakit');
    }

    public function diagnosas()
    {
        return $this->hasMany(M_diagnosa::class, 'id_penyakit', 'id_penyakit');
    }
}
