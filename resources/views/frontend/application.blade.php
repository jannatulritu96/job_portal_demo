@extends('frontend.layouts.master')
@section('contents')
<!-- login section start -->
        <section class="login-wrapper">
			<div class="container">
				<div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
					<form class="input-field" action="{{ route('apply_form') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h1 style="color:#da0833">Apply for job</h1>
                        <div class="form-group" >
                            <label class="col-md-4 control-label" for="Upload resume" style="color: black;">Resume :</label>
                            <div class="col-md-4">
                                <input name="resume" class="input-file" type="file">
                            </div>
                        </div><br>
                        
                        <div class="m-t-20 text-center" style="margin-top: 42px;"> 
                            <button class="btn btn-primary" id="createUser">Apply now</button>
                        </div>
					</form>
				</div>
			</div>
		</section>
<!-- login section End -->
@endsection