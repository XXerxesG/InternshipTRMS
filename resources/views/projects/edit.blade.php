@extends ('layouts.master')

@section ('content')
<div class="container">
	<h1>Edit Project listing</h1>
	<br>

	<form action="/project/{{$project->id}}/editprojectrow2" method="POST">
		{{ method_field('patch') }}
		{{ csrf_field() }}

		<div class="form-group">
			<label for="project_name" class = "control-label col-md-2">Project Name:</label>
			<div class ="col-md-10">
				<input type="text" name="project_name" placeholder="..." class="form-control" value="{{ $project->project_name}}"><br>
			</div>
		</div>
		<div class="form-group">
			<label for="project_name" class = "control-label col-md-2">Product Name:</label>
			<div class ="col-md-10">
				<input type="text" name="product_name" placeholder="..." class="form-control" value="{{ $project->product_name}}"><br>
			</div>
		</div>
		<div class="form-group">
			<label for="project_name" class = "control-label col-md-2">Project manager:</label>
			<div class ="col-md-10">
				<input type="text" name="project_manager" placeholder="..." class="form-control" value="{{ $project->project_manager}}"><br>
			</div>
		</div>
		<div class="form-group">
			<label for="project_name" class = "control-label col-md-2">Quality Project Leader:</label>
			<div class ="col-md-10">
				<input type="text" name="quality_project_leader" placeholder="..." class="form-control" value="{{ $project->quality_project_leader}}"><br>
			</div>
		</div>
		<div class="form-group">
			<label for="project_name" class = "control-label col-md-2">Cost Code:</label>
			<div class ="col-md-10">
				<input type="text" name="charging_code" placeholder="..." class="form-control" value="{{ $project->charging_code}}"><br>
			</div>
		</div>
		@foreach($project->modelcodes as $modelcodes)
		<div class="form-group">
			<label for="model" class = "control-label col-md-2">Model Code:</label>
			<div class ="col-md-10">
				<input type="text" name="code" placeholder="..." class="form-control" value="{{$modelcodes->code}}"><br>
			</div>
		</div>
		@endforeach
	
	<div class="text-center">
		<div class="form-group">
			<div class = "col-md-2 col-md-10">
				<br>
				<input type ="submit" value="Save" class ="btn btn-primary">
			</div>	
		</div>
	</div>
	</form>
</div>
@endsection