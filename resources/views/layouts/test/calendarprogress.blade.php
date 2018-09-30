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
	<div id="stage1" class="progress-bar" v-bind:style="styles.style1">1</div>
	<div id="stage2" class="progress-bar" v-bind:style="styles.style2">2</div>
	<div id="stage3" class="progress-bar" v-bind:style="styles.style3">3</div>
	<div id="stage4" class="progress-bar" v-bind:style="styles.style4">4</div>
	<div id="stage5" class="progress-bar" v-bind:style="styles.style5">5</div>
	<div id="stage6" class="progress-bar" v-bind:style="styles.style5">6</div>
	<div id="stage7" class="progress-bar" v-bind:style="styles.style5">7</div>
	<div id="stage8" class="progress-bar" v-bind:style="styles.style5">8</div>
	<div id="stage9" class="progress-bar" v-bind:style="styles.style5">9</div>
	<div id="stage10" class="progress-bar" v-bind:style="styles.style5">10</div>
	<div id="stage11" class="progress-bar" v-bind:style="styles.style5">11</div>
	<div id="stage12" class="progress-bar" v-bind:style="styles.style5">12</div>
	<div id="stage13" class="progress-bar" v-bind:style="styles.style5">13</div>
	<div id="stage14" class="progress-bar" v-bind:style="styles.style5">14</div>
	<div id="stage15" class="progress-bar" v-bind:style="styles.style5">15</div>
	<div id="stage16" class="progress-bar" v-bind:style="styles.style5">16</div>
	<div id="stage17" class="progress-bar" v-bind:style="styles.style5">17</div>
	<div id="stage18" class="progress-bar" v-bind:style="styles.style5">18</div>
	<div id="stage19" class="progress-bar" v-bind:style="styles.style5">19</div>
	<div id="stage20" class="progress-bar" v-bind:style="styles.style5">20</div>
	<div id="stage21" class="progress-bar" v-bind:style="styles.style5">21</div>
	<div id="stage22" class="progress-bar" v-bind:style="styles.style5">22</div>
	<div id="stage23" class="progress-bar" v-bind:style="styles.style5">23</div>
	<div id="stage24" class="progress-bar" v-bind:style="styles.style5">24</div>
	<div id="stage25" class="progress-bar" v-bind:style="styles.style1">25</div>
	<div id="stage26" class="progress-bar" v-bind:style="styles.style2">26</div>
	<div id="stage27" class="progress-bar" v-bind:style="styles.style3">27</div>
	<div id="stage28" class="progress-bar" v-bind:style="styles.style4">28</div>
	<div id="stage29" class="progress-bar" v-bind:style="styles.style5">29</div>
	<div id="stage30" class="progress-bar" v-bind:style="styles.style5">30</div>
	<div id="stage31" class="progress-bar" v-bind:style="styles.style5">31</div>
	<div id="stage32" class="progress-bar" v-bind:style="styles.style5">32</div>
	<div id="stage33" class="progress-bar" v-bind:style="styles.style5">33</div>
	<div id="stage34" class="progress-bar" v-bind:style="styles.style5">34</div>
	<div id="stage35" class="progress-bar" v-bind:style="styles.style5">35</div>
	<div id="stage36" class="progress-bar" v-bind:style="styles.style5">36</div>
	<div id="stage37" class="progress-bar" v-bind:style="styles.style5">37</div>
	<div id="stage38" class="progress-bar" v-bind:style="styles.style5">38</div>
	<div id="stage39" class="progress-bar" v-bind:style="styles.style5">39</div>
	<div id="stage40" class="progress-bar" v-bind:style="styles.style5">40</div>
	<div id="stage41" class="progress-bar" v-bind:style="styles.style5">41</div>
	<div id="stage42" class="progress-bar" v-bind:style="styles.style5">42</div>
	<div id="stage43" class="progress-bar" v-bind:style="styles.style5">43</div>
	<div id="stage44" class="progress-bar" v-bind:style="styles.style5">44</div>
	<div id="stage45" class="progress-bar" v-bind:style="styles.style5">45</div>
	<div id="stage46" class="progress-bar" v-bind:style="styles.style5">46</div>
	<div id="stage47" class="progress-bar" v-bind:style="styles.style5">47</div>
	<div id="stage48" class="progress-bar" v-bind:style="styles.style5">48</div>
	<div id="stage49" class="progress-bar" v-bind:style="styles.style5">49</div>
	<div id="stage50" class="progress-bar" v-bind:style="styles.style5">50</div>
	<div id="stage51" class="progress-bar" v-bind:style="styles.style5">51</div>
	<div id="stage52" class="progress-bar" v-bind:style="styles.style5">52</div>
</div>
{{-- <p>Status : {{ $tests->status }}</p> --}}

<script>
	Vue.config.devtools = true;
	var pb = new Vue({
		el: '#progress',
		data: {
			status: "",
			styles: {
				style1: {
					width: "2%",
					background: ''
				},
				style2: {
					width: "2%",
					background: ''
				},
				style3: {
					width: "2%",
					background: ''
				},
				style4: {
					width: "2%",
					background: ''
				},
				style5: {
					width: "2%",
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