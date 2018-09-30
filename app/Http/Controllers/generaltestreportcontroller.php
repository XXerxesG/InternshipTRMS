<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\test;
use App\User;
use App\ticket;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\downtimeform;
use App\listing;
use Carbon\Carbon;
use Session;
use Form;

class generaltestreportcontroller extends Controller
{
    public function index(Request $Request)
    {
    	$tickets = Ticket::latest()->get();
		$tests = test::all();
		return view('testType.General_test_report', compact('tickets' , 'tests'));

    }
}
