<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use App\Ticket;
use App\machine;
use app\downtimeform;
use App\Project;
use App\Test;
use Carbon\Carbon;
use Session;

class newmachinecontroller extends Controller
{
    public function index()
    {
        return view('newmachineform');
    }

    public function storemachine(request $request)
   {
    session()->flash('successMsg','Saved succesfully!');

   	$machinename= $request -> input('machinename');
   	$capacity=$request-> input('capacity');
   	$suppiler=$request-> input('suppiler');
    $user_id=$request-> input('user_id');

   	$data = array('machinename'=>$machinename,"capacity"=>$capacity, 'suppiler'=>$suppiler, 'user_id'=>$user_id);
   	DB::table('machines')->insert($data);
      
    return redirect()->back();
   }


}


