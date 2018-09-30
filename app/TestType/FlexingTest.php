<?php

namespace App\TestType;

use Illuminate\Database\Eloquent\Model;

class FlexingTest extends Model
{
    public function test()
    {
    	return $this->belongsTo('App\Test');
    }
}
