<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use app\downtimeform;
use app\listing;



class downlistcontroller extends Controller
{
   

   function machineslistoverview(request $request)
   {
   	$machinesname= $request -> input('machinesname');
   	$fromdate=$request-> input('fromdate');
   	$todate=$request-> input('todate');
   	$downreason=$request-> input('downreason');
   	$downremark=$request-> input('downremark');
      $down_time=$request-> input('Down_time');
      $user_id=$request-> input('user_id');

   	$data = array('machinesname'=>$machinesname,"fromdate"=>$fromdate, 'todate'=>$todate,'downreason'=>$downreason,'downremark'=> $downremark, 'user_id' => $user_id, 'down_time'=>$down_time);
   	DB::table('downtimeforms')->insert($data);
      
      return view('machineslistoverview');
   }
   
   
}


