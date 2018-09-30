@extends ('layouts.master')

@section ('content')

<div class="container">		

<link rel="stylesheet" type="text/css" href="{{ asset('css\jquery.dataTables.min.css') }}">
<script type="text/javascript" charset="utf8" src="{{ asset('js\jquery.min.js') }}"></script>
<script type="text/javascript" charset="utf8" src="{{ asset('js\jquery.dataTables.min.js') }}"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

            <table id="myTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Project Name</th>
                    <th>Product Name</th>
                    <th>Estimated Date</th>
                    <th>Actual Date</th>
                    <th>Delayed (Days) till current date</th>
                </tr>
            </thead>
              
            <tbody>
                @foreach($tests as $test)
                
                <tr>
                    <td>{{$test->id}}</td>
                    <td>{{$test->ticket['project']['project_name']}}</td>
                    <td>{{$test->ticket['project']['product_name']}}</td>
                    <td>{{$test->sample_availability}}</td>
                    <td>{{$test->actual_start_date}}</td>
                    <td>{{$test->difference}}</td>
                </tr>
              
                @endforeach
            </tbody>
          
            

            </table>
       

      
       
</div>





@endsection