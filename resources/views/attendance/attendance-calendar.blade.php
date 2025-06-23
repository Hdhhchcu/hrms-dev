@extends('layout.main')
@section("content")

<div class="content">
	<!-- Breadcrumb -->
	<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
		<div class="my-auto mb-2">
			<h2 class="mb-1">Attendance Calendar</h2>
			<nav>
				<ol class="breadcrumb mb-0">
					<li class="breadcrumb-item">
						<a href="{{url('')}}"><i class="ti ti-smart-home"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Attendance Calendar</li>
				</ol>
			</nav>

		</div>
		<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
			<div class="me-2 mb-2">
				<div class="input-icon-end position-relative">
					<input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
					<span class="input-icon-addon">
						<i class="ti ti-chevron-down"></i>
					</span>
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
				<a href="{{url('attendance')}}" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Attendance List</a>
			</div>
			<div class="ms-2 head-icons">
				<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
					<i class="ti ti-chevrons-up"></i>
				</a>
			</div>
		</div>
	</div>

	<div class="row">

		<!-- Calendar Sidebar -->
		<div class="col-xxl-3 col-xl-4">
			<div class="card">
				<div class="card-body p-3">
					<div class="border-bottom pb-2 mb-4">
						<div class="datepic"></div>
					</div>

					<!-- Attendance -->
					<div class="border-bottom pb-4 mb-4">
						<div class="d-flex align-items-center justify-content-between mb-2">
							<h5>Attendance </h5>
							<a href="#" class="link-primary" data-bs-toggle="modal" data-bs-target="#add_event"><i class="ti ti-square-rounded-plus-filled fs-16"></i></a>
						</div>
						<p class="fs-12 mb-2">Drag and drop your event or click in the calendar</p>
						<div id='external-events'>
							<div class="fc-event bg-transparent-success mb-1" data-event='{ "title": "Team Events" }' data-event-classname="bg-transparent-success">
								<i class="ti ti-square-rounded text-success me-2"></i>Team Events
							</div>
							<div class="fc-event bg-transparent-warning mb-1" data-event='{ "title": "Team Events" }' data-event-classname="bg-transparent-warning">
								<i class="ti ti-square-rounded text-warning me-2"></i>Work
							</div>
							<div class="fc-event bg-transparent-danger mb-1" data-event='{ "title": "External" }' data-event-classname="bg-transparent-danger">
								<i class="ti ti-square-rounded text-danger me-2"></i>External
							</div>
							<div class="fc-event bg-transparent-skyblue mb-1" data-event='{ "title": "Projects" }' data-event-classname="bg-transparent-skyblue">
								<i class="ti ti-square-rounded text-skyblue me-2"></i>Projects
							</div>
							<div class="fc-event bg-transparent-purple mb-1" data-event='{ "title": "Applications" }' data-event-classname="bg-transparent-purple">
								<i class="ti ti-square-rounded text-purple me-2"></i>Applications
							</div>
							<div class="fc-event bg-transparent-info mb-0" data-event='{ "title": "Desgin" }' data-event-classname="bg-transparent-info">
								<i class="ti ti-square-rounded text-info me-2"></i>Desgin
							</div>
						</div>
					</div>
					<!-- /Attendance -->

					<!-- Upcoming Attendance -->
					<div class="border-bottom pb-2 mb-4">
						<h5 class="mb-2">Upcoming Attendance<span class="badge badge-success rounded-pill ms-2">15</span></h5>
						<div class="border-start border-purple border-3 mb-3">
							<div class="ps-3">
								<h6 class="fw-medium mb-1">Meeting with Team Dev</h6>
								<p class="fs-12"><i class="ti ti-calendar-check text-info me-2"></i>15 Mar 2025</p>
							</div>
						</div>
						<div class="border-start border-pink border-3 mb-3">
							<div class="ps-3">
								<h6 class="fw-medium mb-1">Design System With Client</h6>
								<p class="fs-12"><i class="ti ti-calendar-check text-info me-2"></i>24 Mar 2025</p>
							</div>
						</div>
						<div class="border-start border-success border-3 mb-3">
							<div class="ps-3">
								<h6 class="fw-medium mb-1">UI/UX Team Call</h6>
								<p class="fs-12"><i class="ti ti-calendar-check text-info me-2"></i>28 Mar 2025</p>
							</div>
						</div>
					</div>
					<!-- /Upcoming Attendance -->


				</div>
			</div>

		</div>
		<!-- /Calendar Sidebar -->

		<div class="col-xxl-9 col-xl-8 theiaStickySidebar">
			<div class="card border-0">
				<div class="card-body">
					<div id="customcalendar"></div>
				</div>
			</div>
		</div>

	</div>

</div>



<!-- Add New Attendance -->
<div class="modal fade" id="add_event">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add New Attendance</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="{{url('event/add')}}" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="col-12">
							<div class="mb-3">
								<label class="form-label">Attendance Name</label>
								<input type="text" name="name" class="form-control">
								@csrf
							</div>
						</div>
						<div class="col-12">
							<div class="mb-3">
								<label class="form-label">Attendance Date</label>
								<input name="date" type="date" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Start Time</label>
								<div class="input-icon-end position-relative">
									<input name="start" type="text" class="form-control timepicker">
									<span class="input-icon-addon">
										<i class="ti ti-clock text-gray-7"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">End Time</label>
								<div class="input-icon-end position-relative">
									<input name="end" type="text" class="form-control timepicker">
									<span class="input-icon-addon">
										<i class="ti ti-clock text-gray-7"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="mb-0">
								<label class="form-label">Descriptions</label>
								<textarea class="form-control" name="description" rows="3"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Add Attendance</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add New Attendance -->

<!-- Attendance -->
<div class="modal fade" id="event_modal">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header bg-dark modal-bg">
				<div class="modal-title text-white"><span id="eventTitle"></span></div>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="modal-body" >
				<p class="btn btn-primary btn-sm mb-3"> <i class="ti ti-calendar-check text-white me-2"></i><span id="startdate"></span> </p>
				{{-- <p class="btn btn-success btn-sm mb-3">Present</p> --}}
				<div id="checkoutd"></div>
				
			</div>
		</div>
	</div>
</div>
<!-- /Attendance -->



@push("script")


<script>
	if ($('#customcalendar').length > 0) {
		document.addEventListener('DOMContentLoaded', function() {
			var Draggable = FullCalendar.Draggable;

			// Initialize external events (the draggable ones)
			var containerEl = document.getElementById('external-events');
			new Draggable(containerEl, {
				itemSelector: '.fc-event',

				eventData: function(eventEl) {
					var className = eventEl.getAttribute('data-event-classname'); // Get the class name
					return {
						title: eventEl.innerText.trim(),
						classNames: [className], // Pass dynamic class name
					};
				}
			});

			//////event data
			let $events = [];

			$.get("{{url('attendance/allattendance')}}", function(data) {
				// console.log(data);
				$events=data;
				// for (x in data) {
				// 	// console.log(data[x]);
				// 	$events[x] = {
				// 		title: "present",
				// 		className: 'badge badge-success-transparent',
				// 		backgroundColor: '#D2F5E1',
				// 		textColor: "#111827",
				// 		start: data[x].date,
				// 		startdate: data[x].date,
				// 		enddate: new Date($.now() - 168000000).toJSON().slice(0, 10),
				// 		starttime: data[x].start,
				// 		endtime: data[x].end,
				// 		description: data[x].description,
				// 	};
				// }

				var calendarEl = document.getElementById('customcalendar');
				var calendar = new FullCalendar.Calendar(calendarEl, {
					headerToolbar: {
						left: 'prev,next today',
						center: 'title',
						right: 'dayGridMonth,timeGridWeek,timeGridDay'
					},
					initialView: 'dayGridMonth',
					events: $events,
					headerToolbar: {
						start: 'today prev,next',
						end: 'dayGridMonth,dayGridWeek,dayGridDay',
						center: 'title'
					},
					dayCellDidMount: function(info) {
						const date = info.date;
						const day = date.getDay(); // 0 = Sunday, 6 = Saturday
						if (day === 0 || day === 6) {
							// Apply background color
							info.el.style.backgroundColor = 'gray'; // color 		
						}
					},
					eventClick: function(info) {
						// console.log(info);
						// Open modal
						$('#event_modal').modal('show');

						// Populate modal with event details
						document.getElementById('eventTitle').innerText = info.event.title;
						document.getElementById('startdate').innerText = info.event.extendedProps.startDate;
						$data=info.event.extendedProps.description;

						$html="";$inout="";
                          for(x in $data){
							if($data[x].check=="in")
								$inout=` <span class="badge badge-success me-3">In</span> `;
							else
								$inout=` <span class="badge badge-danger me-2">Out</span>`;
							$html+=`<p class="bg-dark text-white p-2 mb-0">${$inout}  ${$data[x].time} </p>`;
						  }
						document.getElementById('checkoutd').innerHTML = $html;
					},
					editable: true,
					droppable: true, // Enable drag and drop
					drop: function(info) {
						// If the event is dropped, do something here (optional)
						console.log('Attendance dropped');
					},
					eventReceive: function(info) {
						// When event is dropped on calendar
						console.log('Attendance added', info.event.title);
					}
				});
				calendar.render();

			});

		});
	}
</script>

<script>
	$(document).ready(function() {

		$(".edit_team").click(function() {
			$link = $(this).attr('href');
			$.get($link, function(data, status) {
				if (status == "success") {
					console.log(data);
					$("#emp_id>option").removeAttr('selected');
					$("#manager>option").removeAttr('selected');

					$('#update_form').attr('action', "{{url('holiday/update')}}/" + data.id);

					$('#title').val(data.title);
					$('#description').val(data.description);
					$('#date').val(data.date);

					$('#status').val(data.status);
					$('#status').trigger('change');

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

	});
</script>
@endpush

@endsection