<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $fillable = ["schName", "schDescr", "schLocation", "schType_id", "schEmail", "schContactFname", "schContactLname",
                            "schContactNo"];
}
