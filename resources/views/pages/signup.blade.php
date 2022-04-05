@extends('layout.main')

@section('main-content')
	<!-- START SIGN UP -->
	<main class="signup-sec">
		<div class="container-lg">
			<section>
				<div class="m-auto  mt-lg-4">
					
					<div class="row">
						<div class="col-6 position-relative">
							<img src="../assets/imgs/singup/192-1923007_illustration-sign-up-illustration-png-transparent-png.png"  class="signup-img" alt="">
						</div>
						<div class="col-4 ms-5 pt-2">
							<form class="row g-3 needs-validation" novalidate>
								<div class="col-12">
									<h1 class="text-yellow fw-bold signup-hd">Sign Up</h1>
								</div>
								<div class="col-12 input-group flex-nowrap position-relative">
									<!-- <div class="position-absolute top-50 start-0 translate-middle-y ms-4" style="z-index: 999;">
										<i class="bi bi-envelope text-black-50"></i>
									</div> -->
									<input type="text" class="form-control" placeholder="Name" aria-label="email" aria-describedby="addon-wrapping">
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
								<div class="col-12 input-group flex-nowrap position-relative">
									<!-- <div class="position-absolute top-50 start-0 translate-middle-y ms-4" style="z-index: 999;">
										<i class="bi bi-lock text-black-50"></i>
									</div> -->
									<input type="password" class="form-control" placeholder="Confirm Password" aria-label="password" aria-describedby="addon-wrapping">
								</div>
								<div class="mb-3 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="keep-signed">
                                        <label class="form-check-label fs-sm" for="keep-signed">I agree to the Terms of Use and Privacy Policy</label>
                                    </div>
									<div class="mt-3 text-end"><a class="nav-link-style fs-ms mt-5" href="">Forgot password?</a></div>
                                </div>
								<a href="{{ route('dashboard') }}" class="btn btn-danger d-block w-100 rounded-pill" type="submit">Sign up</a>
								<!-- <p class="fs-sm pt-3 mb-0">Do you have an account? <a href="register.html" class="fw-medium" data-view="#modal-signup-view">Sign up</a></p> -->
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
	</main>
	<!-- END SIGN UP -->
@stop