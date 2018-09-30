@extends ('layouts.master')

@section ('content')

<div class="container">
<table class="table">
	<h1>Archive tests</h1>
					<tr>
						<th>Test ID</th>
						<th>TicketID</th>
						<th>project name</th>
						<th>product name</th>
						<th>Request on</th>
						<th>Description</th>
						<th>Test Progress</th>
						<th>Test Tech/Eng</th>
						
					</tr>
			
				@foreach($test as $test)
				@if($test->archive)
				
					<tr>
						
						<td ><a href="tests/{{ $test->id }}">{{ $test->id }}</a></td>
						<td ><a href="tickets/{{ $test->ticket_id }}">{{ $test->ticket_id }}</a></td>
						{{-- <td>{{ substr($test->ticket['created_at'], 0,10) }}</td> --}}
						<td >{{ $test->ticket['project']['project_name']}}</td>
						<td >{{ $test->ticket['project']['product_name']}}</td>
						<td >{{ $test->ticket['created_at']}}</td>
						<td >{{ $test->testType['description'] }}</td>
						<td >{{ $test->status }}</a></td>
						<td >{{ $test->test_eng }}</td>
						@if( Auth::check() && Auth::user()->type=="admin" )
						<td><form action="/tests/unarchived/{{$test->id}}" method="POST">
						{{ csrf_field() }}
						{{ method_field('patch') }}
						<div class="form-group text-center">
						<input type="hidden" name="archive" value=0>
						<input type="submit" class='btn btn' value="Unarchive" onclick="event.preventDefault(); var bool=confirm('Unarchive'); if(bool){$(this).parent().parent().submit()};" style="margin-top: 0px">
						</div>
						</form></td>
						@endif
						</div>
					</tr>
				
				@endif
				@endforeach
			</table>
</div>

@endsection
