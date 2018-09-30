<?php

namespace App\TestType;

use Illuminate\Database\Eloquent\Model;

class AsoTimingChecks extends Model
{
    public function test()
    {
    	return $this->belongsTo('App\Test');
    }
}
