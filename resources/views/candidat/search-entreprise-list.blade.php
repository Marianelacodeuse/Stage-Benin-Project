@extends('layouts.app')
@section('search-entreprise-list')
<!-- ============================ Breadcrums Start================================== -->
<div class="container-fluid breadcrumbs breadcrumbs-light">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<a href="index-2.html">
					Home
				</a>
				<a href="javascript:void(0)">
					<span>
						<i class="ti-arrow-right"></i>
					</span>
					Search Employers
				</a>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<!-- ============================ Breadcrums End ================================== -->

<!-- ============================ Main Wrap Start ================================== -->
<section>
	<div class="container">


		<div class="row">

			

			<div class="col-xl-12 col-lg-12">

				<!-- Row -->
				<div class="row">

					<!-- layout Wrapper -->
					<div class="col-md-12 mb-1">
						<div class="layout-switcher-wrap">
							<div class="layout-switcher-left">{{$nbrUser}} Result Found</div>
							<div class="layout-switcher">
								<ul>
									<li><a href="{{route('seg')}}"><i class="ti-layout-grid3"></i></a></li>
									<li class="active"><a href="{{route('sel')}}"><i class="ti-view-list"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<!-- Row -->
				<div class="row">
					<div class="col-md-12">
						<div class="filter-alphabetical">
							<ul>
								<li><a href="#">A</a></li>
								<li><a href="#">b</a></li>
								<li><a href="#">c</a></li>
								<li><a href="#">d</a></li>
								<li><a href="#">e</a></li>
								<li><a href="#">f</a></li>
								<li><a href="#">g</a></li>
								<li><a href="#">h</a></li>
								<li><a href="#">i</a></li>
								<li><a href="#">j</a></li>
								<li><a href="#">k</a></li>
								<li><a href="#">l</a></li>
								<li><a href="#">m</a></li>
								<li><a href="#">n</a></li>
								<li><a href="#">o</a></li>
								<li><a href="#">p</a></li>
								<li><a href="#">q</a></li>
								<li><a href="#">r</a></li>
								<li><a href="#">s</a></li>
								<li><a href="#">...</a></li>
								<li><a href="#">x</a></li>
								<li><a href="#">y</a></li>
								<li><a href="#">z</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Row -->
				<div class="row">
					@foreach($users as $user)

					<div class="candidate-list-layout">
						<div class="cll-wrap">
							<div class="cll-thumb">
								<a href="resume-detail.html"><img src="{{asset('uploads/images/' . $user->logo_path)}}" class="img-responsive img-circle" alt="" /></a>
							</div>
							<div class="cll-caption">
								<h4><a href="{{url('entreprise/entreprise-detail/'.$user->id)}}">{{$user->name}}</a><span><i class="ti-briefcase"></i>Wordpress Expert</span></h4>
								<ul>
									<li><i class="ti-location-pin text-danger"></i>1081 Wayback Lane, London</li>
									<li><i class="ti-time text-success"></i>Last Activity 2 days ago</li>
								</ul>
							</div>
						</div>

						<div class="cll-right">
							<a class="btn btn-primary bn-det" href="{{url('entreprise/entreprise-detail/'.$user->id)}}">View Profile<i class="ti-arrow-right ml-1"></i></a>

						</div>
					</div>


					@endforeach



				</div>

				<!-- Pagination -->
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<ul class="pagination mt-0">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span class="ti-arrow-left"></span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item active"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">...</a></li>
							<li class="page-item"><a class="page-link" href="#">18</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span class="ti-arrow-right"></span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- Pagination -->

			</div>

		</div>

	</div>
</section>



@endsection