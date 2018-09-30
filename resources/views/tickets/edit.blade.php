@extends ('layouts.master')

@section ('content')

<div class="" id="root" style="padding-left: 3%">
	<h3>Test & Verification Laboratory</h3>

	<h4>Test edit Form for <a style="color: red">{{$tests->id}}</a></h4>
	<br>
	
	<h5>Type type :&nbsp&nbsp <a style="color: red">{{$tests->testType['description']}}</a><h5>
		<br>
		<br>
	
		
		{{-- Information for general info field --}}
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Date:</label><br>
					<input type="text" disabled placeholder="<?php echo date("m/d/y");?>" class="form-control">
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Requester:</label><br>
					<input type="text" style="width: 50%" disabled placeholder="{{$tests->ticket->user['name']}}" class="form-control">
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Project Name:</label><br>
					<input type="text" style="width: 80%" disabled placeholder="{{$tests->ticket->project['project_name']}}" class="form-control">
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Product Name:</label><br>
					<input type="text" style="width: 80%" disabled placeholder="{{$tests->ticket->project['product_name']}}" class="form-control">
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Project Manager:</label><br>
					<input type="text" class="form-control" style="width: 50%" disabled v-model="project_manager" placeholder="{{$tests->ticket->project['project_manager']}}">
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Cost Code:</label><br>
					<input type="text" class="form-control" style="width: 50%" disabled v-model="charging_code" placeholder="{{$tests->ticket->project['charging_code']}}">
				</div>
			</div>
			
		</div>
		<hr>
		{{-- Table for each test row --}}
		<form method="post" action="/tests/{{$tests->id}}/edittestrow1" class="form-inline">
			{{ csrf_field() }}
		<table class="table">
			<thead>
				<tr>
					<td>S/N<span style="color: red">*</span></td>
					<td>Test Description<span style="color: red">*</span></td>
					<td>Make/Model<span style="color: red">*</span></td>
					<td>Reason<span style="color: red">*</span></td>
					<td>Sample Size<span style="color: red">*</span></td>
					<td>Sample Availiability<span style="color: red">*</span></td>
					<td>Sample Type<span style="color: red">*</span></td>
					<td>Protocal Deviation? (If yes, please specify)<span style="color: red">*</span></td>
					<td>Remark (optional)</td>
				</tr>
			</thead>
			
		<tr>
			<td>1</td>
			<td>
				<select name="test_type_id" required >
					<option value="" selected disabled>--Select--</option>
					@foreach ($testTypes as $testType)
					<option value="{{$testType->id}}">{{$testType->description}}</option>
					@endforeach
				</select>
			</td>
			
			<td><input type="text" name="code" value="{{$tests->modelcode['code']}}" disabled></td>
			<td>
			<select name="reason" required>
				<option value="TFC System Evaluation">TFC System Evaluation</option>
				<option value="TFC Element Evaluation">TFC Element Evaluation</option>
				<option value="PDLM System Verification">PDLM System Verification</option>
				<option value="PDLM Element Verification">PDLM Element Verification</option>
				<option value="PDLM Part Cost Down">PDLM Part Cost Down</option>
				<option value="PDLM Alternate Part">PDLM Alternate Part</option>
				<option value="LCM Part Cost Down">LCM Part Cost Down</option>
				<option value="LCM Alternate Part">LCM Alternate Part</option>
				<option value="Field Call Verification">Field Call Verification</option>
				<option value="Legal">Legal</option>
				<option value="Claims">Claims</option>
				<option value="Competitor Benchmarking">Competitor Benchmarking</option>
			</select>
		</td>

			<td>
				<input type="number" name="size" value="{{$tests->size}}" required></td>

			<td><input type="date" name="sample_availability" value="{{$tests->sample_availability}}" required></td>

			<td><input type="text" name="sample_type" value="{{$tests->sample_type}}" required></td>

			<td><textarea name="protocal_deviation" rows="1"  required>{{$tests->protocal_deviation}}</textarea></td>

			<td><textarea name="remark" rows="1" >{{$tests->remark}}</textarea></td>
		</tr>
	
		</table>
		<input type="hidden" name="test_id" value="{{$tests->id}}">
		<input type="hidden" name="user" value="{{ Auth::user()->name }}">

		
		<div class="text-center">
			<div class="form-group">
				<input type="submit" class='btn btn-primary' value="Submit">
				<a href="/tickets" class="btn btn-default" data-dismiss="modal">Close</a>
			</div>
		</div>

	</form>
</div>



@endsection