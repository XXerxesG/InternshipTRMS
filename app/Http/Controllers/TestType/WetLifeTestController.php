<?php

namespace App\Http\Controllers\TestType;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\TestType\WetLifeTest;

class WetLifeTestController extends Controller
{
    // Update common fields
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
			]);
		return redirect()->back();
    }

    // Update individual fields
    public function update2(Request $request)
    {
    	// return $request->all();

    	$wetlifes = WetLifeTest::where('test_id', $request->test_id)->orderBy('sample_id', 'asc')->get();

    	for($i=1; $i<=count($wetlifes); $i++){
    		$wetlife = $wetlifes[$i-1];
    		$wetlife->AHT_0 = $request->tto[$i]["AHT_0"];
    		$wetlife->AHT_100 = $request->tto[$i]["AHT_100"];
    		$wetlife->AHT_200 = $request->tto[$i]["AHT_200"];
    		$wetlife->AHT_300 = $request->tto[$i]["AHT_300"];
    		$wetlife->AHT_600 = $request->tto[$i]["AHT_600"];
    		$wetlife->AHT_900 = $request->tto[$i]["AHT_900"];
    		$wetlife->AHT_1200 = $request->tto[$i]["AHT_1200"];
    		$wetlife->DOC_0 = $request->tto[$i]["DOC_0"];
    		$wetlife->DOC_100 = $request->tto[$i]["DOC_100"];
    		$wetlife->DOC_200 = $request->tto[$i]["DOC_200"];
    		$wetlife->DOC_300 = $request->tto[$i]["DOC_300"];
    		$wetlife->DOC_600 = $request->tto[$i]["DOC_600"];
    		$wetlife->DOC_900 = $request->tto[$i]["DOC_900"];
    		$wetlife->DOC_1200 = $request->tto[$i]["DOC_1200"];
    		$wetlife->TRS_0 = $request->tto[$i]["TRS_0"];
    		$wetlife->TRS_100 = $request->tto[$i]["TRS_100"];
    		$wetlife->TRS_200 = $request->tto[$i]["TRS_200"];
    		$wetlife->TRS_300 = $request->tto[$i]["TRS_300"];
    		$wetlife->TRS_600 = $request->tto[$i]["TRS_600"];
    		$wetlife->TRS_900 = $request->tto[$i]["TRS_900"];
    		$wetlife->TRS_1200 = $request->tto[$i]["TRS_1200"];
    		$wetlife->f1_0 = $request->tto[$i]["f1_0"];
    		$wetlife->f1_100 = $request->tto[$i]["f1_100"];
    		$wetlife->f1_200 = $request->tto[$i]["f1_200"];
    		$wetlife->f1_300 = $request->tto[$i]["f1_300"];
    		$wetlife->f1_600 = $request->tto[$i]["f1_600"];
    		$wetlife->f1_900 = $request->tto[$i]["f1_900"];
    		$wetlife->f1_1200 = $request->tto[$i]["f1_1200"];
    		$wetlife->f2_0 = $request->tto[$i]["f2_0"];
    		$wetlife->f2_100 = $request->tto[$i]["f2_100"];
    		$wetlife->f2_200 = $request->tto[$i]["f2_200"];
    		$wetlife->f2_300 = $request->tto[$i]["f2_300"];
    		$wetlife->f2_600 = $request->tto[$i]["f2_600"];
    		$wetlife->f2_900 = $request->tto[$i]["f2_900"];
    		$wetlife->f2_1200 = $request->tto[$i]["f2_1200"];
    		$wetlife->f3_0 = $request->tto[$i]["f3_0"];
    		$wetlife->f3_100 = $request->tto[$i]["f3_100"];
    		$wetlife->f3_200 = $request->tto[$i]["f3_200"];
    		$wetlife->f3_300 = $request->tto[$i]["f3_300"];
    		$wetlife->f3_600 = $request->tto[$i]["f3_600"];
    		$wetlife->f3_900 = $request->tto[$i]["f3_900"];
    		$wetlife->f3_1200 = $request->tto[$i]["f3_1200"];
    		$wetlife->f4a_0 = $request->tto[$i]["f4a_0"];
    		$wetlife->f4a_100 = $request->tto[$i]["f4a_100"];
    		$wetlife->f4a_200 = $request->tto[$i]["f4a_200"];
    		$wetlife->f4a_300 = $request->tto[$i]["f4a_300"];
    		$wetlife->f4a_600 = $request->tto[$i]["f4a_600"];
    		$wetlife->f4a_900 = $request->tto[$i]["f4a_900"];
    		$wetlife->f4a_1200 = $request->tto[$i]["f4a_1200"];
    		$wetlife->f4b_0 = $request->tto[$i]["f4b_0"];
    		$wetlife->f4b_100 = $request->tto[$i]["f4b_100"];
    		$wetlife->f4b_200 = $request->tto[$i]["f4b_200"];
    		$wetlife->f4b_300 = $request->tto[$i]["f4b_300"];
    		$wetlife->f4b_600 = $request->tto[$i]["f4b_600"];
    		$wetlife->f4b_900 = $request->tto[$i]["f4b_900"];
    		$wetlife->f4b_1200 = $request->tto[$i]["f4b_1200"];
    		$wetlife->f5a_0 = $request->tto[$i]["f5a_0"];
    		$wetlife->f5a_100 = $request->tto[$i]["f5a_100"];
    		$wetlife->f5a_200 = $request->tto[$i]["f5a_200"];
    		$wetlife->f5a_300 = $request->tto[$i]["f5a_300"];
    		$wetlife->f5a_600 = $request->tto[$i]["f5a_600"];
    		$wetlife->f5a_900 = $request->tto[$i]["f5a_900"];
    		$wetlife->f5a_1200 = $request->tto[$i]["f5a_1200"];
    		$wetlife->f5b_0 = $request->tto[$i]["f5b_0"];
    		$wetlife->f5b_100 = $request->tto[$i]["f5b_100"];
    		$wetlife->f5b_200 = $request->tto[$i]["f5b_200"];
    		$wetlife->f5b_300 = $request->tto[$i]["f5b_300"];
    		$wetlife->f5b_600 = $request->tto[$i]["f5b_600"];
    		$wetlife->f5b_900 = $request->tto[$i]["f5b_900"];
    		$wetlife->f5b_1200 = $request->tto[$i]["f5b_1200"];


            // from here
            $wetlife->f6a_0 = $request->tto[$i]["f6a_0"];
            $wetlife->f6a_100 = $request->tto[$i]["f6a_100"];
            $wetlife->f6a_200 = $request->tto[$i]["f6a_200"];
            $wetlife->f6a_300 = $request->tto[$i]["f6a_300"];
            $wetlife->f6a_600 = $request->tto[$i]["f6a_600"];
            $wetlife->f6a_900 = $request->tto[$i]["f6a_900"];
            $wetlife->f6a_1200 = $request->tto[$i]["f6a_1200"];

            $wetlife->f6b_0 = $request->tto[$i]["f6b_0"];
            $wetlife->f6b_100 = $request->tto[$i]["f6b_100"];
            $wetlife->f6b_200 = $request->tto[$i]["f6b_200"];
            $wetlife->f6b_300 = $request->tto[$i]["f6b_300"];
            $wetlife->f6b_600 = $request->tto[$i]["f6b_600"];
            $wetlife->f6b_900 = $request->tto[$i]["f6b_900"];
            $wetlife->f6b_1200 = $request->tto[$i]["f6b_1200"];

            $wetlife->f6c_0 = $request->tto[$i]["f6c_0"];
            $wetlife->f6c_100 = $request->tto[$i]["f6c_100"];
            $wetlife->f6c_200 = $request->tto[$i]["f6c_200"];
            $wetlife->f6c_300 = $request->tto[$i]["f6c_300"];
            $wetlife->f6c_600 = $request->tto[$i]["f6c_600"];
            $wetlife->f6c_900 = $request->tto[$i]["f6c_900"];
            $wetlife->f6c_1200 = $request->tto[$i]["f6c_1200"];

            $wetlife->f7a_0 = $request->tto[$i]["f7a_0"];
            $wetlife->f7a_100 = $request->tto[$i]["f7a_100"];
            $wetlife->f7a_200 = $request->tto[$i]["f7a_200"];
            $wetlife->f7a_300 = $request->tto[$i]["f7a_300"];
            $wetlife->f7a_600 = $request->tto[$i]["f7a_600"];
            $wetlife->f7a_900 = $request->tto[$i]["f7a_900"];
            $wetlife->f7a_1200 = $request->tto[$i]["f7a_1200"];

            $wetlife->f7b_0 = $request->tto[$i]["f7b_0"];
            $wetlife->f7b_100 = $request->tto[$i]["f7b_100"];
            $wetlife->f7b_200 = $request->tto[$i]["f7b_200"];
            $wetlife->f7b_300 = $request->tto[$i]["f7b_300"];
            $wetlife->f7b_600 = $request->tto[$i]["f7b_600"];
            $wetlife->f7b_900 = $request->tto[$i]["f7b_900"];
            $wetlife->f7b_1200 = $request->tto[$i]["f7b_1200"];

            $wetlife->f7c_0 = $request->tto[$i]["f7c_0"];
            $wetlife->f7c_100 = $request->tto[$i]["f7c_100"];
            $wetlife->f7c_200 = $request->tto[$i]["f7c_200"];
            $wetlife->f7c_300 = $request->tto[$i]["f7c_300"];
            $wetlife->f7c_600 = $request->tto[$i]["f7c_600"];
            $wetlife->f7c_900 = $request->tto[$i]["f7c_900"];
            $wetlife->f7c_1200 = $request->tto[$i]["f7c_1200"];

            $wetlife->f7d_0 = $request->tto[$i]["f7d_0"];
            $wetlife->f7d_100 = $request->tto[$i]["f7d_100"];
            $wetlife->f7d_200 = $request->tto[$i]["f7d_200"];
            $wetlife->f7d_300 = $request->tto[$i]["f7d_300"];
            $wetlife->f7d_600 = $request->tto[$i]["f7d_600"];
            $wetlife->f7d_900 = $request->tto[$i]["f7d_900"];
            $wetlife->f7d_1200 = $request->tto[$i]["f7d_1200"];

            $wetlife->f8a_0 = $request->tto[$i]["f8a_0"];
            $wetlife->f8a_100 = $request->tto[$i]["f8a_100"];
            $wetlife->f8a_200 = $request->tto[$i]["f8a_200"];
            $wetlife->f8a_300 = $request->tto[$i]["f8a_300"];
            $wetlife->f8a_600 = $request->tto[$i]["f8a_600"];
            $wetlife->f8a_900 = $request->tto[$i]["f8a_900"];
            $wetlife->f8a_1200 = $request->tto[$i]["f8a_1200"];

            $wetlife->f8b_0 = $request->tto[$i]["f8b_0"];
            $wetlife->f8b_100 = $request->tto[$i]["f8b_100"];
            $wetlife->f8b_200 = $request->tto[$i]["f8b_200"];
            $wetlife->f8b_300 = $request->tto[$i]["f8b_300"];
            $wetlife->f8b_600 = $request->tto[$i]["f8b_600"];
            $wetlife->f8b_900 = $request->tto[$i]["f8b_900"];
            $wetlife->f8b_1200 = $request->tto[$i]["f8b_1200"];

            $wetlife->f8c_0 = $request->tto[$i]["f8c_0"];
            $wetlife->f8c_100 = $request->tto[$i]["f8c_100"];
            $wetlife->f8c_200 = $request->tto[$i]["f8c_200"];
            $wetlife->f8c_300 = $request->tto[$i]["f8c_300"];
            $wetlife->f8c_600 = $request->tto[$i]["f8c_600"];
            $wetlife->f8c_900 = $request->tto[$i]["f8c_900"];
            $wetlife->f8c_1200 = $request->tto[$i]["f8c_1200"];

            $wetlife->f8d_0 = $request->tto[$i]["f8d_0"];
            $wetlife->f8d_100 = $request->tto[$i]["f8d_100"];
            $wetlife->f8d_200 = $request->tto[$i]["f8d_200"];
            $wetlife->f8d_300 = $request->tto[$i]["f8d_300"];
            $wetlife->f8d_600 = $request->tto[$i]["f8d_600"];
            $wetlife->f8d_900 = $request->tto[$i]["f8d_900"];
            $wetlife->f8d_1200 = $request->tto[$i]["f8d_1200"];

            $wetlife->f9a_0 = $request->tto[$i]["f9a_0"];
            $wetlife->f9a_100 = $request->tto[$i]["f9a_100"];
            $wetlife->f9a_200 = $request->tto[$i]["f9a_200"];
            $wetlife->f9a_300 = $request->tto[$i]["f9a_300"];
            $wetlife->f9a_600 = $request->tto[$i]["f9a_600"];
            $wetlife->f9a_900 = $request->tto[$i]["f9a_900"];
            $wetlife->f9a_1200 = $request->tto[$i]["f9a_1200"];

            $wetlife->f9b_0 = $request->tto[$i]["f9b_0"];
            $wetlife->f9b_100 = $request->tto[$i]["f9b_100"];
            $wetlife->f9b_200 = $request->tto[$i]["f9b_200"];
            $wetlife->f9b_300 = $request->tto[$i]["f9b_300"];
            $wetlife->f9b_600 = $request->tto[$i]["f9b_600"];
            $wetlife->f9b_900 = $request->tto[$i]["f9b_900"];
            $wetlife->f9b_1200 = $request->tto[$i]["f9b_1200"];

            $wetlife->f9c_0 = $request->tto[$i]["f9c_0"];
            $wetlife->f9c_100 = $request->tto[$i]["f9c_100"];
            $wetlife->f9c_200 = $request->tto[$i]["f9c_200"];
            $wetlife->f9c_300 = $request->tto[$i]["f9c_300"];
            $wetlife->f9c_600 = $request->tto[$i]["f9c_600"];
            $wetlife->f9c_900 = $request->tto[$i]["f9c_900"];
            $wetlife->f9c_1200 = $request->tto[$i]["f9c_1200"];

            $wetlife->f9d_0 = $request->tto[$i]["f9d_0"];
            $wetlife->f9d_100 = $request->tto[$i]["f9d_100"];
            $wetlife->f9d_200 = $request->tto[$i]["f9d_200"];
            $wetlife->f9d_300 = $request->tto[$i]["f9d_300"];
            $wetlife->f9d_600 = $request->tto[$i]["f9d_600"];
            $wetlife->f9d_900 = $request->tto[$i]["f9d_900"];
            $wetlife->f9d_1200 = $request->tto[$i]["f9d_1200"];

            $wetlife->f9e_0 = $request->tto[$i]["f9e_0"];
            $wetlife->f9e_100 = $request->tto[$i]["f9e_100"];
            $wetlife->f9e_200 = $request->tto[$i]["f9e_200"];
            $wetlife->f9e_300 = $request->tto[$i]["f9e_300"];
            $wetlife->f9e_600 = $request->tto[$i]["f9e_600"];
            $wetlife->f9e_900 = $request->tto[$i]["f9e_900"];
            $wetlife->f9e_1200 = $request->tto[$i]["f9e_1200"];

    		$wetlife->save();
    	}
          

    	return redirect()->back();
    }

    public function update3(Request $request)
    {
        // return $request->all();

        $wetlifes = WetLifeTest::where('test_id', $request->test_id)->orderBy('sample_id', 'asc')->get();

        for($i=1; $i<=count($wetlifes); $i++){
            $wetlife = $wetlifes[$i-1];
            $wetlife->f10_0 = $request->tto[$i]["f10_0"];
            $wetlife->f10_100 = $request->tto[$i]["f10_100"];
            $wetlife->f10_200 = $request->tto[$i]["f10_200"];
            $wetlife->f10_300 = $request->tto[$i]["f10_300"];
            $wetlife->f10_600 = $request->tto[$i]["f10_600"];
            $wetlife->f10_900 = $request->tto[$i]["f10_900"];
            $wetlife->f10_1200 = $request->tto[$i]["f10_1200"];

            $wetlife->f11_0 = $request->tto[$i]["f11_0"];
            $wetlife->f11_100 = $request->tto[$i]["f11_100"];
            $wetlife->f11_200 = $request->tto[$i]["f11_200"];
            $wetlife->f11_300 = $request->tto[$i]["f11_300"];
            $wetlife->f11_600 = $request->tto[$i]["f11_600"];
            $wetlife->f11_900 = $request->tto[$i]["f11_900"];
            $wetlife->f11_1200 = $request->tto[$i]["f11_1200"];

            $wetlife->f12_0 = $request->tto[$i]["f12_0"];
            $wetlife->f12_100 = $request->tto[$i]["f12_100"];
            $wetlife->f12_200 = $request->tto[$i]["f12_200"];
            $wetlife->f12_300 = $request->tto[$i]["f12_300"];
            $wetlife->f12_600 = $request->tto[$i]["f12_600"];
            $wetlife->f12_900 = $request->tto[$i]["f12_900"];
            $wetlife->f12_1200 = $request->tto[$i]["f12_1200"];

            $wetlife->f13_0 = $request->tto[$i]["f13_0"];
            $wetlife->f13_100 = $request->tto[$i]["f13_100"];
            $wetlife->f13_200 = $request->tto[$i]["f13_200"];
            $wetlife->f13_300 = $request->tto[$i]["f13_300"];
            $wetlife->f13_600 = $request->tto[$i]["f13_600"];
            $wetlife->f13_900 = $request->tto[$i]["f13_900"];
            $wetlife->f13_1200 = $request->tto[$i]["f13_1200"];

            $wetlife->f14_0 = $request->tto[$i]["f14_0"];
            $wetlife->f14_100 = $request->tto[$i]["f14_100"];
            $wetlife->f14_200 = $request->tto[$i]["f14_200"];
            $wetlife->f14_300 = $request->tto[$i]["f14_300"];
            $wetlife->f14_600 = $request->tto[$i]["f14_600"];
            $wetlife->f14_900 = $request->tto[$i]["f14_900"];
            $wetlife->f14_1200 = $request->tto[$i]["f14_1200"];

            $wetlife->f15_0 = $request->tto[$i]["f15_0"];
            $wetlife->f15_100 = $request->tto[$i]["f15_100"];
            $wetlife->f15_200 = $request->tto[$i]["f15_200"];
            $wetlife->f15_300 = $request->tto[$i]["f15_300"];
            $wetlife->f15_600 = $request->tto[$i]["f15_600"];
            $wetlife->f15_900 = $request->tto[$i]["f15_900"];
            $wetlife->f15_1200 = $request->tto[$i]["f15_1200"];

            $wetlife->f16_0 = $request->tto[$i]["f16_0"];
            $wetlife->f16_100 = $request->tto[$i]["f16_100"];
            $wetlife->f16_200 = $request->tto[$i]["f16_200"];
            $wetlife->f16_300 = $request->tto[$i]["f16_300"];
            $wetlife->f16_600 = $request->tto[$i]["f16_600"];
            $wetlife->f16_900 = $request->tto[$i]["f16_900"];
            $wetlife->f16_1200 = $request->tto[$i]["f16_1200"];

            $wetlife->remarks_0 = $request->tto[$i]["remarks_0"];
            $wetlife->remarks_100 = $request->tto[$i]["remarks_100"];
            $wetlife->remarks_200 = $request->tto[$i]["remarks_200"];
            $wetlife->remarks_300 = $request->tto[$i]["remarks_300"];
            $wetlife->remarks_600 = $request->tto[$i]["remarks_600"];
            $wetlife->remarks_900 = $request->tto[$i]["remarks_900"];
            $wetlife->remarks_1200 = $request->tto[$i]["remarks_1200"];

            $wetlife->save();
        }

        return redirect()->back();
    }
}

