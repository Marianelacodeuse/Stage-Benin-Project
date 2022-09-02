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

			<div class="col-xl-3 col-lg-4">

				<div class="d-block d-none d-sm-block d-md-none mb-3">
					<a href="javascript:void(0)" onclick="openNav()" class="btn btn-info full-width btn-md"><i class="ti-filter mrg-r-5"></i>Filter Search</a>
				</div>

				<div class="sidebar-container d-sm-none d-md-block d-none">

					<!-- Category -->
					<div class="sidebar-widget">
						<div class="form-group">
							<h5 class="mb-2">Job Category</h5>
							<div class="side-imbo">
								<ul class="no-ul-list">
									<li>
										<input id="checkbox-ei1" class="checkbox-custom" name="checkbox-ei1" type="checkbox">
										<label for="checkbox-ei1" class="checkbox-custom-label">IT Computers</label>
									</li>

									<li>
										<input id="checkbox-ei2" class="checkbox-custom" name="checkbox-ei2" type="checkbox">
										<label for="checkbox-ei2" class="checkbox-custom-label">Financial Service</label>
									</li>

									<li>
										<input id="checkbox-ei3" class="checkbox-custom" name="checkbox-ei3" type="checkbox">
										<label for="checkbox-ei3" class="checkbox-custom-label">Art, Design, Media</label>
									</li>

									<li>
										<input id="checkbox-ei4" class="checkbox-custom" name="checkbox-ei4" type="checkbox">
										<label for="checkbox-ei4" class="checkbox-custom-label">Coach & Education</label>
									</li>
									<li>
										<input id="checkbox-ei5" class="checkbox-custom" name="checkbox-ei5" type="checkbox">
										<label for="checkbox-ei5" class="checkbox-custom-label">Banking</label>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Experince -->
					<div class="sidebar-widget">
						<div class="form-group">
							<h5 class="mb-2">Skills</h5>
							<div class="side-imbo">
								<ul class="no-ul-list">
									<li>
										<input id="checkbox-ep1" class="checkbox-custom" name="checkbox-ep1" type="checkbox">
										<label for="checkbox-ep1" class="checkbox-custom-label">Administrative</label>
									</li>

									<li>
										<input id="checkbox-ep2" class="checkbox-custom" name="checkbox-ep2" type="checkbox">
										<label for="checkbox-ep2" class="checkbox-custom-label">iPhone & Android</label>
									</li>

									<li>
										<input id="checkbox-ep3" class="checkbox-custom" name="checkbox-ep3" type="checkbox">
										<label for="checkbox-ep3" class="checkbox-custom-label">Java & AJAX</label>
									</li>

									<li>
										<input id="checkbox-ep4" class="checkbox-custom" name="checkbox-ep4" type="checkbox">
										<label for="checkbox-ep4" class="checkbox-custom-label">Account Manager</label>
									</li>
									<li>
										<input id="checkbox-ep5" class="checkbox-custom" name="checkbox-ep5" type="checkbox">
										<label for="checkbox-ep5" class="checkbox-custom-label">WordPress</label>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Experince -->
					<div class="sidebar-widget">
						<div class="form-group">
							<h5 class="mb-2">Experince</h5>
							<div class="side-imbo">
								<ul class="no-ul-list">
									<li>
										<input id="checkbox-e1" class="checkbox-custom" name="checkbox-e1" type="checkbox">
										<label for="checkbox-e1" class="checkbox-custom-label">1 Year</label>
									</li>

									<li>
										<input id="checkbox-e2" class="checkbox-custom" name="checkbox-e2" type="checkbox">
										<label for="checkbox-e2" class="checkbox-custom-label">2 Year</label>
									</li>

									<li>
										<input id="checkbox-e3" class="checkbox-custom" name="checkbox-e3" type="checkbox">
										<label for="checkbox-e3" class="checkbox-custom-label">3 Year</label>
									</li>

									<li>
										<input id="checkbox-e4" class="checkbox-custom" name="checkbox-e4" type="checkbox">
										<label for="checkbox-e4" class="checkbox-custom-label">4+ Year</label>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Job Type -->
					<div class="sidebar-widget">
						<div class="form-group">
							<h5 class="mb-2">Job Type</h5>
							<div class="side-imbo">
								<ul class="no-ul-list">
									<li>
										<input id="checkbox-j1" class="checkbox-custom" name="checkbox-j1" type="checkbox">
										<label for="checkbox-j1" class="checkbox-custom-label">Full Time</label>
									</li>

									<li>
										<input id="checkbox-j2" class="checkbox-custom" name="checkbox-j2" type="checkbox">
										<label for="checkbox-j2" class="checkbox-custom-label">Part Time</label>
									</li>

									<li>
										<input id="checkbox-j3" class="checkbox-custom" name="checkbox-j3" type="checkbox">
										<label for="checkbox-j3" class="checkbox-custom-label">Construction Base</label>
									</li>

									<li>
										<input id="checkbox-j4" class="checkbox-custom" name="checkbox-j4" type="checkbox">
										<label for="checkbox-j4" class="checkbox-custom-label">Internship</label>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Job Type -->
					<div class="sidebar-widget">
						<div class="form-group">
							<h5 class="mb-2">Job Level</h5>
							<div class="side-imbo">
								<ul class="no-ul-list">
									<li>
										<input id="checkbox-jf1" class="checkbox-custom" name="checkbox-jf1" type="checkbox">
										<label for="checkbox-jf1" class="checkbox-custom-label">Manager</label>
									</li>

									<li>
										<input id="checkbox-jf2" class="checkbox-custom" name="checkbox-jf2" type="checkbox">
										<label for="checkbox-jf2" class="checkbox-custom-label">Junior</label>
									</li>

									<li>
										<input id="checkbox-jf3" class="checkbox-custom" name="checkbox-jf3" type="checkbox">
										<label for="checkbox-jf3" class="checkbox-custom-label">Senior</label>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Compensation -->
					<div class="sidebar-widget">
						<div class="form-group">
							<h5 class="mb-2">Compensation</h5>
							<div class="side-imbo">
								<ul class="no-ul-list">
									<li>
										<input id="checkbox-c1" class="checkbox-custom" name="checkbox-c1" type="checkbox">
										<label for="checkbox-c1" class="checkbox-custom-label">$500 - $1000</label>
									</li>

									<li>
										<input id="checkbox-c2" class="checkbox-custom" name="checkbox-c2" type="checkbox">
										<label for="checkbox-c2" class="checkbox-custom-label">$1000 - $2000</label>
									</li>

									<li>
										<input id="checkbox-c03" class="checkbox-custom" name="checkbox-c03" type="checkbox">
										<label for="checkbox-c03" class="checkbox-custom-label">$2000 - $5000</label>
									</li>

									<li>
										<input id="checkbox-c4" class="checkbox-custom" name="checkbox-c4" type="checkbox">
										<label for="checkbox-c4" class="checkbox-custom-label">$5000 - $10000</label>
									</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="col-xl-9 col-lg-8">

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