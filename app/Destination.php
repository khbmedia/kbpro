<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tour;
class Destination extends Model
{
    
    public function tour(){
        return $this->hasMany('App\Tour');
    }
}
