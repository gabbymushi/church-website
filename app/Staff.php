<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = ['fname','mname','lname',
                            'designation',
                            'phone1',
                            'phone2',
                             'description',
                             'photo']; 
}
