<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class FileController extends Controller
{
	public function store(Request $request, $id, $num)
	{
		if($request->hasfile('pic')){
		$address = $request->address;
		$pic = $request->pic;
		$name = $pic->getClientOriginalName();
		
		Storage::putFileAs($address, $pic, $name);
		// return storage::url('2.jpg');
		return redirect()->back();
	}
		else
		return redirect()->back();
	
	}
}
