<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Booking Form</title>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/bootstrap/css/bootstrap.min.css')}}">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/style.css')}}">
	<!-- JS -->
	<script src="{{asset('frontendtemplate/bootstrap/js/jquery.min.js')}}"></script>
	<script src="{{asset('frontendtemplate/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<!-- DatePicker -->
	<link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/css/bootstrap-datepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/css/bootstrap-datepicker.min.css')}}">
	<script src="{{asset('frontendtemplate/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('frontendtemplate/js/bootstrap-datepicker.min.js')}}"></script>
</head>
<body>
	<!-- Frame Start -->
	<div class="container">
		<div class="row justify-content-center">
			<div class="card shadow-lg col-sm-8 mt-5">
				<div class="card-body">
					<!-- End Frame -->
					@yield('content')

				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
	$(document).ready(function() {
		$('#checkinDate').datepicker();
		$('#checkoutDate').datepicker({
	            useCurrent: false //Important! See issue #1075
	        });
		$("#checkinDate").on("dp.change", function (e) {
			$('#checkoutDate').data("DateTimePicker").minDate(e.date);
		});
		$("#checkoutDate").on("dp.change", function (e) {
			$('#checkinDate').data("DateTimePicker").maxDate(e.date);
		});
	})
	</script>
	</body>
	</html>