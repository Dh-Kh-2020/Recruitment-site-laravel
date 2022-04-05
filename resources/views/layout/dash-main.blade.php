<!DOCTYPE html>
<html lang="en">
<head>
    @include('../components/dash-meta')
	<!-- <title>DHR | Admin | Recruitment</title> -->
</head>
<body class="sb-nav-fixed" style="background-color: #fff;">
    <!-- ====== START HEADER ====== -->
    @include('../components/dash-header')
	<!-- ====== END HEADER ====== -->

    <!-- ====== START SIDEBAR  ====== -->
    <main>
        <div class="container-fluid mt-5">
            <div class="row">
                <!-- Dashboard Section -->
                @include('../components/dash-aside')
                
                <!-- Content Section -->
                @yield('dash-main-content')
            </div>
        </div>
    </main>

    <!-- 
        <div class="col-12 d-flex justify-content-center align-items-center p-4 position-relative">
            <img src="../../assets/imgs/profile/computer-icons-icon-design-user-female-png-favpng-Fsujht93KTGPZWpH8vs1JxSwb.png" width="50%" class="img-fluid rounded-circle" alt="">
            <a role="button" data-bs-toggle="modal" data-bs-target="#editImg" class="position-absolute bg-white
                border border-primary rounded d-flex justify-content-center align-items-lg-center rounded-circle" 
                style="bottom: 10%;left: 35%; width: 30px;height: 30px;">
                <i class="bi bi-pencil-square"></i>
            </a>
        </div>
    -->

    <!-- ====== END SIDEBAR ====== -->

	<script src="../../assets/js/bootstrap.js"></script>
	<script src="../../assets/js/jquery-3.6.0.min.js"></script>
</body>
</html>