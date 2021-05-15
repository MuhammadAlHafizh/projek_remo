<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    Protected $table = 'tickets';

    Protected $fillable = ['user_id','kategori_id','judul','prioritas_id','status_id','message'];
}
