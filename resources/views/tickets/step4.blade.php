@extends ('layouts.master')

@section ('content')

<div class="container">

<form method="POST" action="/tickets/create/step4">
	{{ csrf_field() }}

	<style type="text/css">
		th {width:25%;}
	</style>

	<table class="table table-hover" style="border-top-width:0px">
		<tbody>
			<tr>
				<th>Project Name:</th>
				<td>{{ $project->project_name }}
			</tr>
			<tr>
				<th>Product Name:</th>
				<td>{{ $project->product_name }}
			</tr>			<tr>
				<th>Project Manager:</th>
				<td>{{ $project->project_manager }}
			</tr>			<tr>
				<th>Quality Project Leader:</th>
				<td>{{ $project->quality_project_leader }}
			</tr>			<tr>
				<th>Charging Code:</th>
				<td>{{ $project->charging_code }}
			</tr>
		</tbody>
	</table>
	<hr>

	@for ($i = 1; $i <= count($tests); ++$i)

	<table class="table table-hover">
		<thead>
			<tr>Test {{ $i }}</tr>
		</thead>
		<tbody>
			<tr>
				<th>Test title:</th>
				<td>{{ $tests[$i]['title'] }}
			</tr>		
			<tr>
				<th>Test model:</th>
				<td>{{ $tests[$i]['model'] }}
			</tr>			
			<tr>
				<th>Test size:</th>
				<td>{{ $tests[$i]['size'] }}
			</tr>			
			<tr>
				<th>Test ins:</th>
				<td>{{ $tests[$i]['ins'] }}
			</tr>
		</tbody>
	</table>
	<hr>
	@endfor

	<div class="form-group">
		<input type="submit" class="btn btn-primary" value="Save and submit">
	</div>

	@include ('layouts.errors')

</form>


</div>

@endsection