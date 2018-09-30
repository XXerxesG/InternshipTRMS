@extends ('layouts.master')

@section ('content')
<div class="container">
	<h1>Edit model code</h1>
	<br>
	<table class="table">
			<tr>
				<td>Project ID</td>
				<td>Project Name</td>
				<td>Model Type</td>
			</tr>
		@foreach($modelcodes as $modelcode)
	<form action="/project/{{$modelcode->id}}/editmodelcode2" method="POST">
		{{ method_field('patch') }}
		{{ csrf_field() }}
		
		
		<div class="form-group"> 

			<tr>
			<td>{{$modelcode->project['id']}}</td>
			<td>{{$modelcode->project['project_name']}}</td>
			<td><input type="text" name="code" class="form-control" value="{{ $modelcode->code}}"></td>
		
			<td>
				
				<input type ="submit" value="Save" class ="btn btn-primary">
			</td>
			</tr>
		</div>
	
	</form>@endforeach
</table>
</div>
@endsection