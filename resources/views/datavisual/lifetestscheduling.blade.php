@extends('layouts.master')

@section ('content')

	<div class="">		
		<h2>BANGKOK (Acc-07-WL)</h2>
		

		<table class="table table-bordered">
			<tr>
				<td style="font-size:20px">Capacity:</td>
				<td></td>
				<td></td>
				<td>24</td>
			</tr>
			<tr>
				<td style="font-size:20px">24 station w/pressure</td>
				<td>B80</td>
				<td>B160</td>
				<td></td>
				<td>On-going</td>
				<td></td>
				<td></td>
			</tr>
			@foreach ($tests as $test)
			<tr>
				<td>{{$test->ticket['project']['project_name']}}</td>
			</tr>
			@endforeach
		</table>
    </div>  


@endsection
