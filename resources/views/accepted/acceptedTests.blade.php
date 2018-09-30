@extends ('layouts.master')

@section ('content')

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Test ID</th>
        <th scope="col">Ticket ID</th>
        <th scope="col">Test Description</th>
        <th scope="col">Status</th>
        <th scope="col">Reason</th>
        <th scope="col">Remarks</th>
      </tr>
    </thead>
    <tbody>
      @foreach($test as $tests)

      <tr>
      <td><a href='acceptedTests/'{{$tests->id}}>{{$tests->id}}</a></td>
        <td>{{$tests->ticket_id}}</td>  
        <td>{{$testtype->where('id',$tests->test_type_id)->pluck('description')}}</td>  
        <td>{{$tests->status}}</td>
        <td>{{$tests->reason}}</td>
        <td>{{$tests->remarks}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection