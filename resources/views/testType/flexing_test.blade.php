@extends ('layouts.master')

@section ('content')

<div class="container" id="root">
	<h1>{{ $test->testType['description'] /*1*/}}</h1>
	<h3>Test progress: <a href="#" onclick="change_status()">{{ $test->status }}</a></h3>
	@include('layouts.test.change_status')
	@include('layouts.test.progress_bar')


	<table class="table table-bordered">
		<tr>
			<td>Project Name: </td>
			<td><b>{{ $test->ticket->project['project_name']/*2*/ }}</b></td>
			<td>Make / Model: </td>
			<td><b>{{ $test->modelcode['code']/*3*/ }}</b></td>
		</tr>
		<tr>
			<td>Test ID: </td>
			<td><b>{{ $test->id }}</b></td>
			<td>Report By: </td>
			<td><b>{{ $test->ticket->user['name']/*4*/}}</b></td>
		</tr>
		<tr>
			<td>Est Start Date: </td>
			<td><b>{{ $test->est_start_date }}</b></td>
			<td>Est End Date: </td>
			<td><b>{{ $test->est_end_date }}</b></td>
		</tr>
		<tr>
			<td>Document Number: </td>
			<td>{{ $datas[0]->doc_num }}</td>
			<td>Power Rating: </td>
			<td>{{ $datas[0]->power_rating }}</td>
		</tr>
		<tr>
			<td>Test Purpose: </td>
			<td>{{ $datas[0]->test_purpose }}</td>
			<td>Rev Number:</td>
			<td>{{ $datas[0]->rev_num }}</td>
		</tr>
	</table>

	<div id="section1">
		<h4><b>I. Sample Description</b></h4>
		<table class="table">
			<tr>
				<td>Supplier: </td>
				<td>{{ $datas[0]->supplier }}</td>
				<td>Wire size: </td>
				<td>{{ $datas[0]->wire_size }}</td>
				<td>Pin type: </td>
				<td>{{ $datas[0]->pin_type }}</td>
				<td>Flex type: </td>
				<td>{{ $datas[0]->flex_type }}</td>
			</tr>
		</table>
	</div>

	<div id="section2">
		<h4><b>II. Test Requirement</b></h4>
		<table class="table">
			<tr>
				<td>Bending angle: </td>
				<td>{{ $datas[0]->bending_angle }}</td>
				<td>Weight (kg): </td>
				<td>{{ $datas[0]->weight }}</td>
				<td>Current (Ampere): </td>
				<td>{{ $datas[0]->current }}</td>
			</tr>
		</table>
	</div>

	<div id="section3">
		<h4><b>III. Criteria for Acceptance / Failure</b></h4>
		<p>Removed temperarily since wet-life does not have csv</p>
		{{-- @include('layouts.test.csv') --}}
	</div>

	<div id="section4">
		<h4><b>IV. Test Result</b></h4>
		<p>Description: Every 8000 cycles check for Earth Wire continuity.</p>

			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<td>8000</td>
							<td>16000</td>
							<td>24000</td>
							<td>32000</td>
							<td>40000</td>
							<td>48000</td>
							<td>56000</td>
							<td>65000</td>
						</tr>
					</thead>
					<tbody>
						@for ($i=0; $i<count($datas); $i++)
						<tr>
							<th>{{ $i+1 }}</th>
							{{-- tto refers to Test-Type-Object --}}
							<td>{{ $datas[$i]->{'8000'} }}</td>
							<td>{{ $datas[$i]->{'16000'} }}</td>
							<td>{{ $datas[$i]->{'24000'} }}</td>
							<td>{{ $datas[$i]->{'32000'} }}</td>
							<td>{{ $datas[$i]->{'40000'} }}</td>
							<td>{{ $datas[$i]->{'48000'} }}</td>
							<td>{{ $datas[$i]->{'56000'} }}</td>
							<td>{{ $datas[$i]->{'65000'} }}</td>
						</tr>
						@endfor
					</tbody>
				</table>
			</div>
			
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<td>Sample Num.</td>
							<td>Station No.</td>
							<td>Earth Wire Breakage cycle<br><span style="color: red">Breakage before Live or Neutral  :Failed</span><br><span style="color: blue">Breakage after Live or Neutral : Passed</td>
							<td>Live or Neutral Wire 1st Break or started Intermittent cycle SwivelEnd-Min 8500 cycles, PlugEnd-Min 4500 cycles</td>
							<td>Live or Neutral Wire Total Break Cycle (2 mins after the hair dryer not working) </td>
							<td>Burn Mark (Yes/No) >5mm failed </td>
							<td>Fire (Yes/No) </td>
							<td>Exposure of internal wire (Yes/No) </td>
							<td>External part (eg swivel) melted (Yes/No) </td>
							<td>Live or Neutral Wire  Failed Safely / Failed Unsafe/ NFF </td>
							<td>Results </td>
							<td>Remarks </td>
						</tr>
					</thead>
					<tbody>
						@for ($i=0; $i<count($datas); $i++)
						<tr>
							<th>{{ $i+1 }}</th>
							{{-- tto refers to Test-Type-Object --}}
							<td>{{ $datas[$i]->station_num }}</td>
							<td>{{ $datas[$i]->EWBC }}</td>
							<td>{{ $datas[$i]->LONW1 }}</td>
							<td>{{ $datas[$i]->LONW2 }}</td>
							<td>{{ $datas[$i]->BM }}</td>
							<td>{{ $datas[$i]->fire }}</td>
							<td>{{ $datas[$i]->EOIW }}</td>
							<td>{{ $datas[$i]->EPM }}</td>
							<td>{{ $datas[$i]->LONW3 }}</td>
							<td>{{ $datas[$i]->result }}</td>
							<td>{{ $datas[$i]->remark }}</td>
						</tr>
						@endfor
					</tbody>
				</table>
			</div>

			<br>
	</div>

	<div id="section5">
		<h4><b>V. Photos</b></h4>
		@include('layouts.test.photos')
	</div>
	
	<div id="section6">
		<h4><b>VI. Comments</b></h4>
		@include('layouts.test.comments')
	</div>

	<div id="section7">
		<h4><b>VII. Status</b></h4>
		<h4><b>VII. Status</b></h4>
		<table class="table table-bordered">
			<tr>
				<td>Test ID: </td>
				<td>Issue</td>
				<td>Progress/Action</td>
				<td>Status</td>
			</tr>
			<tr>
				<td><b>{{ $test->id }}</b></td>
				<td>{{ $datas[0]->issue }}</td>
				<td>{{ $datas[0]->progress_action }}</td>
				<td>open/close</td>
			</tr>
			
		</table>
			
	</div>

</div>

@endsection