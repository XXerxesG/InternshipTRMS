<?php

namespace App\testType;

use Illuminate\Database\Eloquent\Model;

class Aboxdroptest extends Model
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
