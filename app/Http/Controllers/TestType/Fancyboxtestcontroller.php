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
use App\TestType\Fancyboxtest;

class Fancyboxtestcontroller extends Controller
{
    public function index()
    {
    	$Tests = Test::all();
    	$Fancyboxtests = Fancyboxtest::all();

    	return view ( 'testtype.Fancy_box_editable', compact('Fancyboxtests', 'Tests'));
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
			$Fancyboxtests = Fancyboxtest::all();
        	$Fancyboxtests->no= $request -> get('no');
        	$Fancyboxtests->firstdrop= $request -> get('firstdrop');
        	$Fancyboxtests->seconddrop= $request -> get('seconddrop');
        	$Fancyboxtests->thirddrop= $request -> get('thirddrop');
        	$Fancyboxtests->fourthdrop= $request -> get('fourthdrop');
        	$Fancyboxtests->LE= $request -> get('LE');
        	$Fancyboxtests->NE= $request -> get('NE');
        	$Fancyboxtests->HIV= $request -> get('HIV');
        	$Fancyboxtests->Safetyvalve= $request -> get('Safetyvalve');
        	$Fancyboxtests->evalve= $request -> get('evalve');
        	$Fancyboxtests->wiring= $request -> get('wiring');
        	$Fancyboxtests->remark= $request -> get('remark');
        	$Fancyboxtests->save();
        	
        	
		
			// this part is to delete existing row

			return redirect()->back();
	}

	public function update3(Request $request)
	{	
		// this (update 3) is to add in new row for the Data table
        $Fancyboxtests = Fancyboxtest::all();
        $no= $request -> input('no');
        $test_id= $request -> input('test_id');
        $firstdrop= $request -> input('firstdrop');
        $seconddrop= $request -> input('seconddrop');
        $thirddrop= $request -> input('thirddrop');
        $fourthdrop= $request -> input('fourthdrop');
        $LE= $request -> input('LE');
        $NE= $request -> input('NE');
        $HIV= $request -> input('HIV');
        $Safetyvalve= $request -> input('Safetyvalve');
        $evalve= $request -> input('evalve');
        $wiring= $request -> input('wiring');
        $remark= $request -> input('remark');



   	$data = array('no'=>$no, 'test_id'=>$test_id,'firstdrop'=>$firstdrop,'seconddrop'=>$seconddrop,'thirddrop'=>$thirddrop,'fourthdrop'=>$fourthdrop,'LE'=>$LE,'NE'=>$NE,'HIV'=>$HIV,'Safetyvalve'=>$Safetyvalve,'evalve'=>$evalve,'wiring'=>$wiring,'remark'=>$remark);
   	DB::table('Fancyboxtests')->insert($data);

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
