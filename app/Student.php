<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ["fName", "lName", "school_id", "class", "studentIdNo"];
}
