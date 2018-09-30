@for ($i=0; $i<count($datas); $i++)
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Sample {{ $i +1 }}</h3>
	</div>
	<div class="panel-body">
		<div class="container">
			@foreach ($files[$i] as $file)
			<a href="{{ asset('storage/'.$file) }}"><img src="{{ asset('storage/'.$file) }}" height="60px" width="60px"></a>
			@endforeach
		</div>
		<div class="container"><br>
			<form method="POST" action="/tests/{{ $test->id }}/{{ $i +1 }}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input style="display: none;" type="text" name="address" value="{{ $test->id.'/'.($i+1) }}">
				<input style="display: inline-block;" type="file" name="pic">
				<input style="display: inline-block;" type="submit" value="Upload">
			</form>
		</div>
	</div>		
</div>
@endfor