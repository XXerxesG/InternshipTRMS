<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\qualityprojectleader;

class qualityprojectleadercontroller extends Controller
{
    public function index(Request $request)
    {
    	session()->flash('successMsg','Updated Succesfully!');
    	$qualityprojectleadername= $request -> input('qualityprojectleadername');

        $data = array('qualityprojectleadername'=>$qualityprojectleadername);
        DB::table('qualityprojectleaders')->insert($data);

        return redirect()->back();
    }
}
