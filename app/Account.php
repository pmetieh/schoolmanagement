<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
    protected $fillable = ['school_id', 'mobilepaymentNo_LoneStar', 'mobilepaymentNo_Orange',
    "UBA_AccntRef", 'UBA_AccntRef', 'ECO_AccntRef', 'GTB_AccntRef', 'fee_highschool', 'fee_juniorhighSchool',
    'fee_elementary'];
}
