<?php

namespace App\Http\Controllers\TestType;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\TestType\DropTest;

class DropTestController extends Controller
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
		$drops = DropTest::where('test_id', $request->test_id)->orderBy('sample_id', 'asc')->get();

		// Foreach of the objects fetched, update according from incoming request
		for($i=0; $i<count($drops); $i++){
			$drop = $drops[$i];
			$drop->{'Temp_Recording_Station'} = $request->tto[$i][0];
			$drop->{'before_min'} = $request->tto[$i][1];
			$drop->{'before_max'} = $request->tto[$i][2];
			$drop->{'after_min'} = $request->tto[$i][3];
			$drop->{'after_max'} = $request->tto[$i][4];
			$drop->{'HV_before'} = $request->tto[$i][5];
			$drop->{'HV_after'} = $request->tto[$i][6];
			$drop->{'leakage_current_before'} = $request->tto[$i][7];
			$drop->{'leakage_current_after'} = $request->tto[$i][8];
			$drop->{'1stdrop'} = $request->tto[$i][9];
			$drop->{'2nddrop'} = $request->tto[$i][10];
			$drop->{'3rddrop'} = $request->tto[$i][11];
			$drop->{'Tstat'} = $request->tto[$i][12];
			$drop->{'Spray'} = $request->tto[$i][13];
			$drop->{'Steam_Slider'} = $request->tto[$i][14];
			$drop->{'Steaming'} = $request->tto[$i][15];
			$drop->{'remark'} = $request->tto[$i][16];
			$drop->save();
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
