<!DOCTYPE html>
<html lang="en">
<head>
    @include('../components/meta')
    <title>DHR | Recruiment Site</title>
</head>
<body>
    <!-- ====== START HEADER ====== -->
	@include('../components/header')
	<!-- ====== END HEADER ====== -->

    <!-- ====== START MAIN CONTENT -->
    @yield('main-content')
    <!-- ====== END MAIN CONTENT -->

    <!-- ====== START FOOTER ====== -->
	@include('../components/footer')
	<!-- ====== END FOOTER ====== -->

    <script src="../assets/js/bootstrap.js"></script>
</body>
</html>