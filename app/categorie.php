<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $fillable = ['category_name'];

    public function book(){
        return $this->belongsTo('App\Book');
    }
}
