@extends('layout.main')

@section('main-content')
	<!-- ====== START IMAGE SLIDER ====== -->
	<section id="carouselExampleControls" class="carousel slide sec-pos" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assets/imgs/slider/london-business-meeting-in-progress.jpg" class="d-block w-100 img-slider" alt="...">
			</div>
			<div class="carousel-item">
				<img src="assets/imgs/slider/iStock-143917882-e1600890386495-916x515.jpg" class="d-block w-100 img-slider" alt="...">
			</div>
			<!-- <div class="carousel-item">
				<img src="..." class="d-block w-100" alt="...">
			</div> -->
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>

		<!-- SEARCH FORM -->
		<div class="container serch-frm-cont">
			<h1 class="mx-auto">
				FIND JOB AND SET YOUR CAREER
			</h1>
			<p class="mx-auto">
				DHR, the largest recruitment site in the middle east.
			</p>
			<form action="" class="d-flex justify-content-center serch-frm">
				<div>
					<input type="search" class="form-control" id="exampleInputPassword1" placeholder="Search job">
				</div>
				<button type="submit" class="btn btn-danger" style="opacity: 70%;">Search Job</button>
			</form>
		</div>
	</section>
	<!-- ====== END IMAGE SLIDER ====== -->

	<!-- ====== START JOBS ====== -->
	<section class="container-lg pt-5">
		<div class="row">
			<!-- Last Job Section -->
			<section class="col-12">
				<div class="d-flex justify-content-center mb-lg-4">
					<!-- <h1 class="text-warning fw-bold d-inline-block">Vacancies <span class="text-dark"> Await You</span></h1> -->
					<h1 class="text-warning fw-bold d-inline-block">Last <span class="text-dark">Jobs</span></h1>
				</div>
				<div class="row">
					<!-- Job card -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-4">
						<a href="{{ route('jobDetails') }}" style="text-decoration: none;">
						<article class="card p-2 crd-bd">
							<div class="p-1 rounded d-flex justify-content-center co-logo shadow-sm mt-2">
								<img class="card-img-top mx-auto" src="assets/imgs/jobs/SDF.png" alt="">
							</div>	
							<div class="card-body p-md-2">
								<div class="px-2">
									<h3 class="mb-0"><a class="text-yellow fs-4" href="">SDF</a></h3>
									<p class="fs-8 text-black-50 mb-0">Multible Cities | Yemen</p>
								</div>
								<div class="mt-2">
									<h1 class="fs-6 fw-bold mb-0">FFA Site Supervisor</h1>
									<span class="fw-bold text-muted">Full-time</span>
								</div>
								<div class="my-2">
									<p class="fw-light fs-6 text-black-50">Responsible for supervising the project activities, and completing the handover process.</p>
								</div>
								<div class="d-flex justify-content-between align-items-center card-bottom">
									<span class="fs-5 fw-bold text-red">$1500</span><span class="text-black-50 fw-bold">|month</span>
									<button type="button" class="btn text-blue">Apply Now</button>
								</div>
							</div>
						</article>
						</a>
					</div>
					<!-- Job card -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-4">
						<a href="{{ route('jobDetails') }}" style="text-decoration: none;">
						<article class="card p-2 crd-bd">
							<div class="p-1 rounded d-flex justify-content-center co-logo shadow-sm mt-2">
								<img class="card-img-top mx-auto" src="assets/imgs/jobs/FMF.png" alt="">
							</div>	
							<div class="card-body p-md-2">
								<div class="px-2">
									<h3 class="mb-0"><a class="text-yellow fs-4" href="#">FMF</a></h3>
									<p class="fs-8 text-black-50 mb-0">Shabwah | Yemen</p>
								</div>
								<div class="mt-2">
									<h1 class="fs-6 fw-bold mb-0">M&E Assistant</h1>
									<span class="fw-bold text-muted">Part-time</span>
								</div>
								<div class="my-2">
									<!-- <p class="fw-light fs-6 text-black-50">A non-profit and non-governmental organization aiming to provide health, nutrition, food security and protection services.</p> -->
									<p class="fw-light fs-6 text-black-50">Responsible for supervising the project activities, and completing the handover process.</p>
								</div>
								<div class="d-flex justify-content-between align-items-center card-bottom">
									<span class="fs-5 fw-bold text-red">$700</span><span class="text-black-50 fw-bold">|month</span>
									<button type="button" class="btn text-blue">Apply Now</button>
								</div>
							</div>
						</article>
						</a>
					</div>
					<!-- Job card -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-4">
						<a href="{{ route('jobDetails') }}" style="text-decoration: none;">
						<article class="card p-2 crd-bd">
							<div class="p-1 rounded d-flex justify-content-center co-logo shadow-sm mt-2">
								<img class="card-img-top mx-auto" src="assets/imgs/jobs/Nahdah-Makers.png" alt="">
							</div>	
							<div class="card-body p-md-2">
								<div class="px-2">
									<h3 class="mb-0"><a class="text-yellow fs-4" href="#">NMO</a></h3>
									<p class="fs-8 text-black-50 mb-0">Aden | Yemen</p>
								</div>
								<div class="mt-2">
									<h1 class="fs-6 fw-bold mb-0">Finance Assistant</h1>
									<span class="fw-bold text-muted">Part-time</span>
								</div>
								<div class="my-2">
									<!-- <p class="fw-light fs-6 text-black-50">Our mission is to take the lead to empower communities in Yemen through humanitarian response and sustainable development programs.</p> -->
									<p class="fw-light fs-6 text-black-50">Responsible for supervising the project activities, and completing the handover process.</p>
								</div>
								<div class="d-flex justify-content-between align-items-center card-bottom">
									<span class="fs-5 fw-bold text-red">$500</span><span class="text-black-50 fw-bold">|month</span>
									<button type="button" class="btn text-blue">Apply Now</button>
								</div>
							</div>
						</article>
						</a>
					</div>
					<!-- Job card -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4">
						<a href="{{ route('jobDetails') }}" style="text-decoration: none;">
						<article class="card p-2 crd-bd">
							<div class="p-1 rounded d-flex justify-content-center co-logo shadow-sm mt-2">
								<img class="card-img-top mx-auto" src="assets/imgs/jobs/MEDAIR.jpg" alt="">
							</div>	
							<div class="card-body p-md-2">
								<div class="px-2">
									<h3 class="mb-0"><a class="text-yellow fs-4" href="#">MEDAIR</a></h3>
									<p class="fs-8 text-black-50 mb-0">Lahij | Yemen</p>
								</div>
								<div class="mt-2">
									<h1 class="fs-6 fw-bold mb-0">Community Health Assistant</h1>
									<span class="fw-bold text-muted">Full-time</span>
								</div>
								<div class="my-2">
									<!-- <p class="fw-light fs-6 text-black-50">Facilitates and assists in the implementation of essential health and nutrition assistance to vulnerable and conflict affected communities in Yemen. </p> -->
									<p class="fw-light fs-6 text-black-50">Responsible for supervising the project activities, and completing the handover process.</p>
								</div>
								<div class="d-flex justify-content-between align-items-center card-bottom">
									<span class="fs-5 fw-bold text-red">$1525</span><span class="text-black-50 fw-bold">|month</span>
									<button type="button" class="btn text-blue">Apply Now</button>
								</div>
							</div>
						</article>
						</a>
					</div>
				</div>
				<div class="row">
					<!-- Job card -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4">
						<a href="pages/jobDetails.html" style="text-decoration: none;">
						<article class="card p-2 crd-bd">
							<div class="p-1 rounded d-flex justify-content-center co-logo shadow-sm mt-2">
								<img class="card-img-top mx-auto" src="assets/imgs/jobs/SDF.png" alt="">
							</div>	
							<div class="card-body p-md-2">
								<div class="px-2">
									<h3 class="mb-0"><a class="text-yellow fs-4" href="#">SDF</a></h3>
									<p class="fs-8 text-black-50 mb-0">Multible Cities | Yemen</p>
								</div>
								<div class="mt-2">
									<h1 class="fs-6 fw-bold mb-0">FFA Site Supervisor</h1>
									<span class="fw-bold text-muted">Full-time</span>
								</div>
								<div class="my-2">
									<p class="fw-light fs-6 text-black-50">Responsible for supervising the project activities, and completing the handover process.</p>
								</div>
								<div class="d-flex justify-content-between align-items-center card-bottom">
									<span class="fs-5 fw-bold text-red">$1500</span><span class="text-black-50 fw-bold">|month</span>
									<button type="button" class="btn text-blue">Apply Now</button>
								</div>
							</div>
						</article>
						</a>
					</div>
					<!-- Job card -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4">
						<a href="pages/jobDetails.html" style="text-decoration: none;">
						<article class="card p-2 crd-bd">
							<div class="p-1 rounded d-flex justify-content-center co-logo shadow-sm mt-2">
								<img class="card-img-top mx-auto" src="assets/imgs/jobs/FMF.png" alt="">
							</div>	
							<div class="card-body p-md-2">
								<div class="px-2">
									<h3 class="mb-0"><a class="text-yellow fs-4" href="#">FMF</a></h3>
									<p class="fs-8 text-black-50 mb-0">Shabwah | Yemen</p>
								</div>
								<div class="mt-2">
									<h1 class="fs-6 fw-bold mb-0">M&E Assistant</h1>
									<span class="fw-bold text-muted">Part-time</span>
								</div>
								<div class="my-2">
									<!-- <p class="fw-light fs-6 text-black-50">A non-profit and non-governmental organization aiming to provide health, nutrition, food security and protection services.</p> -->
									<p class="fw-light fs-6 text-black-50">Responsible for supervising the project activities, and completing the handover process.</p>
								</div>
								<div class="d-flex justify-content-between align-items-center card-bottom">
									<span class="fs-5 fw-bold text-red">$700</span><span class="text-black-50 fw-bold">|month</span>
									<button type="button" class="btn text-blue">Apply Now</button>
								</div>
							</div>
						</article>
						</a>
					</div>
					<!-- Job card -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4">
						<a href="pages/jobDetails.html" style="text-decoration: none;">
						<article class="card p-2 crd-bd">
							<div class="p-1 rounded d-flex justify-content-center co-logo shadow-sm mt-2">
								<img class="card-img-top mx-auto" src="assets/imgs/jobs/Nahdah-Makers.png" alt="">
							</div>	
							<div class="card-body p-md-2">
								<div class="px-2">
									<h3 class="mb-0"><a class="text-yellow fs-4" href="#">NMO</a></h3>
									<p class="fs-8 text-black-50 mb-0">Aden | Yemen</p>
								</div>
								<div class="mt-2">
									<h1 class="fs-6 fw-bold mb-0">Finance Assistant</h1>
									<span class="fw-bold text-muted">Part-time</span>
								</div>
								<div class="my-2">
									<!-- <p class="fw-light fs-6 text-black-50">Our mission is to take the lead to empower communities in Yemen through humanitarian response and sustainable development programs.</p> -->
									<p class="fw-light fs-6 text-black-50">Responsible for supervising the project activities, and completing the handover process.</p>
								</div>
								<div class="d-flex justify-content-between align-items-center card-bottom">
									<span class="fs-5 fw-bold text-red">$500</span><span class="text-black-50 fw-bold">|month</span>
									<button type="button" class="btn text-blue">Apply Now</button>
								</div>
							</div>
						</article>
						</a>
					</div>
					<!-- Job card -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4">
						<a href="pages/jobDetails.html" style="text-decoration: none;">
						<article class="card p-2 crd-bd">
							<div class="p-1 rounded d-flex justify-content-center co-logo shadow-sm mt-2">
								<img class="card-img-top mx-auto" src="assets/imgs/jobs/MEDAIR.jpg" alt="">
							</div>	
							<div class="card-body p-md-2">
								<div class="px-2">
									<h3 class="mb-0"><a class="text-yellow fs-4" href="#">MEDAIR</a></h3>
									<p class="fs-8 text-black-50 mb-0">Lahij | Yemen</p>
								</div>
								<div class="mt-2">
									<h1 class="fs-6 fw-bold mb-0">Community Health Assistant</h1>
									<span class="fw-bold text-muted">Full-time</span>
								</div>
								<div class="my-2">
									<!-- <p class="fw-light fs-6 text-black-50">Facilitates and assists in the implementation of essential health and nutrition assistance to vulnerable and conflict affected communities in Yemen. </p> -->
									<p class="fw-light fs-6 text-black-50">Responsible for supervising the project activities, and completing the handover process.</p>
								</div>
								<div class="d-flex justify-content-between align-items-center card-bottom">
									<span class="fs-5 fw-bold text-red">$1525</span><span class="text-black-50 fw-bold">|month</span>
									<button type="button" class="btn text-blue">Apply Now</button>
								</div>
							</div>
						</article>
						</a>
					</div>
				</div>
				<div class="row">
					<!-- Job card -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4">
						<a href="pages/jobDetails.html" style="text-decoration: none;">
						<article class="card p-2 crd-bd">
							<div class="p-1 rounded d-flex justify-content-center co-logo shadow-sm mt-2">
								<img class="card-img-top mx-auto" src="assets/imgs/jobs/SDF.png" alt="">
							</div>	
							<div class="card-body p-md-2">
								<div class="px-2">
									<h3 class="mb-0"><a class="text-yellow fs-4" href="#">SDF</a></h3>
									<p class="fs-8 text-black-50 mb-0">Multible Cities | Yemen</p>
								</div>
								<div class="mt-2">
									<h1 class="fs-6 fw-bold mb-0">FFA Site Supervisor</h1>
									<span class="fw-bold text-muted">Full-time</span>
								</div>
								<div class="my-2">
									<p class="fw-light fs-6 text-black-50">Responsible for supervising the project activities, and completing the handover process.</p>
								</div>
								<div class="d-flex justify-content-between align-items-center card-bottom">
									<span class="fs-5 fw-bold text-red">$1500</span><span class="text-black-50 fw-bold">|month</span>
									<button type="button" class="btn text-blue">Apply Now</button>
								</div>
							</div>
						</article>
						</a>
					</div>
					<!-- Job card -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4">
						<a href="pages/jobDetails.html" style="text-decoration: none;">
						<article class="card p-2 crd-bd">
							<div class="p-1 rounded d-flex justify-content-center co-logo shadow-sm mt-2">
								<img class="card-img-top mx-auto" src="assets/imgs/jobs/FMF.png" alt="">
							</div>	
							<div class="card-body p-md-2">
								<div class="px-2">
									<h3 class="mb-0"><a class="text-yellow fs-4" href="#">FMF</a></h3>
									<p class="fs-8 text-black-50 mb-0">Shabwah | Yemen</p>
								</div>
								<div class="mt-2">
									<h1 class="fs-6 fw-bold mb-0">M&E Assistant</h1>
									<span class="fw-bold text-muted">Part-time</span>
								</div>
								<div class="my-2">
									<!-- <p class="fw-light fs-6 text-black-50">A non-profit and non-governmental organization aiming to provide health, nutrition, food security and protection services.</p> -->
									<p class="fw-light fs-6 text-black-50">Responsible for supervising the project activities, and completing the handover process.</p>
								</div>
								<div class="d-flex justify-content-between align-items-center card-bottom">
									<span class="fs-5 fw-bold text-red">$700</span><span class="text-black-50 fw-bold">|month</span>
									<button type="button" class="btn text-blue">Apply Now</button>
								</div>
							</div>
						</article>
						</a>
					</div>
					<!-- Job card -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4">
						<a href="pages/jobDetails.html" style="text-decoration: none;">
						<article class="card p-2 crd-bd">
							<div class="p-1 rounded d-flex justify-content-center co-logo shadow-sm mt-2">
								<img class="card-img-top mx-auto" src="assets/imgs/jobs/Nahdah-Makers.png" alt="">
							</div>	
							<div class="card-body p-md-2">
								<div class="px-2">
									<h3 class="mb-0"><a class="text-yellow fs-4" href="#">NMO</a></h3>
									<p class="fs-8 text-black-50 mb-0">Aden | Yemen</p>
								</div>
								<div class="mt-2">
									<h1 class="fs-6 fw-bold mb-0">Finance Assistant</h1>
									<span class="fw-bold text-muted">Part-time</span>
								</div>
								<div class="my-2">
									<!-- <p class="fw-light fs-6 text-black-50">Our mission is to take the lead to empower communities in Yemen through humanitarian response and sustainable development programs.</p> -->
									<p class="fw-light fs-6 text-black-50">Responsible for supervising the project activities, and completing the handover process.</p>
								</div>
								<div class="d-flex justify-content-between align-items-center card-bottom">
									<span class="fs-5 fw-bold text-red">$500</span><span class="text-black-50 fw-bold">|month</span>
									<button type="button" class="btn text-blue">Apply Now</button>
								</div>
							</div>
						</article>
						</a>
					</div>
					<!-- Job card -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4">
						<a href="pages/jobDetails.html" style="text-decoration: none;">
						<article class="card p-2 crd-bd">
							<div class="p-1 rounded d-flex justify-content-center co-logo shadow-sm mt-2">
								<img class="card-img-top mx-auto" src="assets/imgs/jobs/MEDAIR.jpg" alt="">
							</div>	
							<div class="card-body p-md-2">
								<div class="px-2">
									<h3 class="mb-0"><a class="text-yellow fs-4" href="#">MEDAIR</a></h3>
									<p class="fs-8 text-black-50 mb-0">Lahij | Yemen</p>
								</div>
								<div class="mt-2">
									<h1 class="fs-6 fw-bold mb-0">Community Health Assistant</h1>
									<span class="fw-bold text-muted">Full-time</span>
								</div>
								<div class="my-2">
									<!-- <p class="fw-light fs-6 text-black-50">Facilitates and assists in the implementation of essential health and nutrition assistance to vulnerable and conflict affected communities in Yemen. </p> -->
									<p class="fw-light fs-6 text-black-50">Responsible for supervising the project activities, and completing the handover process.</p>
								</div>
								<div class="d-flex justify-content-between align-items-center card-bottom">
									<span class="fs-5 fw-bold text-red">$1525</span><span class="text-black-50 fw-bold">|month</span>
									<button type="button" class="btn text-blue">Apply Now</button>
								</div>
							</div>
						</article>
						</a>
					</div>
				</div>
				<!-- <div class="row">
					<div class="d-flex justify-content-center my-4">
						<a class="btn btn-outline-primary rounded-pill text-capitalize">find more job</a>
					</div>
				</div> -->
			</section>
		</div>
	</section>
	<!-- ====== END JOBS ====== -->

	<section class="container-fluid mt-5 patners-sec">
		<div class="row">
			<!-- ====== START PARTNERS ====== -->
			<div class="col-7">
				<h1 class="h1 mt-5 text-center">Our Partners</h1>
				<div class="row text-center mt-3 img-div">
					<a href="https://www.teleperformance.com/" class="col">
						<img src="assets/imgs/partners/tp-compony.PNG" class="mt-3 ms-2 me-2" alt="">
					</a>
					<a href="https://www.samsung.com/ae/" class="col">
						<img src="assets/imgs/partners/samsung.PNG" class="mt-3 ms-2 me-2" alt="">
					</a>
					<a href="https://www.qnb.com/sites/qnb/qnbqatar/page/ar/ar-home.html" class="col">
						<img src="assets/imgs/partners/qatar-international-bank.PNG" class="mt-3 ms-2 me-2" alt="">
					</a>
				</div>
				<div class="row text-center mt-3 img-div">
					<a href="https://www.nbk.com/" class="col">
						<img src="assets/imgs/partners/nbk.PNG" class="mt-3 ms-2 me-2" alt="">
					</a>
					<a href="https://www.qf.org.qa/" class="col">
						<img src="assets/imgs/partners/qatar-foundation.PNG" class="mt-3 ms-2 me-2" alt="">
					</a>
					<a href="https://www.lukoil.com/" class="col">
						<img src="assets/imgs/partners/lukoil.PNG" class="mt-3 ms-2 me-2" alt="">
					</a>
				</div>
				<div class="row text-center mt-3 img-div mb-5">
					<a href="https://www.riteaid.com" class="col">
						<img src="assets/imgs/partners/rite-aid.PNG" class="mt-3 ms-2 me-2" alt="">
					</a>
					<a href="https://www.biglots.com/" class="col">
						<img src="assets/imgs/partners/big-lots.PNG" class="mt-3 ms-2 me-2" alt="">
					</a>
					<a href="https://www.biglots.com/" class="col">
						<img src="assets/imgs/partners/cocacola.PNG" class="mt-3 ms-2 me-2" alt="">
					</a>
				</div>
			</div>
			<!-- ====== END PARTNERS ====== -->

			<!-- ====== START ADVERTISEMENT ====== -->
			<div id="carouselExampleSlidesOnly" class="carousel slide col mt-5 me-5" data-bs-ride="carousel">
				<div class="carousel-inner mt-5">
					<div class="carousel-item active border">
						<img src="assets/imgs/advertisments/20-Inch-TV-Smart-LED-2K-HD-Televisions-with-Plastic-Flat-Screen-Panel-TV-for-Hotel-TV-Factory-Sale-Payments-Available.jpg" class="d-block w-100 adv-img" alt="...">
					</div>
					<div class="carousel-item border">
						<img src="assets/imgs/advertisments/LG-1.jpg" class="d-block w-100 adv-img" alt="...">
					</div>
					<div class="carousel-item border">
						<img src="assets/imgs/advertisments/Apple_iPhone-11-Pro.jpg" class="d-block w-100 adv-img" alt="...">
					</div>
				</div>
			</div>
			<!-- ====== END ADVERTISEMENT ====== -->
		</div>
	</section>
@stop