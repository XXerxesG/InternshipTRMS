@extends ('layouts.master')

@section ('content')

<div class="container">
	<h1>Administration Personal Control</h1>

	<table class="table">
		<thead>
			<tr>
				<td>User ID</td>
				<td>User Name</td>
				<td>User Type</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->type }}</td>
				@if ($user->name == Auth::user()->name)
				<td><a href="#" onclick="event.preventDefault(); var bool=confirm('Confirm to change your usertype?'); if(bool){$(this).parent().siblings('.change-admin-form').submit();}">Toggle admin/user</a></td>
				@else
				<td><a href="#" onclick="event.preventDefault(); $(this).parent().siblings('.change-admin-form').submit();">Toggle admin/user</a></td>
				@endif

				<form class="change-admin-form" action="/admin/{{ $user->id }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
			</tr>
			@endforeach

		</tbody>
	</table>

</div>

@endsection