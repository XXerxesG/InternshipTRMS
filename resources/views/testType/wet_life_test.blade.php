@extends ('layouts.master')

@section ('content')

<div class="container" id="root">
	<h1>{{ $test->testType['description'] }}</h1>
	<h3>Test progress: <a href="#" onclick="change_status()">{{ $test->status }}</a></h3>
	{{-- @include('layouts.test.change_status') --}}
	@include('layouts.test.progress_bar')

		<table class="table table-bordered">
			<tr>
				<td>Project Name: </td>
				<td><b>{{ $test->ticket->project['project_name'] }}</b></td>
				<td>Make / Model: </td>
				<td><b>{{ $test->modelcode['code'] }}</b></td>
			</tr>
			<tr>
				<td>Test ID: </td>
				<td><b>{{ $test->id }}</b></td>
				<td>Report By: </td>
				<td><b>{{ $test->ticket->user['name'] }}</b></td>
			</tr>
			<tr>
				<td>Est Start Date: </td>
				<td><b>{{ $test->est_start_date }}</b></td>
				<td>Est End Date: </td>
				<td><b>{{ $test->est_end_date }}</b></td>
			</tr>
			<tr>
				<td>Document Number: </td>
				<td>{{ $datas[0]->doc_num }}</td>
				<td>Power Rating: </td>
				<td>{{ $datas[0]->power_rating }}</td>
			</tr>
			<tr>
				<td>Test Purpose: </td>
				<td>{{ $datas[0]->test_purpose }}</td>
				<td>Rev Number:</td>
				<td>{{ $datas[0]->rev_num }}</td>
			</tr>
		</table>


	<div id="section1">
		<h4><b>I. Sample Description</b></h4>
		<p>Not available for wet-life-test</p>
	</div>

	<div id="section2">
		<h4><b>II. Test Requirement</b></h4>
		<p>Not available for wet-life-test</p>
	</div>

	<div id="section3">
		<h4><b>III. Criteria for Acceptance</b></h4>
		<p>Protocal not available in .csv now</p>
	</div>

	<div id="section4">
		<h4><b>IV. Test Result</b></h4>


			{{-- Declare variable, put 2 sample in 1 row. (for later printing purpose) --}}
			@php 
				$count = count($datas);
			@endphp 

			<div class="table-responsive" id="vuetable">
				<table class="table table-bordered" v-for="index in {{ $count }}">
					<tr>
						<td colspan="8" style="text-align: center">Sample <b>#@{{ index }}</b></td>
					</tr>
					<tr>
						<th>#</th>
						<td>0hrs</td>
						<td>100hrs</td>
						<td>200hrs</td>
						<td>300hrs</td>
						<td>600hrs</td>
						<td>900hrs</td>
						<td>1200hrs</td>
					</tr>
					<tr is="my-row" rowtitle="Actual Hours Tested" prefix="AHT" :index="index"></tr>
					<tr is="my-row" rowtitle="Date of Checking" prefix="DOC" :index="index"></tr>
					<tr is="my-row" rowtitle="Temperature Recording Station" prefix="TRS" :index="index"></tr>
					<tr><td colspan="8" class="text-center"><b>Functional Check</b></td></tr>
					<tr is="my-row" rowtitle="1. High Voltage" prefix="f1" :index="index"></tr>
					<tr is="my-row" rowtitle="2. Earth Resistance/Continuity" prefix="f2" :index="index"></tr>
					<tr is="my-row" rowtitle="3. Leakage Current at rated voltage" prefix="f3" :index="index"></tr>
					<tr><td colspan="8">4. Power up</td></tr>
					<tr is="my-row" rowtitle="(life-earth)" prefix="f4a" :index="index"></tr>
					<tr is="my-row" rowtitle="(neutral-earth)" prefix="f4b" :index="index"></tr>
					<tr><td colspan="8">5. Power up</td></tr>
					<tr is="my-row" rowtitle="(life-earth)" prefix="f5a" :index="index"></tr>
					<tr is="my-row" rowtitle="(neutral-earth)" prefix="f5b" :index="index"></tr>
				</table>
			</div>


	</div>

	<script>
	Vue.component('my-row', {
		props: ['rowtitle','prefix','index'],
		template: `
			<tr>
				<td>@{{ rowtitle }}</td>
				<td>@{{ data_0 }}</td>
				<td>@{{ data_1 }}</td>
				<td>@{{ data_2 }}</td>
				<td>@{{ data_3 }}</td>
				<td>@{{ data_6 }}</td>
				<td>@{{ data_9 }}</td>
				<td>@{{ data_12 }}</td>
			</tr>
		`,
		data(){
			return{
				prefix_0: 'tto['+this.index+']['+this.prefix+'_0]',
				prefix_100: 'tto['+this.index+']['+this.prefix+'_100]',
				prefix_200: 'tto['+this.index+']['+this.prefix+'_200]',
				prefix_300: 'tto['+this.index+']['+this.prefix+'_300]',
				prefix_600: 'tto['+this.index+']['+this.prefix+'_600]',
				prefix_900: 'tto['+this.index+']['+this.prefix+'_900]',
				prefix_1200: 'tto['+this.index+']['+this.prefix+'_1200]',
				data_0: datas[this.index-1][this.prefix+'_0'],
				data_1: datas[this.index-1][this.prefix+'_100'],
				data_2: datas[this.index-1][this.prefix+'_200'],
				data_3: datas[this.index-1][this.prefix+'_300'],
				data_6: datas[this.index-1][this.prefix+'_600'],
				data_9: datas[this.index-1][this.prefix+'_900'],
				data_12: datas[this.index-1][this.prefix+'_1200']
			}
		}
	});
		
	var datas = {!! $datas !!};

	var vm = new Vue({
		el: '#vuetable'	
	});
	</script>

	<div id="section5">
		<h4><b>V. Photos</b></h4>
		@include('layouts.test.photos')
	</div>

	<div id="section6">
		<h4><b>VI. Comments</b></h4>
		@include('layouts.test.comments')
	</div>

</div>

@endsection