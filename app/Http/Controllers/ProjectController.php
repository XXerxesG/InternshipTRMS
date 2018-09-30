<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Project;
use App\modelcode;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $modelcodes = modelcode::all();
        $projects = project::all()->sortByDesc('project_name');
        return view('projects.index', compact('projects', 'modelcodes'));
    }

    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session()->flash('successMsg','Updated Succesfully!');
        if(Gate::allows('admin')){
            $project = new Project;
            $project->project_name = request()->project_name;
            $project->product_name = request()->product_name;
            $project->alternate_product_name = request()->alternate_product_name;
            $project->project_manager = request()->project_manager;
            $project->quality_project_leader = request()->quality_project_leader;
            $project->charging_code = request()->charging_code;
            $project->save();
            return back();
        }

        if(Gate::denies('admin')){
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = project::find($id);
       
        return view ('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $this -> validat($request,[
            'project_name'=>'required',
            'product_name'=>'required',
            'alternate_product_name'=>'required',
            'project_manager'=>'required',
            'quality_project_leader'=>'required',
            ]);
        $project->project_name = $request->project_name;
        $project->product_name = $request->product_name;
        $project->alternate_product_name = $request->alternate_product_name;
        $project->project_manager = $request->project_manager;
        $project->quality_project_leader = $request->quality_project_leader;
        $project->save();

        return redirect ('project.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function update10 (request $request, $id)
    {
        $modelcodes = Modelcode::find($id);
        $modelcodes->powerrating =$request->get('powerrating');
        $modelcodes->powerrating_ld =$request->get('powerrating_ld');
        $modelcodes->powerrating_hd =$request->get('powerrating_hd');
        $modelcodes->voltage =$request->get('voltage');
        $modelcodes->voltage_ld =$request->get('voltage_ld');
        $modelcodes->voltage_hd =$request->get('voltage_hd');
        $modelcodes->frequency =$request->get('frequency');
        $modelcodes->save();
            return redirect('projects');
    }

    public function update11 (request $request, $id)
    {
        $project = project::find($id);
        // $modelcodes = modelcode::find($id);

        return view ('projects.edit', compact('project', 'modelcodes' ));
    }
    public function update12 (request $request, $id)
    {
        $project = project::find($id);
        $project->project_name =$request->get('project_name');
        $project->product_name =$request->get('product_name');
        $project->project_manager =$request->get('project_manager');
        $project->quality_project_leader =$request->get('quality_project_leader');
        $project->charging_code =$request->get('charging_code');
        $project->save();
        
         return redirect('/projects');
    }

    // public function update15 (request $request, $project_id)
    // {
    //     $modelcode = modelcode::find($project_id);
    //     $modelcode->code = $request->get('code');
    //     $modelcode->save();
        
    //      return redirect('/projects');
    // }

     public function update13 (request $request)
    {
       
        $modelcodes = modelcode::all()->sortByDesc('created_at');


        return view ('projects.edit2', compact('project', 'modelcodes' ));
    }

    public function update14 (request $request,$id)
    {   
        $modelcodes = modelcode::find($id);
        
        $modelcodes->code =$request->get('code');
        $modelcodes->save();
       
        return redirect('/projects');
    }

    public function delete(request $request, $id)
    {
        $project = project::find($id);
        $project->delete();
        

        return redirect('/projects');
    }
}
 