<!DOCTYPE html>
<html>
<head>
	<title>Admin - Dashboard</title>
	@include('includes.admin.meta_head')
</head>
<body class="animsition">
	<div class="page-wrapper">
		<!-- MENU SIDEBAR-->
			@include('includes.admin.menu_sidebar')
		<!-- END MENU SIDEBAR-->

        <div class="page-container">
        	<!-- HEADER DESKTOP-->
        	@include('includes.admin.header')	
        	<!-- END HEADER DESKTOP-->

            <section class="section">
        	<!-- MAIN CONTENT-->
        	@yield('content')
        	<!-- END MAIN CONTENT-->
            </section>
        </div>
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