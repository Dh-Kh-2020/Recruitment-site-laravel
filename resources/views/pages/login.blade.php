<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-grid.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="../assets/css/master.css">

	<title>DHR</title>
</head>
<body>
	<!-- ====== START HEADER ====== -->
	<header class="navbar navbar-expand-lg navbar-light bg-light container-fluid hd">
		<div class="container">
			<!-- ====== BRAND ====== -->
			<a class="navbar-brand ms-9 brand" href="../index.html">d<span class="worning">hr</span></a>

			<!-- ====== BURGER BUTTON | RESPONSIVE ====== -->
			<button class="navbar-toggler burger-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- ====== NAVIGATION BAR ====== -->
			<nav class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-5 ul-nav">
					<li class="nav-item">
						<a class="nav-link active nav-a1-li" aria-current="page" href="../index.html">home</a>
					</li>

					<li class="nav-item">
						<a class="nav-link nav-a2-li" href="jobs.html">jobs</a>
					</li>
				
					<li class="nav-item">
						<a class="nav-link nav-a3-li" href="partners.html">partners</a>
					</li>

					<li class="nav-item">
						<a class="nav-link nav-a1-li" href="about.html">about us</a>
					</li>

					<li class="nav-item">
						<a class="nav-link nav-a2-li" href="contact.html">contact us</a>
					</li>

					<li class="nav-item">
						<a class="nav-link nav-a3-li" href="services.html">our services</a>
					</li>
				</ul>

				<!-- ====== LOGIN AND SIGNUP ====== -->
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-5 ul-nav-reg">
					<li class="nav-item">
						<a class="nav-link nav-log-li" href="login.html">login</a>
					</li>
				
					<li class="nav-item">
						<a class="nav-link nav-sign-li" href="signup.html">signup</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- ====== END HEADER ====== -->

	<!-- START LOG IN -->
	<main class="signup-sec">
		<div class="container-lg">
			<section>
				<div class="m-auto  mt-lg-4">
					
					<div class="row">
						<div class="col-6 position-relative">
							<img src="../assets/imgs/singup/192-1923007_illustration-sign-up-illustration-png-transparent-png.png"  class="signup-img" alt="">
						</div>
						<div class="col-4 ms-5 pt-5">
							<form class="row g-3 needs-validation" novalidate>
								<div class="col-12">
									<h1 class="text-yellow fw-bold signup-hd">Log In</h1>
								</div>
								<div class="col-12 input-group flex-nowrap position-relative">
									<!-- <div class="position-absolute top-50 start-0 translate-middle-y ms-4" style="z-index: 999;">
										<i class="bi bi-envelope text-black-50"></i>
									</div> -->
									<input type="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="addon-wrapping">
								</div>
								<div class="col-12 input-group flex-nowrap position-relative">
									<!-- <div class="position-absolute top-50 start-0 translate-middle-y ms-4" style="z-index: 999;">
										<i class="bi bi-lock text-black-50"></i>
									</div> -->
									<input type="password" class="form-control" placeholder="Password" aria-label="password" aria-describedby="addon-wrapping">
								</div>
								<div class="mb-3 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="keep-signed">
                                        <label class="form-check-label fs-sm" for="keep-signed">I agree to the Terms of Use and Privacy Policy</label>
                                    </div>
									<div class="mt-3 text-end"><a class="nav-link-style fs-ms mt-5" href="">Forgot password?</a></div>
                                </div>
								<a href="dashboard/dashboard.html" class="btn btn-danger d-block w-100 rounded-pill" type="submit">Sign in</a>
								<p class="fs-sm pt-3 mb-0">Do you have an account? <a href="signup.html" class="fw-medium" data-view="#modal-signup-view">Sign up</a></p>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
	</main>
	<!-- END LOG IN -->

	<script src="../assets/js/bootstrap.js"></script>
</body>
</html>