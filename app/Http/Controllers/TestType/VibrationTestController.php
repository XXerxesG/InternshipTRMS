<?php

namespace App\Http\Controllers\TestType;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
//*change the name
use App\TestType\VibrationTest;

//*rename the class name
class VibrationTestController extends Controller
{

	// This function is to update shared/common data for all the samples in a test
	public function update1(Request $request)
	{
		$title = $request->title;
		
		DB::table($title."s")
		// $title = new vibrationtest;
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
		return redirect('tests');
	}

	// update2 function is to update individual data for each sample.
	public function update2(Request $request)
	{
		// Fetch all flexing test object from database
		// Sort in ascending 'sample_id' order
		//*change this part to help with naming conventions
		$vibrations = VibrationTest::where('test_id', $request->test_id)->orderBy('sample_id', 'asc')->get();

		// Foreach of the objects fetched, update according from incoming request
		//*change this part accordingly to your requirements. Important note the naming cast here(yellow part) must be the same with that of what you insert in your database. Remember to change your counter the purple number 
		for($i=0; $i<count($vibrations); $i++){
			$vibration = $vibrations[$i];
			$vibration->{'type_of_vibration'} = $request->tto[$i][0];
			$vibration->{'F-Box'} = $request->tto[$i][1];
			$vibration->{'iron'} = $request->tto[$i][2];
			$vibration->{'result'} = $request->tto[$i][3];
			$vibration->{'remark'} = $request->tto[$i][4];
			$vibration->save();
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

}
