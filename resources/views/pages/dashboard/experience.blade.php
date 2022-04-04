<!DOCTYPE html>
<html lang="en">
<head>
    @include('../../components/dash-meta')
	<title>DHR</title>
</head>
<body class="sb-nav-fixed" style="background-color: #fff;">
    <!-- ====== START HEADER ====== -->
    @include('../../components/dash-header')
	<!-- ====== END HEADER ====== -->

    <!-- ====== START SIDEBAR  ====== -->
    <main>
        <div class="container-fluid mt-5">
            <div class="row">
                <!-- Dashboard Section -->
                @include('../../components/dash-aside')

                <!-- Content Section -->
                <section class="col-lg-8 col-md-8 col-12 mt-5">
                    <div class="p-3">
                        <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
                            <h1 class="fs-3 fw-bold text-warning">Experiences</h1>
                            <a role="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus fw-bold fs-3 text-blue"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- single experience -->
                                <div class="col-12 mb-5">
                                    <div class=" shadow-sm p-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href=""><h4 class="text-blue">Full stack web development with RCA foundation</h4></a>
                                            <div>
                                                <button class="btn p-0" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square text-blue"></i></button>
                                                <button class="btn p-0 m-2" data-bs-toggle="modal" data-bs-target="#delete"><i class="bi bi-trash text-danger"></i></button>
                                            </div>
                                        </div>
                                        <div class="">
                                            <a href="detailsExp.html" class="text-black-50 fs-6 d-flex flex-column">
                                                <span>
                                                    Taiz - Republic of Yemen | 2021.
                                                </span>
                                                <hr>
                                                <p>
                                                    The RCA workers must adhere to the values and principles outlined in SDF Way - Standards for Professional Conduct. These are Integrity, Service, Accountability, and Equity. In accordance with these values, the SDF operates and enforces policies on Beneficiary Protection from Exploitation and Abuse, Child Safeguarding, Anti Workplace Harassment, Fiscal Integrity Anti-Retaliation, and Combating Trafficking in Persons.
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <!-- Modal Edit Image Profile -->
    <div class="modal fade" id="editImg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Change Your Image</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 needs-validation" novalidate>
                        <!-- Job details -->
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning text-muted">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== END SIDEBAR ====== -->

	<script src="../../assets/js/bootstrap.js"></script>
	<script src="../../assets/js/jquery-3.6.0.min.js"></script>
</body>
</html>