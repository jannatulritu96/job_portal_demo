<!doctype html>
<html class="no-js" lang="en">
    <head>
    @include('frontend.layouts._head')
    </head>
	
    <body>
	
		<!-- Navigation Start  -->
		<nav class="navbar navbar-default navbar-sticky bootsnav">
			@include('frontend.layouts._nav')
		</nav>
		<!-- Navigation End  -->
		<div class="content" style='height=300px'>
			@yield('contents')
		</div>
		
		
		<!-- footer start -->
		<footer>
			@include('frontend.layouts._footer')
		</footer>
		 
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script src="js/bootsnav.js"></script>
		<script src="js/main.js"></script>
    </body>
</html>
