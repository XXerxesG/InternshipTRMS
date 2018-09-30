<?php
// These step1-4 for ticket controller are old and discarded design which meant to be deleted

namespace App\Http\Controllers\Ticket;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Project;
use App\Ticket;
use App\Test;


class Step4Controller extends Controller
{
	public function index(Request $request)
	{
		$id = $request->session()->get('project_id');
		$project = Project::all()->find($id);

		$tests = $request->session()->get('tests');

		return view('tickets.step4', ['project' => $project, 'tests'=> $tests]);
	}

	public function store(Request $request)
	{
		$count = count($request->session()->get('tests'));

		// Get current time to check is there any ticket submitted today
		$now = substr(Carbon::now()->toDateTimeString(), 0, 10);
		$ticketsToday = DB::table('tickets')
				->whereDate('created_at', $now);

		// If there is no ticket submitted today, start with a newone
		// Otherwise, increment the ticket id
		if($ticketsToday->get()->isNotEmpty()){
			$ticket_id = $ticketsToday->latest()->first()->id + 1;
		}else{
			$ticket_id = preg_replace("(-)", "", $now) . "01";
			$ticket_id = substr($ticket_id, 2, 10);
		}

		// Save an individual ticket first.
		$ticket = new Ticket;
		$ticket->id = $ticket_id;
		$ticket->user_id = Auth::id();
		$ticket->project_id = session()->get('project_id');
		$ticket->project_stage = session()->get('project_stage');
		$ticket->est_arr_date = session()->get('est_arr_date');
		$ticket->save();

		// For every every ticket, save all test
		for($i=1; $i<=$count; $i++){
			$test = new Test;
			$tests = session()->get('tests');
			$test->test_type_id = DB::table('test_types')->where('description', $tests[$i]['title'])->first()->id;
			$test->modelcode_id = DB::table('modelcodes')->where('code', $tests[$i]['model'])->first()->id;
			$test->size = $tests[$i]['size'];
			$test->ins = $tests[$i]['ins'];
			$test->ticket_id = $ticket_id;
			$test->id = $ticket_id."0$i";
			$test->save();
				
			// Inner for loop to save every sample in 'testType/xxx' table
			$title = DB::table('test_types')->where('description', $tests[$i]['title'])->first()->title;
			$title = strtolower($title);
			$title = preg_replace('/\s+/', '_', $title);

			for($j=1; $j<=(int)$tests[$i]['size']; $j++){
				DB::table($title."s")->insert(
					[
						'test_id'=>$ticket_id."0$i",
						'created_at'=>Carbon::now(),
						'updated_at'=>Carbon::now()
					]
				);
				Storage::makeDirectory($ticket_id."0$i/".$j);
			}
		}

		return redirect('/tickets');

	}

}
