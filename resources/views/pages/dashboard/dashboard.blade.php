<title>DHR | Applicant - Dashboard</title>
@extends('layout.dash-main')

@section('dash-main-content')
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

    <!-- Editing persolnal info modal -->
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

    <!-- Adding persolnal info modal -->
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
@stop