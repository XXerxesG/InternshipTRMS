<?php
// Purpose of this General Controller is to make some additional and subtle function.
// It should not affect the design and flow of TRMS3

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\test;
use App\User;
use App\ticket;
use App\project;
use App\testType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\downtimeform;
use App\listing;
use Carbon\Carbon;
use Session;
use Form;


class GeneralController extends Controller
{
    public function index()
    {
    	// Array used in 'wherein' function is case insensitive, because of database Collation
    	$pending = Test::wherein('accept', ['0', 'NULL'])->count();
    	$progress = Test::wherein('status', ['pause', 'in progress'])->count();
    	$ended = Test::wherein('status', ['completed'])->count();
        $cancel = Test::where('status', ['cancel'])->count();
    	return view('index', compact('pending', 'progress', 'ended', 'cancel'));
    }

    // public function store(Request $request)
    // {
    //     return 'test'
    // }
    

    public function operation()
    {
        return view('operation');
    }

    public function changestatus(request $Request, $id)
    {
        $test = test::find($id);
        return view('layouts.test.change_status', compact('test'));
    }

     public function delete(request $Request, $id)
    {
        $ticket = ticket::find($id);
        return view('layouts.test.change_delete', compact('ticket'));
    }

     public function changestatus1(request $Request, $id)
    {
        $test = test::find($id);
        return view('layouts.test.change_test_eng', compact('test'));
    }

    public function manpower()
    {
        return view('manpower');
    }

    public function teamsetuppicture()
    {
        
        return view('teamsetuppicture');
    }

    public function log()
    {
    	return view('log');
    }

    public function search()
    {
        return view('search');
    }

    public function downtimeform()
    {
        return view('downtimeform', compact('downtimeforms'));
    }
    public function created(request $request)
    {   
        session()->flash('successMsg','Updated Succesfully!'); 
        
        $machinesname= $request -> input('machinesname');
        $fromdate=$request-> input('fromdate');
        $todate=$request-> input('todate');
        $downreason=$request-> input('downreason');
        $downremark=$request-> input('downremark');
        $down_time=$request-> input('Down_time');
        $user_id=$request-> input('user_id');

        $data = array('machinesname'=>$machinesname,"fromdate"=>$fromdate, 'todate'=>$todate,'downreason'=>$downreason,'downremark'=> $downremark, 'user_id' => $user_id, 'down_time'=>$down_time);
        DB::table('downtimeforms')->insert($data);
        return redirect('/machinedowntime/create');
    }

    public function machinedowntimelist()
    {
        return view('machinedowntimelist');
    }

    public function machineslistoverview()
    {
        $downtimeforms = downtimeform::all();
        
        return view('machineslistoverview', compact('downtimeforms'));
    }

    public function import()
    {
        return view('import');
    }

    public function archive()
    {
        $test = test::all();
        $project = Project::all();
        $testType = TestType::all()->sortByDesc('description');

        return view('archive', compact('test','project', 'testType'));
    }

    public function testprotocolmasterview()
    {
        return view('testprotocolmasterview');
    }

    public function testdurationmasterview()
    {
        return view('testdurationmasterview');
    }

    public function newcreatereporttemplate()
    {
        return view('newcreatereporttemplate');
    }

    public function admin()
    {
        if(Gate::allows('admin')){

            $users = User::get(['id', 'name', 'type']);

            return view('admin', compact('users'));

        }

        if(Gate::denies('admin')){
            return redirect('/');
        }
    }

    public function change_type(User $user)
    {
        if($user->type == "user"){
            $user->type = "admin";
            $user->save();
        }else{
            $user->type = "user";
            $user->save();
        }

        return back();
    }

    
}

