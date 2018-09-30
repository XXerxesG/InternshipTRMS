@extends ('layouts.master')

@section ('content')

			<div class="container">		
			<form action="/machinesdownsummary" method="POST" role="search">
    				{{ csrf_field() }}
    			 <div class="input-group">
        		 	<input type="text" class="form-control" name="q" placeholder="Search">
        		 		<span class="input-group-btn">
           		 				<button type="submit" class="btn btn-default">
                  					Search
                 				</button>
        				</span>
    			</div>
			</form>
	</div>
<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    	<h2>Details</h2>
    	<table class="table sortable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Machines name</th>
                <th>Reason</th>
                <th>Total Down time</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $downtimeform)
			
            <tr>
                <td>{{ $downtimeform['id']}}</a></td>
                <td>{{$downtimeform['machinesname']}}</td>
                <td>{{$downtimeform['downreason']}}</td>
                <td>{{$downtimeform['down_time']}}</td> 
                
            </tr>
            
            @endforeach
			<td></td>
			<td></td>
			
        </tbody>
    	</table>
        <td><strong>Total down time:</strong></td>
        <td>{{$downtimeform['down_time']}}</td>
        <br>
        <br>
        <br>
        <br>
        
    	<script src="{{ asset('js\sorttable.js') }}"></script>
    
    @else()
    <P><strong>No data found!!</strong></P>
    @endif


    

</div>

	
</div>

@endsection
					