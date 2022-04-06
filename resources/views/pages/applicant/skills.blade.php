<title>DHR | Applicant - Skills</title>
@extends('layout.dash-main')

@section('dash-main-content') 
                <!-- Content Section -->
                <section class="col-lg-8 col-md-8 col-12 mt-5">
                    <div class="p-3">
                        <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
                            <h1 class="fs-3 fw-bold text-warning">Skills</h1>
                            <a role="button" data-bs-toggle="modal" data-bs-target="#addSkill"><i class="bi bi-plus fw-bold fs-3 text-blue"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <h3 class="text-secondary"><span class="text-dark fw-bold fs-2">F</span>rontend</h3>
                                <!-- single skill -->
                                <div class="col-12 mb-5">
                                    <div class=" shadow-sm p-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="fw-bold text-red">HTML</p>
                                            <p class="fw-bold text-blue">90%</p>
                                        </div>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 90%; background-color: var(--blue-color);" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-end mt-1">
                                            <a role="button" data-bs-toggle="modal" data-bs-target="#addSkill">
                                                <i class="bi bi-pencil-square text-blue"></i>
                                            </a>
                                            <a role="button" data-bs-toggle="modal" data-bs-target="#delete">
                                                <i class="bi bi-trash text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- single skill -->
                                <div class="col-12 mb-5">
                                    <div class=" shadow-sm p-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="fw-bold text-red">CSS</p>
                                            <p class="fw-bold text-blue">70%</p>
                                        </div>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 70%; background-color: var(--blue-color);" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-end mt-1">
                                            <a role="button" data-bs-toggle="modal" data-bs-target="#addSkill">
                                                <i class="bi bi-pencil-square text-blue"></i>
                                            </a>
                                            <a role="button" data-bs-toggle="modal" data-bs-target="#delete">
                                                <i class="bi bi-trash text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- single skill -->
                                <div class="col-12 mb-5">
                                    <div class=" shadow-sm p-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="fw-bold text-red">JavaScript</p>
                                            <p class="fw-bold text-blue">40%</p>
                                        </div>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 40%; background-color: var(--blue-color);" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-end mt-1">
                                            <a role="button" data-bs-toggle="modal" data-bs-target="#addSkill">
                                                <i class="bi bi-pencil-square text-blue"></i>
                                            </a>
                                            <a role="button" data-bs-toggle="modal" data-bs-target="#delete">
                                                <i class="bi bi-trash text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="text-secondary"><span class="text-dark fw-bold fs-2">B</span>ackend</h3>
                                <!-- single skill -->
                                <div class="col-12 mb-5">
                                    <div class=" shadow-sm p-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="fw-bold text-red">PHP</p>
                                            <p class="fw-bold text-blue">80%</p>
                                        </div>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 80%; background-color: var(--blue-color);" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-end mt-1">
                                            <a role="button" data-bs-toggle="modal" data-bs-target="#addSkill">
                                                <i class="bi bi-pencil-square text-blue"></i>
                                            </a>
                                            <a role="button" data-bs-toggle="modal" data-bs-target="#delete">
                                                <i class="bi bi-trash text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- single skill -->
                                <div class="col-12 mb-5">
                                    <div class=" shadow-sm p-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="fw-bold text-red">Nodejs</p>
                                            <p class="fw-bold text-blue">45%</p>
                                        </div>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 70%; background-color: var(--blue-color);" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-end mt-1">
                                            <a role="button" data-bs-toggle="modal" data-bs-target="#addSkill">
                                                <i class="bi bi-pencil-square text-blue"></i>
                                            </a>
                                            <a role="button" data-bs-toggle="modal" data-bs-target="#delete">
                                                <i class="bi bi-trash text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- single skill -->
                                <div class="col-12 mb-5">
                                    <div class=" shadow-sm p-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="fw-bold text-red">Laravel</p>
                                            <p class="fw-bold text-blue">35%</p>
                                        </div>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 35%; background-color: var(--blue-color);" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-end mt-1">
                                            <a role="button" data-bs-toggle="modal" data-bs-target="#addSkill">
                                                <i class="bi bi-pencil-square text-blue"></i>
                                            </a>
                                            <a role="button" data-bs-toggle="modal" data-bs-target="#delete">
                                                <i class="bi bi-trash text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </section>
@stop