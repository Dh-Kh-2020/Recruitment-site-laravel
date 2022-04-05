<title>DHR | Recruiment Site - Jobs List</title>
@extends('layout.main')

@section('main-content')
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
								<img src="../assets/imgs/jobs/SDF.png" class="d-inline-block shadow" style="width: 6.235385814497272vw; height: 6.235385814497272vw;" alt="">
							</div>
                            <h4 class="card-title text-dark fs-5 ps-3">FFA Site Supervisor</h3>
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
								<img src="../assets/imgs/jobs/FMF.png" class="d-inline-block shadow" style="width: 6.235385814497272vw; height: 6.235385814497272vw;" alt="">
							</div>
                            <h4 class="card-title text-dark fs-5 ps-3">M&E Assistant</h3>
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
								<img src="../assets/imgs/jobs/Nahdah-Makers.png" class="d-inline-block shadow" style="width: 6.235385814497272vw; height: 6.235385814497272vw;" alt="">
							</div>
                            <h4 class="card-title text-dark fs-5 ps-3">Finance Assistant</h3>
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
								<img src="../assets/imgs/jobs/MEDAIR.jpg" class="d-inline-block shadow" style="width: 6.235385814497272vw; height: 6.235385814497272vw;" alt="">
							</div>
                            <h4 class="card-title text-dark fs-5 ps-3">Comunication System Engineer</h3>
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
@stop