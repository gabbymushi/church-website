<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable=['title','content','user_id'];
    public function tags(){
        return $this->belongsToMany('App\Tag','news_tags');
    }
    public function files(){
        return $this->hasMany('App\File');
    }
}
