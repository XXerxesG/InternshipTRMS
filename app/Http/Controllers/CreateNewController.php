<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\TestType\CreateNew;
use App\TestType;

class CreateNewController extends Controller
{
    public function createNew(Request $request)
	{
		/*\\if(Gate::allows('admin')){
            $testType = new testType;
            $test_type->test_name = request()->title;
            $test_type>save();
            return back();
        }

        if(Gate::denies('admin')){
            return back();
        }*/

        return view ("createNew");

     }
}


