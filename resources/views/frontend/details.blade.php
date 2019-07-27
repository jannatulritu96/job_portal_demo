@extends('frontend.layouts.master')
@section('contents')

@foreach($posts as $post)
<section class="profile-detail">
		<div class="container">
			<div class="col-md-12">
				<div class="row">
					<div class="basic-information">
						<div class="col-md-2 col-sm-2">
						</div>
						<div class="col-md-10 col-sm-10">
							<div class="profile-content" style="margin-left: -173px;margin-bottom: 60px;">
									<h2><span>{{ $post->title }}</span></h2>
									<ul class="information">
										<li><span>Address:</span>{{ $post->address }}</li>
										<li><span>Salary:</span>{{ $post->salary }}</li>
									</ul>
								</div>
							</div>
						<div class="panel panel-default">
								<h3 style="color:green">About Job</h3> 
							<div class="panel-body">
							<p>{{ $post->description }}</p>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section><div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="modal-body">
					<div class="m-t-20 text-center" style="background:#da0833;padding: 11px;font-size: 21px;">
					<a href="{{ route('application',$post->id) }}" style="color:white">Application now</a>
                    </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection