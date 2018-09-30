<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = ['body', 'user_id', 'test_id'];

    public function test()
    {
    	return $this->belongsTo('App\Test');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
