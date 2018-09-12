<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends  Model
{
    // protected $guard = 'student';
     
    protected $fillable = [
        'firstname', 'lastname', 'gender', 'matric', 'department' , 'college', 'email', 'password', 'phone'
    ];
}
