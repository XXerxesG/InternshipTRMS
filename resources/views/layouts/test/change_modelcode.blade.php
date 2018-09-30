<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Change Test Status</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="">
					{{ csrf_field() }}
					{{ method_field('patch') }}
					
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
	function change_modelcode() {
		$('#mymodal').modal('show');
	}
</script>