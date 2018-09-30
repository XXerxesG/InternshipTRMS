@extends('layouts.master')

@section ('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css\jquery.dataTables.min.css') }}">
<script type="text/javascript" charset="utf8" src="{{ asset('js\jquery.min.js') }}"></script>
<script type="text/javascript" charset="utf8" src="{{ asset('js\jquery.dataTables.min.js') }}"></script>

{{-- These scripts are just for the table and do not change unless you want to modify the table--}}
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();//the name to use to run the script on a specific table.
    $('#mydropdown').dropdown();
} );
</script>
<script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
        
        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
        
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
</script>
        
	<div class="container">		
		<table id="myTable">
            <thead>
                <tr>
                    <th>Test ID</th>
                    <th>Ticket ID</th>
                    <th>Description</th>
                    <th>Start Date</th>
                    <th>Days </th>
                    <th>Submit</th>
                    <th>Machine Selection</th>
                    
                </tr>
            </thead>
              
            <tbody>
              @foreach($tests as $test)
                <tr>
                    <td style="width:10%">{{$test->id}}</td>
                    <td style="width:10%">{{$test->ticket_id}}</td>
                    <td style="width:20%">{{$test->testtype['description']}}</td>
                    <form action="/testscheduling/{{$test->id}}" method="POST">
                        {{ csrf_field() }}                      
                        
                    <td style="width:12%">
                        <div class="form-group text-center"> {{--Its diasbled because the user would use the ticket overview to add the est_start_date.--}}
                        <input type="date" name="est_start_date" value="{{$test->est_start_date}}" disabled>
                        </div>
                    </td>
                    <td>
                        <div class="form-group text-center">
                        <input type="number"id="days" name="days" style="width:2cm" value="{{$test->days}}" required>
                        </div>
                    </td>
                    <td>
                        <input type="submit" name="{{$test->id}}" class='btn btn-success' value="Update">
                    </td>
                    <td>
                    @if($test->scheduling==0 &&$test->machine==null){{-- If the value of scheduling col. is 0 and no machine is selected--}}
                    <a href="testscheduling/{{$test->id}}/machine" class="btn btn-info" style="padding-bottom:5%">Select a Machine</a>
                    @elseif($test->scheduling==1&&$test->machine==null){{--If the scheduling is done but machine is not selected. Here the button will turn red--}}
                    <a href="testscheduling/{{$test->id}}/machine" class="btn btn-danger" style="padding-bottom:5%">Machine not Selected</a>
                    @elseif($test->machine!=null){{-- Show the Machine--}}
                    <a href="testscheduling/{{$test->id}}/machine" class="btn btn-success" style="padding-bottom:5%">{{$test->machine}}</a>
                    @endif
                    </td>
                </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
      