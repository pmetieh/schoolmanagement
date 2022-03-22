<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MobilePayment extends Model
{
    //
    protected $fillable = ['school_id','guardian_id','student_id','mobileNo','amntpaid','currency','description'];
}
