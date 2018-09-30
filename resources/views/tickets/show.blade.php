@extends ('layouts.master')

@section ('content')

	<h3>Ticket Infomation</h3>
	<table class="table table-bordered">
		<tr>
			<td>Request Date: </td>
			{{-- <td>{{ substr($ticket->created_at, 0, 10) }}</td> --}}
			<td>{{\Carbon\Carbon::parse($ticket->created_at)->format('d-m-Y')}}</td>
			<td>Request by: </td>
			<td>{{ $ticket->user['name']}}</td>
		</tr>
		<tr>
			<td>Project Name: </td>
			<td>{{ $ticket->project['project_name']}}</td>
			<td>Product Name: </td>
			<td>{{ $ticket->project['product_name']}}</td>
		</tr>
		<tr>
			<td>Project Manager: </td>
			<td>{{ $ticket->project['project_manager']}}</td>
			<td>Project Charge Code: </td>
			<td>{{ $ticket->charging_code }}</td>
		</tr>
		<tr>
			<td>Project Stage: </td>
			<td>{{ $ticket->project_stage }}</td>
		</tr>
	</table>

	<h3>Individual Test Infomation</h3>
	
		<table class="table table-bordered ">
			<thead>
				<tr>
					<td>Test ID</td>
					<td>Status</td>
					<td>Test Description</td>
					<td>Make/Model</td>
					<td>Reason</td>
					<td>Sample Size</td>
					<td>Sample Availability</td>
					<td>Sample Type</td>
					<td>Protocal Deviation</td>
					<td>Remark</td>
					<td> Est. Start Date</td>
					<td>Est. End Date</td>
				</tr>	
			</thead>
			<tbody>
				@foreach($ticket->tests as $test)
				<tr>
					<td>
						@if($ticket->processed && $test->approved)
						<a href="/tests/{{ $test->id }}">{{ $test->id }}</a>
						@else
						<p>{{ $test->id }}</p>
						@endif
					</td>
					<td>
						{{-- Allow for ticket approval only if not confirmed and for 'admin' user --}}
						{{-- @if(! $ticket->processed && Auth::check() && Auth::user()->type=="admin")
							@if($test->approved === null)
							<a href="#" onclick="change_approval({{ $test->id}})" style="color: orange; text-decoration: underline; font-weight: bold">Pending</a>
							@elseif( $test->approved)
							<a href="#" onclick="change_approval({{ $test->id}})" style="color: green; text-decoration: underline; font-weight: bold">Approved</a>
							@else
							<a href="#" onclick="change_approval({{ $test->id}})" style="color: red; text-decoration: underline; font-weight: bold">Rejected</a>
							@endif

							@include('layouts.tickets.change_approval')
						@else
							@if($test->approved === null)
							<p style="color: orange; font-weight: bold">Pending</p>
							@elseif( $test->approved)
							<p style="color: green; font-weight: bold">Approved</p>
							@else
							<p style="color: red; font-weight: bold">Rejected</p>
							@endif
						@endif --}}
						{{--Change made. Below is the original. Above is the modified code.--}}
						@if ($test->accept)
						<p style="color: green; font-weight: bold">Accepted</p>
						@elseif($test->pending)
						<p style="color: yellow; font-weight: bold">Pending</p>
						@else
						<p style="color: red; font-weight: bold">Rejected</p>
						@endif
					</td>
					<td>{{ $test->testType['description']}}</td>
					<td>{{ $test->modelcode['code']}}</td>
					<td>{{ $test->reason }}</td>
					<td>{{ $test->size }}</td>
					<td>{{\Carbon\Carbon::parse($test->sample_availability)->format('d-m-Y')}}</td>
					<td>{{ $test->sample_type }}</td>
					<td>{{ $test->protocal_deviation }}</td>
					<td>{{ $test->remark }}</td>
					<td>{{\Carbon\Carbon::parse( $test->est_start_date )->format('d-m-Y')}}</td>
					<td>{{\Carbon\Carbon::parse( $test->est_end_date)->format('d-m-Y')}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	


@endsection