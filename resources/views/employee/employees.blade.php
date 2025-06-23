@extends("layout.main")

@section('content')
<div class="content">

	<!-- Breadcrumb -->
	<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
		<div class="my-auto mb-2">
			<h2 class="mb-1">Employee</h2>
			<nav>
				<ol class="breadcrumb mb-0">
					<li class="breadcrumb-item">
						<a href="{{url('')}}"><i class="ti ti-smart-home"></i></a>
					</li>
					<li class="breadcrumb-item">
						Employee
					</li>
					<li class="breadcrumb-item active" aria-current="page">Employee List</li>
				</ol>
			</nav>
		</div>
		<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
			<div class="me-2 mb-2">
				<div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
					<a href="{{url('employee')}}" class="btn btn-icon btn-sm active bg-primary text-white me-1"><i class="ti ti-list-tree"></i></a>
					<a href="{{url('employee/grid')}}" class="btn btn-icon btn-sm"><i class="ti ti-layout-grid"></i></a>
				</div>
			</div>
			<div class="me-2 mb-2">
				<div class="dropdown">
					<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
						<i class="ti ti-file-export me-1"></i>Export
					</a>
					<ul class="dropdown-menu  dropdown-menu-end p-3">
						<li>
							<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
						</li>
						<li>
							<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
						</li>
					</ul>
				</div>
			</div>
			<div class="mb-2">
				<a href="#" data-bs-toggle="modal" data-bs-target="#add_employee" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Employee</a>
			</div>
			<div class="head-icons ms-2">
				<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
					<i class="ti ti-chevrons-up"></i>
				</a>
			</div>
		</div>
	</div>
	<!-- /Breadcrumb -->

	<div class="row">

		<!-- Total Plans -->
		<div class="col-lg-3 col-md-6 d-flex">
			<div class="card flex-fill">
				<div class="card-body d-flex align-items-center justify-content-between">
					<div class="d-flex align-items-center overflow-hidden">
						<div>
							<span class="avatar avatar-lg bg-dark rounded-circle"><i class="ti ti-users"></i></span>
						</div>
						<div class="ms-2 overflow-hidden">
							<p class="fs-12 fw-medium mb-1 text-truncate">Total Employee</p>
							<h4>1007</h4>
						</div>
					</div>
					<div>
						<span class="badge badge-soft-purple badge-sm fw-normal">
							<i class="ti ti-arrow-wave-right-down"></i>
							+19.01%
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- /Total Plans -->

		<!-- Total Plans -->
		<div class="col-lg-3 col-md-6 d-flex">
			<div class="card flex-fill">
				<div class="card-body d-flex align-items-center justify-content-between">
					<div class="d-flex align-items-center overflow-hidden">
						<div>
							<span class="avatar avatar-lg bg-success rounded-circle"><i class="ti ti-user-share"></i></span>
						</div>
						<div class="ms-2 overflow-hidden">
							<p class="fs-12 fw-medium mb-1 text-truncate">Active</p>
							<h4>1007</h4>
						</div>
					</div>
					<div>
						<span class="badge badge-soft-primary badge-sm fw-normal">
							<i class="ti ti-arrow-wave-right-down"></i>
							+19.01%
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- /Total Plans -->

		<!-- Inactive Plans -->
		<div class="col-lg-3 col-md-6 d-flex">
			<div class="card flex-fill">
				<div class="card-body d-flex align-items-center justify-content-between">
					<div class="d-flex align-items-center overflow-hidden">
						<div>
							<span class="avatar avatar-lg bg-danger rounded-circle"><i class="ti ti-user-pause"></i></span>
						</div>
						<div class="ms-2 overflow-hidden">
							<p class="fs-12 fw-medium mb-1 text-truncate">InActive</p>
							<h4>1007</h4>
						</div>
					</div>
					<div>
						<span class="badge badge-soft-dark badge-sm fw-normal">
							<i class="ti ti-arrow-wave-right-down"></i>
							+19.01%
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- /Inactive Companies -->

		<!-- No of Plans  -->
		<div class="col-lg-3 col-md-6 d-flex">
			<div class="card flex-fill">
				<div class="card-body d-flex align-items-center justify-content-between">
					<div class="d-flex align-items-center overflow-hidden">
						<div>
							<span class="avatar avatar-lg bg-info rounded-circle"><i class="ti ti-user-plus"></i></span>
						</div>
						<div class="ms-2 overflow-hidden">
							<p class="fs-12 fw-medium mb-1 text-truncate">New Joiners</p>
							<h4>67</h4>
						</div>
					</div>
					<div>
						<span class="badge badge-soft-secondary badge-sm fw-normal">
							<i class="ti ti-arrow-wave-right-down"></i>
							+19.01%
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- /No of Plans -->

	</div>

	<div class="card">
		<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
			<h5>Employee List</h5>
			<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
				<div class="me-3">
					<div class="input-icon-end position-relative">
						<input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
						<span class="input-icon-addon">
							<i class="ti ti-chevron-down"></i>
						</span>
					</div>
				</div>
				<div class="dropdown me-3">
					<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
						Designation
					</a>
					<ul class="dropdown-menu  dropdown-menu-end p-3">
						<li>
							<a href="javascript:void(0);" class="dropdown-item rounded-1">Finance</a>
						</li>
						<li>
							<a href="javascript:void(0);" class="dropdown-item rounded-1">Developer</a>
						</li>
						<li>
							<a href="javascript:void(0);" class="dropdown-item rounded-1">Executive</a>
						</li>
					</ul>
				</div>
				<div class="dropdown me-3">
					<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
						Select Status
					</a>
					<ul class="dropdown-menu  dropdown-menu-end p-3">
						<li>
							<a href="javascript:void(0);" class="dropdown-item rounded-1">Active</a>
						</li>
						<li>
							<a href="javascript:void(0);" class="dropdown-item rounded-1">Inactive</a>
						</li>
					</ul>
				</div>
				<div class="dropdown">
					<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
						Sort By : Last 7 Days
					</a>
					<ul class="dropdown-menu  dropdown-menu-end p-3">
						<li>
							<a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="card-body p-0">
			<div class="custom-datatable-filter table-responsive">
				<table class="table datatable">
					<thead class="thead-light">
						<tr>
							<!-- <th class="no-sort">
								<div class="form-check form-check-md">
									<input class="form-check-input" type="checkbox" id="select-all">
								</div>
							</th> -->
							<th>Emp ID</th>
							<th>Name</th>
							<!-- <th>Email</th>
							<th>Phone</th> -->
							<th>Report To</th>
							<th>Department</th>
							<!-- <th>Joining Date</th> -->
							<th>Status</th>
							<th></th>
						</tr>
					</thead>
					<tbody>

					@foreach($employees as $e)
						<tr>
							<!-- <td>
								<div class="form-check form-check-md">
									<input class="form-check-input" type="checkbox">
								</div>
							</td> -->
							<td><a href="#">{{$e->emp_id}}</a></td>
							<td>
								<div class="d-flex align-items-center">
									<a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details"><img
											src="{{url('')}}/{{($e->image!='')?$e->image:'images/employee/user.png'}}" class="img-fluid rounded-circle" alt="img"></a>
									<div class="ms-2">
										<p class="text-dark mb-0"><a href="{{url('employee/view')}}/{{$e->id}}" >{{$e->fname}} {{$e->lname}}</a></p>
										<span class="fs-12 badge badge-warning d-inline-flex align-items-center badge-xs">{{$e->designations->designation}}</span>
									</div>
								</div>
							</td>
							<!-- <td><a href="mailto:{{$e->emp_office_email}}">{{$e->emp_office_email}}</a></td>
							<td>{{$e->emp_office_mobile}}</td> -->
							<td>
								 <button class="btn btn-primary btn-sm">{{$e->report->fname}} {{$e->report->lname}}</button>
							</td>
							<td>
								 <button class="btn btn-info btn-sm">{{$e->departments->department}}</button>
							</td>
					
							<!-- <td>{{$e->emp_joining}}</td> -->
							<td>
								@if($e->status==1)
								<span class="badge badge-success d-inline-flex align-items-center badge-xs">
									<i class="ti ti-point-filled me-1"></i>Active
								</span>
								@else
								<span class="badge badge-danger d-inline-flex align-items-center badge-xs">
									<i class="ti ti-point-filled me-1"></i>Inactive
								</span>
								@endif
							</td>
							<td>
								<div class="action-icon d-inline-flex">
									<a  href="{{url('employee/view')}}/{{$e->id}}" class="me-2" ><i class="ti ti-eye"></i></a>
									<a class="edit_employee" href="{{url('employee/edit')}}/{{$e->id}}" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="ti ti-edit"></i></a>
									<a class="delete_employee" href="{{url('employee/delete')}}/{{$e->id}}" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
								</div>
							</td>
						</tr>
					@endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>




<!-- Add Employee -->
<div class="modal fade" id="add_employee">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<div class="d-flex align-items-center">
					<h4 class="modal-title me-2">Add New Employee</h4>
				</div>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="{{url('employee/add')}}" enctype="multipart/form-data" method="post">
				<div class="contact-grids-tab">
					<ul class="nav nav-underline" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#basic-info" type="button" role="tab" aria-selected="true">Basic Information</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="address-tab" data-bs-toggle="tab" data-bs-target="#address" type="button" role="tab" aria-selected="false">Permissions</button>
						</li>
					</ul>
				</div>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="info-tab" tabindex="0">
						<div class="modal-body pb-0 ">
							<div class="row">
								<div class="col-md-12">
									<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
										<div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
											<i class="ti ti-photo text-gray-2 fs-16"></i>
										</div>
										<div class="profile-upload">
											<div class="mb-2">
												<h6 class="mb-1">Upload Profile Image</h6>
												<p class="fs-12">Image should be below 4 mb</p>
												<div><div>@csrf</div></div>
											</div>
											<div class="profile-uploader d-flex align-items-center">
												<div class="drag-upload-btn btn btn-sm btn-primary me-2">
													Upload
													<input type="file" name="emp_image" class="form-control image-sign" >
												</div>
												<a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">First Name <span class="text-danger"> *</span></label>
										<input type="text" name="fname" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Last Name</label>
										<input type="text" name="lname" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Employee ID <span class="text-danger"> *</span></label>
										<input type="text" name="emp_id" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Joining Date <span class="text-danger"> *</span></label>
										<div class="input-icon-end position-relative">
											<input type="text" name="emp_joining" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Confirmation Date <span class="text-danger"> *</span></label>
										<div class="input-icon-end position-relative">
											<input type="text" name="cnfdate" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Leave Credit Date <span class="text-danger"> *</span></label>
										<div class="input-icon-end position-relative">
											<input type="text" name="emp_leave_credit" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Onboarding Status<span class="text-danger"> *</span></label>
										<div class="input-icon-end position-relative">
											<input type="text" name="onboarding_status" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Onboarding Close Date <span class="text-danger"> *</span></label>
										<div class="input-icon-end position-relative">
											<input type="text" name="onboarding_close" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label"> Date of Birth <span class="text-danger"> *</span></label>
										<div class="input-icon-end position-relative">
											<input type="text" name="emp_dob" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Office Email <span class="text-danger"> *</span></label>
										<input type="email" name="emp_office_email" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Office Mobile <span class="text-danger"> *</span></label>
										<input type="number" name="emp_office_mobile" class="form-control">
									</div>
								</div>
					
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label"> Personal Email <span class="text-danger"> *</span></label>
										<input type="email" name="email" class="form-control">
									</div>
								</div>


								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Personal Phone Number <span class="text-danger"> *</span></label>
										<input type="text" name="mobile" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Company<span class="text-danger"> *</span></label>
										<input type="text" name="company" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Nationality<span class="text-danger"> *</span></label>
										<input type="text" name="nationality" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Work days<span class="text-danger"> *</span></label>
										<input type="text" name="work_days" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Gender</label>
										<select class="select" name="gender">
											<option value="male">Male</option>
											<option value="female">Female</option>
											<option value="others">Others</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Marital Status</label>
										<select class="select" name="marital_status">
											<option value="single">Single</option>
											<option value="married">Married</option>
											<option value="divorced">Divorced</option>
											<option value="widowed">Widowed</option>
											<option value="separated">Separated</option>
											<option value="other">Other</option>

										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Religion</label>
										<select class="select" name="religion">
										<option value="christianity">Christianity</option>
    									<option value="islam">Islam</option>
    									<option value="hinduism">Hinduism</option>
    									<option value="buddhism">Buddhism</option>
    									<option value="sikhism">Sikhism</option>
    									<option value="judaism">Judaism</option>
    									<option value="other">Other</option>

										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Department</label>
										<select class="select" name="department">
											@foreach($departments as $d)
											<option value="{{$d->id}}">{{$d->department}}</option>
											@endforeach

										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Designation</label>
										<select class="select" name="designation">
											@foreach($designation as $d)
											<option value="{{$d->id}}">{{$d->designation}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Report To (e.g. Manager )</label>
										<select class="select" name="emp_report">
											@foreach($employees as $e)
											<option value="{{$e->id}}">{{$e->fname}} {{$e->lname}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Category</label>
										<select class="select" name="category">
											<option value="basic">Basic</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Employment Type</label>
										<select class="select" name="employment_type">
											<option value="permanent">Permanent</option>
											<option value="probation">Probation</option>
											<option value="trainee">Trainee</option>
											<option value="internship">Internship</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Resource Type</label>
										<select class="select" name="resources_type">
											<option value="basic">Basic</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Status</label>
										<select class="select" name="status">
											<option value="1">Active</option>
											<option value="2">Inactive</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">About <span class="text-danger"> *</span></label>
										<textarea class="form-control" name="about" rows="3"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save </button>
						</div>
					</div>
					<div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab" tabindex="0">
						<div class="modal-body">
							<div class="card bg-light-500 shadow-none">
								<div class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h6>Enable Options</h6>
									<div class="d-flex align-items-center justify-content-end">
										<div class="form-check form-switch me-2">
											<label class="form-check-label mt-0">
												<input class="form-check-input me-2" type="checkbox" role="switch">
												Enable all Module
											</label>
										</div>
										<div class="form-check d-flex align-items-center">
											<label class="form-check-label mt-0">
												<input class="form-check-input" type="checkbox" checked="">
												Select All
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="table-responsive border rounded">
								<table class="table">
									<tbody>
										<tr>
											<td>
												<div class="form-check form-switch me-2">
													<label class="form-check-label mt-0">
														<input class="form-check-input me-2" type="checkbox" role="switch" checked>
														Holidays
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox" checked="">
														Read
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Write
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Create
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox" checked="">
														Delete
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Import
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Export
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-check form-switch me-2">
													<label class="form-check-label mt-0">
														<input class="form-check-input me-2" type="checkbox" role="switch">
														Leaves
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Read
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Write
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Create
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Delete
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Import
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Export
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-check form-switch me-2">
													<label class="form-check-label mt-0">
														<input class="form-check-input me-2" type="checkbox" role="switch">
														Clients
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Read
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Write
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Create
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Delete
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Import
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Export
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-check form-switch me-2">
													<label class="form-check-label mt-0">
														<input class="form-check-input me-2" type="checkbox" role="switch">
														Projects
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Read
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Write
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Create
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Delete
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Import
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Export
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-check form-switch me-2">
													<label class="form-check-label mt-0">
														<input class="form-check-input me-2" type="checkbox" role="switch">
														Tasks
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Read
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Write
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Create
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Delete
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Import
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Export
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-check form-switch me-2">
													<label class="form-check-label mt-0">
														<input class="form-check-input me-2" type="checkbox" role="switch">
														Chats
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Read
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Write
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Create
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Delete
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Import
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Export
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-check form-switch me-2">
													<label class="form-check-label mt-0">
														<input class="form-check-input me-2" type="checkbox" role="switch" checked>
														Assets
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Read
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Write
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox" checked="">
														Create
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Delete
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox" checked="">
														Import
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Export
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-check form-switch me-2">
													<label class="form-check-label mt-0">
														<input class="form-check-input me-2" type="checkbox" role="switch">
														Timing Sheets
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Read
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Write
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Create
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Delete
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Import
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Export
													</label>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#success_modal">Save </button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add Employee -->

<!-- Edit Employee -->
<div class="modal fade" id="edit_employee">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<div class="d-flex align-items-center">
					<h4 class="modal-title me-2">Edit Employee</h4><span>Employee ID : <span id="emp_id_head"></span> </span>
				</div>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form id="update_employee" method="post" enctype="multipart/form-data" action="#">
				<div class="contact-grids-tab">
					<ul class="nav nav-underline" id="myTab2" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="info-tab2" data-bs-toggle="tab" data-bs-target="#basic-info2" type="button" role="tab" aria-selected="true">Basic Information</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="address-tab2" data-bs-toggle="tab" data-bs-target="#address2" type="button" role="tab" aria-selected="false">Permissions</button>
						</li>
					</ul>
				</div>
				<div class="tab-content" id="myTabContent2">
					<div class="tab-pane fade show active" id="basic-info2" role="tabpanel" aria-labelledby="info-tab2" tabindex="0">
						<div class="modal-body pb-0 ">
							<div class="row">
								<div class="col-md-12">
									<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
										<div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
											<!-- <i class="ti ti-photo text-gray-2 fs-16"></i> -->
											 <img src="" id="edit_image" height="100" width="100" alt="">
										</div>
										<div class="profile-upload">
											<div class="mb-2">
												<h6 class="mb-1">Upload Profile Image</h6>
												<p class="fs-12">Image should be below 4 mb</p>
												<div><div>@csrf</div></div>
											</div>
											<div class="profile-uploader d-flex align-items-center">
												<div class="drag-upload-btn btn btn-sm btn-primary me-2">
													Upload
													<input type="file" name="emp_image" class="form-control image-sign" >
												</div>
												<a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">First Name <span class="text-danger"> *</span></label>
										<input type="text" name="fname" id="e_fname" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Last Name</label>
										<input type="text" name="lname" id="e_lname" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Employee ID <span class="text-danger"> *</span></label>
										<input type="text" name="emp_id" id="emp_id" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Joining Date <span class="text-danger"> *</span></label>
										<div class="input-icon-end position-relative">
											<input type="text" name="emp_joining" id="emp_joining" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Confirmation Date <span class="text-danger"> *</span></label>
										<div class="input-icon-end position-relative">
											<input type="text" name="cnfdate" id="cnfdate" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Leave Credit Date <span class="text-danger"> *</span></label>
										<div class="input-icon-end position-relative">
											<input type="text" name="emp_leave_credit" id="emp_leave_credit" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Onboarding Status<span class="text-danger"> *</span></label>
										<div class="input-icon-end position-relative">
											<input type="text" name="onboarding_status" id="onboarding_status" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Onboarding Close Date <span class="text-danger"> *</span></label>
										<div class="input-icon-end position-relative">
											<input type="text" name="onboarding_close" id="onboarding_close" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label"> Date of Birth <span class="text-danger"> *</span></label>
										<div class="input-icon-end position-relative">
											<input type="text" name="emp_dob" id="emp_dob" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Office Email <span class="text-danger"> *</span></label>
										<input type="email" name="emp_office_email" id="emp_office_email" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Office Mobile <span class="text-danger"> *</span></label>
										<input type="number" name="emp_office_mobile" id="emp_office_mobile" class="form-control">
									</div>
								</div>
					
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label"> Personal Email <span class="text-danger"> *</span></label>
										<input type="email" name="email"  id="e_email" class="form-control">
									</div>
								</div>


								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Personal Phone Number <span class="text-danger"> *</span></label>
										<input type="text" name="mobile" id="e_mobile" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Company<span class="text-danger"> *</span></label>
										<input type="text" name="company" id="e_compnay" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Nationality<span class="text-danger"> *</span></label>
										<input type="text" name="nationality" id="e_nationality" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Work days<span class="text-danger"> *</span></label>
										<input type="text" name="work_days" id="work_days" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Gender</label>
										<select class="select" id="gender" name="gender">
											<option value="male">Male</option>
											<option value="female">Female</option>
											<option value="others">Others</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Marital Status</label>
										<select class="select" id="marital_status" name="marital_status">
											<option value="single">Single</option>
											<option value="married">Married</option>
											<option value="divorced">Divorced</option>
											<option value="widowed">Widowed</option>
											<option value="separated">Separated</option>
											<option value="other">Other</option>

										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Religion</label>
										<select class="select" id="religion" name="religion">
										<option value="christianity">Christianity</option>
    									<option value="islam">Islam</option>
    									<option value="hinduism">Hinduism</option>
    									<option value="buddhism">Buddhism</option>
    									<option value="sikhism">Sikhism</option>
    									<option value="judaism">Judaism</option>
    									<option value="other">Other</option>

										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Department</label>
										<select class="select" id="department" name="department">
											@foreach($departments as $d)
											<option value="{{$d->id}}">{{$d->department}}</option>
											@endforeach

										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Designation</label>
										<select class="select" id="designation" name="designation">
											@foreach($designation as $d)
											<option value="{{$d->id}}">{{$d->designation}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Report To (e.g. Manager )</label>
										<select class="select" id="emp_report" name="emp_report">
											@foreach($employees as $e)
											<option value="{{$e->id}}">{{$e->fname}} {{$e->lname}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Category</label>
										<select class="select" id="e_category" name="category">
											<option value="basic">Basic</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Employment Type</label>
										<select class="select" id="employment_type" name="employment_type">
											<option value="permanent">Permanent</option>
											<option value="probation">Probation</option>
											<option value="trainee">Trainee</option>
											<option value="internship">Internship</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Resource Type</label>
										<select class="select" id="resource_type" name="resources_type">
											<option value="basic">Basic</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Status</label>
										<select class="select" id="status" name="status">
											<option value="1">Active</option>
											<option value="2">Inactive</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">About <span class="text-danger"> *</span></label>
										<textarea class="form-control" id="e_about" name="about" rows="3"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary"  >Save </button>
						</div>
					</div>
					<div class="tab-pane fade" id="address2" role="tabpanel" aria-labelledby="address-tab2" tabindex="0">
						<div class="modal-body">
							<div class="card bg-light-500 shadow-none">
								<div class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h6>Enable Options</h6>
									<div class="d-flex align-items-center justify-content-end">
										<div class="form-check form-switch me-2">
											<label class="form-check-label mt-0">
												<input class="form-check-input me-2" type="checkbox" role="switch">
												Enable all Module
											</label>
										</div>
										<div class="form-check d-flex align-items-center">
											<label class="form-check-label mt-0">
												<input class="form-check-input" type="checkbox" checked="">
												Select All
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="table-responsive border rounded">
								<table class="table">
									<tbody>
										<tr>
											<td>
												<div class="form-check form-switch me-2">
													<label class="form-check-label mt-0">
														<input class="form-check-input me-2" type="checkbox" role="switch" checked>
														Holidays
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox" checked="">
														Read
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Write
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Create
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox" checked="">
														Delete
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Import
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Export
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-check form-switch me-2">
													<label class="form-check-label mt-0">
														<input class="form-check-input me-2" type="checkbox" role="switch">
														Leaves
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Read
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Write
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Create
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Delete
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Import
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Export
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-check form-switch me-2">
													<label class="form-check-label mt-0">
														<input class="form-check-input me-2" type="checkbox" role="switch">
														Clients
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Read
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Write
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Create
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Delete
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Import
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Export
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-check form-switch me-2">
													<label class="form-check-label mt-0">
														<input class="form-check-input me-2" type="checkbox" role="switch">
														Projects
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Read
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Write
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Create
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Delete
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Import
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Export
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-check form-switch me-2">
													<label class="form-check-label mt-0">
														<input class="form-check-input me-2" type="checkbox" role="switch">
														Tasks
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Read
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Write
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Create
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Delete
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Import
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Export
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-check form-switch me-2">
													<label class="form-check-label mt-0">
														<input class="form-check-input me-2" type="checkbox" role="switch">
														Chats
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Read
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Write
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Create
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Delete
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Import
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Export
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-check form-switch me-2">
													<label class="form-check-label mt-0">
														<input class="form-check-input me-2" type="checkbox" role="switch" checked>
														Assets
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Read
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Write
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox" checked="">
														Create
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Delete
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox" checked="">
														Import
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Export
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-check form-switch me-2">
													<label class="form-check-label mt-0">
														<input class="form-check-input me-2" type="checkbox" role="switch">
														Timing Sheets
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Read
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Write
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Create
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Delete
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Import
													</label>
												</div>
											</td>
											<td>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox">
														Export
													</label>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#success_modal">Save </button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Edit Employee -->

<!-- Add Employee Success -->
<div class="modal fade" id="success_modal" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-sm">
		<div class="modal-content">
			<div class="modal-body">
				<div class="text-center p-3">
					<span class="avatar avatar-lg avatar-rounded bg-success mb-3"><i class="ti ti-check fs-24"></i></span>
					<h5 class="mb-2">Employee Added Successfully</h5>
					<p class="mb-3">Stephan Peralt has been added with Client ID : <span class="text-primary">#EMP - 0001</span>
					</p>
					<div>
						<div class="row g-2">
							<div class="col-6">
								<a href="employees.html" class="btn btn-dark w-100">Back to List</a>
							</div>
							<div class="col-6">
								<a href="employee-details.html" class="btn btn-primary w-100">Detail Page</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Add Client Success -->

<!-- Delete Modal -->
<div class="modal fade" id="delete_modal">
	<div class="modal-dialog modal-dialog-centered modal-sm">
		<div class="modal-content">
			<div class="modal-body text-center">
				<span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
					<i class="ti ti-trash-x fs-36"></i>
				</span>
				<h4 class="mb-1">Confirm Delete</h4>
				<p class="mb-3">You want to delete all the marked items, this cant be undone once you delete.</p>
				<div class="d-flex justify-content-center">
					<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
					<a href="#" id="delete_link"  class="btn btn-danger">Yes, Delete</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Delete Modal -->



		
	@push("script")
		<script>
			$(document).ready(function(){
			
				$(".edit_employee").click(function(){
					$link=$(this).attr('href');
					$.get($link,function(data,status){
						if(status=="success"){
							// console.log(data);
							$("#status>option").removeAttr('selected');
							$("#marital_status>option").removeAttr('selected');
							$(`#department>option`).removeAttr('selected');
							$('#update_employee').attr('action',"{{url('employee/update')}}/"+data.id);
							$image=(data.image!="")?data.image:"images/employee/user.png";
							$("#edit_image").attr('src',"{{url('')}}/"+$image);
							$('#e_fname').val(data.fname);
							$('#e_lname').val(data.lname);
							$('#e_email').val(data.email);
							$('#emp_id').val(data.emp_id);
							$('#emp_id_head').val(data.emp_id);
							$('#e_mobile').val(data.mobile);
							$('#emp_office_email').val(data.emp_office_email);
							$('#emp_office_mobile').val(data.emp_office_mobile);
							$('#gender').val(data.gender);
							$(`#marital_status>[option="${data.marital_status}"]`).attr('selected');
							$('#religion').val(data.religion);
							$('#emp_dob').val(data.emp_dob);
							$('#department').val(data.department);
							$('#designation').val(data.designation);
							$('#emp_report').val(data.emp_report);
							$('#e_nationality').val(data.emp_nation);
							$('#work_days').val(data.emp_work_days);
							$('#emp_joining').val(data.emp_joining);
							$('#cnfdate').val(data.confirm_date);
							$('#emp_leave_credit').val(data.emp_leave_credit);
							$('#e_status').val(data.status);
							$('#e_about').val(data.about);
							$('#onboarding_status').val(data.onboarding_status);
							$('#onboarding_close').val(data.onboarding_close);
							$('#e_compnay').val(data.company);
							$('#employment_type').val(data.employment_type);
							$('#resource_type').val(data.resource_type);

							// $(`#departmedit_nameent>option[value='${data.department}']`).attr('selected','selected');
							// $(`#status>option[value='${data.status}']`).attr('selected','selected');
						}else{
							alert("something Went Wrong");
						}
					});
				});


				/////Delete Department
				$(".delete_employee").click(function(){
					$link=$(this).attr('href');
					$("#delete_link").attr("href",$link);
				});


			});
		</script>
	@endpush




@endsection