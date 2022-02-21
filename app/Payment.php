<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = ['user_id','amntpaid','paydate','bankRecptNo'];


    public function user()
     {
         return $this->belongsTo(User::class);
     }

}
