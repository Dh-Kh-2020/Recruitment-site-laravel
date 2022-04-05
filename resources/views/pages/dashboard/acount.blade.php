@extends('layout.dash-main')

@section('dash-main-content')
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
@stop