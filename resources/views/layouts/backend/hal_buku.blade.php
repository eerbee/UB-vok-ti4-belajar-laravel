<!DOCTYPE html>
<html>
<head>
	<title>Admin - Buku</title>
	@include('includes.backend.meta_head')
</head>
<body class="animsition">
	<div class="page-wrapper">
		<!-- MENU SIDEBAR-->
			@include('includes.backend.menu_sidebar')
		<!-- END MENU SIDEBAR-->

		<!-- PAGE CONTAINER-->
        <div class="page-container"> 
        	<!-- HEADER DESKTOP-->
        	@include('includes.backend.header')	
        	<!-- END HEADER DESKTOP-->

        	<!-- MAIN CONTENT-->
        	@yield('content')
        	<!-- END MAIN CONTENT-->
        </div>
        <!--END PAGE CONTAINER-->
	</div>
	
	<!-- Jquery JS-->
    <script src="{{asset('assets/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('assets/vendor/slick/slick.min.js')}}"></script>
    <script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{asset('assets/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/vendor/counter-up/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/select2/select2.min.js')}}"></script>
    <!-- Main JS-->
    <script src="{{asset('assets/js/main.js')}}"></script>
    
</body>
</html>