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
use App\TestType\sostriggerendurancetest;

class Sostriggerendurancetestcontroller extends Controller
{
    public function index()
    {
    	$Tests = Test::all();
    	$Sostriggerendurancetests = Sostriggerendurancetest::all();

    	return view ( 'testType.sostriggerendurance_test_editable', compact('Sostriggerendurancetests', 'Tests'));
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
			$Sostriggerendurancetests = Sostriggerendurancetest::all();
        	$Sostriggerendurancetests->no= $request -> get('no');
        	$Sostriggerendurancetests->force1b= $request -> get('force1b');
        	$Sostriggerendurancetests->force2b= $request -> get('force2b');
        	$Sostriggerendurancetests->force3b= $request -> get('force3b');
        	$Sostriggerendurancetests->force4b= $request -> get('force4b');
        	$Sostriggerendurancetests->force5b= $request -> get('force5b');
        	$Sostriggerendurancetests->avgforceb= $request -> get('avgforceb');
        	$Sostriggerendurancetests->knobtriggerfunctionb= $request -> get('knobtriggerfunctionb');
        	$Sostriggerendurancetests->emptyprimmingstrokeb= $request -> get('emptyprimmingstrokeb');
        	$Sostriggerendurancetests->shotofstreamratehorizontalb= $request -> get('shotofstreamratehorizontalb');
        	$Sostriggerendurancetests->presenceofwateronsteamholeb= $request -> get('presenceofwateronsteamholeb');
        	$Sostriggerendurancetests->audiblevisiblesteamat5thshotb= $request -> get('audiblevisiblesteamat5thshotb');
        	$Sostriggerendurancetests->spittingb= $request -> get('spittingb');

        	$Sostriggerendurancetests->force1b= $request -> get('force1i');
        	$Sostriggerendurancetests->force2b= $request -> get('force2i');
        	$Sostriggerendurancetests->force3b= $request -> get('force3i');
        	$Sostriggerendurancetests->force4b= $request -> get('force4i');
        	$Sostriggerendurancetests->force5b= $request -> get('force5i');
        	$Sostriggerendurancetests->avgforceb= $request -> get('avgforcei');
        	$Sostriggerendurancetests->knobtriggerfunctionb= $request -> get('knobtriggerfunctioni');
        	$Sostriggerendurancetests->emptyprimmingstrokeb= $request -> get('emptyprimmingstrokei');
        	$Sostriggerendurancetests->shotofstreamratehorizontalb= $request -> get('shotofstreamratehorizontali');
        	$Sostriggerendurancetests->presenceofwateronsteamholeb= $request -> get('presenceofwateronsteamholei');
        	$Sostriggerendurancetests->audiblevisiblesteamat5thshotb= $request -> get('audiblevisiblesteamat5thshoti');
        	$Sostriggerendurancetests->spittingb= $request -> get('spittingi');

        	$Sostriggerendurancetests->force1b= $request -> get('force1a');
        	$Sostriggerendurancetests->force2b= $request -> get('force2a');
        	$Sostriggerendurancetests->force3b= $request -> get('force3a');
        	$Sostriggerendurancetests->force4b= $request -> get('force4a');
        	$Sostriggerendurancetests->force5b= $request -> get('force5a');
        	$Sostriggerendurancetests->avgforceb= $request -> get('avgforcea');
        	$Sostriggerendurancetests->knobtriggerfunctionb= $request -> get('knobtriggerfunctiona');
        	$Sostriggerendurancetests->emptyprimmingstrokeb= $request -> get('emptyprimmingstrokea');
        	$Sostriggerendurancetests->shotofstreamratehorizontalb= $request -> get('shotofstreamratehorizontala');
        	$Sostriggerendurancetests->presenceofwateronsteamholeb= $request -> get('presenceofwateronsteamholea');
        	$Sostriggerendurancetests->audiblevisiblesteamat5thshotb= $request -> get('audiblevisiblesteamat5thshota');
        	$Sostriggerendurancetests->spittingb= $request -> get('spittinga');



        	
        	$Sostriggerendurancetests->result= $request -> get('result');
        	$Sostriggerendurancetests->save();
        	
        	
		
			// this part is to delete existing row

			return redirect()->back();
	}

	public function update3(Request $request)
	{	
		
		// this (update 3) is to add in new row for the Data table
     		$Sostriggerendurancetests = Sostriggerendurancetest::all();
        	$no= $request -> input('no');
        	$force1b= $request -> input('force1b');
        	$force2b= $request -> input('force2b');
        	$force3b= $request -> input('force3b');
        	$force4b= $request -> input('force4b');
        	$force5b= $request -> input('force5b');
        	$avgforceb= $request -> input('avgforceb');
        	$knobtriggerfunctionb= $request -> input('knobtriggerfunctionb');
        	$emptyprimmingstrokeb= $request -> input('emptyprimmingstrokeb');
        	$shotofstreamratehorizontalb= $request -> input('shotofstreamratehorizontalb');
        	$presenceofwateronsteamholeb= $request -> input('presenceofwateronsteamholeb');
        	$audiblevisiblesteamat5thshotb= $request -> input('audiblevisiblesteamat5thshotb');
        	$spittingb= $request -> input('spittingb');

        	$force1i= $request -> input('force1i');
        	$force2i= $request -> input('force2i');
        	$force3i= $request -> input('force3i');
        	$force4i= $request -> input('force4i');
        	$force5i= $request -> input('force5i');
        	$avgforcei= $request -> input('avgforcei');
        	$knobtriggerfunctioni= $request -> input('knobtriggerfunctioni');
        	$emptyprimmingstrokei= $request -> input('emptyprimmingstrokei');
        	$shotofstreamratehorizontali= $request -> input('shotofstreamratehorizontali');
        	$presenceofwateronsteamholei= $request -> input('presenceofwateronsteamholei');
        	$audiblevisiblesteamat5thshoti= $request -> input('audiblevisiblesteamat5thshoti');
        	$spittingi= $request -> get('spittingi');

        	$force1a= $request -> input('force1a');
        	$force2a= $request -> input('force2a');
        	$force3a= $request -> input('force3a');
        	$force4a= $request -> input('force4a');
        	$force5a= $request -> input('force5a');
        	$avgforcea= $request -> input('avgforcea');
        	$knobtriggerfunctiona= $request -> input('knobtriggerfunctiona');
        	$emptyprimmingstrokea= $request -> input('emptyprimmingstrokea');
        	$shotofstreamratehorizontala= $request -> input('shotofstreamratehorizontala');
        	$presenceofwateronsteamholea= $request -> input('presenceofwateronsteamholea');
        	$audiblevisiblesteamat5thshota= $request ->input('audiblevisiblesteamat5thshota');
        	$spittinga= $request -> input('spittinga');
        	
        	$result= $request -> input('result');
        	

   	$data = array('no'=>$no,
   		'force1b'=>$force1b,
   		'force2b'=>$force2b,
   		'force3b'=>$force3b,
   		'force4b'=>$force4b,
   		'force5b'=>$force5b,
   		'avgforceb'=>$avgforceb,
   		'knobtriggerfunctionb'=>$knobtriggerfunctionb,
   		'emptyprimmingstrokeb'=>$emptyprimmingstrokeb,
   		'shotofstreamratehorizontalb'=>$shotofstreamratehorizontalb,
   		'presenceofwateronsteamholeb'=>$presenceofwateronsteamholeb,
   		'audiblevisiblesteamat5thshotb'=>$audiblevisiblesteamat5thshotb,
   		'spittingb'=>$spittingb,

   		'force1i'=>$force1i,
   		'force2i'=>$force2i,
   		'force3i'=>$force3i,
   		'force4i'=>$force4i,
   		'force5i'=>$force5i,
   		'avgforcei'=>$avgforcei,
   		'knobtriggerfunctioni'=>$knobtriggerfunctioni,
   		'emptyprimmingstrokei'=>$emptyprimmingstrokei,
   		'shotofstreamratehorizontali'=>$shotofstreamratehorizontali,
   		'presenceofwateronsteamholei'=>$presenceofwateronsteamholei,
   		'audiblevisiblesteamat5thshoti'=>$audiblevisiblesteamat5thshoti,
   		'spittingi'=>$spittingi,

   		'force1a'=>$force1a,
   		'force2a'=>$force2a,
   		'force3a'=>$force3a,
   		'force4a'=>$force4a,
   		'force5a'=>$force5a,
   		'avgforcea'=>$avgforcea,
   		'knobtriggerfunctiona'=>$knobtriggerfunctiona,
   		'emptyprimmingstrokea'=>$emptyprimmingstrokea,
   		'shotofstreamratehorizontala'=>$shotofstreamratehorizontala,
   		'presenceofwateronsteamholea'=>$presenceofwateronsteamholea,
   		'audiblevisiblesteamat5thshota'=>$audiblevisiblesteamat5thshota,
   		'spittinga'=>$spittinga,


   		

   		'result'=>$result);


   	DB::table('Sostriggerendurancetests')->insert($data);

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







