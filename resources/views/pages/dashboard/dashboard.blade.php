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
                            <!-- <h1 class="fs-3 fw-bold text-secondary">..</h1> -->
                            <a role="button" data-bs-toggle="modal" data-bs-target="#editInfo"><h1 class="fs-3 fw-bold text-secondary">...</h1></a>
                            <a role="button" data-bs-toggle="modal" data-bs-target="#addInfo"><i class="bi bi-plus fw-bold fs-3 text-secondary"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col bg-warning text-dark p-3 fw-bold" style="opacity: 60%;">Personal Info</div>
                            </div>
                            <div class="row">
                                <div class="col border text-dark p-3 fw-light">Name: Dhoha Khorasani</div>
                            </div>
                            <div class="row">
                                <div class="col border text-dark p-3 fw-light">Gender: famail</div>
                            </div>
                            <div class="row">
                                <div class="col border text-dark p-3 fw-light">Address: Taiz - Yemen</div>
                            </div>
                            <div class="row">
                                <div class="col border text-dark p-3 fw-light">Phone: 773965471</div>
                            </div>
                            <div class="row">
                                <div class="col border text-dark p-3 fw-light">Skills: HTML, CSS, Javascript, PHP</div>
                            </div>
                        </div>
                    </div>
                </section>
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

    <!-- Adding persolnal info madal -->
    <div class="modal fade" tabindex="-1" id="addInfo" aria-labelledby="infoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">Add Info.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <input type="text" class="p-2 w-100" placeholder="Add Information">
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
    </div>
    <!--  -->

    <!-- Editing persolnal info madal -->
    <div class="modal fade" tabindex="-1" id="editInfo" aria-labelledby="infoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">Change Info.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <input type="text" class="p-2 w-100" placeholder="Name" value="Dhoha Khorasani">
                    </div>
                    <div class="modal-body">
                    <input type="text" class="p-2 w-100" placeholder="Gender" value="female">
                    </div>
                    <div class="modal-body">
                    <input type="text" class="p-2 w-100" placeholder="Address" value="Taiz - Yemen">
                    </div>
                    <div class="modal-body">
                    <input type="text" class="p-2 w-100" placeholder="Phone" value="773065471">
                    </div>
                    <div class="modal-body">
                    <input type="text" class="p-2 w-100" placeholder="Skills" value="HTML, CSS, Javascript, PHP">
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
    </div>
    <!--  -->

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
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== END SIDEBAR ====== -->

	<script src="../../assets/js/bootstrap.js"></script>
	<script src="../../assets/js/jquery-3.6.0.min.js"></script>
</body>
</html>