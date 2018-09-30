<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Test;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Test $test)
    {

    	$this->validate(request(), ['body'=>'required|min:2']);

        $test->comments()->create([
        	'body'=>request('body'),
        	'user_id'=>Auth::id()
        ]);

        return back();
    }

}
