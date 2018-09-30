@extends ('layouts.master')

@section ('content')
<div class="container">
<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		delete?	
		</div>
	</div>
</div>
</div>
@endsection

<script>
	function change_delete() {

		$('#mymodal').modal('show');

	}
</script>