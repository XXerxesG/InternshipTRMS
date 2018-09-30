@extends ('layouts.master')

@section ('content')

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h1 class="text-center">Test Request Management System</h1>
			<h3 style="color: red" class="text-center">User Guide</h3>
			<td><a href="/tickets/create" class="btn btn-info" style="padding-bottom:2.5%;padding-top:2.5%">Create A New Tickets</a>
			</td>
			<td><a href="/ticketslist" class="btn btn-info" style="padding-bottom:2.5%;padding-top:2.5%">View All Submitted
					Tickets</a></td>
			<td><a href="/mastertable" class="btn btn-info" style="padding-bottom:2.5%;padding-top:2.5%">View All Accepted Tests</a></td>
			<td><a href="/testmachine" class="btn btn-info" style="padding-bottom:2.5%;padding-top:2.5%">View Machine Schedule</a></td>
			<td><a href="/projects" class="btn btn-info" style="padding-bottom:2.5%;padding-top:2.5%">Create or View Projects</a></td>
			<h5><b>For Test Request Submission</b></h5>
			<ol>
				<li><b>'Register'</b> or <b>'login'</b> your account. Using Philips email for registration is recommended.</li>
				<li>Click <b>'New request submission'</b></li>
				<li>After filling in infomations, click <b>'Submit'</b></li>

			</ol>
			<h5><b>Test Request execution process chart</b></h5>
			<ol>
				<li>All submitted ticket are categorised to <font color="blue">pending</font> by default.</li>
				<li>Go to Ticket Overview.</li>
				<li>Select the test to be <font color="green">accepted </font> or <font color="red">rejected</font>.</li>
			</ol>
			<h5><b> Master Table</b></h5>
			<ol>
				<li>Update the Test Progress </li>
				<li>Select Test Engineer</li>
				<li>Tick the check-box of whether <b>Equipment Assessment</b> and <b>Samples arrived</b></li>
				<li>Add the number of days in <b> Test Duration</b> you would like to run the test for and add the <b>Estimated
						Start Date. Once you press the <font color="darkblue">Update</font> button, you will get the <b>Estimated End
							Date</b> </b></li>
				<b> For all the changes made in Master Table remember to press the <font color="darkblue">Update</font> button</b>
			</ol>
			<h5><b>Scheduling</b></h5>
			<ol>
				<li> Select the Machine tab in the navbar.</li>
				<li> Select the Machine Rack. </li>
				<li>Select the Specific machine to view the tests that are scheduled.</li>
			</ol>
			
			<img src="{{ asset('storage\Flowchart.JPG') }}" style="width:110%" ;>
			<h3 style="color: red">Statistic</h3>
			<table style="font-size: 1.2em; margin-left: 2em">
				<tr>
					<th>Test pending:</td>
					<td style="padding-left: 3em">{{ $pending }}</td>
				</tr>
				<tr>
					<th>Test in progress:</th>
					<td style="padding-left: 3em">{{ $progress }}</td>
				</tr>
				<tr>
					<th>Test completed:</th>
					<td style="padding-left: 3em">{{ $ended }}</td>
				</tr>
				<tr>
					<th>Test cancel:</th>
					<td style="padding-left: 3em">{{ $cancel }}</td>
				</tr>
			</table>
		</div>
	</div>
</div>

@endsection