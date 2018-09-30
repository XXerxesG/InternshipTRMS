<?php
// These step1-4 for ticket controller are old and discarded design which meant to be deleted

namespace App\Http\Controllers\Ticket;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;
use App\TestType;

class Step2Controller extends Controller
{
    public function index(Request $request)
    {
    	$project_id = $request->session()->get('project_id');
    	$modelcodes = project::where('id', $project_id)->first()->modelcodes;

    	$testTypes = TestType::all();

    	return view('tickets.step2', ['testTypes' => $testTypes, 'modelcodes' => $modelcodes]);
    }

    // public function getStandards(Request $request)
    // {
    // 	$title = $request->get('title');

    // 	$results = TestType::where('title', $title)->pluck('standard');

    // 	return $results;
    // }

    public function store(Request $request)
    {
        $request->session()->put('tests', $request->tests);

        return redirect('/tickets/create/step3');
    }

}
