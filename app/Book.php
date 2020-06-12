<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['judul','jenis','jumlah','keterangan','kategori'];

    public function categories(){
        return $this->hasMany('App\categorie');
    }
}
