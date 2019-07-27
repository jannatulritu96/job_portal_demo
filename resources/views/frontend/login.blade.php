@extends('frontend.layouts.master')
@section('contents')
<!-- login section start -->
        <section class="login-wrapper">
			<div class="container">
				<div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
					<form class="input-field" action="{{ route('login.post') }}" method="POST">
                        @csrf
                        <h1 style="color:#da0833">Sign in</h1>
						<input type="email" class="form-control input-lg" name="email" placeholder="E-mail">
						<input type="password" class="form-control input-lg" name="password" placeholder="Password">
						<button type="submit" class="btn btn-primary">Login</button>
						<p>Have't Any Account <a href="{{ route('registration') }}">Create An Account</a></p>
					</form>
				</div>
			</div>
		</section>
<!-- login section End -->
@endsection