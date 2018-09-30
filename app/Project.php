<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	public function tickets()
	{
		return $this->hasMany('App\Ticket');
	}

	public function tests()
	{
		return $this->hasMany('App\test');
	}

	public function modelcodes()
	{
		return $this->hasMany('App\Modelcode');
	}
}
