@extends("layout.main")

@section('content')
<div class="content">

	<!-- Breadcrumb -->
	<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
		<div class="my-auto mb-2">
			<h2 class="mb-1">Leave</h2>
			<nav>
				<ol class="breadcrumb mb-0">
					<li class="breadcrumb-item">
						<a href="{{url('')}}"><i class="ti ti-smart-home"></i></a>
					</li>
					<li class="breadcrumb-item">
						Leave
					</li>
					<li class="breadcrumb-item active" aria-current="page">Leave List</li>
				</ol>
			</nav>
		</div>
		<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
		
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
				<a href="#" data-bs-toggle="modal" data-bs-target="#add_leave" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Leave</a>
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
							<p class="fs-12 fw-medium mb-1 text-truncate">Total Leave</p>
							<h4>{{$teams->count()}}</h4>
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
			<h5>Leave List</h5>
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
							<th>Employee Name</th>
							<th>Leave Type</th>
							<th>Subject</th>
							<th>Time</th>
							<th>Manager</th>
							<th>Status</th>
							<th></th>
						</tr>
					</thead>
					<tbody>

						@foreach($teams as $e)
						<tr>
							<!-- <td>
								<div class="form-check form-check-md">
									<input class="form-check-input" type="checkbox">
								</div>
							</td> -->
							<td><a class="btn btn-primary btn-sm" href="#">{{$e->employee->fname}} {{$e->employee->lname}}</a></td>
							<td> <button class="btn btn-success btn-sm">{{$e->leave_type}}</button></td>
							<td> <button class="btn btn-secondary btn-sm">{{$e->subject}}</button></td>
							<td><button class="btn btn-outline-info  btn-sm m-1">{{$e->from}}</button> <br> <button class="btn btn-outline-secondary btn-sm m-1">{{$e->to}}</button></td>
							<td><button class="btn btn-outline-danger btn-sm">{{$e->manager->fname}} {{$e->manager->lname}}</button></td>
							<td>
								@if($e->status==1)
								<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center text-info"><span class="rounded-circle bg-transparent-info d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-info"></i></span>New</a>
								@elseif($e->status==2)
								<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center text-warning"><span class="rounded-circle bg-transparent-warning d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-warning"></i></span>Pending</a>
								@elseif($e->status==3)
								<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center text-success"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
								@elseif($e->status==4)
								<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center text-danger"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>Declined</a>
								@endif
								<span class="text-center">{{$e->remarks}}</span>
							</td>

							<td>
								@if($e->status!=3)
								<div class="action-icon d-inline-flex">
									<a href="{{url('leave/view')}}/{{$e->id}}" class="me-2 d-none"><i class="ti ti-eye"></i></a>
									<a class="edit_team" href="{{url('leave/edit')}}/{{$e->id}}" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_team"><i class="ti ti-edit"></i></a>
									<a class="delete_team" href="{{url('leave/delete')}}/{{$e->id}}" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
								</div>
								@endif
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
<div class="modal fade" id="add_leave">
	<div class="modal-dialog modal-dialog-centered modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<div class="d-flex align-items-center">
					<h4 class="modal-title me-2">Add New Leave</h4>
				</div>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="{{url('leave/add')}}" enctype="multipart/form-data" method="post">
				<div class="contact-grids-tab">
					<ul class="nav nav-underline" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#basic-info" type="button" role="tab" aria-selected="true">Leave Information</button>
						</li>
					</ul>
				</div>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="info-tab" tabindex="0">
						<div class="modal-body pb-0 ">
							<div class="row">
								<div class="col-md-12">
									<div class="d-none d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
										<div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
											<i class="ti ti-photo text-gray-2 fs-16"></i>
										</div>
										<div class="profile-upload">
											<div class="mb-2">
												<h6 class="mb-1">Upload Profile Image</h6>
												<p class="fs-12">Image should be below 4 mb</p>
												<div>
													<div>@csrf</div>
												</div>
											</div>
											<div class="profile-uploader d-flex align-items-center">
												<div class="drag-upload-btn btn btn-sm btn-primary me-2">
													Upload
													<input type="file" name="emp_image" class="form-control image-sign">
												</div>
												<a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Leave Type <span class="text-danger"> *</span></label>
										<select class="select" name="leave_type">
										
											<option>Planned leave </option>
											<option>Sick leave </option>
											<option>Birthday leave </option>
											<option>Aniversary Leave </option>
										
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">From <span class="text-danger"> *</span></label>
										<input type="datetime-local" name="from" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">To <span class="text-danger"> *</span></label>
										<input type="datetime-local" name="to" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">No Of Days <span class="text-danger"> *</span></label>
										<input type="text" name="days" class="form-control">
									</div>
								</div>

					

								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Employee</label>
										<select class="myselect" name="emp_id">
											@foreach($employees as $e)
											<option value="{{$e->id}}">{{$e->fname}} {{$e->lname}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Report To (e.g. Manager )</label>
										<select class="myselect" name="manager">
											@foreach($employees as $e)
											<option value="{{$e->id}}">{{$e->fname}} {{$e->lname}}</option>
											@endforeach
										</select>
									</div>
								</div>


								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Subject <span class="text-danger"> *</span></label>
										<input type="text" name="subject" class="form-control">
									</div>
								</div>


								

								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Message</label>
										<textarea class="form-control editor" name="message" rows="3"></textarea>
									</div>
								</div>
								

								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Remarks</label>
										<textarea class="form-control" name="remarks" rows="3"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save </button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add Employee -->


<!-- Edit Employee -->
<div class="modal fade" id="edit_team">
	<div class="modal-dialog modal-dialog-centered modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<div class="d-flex align-items-center">
					<h4 class="modal-title me-2">Edit Leaves</h4>
				</div>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="{{url('#')}}" id="update_form" enctype="multipart/form-data" method="post">
			    <div class="contact-grids-tab">
					<ul class="nav nav-underline" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#basic-info" type="button" role="tab" aria-selected="true">Leave Information</button>
						</li>
					</ul>
				</div>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="info-tab" tabindex="0">
						<div class="modal-body pb-0 ">
							<div class="row">
								<div class="col-md-12 d-none">
									<div class="d-none d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
										<div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
											<i class="ti ti-photo text-gray-2 fs-16"></i>
										</div>
										<div class="profile-upload">
											<div class="mb-2">
												<h6 class="mb-1">Upload Profile Image</h6>
												<p class="fs-12">Image should be below 4 mb</p>
												<div>
													<div>@csrf</div>
												</div>
											</div>
											<div class="profile-uploader d-flex align-items-center">
												<div class="drag-upload-btn btn btn-sm btn-primary me-2">
													Upload
													<input type="file" name="emp_image" class="form-control image-sign">
												</div>
												<a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Leave Type <span class="text-danger"> *</span></label>
										<select class="editselect" id="leave_type" name="leave_type">
										
											<option>Planned leave </option>
											<option>Sick leave </option>
											<option>Birthday leave </option>
											<option>Aniversary Leave </option>
										
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">From <span class="text-danger"> *</span></label>
										<input type="datetime-local" name="from" id="from" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">To <span class="text-danger"> *</span></label>
										<input type="datetime-local" name="to" id="to" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">No Of Days <span class="text-danger"> *</span></label>
										<input type="text" name="days" id="days" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Employee</label>
										<select class="editselect" id="emp_id" name="emp_id">
											@foreach($employees as $e)
											<option value="{{$e->id}}">{{$e->fname}} {{$e->lname}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Report To (e.g. Manager )</label>
										<select class="editselect" id="manager" name="manager">
											@foreach($employees as $e)
											<option value="{{$e->id}}">{{$e->fname}} {{$e->lname}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Subject <span class="text-danger"> *</span></label>
										<input type="text" id="subject" name="subject" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Message</label>
										<textarea class="form-control editor" name="message" id="message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Remarks</label>
										<textarea class="form-control" id="remarks" name="remarks" rows="3"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Status</label>
										<select name="status" id="status" class="select">
											<option value="2" >Pending</option>
											<option value="3" >Approved</option>
											<option value="4" >Declined</option>
										</select>
									
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Update </button>
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
<!-- /Add Employee Success -->

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
					<a href="#" id="delete_link" class="btn btn-danger">Yes, Delete</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Delete Modal -->




@push("script")

<!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/low3l2cwxddyr4c4g4u3rpwtqgzvc8cqurnik7ltst2i5w0i/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>

	const isSmallScreen = window.matchMedia('(max-width: 1023.5px)').matches;
	const useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

	tinymce.init({
  selector: 'textarea.editor',
  plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons accordion',
  editimage_cors_hosts: ['picsum.photos'],
  menubar: 'file edit view insert format tools table help',
  toolbar: "undo redo | accordion accordionremove | blocks fontfamily fontsize | bold italic underline strikethrough | align numlist bullist | link image | table media | lineheight outdent indent| forecolor backcolor removeformat | charmap emoticons | code fullscreen preview | save print | pagebreak anchor codesample | ltr rtl",
  autosave_ask_before_unload: true,
  autosave_interval: '30s',
  autosave_prefix: '{path}{query}-{id}-',
  autosave_restore_when_empty: false,
  autosave_retention: '2m',
  image_advtab: true,
  link_list: [
    { title: 'My page 1', value: 'https://www.tiny.cloud' },
    { title: 'My page 2', value: 'http://www.moxiecode.com' }
  ],
  image_list: [
    { title: 'My page 1', value: 'https://www.tiny.cloud' },
    { title: 'My page 2', value: 'http://www.moxiecode.com' }
  ],
  image_class_list: [
    { title: 'None', value: '' },
    { title: 'Some class', value: 'class-name' }
  ],
  importcss_append: true,
  file_picker_callback: (callback, value, meta) => {
    /* Provide file and text for the link dialog */
    if (meta.filetype === 'file') {
      callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
    }

    /* Provide image and alt text for the image dialog */
    if (meta.filetype === 'image') {
      callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
    }

    /* Provide alternative source and posted for the media dialog */
    if (meta.filetype === 'media') {
      callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
    }
  },
  height: 600,
  image_caption: true,
  quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
  noneditable_class: 'mceNonEditable',
  toolbar_mode: 'sliding',
  contextmenu: 'link image table',
  skin: useDarkMode ? 'oxide-dark' : 'oxide',
  content_css: useDarkMode ? 'dark' : 'default',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
	});

</script>



<script>
	$(document).ready(function() {

		// $('#tleader').val('6'); // Select the option with a value of '1'
		// $('#tleader').trigger('change');



		$(".edit_team").click(function() {
			$link = $(this).attr('href');
			$.get($link, function(data, status) {
				if (status == "success") {
					console.log(data);
					$("#emp_id>option").removeAttr('selected');
					$("#manager>option").removeAttr('selected');

					$('#update_form').attr('action', "{{url('leave/update')}}/" + data.id);
					$('#remarks').val(data.remarks);
					$('#from').val(data.from);
					$('#to').val(data.to);
					$('#days').val(data.no_of_days);
					$('#subject').val(data.subject);
					tinymce.activeEditor.setContent(data.message);

					$('#emp_id').val(data.emp_id);
					$('#emp_id').trigger('change');

					$('#leave_type').val(data.leave_type);
					$('#leave_type').trigger('change');

					$('#manager').val(data.manager_id);
					$('#manager').trigger('change');
				} else {
					alert("something Went Wrong");
				}
			});
		});


		/////Delete Department
		$(".delete_team").click(function() {
			$link = $(this).attr('href');
			$("#delete_link").attr("href", $link);
		});


		$('.myselect').select2({
			dropdownParent: $("#add_leave")
		});
		
		$('.editselect').select2({
			dropdownParent: $("#edit_team")
		});

	});
</script>
@endpush




@endsection