<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use App\Ticket;
use App\machine;
use app\downtimeform;
use App\Project;
use App\Test;
use App\user;
use Carbon\Carbon;

class downtimeformcontroller extends Controller
{
	public function downtimeform(request $request)
	{
	// {

	//  	// $downtimeforms = downtimeform::all()
	//  	// return $downtimeforms;
	//   DB::table('downtimeforms');
	//   $downtimeforms = downtimeform::all();
	//  return $downtimeforms;
	
	// }
	
        return view('downtimeform');
	
}
}
    
    

