@extends('layouts.master')

@section ('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css\jquery.dataTables.min.css') }}">
<script type="text/javascript" charset="utf8" src="{{ asset('js\jquery.min.js') }}"></script>
<script type="text/javascript" charset="utf8" src="{{ asset('js\jquery.dataTables.min.js') }}"></script>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

	<div class="container">		
		<table id="myTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Test Type</th>
                    <th>Estimated Days</th>
                    <th>Actual Days</th>
                    <th>Act - Est<br> (days)</th>
                    <th>Hit/Miss</th>
                    
                </tr>
            </thead>
              
            <tbody>
                @foreach($tests as $test)
                
                <tr>
                	<td>{{$test->id}}</td>
                    <td>{{$test->testtype['description']}}</td>
                    <td>{{$test->testtype['est_duration']}}</td>
                    <td>{{$test->difference}}</td>
                  	<td>{{$test->delta}}</td>
                 	<td>@if($test->delta == 0 & $test->difference != 0 )
                  		<b style="color:green">Hit</b>
                  		@else
                  		<b style="color:red">Miss</b>
                  		@endif
                  	</td>
                </tr>
              
                @endforeach
            </tbody>
          
            

            </table>
	
	</div>
      


@endsection
