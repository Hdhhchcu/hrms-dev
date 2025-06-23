@extends("layout.main")

@section('content')

<!-- Page Wrapper -->

<div class="content">

	<!-- Breadcrumb -->
	<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
		<div class="my-auto mb-2">
			<h6 class="fw-medium d-inline-flex align-items-center mb-3 mb-sm-0"><a href="{{url('employee')}}">
					<i class="ti ti-arrow-left me-2"></i>Employee Details</a>
			</h6>
		</div>
		<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
			<div class="mb-2">
				<a href="#" data-bs-toggle="modal" data-bs-target="#add_bank_satutory" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Bank & Statutory</a>
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
		<div class="col-xl-4">
			<div class="card card-bg-1">
				<div class="card-body p-0">
					<span class="avatar avatar-xl avatar-rounded border border-2 border-white m-auto d-flex mb-2">
						<img src="{{url('')}}/{{($emp->image!='')?$emp->image:'images/employee/user.png'}}" class="w-auto h-auto" alt="Img">
					</span>
					<div class="text-center px-3 pb-3 border-bottom">
						<div class="mb-3">
							<h5 class="d-flex align-items-center justify-content-center mb-1">{{$emp->fname}} {{$emp->lname}}

								<i class="ti ti-discount-check-filled text-success ms-1"></i>
								<i class="ti ti-close text-danger ms-1"></i>

							</h5>
							<span class="badge badge-soft-dark fw-medium me-2">
								<i class="ti ti-point-filled me-1"></i>{{$emp->designations->designation}}
							</span>
							<span class="badge badge-soft-secondary fw-medium">10+ years of Experience</span>
						</div>
						<div>
							<div class="d-flex align-items-center justify-content-between mb-2">
								<span class="d-inline-flex align-items-center">
									<i class="ti ti-id me-2"></i>
									Employee ID
								</span>
								<p class="text-dark">{{$emp->emp_id}}</p>
							</div>
							<div class="d-flex align-items-center justify-content-between mb-2">
								<span class="d-inline-flex align-items-center">
									<i class="ti ti-star me-2"></i>
									Department
								</span>
								<p class="text-white badge badge-danger">{{$emp->departments->department}}</p>
							</div>
							<div class="d-flex align-items-center justify-content-between mb-2">
								<span class="d-inline-flex align-items-center">
									<i class="ti ti-calendar-check me-2"></i>
									Date Of Join
								</span>
								<p class="text-dark">{{$emp->emp_joining}}</p>
							</div>
							<div class="d-flex align-items-center justify-content-between">
								<span class="d-inline-flex align-items-center">
									<i class="ti ti-calendar-check me-2"></i>
									Report To
								</span>
								<div class="d-flex align-items-center">
									<span class="avatar avatar-sm avatar-rounded me-2">
										<img src="{{url('')}}/{{($emp->report->image!='')?$emp->report->image:'images/employee/user.png'}}" alt="Img">
									</span>
									<p class="text-gray-9 mb-0 badge badge-warning">{{$emp->report->fname}} {{$emp->report->lname}}</p>
								</div>
							</div>
							<div class="row gx-2 mt-3">
								<div class="col-6">
									<div>
										<a href="#" class="btn btn-dark w-100" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="ti ti-edit me-1"></i>Edit Info</a>
									</div>
								</div>
								<div class="col-6">
									<div>
										<a href="chat.html" class="btn btn-primary w-100"><i class="ti ti-message-heart me-1"></i>Message</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="p-3 border-bottom">
						<div class="d-flex align-items-center justify-content-between mb-2">
							<h6>Basic information</h6>
							<a href="javascript:void(0);" class="btn btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="ti ti-edit"></i></a>
						</div>
						<div class="d-flex align-items-center justify-content-between mb-2">
							<span class="d-inline-flex align-items-center">
								<i class="ti ti-phone me-2"></i>
								Phone
							</span>
							<p class="text-dark">{{$emp->emp_office_mobile}}</p>
						</div>
						<div class="d-flex align-items-center justify-content-between mb-2">
							<span class="d-inline-flex align-items-center">
								<i class="ti ti-mail-check me-2"></i>
								Email
							</span>
							<a href="javascript:void(0);" class="text-info d-inline-flex align-items-center"><span>{{$emp->emp_office_email}}</span><i class="ti ti-copy text-dark ms-2"></i></a>
						</div>
						<div class="d-flex align-items-center justify-content-between mb-2">
							<span class="d-inline-flex align-items-center">
								<i class="ti ti-gender-male me-2"></i>
								Gender
							</span>
							<p class="text-dark text-end">{{ucfirst($emp->gender)}}</p>
						</div>
						<div class="d-flex align-items-center justify-content-between mb-2">
							<span class="d-inline-flex align-items-center">
								<i class="ti ti-cake me-2"></i>
								Birdthday
							</span>
							<p class="text-dark text-end">{{$emp->emp_dob}}</p>
						</div>
						<div class="d-flex align-items-center justify-content-between">
							<span class="d-inline-flex align-items-center">
								<i class="ti ti-map-pin-check me-2"></i>
								Leave Credit Day
							</span>
							<p class="text-dark text-end">{{$emp->emp_leave_credit}}</p>
						</div>
					</div>
					<div class="p-3 border-bottom">
						<div class="d-flex align-items-center justify-content-between mb-2">
							<h6>Person Information</h6>
							<a href="javascript:void(0);" class="btn btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#edit_personal"><i class="ti ti-edit"></i></a>
						</div>
						<div class="d-flex align-items-center justify-content-between mb-2">
							<span class="d-inline-flex align-items-center">
								<i class="ti ti-e-passport me-2"></i>
								Phone No
							</span>
							<p class="text-dark">{{$emp->mobile}}</p>
						</div>
						<div class="d-flex align-items-center justify-content-between mb-2">
							<span class="d-inline-flex align-items-center">
								<i class="ti ti-calendar-x me-2"></i>
								Email
							</span>
							<p class="text-dark text-end">{{$emp->email}}</p>
						</div>
						<div class="d-flex align-items-center justify-content-between mb-2">
							<span class="d-inline-flex align-items-center">
								<i class="ti ti-gender-male me-2"></i>
								Nationality
							</span>
							<p class="text-dark text-end">{{ucfirst($emp->emp_nation)}}</p>
						</div>
						<div class="d-flex align-items-center justify-content-between mb-2">
							<span class="d-inline-flex align-items-center">
								<i class="ti ti-bookmark-plus me-2"></i>
								Religion
							</span>
							<p class="text-dark text-end">{{ucfirst($emp->religion)}}</p>
						</div>
						<div class="d-flex align-items-center justify-content-between mb-2">
							<span class="d-inline-flex align-items-center">
								<i class="ti ti-hotel-service me-2"></i>
								Marital status
							</span>
							<p class="text-dark text-end">{{ucfirst($emp->marital_status)}}</p>
						</div>
						<div class="d-flex align-items-center justify-content-between mb-2">
							<span class="d-inline-flex align-items-center">
								<i class="ti ti-briefcase-2 me-2"></i>
								Onboarding Status </span>
							<p class="text-dark text-end">{{$emp->onboarding_status}}</p>
						</div>
						<div class="d-flex align-items-center justify-content-between mb-2">
							<span class="d-inline-flex align-items-center">
								<i class="ti ti-baby-bottle me-2"></i>
								Onboarding Closed
							</span>
							<p class="text-dark text-end">{{$emp->onboarding_close}}</p>
						</div>
						<div class="d-flex align-items-center justify-content-between mb-2">
							<span class="d-inline-flex align-items-center">
								<i class="ti ti-baby-bottle me-2"></i>
								Company
							</span>
							<p class="text-dark text-end">{{ucwords($emp->company)}}</p>
						</div>
						<div class="d-flex align-items-center justify-content-between mb-2">
							<span class="d-inline-flex align-items-center">
								<i class="ti ti-baby-bottle me-2"></i>
								Category
							</span>
							<p class="text-dark text-end">{{ucfirst($emp->category)}}</p>
						</div>
						<div class="d-flex align-items-center justify-content-between mb-2">
							<span class="d-inline-flex align-items-center">
								<i class="ti ti-baby-bottle me-2"></i>
								Employment Type
							</span>
							<p class="text-dark text-end">{{ucfirst($emp->employment_type)}}</p>
						</div>
						<div class="d-flex align-items-center justify-content-between mb-2">
							<span class="d-inline-flex align-items-center">
								<i class="ti ti-baby-bottle me-2"></i>
								Resource Type
							</span>
							<p class="text-dark text-end">{{ucfirst($emp->resource_type)}}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="d-flex align-items-center justify-content-between mb-2">
				<h6>Emergency Contact Number</h6>
				<a href="javascript:void(0);" class="btn btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#edit_emergency"><i class="ti ti-edit"></i></a>
			</div>
			<div class="card">
				<div class="card-body p-0">
					<div class="p-3 border-bottom">
						<div class="d-flex align-items-center justify-content-between">
							<div>
								<span class="d-inline-flex align-items-center">
									Primary
								</span>
								<h6 class="d-flex align-items-center fw-medium mt-1">Adrian Peralt <span class="d-inline-flex mx-1"><i class="ti ti-point-filled text-danger"></i></span>Father</h6>
							</div>
							<p class="text-dark">+1 127 2685 598</p>
						</div>
					</div>
					<div class="p-3 border-bottom">
						<div class="d-flex align-items-center justify-content-between">
							<div>
								<span class="d-inline-flex align-items-center">
									Secondry
								</span>
								<h6 class="d-flex align-items-center fw-medium mt-1">Karen Wills <span class="d-inline-flex mx-1"><i class="ti ti-point-filled text-danger"></i></span>Mother</h6>
							</div>
							<p class="text-dark">+1 989 7774 787</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-8">
			<div>
				<div class="tab-content custom-accordion-items">
					<div class="tab-pane active show" id="bottom-justified-tab1" role="tabpanel">
						<div class="accordion accordions-items-seperate" id="accordionExample">
							<div class="accordion-item">
								<div class="accordion-header" id="headingOne">
									<div class="accordion-button">
										<div class="d-flex align-items-center flex-fill">
											<h5>About Employee</h5>
											<a href="#" class="btn btn-sm btn-icon ms-auto" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="ti ti-edit"></i></a>
											<a href="#" class="d-flex align-items-center collapsed collapse-arrow" data-bs-toggle="collapse" data-bs-target="#primaryBorderOne" aria-expanded="false" aria-controls="primaryBorderOne">
												<i class="ti ti-chevron-down fs-18"></i>
											</a>
										</div>
									</div>
								</div>
								<div id="primaryBorderOne" class="accordion-collapse collapse show border-top" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body mt-2">
										{{$emp->about}}
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<div class="accordion-header" id="headingTwo">
									<div class="accordion-button">
										<div class="d-flex align-items-center flex-fill">
											<h5>Bank Information</h5>
											<a href="#" class="btn btn-sm btn-icon ms-auto badge badge-primary align-content-center" data-bs-toggle="modal" data-bs-target="#add_bank">
												<i class="ti ti-plus"></i>
											</a>
											<a href="#" class="d-flex align-items-center collapsed collapse-arrow badge badge-info mx-2 align-content-center" data-bs-toggle="collapse" data-bs-target="#primaryBorderTwo" aria-expanded="false" aria-controls="primaryBorderTwo">
												<i class="ti ti-chevron-down fs-18 text-white"></i>
											</a>
										</div>
									</div>
								</div>
								<div id="primaryBorderTwo" class="accordion-collapse collapse border-top" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										@foreach($banks as $b)
										<div class="row border mb-3 p-3">
											<div class="col-md-12 mb-2">
												<span class="d-inline-flex align-items-center">
													Bank Name
												</span>
												<a href="{{url('employee/bank/delete')}}/{{$b->id}}" class="mx-2 delete_bank btn btn-sm btn-icon ms-auto badge badge-danger align-content-center float-end" data-bs-toggle="modal" data-bs-target="#add_bank">
													<i class="ti ti-trash"></i>
												</a>
												<a href="{{url('employee/bank/edit')}}/{{$b->id}}" class="mx-2 edit_bank btn btn-sm btn-icon ms-auto badge badge-primary align-content-center float-end" data-bs-toggle="modal" data-bs-target="#edit_bank">
													<i class="ti ti-edit"></i>
												</a>

												<h6 class="d-flex align-items-center fw-medium mt-1">{{$b->bank_name}}</h6>
											</div>
											<div class="col-md-4 mb-2">
												<span class="d-inline-flex align-items-center">
													Bank account no
												</span>
												<h6 class="d-flex align-items-center fw-medium mt-1">{{$b->bank_account_no}}</h6>
											</div>
											<div class="col-md-4 mb-2">
												<span class="d-inline-flex align-items-center">
													IFSC Code
												</span>
												<h6 class="d-flex align-items-center fw-medium mt-1">{{$b->bank_ifsc}}</h6>
											</div>
											<div class="col-md-4 mb-2">
												<span class="d-inline-flex align-items-center">
													MICR Code
												</span>
												<h6 class="d-flex align-items-center fw-medium mt-1">{{$b->bank_micr}}</h6>
											</div>
											<div class="col-md-4 mb-2">
												<span class="d-inline-flex align-items-center">
													Passbook
												</span>
												<br>
												@if($b->bank_passbook!="")
												<a target="_blank" href="{{url('')}}/{{$b->bank_passbook}}" class="btn btn-primary btn-sm">View</a>
												@endif
											</div>
											<div class="col-md-4 mb-2">
												<span class="d-inline-flex align-items-center">
													Cheque
												</span>
												<br>
												@if($b->bank_cheque!="")
												<a target="_blank" href="{{url('')}}/{{$b->bank_cheque}}" class="btn btn-secondary btn-sm">View</a>
												@endif
											</div>
											<div class="col-md-4 mb-2">
												<span class="d-inline-flex align-items-center">
													Status
												</span>
												<br>
												@if($b->status==1)
												<a href="#" class="btn btn-sm btn-success">Active</a>
												@else
												<a href="#" class="btn btn-sm btn-danger">Inactive</a>
												@endif
											</div>
											<div class="col-md-12 mb-2">
												<span class="d-inline-flex align-items-center">
													Branch
												</span>
												<h6 class="d-flex align-items-center fw-medium mt-1">{{$b->branch}}</h6>
											</div>
										</div>
										@endforeach
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<div class="accordion-header" id="hheadingTwo">
									<div class="accordion-button">
										<div class="d-flex align-items-center flex-fill">
											<h5>Documents</h5>
											<a href="#" class="btn btn-sm btn-icon ms-auto badge badge-primary align-content-center" data-bs-toggle="modal" data-bs-target="#add_documents">
												<i class="ti ti-plus"></i>
											</a>
											<a href="#" class="d-flex align-items-center collapsed collapse-arrow badge badge-info mx-2 align-content-center" data-bs-toggle="collapse" data-bs-target="#hprimaryBorderTwo" aria-expanded="false" aria-controls="hprimaryBorderTwo">
												<i class="ti ti-chevron-down fs-18 text-white"></i>
											</a>
										</div>
									</div>
								</div>
								<div id="hprimaryBorderTwo" class="accordion-collapse collapse border-top" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										@foreach($documents as $b)
										<div class="row border mb-3 p-3">
											<div class="col-md-12 mb-2">
												<span class="d-inline-flex align-items-center">
													Document Name
												</span>
												<a href="{{url('employee/docuement/delete')}}/{{$b->id}}" class="mx-2 delete_document btn btn-sm btn-icon ms-auto badge badge-danger align-content-center float-end" data-bs-toggle="modal" data-bs-target="#delete_document">
													<i class="ti ti-trash"></i>
												</a>
												<a href="{{url('employee/document/edit')}}/{{$b->id}}" class="mx-2 edit_document btn btn-sm btn-icon ms-auto badge badge-primary align-content-center float-end" data-bs-toggle="modal" data-bs-target="#edit_document">
													<i class="ti ti-edit"></i>
												</a>

												<h6 class="d-flex align-items-center fw-medium mt-1">{{$b->document_name}}</h6>
											</div>
											<div class="col-md-12 mb-2">
												<span class="d-inline-flex align-items-center">
													Remarks
												</span>
												<h6 class="d-flex align-items-center fw-medium mt-1">{{$b->remarks}}</h6>
											</div>

											<div class="col-md-6 mb-2">
												<span class="d-inline-flex align-items-center">
													Document File
												</span>
												<br>
												@if($b->file!="")
												<a target="_blank" href="{{url('')}}/{{$b->file}}" class="btn btn-primary btn-sm">View</a>
												@endif
											</div>

											<div class="col-md-6 mb-2">
												<span class="d-inline-flex align-items-center">
													Status
												</span>
												<br>
												@if($b->status==1)
												<a href="#" class="btn btn-sm btn-success">Active</a>
												@else
												<a href="#" class="btn btn-sm btn-danger">Inactive</a>
												@endif
											</div>

										</div>
										@endforeach
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<div class="accordion-header" id="headingThree">
									<div class="accordion-button">
										<div class="d-flex align-items-center justify-content-between flex-fill">
											<h5>Address</h5>
											<a href="#" class="btn btn-sm btn-icon ms-auto badge badge-primary align-content-center" data-bs-toggle="modal" data-bs-target="#add_address">
												<i class="ti ti-plus"></i>
											</a>
											<a href="#" class="d-flex align-items-center collapsed collapse-arrow badge badge-info mx-2 align-content-center" data-bs-toggle="collapse" data-bs-target="#primaryBorderThree" aria-expanded="false" aria-controls="primaryBorderThree">
												<i class="ti ti-chevron-down fs-18 text-white"></i>
											</a>
										</div>
									</div>
								</div>
								<div id="primaryBorderThree" class="accordion-collapse collapse border-top" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
									<div class="accordion-body">

										@foreach($address as $a)
										<div class="row border p-2 mb-2">

											<div class="col-md-3 mb-2">
												<span class="d-inline-flex align-items-center">
													Address Type
												</span>
												<h6 class="d-flex align-items-center fw-medium mt-1">{{$a->address_type}}</h6>
											</div>
											<div class="col-md-6 mb-2">
												<span class="d-inline-flex align-items-center">
													Address Proof Document
												</span>
												<br>
												<a target="_blank" href="{{url('')}}/{{$a->file}}" class="btn btn-primary btn-sm">View</a>
											</div>
											<div class="col-md-3 mb-2">
												<a href="{{url('employee/address/delete')}}/{{$a->id}}" class="mx-2 delete_address btn btn-sm btn-icon ms-auto badge badge-danger align-content-center float-end" data-bs-toggle="modal" data-bs-target="#delete_address">
													<i class="ti ti-trash"></i>
												</a>
												<a href="{{url('employee/address/edit')}}/{{$a->id}}" class="mx-2 edit_address btn btn-sm btn-icon ms-auto badge badge-primary align-content-center float-end" data-bs-toggle="modal" data-bs-target="#edit_address">
													<i class="ti ti-edit"></i>
												</a>

											</div>
											<div class="col-md-3 mb-2">
												<span class="d-inline-flex align-items-center">
													Country
												</span>
												<h6 class="d-flex align-items-center fw-medium mt-1">{{$a->country}}</h6>
											</div>
											<div class="col-md-3 mb-2">
												<span class="d-inline-flex align-items-center">
													State
												</span>
												<h6 class="d-flex align-items-center fw-medium mt-1">{{$a->state}}</h6>
											</div>
											<div class="col-md-3 mb-2">
												<span class="d-inline-flex align-items-center">
													City
												</span>
												<h6 class="d-flex align-items-center fw-medium mt-1">{{$a->city}}</h6>
											</div>
											<div class="col-md-3 mb-2">
												<span class="d-inline-flex align-items-center">
													Pincode
												</span>
												<h6 class="d-flex align-items-center fw-medium mt-1">{{$a->pincode}}</h6>
											</div>
											<div class="col-md-12 mb-2">
												<span class="d-inline-flex align-items-center">
													Full Address
												</span>
												<h6 class="d-flex align-items-center fw-medium mt-1">{{$a->address}}</h6>
											</div>
										</div>
										@endforeach

									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="accordion-item">
										<div class="row">
											<div class="accordion-header" id="headingFour">
												<div class="accordion-button">
													<div class="d-flex align-items-center justify-content-between flex-fill">
														<h5>Education Details</h5>
														<div class="d-flex">
															<a href="#" class="btn btn-sm btn-icon ms-auto badge badge-primary align-content-center" data-bs-toggle="modal" data-bs-target="#add_education">
																<i class="ti ti-plus"></i>
															</a>
															<a href="#" class="d-flex align-items-center collapsed collapse-arrow badge badge-info mx-2 align-content-center" data-bs-toggle="collapse" data-bs-target="#primaryBorderFour" aria-expanded="false" aria-controls="primaryBorderFour">
																<i class="ti ti-chevron-down fs-18 text-white"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div id="primaryBorderFour" class="accordion-collapse collapse border-top" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
												<div class="accordion-body">
													<div>
														@foreach($education as $e)
														<div class="mb-3">
															<div class="d-flex align-items-center justify-content-between">
																<div>
																	<span class="d-inline-flex align-items-center fw-normal">
																		{{$e->institute_name}}
																	</span>
																	<h6 class="d-flex align-items-center mt-1">{{$e->course}}</h6>
																</div>
																<p class="text-dark">{{$e->start_date}} - {{$e->end_date}}</p>
															</div>
														</div>
														@endforeach
												
										
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="accordion-item">
										<div class="row">
											<div class="accordion-header" id="headingFive">
												<div class="accordion-button collapsed">
													<div class="d-flex align-items-center justify-content-between flex-fill">
														<h5>Experience</h5>
														<div class="d-flex">
														<a href="#" class="btn btn-sm btn-icon ms-auto badge badge-primary align-content-center" data-bs-toggle="modal" data-bs-target="#add_experience">
																<i class="ti ti-plus"></i>
															</a>
															<a href="#" class="d-flex align-items-center collapsed collapse-arrow badge badge-info mx-2 align-content-center" data-bs-toggle="collapse" data-bs-target="#primaryBorderFive" aria-expanded="false" aria-controls="primaryBorderFive">
																<i class="ti ti-chevron-down fs-18 text-white"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div id="primaryBorderFive" class="accordion-collapse collapse border-top" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
												<div class="accordion-body">
													<div>
														@foreach($experience as $ex)
														<div class="mb-3">
															<div class="d-flex align-items-center justify-content-between">
																<div>
																	<h6 class="d-inline-flex align-items-center fw-medium">
																		{{$ex->company}}
																	</h6>
																	<span class="d-flex align-items-center badge bg-secondary-transparent mt-1"><i class="ti ti-point-filled me-1"></i>{{$ex->designation}}</span>
																</div>
																<p class="text-dark">{{$ex->start_date}} - {{$ex->end_date}}</p>
															</div>
														</div>
														@endforeach
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<div class="contact-grids-tab p-0 mb-3">
										<ul class="nav nav-underline" id="myTab" role="tablist">
											<li class="nav-item" role="presentation">
												<button class="nav-link active" id="info-tab2" data-bs-toggle="tab" data-bs-target="#basic-info2" type="button" role="tab" aria-selected="true">Projects</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link" id="address-tab2" data-bs-toggle="tab" data-bs-target="#address2" type="button" role="tab" aria-selected="false">Assets</button>
											</li>
										</ul>
									</div>
									<div class="tab-content" id="myTabContent3">
										<div class="tab-pane fade show active" id="basic-info2" role="tabpanel" aria-labelledby="info-tab2" tabindex="0">
											<div class="row">
												<div class="col-md-6 d-flex">
													<div class="card flex-fill mb-4 mb-md-0">
														<div class="card-body">
															<div class="d-flex align-items-center pb-3 mb-3 border-bottom">
																<a href="project-details.html" class="flex-shrink-0 me-2">
																	<img src="assets/img/social/project-03.svg" alt="Img">
																</a>
																<div>
																	<h6 class="mb-1"><a href="project-details.html">World Health</a></h6>
																	<div class="d-flex align-items-center">
																		<p class="mb-0 fs-13">8 tasks</p>
																		<p class="fs-13"><span class="mx-1"><i class="ti ti-point-filled text-primary"></i></span>15 Completed</p>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div>
																		<span class="mb-1 d-block">Deadline</span>
																		<p class="text-dark">31 July 2025</p>
																	</div>
																</div>
																<div class="col-md-6">
																	<div>
																		<span class="mb-1 d-block">Project Lead</span>
																		<a href="#" class="fw-normal d-flex align-items-center">
																			<img class="avatar avatar-sm rounded-circle me-2" src="assets/img/profiles/avatar-01.jpg" alt="Img">
																			Leona
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-6 d-flex">
													<div class="card flex-fill mb-0">
														<div class="card-body">
															<div class="d-flex align-items-center pb-3 mb-3 border-bottom">
																<a href="project-details.html" class="flex-shrink-0 me-2">
																	<img src="assets/img/social/project-01.svg" alt="Img">
																</a>
																<div>
																	<h6 class="mb-1 text-truncate"><a href="project-details.html">Hospital Administration</a></h6>
																	<div class="d-flex align-items-center">
																		<p class="mb-0 fs-13">8 tasks</p>
																		<p class="fs-13"><span class="mx-1"><i class="ti ti-point-filled text-primary"></i></span>15 Completed</p>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div>
																		<span class="mb-1 d-block">Deadline</span>
																		<p class="text-dark">31 July 2025</p>
																	</div>
																</div>
																<div class="col-md-6">
																	<div>
																		<span class="mb-1 d-block">Project Lead</span>
																		<a href="#" class="fw-normal d-flex align-items-center">
																			<img class="avatar avatar-sm rounded-circle me-2" src="assets/img/profiles/avatar-01.jpg" alt="Img">
																			Leona
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="address2" role="tabpanel" aria-labelledby="address-tab2" tabindex="0">
											<div class="row">
												<div class="col-md-12 d-flex">
													<div class="card flex-fill">
														<div class="card-body">
															<div class="row align-items-center">
																<div class="col-md-8">
																	<div class="d-flex align-items-center">
																		<a href="project-details.html" class="flex-shrink-0 me-2">
																			<img src="assets/img/products/product-05.jpg" class="img-fluid rounded-circle" alt="img">
																		</a>
																		<div>
																			<h6 class="mb-1"><a href="project-details.html">Dell Laptop - #343556656</a></h6>
																			<div class="d-flex align-items-center">
																				<p><span class="text-primary">AST - 001<i class="ti ti-point-filled text-primary mx-1"></i></span>Assigned on 22 Nov, 2022 10:32AM </p>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-md-3">
																	<div>
																		<span class="mb-1 d-block">Assigned by</span>
																		<a href="#" class="fw-normal d-flex align-items-center">
																			<img class="avatar avatar-sm rounded-circle me-2" src="assets/img/profiles/avatar-01.jpg" alt="Img">
																			Andrew Symon
																		</a>
																	</div>
																</div>
																<div class="col-md-1">
																	<div class="dropdown ms-2">
																		<a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
																			<i class="ti ti-dots-vertical"></i>
																		</a>
																		<ul class="dropdown-menu dropdown-menu-end p-3">
																			<li>
																				<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#asset_info">View Info</a>
																			</li>
																			<li>
																				<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#refuse_msg">Raise Issue </a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12 d-flex">
													<div class="card flex-fill mb-0">
														<div class="card-body">
															<div class="row align-items-center">
																<div class="col-md-8">
																	<div class="d-flex align-items-center">
																		<a href="project-details.html" class="flex-shrink-0 me-2">
																			<img src="assets/img/products/product-06.jpg" class="img-fluid rounded-circle" alt="img">
																		</a>
																		<div>
																			<h6 class="mb-1"><a href="project-details.html">Bluetooth Mouse - #478878</a></h6>
																			<div class="d-flex align-items-center">
																				<p><span class="text-primary">AST - 001<i class="ti ti-point-filled text-primary mx-1"></i></span>Assigned on 22 Nov, 2022 10:32AM </p>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-md-3">
																	<div>
																		<span class="mb-1 d-block">Assigned by</span>
																		<a href="#" class="fw-normal d-flex align-items-center">
																			<img class="avatar avatar-sm rounded-circle me-2" src="assets/img/profiles/avatar-01.jpg" alt="Img">
																			Andrew Symon
																		</a>
																	</div>
																</div>
																<div class="col-md-1">
																	<div class="dropdown ms-2">
																		<a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
																			<i class="ti ti-dots-vertical"></i>
																		</a>
																		<ul class="dropdown-menu dropdown-menu-end p-3">
																			<li>
																				<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#asset_info">View Info</a>
																			</li>
																			<li>
																				<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#refuse_msg">Raise Issue </a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- /Page Wrapper -->

<!-- Edit Employee -->
<div class="modal fade" id="edit_employee">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<div class="d-flex align-items-center">
					<h4 class="modal-title me-2">Edit Employee</h4><span>Employee ID : EMP -0024</span>
				</div>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="employees-grid.html">
				<div class="contact-grids-tab">
					<ul class="nav nav-underline" id="myTab2" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="info-tab3" data-bs-toggle="tab" data-bs-target="#basic-info3" type="button" role="tab" aria-selected="true">Basic Information</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="address-tab3" data-bs-toggle="tab" data-bs-target="#address3" type="button" role="tab" aria-selected="false">Permissions</button>
						</li>
					</ul>
				</div>
				<div class="tab-content" id="myTabContent2">
					<div class="tab-pane fade show active" id="basic-info3" role="tabpanel" aria-labelledby="info-tab3" tabindex="0">
						<div class="modal-body pb-0 ">
							<div class="row">
								<div class="col-md-12">
									<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
										<div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
											<img src="assets/img/users/user-13.jpg" alt="img" class="rounded-circle">
										</div>
										<div class="profile-upload">
											<div class="mb-2">
												<h6 class="mb-1">Upload Profile Image</h6>
												<p class="fs-12">Image should be below 4 mb</p>
											</div>
											<div class="profile-uploader d-flex align-items-center">
												<div class="drag-upload-btn btn btn-sm btn-primary me-2">
													Upload
													<input type="file" class="form-control image-sign" multiple="">
												</div>
												<a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">First Name <span class="text-danger"> *</span></label>
										<input type="text" class="form-control" value="Anthony">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Last Name</label>
										<input type="email" class="form-control" value="Lewis">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Employee ID <span class="text-danger"> *</span></label>
										<input type="text" class="form-control" value="Emp-001">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Joining Date <span class="text-danger"> *</span></label>
										<div class="input-icon-end position-relative">
											<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="17-10-2022">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Username <span class="text-danger"> *</span></label>
										<input type="text" class="form-control" value="Anthony">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Email <span class="text-danger"> *</span></label>
										<input type="email" class="form-control" value="anthony@example.com	">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3 ">
										<label class="form-label">Password <span class="text-danger"> *</span></label>
										<div class="pass-group">
											<input type="password" class="pass-input form-control">
											<span class="ti toggle-password ti-eye-off"></span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3 ">
										<label class="form-label">Confirm Password <span class="text-danger"> *</span></label>
										<div class="pass-group">
											<input type="password" class="pass-inputs form-control">
											<span class="ti toggle-passwords ti-eye-off"></span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Phone Number <span class="text-danger"> *</span></label>
										<input type="text" class="form-control" value="(123) 4567 890">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Company<span class="text-danger"> *</span></label>
										<input type="text" class="form-control" value="Abac Company">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Department</label>
										<select class="select">
											<option>Select</option>
											<option>All Department</option>
											<option selected>Finance</option>
											<option>Developer</option>
											<option>Executive</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Designation</label>
										<select class="select">
											<option>Select</option>
											<option selected>Finance</option>
											<option>Developer</option>
											<option>Executive</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">About <span class="text-danger"> *</span></label>
										<textarea class="form-control" rows="3">As an award winning designer, I deliver exceptional quality work and bring value to your brand! With 10 years of experience and 350+ projects completed worldwide with satisfied customers, I developed the 360° brand approach, which helped me to create numerous brands that are relevant, meaningful and loved.
													</textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save </button>
						</div>
					</div>
					<div class="tab-pane fade" id="address3" role="tabpanel" aria-labelledby="address-tab3" tabindex="0">
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

<!-- Edit Personal -->
<div class="modal fade" id="edit_personal">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Edit Personal Info</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="employee-details.html">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Passport No <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Passport Expiry Date <span class="text-danger"> *</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar text-gray-7"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Nationality <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Religion</label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Marital status <span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>Yes</option>
									<option>Nos</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Employment spouse</label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">No. of children</label>
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Edit Personal -->

<!-- Edit Emergency Contact -->
<div class="modal fade" id="edit_emergency">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Emergency Contact Details</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="employee-details.html">
				<div class="modal-body pb-0">
					<div class="border-bottom mb-3 ">
						<div class="row">
							<h5 class="mb-3">Secondary Contact Details</h5>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Name <span class="text-danger"> *</span></label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Relationship </label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Phone No 1 <span class="text-danger"> *</span></label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Phone No 2 </label>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<h5 class="mb-3">Secondary Contact Details</h5>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Name <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Relationship </label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Phone No 1 <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Phone No 2 </label>
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Edit Emergency Contact -->

<!-- Add Bank done -->
<div class="modal fade" id="add_bank">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Bank Details</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="{{url('employee/bank/add')}}" enctype="multipart/form-data" method="post">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Bank Name <span class="text-danger"> *</span></label>
								<input type="hidden" value="{{$emp->id}}" name="emp_id">
								@csrf
								<input type="text" name="bank_name" class="form-control">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Bank account No </label>
								<input type="text" name="bankaccount" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">IFSC Code</label>
								<input type="text" name="ifsc" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">MICR Code</label>
								<input type="text" name="micr" class="form-control">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Branch Address</label>
								<input type="text" name="branch" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Bank Passbook</label>
								<input type="file" name="passbook" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Bank Cheque</label>
								<input type="file" name="cheque" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Status</label>
								<select name="status" class="select">
									<option value="1">Active</option>
									<option value="2">Inactive</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add Bank done-->

<!-- Edit Bank  done -->
<div class="modal fade" id="edit_bank">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Edit Bank Details</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="#" method="post" enctype="multipart/form-data" id="update_bank">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Bank Name <span class="text-danger"> *</span></label>
								<input type="hidden" value="{{$emp->id}}" name="emp_id">
								@csrf
								<input type="text" id="bank_name" name="bank_name" class="form-control">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Bank account No </label>
								<input type="text" id="bank_account" name="bankaccount" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">IFSC Code</label>
								<input type="text" id="ifsc" name="ifsc" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">MICR Code</label>
								<input type="text" id="micr" name="micr" class="form-control">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Branch Address</label>
								<input type="text" id="branch" name="branch" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Bank Passbook</label>
								<input type="file" name="passbook" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Bank Cheque</label>
								<input type="file" name="cheque" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Status</label>
								<select name="status" class="select">
									<option value="1">Active</option>
									<option value="2">Inactive</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Edit Bank done -->

<!-- Add Family -->
<div class="modal fade" id="edit_familyinformation">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Family Information</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="employee-details.html">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Name <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Relationship </label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Phone </label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Passport Expiry Date <span class="text-danger"> *</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar text-gray-7"></i>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add Family -->

<!-- Add Education -->
<div class="modal fade" id="add_education">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Education Information</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="{{url('employee/education/add')}}" method="post"  >
				<div class="modal-body pb-0" >
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Institution Name <span class="text-danger"> *</span></label>
								<input type="hidden" value="{{$emp->id}}" name="emp_id">
								@csrf
								<input type="text" name="name" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Course <span class="text-danger"> *</span></label>
								<input type="text" name="course" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Start Date <span class="text-danger"> *</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" name="start_date" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar text-gray-7"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">End Date <span class="text-danger"> *</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" name="end_date" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar text-gray-7"></i>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add Education -->

<!-- Edit Education -->
<div class="modal fade" id="edit_education">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Education Information</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="employee-details.html">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Institution Name <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Course <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Start Date <span class="text-danger"> *</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar text-gray-7"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">End Date <span class="text-danger"> *</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar text-gray-7"></i>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Edit Education -->

<!-- Add Address -->
<div class="modal fade" id="add_address">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Address</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="{{url('employee/address/add')}}" method="post" enctype="multipart/form-data">
				<div class="modal-body pb-0">
					<div class="row">


						<div class="col-md-3">
							<div class="mb-3">
								<label class="form-label">Country <span class="text-danger"> *</span></label>
								<input type="hidden" name="emp_id" value="{{$emp->id}}">
								@csrf
								<input type="text" name="country" class="form-control">
							</div>
						</div>
						<div class="col-md-3">
							<div class="mb-3">
								<label class="form-label">State<span class="text-danger"> *</span></label>
								<input type="text" name="state" class="form-control">
							</div>
						</div>
						<div class="col-md-3">
							<div class="mb-3">
								<label class="form-label">City<span class="text-danger"> *</span></label>
								<input type="text" name="city" class="form-control">
							</div>
						</div>
						<div class="col-md-3">
							<div class="mb-3">
								<label class="form-label">Pincode<span class="text-danger"> *</span></label>
								<input type="text" name="pincode" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">File <span class="text-danger"> *</span></label>
								<input type="file" name="file" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Address Type</label>
								<select name="address_type" class="select">
									<option>Present</option>
									<option>Permanent</option>
								</select>
							</div>
						</div>

						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Full Address</label>
								<textarea name="address" class="w-100" cols="5"></textarea>
							</div>
						</div>


					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add Address -->

<!-- Edit Address -->
<div class="modal fade" id="edit_address">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Edit Address</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="#" id="update_address" method="post" enctype="multipart/form-data">
				<div class="modal-body pb-0">
					<div class="row">


						<div class="col-md-3">
							<div class="mb-3">
								<label class="form-label">Country <span class="text-danger"> *</span></label>
								<input type="hidden" name="emp_id" value="{{$emp->id}}">
								@csrf
								<input type="text" id="country" name="country" class="form-control">
							</div>
						</div>
						<div class="col-md-3">
							<div class="mb-3">
								<label class="form-label">State<span class="text-danger"> *</span></label>
								<input type="text" id="state" name="state" class="form-control">
							</div>
						</div>
						<div class="col-md-3">
							<div class="mb-3">
								<label class="form-label">City<span class="text-danger"> *</span></label>
								<input type="text" id="city" name="city" class="form-control">
							</div>
						</div>
						<div class="col-md-3">
							<div class="mb-3">
								<label class="form-label">Pincode<span class="text-danger"> *</span></label>
								<input type="text" id="pincode" name="pincode" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">File <span class="text-danger"> *</span></label>
								<input type="file" name="file" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Address Type</label>
								<select name="address_type" class="select">
									<option>Present</option>
									<option>Permanent</option>
								</select>
							</div>
						</div>

						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Full Address</label>
								<textarea name="address" id="address" class="w-100" cols="5"></textarea>
							</div>
						</div>


					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Edit Address -->

<!-- Add Documents -->
<div class="modal fade" id="add_documents">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Document</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="{{url('employee/document/add')}}" method="post" enctype="multipart/form-data">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Document Name <span class="text-danger"> *</span></label>
								<input type="hidden" name="emp_id" value="{{$emp->id}}">
								@csrf
								<input type="text" name="name" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">File <span class="text-danger"> *</span></label>
								<input type="file" name="file" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Status</label>
								<select name="status" class="select">
									<option value="1">Active</option>
									<option value="2">Inactive</option>
								</select>
							</div>
						</div>

						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Remarks</label>
								<textarea name="remarks" class="w-100" cols="5"></textarea>
							</div>
						</div>


					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add Documents -->

<!-- Edit Documents -->
<div class="modal fade" id="edit_document">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Edit Document</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="#" method="post" enctype="multipart/form-data" id="update_document">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Document Name <span class="text-danger"> *</span></label>
								<input type="hidden" name="emp_id" value="{{$emp->id}}">
								@csrf
								<input type="text" name="name" id="document_name" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">File <span class="text-danger"> *</span></label>
								<input type="file" name="file" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Status</label>
								<select name="status" class="select">
									<option value="1">Active</option>
									<option value="2">Inactive</option>
								</select>
							</div>
						</div>

						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Remarks</label>
								<textarea name="remarks" id="document_remarks" class="w-100" cols="5"></textarea>
							</div>
						</div>


					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Edit Documents -->

<!-- Add Experience -->
<div class="modal fade" id="add_experience">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Company Information</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="{{url('employee/experience/add')}}" method="post" >
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Previous Company Name <span class="text-danger"> *</span></label>
								<input type="hidden" value="{{$emp->id}}" name="emp_id">
								@csrf
								<input type="text"  name="name"  class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Designation <span class="text-danger"> *</span></label>
								<input type="text" name="designation" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Start Date <span class="text-danger"> *</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" name="start_date" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar text-gray-7"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">End Date <span class="text-danger"> *</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" name="end_date" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar text-gray-7"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-check-label d-flex align-items-center mt-0">
									<input name="present" value="1" class="form-check-input mt-0 me-2" type="checkbox" checked="">
									<span class="text-dark">Check if you working present</span>
								</label>
							</div>
						</div>

						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Remarks <span class="text-danger"> *</span></label>
								<input type="text" name="remarks" class="form-control">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add Experience -->

<!-- Edit Experience -->
<div class="modal fade" id="edit_experience">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Company Information</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="employee-details.html">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Previous Company Name <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Designation <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Start Date <span class="text-danger"> *</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar text-gray-7"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">End Date <span class="text-danger"> *</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar text-gray-7"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-check-label d-flex align-items-center mt-0">
									<input class="form-check-input mt-0 me-2" type="checkbox" checked="">
									<span class="text-dark">Check if you working present</span>
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Edit Experience -->

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

<!-- Add Statuorty -->
<div class="modal fade" id="add_bank_satutory">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Bank & Statutory</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="employee-details.html">
				<div class="modal-body pb-0">
					<div class="border-bottom mb-4">
						<h5 class="mb-3">Basic Salary Information</h5>
						<div class="row mb-2">
							<div class="col-md-4">
								<div class="mb-3">
									<label class="form-label">Salary basis <span class="text-danger"> *</span></label>
									<select class="select">
										<option>Select</option>
										<option>Weekly</option>
										<option>Monthly</option>
										<option>Annualy</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="mb-3">
									<label class="form-label">Salary basis</label>
									<input type="text" class="form-control" value="$">
								</div>
							</div>
							<div class="col-md-4">
								<div class="mb-3">
									<label class="form-label">Payment type</label>
									<select class="select">
										<option>Select</option>
										<option>Cash</option>
										<option>Debit Card</option>
										<option>Mobile Payment</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="border-bottom mb-4">
						<h5 class="mb-3">PF Information</h5>
						<div class="row mb-2">
							<div class="col-md-4">
								<div class="mb-3">
									<label class="form-label">PF contribution <span class="text-danger"> *</span></label>
									<select class="select">
										<option>Select</option>
										<option>Employee Contribution</option>
										<option>Employer Contribution</option>
										<option>Provident Fund Interest</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="mb-3">
									<label class="form-label">PF No</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-4">
								<div class="mb-3">
									<label class="form-label">Employee PF rate</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Additional rate</label>
									<select class="select">
										<option>Select</option>
										<option>ESI</option>
										<option>EPS</option>
										<option>EPF</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Total rate</label>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<h5 class="mb-3">ESI Information</h5>
					<div class="row">
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">ESI contribution<span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>Employee Contribution</option>
									<option>Employer Contribution</option>
									<option>Maternity Benefit </option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">ESI Number</label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Employee ESI rate<span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Additional rate</label>
								<select class="select">
									<option>Select</option>
									<option>ESI</option>
									<option>EPS</option>
									<option>EPF</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Total rate</label>
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add Statuorty -->

<!-- Asset Information -->
<div class="modal fade" id="asset_info">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Asset Information</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="modal-body">
				<div class="bg-light p-3 rounded d-flex align-items-center mb-3">
					<span class="avatar avatar-lg flex-shrink-0 me-2">
						<img src="assets/img/laptop.jpg" alt="img" class="ig-fluid rounded-circle">
					</span>
					<div>
						<h6>Dell Laptop - #343556656</h6>
						<p class="fs-13"><span class="text-primary">AST - 001 </span><i class="ti ti-point-filled text-primary"></i> Assigned on 22 Nov, 2022 10:32AM</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="mb-3">
							<p class="fs-13 mb-0">Type</p>
							<p class="text-gray-9">Laptop</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<p class="fs-13 mb-0">Brand</p>
							<p class="text-gray-9">Dell</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<p class="fs-13 mb-0">Category</p>
							<p class="text-gray-9">Computer</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<p class="fs-13 mb-0">Serial No</p>
							<p class="text-gray-9">3647952145678</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<p class="fs-13 mb-0">Cost</p>
							<p class="text-gray-9">$800</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<p class="fs-13 mb-0">Vendor</p>
							<p class="text-gray-9">Compusoft Systems Ltd.,</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<p class="fs-13 mb-0">Warranty</p>
							<p class="text-gray-9">12 Jan 2022 - 12 Jan 2026</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<p class="fs-13 mb-0">Location</p>
							<p class="text-gray-9">46 Laurel Lane, TX 79701</p>
						</div>
					</div>
				</div>
				<div>
					<p class="fs-13 mb-2">Asset Images</p>
					<div class="d-flex align-items-center">
						<img src="assets/img/laptop-01.jpg" alt="img" class="img-fluid rounded me-2">
						<img src="assets/img/laptop-2.jpg" alt="img" class="img-fluid rounded me-2">
						<img src="assets/img/laptop-3.jpg" alt="img" class="img-fluid rounded">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Asset Information -->

<!-- Refuse -->
<div class="modal fade" id="refuse_msg">
	<div class="modal-dialog modal-dialog-centered modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Raise Issue</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="employee-details.html">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Description<span class="text-danger"> *</span></label>
								<textarea class="form-control" rows="4"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Refuse -->

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
					<a href="#" id="delete_bank_link" class="btn btn-danger">Yes, Delete</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Delete Modal -->

</div>
<!-- /Main Wrapper -->



@push("script")
<script>
	$(document).ready(function() {

		//////edit bank details
		$(".edit_bank").click(function() {
			$link = $(this).attr('href');
			$.get($link, function(data, status) {
				if (status == "success") {
					console.log(data);
					// $("#status>option").removeAttr('selected');

					$('#update_bank').attr('action', "{{url('employee/bank/update')}}/" + data.id);
					$('#bank_name').val(data.bank_name);
					$('#bank_account').val(data.bank_account_no);
					$('#ifsc').val(data.bank_ifsc);
					$('#micr').val(data.bank_micr);
					$('#branch').val(data.branch);

				} else {
					alert("something Went Wrong");
				}
			});
		});

		//////edit document details
		$(".edit_document").click(function() {
			$link = $(this).attr('href');
			$.get($link, function(data, status) {
				if (status == "success") {
					console.log(data);
					// $("#status>option").removeAttr('selected');

					$('#update_document').attr('action', "{{url('employee/document/update')}}/" + data.id);
					$('#document_name').val(data.document_name);
					$('#document_remarks').val(data.remarks);

				} else {
					alert("something Went Wrong");
				}
			});
		});

		//////edit address details
		$(".edit_address").click(function() {
			$link = $(this).attr('href');
			$.get($link, function(data, status) {
				if (status == "success") {
					console.log(data);
					// $("#status>option").removeAttr('selected');

					$('#update_address').attr('action', "{{url('employee/address/update')}}/" + data.id);
					$('#country').val(data.country);
					$('#state').val(data.state);
					$('#city').val(data.city);
					$('#pincode').val(data.pincode);
					$('#address').val(data.address);

				} else {
					alert("something Went Wrong");
				}
			});
		});


		/////Delete bank
		$(".delete_bank").click(function() {
			$link = $(this).attr('href');
			$("#delete_bank_link").attr("href", $link);
		});


	});
</script>
@endpush





@endsection