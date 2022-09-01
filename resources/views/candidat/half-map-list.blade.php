<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themezhub.net/workstock-2/work-stocks/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jun 2021 17:43:13 GMT -->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Stage Benin</title>

	<!-- All Plugins Css -->
	<link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet">


	<!-- Custom CSS -->
	<link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">

	<!-- Custom Color -->
	<link href="{{asset('assets/css/skin\default.css')}}" rel="stylesheet">
</head>

<body class="green-skin bg-light">
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div class="Loader"></div>

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">

		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->
		<!-- Start Navigation -->
		<div class="header header-light">
			<div class="container-fluid">
				<nav id="navigation" class="navigation navigation-landscape">
					<div class="nav-header">
						<a class="nav-brand" href="#">
							<img src="{{asset('assets/img/logo.png')}}" class="logo" alt="" />
						</a>
						<div class="nav-toggle"></div>
					</div>
					<div class="nav-menus-wrapper" style="transition-property: none;">
						<ul class="nav-menu">

							<li class="active"><a href="{{url('/')}}">Home<span class="submenu-indicator"></span></a>

							</li>

							<li><a href="#">For Candidates<span class="submenu-indicator"></span></a>
								<ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
									<li><a href="{{route('hmg')}}">Search job Option<span class="submenu-indicator"></span></a>
										<!-- <ul class="nav-dropdown nav-submenu" style="display: none;">
											<li><a href="search-full-width.html">Search Job Full Width</a></li>
											<li><a href="search-with-sidebar.html">Search Job with Sidebar</a></li>
											<li><a href="search-with-sidebar-2.html">Search job with Sidebar 2</a></li>
											<li><a href="search-with-sidebar-3.html">Search Job with Sidebar 3</a></li>
											<li><a href="search-with-detail-job.html">Search job With Detail</a></li>
											<li><a href="search-with-sidebar-list.html">Search Jobs List</a></li>
											<li><a href="search-with-sidebar-list-2.html">Search jobs List 2</a></li>
											<li><a href="employers-list.html">Search Employers Sidebar</a></li>
											<li><a href="freelancer-detail.html">Employers Detail</a></li>
										</ul> -->
									</li>
									<li><a href="{{route('seg')}}">Find Job On Map<span class="submenu-indicator"></span></a>
										<!-- <ul class="nav-dropdown nav-submenu" style="display: none;">
											<li><a href="half-map-grid.html">Find Job On Map</a></li>
											<li><a href="half-map-list.html">Fins Job On Map List</a></li>
										</ul> -->
									</li>
									<li><a href="#">Find Employer<span class="submenu-indicator"></span></a>
										<!-- <ul class="nav-dropdown nav-submenu" style="display: none;">
											<li><a href="job-detail.html">Single Job 1</a></li>
											<li><a href="job-detail-2.html">Single Job 2</a></li>
											<li><a href="job-detail-3.html">Single Job 3</a></li>
										</ul> -->
									</li>
									<li><a href="{{route('candidat-dashboard')}}">Candidate Dashboard</a></li>
								</ul>
							</li>

							<li><a href="#">For Employers<span class="submenu-indicator"></span></a>
								<ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
									<li><a href="candidate-grid.html">Browse Candidates Grid</a></li>
									<!-- <li><a href="candidate-list.html">Browse Candidates List</a></li>
									<li><a href="search-freelancers.html">Search Freelancers</a></li>
									<li><a href="search-freelancers-list.html">Search Freelancers List</a></li>
									<li><a href="freelancer-detail.html">Freelancer Detail</a></li> -->
									<li><a href="#">Search with Map<span class="submenu-indicator"></span></a>
										<!-- <ul class="nav-dropdown nav-submenu" style="display: none;">
											<li><a href="browse-candidates-with-map-grid.html">Search Candidate Grid</a></li>
											<li><a href="browse-candidates-with-map.html">Search Candidate List</a></li>
										</ul> -->
									</li>
									<li><a href="{{route('entreprise-dashboard')}}">Employer Dashboard</a></li>
								</ul>
							</li>

							<li><a href="{{route('blog')}}">Blog<span class="submenu-indicator"></span></a>
								<!-- <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
									<li><a href="blog.html">Blogs Page</a></li>
									<li><a href="blog-detail.html">Blog Detail</a></li>
									<li><a href="shortcodes.html">Shortcodes</a></li>
									<li><a href="pricing.html">Pricing</a></li>
									<li><a href="employers-full-width.html">Find Employers</a></li>
									<li><a href="all-jobs.html">Jobs Widgets</a></li>
									<li><a href="login.html">LogIn</a></li>
								</ul> -->
							</li>

							<li><a href="{{route('contact')}}">Contacts</a></li>

						</ul>

						<ul class="nav-menu nav-menu-social align-to-right">

							<li>
								<a href="#" data-toggle="modal" data-target="#login">
									<i class="ti-user mr-1"></i><span class="dn-lg">Login/Register</span>
								</a>
							</li>
							<li class="add-listing theme-bg">
								<a href="#">
									<i class="ti-plus"></i> Post Job
								</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- =========================== Half Map  Start =================================== -->
		<div class="fs-container half-map">

			<div class="fs-inner-container">
				<div class="fs-content">

					<div class="row">

						<div class="col-lg-5 col-md-5 col-sm-6">
							<div class="form-group">
								<div class="input-with-icon">
									<i class="ti-search"></i>
									<input type="text" class="form-control b-r" placeholder="Job Title or Keywords">
								</div>
							</div>
						</div>

						<div class="col-lg-5 col-md-5 col-sm-4">
							<div class="form-group">
								<div class="input-with-icon">
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
						</div>

						<div class="col-lg-2 col-md-2 col-sm-2">
							<div class="form-group">
								<button type="submit" class="btn full-width ft-search submit-btn"><i class="ti-search"></i></button>
							</div>
						</div>

					</div>

					<!--- All List -->
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="flt-result mb-3">

								<div class="flt-result-num">
									<h4>207 Result found</h4>
								</div>

								<div class="flt-change-layout">
									<a href="half-map-grid.html"><i class="ti-layout-grid2"></i></a>
									<a href="half-map-list.html" class="active"><i class="ti-view-list"></i></a>
								</div>

							</div>
						</div>
					</div>

					<!-- Job List Start -->
					<div class="row">
						<!-- Single New Job -->
						<div class="col-md-12 col-sm-12">

							<!-- Single Large Job List -->
							<div class="job-new-list">
								<div class="vc-thumb">
									<img class="img-fluid rounded-circle" src="assets/img/adwords.png" alt="c2.jpg">
								</div>
								<div class="vc-content">
									<h5 class="title"><a href="job-detail.html">Web Developer</a><span class="j-full-time">Full Time</span></h5>
									<p>Google Inc</p>
									<ul class="vc-info-list">
										<li class="list-inline-item">
											<h5>Sallery</h5> <i class="ti-credit-card"></i>$3.5k-$5k P.A
										</li>
										<li class="list-inline-item">
											<h5>Skills</h5>
											<div class="skills">
												<span>Css3</span><span>photoshop</span><span>java</span><span>+3 more</span>
											</div>
										</li>
									</ul>
								</div>
								<a class="btn btn-black bn-det" href="job-detail.html">Apply Now<i class="ti-arrow-right ml-1"></i></a>
							</div>

							<!-- Single Large Job List -->
							<div class="job-new-list">
								<div class="vc-thumb">
									<img class="img-fluid rounded-circle" src="assets/img/asana.png" alt="c2.jpg">
								</div>
								<div class="vc-content">
									<h5 class="title"><a href="job-detail.html">App Developer</a><span class="j-part-time">Part Time</span></h5>
									<p>Apple Soft.</p>
									<ul class="vc-info-list">
										<li class="list-inline-item">
											<h5>Sallery</h5> <i class="ti-credit-card"></i>$4.5k-$5k P.A
										</li>
										<li class="list-inline-item">
											<h5>Skills</h5>
											<div class="skills">
												<span>Html</span><span>Css3</span><span>java</span><span>+3 more</span>
											</div>
										</li>
									</ul>
								</div>
								<a class="btn btn-black bn-det" href="job-detail.html">Apply Now<i class="ti-arrow-right ml-1"></i></a>
							</div>

							<!-- Single Large Job List -->
							<div class="job-new-list">
								<div class="vc-thumb">
									<img class="img-fluid rounded-circle" src="assets/img/Atlassian.png" alt="c2.jpg">
								</div>
								<div class="vc-content">
									<h5 class="title"><a href="job-detail.html">software Engineering</a><span class="j-temporary-time">Temporary</span></h5>
									<p>Iliance Tech</p>
									<ul class="vc-info-list">
										<li class="list-inline-item">
											<h5>Sallery</h5> <i class="ti-credit-card"></i>$3.5k-$6k P.A
										</li>
										<li class="list-inline-item">
											<h5>Skills</h5>
											<div class="skills">
												<span>Html</span><span>Css3</span><span>photoshop</span><span>+5 more</span>
											</div>
										</li>
									</ul>
								</div>
								<a class="btn btn-black bn-det" href="job-detail.html">Apply Now<i class="ti-arrow-right ml-1"></i></a>
							</div>

							<!-- Single Large Job List -->
							<div class="job-new-list">
								<div class="vc-thumb">
									<img class="img-fluid rounded-circle" src="assets/img/bing.png" alt="c2.jpg">
								</div>
								<div class="vc-content">
									<h5 class="title"><a href="job-detail.html">Content Writer</a><span class="j-full-time">Full Time</span></h5>
									<p>Zilliancer Soft</p>
									<ul class="vc-info-list">
										<li class="list-inline-item">
											<h5>Sallery</h5> <i class="ti-credit-card"></i>$3.5k-$5k P.A
										</li>
										<li class="list-inline-item">
											<h5>Skills</h5>
											<div class="skills">
												<span>Html5</span><span>Css3</span><span>java</span><span>+3 more</span>
											</div>
										</li>
									</ul>
								</div>
								<a class="btn btn-black bn-det" href="job-detail.html">Apply Now<i class="ti-arrow-right ml-1"></i></a>
							</div>

							<!-- Single Large Job List -->
							<div class="job-new-list">
								<div class="vc-thumb">
									<img class="img-fluid rounded-circle" src="assets/img/drive.png" alt="c2.jpg">
								</div>
								<div class="vc-content">
									<h5 class="title"><a href="job-detail.html">Product Manager</a><span class="j-part-time">Part Time</span></h5>
									<p>Google Inc</p>
									<ul class="vc-info-list">
										<li class="list-inline-item">
											<h5>Sallery</h5> <i class="ti-credit-card"></i>$4.5k-$6k P.A
										</li>
										<li class="list-inline-item">
											<h5>Skills</h5>
											<div class="skills">
												<span>Html5</span><span>photoshop</span><span>java</span><span>+1 more</span>
											</div>
										</li>
									</ul>
								</div>
								<a class="btn btn-black bn-det" href="job-detail.html">Apply Now<i class="ti-arrow-right ml-1"></i></a>
							</div>

							<!-- Single Large Job List -->
							<div class="job-new-list">
								<div class="vc-thumb">
									<img class="img-fluid rounded-circle" src="assets/img/google.png" alt="c2.jpg">
								</div>
								<div class="vc-content">
									<h5 class="title"><a href="job-detail.html">Expert Bidder</a><span class="j-full-time">Full Time</span></h5>
									<p>Shiverianer Inc</p>
									<ul class="vc-info-list">
										<li class="list-inline-item">
											<h5>Sallery</h5> <i class="ti-credit-card"></i>$3.5k-$5k P.A
										</li>
										<li class="list-inline-item">
											<h5>Skills</h5>
											<div class="skills">
												<span>Html</span><span>Css3</span><span>java</span><span>+3 more</span>
											</div>
										</li>
									</ul>
								</div>
								<a class="btn btn-black bn-det" href="job-detail.html">Apply Now<i class="ti-arrow-right ml-1"></i></a>
							</div>

						</div>
					</div>

					<!-- Pagination -->
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<ul class="pagination">
								<li><a href="#"><i class="ti-arrow-left"></i></a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="ti-arrow-right"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<div class="fs-left-map-box">
				<div class="home-map fl-wrap">
					<div class="map-container fw-map">
						<div id="map-main"></div>
					</div>
				</div>
			</div>

		</div>
		<!-- =========================== Half Map  End ================================= -->



		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

		<!-- Map -->
		<script src="https://maps.google.com/maps/api/js?key="></script>
		<script src="{{asset('assets/js/map_infobox.js')}}"></script>
		<script src="{{asset('assets/js/markerclusterer.js')}}"></script>
		<script src="{{asset('assets/js/map.js')}}"></script>

		<!-- Log In Modal -->
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
				<div class="modal-content" id="registermodal">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true"><i class="ti-close"></i></span>
						</button>
					</div>
					<div class="modal-body">
						<h4 class="modal-header-title">SignIn</h4>
						<div class="social-login">
							<ul>
								<li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Login with Facebook</a></li>
								<li><a href="#" class="btn connect-gplus"><i class="ti-google"></i>Login with Gmail</a></li>
							</ul>
						</div>

						<div class="devide-wrap"><span>OR</span></div>

						<div class="login-form">
							<form method="POST" action="{{ route('login') }}">
								@csrf
								<div class="form-group">
									<label>Email</label>
									<div class="input-with-gray">
										<input type="email" name="email" class="form-control" placeholder="Your email adress">
										<i class="ti-user theme-cl"></i>
									</div>
								</div>

								<div class="form-group">
									<label>Password</label>
									<div class="input-with-gray">
										<input type="password" name="password" class="form-control" placeholder="*******">
										<i class="ti-unlock theme-cl"></i>
									</div>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-md full-width pop-login">Login</button>
								</div>

							</form>
						</div>
					</div>
					<div class="modal-footer">
						<div class="mf-link"><i class="ti-user"></i>Haven't An Account?<a href="javascript:void(0)" data-toggle="modal" data-target="#signup" data-dismiss="modal"> Sign Up</a></div>
						<div class="mf-forget"><a href="#"><i class="ti-help"></i>Forget Password</a></div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal -->

		<!-- Sign Up Modal -->
		<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
				<div class="modal-content" id="sign-up">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true"><i class="ti-close"></i></span>
						</button>
					</div>
					<div class="modal-body">
						<h4 class="modal-header-title">Sign Up</h4>
						<div class="social-login">
							<ul>
								<li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>{{ __('Login') }}</a></li>
								<li><a href="#" class="btn connect-gplus"><i class="ti-google"></i>Login with Gmail</a></li>
							</ul>
						</div>

						<div class="devide-wrap"><span>OR</span></div>

						<div class="login-form">
							<form action="{{ route('register') }}" method="POST">
								@csrf
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<label>Full Name</label>
											<div class="input-with-gray">
												<input type="text" class="form-control" name="name" placeholder="Your Name">
												<i class="ti-user theme-cl"></i>
											</div>
											@error('name')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<label>Role</label>
											<div class="input-with-gray">
												<input type="text" class="form-control" name="role" placeholder=" Your Role: User or Recruiter">
												<i class="ti-user theme-cl"></i>
											</div>
											@error('role')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label>Email</label>
											<div class="input-with-gray">
												<input type="email" class="form-control" name="email" placeholder="Your Email ID">
												<i class="ti-user theme-cl"></i>
											</div>
											@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label>Password</label>
											<div class="input-with-gray">
												<input type="password" name="password" class="form-control" placeholder="*******">
												<i class="ti-unlock theme-cl"></i>
											</div>
											@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label>Password</label>
											<div class="input-with-gray">
												<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="*******">
												<i class="ti-unlock theme-cl"></i>
											</div>
											@error('password_confirmation')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<button type="submit" class="btn btn-primary btn-md full-width pop-login">Enregistrer</button>
										</div>
									</div>
								</div>

							</form>
						</div>
					</div>
					<div class="modal-footer">
						<div class="mf-link"><i class="ti-user"></i>Already Have Account?<a href="#"> Sign In</a></div>
						<div class="mf-forget"><a href="#"><i class="ti-help"></i>Need Help</a></div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal -->

	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->

	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/select2.min.js')}}"></script>
	<script src="{{asset('assets/js/aos.js')}}"></script>
	<script src="{{asset('assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('assets/js/slick.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('assets/js/isotope.min.js')}}"></script>
	<script src="{{asset('assets/js/summernote.js')}}"></script>
	<script src="{{asset('assets/js/jQuery.style.switcher.js')}}"></script>

	<script src="{{asset('assets/js/counterup.min.js')}}"></script>
	<script src="{{asset('assets/js/custom.js')}}"></script>
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->


</body>

<!-- Mirrored from themezhub.net/workstock-2/work-stocks/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jun 2021 17:43:13 GMT -->

</html>