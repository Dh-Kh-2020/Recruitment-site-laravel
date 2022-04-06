<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="../../assets/" data-template="vertical-menu-template-semi-dark">
<head>
	<title>Edit a Role - Pages | Admin Dashboard</title>
    @include('../components/admin-meta')	
</head>
<body>
	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-content-navbar  ">
		<div class="layout-container">

			<!-- Aside Menu -->
			@include('../components/admin-aside')	
			<!-- /Aside Menu -->

			<!-- Layout container -->
			<div class="layout-page">

				<!-- Navbar -->
				@include('../components/admin-nav')	
				<!-- / Navbar -->

				<!-- Content wrapper -->
				<div class="content-wrapper">

                    <!-- Content -->
					@yield('admin-main-content')
					<!-- / Content -->

					<!-- Footer -->
					@include('../components/admin-footer')
					<!-- / Footer -->

					<div class="content-backdrop fade"></div>
				</div>
				<!-- Content wrapper -->
			</div>
			<!-- Layout container -->

			<!-- Overlay -->
			<div class="layout-overlay layout-menu-toggle"></div>

			<!-- Drag Target Area To SlideIn Menu On Small Screens -->
			<div class="drag-target"></div>
		</div>
	</div>
    <!-- / Layout wrapper -->

	<!-- Core JS -->
	@include('../components/admin-core-scripts')	
	<!-- /Core JS -->
</body>
</html>
