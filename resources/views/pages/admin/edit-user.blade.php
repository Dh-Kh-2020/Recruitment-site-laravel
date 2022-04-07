<title>DHR | Admin Dashboard | Edit User</title>
@extends('layout.admin-main')

@section('admin-main-content')
					<!-- Content -->
					<div class="container-xxl flex-grow-1 container-p-y">
						<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>عدل على المستخدمين</h4>

						<!-- Bordered Table -->
						<div class="card mb-4">
							<form class="card-body" action="/admin/dashboard/users-list" method="POST" enctype="multipart/form-data">
								<div class="row g-3">
								<div class="col-md-6">
									<label class="form-label" for="multicol-username">اسم المستخدم</label>
									<input name="username" type="text" id="multicol-username" class="form-control" placeholder="" />
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
								</div>
								</div>
								</div>

								<div class="pt-4">
								<input type="submit" name="editUser" class="btn btn-primary me-sm-3 me-1" placeholder="Submit">
								<input type="reset" name="reset" class="btn btn-label-secondary" placeholder="Cancel">
								</div>
							</form>
						</div>
						<!--/ Bordered Table -->
					</div>
					<!-- / Content -->
@stop