<div class="container">      
				<!-- Start Header Navigation -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="index.html"><img src="" class="logo{{ asset('assets/frontend/img/logo.png') }}" alt=""></a>
				</div>
				<!-- End Header Navigation -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
							<li><a href="{{ route('home') }}">Home</a></li> 
							<li><a href="{{ route('login.store') }}">Login</a></li>
							<li><a href="{{ route('registration') }}">Registration</a></li>
							<li class="dropdown">

								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile</a>
								<ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">
									 <li><a href="">Profile</a></li>

                           			 <li style="background-color: darksalmon">
                            		    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout.form').submit();">Logout</a>
                               				  <form id="logout.form" method="POST" action="{{ route('logout') }}" style="display:none; color: black;">
												@csrf
												<input type="submit" value="Logout">
                               				 </form>
                          			  </li>
                   			     </ul>							
							</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
			