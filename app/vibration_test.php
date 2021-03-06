<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vibration_test extends Model
{
	public function tests()
	{
		return $this->hasMany('App\Test');
	}

	public function project()
	{
		return $this->belongsTo('App\Project');
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}