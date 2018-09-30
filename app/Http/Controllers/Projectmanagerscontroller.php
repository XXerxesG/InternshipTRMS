<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\projectmanager;

class Projectmanagerscontroller extends Controller
{
    public function index(Request $request)
    {
    	session()->flash('successMsg','Updated Succesfully!');
    	$projectmanagername= $request -> input('projectmanagername');

        $data = array('projectmanagername'=>$projectmanagername);
        DB::table('projectmanagers')->insert($data);

        return redirect()->back();
    }
}
