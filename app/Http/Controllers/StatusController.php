<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Test;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function store(Test $test)
    {

    	//this code need to be change its not for status yet 

    	$this->validate(request(), ['body'=>'required|min:2']);

        $test->comments()->create([
        	'body'=>request('body'),
        	'user_id'=>Auth::id()
        ]);

        return back();
    }

}