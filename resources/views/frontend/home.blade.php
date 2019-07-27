@extends('frontend.layouts.master')
@section('contents')
<section class="main-banner" style="background:#242c36 url(assets/frontend/img/slider-01.jpg) no-repeat">
<div class="container">
				<div class="caption">
					<h2>Build Your Career</h2>
					<form>
						<fieldset>
							<div class="col-md-4 col-sm-4 no-pad">
								<input type="text" class="form-control border-right" placeholder="Skills, Designation, Companies" />
							</div>
							<div class="col-md-3 col-sm-3 no-pad">
								<select class="selectpicker border-right">
								  <option>Experience</option>
								  <option>0 Year</option>
								  <option>1 Year</option>
								  <option>2 Year</option>
								  <option>3 Year</option>
								  <option>4 Year</option>
								  <option>5 Year</option>
								  <option>6 Year</option>
								  <option>7 Year</option>
								  <option>8 Year</option>
								  <option>9 Year</option>
								 <option>10 Year</option>
								</select>
							</div>
							<div class="col-md-3 col-sm-3 no-pad">
								<select class="selectpicker">
								  <option>Select Category</option>
								  <option>Accounf & Finance</option>
								  <option>Information & Technology</option>
								  <option>Marketing</option>
								  <option>Food & Restaurent</option>
								</select>
							</div>
							<div class="col-md-2 col-sm-2 no-pad">
								<input type="submit" class="btn seub-btn" value="submit" />
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</section>
		@foreach($posts as $post)
		<section class="features" style="display:inline">
			<div class="container">
				<div class="col-md-10 col-sm-2">
			<div class="companies">
				<div class="company-list">
						<div class="row">
							<div class="col-md-2 col-sm-2">

							</div>
							<div class="col-md-10 col-sm-10">
								<div class="company-content">
									<h3>{{ $post->title }}<span><b><a href="{{ route('job_details',$post->id) }}" style="color:#da0833">Job Details</a></b></span></h3>
									<p class="company-name"><i class="fa fa-description"></i>{{ $post->short_description }}</p>
									<h5 class="company-location"><i class="fa fa-map-marker"></i>{{ $post->address }}</h5>
								</div>
							</div>
						</div>
				</div>
			</div>	
		</section>
		@endforeach
@endsection