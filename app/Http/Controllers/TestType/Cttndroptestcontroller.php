<?php

namespace App\Http\Controllers\TestType;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use User;
use App\Test;
//*change this part to the name of the file minus the Controller
// use App\TestType\A_box_drop_test;
use App\TestType\Cttndroptest;

class Cttndroptestcontroller extends Controller
{
    public function index()
    {
    	$Tests = Test::all();
    	$Cttndroptests = Cttndroptest::all();

    	return view ( 'testtype.Cttn_drop_test', compact('Cttndroptests', 'Tests'));
    }

    public function update1(Request $request, $id)
	{
        // session()->flash('successMsg','Updated Succesfully!');
        $tests = test::find($id);
        $tests->doc_num =$request->get('doc_num');
        $tests->power_rating =$request->get('power_rating');
        $tests->test_purpose =$request->get('test_purpose');
        $tests->rev_num =$request->get('rev_num');
        $tests->supplier =$request->get('supplier');
        $tests->wire_size =$request->get('wire_size');
        $tests->pin_type =$request->get('pin_type');
        $tests->flex_type =$request->get('flex_type');
        $tests->bending_angle =$request->get('bending_angle');
        $tests->weight =$request->get('weight');
        $tests->current =$request->get('current');
        $tests->save();

		return redirect()->back();
	}


	public function update2(Request $request)
	{
			//this (update2 as a whole) is to update or deleted existing row in Fancyboxtests table

			//this part is to update data via idenifty test Id
			$Cttndroptests = Cttndroptest::all();
        	$Cttndroptests->no= $request -> get('no');
        	$Cttndroptests->temprecordingstation= $request -> get('temprecordingstation');
        	$Cttndroptests->minc1= $request -> get('minc1');
        	$Cttndroptests->maxc1= $request -> get('maxc1');
        	$Cttndroptests->minc2= $request -> get('minc2');
        	$Cttndroptests->maxc2= $request -> get('maxc2');
        	$Cttndroptests->hvbefore= $request -> get('hvbefore');
        	$Cttndroptests->hvafter= $request -> get('hvafter');
        	$Cttndroptests->leakagecurrentbefore= $request -> get('leakagecurrentbefore');
        	$Cttndroptests->leakagecurrentafter= $request -> get('leakagecurrentafter');
        	$Cttndroptests->firstdropposition= $request -> get('firstdropposition');
        	$Cttndroptests->seconddropposition= $request -> get('seconddropposition');
        	$Cttndroptests->tstat= $request -> get('tstat');
        	$Cttndroptests->spraysosknob= $request -> get('spraysosknob');
        	$Cttndroptests->steamslider= $request -> get('steamslider');
        	$Cttndroptests->streaming= $request -> get('streaming');
        	$Cttndroptests->results= $request -> get('results');
        	$Cttndroptests->save();
        	
        	
		
			// this part is to delete existing row

			return redirect()->back();
	}

	public function update3(Request $request)
	{	
		// this (update 3) is to add in new row for the Data table
        $Cttndroptests = Cttndroptest::all();
        $no= $request -> input('no');
        $temprecordingstation= $request -> input('temprecordingstation');
        $minc1= $request -> input('minc1');
        $maxc1= $request -> input('maxc1');
        $minc2= $request -> input('minc2');
       	$maxc2= $request -> input('maxc2');
        $hvbefore= $request -> input('hvbefore');
        $hvafter= $request -> input('hvafter');
        $leakagecurrentbefore= $request -> input('leakagecurrentbefore');
        $leakagecurrentafter= $request -> input('leakagecurrentafter');
        $firstdropposition= $request -> input('firstdropposition');
        $seconddropposition= $request -> input('seconddropposition');
        $tstat= $request -> input('tstat');
        $spraysosknob= $request -> input('spraysosknob');
        $steamslider= $request -> input('steamslider');
        $streaming= $request -> input('streaming');
        $results= $request -> input('results');


   	$data = array('no'=>$no,'temprecordingstation'=>$temprecordingstation,'minc1'=>$minc1,'maxc1'=>$maxc1,'minc2'=>$minc2,'maxc2'=>$maxc2,'hvbefore'=>$hvbefore,'hvafter'=>$hvafter,'leakagecurrentbefore'=>$leakagecurrentbefore,'leakagecurrentafter'=>$leakagecurrentafter,'firstdropposition'=>$firstdropposition,'seconddropposition'=>$seconddropposition,'tstat'=>$tstat,'spraysosknob'=>$spraysosknob,'steamslider'=>$steamslider,'streaming'=>$streaming,'results'=>$results);


   	DB::table('Cttndroptests')->insert($data);

		return redirect()->back();
	}

	public function update4(Request $request, $id)
	{
			// this is the same function as update 1

        	$tests = test::find($id);
        	$tests->issue =$request->get('issue');
        	$tests->progress =$request->get('progress');
        	$tests->reportstatus =$request->get('reportstatus');
       		$tests->save();
        
		return redirect()->back();
		
				
			return redirect()->back();
	}
}


