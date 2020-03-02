<!DOCTYPE html>
<html>
<head>
	<title>Koleksi Buku</title>
	@include('includes.public.meta_head')
</head>
<body>
	<!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
    	<i class="fa fa-angle-up"></i>
    </a>
  	<!-- END SCROLL TOP BUTTON -->

	<!-- HEADER-->
	@include('includes.public.header')
	<!-- END HEADER-->

	<!-- MAIN CONTENT-->
    @yield('content')
    <!-- END MAIN CONTENT-->

    <!-- HEADER-->
	@include('includes.public.footer')
	<!-- END HEADER-->

    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="{{asset('assets_public/js/slick.min.js')}}"></script>
    <!-- Progress Bar -->
    <script src="https://unpkg.com/circlebars@1.0.3/dist/circle.js"></script>
    <!-- Filterable Gallery js -->
    <script type="text/javascript" src="{{asset('assets_public/js/jquery.filterizr.min.js')}}"></script>
    <!-- Gallery Lightbox -->
    <script type="text/javascript" src="{{asset('assets_public/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="{{asset('assets_public/js/counter.js')}}"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="{{asset('assets_public/js/app.js')}}"></script>
	
    <!-- Custom js -->
	<script type="text/javascript" src="{{asset('assets_public/js/custom.js')}}"></script>
</body>
</html>