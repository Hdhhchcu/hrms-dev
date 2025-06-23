@extends('layout.main')

@section("content")

<div class="content">

	<!-- Breadcrumb -->
	<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
		<div class="my-auto mb-2">
			<h2 class="mb-1">Attendance</h2>
			<nav>
				<ol class="breadcrumb mb-0">
					<li class="breadcrumb-item">
						<a href="{{url('')}}"><i class="ti ti-smart-home"></i></a>
					</li>
					<li class="breadcrumb-item">

					<li class="breadcrumb-item active" aria-current="page">Attendance</li>
				</ol>
			</nav>
		</div>
		<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
			<div class="me-2 mb-2">
				<div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
					<a href="attendance-admin.html" class="btn btn-icon btn-sm active bg-primary text-white me-1"><i class="ti ti-brand-days-counter"></i></a>
					<a href="attendance-admin.html" class="btn btn-icon btn-sm"><i class="ti ti-calendar-event"></i></a>
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
				<a href="{{url('attendance/calendar')}}" class="btn btn-primary d-flex align-items-center" ><i class="ti ti-file-analytics me-2"></i>Attendance Calendar</a>
			</div>
			<div class="ms-2 head-icons">
				<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
					<i class="ti ti-chevrons-up"></i>
				</a>
			</div>
		</div>
	</div>
	<!-- /Breadcrumb -->

	<div class="row">
		<div class="col-xl-3 col-lg-4 d-flex">
			<div class="card flex-fill">
				<div class="card-body">
					<div class="mb-3 text-center">
						@php 
						if(date('H')<12){
							$greet="Morning";
						}elseif(date('H')<=16 && date("H")>=12){
							$greet="Afternoon";
						}else{
							$greet="Evening";
						}
						@endphp
						<h6 class="fw-medium text-gray-5 mb-2">Good {{$greet}}, Adrian</h6>
						<h4><span id="time"></span>, {{date("d F Y")}}</h4>
							<script>
									setInterval(function() {
										var date = new Date();
										var h = date.getHours();
										var m = date.getMinutes();
										var s = date.getSeconds();
										var a = "AM";
										if (h == 0) {
											h = "12";
										}
										if (h > 12) {
											h = h - 12;
											a = "PM"
										}
										if (s < 10) {
											s = "0" + s;
										}
										if (m < 10) {
											m = "0" + m;
										}
										if (h < 10) {
											h = "0" + h;
										}

										document.getElementById("time").innerHTML = h + ":" + m + ":" + s + " " + a;
									}, 1000)
							</script>
					</div>
					<div class="attendance-circle-progress mx-auto mb-3" data-value='65'>
						<span class="progress-left">
							<span class="progress-bar border-success"></span>
						</span>
						<span class="progress-right">
							<span class="progress-bar border-success"></span>
						</span>
						<div class="avatar avatar-xxl avatar-rounded">
							<img src="{{url('system')}}/assets/img/profiles/avatar-27.jpg" alt="Img">
						</div>
					</div>
					<div class="text-center">
						<div class="badge badge-md badge-primary mb-3">Production : <span id="prod_hours"></span></div>
						<h6 class="fw-medium d-flex align-items-center justify-content-center mb-3">
							<i class="ti ti-fingerprint text-primary me-1"></i>
							Punch In at {{(isset($check_in->time))?$check_in->time:""}}
						</h6>
						<form action="{{url('attendance/add')}}" method="post">
							@csrf
							<input type="hidden" name="check" value="in" >
							<input type="hidden" name="emp_id" value="{{$emp_id}}" >
							<button type="submit" class="btn btn-dark w-100">Punch {{($check_out)?(($check_out->check=="in")?ucfirst("out"):ucfirst("in")):"In"}}</button>
						</form>

					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-9 col-lg-8 d-flex">
			<div class="row flex-fill">
				<div class="col-xl-3 col-md-6">
					<div class="card">
						<div class="card-body">
							<div class="border-bottom mb-2 pb-2">
								<span class="avatar avatar-sm bg-primary mb-2"><i class="ti ti-clock-stop"></i></span>
								<h2 class="mb-2"> <span id="today_duration"></span>  / <span class="fs-20 text-gray-5"> 9h</span></h2>
								<p class="fw-medium text-truncate">Total Hours Today</p>
							</div>
							<div>
								<p class="d-flex align-items-center fs-13">
									<span class="avatar avatar-xs rounded-circle bg-success flex-shrink-0 me-2">
										<i class="ti ti-arrow-up fs-12"></i>
									</span>
									<span>This Week</span>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="card">
						<div class="card-body">
							<div class="border-bottom mb-2 pb-2">
								<span class="avatar avatar-sm bg-dark mb-2"><i class="ti ti-clock-up"></i></span>
								<h2 class="mb-2"> <span id="week_hours"></span> / <span class="fs-20 text-gray-5"> 40</span></h2>
								<p class="fw-medium text-truncate">Total Hours Week</p>
							</div>
							<div>
								<p class="d-flex align-items-center fs-13">
									<span class="avatar avatar-xs rounded-circle bg-success flex-shrink-0 me-2">
										<i class="ti ti-arrow-up fs-12"></i>
									</span>
									<span>Last 5 Days</span>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="card">
						<div class="card-body">
							<div class="border-bottom mb-2 pb-2">
								<span class="avatar avatar-sm bg-info mb-2"><i class="ti ti-calendar-up"></i></span>
								<h2 class="mb-2"><span id="month_hours"></span>
									 / <span class="fs-20 text-gray-5"> 98</span>
								</h2>
								<p class="fw-medium text-truncate">Total Hours Month</p>
							</div>
							<div>
								<p class="d-flex align-items-center fs-13 text-truncate">
									<span class="avatar avatar-xs rounded-circle bg-danger flex-shrink-0 me-2">
										<i class="ti ti-arrow-down fs-12"></i>
									</span>
									<span>This Month</span>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="card">
						<div class="card-body">
							<div class="border-bottom mb-2 pb-2">
								<span class="avatar avatar-sm bg-pink mb-2"><i class="ti ti-calendar-star"></i></span>
								<h2 class="mb-2"><span id="overtime_hours"></span></h2>
								<p class="fw-medium text-truncate">Overtime this Month</p>
							</div>
							<div>
								<p class="d-flex align-items-center fs-13 text-truncate">
									<span class="avatar avatar-xs rounded-circle bg-danger flex-shrink-0 me-2">
										<i class="ti ti-arrow-down fs-12"></i>
									</span>
									<span>This Month</span>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-xl-3">
									<div class="mb-3">
										<p class="d-flex align-items-center mb-1"><i class="ti ti-point-filled text-dark-transparent me-1"></i>Total Working hours</p>
										<h3 id="g_work_hours">12h 36m</h3>
									</div>
								</div>
								<div class="col-xl-3">
									<div class="mb-3">
										<p class="d-flex align-items-center mb-1"><i class="ti ti-point-filled text-success me-1"></i>Productive Hours</p>
										<h3 id="g_production_hours">08h 36m</h3>
									</div>
								</div>
								<div class="col-xl-3">
									<div class="mb-3">
										<p class="d-flex align-items-center mb-1"><i class="ti ti-point-filled text-warning me-1"></i>Break hours</p>
										<h3 id="g_break">22m 15s</h3>
									</div>
								</div>
								<div class="col-xl-3">
									<div class="mb-3">
										<p class="d-flex align-items-center mb-1"><i class="ti ti-point-filled text-info me-1"></i>Overtime</p>
										<h3 id="g_overtime">02h 15m</h3>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="progress bg-transparent-dark mb-3" style="height: 24px;">
										<div class="progress-bar bg-white rounded" role="progressbar" style="width: 18%;"></div>
										<div class="progress-bar bg-success rounded me-2" role="progressbar" style="width: 18%;"></div>
										<div class="progress-bar bg-warning rounded me-2" role="progressbar" style="width: 5%;"></div>
										<div class="progress-bar bg-success rounded me-2" role="progressbar" style="width: 28%;"></div>
										<div class="progress-bar bg-warning rounded me-2" role="progressbar" style="width: 17%;"></div>
										<div class="progress-bar bg-success rounded me-2" role="progressbar" style="width: 22%;"></div>
										<div class="progress-bar bg-warning rounded me-2" role="progressbar" style="width: 5%;"></div>
										<div class="progress-bar bg-info rounded me-2" role="progressbar" style="width: 3%;"></div>
										<div class="progress-bar bg-info rounded" role="progressbar" style="width: 2%;"></div>
										<div class="progress-bar bg-white rounded" role="progressbar" style="width: 18%;"></div>
									</div>

								</div>
								<div class="co-md-12">
									<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
										<span class="fs-10">06:00</span>
										<span class="fs-10">07:00</span>
										<span class="fs-10">08:00</span>
										<span class="fs-10">09:00</span>
										<span class="fs-10">10:00</span>
										<span class="fs-10">11:00</span>
										<span class="fs-10">12:00</span>
										<span class="fs-10">01:00</span>
										<span class="fs-10">02:00</span>
										<span class="fs-10">03:00</span>
										<span class="fs-10">04:00</span>
										<span class="fs-10">05:00</span>
										<span class="fs-10">06:00</span>
										<span class="fs-10">07:00</span>
										<span class="fs-10">08:00</span>
										<span class="fs-10">09:00</span>
										<span class="fs-10">10:00</span>
										<span class="fs-10">11:00</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="card">
		<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
			<h5>Attendance</h5>
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
						Select Status
					</a>
					<ul class="dropdown-menu  dropdown-menu-end p-3">
						<li>
							<a href="javascript:void(0);" class="dropdown-item rounded-1">Present</a>
						</li>
						<li>
							<a href="javascript:void(0);" class="dropdown-item rounded-1">Absent</a>
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
							<th>Date</th>
							<th>Check In</th>
							<th>Status</th>
							<th>Check Out</th>
							<th>Break</th>
							<th>Late</th>
							<th>Overtime</th>
							<th>Production Hours/Working Hours</th>
						</tr>

					</thead>
					<tbody>
						@php  $overtimemon=$month=$week=$i=0; $count=count((array)$attendance); @endphp 
					@foreach($attendance as $a)
						<tr>
							<td>
								{{substr($a->time,0,10)}} 
							</td>
							<td>{{(substr($a->first_check_in,11,25))}}</td>
							<td>
								@if($a->work_minutes>480)
								<span class="badge badge-success-transparent d-inline-flex align-items-center">
									<i class="ti ti-point-filled me-1"></i>Present
								</span>
								@elseif($a->work_minutes>240 || $a->work_minutes <480)
								<span class="badge badge-warning-transparent d-inline-flex align-items-center">
									<i class="ti ti-point-filled me-1"></i>Half Day
								</span>
								@else
								<span class="badge badge-danger-transparent d-inline-flex align-items-center">
									<i class="ti ti-point-filled me-1"></i>Absent
								</span>
								@endif
							</td>
							<td>
								{{substr($a->last_check_out,11,25)}}
							</td>
							<td>
								{{$a->break_time}}
							</td>
							<td>
								{{$a->late_time}}
							</td>
							<td>
								{{$a->overtime}}
							</td>
							<td>
								@php $i++; 
								if(($count-$i)<6){
									$week=$week+(int)$a->work_hours;
								}
								if(substr($a->date,0,7)==date("Y-m")){

									$month+=(int)$a->work_hours;
								}

								$overtimemon+=(int)$a->overtime;
								@endphp 
							  <script>
								document.getElementById("today_duration").innerHTML="{{$a->work_hours}}";
								document.getElementById("prod_hours").innerHTML="{{$a->work_hours}}";
								document.getElementById("week_hours").innerHTML="{{$week}}";
								document.getElementById("month_hours").innerHTML="{{$month}}";
								document.getElementById("overtime_hours").innerHTML="{{$overtimemon}}";


								document.getElementById("g_work_hours").innerHTML="{{$a->work_hours}}";
								document.getElementById("g_production_hours").innerHTML="{{$a->production_hours}}";
								document.getElementById("g_overtime").innerHTML="{{$a->overtime}}";
								document.getElementById("g_break").innerHTML="{{$a->break_time}}";
							  </script>
								@if($a->work_minutes>480)
								<span class="badge badge-success d-inline-flex align-items-center">
									<i class="ti ti-point-filled me-1"></i>{{$a->work_hours}}
								</span>
								@elseif($a->work_minutes>240  && $a->work_minutes<480)
								<span class="badge badge-warning d-inline-flex align-items-center">
									<i class="ti ti-point-filled me-1"></i>{{$a->work_hours}}
								</span>
								@else
								<span class="badge badge-danger d-inline-flex align-items-center">
									<i class="ti ti-point-filled me-1"></i>{{$a->work_hours}}
								</span>
								@endif

								@if($a->work_minutes>480)
								<span class="badge badge-success d-inline-flex align-items-center">
									<i class="ti ti-point-filled me-1"></i>{{$a->production_hours}}
								</span>
								@elseif($a->work_minutes>240  && $a->work_minutes<480)
								<span class="badge badge-warning d-inline-flex align-items-center">
									<i class="ti ti-point-filled me-1"></i>{{$a->production_hours}}
								</span>
								@else
								<span class="badge badge-danger d-inline-flex align-items-center">
									<i class="ti ti-point-filled me-1"></i>{{$a->production_hours}}
								</span>
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


<!-- Attendance Report -->
<div class="modal fade" id="attendance_report">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Attendance</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="modal-body">
				<div class="card shadow-none bg-transparent-light">
					<div class="card-body pb-1">
						<div class="row">
							<div class="col-sm-3">
								<div class="mb-3">
									<span>Date</span>
									<p class="text-gray-9 fw-medium">15 Apr 2025</p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="mb-3">
									<span>Punch in at</span>
									<p class="text-gray-9 fw-medium">09:00 AM</p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="mb-3">
									<span>Punch out at</span>
									<p class="text-gray-9 fw-medium">06:45 PM</p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="mb-3">
									<span>Status</span>
									<p class="text-gray-9 fw-medium">Present</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card shadow-none border mb-0">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-3">
								<div class="mb-4">
									<p class="d-flex align-items-center mb-1"><i class="ti ti-point-filled text-dark-transparent me-1"></i>Total Working hours</p>
									<h3>12h 36m</h3>
								</div>
							</div>
							<div class="col-xl-3">
								<div class="mb-4">
									<p class="d-flex align-items-center mb-1"><i class="ti ti-point-filled text-success me-1"></i>Productive Hours</p>
									<h3>08h 36m</h3>
								</div>
							</div>
							<div class="col-xl-3">
								<div class="mb-4">
									<p class="d-flex align-items-center mb-1"><i class="ti ti-point-filled text-warning me-1"></i>Break hours</p>
									<h3>22m 15s</h3>
								</div>
							</div>
							<div class="col-xl-3">
								<div class="mb-4">
									<p class="d-flex align-items-center mb-1"><i class="ti ti-point-filled text-info me-1"></i>Overtime</p>
									<h3>02h 15m</h3>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 mx-auto">
								<div class="progress bg-transparent-dark mb-3" style="height: 24px;">
									<div class="progress-bar bg-success rounded me-2" role="progressbar" style="width: 18%;"></div>
									<div class="progress-bar bg-warning rounded me-2" role="progressbar" style="width: 5%;"></div>
									<div class="progress-bar bg-success rounded me-2" role="progressbar" style="width: 28%;"></div>
									<div class="progress-bar bg-warning rounded me-2" role="progressbar" style="width: 17%;"></div>
									<div class="progress-bar bg-success rounded me-2" role="progressbar" style="width: 22%;"></div>
									<div class="progress-bar bg-warning rounded me-2" role="progressbar" style="width: 5%;"></div>
									<div class="progress-bar bg-info rounded me-2" role="progressbar" style="width: 3%;"></div>
									<div class="progress-bar bg-info rounded" role="progressbar" style="width: 2%;"></div>
								</div>

							</div>
							<div class="co-md-12">
								<div class="d-flex align-items-center justify-content-between">
									<span class="fs-10">06:00</span>
									<span class="fs-10">07:00</span>
									<span class="fs-10">08:00</span>
									<span class="fs-10">09:00</span>
									<span class="fs-10">10:00</span>
									<span class="fs-10">11:00</span>
									<span class="fs-10">12:00</span>
									<span class="fs-10">01:00</span>
									<span class="fs-10">02:00</span>
									<span class="fs-10">03:00</span>
									<span class="fs-10">04:00</span>
									<span class="fs-10">05:00</span>
									<span class="fs-10">06:00</span>
									<span class="fs-10">07:00</span>
									<span class="fs-10">08:00</span>
									<span class="fs-10">09:00</span>
									<span class="fs-10">10:00</span>
									<span class="fs-10">11:00</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Attendance Report -->

@endsection