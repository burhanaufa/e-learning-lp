<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa_jawaban extends Model
{
    protected $fillable = [

        'isi_jawaban_siswa',

    ];

    public function siswa()
     {
         return $this->belongsToMany('App\Siswa');
     }
     public function jawaban()
     {
         return $this->belongsToMany('App\Jawaban');
     }
}
