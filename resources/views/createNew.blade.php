@extends ('layouts.master')

@section ('content')

<div class="container" id="root">
	<h1> Create new test template </h1>
	@if (Auth::check() && Auth::user()->type=="admin")
	<div><p id="addTest"><a href="#" onclick="showForm4()">Add new template</a></p></div>
	<script>
		function showForm4(){
			if(!$('#form4').is(":visible")){
				$('#form4').show();
			}else{
				$('#form4').hide();
			}
		}
	</script>
	<form id="form4" method="POST" action="/newcreate" style="display: none; border: 1px solid #ddd; padding:1.5em" class="col-md-7">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="">Test Name:</label>
			<input type="text" name="test_name" placeholder="..." class="form-control">
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="Add Template">
		</div>
	</form>
	</div>
	@endif
</div>

@endsection