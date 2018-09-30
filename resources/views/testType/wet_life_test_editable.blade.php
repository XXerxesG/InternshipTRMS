@extends ('layouts.master')

@section ('content')

<div class="container" id="root">
	<h1>{{ $test->testType['description'] }}</h1>
{{-- 	<h3>Test progress: <a href="#" onclick="change_status()">{{ $test->status }}</a></h3> --}}
	
	@include('layouts.test.progress_bar')

	<form action="/testtype/wetlifes" method="POST">
		{{ method_field('patch') }}
		{{ csrf_field() }}

		<input style="display:none" type="number" name="test_id" value="{{ $test->id }}">
		<input style="display:none" type="text" name="title" value="{{ $title }}">

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
				<td><input type="text" name="doc_num" value="{{ $datas[0]->doc_num }}"></td>
				<td>Power Rating: </td>
				<td><b>{{ $test->modelcode['powerrating'] }} Watt</b></td>
			</tr>
			<tr>
				<td>Test Purpose: </td>
				<td><input type="text" name="test_purpose" value="{{ $datas[0]->test_purpose }}"></td>
				<td>Rev Number:</td>
				<td><input type="text" name="rev_num" value="{{ $datas[0]->rev_num }}"></td>
			</tr>
		</table>


		<div class="form-group text-center">
			<input type="submit" class='btn btn-primary' value="Update">
		</div>
	</form>
	<h3 style="color:red;"> ** Please input the Voltage, frequency, power rating in order to view the Table**</h3>
	<br>
	
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

		<style>
			input[type="text"]{
				width: 100px;
				margin: 0;
				padding: 0;
			}
		</style>
		<form action="/testtype/wetlife" method="POST" id="vueform">
			{{ method_field('patch') }}
			{{ csrf_field() }}
			
			<input style="display:none" type="number" name="test_id" value="{{ $test->id }}">
			<input style="display:none" type="text" name="title" value="{{ $title }}">

			{{-- Declare variable, put 2 sample in 1 row. (for later printing purpose) --}}
			@php 
				$count = count($datas);
			@endphp 
					
			<div class="table-responsive">
				<table class="table table-bordered"  v-for="index in {{ $count }}">
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
					<tr><td colspan="8">5. Power off</td></tr>
					<tr is="my-row" rowtitle="(life-earth)" prefix="f5a" :index="index"></tr>
					<tr is="my-row" rowtitle="(neutral-earth)" prefix="f5b" :index="index"></tr>

					{{-- i start off here --}}
					<tr><td colspan="8" class="text-center"><b>POWER @230V</b></td></tr>
					<tr is="my-row" rowtitle="6. (SYSTEM):W +5% / -10%" prefix="f6a" :index="index" result="{{$test->modelcode['powerrating']}}" minus="{{$test->modelcode['powerrating_ld']}}" plus="{{$test->modelcode['powerrating_hd']}}"></tr>
					<tr is="my-row" rowtitle="7. (BOILER):W +5% / -10%" prefix="f6b" :index="index"></tr>
					<tr is="my-row" rowtitle="8. (IRON):W +5% / -10%" prefix="f6c" :index="index"></tr>

					<tr><td colspan="8" class="text-center"><b>SOLEPLATE TEMPERATURE °C  AT 'MAX ' POSITION:</b></td></tr>
					<tr is="my-row" rowtitle="9. OVERSHOOT" prefix="f7a" :index="index"></tr>
					<tr is="my-row" rowtitle="10. MAX" prefix="f7b" :index="index"></tr>
					<tr is="my-row" rowtitle="11. MIN" prefix="f7c" :index="index"></tr>
					<tr is="my-row" rowtitle="12. SWITCH RANGE" prefix="f7d" :index="index"></tr>

					<tr><td colspan="8" class="text-center"><b>STEAM RATE  (CECED 5/15)</b></td></tr>
					<tr is="my-row" rowtitle="1st measurement" prefix="f8a" :index="index"></tr>
					<tr is="my-row" rowtitle="2nd measurement" prefix="f8b" :index="index"></tr>
					<tr is="my-row" rowtitle="3rd measurement" prefix="f8c" :index="index"></tr>
					<tr is="my-row" rowtitle="Average Steam Rate (g/min)" prefix="f8d" :index="index"></tr>

					<tr><td colspan="8" class="text-center"><b>Auto steaming check ( using ironing board)</b>
					<tr is="my-row" rowtitle="forward stroke" prefix="f9a" :index="index"></tr>
					<tr is="my-row" rowtitle="back ward stroke" prefix="f9b" :index="index"></tr>
					<tr is="my-row" rowtitle="Side strokes ( left and right )" prefix="f9c" :index="index"></tr>
					<tr is="my-row" rowtitle="lift ( upward and Downward)" prefix="f9d" :index="index"></tr>
					<tr is="my-row" rowtitle="Light ( on/ off) of auto steam " prefix="f9e" :index="index"></tr></td></tr>
					
				</table>
			</div>
			
			<div class="form-group text-center">
				<input type="submit" class='btn btn-primary' value="Update">
			</div>
				
		</form>

	</div>

	<script>
		
	Vue.component('my-row', {
		props: ['rowtitle','prefix','index','result', 'minus' , 'plus'],

		template: `
			<tr>
				<td>@{{ rowtitle }}</td>
				<td><input type="text" :name="prefix_0" :value="data_0" style="width:70%">
				<b v-if="color1" class="green">&nbsp@{{a}}</b>
				<b v-else class="red">&nbsp@{{a}}</b>
				</td>
				<td><input type="text" :name="prefix_100" :value="data_1" style="width:70%"><b v-if="color2" class="green">&nbsp@{{b}}</b>
				<b v-else class="red">&nbsp@{{b}}</b></td>
				<td><input type="text" :name="prefix_200" :value="data_2" style="width:70%"><b v-if="color3" class="green">&nbsp@{{c}}</b>
				<b v-else class="red">&nbsp@{{c}}</b></td>
				<td><input type="text" :name="prefix_300" :value="data_3" style="width:70%"><b v-if="color4" class="green">&nbsp@{{d}}</b>
				<b v-else class="red">&nbsp@{{d}}</b></td>
				<td><input type="text" :name="prefix_600" :value="data_6" style="width:70%"><b v-if="color5" class="green">&nbsp@{{e}}</b>
				<b v-else class="red">&nbsp@{{e}}</b></td>
				<td><input type="text" :name="prefix_900" :value="data_9" style="width:70%"><b v-if="color6" class="green">&nbsp@{{f}}</b>
				<b v-else class="red">&nbsp@{{f}}</b></td>
				<td><input type="text" :name="prefix_1200" :value="data_12" style="width:70%"><b v-if="color7" class="green">&nbsp@{{g}}</b>
				<b v-else class="red">&nbsp@{{g}}</b></td>
				
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
				data_12: datas[this.index-1][this.prefix+'_1200'],
				
				
			}
			
			
		},
		computed:{
			a: function(){
				var a =  datas[this.index-1][this.prefix+'_0'];
				var ld =  [''+this.result+'']-([''+this.result+''] /100 * [''+this.minus+''])  ;
				var hd =  [''+this.result+''] /100 * [''+this.plus+''] + {{$test->modelcode['powerrating']}};
				var d = "P" ;
				var e = "F";
				var f = ''+this.minus+''
				var g = ''+this.plus+''
				if(ld<a && a<hd ){
					
				return d
			}		
				else{
					
				return e 
				}
			},

			b: function(){
				var a =  datas[this.index-1][this.prefix+'_100'];
				var ld =  [''+this.result+'']-([''+this.result+''] /100 * [''+this.minus+''])  ;
				var hd =  [''+this.result+''] /100 * [''+this.plus+''] + {{$test->modelcode['powerrating']}};
				var d = "P" ;
				var e = "F";
				var f = ''+this.minus+''
				var g = ''+this.plus+''
				if(ld<a && a<hd ){
					
				return d
			}		
				else{
					
				return e 
				}
			},
			c: function(){
				var a =  datas[this.index-1][this.prefix+'_200'];
				var ld =  [''+this.result+'']-([''+this.result+''] /100 * [''+this.minus+''])  ;
				var hd =  [''+this.result+''] /100 * [''+this.plus+''] + {{$test->modelcode['powerrating']}};
				var d = "P" ;
				var e = "F";
				var f = ''+this.minus+''
				var g = ''+this.plus+''
				if(ld<a && a<hd ){
					
				return d
			}		
				else{
					
				return e 
				}
			},
			d: function(){
				var a =  datas[this.index-1][this.prefix+'_300'];
				var ld =  [''+this.result+'']-([''+this.result+''] /100 * [''+this.minus+''])  ;
				var hd =  [''+this.result+''] /100 * [''+this.plus+''] + {{$test->modelcode['powerrating']}};
				var d = "P" ;
				var e = "F";
				var f = ''+this.minus+''
				var g = ''+this.plus+''
				if(ld<a && a<hd ){
					
				return d
			}		
				else{
					
				return e 
				}
			},
			e: function(){
				var a =  datas[this.index-1][this.prefix+'_600'];
				var ld =  [''+this.result+'']-([''+this.result+''] /100 * [''+this.minus+''])  ;
				var hd =  [''+this.result+''] /100 * [''+this.plus+''] + {{$test->modelcode['powerrating']}};
				var d = "P" ;
				var e = "F";
				var f = ''+this.minus+''
				var g = ''+this.plus+''
				if(ld<a && a<hd ){
					
				return d
			}		
				else{
					
				return e 
				}
			},
			f: function(){
				var a =  datas[this.index-1][this.prefix+'_900'];
				var ld =  [''+this.result+'']-([''+this.result+''] /100 * [''+this.minus+''])  ;
				var hd =  [''+this.result+''] /100 * [''+this.plus+''] + {{$test->modelcode['powerrating']}};
				var d = "P" ;
				var e = "F";
				var f = ''+this.minus+''
				var g = ''+this.plus+''
				if(ld<a && a<hd ){
					
				return d
			}		
				else{
					
				return e 
				}
			},
			g: function(){
				var a =  datas[this.index-1][this.prefix+'_1200'];
				var ld =  [''+this.result+'']-([''+this.result+''] /100 * [''+this.minus+''])  ;
				var hd =  [''+this.result+''] /100 * [''+this.plus+''] + {{$test->modelcode['powerrating']}};
				var d = "P" ;
				var e = "F";
				var f = ''+this.minus+''
				var g = ''+this.plus+''
				if(ld<a && a<hd ){
					
				return d
			}		
				else{
					
				return e 
				}
			},

			 color1: function(){
			 	var a =  datas[this.index-1][this.prefix+'_0'];
				var ld =  [''+this.result+'']-([''+this.result+''] /100 * [''+this.minus+''])  ;
				var hd =  [''+this.result+''] /100 * [''+this.plus+''] + {{$test->modelcode['powerrating']}};
				var d = "P" ;
				var e = "F";
				var z = false;
				var y= true;

				
				if(ld<a && a<hd ){
					

				return y
			}		
				else{
					
				return z
				}
			},
			color2: function(){
			 	var a =  datas[this.index-1][this.prefix+'_100'];
				var ld =  [''+this.result+'']-([''+this.result+''] /100 * [''+this.minus+''])  ;
				var hd =  [''+this.result+''] /100 * [''+this.plus+''] + {{$test->modelcode['powerrating']}};
				var d = "P" ;
				var e = "F";
				var z = false;
				var y= true;

				
				if(ld<a && a<hd ){
					

				return y
			}		
				else{
					
				return z
				}
			},
			color3: function(){
			 	var a =  datas[this.index-1][this.prefix+'_200'];
				var ld =  [''+this.result+'']-([''+this.result+''] /100 * [''+this.minus+''])  ;
				var hd =  [''+this.result+''] /100 * [''+this.plus+''] + {{$test->modelcode['powerrating']}};
				var d = "P" ;
				var e = "F";
				var z = false;
				var y= true;

				
				if(ld<a && a<hd ){
					

				return y
			}		
				else{
					
				return z
				}
			},
			color4: function(){
			 	var a =  datas[this.index-1][this.prefix+'_300'];
				var ld =  [''+this.result+'']-([''+this.result+''] /100 * [''+this.minus+''])  ;
				var hd =  [''+this.result+''] /100 * [''+this.plus+''] + {{$test->modelcode['powerrating']}};
				var d = "P" ;
				var e = "F";
				var z = false;
				var y= true;

				
				if(ld<a && a<hd ){
					

				return y
			}		
				else{
					
				return z
				}
			},
			color5: function(){
			 	var a =  datas[this.index-1][this.prefix+'_600'];
				var ld =  [''+this.result+'']-([''+this.result+''] /100 * [''+this.minus+''])  ;
				var hd =  [''+this.result+''] /100 * [''+this.plus+''] + {{$test->modelcode['powerrating']}};
				var d = "P" ;
				var e = "F";
				var z = false;
				var y= true;

				
				if(ld<a && a<hd ){
					

				return y
			}		
				else{
					
				return z
				}
			},
			color6: function(){
			 	var a =  datas[this.index-1][this.prefix+'_900'];
				var ld =  [''+this.result+'']-([''+this.result+''] /100 * [''+this.minus+''])  ;
				var hd =  [''+this.result+''] /100 * [''+this.plus+''] + {{$test->modelcode['powerrating']}};
				var d = "P" ;
				var e = "F";
				var z = false;
				var y= true;

				
				if(ld<a && a<hd ){
					

				return y
			}		
				else{
					
				return z
				}
			},
			color7: function(){
			 	var a =  datas[this.index-1][this.prefix+'_1200'];
				var ld =  [''+this.result+'']-([''+this.result+''] /100 * [''+this.minus+''])  ;
				var hd =  [''+this.result+''] /100 * [''+this.plus+''] + {{$test->modelcode['powerrating']}};
				var d = "P" ;
				var e = "F";
				var z = false;
				var y= true;

				
				if(ld<a && a<hd ){
					

				return y
			}		
				else{
					
				return z
				}
			},

		}
	});

	var datas = {!! $datas !!};

	var vm = new Vue({
		el: '#vueform',
	});
	</script>

	<style>

	.red{
		 
		color:red;
		
	}
	.green{
		 
		color:green;
		
	}
</style>
<div>
	<form action="/testtype/wetlifesss" method="POST" id="vueform1">
			{{ method_field('patch') }}
			{{ csrf_field() }}
			
			<input style="display:none" type="number" name="test_id" value="{{ $test->id }}">
			<input style="display:none" type="text" name="title" value="{{ $title }}">

			{{-- Declare variable, put 2 sample in 1 row. (for later printing purpose) --}}
			@php 
				$count = count($datas);
			@endphp 

			<div class="table-responsive">
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
					<tr><td colspan="8" class="text-center"><b>Abnormal Test (at the end of life)</b></td></tr>
					<tr is="my-row" rowtitle="1.  TIME FUSE TAKE FOR SOLEPLATE TO OPERATE (MIN)" prefix="f10" :index="index"></tr>
					<tr is="my-row" rowtitle="2. TIME TAKEN FOR BOILER FUSE TO OPERATE (MIN)" prefix="f11" :index="index"></tr>
					<tr is="my-row" rowtitle="3. SOLEPLATE TEMP WHEN FUSE OPERATED (°C)" prefix="f12" :index="index"></tr>
					<tr is="my-row" rowtitle="4. SAFETY VALVE OPENING" prefix="f13" :index="index"></tr>
					<tr is="my-row" rowtitle="5. BOILER TEMP WHEN FUSE OPERATED (°C)" prefix="f14" :index="index"></tr>
					<tr is="my-row" rowtitle="6. SAFETY VALVE (OPENING, STABILIZATION, MAX PRESSURE)(7.8-8.6)" prefix="f15" :index="index"></tr>
					<tr is="my-row" rowtitle="7. SOLEPLATE CAVITY NO." prefix="f16" :index="index"></tr>
					<tr is="my-row" rowtitle="Remarks" prefix="remarks" :index="index"></tr>
					
				</table>
			</div>

			<div class="form-group text-center">
				<input type="submit" class='btn btn-primary' value="Update">
			</div>

		</form>

		

	<script>
	Vue.component('my-row', {
		props: ['rowtitle','prefix','index'],
		template: `
			<tr>
				<td>@{{ rowtitle }}</td>
				<td><input type="text" :name="prefix_0" :value="data_0"></td>
				<td><input type="text" :name="prefix_100" :value="data_1"></td>
				<td><input type="text" :name="prefix_200" :value="data_2"></td>
				<td><input type="text" :name="prefix_300" :value="data_3"></td>
				<td><input type="text" :name="prefix_600" :value="data_6"></td>
				<td><input type="text" :name="prefix_900" :value="data_9"></td>
				<td><input type="text" :name="prefix_1200" :value="data_12"></td>
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
		el: '#vueform1'	
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