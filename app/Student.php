<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ["fName", "lName","user_id", "school_id", "class", "studentIdNo"];
}
