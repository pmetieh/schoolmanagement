<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    //
    protected $fillable = ['fname', 'lname','user_id', "school_id"];
}
