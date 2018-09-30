@extends ('layouts.master')

@section ('content')

<div class="container">
<h1>Step 2</h1>

<form method="POST" action="/tickets/create/step2">
	{{ csrf_field() }}

	<div id="tests" class="panel-group">
		<!-- 1 card is 1 test -->
		<div class="panel panel-default" id="test1card">
			<div class="panel-heading">
				<h5 class="panel-title"><a data-toggle="collapse" href="#test1" data-parent="#tests"  aria-expanded="true" aria-controls="test[1]">Test1 &#9662</a></h5>
			</div><!-- End of card header -->

			<div id="test1" class="panel-collapse collapse in">
				<div class="panel-body">
					<div class="form-group fg1">
						<label>Test Title<span style="color:red"> *</span>:</label>
						<select class="form-control" id="tests[1][title]" name="tests[1][title]" style="width: 40%">
							<option value="" selected disabled>Select type of test</option>
							@foreach ($testTypes as $testType)
							<option value='{{ $testType->description }}'>{{ $testType->description }}</option>
							@endforeach
						</select>
					</div><!-- End of form-group -->
				</div><!-- End of card content (in order to have some margin with tabpanel)-->
			</div><!-- End of test panel -->
		</div><!-- End of 1 card / 1 test -->
	</div><!-- End of the tests section -->

	<a href="#" id="addtest">Add test</a><br>
	<a href="#" id="removetest">Remove test</a><br>

<script type="text/javascript">
$(document).ready(function(){
	$('#tests').on('change', '[name*=standard]', function(){
		@foreach ($modelcodes as $modelcode)
		$(this).parent().parent().find('[name*=model]').append("<option value='{{ $modelcode->code }}'>{{ $modelcode->code }}</option>");
		@endforeach
	});
})
</script>

	<div class="form-group">
		<input type="submit" class="btn btn-primary" value="Next">
	</div>

	@include ('layouts.errors')

</form>

</div> <!-- end of container -->

<!-- below is the step2.js javascript -->
<script type="text/javascript">

$(document).ready(function() {
	//Upon changing test name, pop up standard option
	// $('#tests').on('change', '[name*=title]', function(){
	// 	var id = $(this).parent().parent().parent().attr('id');
	// 	id = id.replace(/[^0-9]/g, '');
	// 	$(this).parent().siblings().remove();
	// 	$(this).parent().parent().append("<div class='form-group'><label>Test Standard <span style='color:red'>*</span>:</label><select class='form-control' name='tests["+id+"][standard]'><option value='' disabled selected>Click to select</option></select><p class='col-3 moreinfo' style='margin-bottom:0;font-size:1em'></p></div>");

	// 	var temp = $(this);
	// 	$.ajax({
	// 		type:"get",
	// 		url:"/tickets/create/step2standards",
	// 		data: {title: $(this).val()},
	// 		success: function(jsondata){
	// 			console.log(jsondata);
	// 			$.each(jsondata	, function(){
	// 				temp.parent().parent().find('[name*=standard]').append("<option value='"+this+"'>"+this+"</option>");
	// 			});
	// 		}
	// 	});
	// });//End of poping up test standard

	//Upon changing test standard, populate the rest funny stuffs
	$('#tests').on('change', '[name*=title]', function(){
		var temp = $(this).parent();
		temp.siblings().not('.fg1').remove();
		var id = $(this).parent().parent().parent().attr('id');
		id = id.replace(/[^0-9]/g, '');

		// $.ajax({
		// 	type:"get",
		// 	url:"/request-submission/step2aq",
		// 	data: {standard: $(this).val()},
		// 	success: function(jsondata){
		// 		temp.children('.moreinfo').html(
		// 			'<b>Test Description: </b><br>' + jsondata['description1'] + '<br>' + jsondata['description2'] + '<br><b>Target: </b><br>' + jsondata['target'] + '<br><b>Recommended Sample Size: </b><br>' + jsondata['recommended_min_size'] + '<br><b>Acceptance Criteria:</b><br>' + jsondata['acceptance_criteria']
		// 		);
		// 	}
		// })

		// Append dropdown list for models
		temp.parent().append("<hr><div class='form-group'><label>Models <span style='color:red'>*</span>:</label><select class='form-control' name='tests["+id+"][model]'><option value='' disabled selected>Select model</option></select></div>");
		
		@foreach ($modelcodes as $modelcode)
		$(this).parent().parent().find('[name*=model]').append("<option value='{{ $modelcode->code }}'>{{ $modelcode->code }}</option>");
		@endforeach


		// Append dropdown list for sample size
		temp.parent().append("<div class='form-group'><label>Sample Size <span style='color:red'>*</span>:</label><select class='form-control' name='tests["+id+"][size]'><option value='' disabled selected>Select sample size</option></select></div>");
		temp.parent().find("[name*=size]").append("<option value='3'>3</option>");
		temp.parent().find("[name*=size]").append("<option value='6'>6</option>");
		temp.parent().find("[name*=size]").append("<option value='9'>9</option>");
		temp.parent().find("[name*=size]").append("<option value='12'>12</option>");

		// Append textarea for additional information
		temp.parent().append("<div class='form-group'><label>Additional Instruction:</label><textarea class='form-control' name='tests["+id+"][ins]' placeholder='Enter additional instruction here (if any)' rows='4'></textarea></div>");
	});

	//Add test button
	$('#addtest').on("click", function(){
		$('[id*=card]').find('a').attr({"aria-expanded":"false",class:"collapsed"});
		$('[id*=card]').find('.collapse').attr({"aria-expanded":"false",class:"panel-collapse collapse","style":"height:0px"});

		var temp = $('#test1card').clone();
		var last = $('#tests').children(/test/).last().attr('id');
		var id = last.replace('test', '');
		id = parseInt(id)+1;
		temp.attr('id' , "test"+id.toString()+"card");
		temp.children('.collapse').attr('id' , "test"+id.toString());
		temp.find('a').html("Test"+id.toString()+" &#9662");
		temp.find('a').attr('href', '#test'+id.toString());
		temp.find('.form-group').not('.fg1').remove();
		temp.find('.form-control').attr('id', 'tests['+id+'][title]');
		temp.find('.form-control').attr('name', 'tests['+id+'][title]');
		temp.find('p').remove();
		temp.find('a').attr({"aria-expanded":"true",class:""});
		temp.find('.collapse').attr({"aria-expanded":"true", "style":""});
		temp.find('.collapse').addClass("in");
		$('#tests').append(temp);
	});//End add test button

	//Remove test button
	$('#removetest').on("click", function(){
		var length = $('#tests').children().length;

		if(length>1){
			$('#tests').children().last().remove();
		}
	});//Remove test button

});


</script>


@endsection