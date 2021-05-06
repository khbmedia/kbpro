<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;
class Geust extends Model
{
    public function book(){
        return $this->hasMany('App\Book');
    }
}
