<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = ['school_id','guardian_id','student_id', 'amntpaid','accountRef', 'currency'];


    public function user()
     {
         return $this->belongsTo(User::class);
     }

}
