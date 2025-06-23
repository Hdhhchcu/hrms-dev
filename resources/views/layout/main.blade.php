<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{$page}}-HRMS | Codleo</title>
	{{-- css  --}}
	@include('layout.css')

	@stack('css')
  
</head>

<body>


    {{-- page loader --}}
	<!-- <div id="global-loader">
		<div class="page-loader"></div>
	</div> -->

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		{{-- header  --}}
		@include('layout.header')

		{{-- sidebar  --}}
		@include('layout.sidebar')


        {{--Page Content--}}

        <!-- Page Wrapper -->
		<div class="page-wrapper">
        @yield('content')

        {{-- footer  --}}
        @include('layout.footer')

		</div>
		<!-- /Page Wrapper -->


	</div>
	<!-- /Main Wrapper -->




	{{-- js  --}}
	@include("layout.js")

	@stack('script')

</body>

</html>