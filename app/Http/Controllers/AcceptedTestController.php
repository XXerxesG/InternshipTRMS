<?php

namespace App\Http\Controllers;
use App\
Auth;
use App\Test;
use App\TestType;

use Illuminate\Http\Request;

class AcceptedTestController extends Controller
{
    public function showAllAcceptedTests(){
        $test = Test::all();
        $testtype=TestType::all();
        return view ('accepted.acceptedTests')->with('test',$test)->with('testtype',$testtype);
    }
}
