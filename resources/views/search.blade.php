@extends ('layouts.master')

@section ('content')

<div class="container">
<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                Search
            </button>
        </span>
    </div>
</form>

<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    	<h2>Details</h2>
    	<table class="table sortable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Created Date</th>
                <th>Project Name</th>
                <th>Test Type</th>
                <th>Submitted by</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $ticket)
            @foreach ($ticket->tests->filter(function($val){
                    return $val->accept;
                }) as $test)
            <tr>
                <td><a href="/tickets/{{ $ticket['id'] }}">{{ $ticket['id']}}</a></td>
                <td>{{$ticket['created_at']}}</td>
                <td>{{$ticket->project['project_name']}}</td>
                <td>{{$test->testtype['description']}}</td>
                <td>{{$ticket->user['name']}}</td>
            </tr>
            @endforeach
            @endforeach

        </tbody>
    	</table>
    	<script src="{{ asset('js\sorttable.js') }}"></script>
    
    @else()
    <P><strong>No data found!!</strong></P>
    @endif


    

</div>

	
</div>

@endsection