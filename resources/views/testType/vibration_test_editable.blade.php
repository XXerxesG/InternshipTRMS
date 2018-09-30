@extends ('layouts.master')

@section ('content')

<div class="container" id="root">
	<h1>{{ $test->testType['description'] }}</h1>
	{{-- <h3>Test progress: <a href="#" onclick="change_status()">{{ $test->status }}</a></h3>
	@include('layouts.test.change_status') --}}
	@include('layouts.test.progress_bar')

	<form action="/testtype/vibrations" method="POST">
		{{ method_field('patch') }}
		{{ csrf_field() }}

		<input style="display:none" type="number" name="test_id" value="{{ $test->id }}">
		<input style="display:none" type="text" name="title" value="{{ $title }}">

		<table class="table table-bordered">
			<tr>
				<td>Project Name: </td>
				<td><b>{{ $test->project['project_name'] }}</b></td>
				<td>Make / Model: </td>
				<td><b>{{ $test->modelcode['code'] }}</b></td>
			</tr>
			<tr>
				<td>Test ID: </td>
				<td><b>{{ $test->id }}</b></td>
				<td>Report By: </td>
				<td><b>{{ $test->ticket['user']['name'] }}</b></td>
			</tr>
			<tr>
				<td>Est Start Date: </td>
				<td><b>{{ $test->est_start_date }}</b></td>
				<td>Est End Date: </td>
				<td><b>{{ $test->est_end_date }}</b></td>
			</tr>
			<tr>
				<td>Document Number: </td>
				<td><input type="text" name="doc_num" value="{{ $datas[0]->doc_num }}"></td>
				<td>Power Rating: </td>
				<td><input type="text" name="power_rating" value="{{ $datas[0]->power_rating }}"></td>
			</tr>

			<tr>
				<td>Test Purpose: </td>
				<td><input type="text" name="test_purpose" value="{{ $datas[0]->test_purpose}}"></td>
				<td>Rev Number:</td>
				<td><input type="text" name="rev_num" value="{{$datas[0]->rev_num }}"></td>
			</tr>
		</table>

		<div id="section1">
			<h4><b>I. Sample Description</b></h4>
			<table class="table">
				<tr>
					<td>Supplier: </td>
					<td><input type="text" name="supplier" value="{{  $datas[0]->supplier}}"></td>
					<td>Wire size: </td>
					<td><input type="text" name="wire_size" value="{{ $datas[0]->wire_size}}"></td>
					<td>Pin type: </td>
					<td><input type="text" name="pin_type" value="{{  $datas[0]->pin_type }}"></td>
					<td>Flex type: </td>
					<td><input type="text" name="flex_type" value="{{ $datas[0]->flex_type }}"></td>
				</tr>
			</table>
		</div>

		<div id="section2">
			<h4><b>II. Test Requirement</b></h4>
			<table class="table">
				<tr>
					<td>Bending angle: </td>
					<td><input type="text" name="bending_angle" value="{{ $datas[0]->bending_angle }}"></td>
					<td>Weight (kg): </td>
					<td><input type="text" name="weight" value="{{  $datas[0]->weight}}"></td>
					<td>Current (Ampere): </td>
					<td><input type="text" name="current" value="{{ $datas[0]->current }}"></td>
				</tr>
			</table>
		</div>

		<div class="form-group text-center">
			<input type="submit" class='btn btn-primary' value="Update">
		</div>
	</form>

	<div id="section3">
		<h4><b>III. Criteria for Acceptance / Failure</b></h4>
		<p>Removed temperarily since wet-life does not have csv</p>
		{{-- @include('layouts.test.csv') --}}
	</div>

{{--start changing here--}}
	<div id="section4">
		@include('layouts.testtypes.'.$title)
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

		<form action="/testtype/vibrationss" method="POST">
			{{ method_field('patch') }}
			{{ csrf_field() }}

			<input style="display:none" type="number" name="test_id" value="{{ $test->id }}">
			<input style="display:none" type="text" name="title" value="{{ $title }}">

			<table class="table table-bordered">
				<tr>
					<td>Test ID: </td>
					<td>Issue</td>
					<td>Progress/Action</td>
					<td>Status(open/close)</td>
				</tr>
				<tr>
					<td><b>{{ $test->id }}</b></td>
					<td><input type="text" name="issue" value="{{  $datas[0]->issue }}"></td>
					<td><input type="text" name="progress_action" value="{{  $datas[0]->progress_action }}"></td>
					<td><input type="text" name="status" value="{{  $datas[0]->status }}"></td>
				</tr>
			
			</table>
			<br>
				<div class="form-group text-center">
					<input type="submit" class='btn btn-primary' value="Update">
				</div>
	
		</form>
	</div>
</div>

@endsection