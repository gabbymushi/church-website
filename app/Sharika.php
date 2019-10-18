<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sharika extends Model
{
    public function jimbo(){
    	return $this->belongsTo('App\Jimbo');
    }
}
