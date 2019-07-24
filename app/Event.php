<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable =[
     'title','content','featured_img','event_category_id','start_date','end_date'

    ];

    public function eventCategory(){
    	return $this->belongsTo('App/EventCategory');
    }

}
