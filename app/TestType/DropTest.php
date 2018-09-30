<?php

namespace App\TestType;

use Illuminate\Database\Eloquent\Model;
//*change the class name
class DropTest extends Model
{
    public function test()
    {
    	return $this->belongsTo('App\Test');
    }
}
