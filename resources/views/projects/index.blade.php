@extends ('layouts.master')

@section ('content')

<div class="container">
			<head>
  					<meta charset="utf-8">
  					<meta name="viewport" content="width=device-width, initial-scale=1">
  					<link rel="stylesheet" href="{{ asset('css\jquery-ui.css') }}">
  					<link rel="stylesheet" href="/resources/demos/style.css">
  					<script src="{{ asset('js\jquery-1.12.4.js') }}"></script>
  					<script src="{{ asset('js\jquery-ui.js') }}"></script>
 						 <script>
  							$( function() {
   							$( "#accordion" ).accordion();
  							} );
  						</script>
			</head>

			
	<h1>Add new details</h1>
	

	
	@if (Auth::check() && Auth::user()->type=="admin")
	@if(Session::has('successMsg'))
    <div class="alert alert-success"> {{ Session::get('successMsg') }}</div>
  @endif
	<div class="row">
	<div><p id="addTest"><a href="#" onclick="showForm1()">Add New Project</a></p></div>
	<script>
		function showForm1(){
			if(!$('#form1').is(":visible")){
				$('#form1').show();
			}else{
				$('#form1').hide();
			}
		}
	</script>
	<form id="form1" method="POST" action="/projects" style="display: none; border: 1px solid #ddd; padding:1.5em" class="col-md-7">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="">Project Name: example 'Fast TFC' or 'Fast IPD' or 'Fast LCM'</label>
			<input type="text" name="project_name" placeholder="..." class="form-control" required="">
		</div>
		<div class="form-group">
			<label for="">Product Name: example 'Fast TFC' or 'Fast IPD' or 'Fast LCM'</label>
			<input type="text" name="product_name" placeholder="..." class="form-control" required="">
		</div>
		<div class="form-group">
			<label for="">Project Manager:</label>
			<input type="text" name="project_manager" placeholder="..." class="form-control" required="">
		</div>
		<div class="form-group">
			<label for="">Quality Project Leader:</label>
			<input type="text" name="quality_project_leader" placeholder="..." class="form-control" required="">
		</div>
		<div class="form-group">
			<label for="">Charge Code:</label>
			<input type="text" name="charging_code" placeholder="..." class="form-control" required="">
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="Add Project">
		</div>
	</form>
	</div>

	<div class="row">
	<div><p id="addModelcode"><a href="#" onclick="showForm2()">Add New Model No.</a></p></div>
	<script>
		function showForm2() {
			if(!$('#form2').is(":visible")){
				$('#form2').show();
			}else{
				$('#form2').hide();
			}			
		}
	</script>
	<form id="form2" method="POST" action="/modelcodes" style="display: none; border: 1px solid #ddd; padding:1.5em" class="col-md-7">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="">Model No: </label>
			<input type="text" name="code" placeholder="..." class="form-control" required>
		</div>
		<div class="form-group">
			<label for="">Under project: </label>
			<select name="project_id" required>
				<option value="" selected disabled>Please select</option>
				@foreach ($projects as $project)
				<option value="{{ $project->id }}">{{ $project->project_name }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<input type="submit" class='btn btn-primary' value="Add">
		</div>
	</form>
	</div>
	

	<div class="row">
	<div><p id="addnewProjectManager"><a href="#" onclick="showForm3()">Add New Project Manager</a></p></div>
	<script>
		function showForm3(){
			if(!$('#form3').is(":visible")){
				$('#form3').show();
			}else{
				$('#form3').hide();
			}
		}
	</script>
	<form id="form3" method="POST" action="/projectsmanager" style="display: none; border: 1px solid #ddd; padding:1.5em" class="col-md-7">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="">Project Manager Name: </label>
			<input type="text" name="projectmanagername" placeholder="..." class="form-control" required="">
		</div>
		
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="Add Project Manager">
		</div>
	</form>
	</div>
	
	<div class="row">
	<div><p id="addnewQualityProjectLeader"><a href="#" onclick="showForm4()">Add New Quality Project Leader</a></p></div>
	<script>
		function showForm4(){
			if(!$('#form4').is(":visible")){
				$('#form4').show();
			}else{
				$('#form4').hide();
			}
		}
	</script>
	<form id="form4" method="POST" action="/qualityprojectleader" style="display: none; border: 1px solid #ddd; padding:1.5em" class="col-md-7">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="">Quality Project Leader Name: </label>
			<input type="text" name="qualityprojectleadername" placeholder="..." class="form-control" required="">
		</div>
		
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="Add New Quality Project Leader">
		</div>
	</form>
	</div>
	<div class="row"><a href="/project/editmodelcode">Edit model codes</a></div>
	@endif


	
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.accordion {
    background-color: #D9F5FE;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc; 
}

.panel {
    padding: 18px;
    display: none;
    border: solid
    background-color: white;
    overflow: hidden;
    font-size: 15px;
}
</style>
</head>
<table clas="table">
						<tr>
						<td style="width:2%"><strong></strong></td>	
						<td style="width:4%"><strong>id</strong></td>
						<td style="width:10%"><strong>Project Name</strong></td>
						<td style="width:11%"><strong>Product Name</strong></td>
						<td style="width:12%"><strong>Project Manager</strong></td>
						<td style="width:12%"><strong>Quality Project Leader</strong></td>
						<td style="width:12%"><strong>Cost Code</strong></td>
						<td style="width:9%"></td>
						<td style="width:10%"><strong>Model No.</strong></td>
				
						<td style="width:20%"><strong># of tests</strong></td>
						</tr>
					</table>
@foreach ($projects as $project)
<button class="accordion">

				<table clas="table">	
						
						<tr>
  						<td style="width:5%">{{ $project->id }}</td>
						<td style="width:12%">{{ $project->project_name }}</td>
						<td style="width:12%">{{ $project->product_name }}</td>
						<td style="width:12%">{{ $project->project_manager }}</td>
						<td style="width:12%">{{ $project->quality_project_leader }}</td>
						<td style="width:12%">{{ $project->charging_code }}</td>
						<td style="width:12%"></td>
						<td style="width:12%">{{ $project->modelcodes->implode('code', ', ') }}</td>
						
						@php
						$n=0;
						foreach ($project->tickets as $ticket){
						$n += count($ticket->tests);
						}
						@endphp
						
						<td style="width:12%">{{ $n }}</td>
						<td style="width:10%"></td>
						<td style="width:100%"><a href="/project/{{$project->id}}/editprojectrow"><strong>Edit</strong></a></td>
						<td><a href="/project/{{$project->id}}/delete"><strong>delete</strong></a></td>
						
						</tr></table></button>
						
						
						
						
<div class="panel" >
  <p>@foreach($project->modelcodes as $modelcodes)
					<tr>
					
					@if (Auth::check() && Auth::user()->type=="admin")
					<form method="POST" action="/project/{{ $modelcodes->id }}/edit" style="height:%">
						<table class="table">
						{{ method_field('patch') }}
						{{ csrf_field() }}
						<a href="#" onclick=""></a></h3>
						<td style="width:20%"><strong>Model no. : &nbsp</strong>{{ $modelcodes['code'] }}</td>
						
						<td style="width:20%"><strong>Power Rating:</strong>
						<input type="text" style="width:20%" name="powerrating" value="{{ $modelcodes->powerrating }}">Watt<br><br>
						<b>LD*&nbsp</b><input type="number" style="width:20%" name="powerrating_ld" value="{{ $modelcodes->powerrating_ld }}">%
						&nbsp&nbsp&nbsp
						<b>HD*&nbsp</b><input type="number" style="width:20%" name="powerrating_hd" value="{{ $modelcodes->powerrating_hd }}">%</td>
						
						<td style="width:20%"><strong>Voltage:</strong>
						<input type="text" style="width:20%" name="voltage" value="{{ $modelcodes->voltage }}"> &nbspV<br><br>
						<b>LD*&nbsp</b><input type="number" style="width:20%" name="voltage_ld" value="{{ $modelcodes->voltage_ld }}">%
						&nbsp&nbsp&nbsp
						<b>HD*&nbsp</b><input type="number" style="width:20%" name="voltage_hd" value="{{ $modelcodes->voltage_hd }}">% </td>
						<td style="width:20%"><strong>Frequency:</strong>
						<input type="text" style="width:20%" name="frequency" value="{{ $modelcodes->frequency }}"> &nbspHz
						<br><br>
						<b>LD*&nbsp</b><input type="number" style="width:20%" name="" value="">%
						&nbsp&nbsp&nbsp
						<b>HD*&nbsp</b><input type="number" style="width:20%" name="" value="">%</td>
						
						<td><input type="submit" class="btn btn-secondary" value="submit"></td>
						</table>
						<br>
						
					</form>
					
					
					<br>
					@else
					<table class="table">
						<td style="width: 10%"><strong>Model no. : &nbsp</strong>{{ $modelcodes['code'] }}</td>
						
						<td style="width: 10%"><strong>Power Rating:</strong>
						{{ $modelcodes->powerrating }}Watt</td>
						<td style="width: 10%"><strong>Voltage:</strong>
						{{ $modelcodes->voltage }}V</td>
						<td style="width: 10%"><strong>Frequency:</strong>
						{{ $modelcodes->frequency }}Hz</td>
						<br>
					</table>
						@endif
				@endforeach
				HD*  => Higher Deviation<br>
						LD*  => Lower Deviation</p>
</div>

@endforeach

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>

</body>
</html>

</div>

@endsection