@extends('frontend.layouts.master')
@section('contents')
<!-- login section start -->
        <section class="login-wrapper">
			<div class="container">
				<div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
					<form class="input-field" action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h1 style="color:#da0833">Registration</h1>
                        <input type="text" class="form-control input-lg" name="first_name" placeholder="First Name">
                        <input type="text" class="form-control input-lg" name="last_name" placeholder="Last Name">
                        <input type="text" class="form-control input-lg" name="email" placeholder="E-mail">
                        <input type="text" class="form-control input-lg" name="contact_number" placeholder="Phone number">
                        <input type="text" class="form-control input-lg" name="skills" placeholder="Skills">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Upload photo">Image</label>
                            <div class="col-md-4">
                                <input name="image" class="input-file" type="file">
                            </div>
                        </div><br>

						<input type="password" class="form-control input-lg" name="password" placeholder="Password">
	
                        <button type="submit" class="btn btn-primary">Registration</button>
					</form>
				</div>
			</div>
		</section>
<!-- login section End -->
@endsection