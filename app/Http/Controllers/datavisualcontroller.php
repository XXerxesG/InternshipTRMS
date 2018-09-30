<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Test;
use App\User;
use Charts;
use DB;
use App\test_duration;
use App\ticket;
use App\testtype;
use App\project;
use carbon\carbon;
use Illuminate\Support\Facades\Input;


class datavisualcontroller extends Controller
{
    public function datavisual()
    {
    	
    	$pending = Test::wherein('accept', ['0', 'NULL'])->count();
        $progress = Test::wherein('status', ['pause', 'in progress'])->count();
        $ended = Test::wherein('status', ['completed'])->count();
        $cancel = Test::where('status', ['cancel'])->count();
        return view('datavisual.datavisual', compact('pending', 'progress', 'ended', 'cancel'));
    
    }
    
    public function show1()

    {
        $test_duration = test_duration::all();
        $tests = test::all();
        $testtype = testtype::all();
        $ticket = ticket::all();
        $datas = DB::table('test_durations')->get();

        foreach($tests as $test ){
           
            $start = carbon::parse($test->actual_start_date);
            $end = carbon::parse($test->completeddate);
            $test->difference = $start->diffindays($end);
            
            $diffactday = $test->difference;
            $diffestday = $test->testtype['est_duration'];
            $test->delta =  $diffestday - $diffactday;

           

        } 
       $data = compact($test);

        return view('datavisual.testtimecomparsion', compact('test_duration','datas' ,'tests','testtype','ticket'));
    }

    public function show2(Request $request)
    {
      
        $tests = test::all();
        $projects= project::all()->sortByDesc('project_name');

        foreach($tests as $test ){
           
            $start = carbon::parse($test->sample_availability);
            $end = carbon::parse($test->actual_start_date);
            $test->difference = $start->diffindays($end);
           
        } 
        $data = compact($test);
        return view ('datavisual.samplearrivaldate', compact('tests','projects','data'));
    }

    public function show3()
    {
        $test_duration = test_duration::all();
        $tests = test::all();
        $testtype = testtype::all();
        $ticket = ticket::all();
        $datas = DB::table('test_durations')->get();
        return view('datavisual.lifetestscheduling', compact('test_duration','datas' ,'tests','testtype','ticket'));
    }
    
}
