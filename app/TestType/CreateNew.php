<?php

namespace App\TestType;

use Illuminate\Database\Eloquent\Model;

class CreateNew extends Model
{
    public function test()
    {
    	return $this->belongsTo('App\Test');
    }
}
