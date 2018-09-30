<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Test;
use App\project;
use App\TestType;
use Carbon\Carbon;//date
use App\BangkokSchedule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MasterTableController extends Controller
{
   public function show(request $request){
        $tests=Test::where('accept',1)->get();
      //   $tests=DB::table('Tests')->orderBy('id','desc')->where('accept',1)->get();
         $testtype = testtype::all();
         $ticket = ticket::all();
        return view('mastertable.mastertable',compact('tests','testtype','ticket'));
   }
}
// ->getQuery()->orderBy('id','desc')