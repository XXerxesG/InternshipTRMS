@extends ('layouts.master')

@section ('content')
<div class="container">
{{-- <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content"> --}}
			<div class="modal-header">
				<h1 class="modal-title">Change Test Status</h1>
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
							<label><input type="radio" name="status" value="Accepted">Accepted</label>
						</div>
					<div class="radio">
						<label><input type="radio" name="status" value="In Progress">In progress</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="status" value="Paused">Paused</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="status" value="Cancelled">Cancelled</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="status" value="Completed">Completed</label>
					</div>
					{{-- <div class="radio">
						<label><input type="radio" name="status" value="Sample repair">Sample repair</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="status" value="Test report generation">Test report generation</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="status" value="Test completed">Test completed</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="status" value="Test cancelled">Test cancelled</label>
					</div> --}}
					
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