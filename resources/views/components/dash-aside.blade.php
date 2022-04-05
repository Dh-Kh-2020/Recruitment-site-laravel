<section class="col-lg-3 col-md-3 col-12 mt-4 ms-0" id="navbarTogglerDemo02">
                    <div class="card bg-light ps-3 pt-2"  style="position: fixed; width: 25vw;">
                        <div class="row">
                            <!-- image profile -->
                            <div class="col-12 d-flex justify-content-center align-items-center p-4 position-relative">
                                <img src="../../assets/imgs/profile/computer-icons-icon-design-user-female-png-favpng-Fsujht93KTGPZWpH8vs1JxSwb.png" width="50%" class="img-fluid rounded-circle" alt="">
                                <a role="button" data-bs-toggle="modal" data-bs-target="#editImg" class="position-absolute bg-white
                                    border border-primary rounded d-flex justify-content-center align-items-lg-center rounded-circle" 
                                    style="bottom: 10%;left: 35%; width: 30px;height: 30px;">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </div>
                            <div class="col-12 text-center mb-2">
                                <a class="fs-4 fw-bold text-red" href="{{route('dashboard')}}">Dhoha Alkhorasani</a>
                                <p>An Engineer</p>
                            </div>
                            <!-- navegation dashboard -->
                            <div class="col-12">
                                <nav class="row pt-0">
                                    <header class="col-12 mb-2">
                                        <h3 class="text-secondary fs-6">Dashboard</h3>
                                    </header>
                                    <div class="col-4 pt-2">
                                        <article class="h--75">
                                            <a href="{{route('dashboard')}}" class="d-flex align-items-center text-blue">
                                                <i class="bi bi-house-door fs-6"></i>
                                                <span class="fs-6 fw-bold ms-3">home</span>
                                            </a>
                                        </article>
                                    <!-- </div>
                                    <div class="col-4"> -->
                                        <!-- <article class="h--75 pt-2">
                                            <a href="acount.html" class="d-flex align-items-center text-blue">
                                                <i class="bi bi-person fs-6"></i>
                                                <span class="fs-6 fw-bold ms-3">Account</span>
                                            </a>
                                        </article> -->
                                    <!-- </div>
                                    <div class="col-4 mb-4"> -->
                                        <article class="h--75 pt-2">
                                            <a href="{{route('skills')}}" class="d-flex align-items-center text-blue">
                                                <i class="bi bi-graph-up-arrow fs-6"></i>
                                                <span class="fs-8 fw-bold ms-3">Skills</span>
                                            </a>
                                        </article>
                                    <!-- </div>
                                    <div class="col-4"> -->
                                        <article class="h--75 pt-2">
                                            <a href="{{route('experience')}}" class="d-flex align-items-center text-blue">
                                                <i class="bi bi-lightning fs-6"></i>
                                                <span class="fs-6 fw-bold ms-3">Experience</span>
                                            </a>
                                        </article>
                                    <!-- </div>
                                    <div class="col-4"> -->
                                        <article class="h--75 pt-2">
                                            <a href="{{route('qualification')}}" class="d-flex align-items-center text-blue">
                                                <i class="bi bi-mortarboard fs-6"></i>
                                                <span class="fs-6 fw-bold ms-3">Qualification</span>
                                            </a>
                                        </article>
                                    <!-- </div>
                                    <div class="col-4 mb-4"> -->
                                        <article class="h--75 mb-5 pt-2">
                                            <a href="{{route('course')}}" class="d-flex align-items-center text-blue">
                                                <i class="bi bi-card-checklist fs-6"></i>
                                                <span class="fs-6 fw-bold ms-3">Courses</span>
                                            </a>
                                        </article>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>

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