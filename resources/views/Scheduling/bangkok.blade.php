@extends('layouts.master') @section ('content')
<h1> Bangkok Rack</h1>

{{-- {{$now = \Carbon\Carbon::now()}} --}}
{{-- <div class="column">
    <div class="row"> --}}
        <table class="table table-bordered table-hover" style="float:left;width:50%;table-layout: fixed">
            <tr>
               
                <th style="width:7%">ID</th>
                <th style="width:7%"> Ticket id</th>
                <th style="width:3%">Qty</th>
                <th style="width:34%">Description</th>
                <th style="width:26%">Project Name</th> 
                {{-- <th> Year</th>
                <th>Start</th>
                <th>End</th> --}}
            </tr>
            @foreach($tests as $test)
            <tr>
                
                <td style="width:10%;" >{{$test->id}}</td>
                <td style="width:10%;"><a href="/tickets/{{$test->ticket_id}}">{{$test->ticket_id}}</a></td>
                <td style="width:7%">{{$test->size}}</td>
                <td style="width:20%">{{$test->testType['description']}}</td>
                <td style="width:17%">{{$test->ticket['project']['project_name']}}</td>
                {{-- <th style="padding-bottom:0.6%">{{\Carbon\Carbon::parse($test->est_start_date)->format('y')}}</th>
                <th style="padding-bottom:0.6%">{{$test->start_week}}</th>
                <th style="padding-bottom:0.6%">{{$test->end_week}}</th> --}}
            </tr>
            @endforeach
        </table>
        <?php $thisyear=date('y')?>
        <div style="overflow-x:auto;">
            <table class="table table-bordered table-hover table-responsive-md">
                @for($i=1;$i<=52;$i++) <th style="padding-bottom:0.1%">{{ $thisyear-1}}{{$i}}</th>{{--Print Last Year--}}

                    @endfor

                    @for($i=1;$i<=52;$i++) <th>{{ $thisyear}}{{$i}}</th>{{--Print Current Year--}}

                        @endfor
                        @for($i=1;$i<=52;$i++) <th>{{ $thisyear+1}}{{$i}}</th>{{--Print Next Year--}}

                            @endfor

                            @foreach($tests as $test)
                            {{-- {{\Carbon\Carbon::parse($test->est_start_date)->format('y')}} --}}
                            <tr>
                            @if($test->machine=='Bangkok') {{--Not required as already passing values which have only Bangkok in their Machine field. But just for extra precision and accuracy.--}}
                              
                                {{-- For the past year --}}
                                @for($i=1;$i<=52;$i++) 
                                    @if($i>=$test->start_week&&$i<=$test->end_week &&$thisyear>\Carbon\Carbon::parse($test->est_start_date)->format('y'))
                                        <td bgcolor=" green" ><font color="white">{{$test->size}}</font></td>
                                        @elseif($i>=$test->start_week&&$test->end_week<$test->start_week && $thisyear>\Carbon\Carbon::parse($test->est_start_date)->format('y'))
                                        <td bgcolor=" green" ><font color="white">{{$test->size}}</font></td>
                                          @if($i==52)
                                             @for($j=1;$j<=$test->end_week;$j++)
                                             <td bgcolor=" green"><font color="white">{{$test->size}}</font></td>
                                             @endfor
                                   
                                          @endif
                                    @else
                                        <td>Empty</td>
                                    @endif

                                @endfor

                              
                                {{--For this year--}}
                               
                                @for($i=1;$i<=52;$i++)
                                     @if($i>=$test->start_week&&$i<=$test->end_week && $thisyear==\Carbon\Carbon::parse($test->est_start_date)->format('y'))
                                       <td bgcolor=" green" ><font color="white">{{$test->size}}</font></td>
                                       @elseif($i>=$test->start_week&&$test->end_week<$test->start_week && $thisyear==\Carbon\Carbon::parse($test->est_start_date)->format('y'))
                                       <td bgcolor=" green" ><font color="white">{{$test->size}}</font></td>
                                         @if($i==52)
                                            @for($j=1;$j<=$test->end_week;$j++)
                                            <td bgcolor=" green" ><font color="white">{{$test->size}}</font></td>
                                            @endfor
                                           
                                         @endif
                                       @else
                                        <td >Empty</td>
                                    @endif
                                @endfor
                                

                                {{--For next year--}}
                                @for($i=1;$i<=52;$i++) 
                                    @if($i>=$test->start_week&&$i<=$test->end_week && $thisyear<\Carbon\Carbon::parse($test->est_start_date)->format('y'))
                                        <td bgcolor=" green" ><font color="white">{{$test->size}}</font></td>
                                        @elseif($i>=$test->start_week&&$test->end_week<$test->start_week && $thisyear<\Carbon\Carbon::parse($test->est_start_date)->format('y'))
                                        <td bgcolor=" green"><font color="white">{{$test->size}}</font></td>
                                          @if($i==52)
                                             @for($j=1;$j<=$test->end_week;$j++)
                                             <td bgcolor=" green" ><font color="white">{{$test->size}}</font></td>
                                             @endfor
                                           
                                          @endif
                                    @else
                                        <td>Empty</td>
                                    @endif
                                @endfor
                                
                            
            @endif{{-- end of if machine is bangkok--}}
                            </tr>
        @endforeach
    </table>
</div>
@endsection