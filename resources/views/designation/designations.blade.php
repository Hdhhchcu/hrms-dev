@extends("layout.main")

@section('content')

		<!-- Page Wrapper -->

			<div class="content">

				<!-- Breadcrumb -->
				<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
					<div class="my-auto mb-2">
						<h2 class="mb-1">Designations</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="{{url('')}}"><i class="ti ti-smart-home"></i></a>
								</li>
						
								<li class="breadcrumb-item active" aria-current="page">Designations</li>
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
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_designation" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Designation</a>
						</div>
						<div class="head-icons ms-2">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<!-- Performance Indicator list -->
				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Designation List</h5>
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
							<div class="dropdown me-3">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Department
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Finance</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Application Development</a>
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
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Recently Added</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
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
										<th>Designation </th>
										<th>Department</th>
										<th>No of Employees</th>
										<th>Status</th>
										<th></th>
									</tr>
								</thead>
								<tbody>

								@foreach($designation as $d)
									<tr>
										<!-- <td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td> -->
										<td>
											
												<h6 class="fw-medium fs-14 text-dark">{{$d->designation}}</h6>
											
										
										</td>
										<td>{{$d->departments->department}}</td>
										<td>
											{{$d->employee->count()}}
										</td>
										<td>
											@if($d->status==1)
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
												<a href="{{url('designation/edit')}}/{{$d->id}}" class="me-2 edit_designation" data-bs-toggle="modal" data-bs-target="#edit_designation"><i class="ti ti-edit"></i></a>
												<a class="delete_designation" href="{{url('designation/delete')}}/{{$d->id}}" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
									</tr>
								@endforeach

								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /Performance Indicator list -->

			</div>

	
		<!-- /Page Wrapper -->

		<!-- Add Designation -->
		<div class="modal fade" id="add_designation">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Designation</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="{{url('designation/add')}}" method="post">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Designation Name</label>
										<input type="text" name="name" class="form-control">
									</div>	
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<div><div>@csrf</div></div>
										<label class="form-label">Department Name</label>
										<select class="select" name="department">
											@foreach($departments as $d)
											<option value="{{$d->id}}">{{$d->department}}</option>
											@endforeach
										</select> 
									</div>	
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Status</label>
										<select class="select" name="status">
											<option value="1">Active</option>
											<option value="2">Inactive</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Designation</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Designation -->

		<!-- Edit Designation -->
		<div class="modal fade" id="edit_designation">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Designation</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="" id="update_designation" method="post" >
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Designation Name</label>
										<input type="text" class="form-control" id="edit_name" value="" name="name">
									</div>	
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Department Name</label>
										<div><div>@csrf</div></div>
										<select name="department" id="department" class="select">
											@foreach($departments as $d)
											<option value="{{$d->id}}">{{$d->department}}</option>
											@endforeach
										</select>
									</div>	
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Status</label>
										<select class="select" id="status" name="status">
											<option value="1" >Active</option>
											<option value="2" >Inactive</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Department -->

		<!-- Delete Modal -->
		<div class="modal fade" id="delete_modal">
			<div class="modal-dialog modal-dialog-centered">
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
			$(document).ready(function(){
			
				$(".edit_designation").click(function(){
					$link=$(this).attr('href');
					$.get($link,function(data,status){
						if(status=="success"){
							 $("#status>option").removeAttr('selected');
							$(`#department>option`).removeAttr('selected');
							$('#update_designation').attr('action',"{{url('designation/update')}}/"+data.id);
							$('#edit_name').val(data.designation);
							$(`#department>option[value='${data.department}']`).attr('selected','selected');
							$(`#status>option[value='${data.status}']`).attr('selected','selected');
						}else{
							alert("something Went Wrong");
						}
					});
				});


				/////Delete Department
				$(".delete_designation").click(function(){
					$link=$(this).attr('href');
					$("#delete_link").attr("href",$link);
				});


			});
		</script>
		@endpush



	@endsection