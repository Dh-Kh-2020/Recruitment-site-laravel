<title>DHR | Admin Dashboard | Users List</title>
@extends('layout.admin-main')

@section('admin-main-content')
					<!-- Content -->
					<div class="container-xxl flex-grow-1 container-p-y">
						<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Users</h4>

						<!-- Bordered Table -->
						<div class="card"> 
							<div class="card-body">
								<div class="table-responsive text-nowrap">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>E-mail</th>
												<th>Image</th>
												<th>Role</th>
												<th>Status</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody> 
											@foreach ($allUsers as $user)
												<tr>
													<td>{{ $loop->iteration }}</td>
													<td>{{ $user->name }}</td>
													<td>{{ $user->email }}</td>
													<td>{{ $user->image }}</td>
													<td>{{ $user->role_id }}</td>
													<td>  
															<span class="badge bg-label-success me-1">مفعل</span>
														
															
															<span class="badge bg-label-danger me-1">موقف</span>

													</td>
													<td><a href="/admin/dashboard/edit-user" class="btn btn-icon btn-outline-dribbble">
															<i class="tf-icons bx bx-edit-alt me-1"></i>
														</a>
														<button type="button" class="btn btn-icon btn-outline-dribbble">
															<i class="tf-icons bx bx-trash me-1"></i>
														</button>
													</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!--/ Bordered Table -->
					</div>
					<!-- / Content -->
@stop