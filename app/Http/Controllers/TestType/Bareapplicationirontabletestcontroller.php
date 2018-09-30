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
use App\TestType\Bareapplicationirontabletest;

class Bareapplicationirontabletestcontroller extends Controller
{
    public function index()
    {
    	$Tests = Test::all();
    	$Bareapplicationirontabletests = Bareapplicationirontabletest::all();

    	return view ( 'testtype.Bare_application_iron_table_test_editable', compact('Bareapplicationirontabletests', 'Tests'));
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
			//this (update2 as a whole) is to update or deleted existing row in Aboxdroptest table

			//this part is to update data via idenifty test Id
			$Bareapplicationirontabletests = Bareapplicationirontabletest::all();
        	$Bareapplicationirontabletests->no= $request -> get('no');
        	$Bareapplicationirontabletests->temprecordingstation= $request -> get('temprecordingstation');
        	$Bareapplicationirontabletests->minc1= $request -> get('minc1');
        	$Bareapplicationirontabletests->maxc1= $request -> get('maxc1');
        	$Bareapplicationirontabletests->Meant1= $request -> get('Meant1');
        	$Bareapplicationirontabletests->minc2= $request -> get('minc2');
            $Bareapplicationirontabletests->maxc2= $request -> get('maxc2');
            $Bareapplicationirontabletests->Meant2= $request -> get('Meant2');
        	$Bareapplicationirontabletests->solepatetemperaturedrift   = $request -> get('solepatetemperaturedrift ');
        	$Bareapplicationirontabletests->solepate= $request -> get('solepate');
        	$Bareapplicationirontabletests->sidewardrightside= $request -> get('sidewardrightside');
        	$Bareapplicationirontabletests->sidewardleftside= $request -> get('sidewardleftside');
        	$Bareapplicationirontabletests->cordentry= $request -> get('cordentry');
        	$Bareapplicationirontabletests->hvbefore= $request -> get('hvbefore');
            $Bareapplicationirontabletests->hvafter= $request -> get('hvafter');
            $Bareapplicationirontabletests->tstat= $request -> get('tstat');
            $Bareapplicationirontabletests->spraysosknob= $request -> get('spraysosknob');
            $Bareapplicationirontabletests->steamslider= $request -> get('steamslider');
            $Bareapplicationirontabletests->streaming= $request -> get('streaming');
            $Bareapplicationirontabletests->majorcrack= $request -> get('majorcrack');
            $Bareapplicationirontabletests->result= $request -> get('result');
            $Bareapplicationirontabletests->remarks= $request -> get('remarks');


        	$Bareapplicationirontabletests->save();
        	
        	
		
			// this part is to delete existing row

			return redirect()->back();
	}

	public function update3(Request $request)
	{	
		// this (update 3) is to add in new row for the Data table
        $Bareapplicationirontabletests = Bareapplicationirontabletest::all();
        $no= $request -> input('no');
        $test_id= $request -> input('test_id');
        $temprecordingstation= $request -> input('temprecordingstation');
        $minc1= $request -> input('minc1');
        $maxc1= $request -> input('maxc1');
        $meant1= $request -> input('meant1');
        $minc2= $request -> input('minc2');
        $maxc2= $request -> input('maxc2');
        $meant2= $request -> input('meant2');
        $solepatetemperaturedrift   = $request -> input('solepatetemperaturedrift');
        $solepate= $request -> input('solepate');
        $sidewardrightside= $request -> input('sidewardrightside');
        $sidewardleftside= $request -> input('sidewardleftside');
        $cordentry= $request -> input('cordentry');
        $hvbefore= $request -> input('hvbefore');
        $hvafter= $request -> input('hvafter');
        $tstat= $request -> input('tstat');
        $spraysosknob= $request -> input('spraysosknob');
        $steamslider= $request -> input('steamslider');
        $streaming= $request -> input('streaming');
        $majorcrack= $request -> input('majorcrack');
        $result= $request -> input('result');
        $remarks= $request -> input('remarks');



   	$data = array('no'=>$no, 'test_id'=>$test_id,'temprecordingstation'=>$temprecordingstation,'minc1'=>$minc1,'maxc1'=>$maxc1,'meant1'=>$meant1,'minc2'=>$minc2,'maxc2'=>$maxc2,'meant2'=>$meant2,'solepatetemperaturedrift'=>$solepatetemperaturedrift,'solepate'=>$solepate,'sidewardrightside'=>$sidewardrightside,'sidewardleftside'=>$sidewardleftside, 'cordentry'=>$cordentry,'hvbefore'=>$hvbefore, 'hvafter'=>$hvafter,'tstat'=>$tstat,'spraysosknob'=>$spraysosknob,'steamslider'=>$steamslider,'streaming'=>$streaming,'majorcrack'=>$majorcrack,'result'=>$result,'remarks'=>$remarks);
   	DB::table('Bareapplicationirontabletests')->insert($data);

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
