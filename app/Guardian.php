<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    //
    protected $fillable = ['fname', "lname", 'student_id',' mobileNo1', 'mobileNo2', 'email'];
}
