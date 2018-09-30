<h4><b>IV. Test Result</b></h4>
		<p>Description: Every 8000 cycles check for Earth Wire continuity.</p>

		<form action="/testtype/vibration" method="POST">
			{{ method_field('patch')}}
			{{ csrf_field() }}

			<input style="display:none" type="number" name="test_id" value="{{ $test->id }}">
			<input style="display:none" type="text" name="title" value="{{ $title }}">
	
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>Sample</th>
							<td>Type of vibration</td>
							<td>After vibration test(visual check): F-Box</td>
							<td>After vibration test(visual check): Iron</td>
							<td>Results</td>
							<td>Remarks</td>
						</tr>
					</thead>
					<tbody>
						@for ($i=0; $i<count($datas); $i++)
						<tr>
							<th>{{ $i+1 }}</th>
							{{-- tto refers to Test-Type-Object --}}
							<td><input type="text" name="tto[{{$i}}][0]" value="{{ $datas[$i]->{'type_of_vibration'} }}"></td>
							<td><input type="text" name="tto[{{$i}}][1]" value="{{ $datas[$i]->{'F-Box'} }}"></td>
							<td><input type="text" name="tto[{{$i}}][2]" value="{{ $datas[$i]->{'iron'} }}"></td>
							<td><input type="text" name="tto[{{$i}}][3]" value="{{ $datas[$i]->{'result'} }}"></td>
							<td><input type="text" name="tto[{{$i}}][4]" value="{{ $datas[$i]->{'remark'} }}"></td>

						</tr>
						@endfor
					</tbody>
				</table>
			</div>
			
			
			<br>
			<div class="form-group text-center">
				<input type="submit" class='btn btn-primary' value="Update">
			</div>

		</form>