@extends('layouts.master')

@section('content')

<header>
	<div class="container">

		<div class="row" style="margin-top:60px">
			<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				<form method="POST" action="/register">
					{{ csrf_field() }}

					<fieldset>
					<h2>Register</h2>
						<hr class="colorgraph">
						<div class="form-group">
							<input type="text" name="name" id="name" class="form-control input-lg" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
						</div>
						<div class="form-group">
							<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
						</div>
						<div class="form-group">
							<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password">
						</div>
						<!-- <span class="button-checkbox">
							<button type="button" class="btn" data-color="info">Remember Me</button>
							<input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
							<a href="" class="btn btn-link pull-right">Forgot Password?</a>
						</span> -->
						<hr class="colorgraph">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<input type="submit" class="btn btn-lg btn-success btn-block" value="Register">
							</div>
							<!-- <div class="col-xs-6 col-sm-6 col-md-6">
								<a href="" class="btn btn-lg btn-primary btn-block">Register</a>
							</div> -->
						</div>
						<br/>
						<div class="form-group">
							@include('layouts.error')
						</div>
					</fieldset>
				</form>
			</div>
		</div>

	</div>  
</header>

@endsection