<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Geust;
class Book extends Model
{
    public function geust(){
        return $this->belongTo('App\Geust');
    }
}
