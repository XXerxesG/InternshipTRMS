<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelcode;

class ModelcodeController extends Controller
{
	public function store()
	{
		session()->flash('successMsg','Updated Succesfully!');
		$modelcode = new Modelcode;
		$modelcode->project_id = request()->get('project_id');
		$modelcode->code = request()->get('code');
		$modelcode->save();

		return back();
	}
}
