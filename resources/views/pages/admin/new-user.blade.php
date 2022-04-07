<title>DHR | Admin Dashboard | Add Role</title>
@extends('layout.admin-main')

@section('admin-main-content')
					<!-- Content -->
					<div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>أضف مستخدماً</h4>

						<!-- Bordered Table -->
						<div class="card mb-4">
                            <form class="card-body" action="/admin/dashboard/add-new-user" method="POST" enctype="multipart/form-data">
                                <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="multicol-username">اسم المستخدم</label>
                                    <input name="username" type="text" id="multicol-username" class="form-control" placeholder="" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="multicol-email">الايميل</label>
                                    <div class="input-group input-group-merge">
                                    <input  name="email"type="text" id="multicol-email" class="form-control" placeholder="example@gmail.com" aria-label="" aria-describedby="multicol-email2" />
                                    <!-- <span class="input-group-text" id="multicol-email2">@example.com</span> -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-password-toggle">
                                    <label class="form-label" for="multicol-password">كلمة المرور</label>
                                    <div class="input-group input-group-merge">
                                        <input  name="password" type="password" id="multicol-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multicol-password2" />
                                        <span class="input-group-text cursor-pointer" id="multicol-password2"><i class="bx bx-hide"></i></span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-password-toggle">
                                    <label class="form-label" for="multicol-confirm-password">الحالة</label>
                                    <div class="input-group input-group-merge">
                                        <label class="switch">
                                        <input name="user_is_active" value=1 type="checkbox" checked class="switch-input" />
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on"></span>
                                            <span class="switch-off"></span>
                                        </span>
                                        <span class="switch-label"> مفعل </span>
                                        </label>
                                    </div>
                                    </div>
                                    <input name="role_id" value=1 type="hidden" id="multicol-username" class="form-control" placeholder="الدور" />
                                </div>
                                </div>
                                </div>

                                <div class="pt-4">
                                <input type="submit" name="saveUser" class="btn btn-primary me-sm-3 me-1" placeholder="Submit">
                                <input type="reset" name="reset" class="btn btn-label-secondary" placeholder="Cancel">
                                </div>
                            </form>
                        </div>
						<!--/ Bordered Table -->
					</div>
					<!-- / Content -->
@stop