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
use App\TestType\Csadroptest;

class Csadroptestcontroller extends Controller
{
    public function index()
    {
    	$Tests = Test::all();
    	$Csadroptests = Csadroptest::all();

    	return view ( 'testType.csa_drop_test_editable', compact('Csadroptests', 'Tests'));
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
			$Csadroptests = Csadroptest::all();
        	$Csadroptests->no= $request -> get('no');
        	$Csadroptests->temprecordingstation= $request -> get('temprecordingstation');
        	$Csadroptests->minc1= $request -> get('minc1');
        	$Csadroptests->maxc1= $request -> get('maxc1');
        	$Csadroptests->minc2= $request -> get('minc2');
        	$Csadroptests->maxc2= $request -> get('maxc2');
        	$Csadroptests->tdifference= $request -> get('tdifference');
        	$Csadroptests->hvbefore= $request -> get('hvbefore');
        	$Csadroptests->hvafter= $request -> get('hvafter');
        	$Csadroptests->leakagecurrentbefore= $request -> get('leakagecurrentbefore');
        	$Csadroptests->leakagecurrentafter= $request -> get('leakagecurrentafter');
        	$Csadroptests->firstdropposition= $request -> get('firstdropposition');
        	$Csadroptests->seconddropposition= $request -> get('seconddropposition');
        	$Csadroptests->seconddropposition= $request -> get('thirddropposition');
        	$Csadroptests->seconddropposition= $request -> get('fourthdropposition');
        	$Csadroptests->seconddropposition= $request -> get('fifthdropposition');
        	$Csadroptests->tstat= $request -> get('tstat');
        	$Csadroptests->spraysosknob= $request -> get('spraysosknob');
        	$Csadroptests->steamslider= $request -> get('steamslider');
        	$Csadroptests->streaming= $request -> get('streaming');
        	$Csadroptests->results= $request -> get('results');
        	$Csadroptests->save();
        	
        	
		
			// this part is to delete existing row

			return redirect()->back();
	}

	public function update3(Request $request)
	{	
		// this (update 3) is to add in new row for the Data table
        $Csadroptests = Csadroptest::all();
        $no= $request -> input('no');
        $temprecordingstation= $request -> input('temprecordingstation');
        $minc1= $request -> input('minc1');
        $maxc1= $request -> input('maxc1');
        $minc2= $request -> input('minc2');
        $maxc2= $request -> input('maxc2');
        $tdifference= $request -> input('tdifference');
        $hvbefore= $request -> input('hvbefore');
        $hvafter= $request -> input('hvafter');
        $leakagecurrentbefore= $request -> input('leakagecurrentbefore');
        $leakagecurrentafter= $request -> input('leakagecurrentafter');
        $firstdropposition= $request ->input('firstdropposition');
        $seconddropposition= $request -> input('seconddropposition');
        $thirddropposition= $request -> input('thirddropposition');
        $fourthdropposition= $request -> input('fourthdropposition');
        $fifthdropposition= $request -> input('fifthdropposition');
        $tstat= $request -> input('tstat');
        $spraysosknob= $request -> input('spraysosknob');
        $steamslider= $request -> input('steamslider');
        $streaming= $request -> input('streaming');
        $results= $request -> input('results');


   	$data = array('no'=>$no,
   		'temprecordingstation'=>$temprecordingstation,
   		'minc1'=>$minc1,
   		'maxc1'=>$maxc1,
   		'minc2'=>$minc2,
   		'maxc2'=>$maxc2,
   		'tdifference'=>$tdifference,
   		'hvbefore'=>$hvbefore,
   		'hvafter'=>$hvafter,
   		'leakagecurrentbefore'=>$leakagecurrentbefore,
   		'leakagecurrentafter'=>$leakagecurrentafter,
   		'firstdropposition'=>$firstdropposition,
   		'seconddropposition'=>$seconddropposition,
   		'thirddropposition'=>$thirddropposition,
   		'fourthdropposition'=>$fourthdropposition,
   		'fifthdropposition'=>$fifthdropposition,
   		'tstat'=>$tstat,
   		'spraysosknob'=>$spraysosknob,
   		'steamslider'=>$steamslider,
   		'streaming'=>$streaming,
   		'results'=>$results);


   	DB::table('Csadroptests')->insert($data);

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


