@extends ('layouts.master') @section ('content')

<div class="table">
	<div class="" style="padding-left: 1%; padding-right:1%">

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
					font-size: 16px;
					transition: 0.4s;
					padding-bottom: 10%;
				}

				.active,
				.accordion:hover {
					background-color: #ccc;
				}

				.panel {
					padding-top: 0%;
					display: none;
					border: solid background-color: white;
					overflow: hidden;
					font-size: 15px;
				}

				input[type="date"] {
					border: 2px solid gray;
					border-radius: 10px;
					box-shadow: 2px 2px 3px #666;
					margin: 2px;
					font-size: 16px;
					padding: 4px 7px;
					outline: 0;
					-webkit-appearance: none;
					-moz-box-shadow: 2px 2px 3px #666;
					-webkit-box-shadow: 2px 2px 3px #666;
					-moz-border-radius: 10px;
					-webkit-border-radius: 10px;
				}
			</style>
		</head>

		<body>
			<div class="container" style="padding-top: 0px">
				<form action="/tests" method="POST" role="search">
					{{ csrf_field() }}
					<table class="table">
						<div class="input-group">
							<h3> Search for a Test</h3>
							<td style="width: 60%">
								<input type="text" class="form-control" name="q" placeholder="Project, Product, Ticket Id, Test Id etc">
							</td>
							<td style="padding-top: 0.75%; ">
								<button type="submit" class="btn btn-primary">
									Search
								</button>
							</td>
						</div>
					</table>
				</form>
			</div>

			<div>
				@if(isset($details))
				<br>
				<br>
				<table class="table">
					<tr>
						<th style="width: 7%">Test ID</th>
						<th style="width: 7%">TicketID</th>
						<th style="width: 7%">Requested On</th>
						<th style="width: 12.5%">Project Name</th>
						<th style="width: 12.5%;padding-left:3%">Product Name</th>
						<th style="width: 12.5%;padding-left:5%">Model</th>
						<th style="width: 12.5%; padding-left:4%">Description</th>
						<th style="width: 12.5%;padding-left:3%">Sample Size</th>
						<th style="width: 12.5%; padding-left:2%">Test Progress</th>
						<th style="width: 10%">Technician</th>
						
					</tr>
				</table>
				@foreach ($details as $test) @if($test->accept) @if($test->archive) @else @if (Auth::check() && Auth::user()->type=="admin")
				<table class="accordion">

					<tr>
						@if($test->report)
						<td style="width: 7%">
							<a href="tests/{{ $test->id }}">{{ $test->id }}</a>
						</td>
						@else
						<td style="width: 7%">{{ $test->id }}</td>
						@endif
						<td style="width: 7%">
							<a href="tickets/{{ $test->ticket_id }}">{{ $test->ticket_id }}</a>
						</td>
						<td style="width: 7%">{{ $test->ticket['created_at']}}</td>
						<td style="width: 15%">{{ $test->ticket['project']['product_name']}}</td>
						<td style="width: 15%">{{ $test->ticket['project']['project_name']}}</td>
						<td style="width: 12%">{{ $test->modelcode['code']}}</td> 
						<td style="width: 17%">{{ $test->testType['description'] }}</td>
						<td style="width: 5%;padding-left:0.5%">{{$test->size}}</td>
						<td style="width: 10%; padding-left:0.5%">
							<a href="tests/{{ $test->id }}/editstatus" class="btn btn-primary">{{ $test->status }}</a>
						</td>
						<td style="width: 10%" style="padding-left:5%">
							@if($test->test_eng==null)
							<a href="tests/{{ $test->id }}/edittesteng" class="btn btn-warning">Choose Engineer</a>
							@else
						<a href="tests/{{ $test->id }}/edittesteng" class="btn btn-success btn-block"style="">{{ $test->test_eng }}</a>
							@endif
						</td>
					</tr>
				</table>
				<div class="panel">
					<p>
						<form action="/tests/{{ $test->id }}/edit" method="post">
							{{ csrf_field() }}
							<td style="width: 11%">
								<input type="checkbox" disabled @if($test->accept) checked @endif>
								<label style="width:20%">Accepted</label>
							</td>

							<td style="width: 1%">
								<input type="checkbox" name="equipment" value="1" required @if($test->equipment==1) checked @endif >
								<label style="width:20%"> Equipment Assessment</label>
							</td>

							<td style="width: 1%">
								<input type="checkbox" name="arrived" value="1" required @if($test->arrived==1) checked @endif>
								<label style="width:20%">Samples Arrived</label>
							</td>
							<td style="width: 1%">
								{{--Scheduling is disabled because  the user does not need to key in. Once they add the days in Scheduling page and update there it will automatically be reflected here--}}
								<input type="checkbox" name="scheduling" value="1" disaabled @if($test->scheduling==1) checked @endif disabled>
								<label style="width:20%">Scheduling</label>
							</td>
							{{--Dates Start Here--}}
							{{--Important Dates of Scheduling--}}
							<br> @if ($test->arrived)
							<td>
								<label style="padding-right:0.5%"> Estimated Start date: </label>
								<label style="padding-left:5%">	<input type="Date" name="est_start_date" value="{{$test->est_start_date}}" style="width:11.5em;"></label>
							</td>
							<td>
								<label style="padding-left:5%"> Actual Start date: </label>
								<label style="padding-left:6.2%"><input type="Date" name="actual_start_date" value="{{$test->actual_start_date}}" style="width:11.5em;"></label>
							</td>
							<td>
								<label style="padding-left:1% ;padding-right:0.5%;">Estimated End date:</label>
							<label>	<input type="Date" name="est_end_date" value="{{$test->est_end_date}}" style="width:11.5em;"></label>
							</td>
							<td>
								<label style="padding-right:0.5%;">Actual End date:</label>
							<label>	<input type="Date" name="actual_end_date" value="{{$test->actual_end_date}}" style="width:11.5em"></label>
							</td>
							<br>
							{{--Dates Regarding Equipment--}}
							<td>
								<label style="padding-right:0.5%;padding-top:1%"> Preparing Equipment Start Date:</label>
								<label>	<input type="Date" name="equipment_start_date" value="{{$test->equipment_start_date}}" style="width:11.5em"></label>
							</td>
							<td>
								<label style="padding-left:5%"> Preparing Equipment End Date:</label>
								<label>	<input type="Date" name="equipment_end_date" value="{{$test->equipment_end_date}}" style="width:11.5em"></label>
							</td>
							<br>
							{{--Dates Reagarding Samples--}}
							<td>
								<label style="padding-right:0.5%;padding-top:1%"> Preparing Sample Start Date:</label>
								<label style="padding-left:1.5%">	<input type="Date" name="sample_start_date" value="{{$test->sample_start_date}}" style="width:11.5em"></label>
							</td>
							<td>
								<label style="padding-left:4.7%"> Preparing Sample End Date:</label>
								<label style="padding-left:1.5%">	<input type="Date" name="sample_end_date" value="{{$test->sample_end_date}}" style="width:11.5em"></label>
							</td>
							<br>
							{{--Miscallaneous Dates--}}
							<td>
								<label style="padding-right:0.5%;padding-top:1%">Test Pause date:</label>
								<label style="padding-left:7%">	<input type="Date" name="pausedate" value="{{$test->pausedate}}" style="width:11.5em"></label>
							</td>
							<td>
								<label style="padding-right:0.5%;padding-left:4.8%">Test Cancel date:</label>
								<label style="padding-left:5.5%">	<input type="Date" name="canceldate" value="{{$test->canceldate}}" style="width:11.5em"></label>
							</td>
							<br> 
							{{-- For Interval Dates--}} 
							{{--
							<td>
								<label style="padding-right:0.5%">Interval Start Date:</label>
								<input type="Date" name="interval_start_date" value="{{$test->interval_start_date}}" style="width:11em">
							</td>
							<td>
								<label style="padding-right:0.5%">Interval End Date:</label>
								<input type="Date" name="interval_end_date" value="{{$test->interval_end_date}}" style="width:11em">
							</td>
							<br> --}} {{--Sample Repair Date--}} {{--
							<td>
								<label style="padding-right:0.5%">Sample Repair Start Date:</label>
								<input type="Date" name="sample_repair_start_date" value="{{$test->sample_repair_start_date}}" style="width:11em">
							</td>
							<td>
								<label style="padding-right:0.5%">Sample Repair End Date:</label>
								<input type="Date" name="sample_repair_end_date" value="{{$test->sample_repair_end_date}}" style="width:11em">
							</td>
							 --}} 
							
							{{--The User Side here all date fields are disabled--}} 
							@else
							{{-- <td>
								<label style="padding-right:0.5%">Actual start date:</label>
								<input type="Date" name="actual_start_date" value="{{$test->actual_start_date}}" style="width:11em" disabled>
							</td>
							<td>
								<label style="padding-right:0.5%">Est end date:</label>
								<input type="Date" name="est_end_date" value="{{$test->est_end_date}}" style="width:11em" disabled>
							</td>
							<td>
								<label style="padding-right:0.5%">Pause date:</label>
								<input type="Date" name="pausedate" value="{{$test->pausedate}}" style="width:11em" disabled>
							</td>
							<td>
								<label style="padding-right:0.5%">Cancel date:</label>
								<input type="Date" name="canceldate" value="{{$test->canceldate}}" style="width:11em" disabled>
							</td>
							<td>
								<label style="padding-right:0.5%">Completed date:</label>
								<input type="Date" name="completeddate" value="{{$test->completeddate}}" style="width:11em" disabled>
							</td> --}}
							@endif
							<br> {{--
							<td>
								<strong>Model:&nbsp</strong>{{ $test->modelcode['code']}}</td>
							<br>
							<td style="text-align:center;">
								<strong>Sample Size: &nbsp</strong>{{ $test->size }}</td> --}}
							<td>
								<input type="hidden" name="progress" value="{{ $test->status }}">
								<input type="hidden" name="test_id" value="{{$test->id}}">
								<input type="hidden" name="user" value="{{ Auth::user()->name }}">
								<div class="form-group" style="text-align: center; padding-top:15px">
									<input type="submit" name="{{$test->id}}" class='btn btn-primary' value="Update">
								</div>
							</td>
						</form>

					</p>
					@if( Auth::check() && Auth::user()->type=="admin" )
					<form action="/tests/archived/{{$test->id}}" method="POST">
						{{ csrf_field() }}
						{{ method_field('patch') }}
				<div class="form-group text-center">
					<input type="hidden" name="archive" value=1>
					<input type="submit" class='btn btn-info' value="Completed  and archived" onclick="event.preventDefault(); var bool=confirm('Are you sure to archive?'); if(bool){$(this).parent().parent().submit()};">
				</div>
				</form>
				<form action="/testsreport/{{$test->id}}" method="POST">
				{{ csrf_field() }}
				{{ method_field('patch') }}
				<div class="form-group text-center">
					<input type="hidden" name="report" value="1">
				<input type="submit" class='btn btn-success' value="Generate Report" >
				</div>
				</form>
					@endif
					</div>
					@else
					<table class="accordion">
						<tr>
							<td style="width: 7%">
								<a href="tests/{{ $test->id }}">{{ $test->id }}</a>
							</td>
							<td style="width: 7%">
								<a href="tickets/{{ $test->ticket_id }}">{{ $test->ticket_id }}</a>
							</td>
							<td style="width: 7%">{{ $test->ticket['created_at']}}</td>
							<td style="width: 13%;padding-left:0.5%">{{ $test->ticket['project']['project_name']}}</td>
							<td style="width: 13%">{{ $test->ticket['project']['product_name']}}</td>
							<td style="width: 12%">{{ $test->modelcode['code']}}</td>
							<td style="width: 21%;padding-left:0.5%">{{ $test->testType['description'] }}</td>
							<td style="width: 8%;padding-left:0.5%">{{$test->size}}</td>
							<td style="width: 9%;padding-left:0.7%">{{ $test->status }}</td>
							<td style="width: 7%">{{ $test->test_eng }}</td>
						</tr>
					</table>
					<div class="panel">
						<p>
							<td>
								<input class="form-check-input " type="checkbox" id="status" disabled @if($test->accept) checked @endif>
								<label class="form-check-label" for="status" style="width:20%">
									Test Accepted
								</label>
							</td>
							<td>
								<input class="form-check-input " type="checkbox" id="equipment" disabled @if($test->equipment) checked @endif>
								<label class="form-check-label" for="equipement" style="width:20%">
									Equipment Assessment
								</label>
							</td>
							<td>
								<input class="form-check-input " type="checkbox" id="samples" disabled @if($test->arrived) checked @endif>
								<label class="form-check-label" for="samples" style="width:20%">
									Samples Arrived
								</label>
							</td>

							<td>
								<input class="form-check-input " type="checkbox" id="scheduling" disabled @if($test->scheduling) checked @endif>
								<label class="form-check-label" for="scheduling" style="width:20%">
									Scheduling Done
								</label>
							</td>
							{{--
							<td style="padding-left:3%">Equipment Assessment
								<input type="checkbox" name="equipment" value="1" disabled @if($test->equipment) checked @endif ></td>
							<td style="width: 1%">Samples Arrived:
								<input type="checkbox" name="arrived" value="1" disabled @if($test->arrived) checked @endif></td> --}}
							<br>
							<td>
								<label style="padding-right:0.5%"> Estimated Start date: </label>
							<label style="padding-left:5%">	<input type="Date" name="est_start_date" value="{{$test->est_start_date}}" style="width:11.5em;" disabled></label>
							</td>
						<td>
							<label style="padding-left:5%"> Actual Start date: </label>
							<label style="padding-left:6.2%"><input type="Date" name="actual_start_date" value="{{$test->actual_start_date}}" style="width:11.5em;" disabled></label>
						</td>
						<td>
							<label style="padding-left:1% ;padding-right:0.5%;">Estimated End date:</label>
						<label>	<input type="Date" name="est_end_date" value="{{$test->est_end_date}}" style="width:11.5em;" disabled></label>
						</td>
						<td>
							<label style="padding-right:0.5%;">Actual End date:</label>
						<label>	<input type="Date" name="actual_end_date" value="{{$test->actual_end_date}}" style="width:11.5em" disabled></label>
						</td>
						<br>
						{{--Dates Regarding Equipment--}}
						<td>
							<label style="padding-right:0.5%;padding-top:1%"> Preparing Equipment Start Date:</label>
							<label>	<input type="Date" name="equipment_start_date" value="{{$test->equipment_start_date}}" style="width:11.5em" disabled></label>
						</td>
						<td>
							<label style="padding-left:5%"> Preparing Equipment End Date:</label>
							<label>	<input type="Date" name="equipment_end_date" value="{{$test->equipment_end_date}}" style="width:11.5em" disabled></label>
						</td>
						<br>
						{{--Dates Reagarding Samples--}}
						<td>
							<label style="padding-right:0.5%;padding-top:1%"> Preparing Sample Start Date:</label>
							<label style="padding-left:1.5%">	<input type="Date" name="sample_start_date" value="{{$test->sample_start_date}}" style="width:11.5em" disabled></label>
						</td>
						<td>
							<label style="padding-left:4.7%"> Preparing Sample End Date:</label>
							<label style="padding-left:1.5%">	<input type="Date" name="sample_end_date" value="{{$test->sample_end_date}}" style="width:11.5em" disabled></label>
						</td>
						<br>
						{{--Miscallaneous Dates--}}
						<td>
							<label style="padding-right:0.5%;padding-top:1%">Test Pause date:</label>
							<label style="padding-left:7%">	<input type="Date" name="pausedate" value="{{$test->pausedate}}" style="width:11.5em" disabled></label>
						</td>
						<td>
							<label style="padding-right:0.5%;padding-left:4.8%">Test Cancel date:</label>
							<label style="padding-left:5.5%">	<input type="Date" name="canceldate" value="{{$test->canceldate}}" style="width:11.5em" disabled></label>
						</td>
						</p>
					</div>
					@endif @endif @endif @endforeach @else
					<P>
						<strong>No data found!!</strong>
					</P>
					@endif
				</div>
				<script>
					var acc = document.getElementsByClassName("accordion");
					var i;

					for (i = 0; i < acc.length; i++) {
						acc[i].addEventListener("click", function () {
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
		<br>
		<a href="exporttests" class="btn btn-info">
			<strong>Export All Tests To Excel</strong>
		</a>
		</body>
		</div>
		@endsection