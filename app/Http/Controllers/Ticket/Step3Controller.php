<?php
// These step1-4 for ticket controller are old and discarded design which meant to be deleted

namespace App\Http\Controllers\Ticket;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Step3Controller extends Controller
{
	public function index()
	{
		return view('tickets.step3');
	}

	public function store(Request $request)
	{
		$request->session()->put('est_arr_date', $request->est_arr_date);
	
		return redirect('/tickets/create/step4');
	}
}
