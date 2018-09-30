@extends ('layouts.master')

@section ('content')

<div class="" style="padding-left: 1%;padding-right:1%">


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

					.active, .accordion:hover {
   					 	background-color: #ccc; 
						}

					.panel {
    					padding-top: 0%;
   	 					display: none;
   	 					border: solid
    					background-color: white;
    					overflow: hidden;
    					font-size: 15px;
						}
				</style>
	</head>



<body>
	<div class="container" style="padding-top: 0px">
			<form action="/tickets/date" method="POST" role="search">
   		 		{{ csrf_field() }}
   		 		<table class="table">
					<div class="input-group">
					<h3> Search for Ticket</h3>
        			<td style="width: 30%">From:<input type="date" class="form-control" name="a"
            		placeholder="From" style="width: 52%"> </td>
           	 		<td style="width: 30%">To:<input type="date" class="form-control" name="b"
            		placeholder="To" style="width: 52%"></td>
            			
            		<td  style="padding-top: 2.5%; "><button type="submit" class="btn btn-primary">
                				Search
            		</button></td>
        				
    			</div>
    		</table>

			</form>
	</div>
		

	<div class="container" style="padding-bottom: 0px">
			<form action="/ticketslist" method="POST" role="search">
    			{{ csrf_field() }}
    			<div class="input-group">
       				<input type="text" class="form-control" name="q"
           			placeholder="Project name, product, etc"> 
           				<span class="input-group-btn">
            				<button type="submit" class="btn btn-primary">
                			Search
            				</button>
        				</span>
    			</div>
			</form>
		</div>
	{{-- <div>
			<a href="/ticketslist" class="btn btn-success pull-right"  >Refresh Page</a>
	</div> --}}
	<div style="text-align: center; padding-top:5px">
		<a href="/ticketslist" class="btn btn-success" style="text-align: center;">Refresh Page</a>
	</div>
		

		<div>
    		@if(isset($details))
				<br><br>
				<table class="table">
					<tr>
						{{-- <td style="width:10%"></td> --}}
						<td style="width:9.5%"><strong>Ticket ID</strong></td>
						<td style="width:10%"><strong>Ticket Submission Date</strong></td>
						<td style="width:10%"><strong>Requested by</strong></td>
						<td style="width:10%"><strong>Accepted Tests</strong></td>
						<td style="width:10%"><strong>Project name </strong></td>
						<td style="width:10%"><strong>Product name </strong></td>
						{{-- <td style="width:10%"></td> --}}
					</tr>
				</table>
			
				@foreach($details as $ticket)
			

				<table class="accordion table-bordered " >
					<tr>
						{{-- @if (count($ticket->tests->filter(function($test){
						return $test->approved;
						}))>=1) 
							<td style="width:10%">-</td>
						@else
							<td style="width:10%"><strong style="color: red">New ticket!!</strong></td>
						@endif --}}
					
						<td style="width:10%"><a href="/tickets/{{ $ticket['id'] }}">{{ $ticket['id']}}</a></td>
						<td style="width:10%">{{ \Carbon\Carbon::parse($ticket['created_at'])->format('d-m-Y') }}</td>
						<td style="width:10%">{{ $ticket->user['name'] }}</td>
						
						
						<td style="width:10%">{{ count($ticket->tests->filter(function($test){
							return $test->accept;
							})) }} of {{ count($ticket->tests) }} Accepted</td>
						
						<td style="width:10%">{{ $ticket->project['project_name'] }}</td>
						<td style="width:10%">{{ $ticket->project['product_name'] }}</td>
					
						{{-- @if (Auth::check() && Auth::user()->type=="admin")
							<td style="width:10%"><a href="#" onclick="change_delete()"><strong>Delete</strong></a></td>
							@else
							<td style="width: 10%"></td>
						@endif --}}
					</tr>
					
				
				<div>
					<div class="container">
						<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h1 class="modal-title">Are you sure to delete?</h1>
									</div>
									<div class="modal-body">
										<div class="text-right">
											<a href="/tickets/{{$ticket->id}}/deleteticketrow" class="btn btn-default">Yes</a>
											<a href="/tickets" class="btn btn-default" data-dismiss="modal">No</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<script>
						function change_delete() {
						$('#mymodal').modal('show');
						}
					</script>
				</div>
				</table>
			

			<div class="panel" >
 				<p>
 					<table class="table">
 					<td style="width: 15%"><strong>Test Id</strong></td>
 					<td style="width: 15%"><strong>Model</strong></td>
					<td style="width: 15%"><strong>Test Description</strong></td>
					<td style="width: 16%;padding-left:3%"><strong>Status</strong></td>
					<td style="width: 15%"><strong>Status Update Date</strong></td>
					<td><strong>Remark</strong></td>
					</table>
						
							
  					@foreach($ticket->tests as $test)
				
					@if (Auth::check() && Auth::user()->type=="admin")
  						<form method="POST" action="/tickets/{{ $test->id }}/edit" >
						{{ method_field('patch') }}
						{{ csrf_field() }}
						<table class="table">
						<tr>
							@if($test->cancel)
							<td style="width: 15%"><strong style="color: #08BB00">{{ $test->id }}</strong></td>
							<td style="width: 1%"><strong style="color: red"><strike>{{ $test->modelcode["code"] }}</strike></strong></td>
							<td style="width: 7%"><strong style="color: red"><strike>{{ $test->testtype["description"] }}</strike></strong>
							<td style="width: 7%"></td>
							@else
							@if ($test->accept==1)
							<td style="width: 12%"><strong style="color: #08BB00">{{ $test->id }}</strong></td>
							<td style="width: 12%"><strong style="color: #08BB00">{{ $test->modelcode["code"] }}</strong></td>
							<td style="width: 20%"><strong style="color: #08BB00">{{ $test->testtype["description"] }}</strong></td>
							@elseif ($test->accept==2)
							<td style="width: 12%"><strong style="color: #2332E5">{{ $test->id }}</strong></td>
							<td style="width: 12%"><strong style="color: #2332E5">{{ $test->modelcode["code"] }}</strong></td>
							<td style="width: 20%"><strong style="color: #2332E5">{{ $test->testtype["description"] }}</strong></td>
							@else
							<td style="width: 12%"><strong style="color:">{{ $test->id }}</strong></td>
							<td style="width: 12%"><strong style="color: red">{{ $test->modelcode["code"] }}</strong></td>
							<td style="width: 20%"><strong style="color: red">{{ $test->testtype["description"] }}</strong></td>
							@endif
							<td style="width: 6%"><input type="radio" id="contactChoice1" name="accept" value="1" @if($test->accept==1) checked @endif ><label for="contactChoice1">Accept</label></td>
							<td style="width: 6%"><input type="radio" id="contactChoice2" name="accept" value="0" @if($test->accept==0) checked @endif><label for="contactChoice2">Reject</label></td>
							{{--Added a Pending But--}}
							<td style="width: 6%"><input type="radio" id="contactChoice3" name="accept" value="2" @if($test->accept==2) checked @endif><label for="contactChoice3">Pending</label></td>
							
							{{-- <td>{{$test->accept}}</td> To see the value of accpet 0->reject,1->accept,2->pending --}}
						
							<td style="width: 14.5%;padding-left:3%">{{\Carbon\Carbon::parse($ticket['updated_at'])->format('d-m-Y') }}</td>
							
							<td ><textarea id="froala-editor" name="rejectremark" rows="1" @if ($test->accept) disabled @endif>{{ $test->rejectremark }}</textarea></td>
							
							<input type="hidden" name="approved" value="1">
							<input type="hidden" name="project_id" value="{{$test->ticket['project_id']}}">
							<input type="hidden" name="test_id" value="{{$test->id}}">
							<input type="hidden" name="user" value="{{ Auth::user()->name }}">
							<td><input type="submit" class="btn btn-primary" value="Update"></td>
							@endif
						</tr>
					</table>
				</form>	
<script>
  $(function() {
    $('textarea#froala-editor').froalaEditor()
  });
</script>						
			<table class="table">
							@if($test->cancel)
							@else
							{{-- <td style="width: 5%"><a href="/tests/{{$test->id}}/edittestrow" value="Edit">Edit</a>@endif --}}
							<td><a style="width: 10%" class="btn btn-primary"href="/tests/{{$test->id}}/edittestrow" value="Edit"class="btn btn-success">Edit</a>@endif
							@if($test->cancel)
							<form action="/tests/{{$test->id}}/cancelrow">
								{{ method_field('patch') }}
								{{ csrf_field() }}
								<input type="hidden" name="cancel" value="0">
								<input type="hidden" name="test_id" value="{{$test->id}}">
							<input type="hidden" name="user" value="{{ Auth::user()->name }}">
								<td><input type="submit" class="btn btn" value="un-cancel"></td>
							</form></td>
							@else
							<form action="/tests/{{$test->id}}/cancelrow">
								{{ method_field('patch') }}
								{{ csrf_field() }}
								<input type="hidden" name="cancel" value="1">
								<input type="hidden" name="test_id" value="{{$test->id}}">
							<input type="hidden" name="user" value="{{ Auth::user()->name }}">
								<td><input type="submit" class="btn btn-danger" value="Cancel Test"></td>
							</form></td>
						
							@endif
						</table>
						
@else	
					<table class="table">
						<tr>
							@if($test->cancel)
							<td style="width: 1%"><strong style="color: red"><strike>{{ $test->id }}</strike></strong></td>
							<td style="width: 1%"><strong style="color: red"><strike>{{ $test->modelcode["code"] }}</strike></strong></td>
							<td style="width: 1%"><strong style="color: red"><strike>{{ $test->testtype["description"] }}</strike></strong>
								<td style="width: 7%"></td>
							@else
							@if ($test->accept == 1)
							<td style="width: 15%"><strong style="color: #08BB00">{{ $test->id}}</strong></td>
							<td style="width: 15%"><strong style="color: #08BB00">{{ $test->modelcode["code"] }}</strong></td>
							<td style="width: 15%"><strong style="color: #08BB00">{{ $test->testtype["description"] }}</strong></td>
							@elseif ($test->accept == 2)
							<td style="width: 15%"><strong style="color: #2332E5">{{ $test->id }}</strong></td>
							<td style="width: 15%"><strong style="color: #2332E5">{{ $test->modelcode["code"] }}</strong></td>
							<td style="width: 15%"><strong style="color: #2332E5">{{ $test->testtype["description"] }}</strong></td>
							@else
							<td style="width: 15%"><strong style="color: red">{{ $test->id}}</strong></td>
							<td style="width: 15%"><strong style="color: red">{{ $test->modelcode["code"] }}</strong></td>
							<td style="width: 15%"><strong style="color: red">{{ $test->testtype["description"] }}</strong></td>
							<td style="width: 3%"></td>
							@endif
							@if($test->accept==1)
							<td style="width: 15%">Test Accepted</td>
							@elseif($test->accept==2)
							<td style="width: 15%">Test Pending</td>
							@else
							<td style="width: 15%">Test Rejected</td>
							@endif
							
							<td style="width: 14.5%">{{\Carbon\Carbon::parse($ticket['updated_at'])->format('d-m-Y') }}</td>
							

							<td style="width: 100%">{{ $test->rejectremark }}</td>
							@endif
						</tr>
					</table>
				@endif
  				@endforeach
  				<a href="/addtest/{{$ticket->id}}" ><strong> Add New test</strong></a>
				</p>
				</div>				
			@endforeach
   
    @else
    <P><strong>No data found!!</strong></P>
    @endif
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
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
	<a href="exporttickets" ><strong>Export All Tickets</strong></a>
</body>
</div>

 @endsection
