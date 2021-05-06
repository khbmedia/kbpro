<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gallery;
use App\Destination;
class Tour extends Model
{
    
    public function gallery()
    {
        return $this->hasMany('App\Gallery');
    }
    public function destination(){

        return $this->belongTo('App\Destination');
    }
}
