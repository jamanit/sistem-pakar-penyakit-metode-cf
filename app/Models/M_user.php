<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_user extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public $timestamps = true;

    public function level()
    {
        return $this->belongsTo(M_level::class, 'id_level');
    }

    public function diagnosas()
    {
        return $this->hasMany(M_diagnosa::class, 'id', 'id_user');
    }
}
