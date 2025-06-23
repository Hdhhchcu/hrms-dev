@extends("layout.main")

@section('content')
<div class="content">

	<!-- Breadcrumb -->
	<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
		<div class="my-auto mb-2">
			<h2 class="mb-1">Asset</h2>
			<nav>
				<ol class="breadcrumb mb-0">
					<li class="breadcrumb-item">
						<a href="{{url('')}}"><i class="ti ti-smart-home"></i></a>
					</li>
					<li class="breadcrumb-item">
						Asset
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
				<a href="#" data-bs-toggle="modal" data-bs-target="#add_assets" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Asset</a>
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
							<h4>{{$asset->count()}}</h4>
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
			<h5>Asset List</h5>
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
							<th>Image</th>
							<th>Name</th>
							<th>Serial No</th>
							<th>Assigned By</th>
							<th>Assigned To</th>
							<th>Remarks</th>
							<th></th>
						</tr>
					</thead>
					<tbody>

						@foreach($asset as $e)
						<tr>
							<td><img src="{{url('')}}/{{$e->image}}" style="height:50px;max-width:150px;background:gray" alt="image"></td>
							<td>{{$e->name}}</td>
							<td>{{$e->serial_no}}</td>
							<td>{{$e->assignee->fname}} {{$e->assignee->lname}}</td>
							<td>{{$e->employee->fname}} {{$e->employee->lname}}</td>
							<td>{{$e->remarks}}</td>
			

							<td>
								<div class="action-icon d-inline-flex">
									<a class="edit_assets" href="{{url('assetmanage/edit')}}/{{$e->id}}" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_assets"><i class="ti ti-edit"></i></a>
									<a class="delete_policy" href="{{url('assetmanage/delete')}}/{{$e->id}}" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
<div class="modal fade" id="add_assets">
	<div class="modal-dialog modal-dialog-centered modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<div class="d-flex align-items-center">
					<h4 class="modal-title me-2">Add New Asset</h4>
				</div>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="{{url('assetmanage/add')}}" enctype="multipart/form-data" method="post">

				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="info-tab" tabindex="0">
						<div class="modal-body pb-0 ">
							<div class="row">
							 
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Name <span class="text-danger"> *</span></label>
										@csrf
										<input type="text" name="name" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Serial No <span class="text-danger"> *</span></label>
										<input type="text" name="serial_no" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Assigned By <span class="text-danger"> *</span></label>
									     <select name="assiged" class="select">
											@foreach($employee as $e)
											<option value="{{$e->id}}">{{$e->fname}} {{$e->lname}}</option>
											@endforeach
										 </select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Assigned To (Employee) <span class="text-danger"> *</span></label>
									     <select name="emp_id" class="select">
											@foreach($employee as $e)
											<option value="{{$e->id}}">{{$e->fname}} {{$e->lname}}</option>
											@endforeach
										 </select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Assigned Time</label>
										<input name="assignedtime" type="datetime-local" class="form-control" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Cost</label>
										<input name="cost" type="text" class="form-control" />									
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Warranty</label>
										<input name="warranty" class="form-control" type="text" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Image</label>
										<input name="file" class="form-control" type="file" />
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Description <span class="text-danger"> *</span></label>
										<textarea name="remarks" class="form-control" rows="3"></textarea>
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
<div class="modal fade" id="edit_assets">
	<div class="modal-dialog modal-dialog-centered">
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
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="info-tab" tabindex="0">
						<div class="modal-body pb-0 ">
							<div class="row">
							 
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Name <span class="text-danger"> *</span></label>
										@csrf
										<input type="text" id="name" name="name" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Serial No <span class="text-danger"> *</span></label>
										<input type="text" id="serial_no" name="serial_no" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Assigned By <span class="text-danger"> *</span></label>
									     <select name="assiged" id="assigned" class="select">
											@foreach($employee as $e)
											<option value="{{$e->id}}">{{$e->fname}} {{$e->lname}}</option>
											@endforeach
										 </select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Assigned To (Employee) <span class="text-danger"> *</span></label>
									     <select name="emp_id" id="emp_id" class="select">
											@foreach($employee as $e)
											<option value="{{$e->id}}">{{$e->fname}} {{$e->lname}}</option>
											@endforeach
										 </select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Assigned Time</label>
										<input id="assignedtime" name="assignedtime" type="datetime-local" class="form-control" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Cost</label>
										<input name="cost" id="cost" type="text" class="form-control" />									
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Warranty</label>
										<input id="warranty" name="warranty" class="form-control" type="text" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Image</label>
										<input name="file" class="form-control" type="file" />
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Description <span class="text-danger"> *</span></label>
										<textarea id="remarks" name="remarks" class="form-control" rows="3"></textarea>
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
								<a href="#" class="btn btn-dark w-100">Back to List</a>
							</div>
							<div class="col-6">
								<a href="#" class="btn btn-primary w-100">Detail Page</a>
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

<script>
	$(document).ready(function() {


		$(".edit_assets").click(function() {
			$link = $(this).attr('href');
			$.get($link, function(data, status) {
				if (status == "success") {
					
					$('#update_form').attr('action', "{{url('assetmanage/update')}}/" + data.id);
			
					$('#name').val(data.name);
					$('#cost').val(data.cost);
					$('#warranty').val(data.warranty);
					$('#serial_no').val(data.serial_no);
					$('#assignedtime').val(data.assignedtime);
					$('#remarks').val(data.remarks);

					$("#emp_id").val(data.emp_id);
					$("#emp_id").trigger("change");

					$("#assigned").val(data.assigned_by);
					$("#assigned").trigger("change");



				} else {
					alert("something Went Wrong");
				}
			});
		});


		/////Delete Department
		$(".delete_policy").click(function() {
			$link = $(this).attr('href');
			$("#delete_link").attr("href", $link);
		});

	});
</script>
@endpush




@endsection