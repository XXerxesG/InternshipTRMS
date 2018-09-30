@extends ('layouts.master')

@section ('content')

<div class="" id="root" style="padding-left: 5%">
	<h3>Test & Verification Laboratory</h3>
	<h5>Test Request Form</h5>
	<h4>Add new test under ticket ID <strong>{{$tickets->id}}</strong></h4>
	<form method="post" action="/ticketsaddtest/{{$tickets->id}}" class="form-inline">
		{{ csrf_field() }}
		{{-- Information for general info field --}}
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Date:</label><br>
					<input type="date" class="form-control" name="request_date" required disabled :value="current_date">
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Requester:</label><br>
					<input type="text" disabled placeholder="{{ Auth::user()->name }}" class="form-control">
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Project Name:</label><br>
					<select name="project_name" id="" class="form-control" v-model="project_name" @change="populate" >
						<option value="">----select----</option>
						@foreach ($projects as $project)
						<option value="{{$project->project_name}}">{{$project->project_name}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Product Name:</label><br>
					<select name="" id="" class="form-control" v-model="product_name" @change="populate2" >
						<option value="" >----select----</option>
						@foreach ($projects as $project)
						<option value="{{$project->product_name}}">{{$project->product_name}}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Week Code:</label><br>
					<input type="text" class="form-control" disabled :value="weekcode">
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Project Manager: </label><br>
					<input type="text" class="form-control" value="{{$tickets->project['project_manager']}}" disabled>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Cost Code:</label><br>
					<input type="text" class="form-control" disabled value="{{$tickets->project['charging_code']}}">
				</div>
			</div>
			
		</div>
		<input type="hidden" name="ticket_id" value="{{$tickets->id}}">
		<hr>
		{{-- Table for each test row --}}
		<table class="table">
			<thead>
				<tr>
					<td>S/N<span style="color: red">*</span></td>
					<td>Test Description<span style="color: red">*</span></td>
					<td>Make/Model<span style="color: red">*</span></td>
					<td>Reason<span style="color: red">*</span></td>
					<td>Sample Size<span style="color: red">*</span></td>
					<td>Sample Availiability<span style="color: red">*</span></td>
					<td>Sample Type<span style="color: red">*</span></td>
					<td>Project Stage<span style="color: red">*</span></td>
					<td>Protocal Deviation? (If yes, please specify)<span style="color: red">*</span></td>
					<td>Remark (optional)</td>
				</tr>
			</thead>
			<tbody id="tbody" v-for="n in num_of_tests">
				{{-- due to some html restriction, vue component needs to be implemented this way --}}
				<tr is="testrow" :index="n"></tr>
			
			</tbody>
		</table>
		<span @click="addTest()" style="color: blue;text-decoration: underline; cursor: pointer">Add Test</span>
		<span @click="removeTest()" style="color: blue;text-decoration: underline; cursor: pointer">Remove Test</span>
		<hr>
		<input type="hidden" name="number" value="{{ count($tickets->tests) }}">
		
		
		<div class="text-center">
			<div class="form-group">
				<input type="submit" class='btn btn-primary' value="Submit">
				<input type="button" class='btn' value="Clear" @click="window.location.reload()">
			</div>
		</div>

	</form>
</div>

<script>
	Vue.config.debug = true;
	Vue.config.devtools = true;

	Vue.component('testrow', {
		props: ["index"],
		// Template for every individual row of test
		template: `
		<tr>
			<td>@{{ index }}</td>
			<td>
				<select  :name="description" required  >
					<option value="" selected disabled>--Select--</option>
					@foreach ($testTypes as $testType)
					<option value="{{$testType->description}}">{{$testType->description}}</option>
					@endforeach
				</select>
			</td>
			
			<td>
				<select :name="model" required >
					<option v-for="code in shared.codes">@{{ code }}</option>
				</select>
			</td>
			<td>
			<select :name="reason" required>
					<option value="TFC System Evaluation">TFC System Evaluation</option>
					<option value="TFC Element Evaluation">TFC Element Evaluation</option>
					<option value="PDLM System Verification">PDLM System Verification</option>
					<option value="PDLM Element Verification">PDLM Element Verification</option>
					<option value="PDLM Part Cost Down">PDLM Part Cost Down</option>
					<option value="PDLM Alternate Part">PDLM Alternate Part</option>
					<option value="LCM Part Cost Down">LCM Part Cost Down</option>
					<option value="LCM Alternate Part">LCM Alternate Part</option>
					<option value="Field Call Verification">Field Call Verification</option>
					<option value="Legal">Legal</option>
					<option value="Claims">Claims</option>
					<option value="Competitor Benchmarking">Competitor Benchmarking</option>
				</select>
			</td>
			<td>
				<input type="number" :name="sample_size" required></input>
			</td>
			<td>
				<input type="date" :name="sample_availability" required>
			</td>
			<td>
				<select :name="sample_type" required>
					<option value="Prototype">Prototype</option>
					<option value="Pre-DB">Pre-DB</option>
					<option value="DB">DB</option>
					<option value="ET">ET</option>
					<option value="PP">PP</option>
				</select>
			</td>
			<td>
				<select :name="project_stage" required>
					<option value="TFC">TFC</option>
					<option value="IPD">Pre-IPD</option>
					<option value="PLM">PLM</option>
					<option value="LCM">LCM</option>
				</select>
			</td>
			<td>
				<textarea :name="protocal_deviation" rows="1" required></textarea>
			</td>
			<td>
				<textarea :name="remark" rows="1"></textarea>
			</td>
			
		</tr>
		`,
		data(){
			return{
				// bind the name field of the form, for submission
				shared: store,
				description: 'tests['+this.index+'][description]',
				model: 'tests['+this.index+'][model]',
				reason: 'tests['+this.index+'][reason]',
				sample_size: 'tests['+this.index+'][sample_size]',
				sample_availability: 'tests['+this.index+'][sample_availability]',
				sample_type: 'tests['+this.index+'][sample_type]',
				project_stage: 'tests['+this.index+'][project_stage]',
				protocal_deviation: 'tests['+this.index+'][protocal_deviation]',
				remark: 'tests['+this.index+'][remark]',
			}
		}

	})

	let store = {
		codes: [],
	};

	var vm = new Vue({
		el: '#root',
		data: {
			request_date: '',
			projects: {!! $projects !!},
			project_name: '',
			product_name: '',
			project_manager: '',
			charging_code: '',
			project_stage: '',
			num_of_tests: 1,
			shared: store,
			something: 1,
		},
		computed: {
			something: ()=>{
				return 1;
			},
			// Popup the current date and disabled for selecting
			current_date: ()=>{
				var today = new Date();
				var dd = today.getDate();
				var mm = today.getMonth()+1;
				var yyyy = today.getFullYear();
				if(dd<10){
					dd='0'+dd;
				} 
				if(mm<10){
					mm='0'+mm;
				} 
				return yyyy+'-'+mm+'-'+dd;
			},
			// Algorithm to compute the weekcode, based on Philips Calander
			weekcode: ()=>{
				var date = new Date();
				var year = date.getFullYear();
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
				return year.toString().slice(2).concat(week_of_year);
			},
			size: ()=>{

			}
		},
		methods: {
			// Populate relevant field upon project_name selection
			populate: ()=>{
				vm.project_manager=vm.projects.find((obj)=>{return obj.project_name==vm.project_name}).project_manager;
				vm.product_name=vm.projects.find((obj)=>{return obj.project_name==vm.project_name}).product_name;
				vm.charging_code=vm.projects.find((obj)=>{return obj.project_name==vm.project_name}).charging_code;
				$.ajax({
					headers: {
						'X-CSRF-token': $('meta[name="csrf-token"]').attr('content')
					},
					url:'/modelByProjectName',
					type: 'POST',
					data: {project_name: vm.project_name},
					success: function(data){
						store.codes = data;
					}
				})
				return;
			},
			// Populate relevent field upon product_name selection
			populate2: ()=>{
				vm.project_manager=vm.projects.find((obj)=>{return obj.product_name==vm.product_name}).project_manager;
				vm.project_name=vm.projects.find((obj)=>{return obj.product_name==vm.product_name}).project_name;
				vm.charging_code=vm.projects.find((obj)=>{return obj.product_name==vm.product_name}).charging_code;
				$.ajax({
					headers: {
						'X-CSRF-token': $('meta[name="csrf-token"]').attr('content')
					},
					url:'/modelByProjectName',
					type: 'POST',
					data: {project_name: vm.project_name},
					success: function(data){
						store.codes = data;
					}
				})
				return;
			},

			populate3: ()=>{
				vm.project_manager=vm.projects.find((obj)=>{return obj.product_name==vm.product_name}).project_manager;
				vm.project_name=vm.projects.find((obj)=>{return obj.product_name==vm.product_name}).project_name;
				vm.charging_code=vm.projects.find((obj)=>{return obj.product_name==vm.product_name}).charging_code;
				$.ajax({
					headers: {
						'X-CSRF-token': $('meta[name="csrf-token"]').attr('content')
					},
					url:'/modelByProjectName',
					type: 'POST',
					data: {project_name: vm.project_name},
					success: function(data){
						store.codes = data;
					}
				})
				return;
			},

			// Add test
			addTest: ()=>{
				vm.num_of_tests++;
			},
			// Remove test, minimun is 1 (front-end validation)
			removeTest: ()=>{
				if(vm.num_of_tests>1){vm.num_of_tests--};
			}
		}
	})
</script>

@endsection