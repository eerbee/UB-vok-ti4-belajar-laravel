<!DOCTYPE html>
<html>
<head>
	<title>Admin - Kalendar</title>
	@include('includes.admin.meta_head')

	<style type="text/css">
    /* force class color to override the bootstrap base rule
       NOTE: adding 'url: #' to calendar makes this unneeded
     */
    .fc-event, .fc-event:hover {
          color: #fff !important;
          text-decoration: none;
    }
    </style>
</head>
<body>
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


    <!-- full calendar requires moment along jquery which is included above -->
    <script src="{{asset('assets/vendor/fullcalendar-3.10.0/lib/moment.min.js')}}"></script>
    <script src="{{asset('assets/vendor/fullcalendar-3.10.0/fullcalendar.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <script type="text/javascript">
        $(function() {
          // for now, there is something adding a click handler to 'a'
          var tues = moment().day(2).hour(19);

          // build trival night events for example data
          var events = [
            {
              title: "Special Conference",
              start: moment().format('YYYY-MM-DD'),
              url: '#'
            },
            {
              title: "Doctor Appt",
              start: moment().hour(9).add(2, 'days').toISOString(),
              url: '#'
            }

          ];

          var trivia_nights = []

          for(var i = 1; i <= 4; i++) {
            var n = tues.clone().add(i, 'weeks');
            console.log("isoString: " + n.toISOString());
            trivia_nights.push({
              title: 'Trival Night @ Pub XYZ',
              start: n.toISOString(),
              allDay: false,
              url: '#'
            });
          }

          // setup a few events
          $('#calendar').fullCalendar({
            header: {
              left: 'prev,next today',
              center: 'title',
              right: 'month,agendaWeek,agendaDay,listWeek'
            },
            events: events.concat(trivia_nights)
          });
        });
    </script>
</body>
</html>