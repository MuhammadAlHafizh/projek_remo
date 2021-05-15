<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    Protected $table = 'kelas';

    Protected $fillable = ['nama_kelas','kompetensi'];

 
    
    public function siswa(){
    	return $this->hasMany(Siswa::class);
    }
}
