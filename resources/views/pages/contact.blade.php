<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/bootstrap-grid.css">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="../assets/css/master.css">

	<title>DHR</title>
</head>
<body> <!-- class="about bg-light" -->
	<!-- ====== START HEADER ====== -->
	<header class="navbar navbar-expand-lg navbar-light bg-light container-fluid hd">
		<div class="container">
			<!-- ====== BRAND ====== -->
			<a class="navbar-brand ms-9 brand" href="{{ route('home') }}">d<span class="worning">hr</span></a>

			<!-- ====== BURGER BUTTON | RESPONSIVE ====== -->
			<button class="navbar-toggler burger-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- ====== NAVIGATION BAR ====== -->
			<nav class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-5 ul-nav">
					<li class="nav-item">
						<a class="nav-link active nav-a1-li" aria-current="page" href="{{ route('home') }}">home</a>
					</li>

					<li class="nav-item">
						<a class="nav-link nav-a2-li" href="{{ route('jobs') }}">jobs</a>
					</li>
				
					<li class="nav-item">
						<a class="nav-link nav-a3-li" href="{{ route('partners') }}">partners</a>
					</li>

					<li class="nav-item">
						<a class="nav-link nav-a1-li" href="{{ route('about') }}">about us</a>
					</li>

					<li class="nav-item">
						<a class="nav-link nav-a2-li" href="{{ route('contact') }}">contact us</a>
					</li>

					<li class="nav-item">
						<a class="nav-link nav-a3-li" href="{{ route('services') }}">our services</a>
					</li>
				</ul>

				<!-- ====== LOGIN AND SIGNUP ====== -->
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-5 ul-nav-reg">
					<li class="nav-item">
						<a class="nav-link nav-log-li" href="{{ route('login') }}">login</a>
					</li>
				
					<li class="nav-item">
						<a class="nav-link nav-sign-li" href="{{ route('register') }}">signup</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- ====== END HEADER ====== -->

	<!-- ====== START ABOUT ====== -->
	<main>
		<div class="mt-5 pt-5 text-center">
			<h1 class="fw-bold fs-1">
				<!-- <span class="about-h1-spn">About</span>  
				<span class="about-h1-spn">Us</span>  -->
				<span class="about-h1-spn text-dark">AT WORK</span>
			</h1>
		</div>
	</main>
	<!-- ====== END ABOUT ====== -->

	<!-- ====== START FOOTER ====== -->
	<!-- <footer class="bg-light footer-border" style="bottom: 0vw;">
		<div class="mx-auto">
			<p class="text-center pt-4 fs-6 text-black-50">DHR is a legal entity registered under the laws of the Republic of Yemen. All rights reserved- Dhr.com &copy; 2022</p>
		</div>
	</footer> -->
	<!-- ====== END FOOTER ====== -->

	<script src="../assets/js/bootstrap.js"></script>
	<script>
		
	</script>
</body>
</html>