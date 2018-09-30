<div>
	<ul class="list-group">
		@foreach ($test->comments as $comment)
		<li class="list-group-item">
			
		<span style="font-size: 1.5em">{{ $comment->user['name']/*1*/ }}</span><span> at : {{ $comment->created_at }}</span><br>

		<p>
		{{ $comment->body }}
			
		</p>
			
		</li>
		@endforeach
	</ul>
</div>

@if (Auth::check())
<div class="panel panel-default">
	<div class="panel-body">
		
		<form method="POST" action="/tests/{{ $test->id }}/comments">
			{{ csrf_field() }}
			<div class="form-group">
				<textarea name="body" placeholder="Your comment here" class="form-control" required></textarea>
			</div>
			<div class="form-group">
				<input type="submit" class='btn btn-primary' value="Submit">
			</div>
		</form>

		@include ('layouts.errors')
	</div>
</div>
@endif