<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    //muchos a uno
    public function accesorio(){
        return $this->belongsTo('App\Models\Accesorio');
    }

    public function bijouterie(){
        return $this->belongsTo('App\Models\Bijouterie');
    }

    public function lenceria(){
        return $this->belongsTo('App\Models\Lenceria');
    }
}
