@extends ('layouts.master')

@section ('content')

<div class="container">
<h1>Step 3</h1>
	
<form method="POST" action="/tickets/create/step3">
	{{ csrf_field() }}

	<div class="form-group">
		<label for="est_arr_date" class="">Est. sample arrival date:</label>
		<div class="">
			<input class="form-control" type="date" id="est_arr_date" name="est_arr_date">
		</div>
	</div>

	<div class="form-group">
		<p class="col-3">Week: </p><p id="week_num" class=""></p>
		<input name="week_num" type="number" style="display: none">
	</div>


	<div class="form-group">
		<input type="submit" class="btn btn-primary" value="Next">
	</div>

	@include ('layouts.errors')

</form>

</div>

<script type="text/javascript">
	
$(document).ready(function(){
	// Auto generate week number according to PHILIPS CALENDER
	$("[name=est_arr_date]").on("change", function(){
		var date = new Date(document.getElementById("est_arr_date").value);
		if(date.getDate()>=0 && date.getMonth()>=0 && date.getFullYear()>=2000){
			var year = date.getFullYear();
			//var date is the user-selected date. While var date0 is for the purpose of finding first monday.
			var date0 = new Date("01/01/"+year);
			while(date0.getDay()!=1){
				date0.setDate(date0.getDate()+1);
			}
			var week_of_year;
			if(date < date0){
				year--;
				week_of_year = "52";
			}else{
				week_of_year = parseInt((Math.abs(date0-date) / 86400000) / 7)+1;
				if(week_of_year<10){
					week_of_year = "0"+week_of_year.toString();
				}else{
					week_of_year = week_of_year.toString();
				}
			}
			var week = parseInt(year.toString().slice(2).concat(week_of_year));
			$("#week_num").html(week);
			$("[name=week_num]").val(week);
		}else{
			$("#week_num").empty();
			$("[name=week_num]").val('');
		}
	});
})

</script>

@endsection