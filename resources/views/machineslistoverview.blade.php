@extends ('layouts.master')

@section ('content')

<div class="container">
                        
                        <td>
                            <h1> Machines Down Time List</h1>
                                <table class="table sortable">
                                    
                                        <tr>  
                                            <td><strong> Id</strong> </td>
                                            <td><strong> Machines </strong></td>
                                            <td><strong> From:</strong></td>
                                            <td><strong>To:</strong> </td> 
                                            <td><strong>Reason:</strong> </td>
                                            <td><strong>Remark(if any):</strong> </td> 
                                            <td><strong>Submitted by</strong> </td> 
                                            <td><strong>Total Down time (Hrs:mins)</strong></td> 
                                        </tr>
                                        
                              
                               @foreach($downtimeforms as $downtimeform)
                                <tr>
                                            <td>{{$downtimeform->id}}</td>
                                            <td>{{$downtimeform->machinesname}}</td>
                                            <td>{{$downtimeform->fromdate}}</td>
                                            <td>{{$downtimeform->todate}}</td>
                                            <td>{{$downtimeform->downreason}}</td>
                                            <td>{{$downtimeform->downremark}}</td>
                                            <td>{{$downtimeform->user['name']}}</td>
                                            <td>{{$downtimeform->down_time}}</td>
                                            
                                         </tr> 
                                    @endforeach    
                                       
                                
                                </table>
                                <script src="{{ asset('js\sorttable.js') }}"></script>
                        </td>
    

@endsection