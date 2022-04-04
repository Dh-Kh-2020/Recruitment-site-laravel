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
                        <div class="card-header bg-transparent">
                            <h1 class="fs-3 fw-bold text-warning">Acount</h1>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <form class="row g-3 needs-validation" novalidate>
                                        <div class="col-12">
                                            <div class="input-group flex-nowrap">
                                                <input type="text" class="form-control" placeholder="User Name" aria-label="fName" aria-describedby="addon-wrapping" required>
                                            </div>
                                        </div>
                                        <!-- <div class="col-4">
                                            <div class="input-group flex-nowrap">
                                                <select class="form-select rounded-pill" aria-label="Default select example" required>
                                                    <option selected>+967</option>
                                                    <option value="1">+965</option>
                                                    <option value="2">+965</option>
                                                    <option value="3">+965</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="col-12">
                                            <div class="input-group flex-nowrap">
                                                <label class="border bg-light text-muted d-flex align-items-center justify-content-center px-2">+967</label>
                                                <input type="tel" class="form-control" placeholder="Phone Number" aria-label="phone" aria-describedby="addon-wrapping" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="input-group flex-nowrap">
                                                <input type="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="addon-wrapping" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group flex-nowrap">
                                                <select class="form-select" aria-label="Default select example" required>
                                                        <option selected class="text-muted">Gnder</option>
                                                        <option value="1">Female</option>
                                                        <option value="2">Male</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group flex-nowrap">
                                                <input type="date" name="" id="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 mt-5 ">
                                            <button class="btn btn-danger d-block col-12 rounded-pill" type="submit">Save</button>
                                            <!-- <button class="btn btn-danger d-block col-2 rounded-pill" type="submit">Save</button> -->
                                        </div>
                                    </form>
                                    
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