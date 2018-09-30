<?php

namespace App\Http\Controllers\TestType;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\TestType\FlexingTest;

class FlexingTestController extends Controller
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
		$flexings = FlexingTest::where('test_id', $request->test_id)->orderBy('sample_id', 'asc')->get();

		// Foreach of the objects fetched, update according from incoming request
		for($i=0; $i<count($flexings); $i++){
			$flexing = $flexings[$i];
			$flexing->{'8000'} = $request->tto[$i][0];
			$flexing->{'16000'} = $request->tto[$i][1];
			$flexing->{'24000'} = $request->tto[$i][2];
			$flexing->{'32000'} = $request->tto[$i][3];
			$flexing->{'40000'} = $request->tto[$i][4];
			$flexing->{'48000'} = $request->tto[$i][5];
			$flexing->{'56000'} = $request->tto[$i][6];
			$flexing->{'65000'} = $request->tto[$i][7];
			$flexing->station_num = $request->tto[$i][8];
			$flexing->EWBC = $request->tto[$i][9];
			$flexing->LONW1 = $request->tto[$i][10];
			$flexing->LONW2 = $request->tto[$i][11];
			$flexing->BM = $request->tto[$i][12];
			$flexing->fire = $request->tto[$i][13];
			$flexing->EOIW = $request->tto[$i][14];
			$flexing->EPM = $request->tto[$i][15];
			$flexing->LONW3 = $request->tto[$i][16];
			$flexing->result = $request->tto[$i][17];
			$flexing->remark = $request->tto[$i][18];
			$flexing->save();
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
