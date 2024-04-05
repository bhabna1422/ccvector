@extends('admin.layouts.admin_main')
@section('title')
    <title>Admin -Dashboard</title>
@endsection
@section('content-conatiner')




	<div class="main-container">
		<div class="xs-pd-20-10 pd-ltr-20">
			<div class="title pb-20">
				<h2 class="h3 mb-0">Overview</h2>
			</div>

			<div class="row pb-10">
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">75</div>
								<div class="font-14 text-secondary weight-500">
									Courses
								</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#00eccf">
									<i class="icon-copy dw dw-calendar1"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">124,551</div>
								<div class="font-14 text-secondary weight-500">
									Total Students
								</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#ff5b5b">
									<span class="icon-copy fa fa-user"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">400+</div>
								<div class="font-14 text-secondary weight-500">
									Total Posts
								</div>
							</div>
							<div class="widget-icon">
								<div class="icon">
									<i class="icon-copy fa fa-book" aria-hidden="true"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">50,00</div>
								<div class="font-14 text-secondary weight-500">Exams</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#09cc06">
									<i class="icon-copy fa fa-book" aria-hidden="true"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			{{-- <div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By
				<a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div> --}}
		</div>
	</div>
	<!-- welcome modal start -->

    @endsection
