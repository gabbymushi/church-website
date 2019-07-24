<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = ['fname','mname','lname',
                            'designation',
                            'phone1',
                            'phone2',
                             'facebook_link',
                             'tweeter_link',
                             'instagram_link',
                             'other_link',
                             'description',
                             'photo']; 
}
