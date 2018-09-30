<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generaltestreport extends Model
{
    public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function user()
	{
		return $this->belongsTo('App\Test');
	}
}
