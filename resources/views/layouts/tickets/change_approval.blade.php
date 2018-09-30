<div class="modal fade" id="modal{{ $test->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Change Approval</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="/tests/{{ $test->id }}">
					{{ csrf_field() }}
					{{ method_field('patch') }}
					<div class="radio">
						<label style="color: green; font-weight: bold"><input type="radio" name="approval" value="1">Approved</label>
					</div>
					<div class="radio">
						<label style="color: red; font-weight: bold"><input type="radio" name="approval" value="0">Rejected</label>
					</div>
					<div class="radio">
						<label style="color: orange; font-weight: bold"><input type="radio" name="approval" value="">Pending</label>
					</div>
					<div class="text-right">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	function change_approval(testID) {
		$('#modal'+testID).modal('show');
	}
</script>