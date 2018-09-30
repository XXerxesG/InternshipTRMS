@extends ('layouts.master')

@section ('content')


<div class="container">
	<form action="/testdurationmasterview" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default"><strong>Search</strong>
                
            </button>
        </span>
    </div>
</form>
</div>
<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>

</div>  	

<div class="">
    	<table class="table sortable">
        <thead>
            <tr>  
                <td><strong>id</strong> </td>
                <td><strong>Test </strong></td>
                <td><strong>Status</strong></td>
                <td><strong>Version</strong> </td> 
                <td><strong>No. days to complete the test</strong> </td>
                <td><strong>Test Target</strong> </td> 
                <td><strong>Unit</strong> </td> 
                <td><strong>Sample Size</strong></td> 
                <td><strong>Actual test duration - 2 shifts</strong></td> 
                <td><strong>Comment</strong></td> 
            </tr>
        </thead>
        <tbody>
            @foreach($details as $test_duration)
            <tr>
                <td>{{$test_duration->ids}}</td>
                <td>{{$test_duration->test}}</td>
                <td>{{$test_duration->status}}</td>
                <td>{{$test_duration->version}}</td>
                <td>{{$test_duration->no_days_to_complete_the_test}}</td>
                <td>{{$test_duration->testtarget}}</td>
                <td>{{$test_duration->unit}}</td>
                <td style="padding-right:4em">{{$test_duration->sample_size}}</td>
                <td>{{$test_duration->no_days_to_complete_life_test}}</td>
                <td>{{$test_duration->Comments}}</td>

            </tr> 
            @endforeach
            

        </tbody>
    	</table>
    	<script src="{{ asset('js\sorttable.js') }}"></script>
    
    @else()
    <P><strong>No data found!!</strong></P>
    @endif

</div>
    


@endsection