<!doctype html>
<html lang="en">
<head>
	@include('includes.style')
</head>
<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		@include('includes.sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
		@include('includes.header')
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
		@yield('content')
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> 
		<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!-- Start footer -->
		@include('includes.footer')
		<!-- End footer -->
	</div>
	<!--end wrapper-->
	<!-- Start include js -->
	@include('includes.script')
    <!-- End include js -->
</body>
</html>