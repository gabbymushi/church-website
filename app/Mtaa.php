<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mtaa extends Model
{
    
    public function staffs(){
    	return $this->hasMany('App\Staff');
    }
}
