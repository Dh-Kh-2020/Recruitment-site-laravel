<title>DHR | Admin - Experiences</title>
@extends('layout.dash-main')

@section('dash-main-content')
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
@stop