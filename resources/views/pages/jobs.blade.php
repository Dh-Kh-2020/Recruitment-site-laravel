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
<body class="bg-light">
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
						<a class="nav-link nav-a1-li" href="{{route('about')}}">about us</a>
					</li>

					<li class="nav-item">
						<a class="nav-link nav-a2-li" href="{{route('contact')}}">contact us</a>
					</li>

					<li class="nav-item">
						<a class="nav-link nav-a3-li" href="{{route('services')}}">our services</a>
					</li>
				</ul>

				<!-- ====== LOGIN AND SIGNUP ====== -->
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-5 ul-nav-reg">
					<li class="nav-item">
						<a class="nav-link nav-log-li" href="{{route('login')}}">login</a>
					</li>
				
					<li class="nav-item">
						<a class="nav-link nav-sign-li" href="{{route('register')}}">signup</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- ====== END HEADER ====== -->

	<!-- ====== START BANNER ====== -->
	<section class="container-fluid d-flex justify-content-center">
		<div class="mt-5 position-relative w-100">
			<img src="../assets/imgs/slider/360_F_301295590_on7UxR8haUeeXtzhP3Y3C2QQZIo8TfB8.png" class="w-100" style="height: 25vw;" alt="">
			<h1 class="in-jobs-banner text-secondary">find career</h1>
			<!-- === START FILTER === -->
			<div>
				<div class="container filt-frm-cont">
					<!-- <form action="" class="d-flex justify-content-center serch-frm">
						<div> -->
							<!-- <input class="form-control" id="myInput" type="text" placeholder="Search Job ..."> -->
						<!-- </div>
					</form> -->
					<select name="compony" id="compony_id">
						<option value="com_val">SFD</option>
						<option value="com_val">FMF</option>
						<option value="com_val">NMO</option>
						<option value="com_val">MEDAIR</option>
					</select>
					<select name="category" id="category_id">
						<option value="cat_val">Humanity</option>
						<option value="cat_val">Medical</option>
						<option value="cat_val">Engineer</option>
						<option value="cat_val">Sociality</option>
					</select>
					<select name="location" id="location_id">
						<option value="loc_val">Multible citys</option>
						<option value="loc_val">Lahij</option>
						<option value="loc_val">Aden</option>
						<option value="loc_val">Shabwah</option>
					</select>
				</div>
			</div>
			<!-- === START FILTER === -->
		</div>
	</section>
	<!-- ====== END BANNER ====== -->

	<!-- ====== START JOBS ====== -->
	<main>
        <div class="container">
            <div class="row">
				<!-- ADS -->
				<!-- <section id="myTable"> -->
                    <article class="col-md-5 col-sm-12 col-xs-12 card p-3 pe-5 shadow mb-3 mx-auto">
                        <header class="d-flex justify-content-start align-items-center">
							<div class="d-inline-block px-1">
								<a href=""><img src="../assets/imgs/jobs/SDF.png" class="d-inline-block shadow" style="width: 6.235385814497272vw; height: 6.235385814497272vw;" alt=""></a>
							</div>
                            <a href=""><h4 class="card-title text-dark fs-5 ps-3">FFA Site Supervisor</h3></a>
                        </header>
                        <div class="card-body">
                            <div class="row card-link d-flex align-items-center justify-content-between">
                                <div class="col-10 fs-8 d-flex flex-column">
									<div class="d-inline-block px-1">
                                        <span class="fw-bold text-blue">Category:</span> <span class="text-black-50">humanity</span>
                                    </div>
									<div class="d-inline-block px-1">
                                        <span class="fw-bold text-blue">Location:</span> <span class="text-black-50">Multible Cities | Yemen</span>
                                    </div>
									<div class="d-inline-block px-1">
                                        <span class="fw-bold text-black-50">Full-time | </span> <span class="text-red fw-bold">1500$</span>
                                    </div>
									<div class="d-inline-block px-1">
                                        <span class="text-red">Deadline: 01 Mar. 2022</span>
                                    </div>
								</div>
                                <div class="col-2 text-end">
                                    <a href="{{route('jobDetails')}}" class="text-blue">
										<button class="btn btn-outline-primary btn-small btn-block mx-auto">Details</button>
									</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-5 col-sm-12 col-xs-12 card p-3 pe-5 shadow mb-3 mx-auto">
                        <header class="d-flex justify-content-start align-items-center">
							<div class="d-inline-block px-1">
								<a href=""><img src="../assets/imgs/jobs/FMF.png" class="d-inline-block shadow" style="width: 6.235385814497272vw; height: 6.235385814497272vw;" alt=""></a>
							</div>
                            <a href=""><h4 class="card-title text-dark fs-5 ps-3">M&E Assistant</h3></a>
                        </header>
                        <div class="card-body">
                            <div class="row card-link d-flex align-items-center justify-content-between">
                                <div class="col-10 fs-8 d-flex flex-column">
									<div class="d-inline-block px-1">
                                        <span class="fw-bold text-blue">Category:</span> <span class="text-black-50">medical</span>
                                    </div>
									<div class="d-inline-block px-1">
                                        <span class="fw-bold text-blue">Location:</span> <span class="text-black-50">Shabwah | Yemen</span>
                                    </div>
									<div class="d-inline-block px-1">
                                        <span class="fw-bold text-black-50">Part-time | </span> <span class="text-red fw-bold">700$</span>
                                    </div>
									<div class="d-inline-block px-1">
                                        <span class="text-red">Deadline: 01 Mar. 2022</span>
                                    </div>
								</div>
                                <div class="col-2 text-end">
                                    <a href="{{route('jobDetails')}}" class="text-blue">
										<button class="btn btn-outline-primary btn-small btn-block mx-auto">Details</button>
									</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-5 col-sm-12 col-xs-12 card p-3 pe-5 shadow mb-3 mx-auto">
                        <header class="d-flex justify-content-start align-items-center">
							<div class="d-inline-block px-1">
								<a href=""><img src="../assets/imgs/jobs/Nahdah-Makers.png" class="d-inline-block shadow" style="width: 6.235385814497272vw; height: 6.235385814497272vw;" alt=""></a>
							</div>
                            <a href=""><h4 class="card-title text-dark fs-5 ps-3">Finance Assistant</h3></a>
                        </header>
                        <div class="card-body">
                            <div class="row card-link d-flex align-items-center justify-content-between">
                                <div class="col-10 fs-8 d-flex flex-column">
									<div class="d-inline-block px-1">
                                        <span class="fw-bold text-blue">Category:</span> <span class="text-black-50">sociality</span>
                                    </div>
									<div class="d-inline-block px-1">
                                        <span class="fw-bold text-blue">Location:</span> <span class="text-black-50">Aden | Yemen</span>
                                    </div>
									<div class="d-inline-block px-1">
                                        <span class="fw-bold text-black-50">Part-time | </span> <span class="text-red fw-bold">500$</span>
                                    </div>
									<div class="d-inline-block px-1">
                                        <span class="text-red">Deadline: 01 Mar. 2022</span>
                                    </div>
								</div>
                                <div class="col-2 text-end">
                                    <a href="{{route('jobDetails')}}" class="text-blue">
										<button class="btn btn-outline-primary btn-small btn-block mx-auto">Details</button>
									</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-5 col-sm-12 col-xs-12 card p-3 pe-5 shadow mb-3 mx-auto">
                        <header class="d-flex justify-content-start align-items-center">
							<div class="d-inline-block px-1">
								<a href=""><img src="../assets/imgs/jobs/MEDAIR.jpg" class="d-inline-block shadow" style="width: 6.235385814497272vw; height: 6.235385814497272vw;" alt=""></a>
							</div>
                            <a href=""><h4 class="card-title text-dark fs-5 ps-3">Comunication System Engineer</h3></a>
                        </header>
                        <div class="card-body">
                            <div class="row card-link d-flex align-items-center justify-content-between">
                                <div class="col-10 fs-8 d-flex flex-column">
									<div class="d-inline-block px-1">
                                        <span class="fw-bold text-blue">Category:</span> <span class="text-black-50">enigneer</span>
                                    </div>
									<div class="d-inline-block px-1">
                                        <span class="fw-bold text-blue">Location:</span> <span class="text-black-50">Lahij | Yemen</span>
                                    </div>
									<div class="d-inline-block px-1">
                                        <span class="fw-bold text-black-50">Full-time | </span> <span class="text-red fw-bold">1525$</span>
                                    </div>
									<div class="d-inline-block px-1">
                                        <span class="text-red">Deadline: 01 Mar. 2022</span>
                                    </div>
								</div>
                                <div class="col-2 text-end">
                                    <a href="{{route('jobDetails')}}" class="text-blue">
										<button class="btn btn-outline-primary btn-small btn-block mx-auto">Details</button>
									</a>
                                </div>
                            </div>
                        </div>
                    </article>

					<!-- ==== Start Nav Buttons ==== -->
					<div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link text-blue" href="#">1</a></li>
                                <li class="page-item"><a class="page-link text-blue" href="#">2</a></li>
                                <li class="page-item"><a class="page-link text-blue" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link text-blue" href="">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
					<!-- ==== End Nav Buttons ==== -->
                <!-- </section> -->
            </div>
        </div>
    </main>
	<!-- ====== END JOBS ====== -->

	<!-- ====== START FOOTER ====== -->
	<footer class="bg-light mt-5 footer-border">
		<!-- <div class="mx-auto"> -->
			<p class="text-center pt-4 fs-6 text-black-50">DHR is a legal entity registered under the laws of the Republic of Yemen. All rights reserved- Dhr.com &copy; 2022</p>
		<!-- </div> -->
	</footer>
	<!-- ====== END FOOTER ====== -->

	<script src="../assets/js/bootstrap.js"></script>
	<script>
		
	</script>
</body>
</html>