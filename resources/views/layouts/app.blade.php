<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Assignment</title>
	<!--favicon-->
	<link rel="icon" href="{{asset('public/assets/images/favicon-32x32.png')}}" type="image/png" />
	<!-- loader-->
	{{-- <link href="{{asset('public/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('public/assets/js/pace.min.js')}}"></script> --}}
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{asset('public/assets/css/icons.css')}}" />
	<!-- App CSS -->
	<link rel="stylesheet" href="{{asset('public/assets/css/app.css')}}" />
</head>

<body class="bg-login">
    <div class="wrapper">
         <!-- start container -->
        @yield('content')
         <!-- end container -->
    </div>

    <script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
</body>

</html>
