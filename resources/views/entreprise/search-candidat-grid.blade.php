@extends('layouts.app')
@section('search-candidat-grid')


<!-- ============================ Search Form Start================================== -->
<section class="light-search banncer-cent bg-theme" data-overlay="0">
	<div class="container">

		<form class="search-big-form no-border search-shadow">
			<div class="row m-0">
				<div class="col-lg-4 col-md-4 col-sm-12 p-0">
					<div class="form-group">
						<i class="ti-search"></i>
						<input type="text" class="form-control b-r" placeholder="Job Title or Keywords">
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-12 p-0">
					<div class="form-group">
						<i class="ti-location-pin"></i>
						<input type="text" class="form-control b-r" placeholder="Location">
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-12 p-0">
					<div class="form-group">
						<select id="category" class="js-states form-control">
							<option value="">&nbsp;</option>
							<option value="1">SEO & Web Design</option>
							<option value="2">Wealth & Healthcare</option>
							<option value="3">Account / Finance</option>
							<option value="4">Education</option>
							<option value="5">Banking Jobs</option>
						</select>
						<i class="ti-layers"></i>
					</div>
				</div>

				<div class="col-lg-2 col-md-2 col-sm-12 p-0">
					<button type="button" class="btn btn-black black full-width">Find Jobs</button>
				</div>
			</div>
		</form>

	</div>
</section>
<!-- ============================ Search Form End ================================== -->

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
					Search Candidates With Grid
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
									<li class="active"><a href="candidate-grid.html"><i class="ti-layout-grid3"></i></a></li>
									<li><a href="{{route('scl')}}"><i class="ti-view-list"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<!-- Row -->
				<div class="row">

					<!-- Single Candidate -->
					
					@foreach($users as $user)
					
					<!-- Single Candidate -->
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
						<div class="candidate-grid style-1">

							<div class="candidate-wrap">
								<a href="javascript:void(0)" class="btn download-btn" data-toggle="tooltip" data-original-title="Download Resume"><i class="ti-arrow-down"></i></a>
								<div class="candidate-thumb">
									<a href="candidate-detail.html"><img src="{{asset('uploads/images/' . $user->logo_path)}}" class="img-fluid mx-auto circle" alt="" /></a>
								</div>
								<h4 class="candidate-name"><a href="{{url('candidat/candidat-detail/'.$user->id)}}">{{$user->name}}</a></h4>
								<p>{{$user->specialite}}</p>
							</div>
							<div class="candidate-grid-footer">
								<span class="update-resume">Mis à jour le {{$user->updated_at->format('D M Y')}}</span>
								<!-- <div class="can-footer-info">
									<a href="javascript:void(0)" class="btn" data-toggle="tooltip" data-original-title="Shortlit"><i class="ti-thumb-up"></i></a>
								</div> -->
							</div>

						</div>
					</div>
					@endforeach




				</div>

			</div>

		</div>

	</div>
</section>
<div class="clearfix"></div>
<!-- ============================ Main Wrap Start ================================== -->


<!-- Filter Job Option -->
<div id="filter-sidebar" class="filter-sidebar">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="ti-close"></i></a>
	<div class="show-hide-sidebar">

		<!-- Keyword -->
		<div class="sidebar-widget">
			<div class="form-group">
				<h5 class="mb-3">Keyword</h5>
				<div class="input-with-icon">
					<input type="text" class="form-control" placeholder="Keyword...">
					<i class="ti-key"></i>
				</div>
			</div>
		</div>

		<!-- Location -->
		<div class="sidebar-widget">
			<div class="form-group">
				<h5 class="mb-3">Location</h5>
				<div class="input-with-icon">
					<input type="text" class="form-control" placeholder="Location..">
					<i class="ti-target"></i>
				</div>
			</div>
		</div>

		<!-- Category -->
		<div class="sidebar-widget">
			<div class="form-group">
				<h5 class="mb-3">Category</h5>
				<div class="input-with-shadow">
					<select id="category-side" class="js-states form-control">
						<option value="">&nbsp;</option>
						<option value="1">SEO & Web Design</option>
						<option value="2">Wealth & Healthcare</option>
						<option value="3">Account / Finance</option>
						<option value="4">Education</option>
						<option value="5">Banking Jobs</option>
					</select>
					<i class="ti-layers"></i>
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
							<input id="checkbox-se1" class="checkbox-custom" name="checkbox-se1" type="checkbox">
							<label for="checkbox-se1" class="checkbox-custom-label">1 Year</label>
						</li>

						<li>
							<input id="checkbox-se2" class="checkbox-custom" name="checkbox-se2" type="checkbox">
							<label for="checkbox-se2" class="checkbox-custom-label">2 Year</label>
						</li>

						<li>
							<input id="checkbox-se3" class="checkbox-custom" name="checkbox-se3" type="checkbox">
							<label for="checkbox-se3" class="checkbox-custom-label">3 Year</label>
						</li>

						<li>
							<input id="checkbox-se4" class="checkbox-custom" name="checkbox-se4" type="checkbox">
							<label for="checkbox-se4" class="checkbox-custom-label">4+ Year</label>
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
							<input id="checkbox-sj1" class="checkbox-custom" name="checkbox-sj1" type="checkbox">
							<label for="checkbox-sj1" class="checkbox-custom-label">Full Time</label>
						</li>

						<li>
							<input id="checkbox-sj2" class="checkbox-custom" name="checkbox-sj2" type="checkbox">
							<label for="checkbox-sj2" class="checkbox-custom-label">Part Time</label>
						</li>

						<li>
							<input id="checkbox-sj3" class="checkbox-custom" name="checkbox-sj3" type="checkbox">
							<label for="checkbox-sj3" class="checkbox-custom-label">Construction Base</label>
						</li>

						<li>
							<input id="checkbox-sj4" class="checkbox-custom" name="checkbox-sj4" type="checkbox">
							<label for="checkbox-sj4" class="checkbox-custom-label">Internship</label>
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
							<input id="checkbox-sc1" class="checkbox-custom" name="checkbox-sc1" type="checkbox">
							<label for="checkbox-sc1" class="checkbox-custom-label">$500 - $1000</label>
						</li>

						<li>
							<input id="checkbox-sc2" class="checkbox-custom" name="checkbox-sc2" type="checkbox">
							<label for="checkbox-sc2" class="checkbox-custom-label">$1000 - $2000</label>
						</li>

						<li>
							<input id="checkbox-c3" class="checkbox-custom" name="checkbox-sc3" type="checkbox">
							<label for="checkbox-c3" class="checkbox-custom-label">$2000 - $5000</label>
						</li>

						<li>
							<input id="checkbox-sc4" class="checkbox-custom" name="checkbox-sc4" type="checkbox">
							<label for="checkbox-sc4" class="checkbox-custom-label">$5000 - $10000</label>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- Filter Job Option -->

</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

<script>
	function openNav() {
		document.getElementById("filter-sidebar").style.width = "320px";
	}

	function closeNav() {
		document.getElementById("filter-sidebar").style.width = "0";
	}
</script>
@endsection