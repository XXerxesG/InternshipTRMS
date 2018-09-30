<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelcode extends Model
{
    public function project()
    {
    	return $this->belongsTo('App\Project');
    }

    public function tests()
    {
    	return $this->hasMany('App\Test');
    }
}
