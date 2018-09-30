@extends ('layouts.master')

@section ('content')

<div class="container">
    @if (Auth::check() && Auth::user()->type=="admin")

		@if(Session::has('successMsg'))
    <div class="alert alert-success"> {{ Session::get('successMsg') }}</div>
  @endif
        
		<h2> Test duration CVS Upload</h2>
        
        
        <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="getIndex" class="form-horizontal" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" name="import_file" accept=".csv"/><br>
        <button class="btn btn-primary">Import File</button>
    </form>
     <br>
     <br>
     <br>   
   {{--   <h2> Test Upload</h2>
    <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="gettest" class="form-horizontal" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" name="import_file" accept=".csv"/><br>
        <button class="btn btn-primary">Import File</button>
    </form> --}}

  {{-- <form action="button" class="form-horizontal" method="post" >
        {{ csrf_field() }}
        <input type="text" name="addrow" />
        <button class="btn btn-primary">add row</button>
    </form> --}}


@else
<h2><div style="color: red"> Please Contact admin if editing is required</div></h2>
@endif
</div>
@endsection