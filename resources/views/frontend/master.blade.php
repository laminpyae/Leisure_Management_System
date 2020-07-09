<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hotel Reservation System</title>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/bootstrap/css/bootstrap.min.css')}}">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/css/jquery-ui.css')}}">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/custom.css')}}">
	<link rel="stylesheet" href="{{asset('frontendtemplate/font.css')}}">
	<link rel="stylesheet" href="{{asset('frontendtemplate/css/jquery-ui.theme.css')}}">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<!-- JS -->
	<script src="{{asset('frontendtemplate/bootstrap/js/jquery.min.js')}}"></script>
	<script src="{{asset('frontendtemplate/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<!-- DatePicker -->
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/css/bootstrap-datepicker.css')}}"> -->
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/css/bootstrap-datepicker.min.css')}}"> -->
	<!-- <script src="{{asset('frontendtemplate/js/bootstrap-datepicker.js')}}"></script> -->
	<!-- <script src="{{asset('frontendtemplate/js/bootstrap-datepicker.min.js')}}"></script> -->
	<script src="{{asset('frontendtemplate/js/jquery-ui.js')}}"></script>
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
	@yield('script')
	</body>
	</html>