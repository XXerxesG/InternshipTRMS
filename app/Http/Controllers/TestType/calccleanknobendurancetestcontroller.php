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
use App\TestType\calccleanknobendurancetest;

class calccleanknobendurancetestcontroller extends Controller
{
    public function index()
    {
    	$Tests = Test::all();
    	$Calccleanknobendurancetests = Calccleanknobendurancetest::all();

    	return view ( 'testType.calccleanknobendurance_test_editable', compact('Calccleanknobendurancetests', 'Tests'));
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
			$Calccleanknobendurancetests = Calccleanknobendurancetest::all();
        	$Calccleanknobendurancetests->no= $request -> get('no');
        	$Calccleanknobendurancetests->force1b= $request -> get('force1b');
        	$Calccleanknobendurancetests->force2b= $request -> get('force2b');
        	$Calccleanknobendurancetests->force3b= $request -> get('force3b');
        	$Calccleanknobendurancetests->force4b= $request -> get('force4b');
        	$Calccleanknobendurancetests->force5b= $request -> get('force5b');
        	$Calccleanknobendurancetests->avgforceb= $request -> get('avgforceb');
        	$Calccleanknobendurancetests->sliderknobsluggishb= $request -> get('sliderknobsluggishb');
        	$Calccleanknobendurancetests->sliderknobjammedb= $request -> get('sliderknobjammedb');
        	$Calccleanknobendurancetests->sliderknobleakb= $request -> get('sliderknobleakb');
        	$Calccleanknobendurancetests->force1a= $request -> get('force1a');
        	$Calccleanknobendurancetests->force2a= $request -> get('force2a');
        	$Calccleanknobendurancetests->force3a= $request -> get('force3a');
        	$Calccleanknobendurancetests->force4a= $request -> get('force4a');
        	$Calccleanknobendurancetests->force5a= $request -> get('force5a');
        	$Calccleanknobendurancetests->avgforcea= $request -> get('avgforcea');
        	$Calccleanknobendurancetests->sliderknobsluggisha= $request -> get('sliderknobsluggisha');
        	$Calccleanknobendurancetests->sliderknobjammeda= $request -> get('sliderknobjammeda');
        	$Calccleanknobendurancetests->sliderknobleaka= $request -> get('sliderknobleaka');
        	$Calccleanknobendurancetests->result= $request -> get('result');
        	$Calccleanknobendurancetests->save();
        	
        	
		
			// this part is to delete existing row

			return redirect()->back();
	}

	public function update3(Request $request)
	{	
		
		// this (update 3) is to add in new row for the Data table
        $Calccleanknobendurancetests = Calccleanknobendurancetest::all();
        $no= $request -> input('no');
        $force1b= $request -> input('force1b');
        $force2b= $request -> input('force2b');
        $force3b= $request -> input('force3b');
        $force4b= $request -> input('force4b');
        $force5b= $request -> input('force5b');
        $avgforceb= $request -> input('avgforceb');
        $sliderknobsluggishb= $request -> input('sliderknobsluggishb');
        $sliderknobjammedb= $request -> input('sliderknobjammedb');
        $sliderknobleakb= $request -> input('sliderknobleakb');
        $force1a= $request -> input('force1a');
        $force2a= $request -> input('force2a');
       	$force3a= $request -> input('force3a');
        $force4a= $request -> input('force4a');
        $force5a= $request -> input('force5a');
        $avgforcea= $request -> input('avgforcea');
        $sliderknobsluggisha= $request -> input('sliderknobsluggisha');
        $sliderknobjammeda= $request -> input('sliderknobjammeda');
        $sliderknobleaka= $request -> input('sliderknobleaka');
        $result= $request -> input('result');
     
        	

   	$data = array('no'=>$no,
   		'force1b'=>$force1b,
   		'force2b'=>$force2b,
   		'force3b'=>$force3b,
   		'force4b'=>$force4b,
   		'force5b'=>$force5b,
   		'avgforceb'=>$avgforceb,
   		'sliderknobsluggishb'=>$sliderknobsluggishb,
   		'sliderknobjammedb'=>$sliderknobjammedb,
   		'sliderknobleakb'=>$sliderknobleakb,
   		'force1a'=>$force1a,
   		'force2a'=>$force2a,
   		'force3a'=>$force3a,
   		'force4a'=>$force4a,
   		'force5a'=>$force5a,
   		'avgforcea'=>$avgforcea,
   		'sliderknobsluggisha'=>$sliderknobsluggisha,
   		'sliderknobjammeda'=>$sliderknobjammeda,
   		'sliderknobleaka'=>$sliderknobleaka,
   		'result'=>$result);


   	DB::table('Calccleanknobendurancetests')->insert($data);

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





