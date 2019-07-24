<script src="{{asset('assets/js/jquery-2.0.0.min.js')}}"></script> <!-- Jquery Library Call --> 
<script src="{{asset('assets/plugins/prettyphoto/js/prettyphoto.js')}}"></script> <!-- PrettyPhoto Plugin --> 
<script src="{{asset('assets/js/helper-plugins.js')}}"></script> <!-- Plugins --> 
<script src="{{asset('assets/js/bootstrap.js')}}"></script> <!-- UI --> 
<script src="{{asset('assets/js/waypoints.js')}}"></script> <!-- Waypoints --> 
<script src="{{asset('assets/plugins/mediaelement/mediaelement-and-player.min.js')}}"></script> <!-- MediaElements --> 
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="{{asset('assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

<script src="{{asset('assets/js/init.js')}}"></script> <!-- All Scripts --> 
<script src="{{asset('assets/plugins/flexslider/js/jquery.flexslider.js')}}"></script> <!-- FlexSlider --> 
<script src="{{asset('assets/plugins/countdown/js/jquery.countdown.min.js')}}"></script> <!-- Jquery Timer -->
	<script type="text/javascript">
				jQuery(document).ready(function() {
					   jQuery('.tp-banner').revolution(
						{
							delay:9000,
							startwidth:1170,
							startheight:500,
							hideThumbs:10
						});
				});
			</script>
<script src="{{asset('assets/plugins/fullcalendar/lib/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
<script>

	$(document).ready(function() {
	
		$('#calendar').fullCalendar({
			defaultDate: '2014-11-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2014-11-01'
				},
				{
					title: 'Long Event',
					start: '2014-11-07',
					end: '2014-11-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2014-11-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2014-11-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2014-11-11',
					end: '2014-11-13'
				},
				{
					title: 'Meeting',
					start: '2014-11-12T10:30:00',
					end: '2014-11-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2014-11-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2014-11-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2014-11-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2014-11-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2014-11-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2014-11-28'
				}
			]
		});
		
	});

</script>
