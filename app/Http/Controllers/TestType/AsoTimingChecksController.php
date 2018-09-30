<?php

namespace App\Http\Controllers\TestType;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\generaltestreport;
//*change this part to the name of the file minus the Controller
use App\TestType\AsoTimingChecks;
use App\Test;


//*change this part to the name of the file
class AsoTimingChecksController extends Controller
{
	// This function is to update shared/common data for all the samples in a test
	public function update1(Request $request)
	{
		$title = $request->title;
		DB::table($title."s")
			->where('test_id', $request->test_id)
			->update([
				"doc_num" => $request->doc_num,
				"power_rating" => $request->power_rating,
				"test_purpose" => $request->test_purpose,
				"rev_num" => $request->rev_num,
				"supplier" => $request->supplier,
				"wire_size" => $request->wire_size,
				"pin_type" => $request->pin_type,
				"flex_type" => $request->flex_type,
				"bending_angle" => $request->bending_angle,
				"weight" => $request->weight,
				"current" => $request->current,
			]);
		return redirect()->back();
	}

	// update2 function is to update individual data for each sample.
	public function update2(Request $request)
	{
		// Fetch all flexing test object from database
		// Sort in ascending 'sample_id' order
		//*change this part to help with naming conventions
		$AsoTimingCheck = AsoTimingChecks::where('test_id', $request->test_id)->orderBy('sample_id', 'asc')->get();

		// Foreach of the objects fetched, update according from incoming request
		//*change this part accordingly to your requirements. Important note the naming cast here(yellow part) must be the same with that of what you insert in your database. Remember to change your counter the purple number 
		for($i=0; $i<count($AsoTimingCheck); $i++){
			$AsoTimingChecks = $AsoTimingCheck[$i];
			$AsoTimingChecks->{'0_cycle_min'} = $request->tto[$i][0];
			$AsoTimingChecks->{'0_cycle_max'} = $request->tto[$i][1];
			$AsoTimingChecks->{'0_cycle_mean'} = $request->tto[$i][2];
			$AsoTimingChecks->{'0_cycle_horizontal'} = $request->tto[$i][3];
			$AsoTimingChecks->{'0_cycle_vertical'} = $request->tto[$i][4];
			$AsoTimingChecks->{'1000_cycle_min'} = $request->tto[$i][5];
			$AsoTimingChecks->{'1000_cycle_max'} = $request->tto[$i][6];
			$AsoTimingChecks->{'1000_cycle_mean'} = $request->tto[$i][7];
			$AsoTimingChecks->{'1000_cycle_horizontal'} = $request->tto[$i][8];
			$AsoTimingChecks->{'1000_cycle_vertical'} = $request->tto[$i][9];
			$AsoTimingChecks->{'result'} = $request->tto[$i][10];
			$AsoTimingChecks->{'remark'} = $request->tto[$i][11];
			$AsoTimingChecks->save();
		}

		return redirect()->back();

	}

	public function update3(Request $request)
	{
		$title = $request->title;
		DB::table($title."s")
			->where('test_id', $request->test_id)
			->update([
				"issue" => $request->issue,
				"progress_action" => $request->progress_action,
				"status" => $request->status,

			]);
		
		return redirect()->back();
	
	}

	public function update4(Request $request, $id)
	{
		
			$tests = test::find($id);
			
        	$tests->row1 =$request->get('row1');
        	$tests->row2 =$request->get('row2');
        	$tests->row3 =$request->get('row3');
        	$tests->row4 =$request->get('row4');
        	$tests->row5 =$request->get('row5');
        	$tests->row6 =$request->get('row6');
        	$tests->row7 =$request->get('row7');
        	$tests->row8 =$request->get('row8');
        	$tests->row9 =$request->get('row9');
        	$tests->row10 =$request->get('row10');
        	$tests->row11 =$request->get('row11');
        	$tests->row12 =$request->get('row12');
        	$tests->row13 =$request->get('row13');
        	$tests->row14 =$request->get('row14');
        	$tests->row15 =$request->get('row15');
        	$tests->row16 =$request->get('row16');
        	$tests->row17 =$request->get('row17');
        	$tests->row18 =$request->get('row18');
        	$tests->row19 =$request->get('row19');
        	$tests->row20 =$request->get('row20');
        	$tests->row21 =$request->get('row21');
        	$tests->row22 =$request->get('row22');
        	$tests->row23 =$request->get('row23');
        	$tests->row24 =$request->get('row24');
        	$tests->row25 =$request->get('row25');
        	$tests->save();
		
				
			return redirect()->back();

			
	
	


	}
}
