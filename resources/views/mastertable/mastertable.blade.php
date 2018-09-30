@extends('layouts.master') @section ('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css\jquery.dataTables.min.css') }}">
<script type="text/javascript" charset="utf8" src="{{ asset('js\jquery.min.js') }}"></script>
<script type="text/javascript" charset="utf8" src="{{ asset('js\jquery.dataTables.min.js') }}"></script>

{{-- <script>
    $(document).ready(function () {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
  });
  </script>
--}}
<script>
    $(document).ready(function () {
    $('#dtOrderExample').DataTable({
      "order": [[ 0, "desc" ]]//descending
    });
    $('.dataTables_length').addClass('bs-select');
  });
  </script>
<div class="container">
    <table id="dtOrderExample" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Test ID</th>
                <th>Ticket ID</th>
                <th>Project Name</th>
                <th>Test Description</th>
                <th>Size/Qty</th>
                <th>Test Progress</th>
                <th>Test Engineer</th>
                
                <th>Product Name</th>
                <th>Model</th>
                <th>Sample Type</th>
                <th> Accepted</th>
                <th>Equipment Assessment</th>
                <th>Samples Arrived</th>
                <th>Scheduling</th>
                <th>Machine</th>
                <th>Test Duration (Days)</th>
                <th>Estimated Start Date</th>
                <th>Estimated End Date</th>
                <th>Actual Start Date</th>
                <th> Actual End Date</th>
                <th> Preparing Equipment Start Date:</th>
                <th> Preparing Equipment End Date:</th>
                <th>Preparing Sample Start Date:</th>
                <th> Preparing Sample End Date:</th>
                {{-- <th>Test Pause date:</th> --}}
                <th>Test Cancel date:</th>
                <th>Submission</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tests as $test)

            <tr>
                <td>{{$test->id}}</td>
                <td>{{$test->ticket_id}}</td>
                <td>{{ $test->ticket['project']['project_name']}}</td>
                <td>{{$test->testType['description']}}</td>
                <td>{{ $test->size }}</td>



                <form action="/tests/{{ $test->id }}/edit" method="post">
                    {{ csrf_field() }}

                    {{-- Test Progress--}}
                    <td><a href="tests/{{ $test->id }}/editstatus" class="btn btn-primary">{{ $test->status }}</a></td>
                    {{--Engineer--}}
                    <td> @if($test->test_eng==null)
                            <a href="tests/{{ $test->id }}/edittesteng" class="btn btn-warning">Choose Engineer</a>
                        @else
                            <a href="tests/{{ $test->id }}/edittesteng" class="btn btn-success btn-block" style="">
                            {{$test->test_eng }}</a>
                        @endif
                    </td>
                   
                    <td>{{$test->ticket['project']['product_name']}}</td>
                    <td>{{$test->modelcode['code']}}</td>
                    <td>{{$test->sample_type}}</td>
                    {{--Checkboxes--}}
                    <td><input type="checkbox" disabled @if($test->accept) checked @endif></td>
                    <td><input type="checkbox" name="equipment" value="1" @if($test->equipment==1) checked @endif ></td>
                    <td><input type="checkbox" name="arrived" value="1" @if($test->arrived==1) checked @endif></td>
                    <td><input type="checkbox" name="scheduling" value="1" disabled @if($test->scheduling==1) checked
                        @endif disabled></td>
                    {{--Machine--}}
                    <td>@if($test->scheduling==0 &&$test->machine==null)
                        <a href="testscheduling/{{$test->id}}/machine" class="btn btn-info" style="padding-bottom:5%">Select
                            a Machine</a>
                        @elseif($test->scheduling==1&&$test->machine==null)
                        <a href="testscheduling/{{$test->id}}/machine" class="btn btn-danger" style="padding-bottom:5%">Machine
                            not Selected</a>
                        @elseif($test->machine!=null)
                        <a href="testscheduling/{{$test->id}}/machine" class="btn btn-success" style="padding-bottom:5%">{{$test->machine}}</a>
                        @endif</td>

                    {{--Dates--}}
                    {{-- <form action="/tests/{{ $test->id }}/edit" method="post">
                        {{ csrf_field() }} --}}

                        <td>

                            <div class="form-group text-center">
                                <input type="number" id="days" name="days" style="width:2cm" value="{{$test->days}}">
                            </div>

                        </td>
                        <td>
                            <label style="padding-left:5%"> <input type="Date" name="est_start_date" value="{{$test->est_start_date}}"
                                    style="width:11.5em;"></label></td>
                        <td><label> <input type="Date" name="est_end_date" value="{{$test->est_end_date}}" style="width:11.5em;"></label></td>
                        <td> <label style="padding-left:6.2%"><input type="Date" name="actual_start_date" value="{{$test->actual_start_date}}"
                                    style="width:11.5em;"></label></td>
                        <td><label> <input type="Date" name="actual_end_date" value="{{$test->actual_end_date}}" style="width:11.5em"></label></td>
                        <td><label> <input type="Date" name="equipment_start_date" value="{{$test->equipment_start_date}}"
                                    style="width:11.5em"></label></td>
                        <td><label> <input type="Date" name="equipment_end_date" value="{{$test->equipment_end_date}}"
                                    style="width:11.5em"></label></td>
                        <td><label style="padding-left:1.5%"> <input type="Date" name="sample_start_date" value="{{$test->sample_start_date}}"
                                    style="width:11.5em"></label></td>
                        <td><label style="padding-left:1.5%"> <input type="Date" name="sample_end_date" value="{{$test->sample_end_date}}"
                                    style="width:11.5em"></label></td>
                        {{-- <td><label style="padding-left:7%"> <input type="Date" name="pausedate" value="{{$test->pausedate}}"
                                    style="width:11.5em"></label></td> --}}
                        <td><label style="padding-left:5.5%"> <input type="Date" name="canceldate" value="{{$test->canceldate}}"
                                    style="width:11.5em"></label></td>



                        <td><input type="submit" name="{{$test->id}}" class='btn btn-primary' value="Update"></td>
                    </form>

            </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection