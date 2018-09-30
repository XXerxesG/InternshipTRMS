@extends ('layouts.master')

@section ('content')

<div class="container" id="root">
	@if (Auth::check() && Auth::user()->type=="admin")
	@if(Session::has('successMsg'))
    <div class="alert alert-success"> {{ Session::get('successMsg') }}</div>
    @endif
	<h3>Test & Verification Laboratory</h3>
	<h5>Adding New Machine</h5>
	{{-- Information for general info field --}}
		
		<div class="row">

			<div class="col-md-3">
				<div class="form-group">
					<label for="">Date:</label><br>
					<input type="text" disabled placeholder="<?php echo date("m/d/y");?>" class="form-control">
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Requester:</label><br>
					<input type="text" disabled value="{{ Auth::user()['name'] }}" class="form-control" name="user_id">
				</div>
			</div>

			<table class="table">
			<thead>
				<tr>
					<td>S/N</td>
					<td>Machine Name<span style="color: red">*</span></td>
					<td>Capacity:<span style="color: red">*</span></td>
					<td>Suppiler:<span style="color: red">*</span></td>
				</tr>
			</thead>
			
		{{-- Table for each test row --}}

		<form action="/newmachineform" method="post">
			
			
				
					{{csrf_field()}}
					
				
					<tr>
						<td>1.</td>
						<td><input type="text" style="width:20em;" required  name="machinename"></td>
						<td><input type="number" style="width:20em;"  required name="capacity"></td>
						<td><input type="text" style="width:20em;"  required name="suppiler"></td>
                        <td><input type="hidden" name="user_id" value="{{ Auth::user()['id'] }}"></td>
					</tr>
				</table>
			<div class="text-center">
			<div class="form-group">
				<input type="submit" class='btn btn-primary' value="Submit">
				<input type="reset" class='btn' value="Clear" @click="window.location.reload()">
			</div>
			</div>
			
		</form>


</div>

@else

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Email Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endif
</div>

@endsection