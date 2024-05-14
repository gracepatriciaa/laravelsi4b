<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    public function fakultas() {
        return $this->belongsTo(fakultas::class,'fakultas_id');
        // return $this-> belongsto (nama model::class, 'foreign key')
        // 1 prodi 1 fakultas maka memakai belongsto
        // 1 prodi 2 fakultas pakai hasMany
    }
}
