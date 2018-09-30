<?php
// These step1-4 for ticket controller are old and discarded design which meant to be deleted


namespace App\Http\Controllers\Ticket;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;

class Step1Controller extends Controller
{
    public function index()
    {
    	$projects = Project::all();

    	return view('tickets.step1', compact('projects'));
    }

    public function store(Request $request)
    {
		// Validation and error prompt
		$this->validate(request(), 
			[
			'select_project_from' => 'required',
			'project_name' => 'required_if:select_project_from,from_project_name',
			'product_name' => 'required_if:select_project_from,from_product_name',
			'project_stage' => 'required',
			'project_stage_other' => 'required_if:project_stage,others',
			],[
			'select_project_from.required' => 'Selection is required',
			'project_name.required_if' => 'Please select a Project Name',
			'product_name.required_if' => 'Please select a Product Name'
			]);

		// Store input to session
		if($request->select_project_from == "from_project_name"){
			$project = Project::where('project_name', $request->project_name)->first();
		}else if($request->select_project_from == "from_product_name"){
			$project = Project::where('product_name', $request->Product_name)->first();
		}

		// Store project_stage
		$request->session()->put('project_id', $project->id);
		if(request()->project_stage == 'others'){
			$request->session()->put('project_stage', $request->project_stage_other);
		}else{
			$request->session()->put('project_stage', $request->project_stage);
		}

		// Redirect to second page
		return redirect('/tickets/create/step2');

    }
}
