<style>
	.progress-bar {
		border: 1px solid #ccc;
		border-radius: 2px;
		border-collapse: collapse;
		color:black;
		background-color: white;
	}
</style>

<div id="progress" class="progress">
	<div id="stage1" class="progress-bar" v-bind:style="styles.style1">Test Accept</div>
	<div id="stage2" class="progress-bar" v-bind:style="styles.style2">Test in progress</div>
	<div id="stage3" class="progress-bar" v-bind:style="styles.style3">Test in progress</div>
	<div id="stage4" class="progress-bar" v-bind:style="styles.style4">Report generation</div>
	<div id="stage5" class="progress-bar" v-bind:style="styles.style5">Test completed</div>
	<div id="stage6" class="progress-bar" v-bind:style="styles.style5">Test cancelled</div>
</div>
<p>Status : {{ $test->status }}</p>

<script>
	Vue.config.devtools = true;
	var pb = new Vue({
		el: '#progress',
		data: {
			status: "{{ $test->status }}",
			styles: {
				style1: {
					width: "15%",
					background: ''
				},
				style2: {
					width: "20%",
					background: ''
				},
				style3: {
					width: "40%",
					background: ''
				},
				style4: {
					width: "15%",
					background: ''
				},
				style5: {
					width: "10%",
					background: ''
				}
			}
		},
		mounted: function(){
			switch(this.status){
				case 'Accept' : 
				this.clean_style();
				this.styles.style1.background = 'linear-gradient(to right, #cfb, white)';
				break;
				case 'in progress':
				this.clean_style();
				this.styles.style1.background = '#cfb';
				break;
				case 'pause':
				this.clean_style();
				this.styles.style1.background = '#cfb';
				this.styles.style2.background = 'linear-gradient(to right, #cfb, white)';
				break;
				case 'Test in progress':
				this.clean_style();
				this.styles.style1.background = '#cfb';
				this.styles.style2.background = '#cfb';
				this.styles.style3.background = 'linear-gradient(to right, #cfb, white)';
				break;
				case 'Test Cancel':
				case 'Test completed':
				this.clean_style();
				this.styles.style1.background = '#cfb';
				this.styles.style2.background = '#cfb';
				this.styles.style3.background = '#fb5';
				break;
				case 'Test report generation':
				this.clean_style();
				this.styles.style1.background = '#cfb';
				this.styles.style2.background = '#cfb';
				this.styles.style3.background = '#cfb';
				this.styles.style4.background = 'linear-gradient(to right, #cfb, white)';
				break;
				// case 'Test completed':
				// this.styles.style1.background = '#cfb';
				// this.styles.style2.background = '#cfb';
				// this.styles.style3.background = '#cfb';
				// this.styles.style4.background = '#cfb';
				// this.styles.style5.background = '#cfb';
				// break;
				// case 'Test cancelled':
				// this.styles.style1.background = '#DC143C';
				// this.styles.style2.background = '#DC143C';
				// this.styles.style3.background = '#DC143C';
				// this.styles.style4.background = '#DC143C';
				// this.styles.style5.background = '#DC143C';
				// break;
				default:
				this.clean_style();
				break;
			}
		},
		methods: {
			clean_style: ()=>{
				for(style in this.styles){
					style.background = '';
				}
			}
		}
	})
</script>