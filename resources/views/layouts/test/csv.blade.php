<table class="table table-bordered">
	@for ($i=0; $i<count($csv); $i++)
		@if (count($csv[$i])==1 && $csv[$i][0][0]=='*')
			<tr><td colspan="100%" style="color: red">{{ $csv[$i][0] }}</td></tr>
		@elseif (count($csv[$i])==1)
			<tr class="active"><td colspan="100%" align="center"><h5><b> {{ $csv[$i][0] }} </b></h5></td></tr> 
		@else
			<tr>
				@for ($j=0; $j<count($csv[$i]); $j++)
				<td>{{ $csv[$i][$j] }}</td>
				@endfor
			</tr>
		@endif
	@endfor
</table>
