<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tour;
class Gallery extends Model
{
    public function tour(){
        return $this->belongsTo('App\Tour');
    }
}
