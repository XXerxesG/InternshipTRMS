<?php

namespace App\TestType;

use Illuminate\Database\Eloquent\Model;

class Csadroptest extends Model
{
     public function test()
    {
    	return $this->belongsTo('App\Test');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
