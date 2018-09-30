<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
	protected $fillable=[];    
	public function ticket()
	{
		return $this->belongsTo('App\Ticket');
	}

	public function project()
	{
		return $this->belongsTo('App\project');
	}

	public function testType()
	{
		return $this->belongsTo('App\TestType');
	}

	public function modelcode()
	{
		return $this->belongsTo('App\ModelCode');
	}

	public function comments()
	{
		return $this->hasMany('App\Comment');
	}

	 public function vibration_test()
    {
        return $this->hasMany('App\vibration_test');
    }
    
	public function addComment($body)
	{
		# code...
	}
}
