<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    Protected $table = 'spps';

    Protected $fillable = [
        'nama_spp',
        'nominal',
        'tahun',
        'bulan'
    ];
}
