@extends ('layouts.master')

@section ('content')

<div class="container">
	<div class="col-md-8">
		<h1>Step 1</h1>

		<form method="POST" action="/tickets/create/step1">
			{{ csrf_field() }}
			
			<!-- Radio button  -->
			<div class="form-group">
				<h3>Select project based on</h3>
				<label class="radio-inline">
					<input type="radio" name="select_project_from" value="from_project_name">Project Name
				</label>
				<label class="radio-inline">
					<input type="radio" name="select_project_from" value="from_product_name">Product Name
				</label>
			</div>
			<!-- End of radio button -->

			<div id="project_name-el" style="display: none">
				<div class="form-group">
					<label for="project_name" class="col-3 col-form-label"><b>Project Name:</b></label>
					<div class="col-7">
						<select class="form-control" id="project_name" name="project_name">
							<option value="" selected disabled>Click to select</option>
							@foreach ($projects as $project)
							<option value='{{ $project->project_name }}'>{{ $project->project_name }}</option>
							@endforeach
						</select>
					</div>
					<small class="form-text col-3">(<span style="color: red">*</span> For new project, contact web admin for updating project info.)</small>
				</div>
			</div>

			<div id="product_name-el" style="display: none">
				<div class="form-group">
					<label for="product_name" class="col-3 col-form-label"><b>Product Name:</b></label>
					<div class="col-7">
						<select class="form-control" id="product_name" name="product_name">
							<option value="" selected disabled>Click to select</option>
							@foreach ($projects as $project)
							<option value='{{ $project->product_name }}'>{{ $project->product_name }}</option>
							@endforeach
						</select>
					</div>
					<small class="form-text col-3">(<span style="color: red">*</span> For new project, contact web admin for updating project info.)</small>
				</div>
			</div>

			<div id="therest" class="form-group"></div>

			<hr>
			<div class="form-group" id="project_stage-el" style="display: none">
				<h4>Project Stage<span style="color: red">*</span>: </b></h4>
				<label class="radio-inline">
					<input type="radio" name="project_stage" value="TFC">TFC
				</label>
				<label class="radio-inline">
					<input type="radio" name="project_stage" value="IPD">IPD
				</label>
				<label class="radio-inline">
					<input type="radio" name="project_stage" value="LCM">LCM
				</label>
				<label class="radio-inline">
					<input type="radio" name="project_stage" value="others">Others
				</label>
			</div>
			
			<div class="input-group col-md-5" id="project_stage_other" style="display: none">
				<span class="input-group-addon" id="basic-addon1">Please specify:<span style="color: red">*</span></span>
				<input type="text" class="form-control" aria-describedby="basic-addon1" name="project_stage_other">
			</div>

			<script type="text/javascript">
				$(document).ready(function(){
					$('[name=select_project_from]').on("change", function(){
						$('#therest').empty();
						$value = $(this).val();
						if($value == "from_project_name"){
							$('[name="project_name"]').prop('selectedIndex',0);
							$('#gridRadios1').css('color', '#292b2c');
							$('#gridRadios2').css('color', '#dddddd');
							$('#product_name-el').hide();
							$('#project_name-el').show();
						}else if($value == "from_product_name"){
							$('[name="product_name"]').prop('selectedIndex',0);
							$('#gridRadios2').css("color", "#292b2c");
							$('#gridRadios1').css("color", "#dddddd");
							$('#project_name-el').hide();
							$('#product_name-el').show();
						}
					});
				})
			</script>


			<script type="text/javascript">
				$('[name=project_name]').on("change", function(){
					$('#therest').empty();
					var temp = $(this).val();
					var indicator;
					var models;
					@foreach ($projects as $project)
					if(temp == "{{ $project->project_name }}")
					{
						indicator = {!! $project !!};
						models = {!! $project->modelcodes->pluck('code') !!};
					};
					@endforeach
					$('#therest').append("<div class='row'><p class='col-md-3'><b>Product Name:</b></p><p class='col-md-9'>"+indicator['product_name']+"</p></div>");
					$('#therest').append("<div class='row'><p class='col-md-3'><b>Project Manager:</b></p><p class='col-md-9'>"+indicator['project_manager']+"</p></div>");
					$('#therest').append("<div class='row'><p class='col-md-3'><b>Quality Project Leader:</b></p><p class='col-md-9'>"+indicator['quality_project_leader']+"</p></div>");
					$('#therest').append("<div class='row'><p class='col-md-3'><b>Model:</b></p><p class='col-md-9'>"+models+"</p></div>");
					$('#therest').append("<div class='row'><p class='col-md-3'><b>Charging Code:</b></p><p class='col-md-9'>"+indicator['charging_code']+"</p></div>");
					$('#project_stage-el').show();
				})
				
				$('[name=product_name]').on("change", function(){
					$('#therest').empty();
					var temp = $(this).val();
					var indicator;
					var models;
					@foreach ($projects as $project)
					if(temp == "{{ $project->product_name }}")
					{
						indicator = {!! $project !!};
						models = {!! $project->modelcodes->pluck('code') !!};
					}
					@endforeach
					$('#therest').append("<div class='row'><p class='col-md-3'><b>Project Name:</b></p><p class='col-md-7'>"+indicator['project_name']+"</p></div>");
					$('#therest').append("<div class='row'><p class='col-md-3'><b>Project Manager:</b></p><p class='col-md-7'>"+indicator['project_manager']+"</p></div>");
					$('#therest').append("<div class='row'><p class='col-md-3'><b>Quality Project Leader:</b></p><p class='col-md-7'>"+indicator['quality_project_leader']+"</p></div>");
					$('#therest').append("<div class='row'><p class='col-md-3'><b>Model:</b></p><p class='col-md-7'>"+models+"</p></div>");
					$('#therest').append("<div class='row'><p class='col-md-3'><b>Charging Code:</b></p><p class='col-md-7'>"+indicator['charging_code']+"</p></div>");
					$('#project_stage-el').show();
				})

				$('[name=project_stage]').on("change", function(){
					if($(this).val() == 'others'){
						$('#project_stage_other').show();
						$('[name=project_stage_other]').attr('required', true);
					}else{
						$('#project_stage_other').hide();
						$('[name=project_stage_other]').attr('required', false);
					}
				})

			</script>

			<hr>

			<div class="form-group">
				<input type="submit" class='btn btn-primary' value="Next">
			</div>

			@include ('layouts.errors')

			<hr>
			
		</form>

		
	</div>
</div>

@endsection