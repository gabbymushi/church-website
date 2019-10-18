<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jimbo extends Model
{
    public function sharikas(){
    	return $this->hasMany('App\Sharika');
    }
}
