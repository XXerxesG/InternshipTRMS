@extends ('layouts.master')

@section ('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h3>Feedback v0.3</h3>
			<b>Home</b>
			<ul>
				<li><s>to include how to submit a test request.</s></li>
				<li><s>include the test request execution process chart</s></li>
				<li><s>include a summary base on test status.</s></li>
			</ul>

			<b>Form</b>
			<ul>
				<li>use 1 page form</li>
			</ul>

			<b>Ticket overview</b>
			<ul>
				<li><s>include project name</s></li>
				<li><s>Test status</s></li>
				<li><s>Include start date</s></li>
				<li>include target end date (need input for every type of test)(need algorithm to calculate based on start_date)</li>
				<li><s>Include ticket date time in another column</s></li>
			</ul>


			<b>Individual test page</b>
			<ul>

				<li>
					- include progress bar for user and allow admin to change the progress
					</li>
				--->pending processing, include start and end date
				--->pending approval, include start and end date
				--->Test started, include start and end date
				--->test ended, include start and end date
				--->Report generation, include start and end date
				--->test concluded, include start and end date
				<li>
					- include another progress bar
				</li>
				--->waiting for sample, include start and end date
				--->product under repair, include start and end date
				--->equipment down, include start and end date
				--->equipment modification, include start and end date
				<li>
					<s> - include a message window </s>
				</li>
				--->allow user and admin to key in message. auto-notification will be sent to the receiving party.
				--->include a checkbox to allow user print or not print the report.
			</ul>

			<b>General</b>
			<ul>
				<li>auto notification when change in status</li>
				<li>auto notification when ticket submission</li>
				<li>approval or rejection by test and not by ticket.</li>
				<li><s>use csv to display accpetance criteria</s></li>
			</ul>

		</div>
	</div>
</div>

@endsection