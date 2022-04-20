<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Assignment Project</title>
    <!--favicon-->
    <link rel="icon" href="{{asset('public/assets/images/favicon-32x32.png')}}" type="image/png" />
    <!-- Vector CSS -->
    <link href="{{asset('public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <!--plugins-->
    <link href="{{asset('public/assets/plugins/simplebar/css/simplebar.css" rel="styleshee')}}t" />
    <link href="{{asset('public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('public/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('public/assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('public/assets/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/css/icons.css')}}" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/dark-sidebar.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/dark-theme.css')}}" />
</head>

<body>
    <!-- wrapper -->
    <div class="wrapper">

        @include('layouts.admin.header')

        <!-- Left Sidebar Start -->
        @include('layouts.admin.leftmenu')
        <!-- Left Sidebar End -->

        <div class="page-wrapper">
            <!--  Main-content -->
            @yield('main-content')
            <!--  Main-content -->


            <!-- Footer Start -->
            @include('layouts.admin.footer')
            <!-- end Footer -->

        </div>
        <!--end page-wrapper-->
        <!--start overlay-->
        <div class="overlay toggle-btn-mobile"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!--footer -->
        <div class="footer">
            <p class="mb-0">Syndash @2020 | Developed By : <a href="https://themeforest.net/user/codervent"
                    target="_blank">codervent</a>
            </p>
        </div>
        <!-- end footer -->
    </div>
    <!--start switcher-->
    <div class="switcher-wrapper">
        <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
            <hr />
            <h6 class="mb-0">Theme Styles</h6>
            <hr />
            <div class="d-flex align-items-center justify-content-between">
                <div class="custom-control custom-radio">
                    <input type="radio" id="darkmode" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="darkmode">Dark Mode</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="lightmode" name="customRadio" checked class="custom-control-input">
                    <label class="custom-control-label" for="lightmode">Light Mode</label>
                </div>
            </div>
            <hr />
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="DarkSidebar">
                <label class="custom-control-label" for="DarkSidebar">Dark Sidebar</label>
            </div>
            <hr />
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="ColorLessIcons">
                <label class="custom-control-label" for="ColorLessIcons">Color Less Icons</label>
            </div>
        </div>
    </div>
    <!--end switcher-->
    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
    <!--plugins-->
    <script src="{{asset('public/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <!-- Vector map JavaScript -->
    <script src="{{asset('public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('public/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('public/assets/plugins/vectormap/jquery-jvectormap-in-mill.js')}}"></script>
    <script src="{{asset('public/assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
    <script src="{{asset('public/assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js')}}"></script>
    <script src="{{asset('public/assets/plugins/vectormap/jquery-jvectormap-au-mill.js')}}"></script>
    <script src="{{asset('public/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
    <script src="{{asset('public/assets/js/index2.js')}}"></script>
    <!-- App JS -->
    <script src="{{asset('public/assets/js/app.js')}}"></script>

    	<!--Data Tables js-->
	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function () {
			//Default data table
			$('#example').DataTable();
			var table = $('#example2').DataTable({
				lengthChange: false,
				buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
			});
			table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
		});
	</script>
</body>

</html>
