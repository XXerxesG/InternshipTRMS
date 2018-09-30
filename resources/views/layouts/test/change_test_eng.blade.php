@extends ('layouts.master')

@section ('content')
<div class="container">
{{-- <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content"> --}}
			<div class="modal-header">
				<h1 class="modal-title">Change Test eng</h1>
			</div>
			<div class="modal-body">
				<form method="POST" action="/tests/{{ $test->id }}">
					{{ csrf_field() }}
					{{ method_field('patch') }}
					{{-- <div class="radio">
						<label><input type="radio" name="status" value="Pending approval">Pending approval</label>
					</div> --}}
					<p1><strong>For Test ID:{{ $test->id }}</strong></p1>
					<div class="radio">
						<label><input type="radio" name="test_eng" value="Jack">Jack</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="test_eng" value="Kwee lan">Kwee lan</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="test_eng" value="Sieck">Sieck</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="test_eng" value="Yate">Yate</label>
					</div>
					
					<div class="text-right">
						<a href="/mastertable" class="btn btn-primary" data-dismiss="modal">Close</a>
						<button type="submit" class="btn btn-success">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

<script>
	function change_status() {

		$('#mymodal').modal('show');

	}
</script>