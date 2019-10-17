<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jimbo extends Model
{
    public function sharika(){
    	return $this->hasMany('App\Sharika');
    }
}
