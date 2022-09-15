@extends('layouts.app')
@section('search-candidat-list')

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
					Search With Sidebar
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
									<li><a href="{{route('scg')}}"><i class="ti-layout-grid3"></i></a></li>
									<li class="active"><a href="{{route('scl')}}"><i class="ti-view-list"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<!-- Row -->
				<div class="row">
					<div class="col-md-12">
						@foreach($users as $user)
						<!-- Single Candidate List -->
						<!-- <div class="candidate-list-layout">
							<div class="cll-wrap">
								<div class="cll-thumb">
									<a href="resume-detail.html"><img src="{{asset('uploads/images/' . $user->logo_path)}}" class="img-responsive img-circle" alt="" /></a>
								</div>
								<div class="cll-caption">
									<h4><a href="resume-detail.html">Travis A. Cook</a><span><i class="ti-briefcase"></i>SEO Expert</span></h4>
									<ul>
										<li><i class="ti-location-pin text-danger"></i>801 Harper Street, India</li>
										<li><i class="ti-time text-success"></i>Last Activity 04 min ago</li>
									</ul>
								</div>
							</div>

							<div class="cll-right">
								<a href="#" class="btn btn-primary btn-shortlist"><i class="ti-plus"></i>Shortlist</a>
							</div>
						</div> -->
						<div class="verticle-candidate-list">
										<div class="vc-thumb">
											<img class="img-fluid rounded-circle" src="{{asset('uploads/images/' . $user->logo_path)}}" alt="c2.jpg">
											<!-- <div class="overall-rate" data-rating="4.7">4.7</div> -->
										</div>
										<div class="vc-content">
											<h5 class="title"><a href="{{url('candidat/candidat-detail/'.$user->id)}}">{{$user->name}}</a></h5>
											<p>{{$user->filiere}}</p>
											<div class="rating-review">
												<i class="ti-star filled"></i>
												<i class="ti-star filled"></i>
												<i class="ti-star filled"></i>
												<i class="ti-star filled"></i>
												<i class="ti-star"></i>
											</div>
											<ul class="vc-info-list">
												<li class="list-inline-item"><a href="#"><h5>{{$user->adresse}}</h5> <i class="ti-location-pin"></i>Bothell, WA, USA</a></li>
												<!-- <li class="list-inline-item"><a href="#"><h5>Rate</h5> <i class="ti-credit-card"></i>$18.00 hour</a></li> -->
												<!-- <li class="list-inline-item"><a href="#"><h5>Job Success</h5> 95%</a></li> -->
											</ul>
										</div>
										<a class="btn btn-primary bn-det" href="{{url('candidat/candidat-detail/'.$user->id)}}">View Profile<i class="ti-arrow-right ml-1"></i></a>
									</div>
						@endforeach

					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<div class="clearfix"></div>
<!-- ============================ Main Wrap End ================================== -->

<!-- ============================ Newsletter Start ================================== -->
<section class="alert-wrap pt-5 pb-5" style="background: #00a94f url(assets/img/bg2.png);">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="jobalert-sec">
					<h3 class="mb-1 text-light">Get New Jobs Notification!</h3>
					<p class="text-light">Subscribe & get all related jobs notification.</p>
				</div>
			</div>

			<div class="col-lg-6 col-md-6">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Enter Your Email">
					<div class="input-group-append">
						<button type="button" class="btn btn-black black">Subscribe</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ============================ Newsletter Start ================================== -->

<!-- ============================ Footer Start ================================== -->
<footer class="dark-footer skin-dark-footer">
	<div>
		<div class="container">
			<div class="row">

				<div class="col-lg-3 col-md-3">
					<div class="footer-widget">
						<img src="assets/img/logo-light.png" class="img-footer" alt="" />
						<div class="footer-add">
							<p>Collins Street West, Victoria,</br> Australia (AU4578).</p>
							<p><strong>Email:</strong></br><a href="#">hello@workstock.com</a></p>
							<p><strong>Call:</strong></br>91 855 742 62548</p>
						</div>

					</div>
				</div>
				<div class="col-lg-2 col-md-2">
					<div class="footer-widget">
						<h4 class="widget-title">Navigations</h4>
						<ul class="footer-menu">
							<li><a href="#">New Home Design</a></li>
							<li><a href="#">Browse Candidates</a></li>
							<li><a href="#">Browse Employers</a></li>
							<li><a href="#">Advance Search</a></li>
							<li><a href="#">Job With Map</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2 col-md-2">
					<div class="footer-widget">
						<h4 class="widget-title">The Highlights</h4>
						<ul class="footer-menu">
							<li><a href="#">Home Page 2</a></li>
							<li><a href="#">Home Page 3</a></li>
							<li><a href="#">Home Page 4</a></li>
							<li><a href="#">Home Page 5</a></li>
							<li><a href="#">LogIn</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2 col-md-2">
					<div class="footer-widget">
						<h4 class="widget-title">My Account</h4>
						<ul class="footer-menu">
							<li><a href="#">Dashboard</a></li>
							<li><a href="#">Applications</a></li>
							<li><a href="#">Packages</a></li>
							<li><a href="#">resume.html</a></li>
							<li><a href="#">SignUp Page</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-3">
					<div class="footer-widget">
						<h4 class="widget-title">Download Apps</h4>
						<a href="#" class="other-store-link">
							<div class="other-store-app">
								<div class="os-app-icon">
									<i class="ti-android theme-cl"></i>
								</div>
								<div class="os-app-caps">
									Google Play
									<span>Get It Now</span>
								</div>
							</div>
						</a>
						<a href="#" class="other-store-link">
							<div class="other-store-app">
								<div class="os-app-icon">
									<i class="ti-apple theme-cl"></i>
								</div>
								<div class="os-app-caps">
									App Store
									<span>Now it Available</span>
								</div>
							</div>
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="container">
			<div class="row align-items-center">

				<div class="col-lg-6 col-md-6">
					<p class="mb-0">© 2020 Work Stocks. Designd By PixelExperts All Rights Reserved</p>
				</div>

				<div class="col-lg-6 col-md-6 text-right">
					<ul class="footer-bottom-social">
						<li><a href="#"><i class="ti-facebook"></i></a></li>
						<li><a href="#"><i class="ti-twitter"></i></a></li>
						<li><a href="#"><i class="ti-instagram"></i></a></li>
						<li><a href="#"><i class="ti-linkedin"></i></a></li>
					</ul>
				</div>

			</div>
		</div>
	</div>
</footer>
<!-- ============================ Footer End ================================== -->

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
					<form>

						<div class="form-group">
							<label>User Name</label>
							<div class="input-with-gray">
								<input type="text" class="form-control" placeholder="Username">
								<i class="ti-user theme-cl"></i>
							</div>
						</div>

						<div class="form-group">
							<label>Password</label>
							<div class="input-with-gray">
								<input type="password" class="form-control" placeholder="*******">
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
						<li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Login with Facebook</a></li>
						<li><a href="#" class="btn connect-gplus"><i class="ti-google"></i>Login with Gmail</a></li>
					</ul>
				</div>

				<div class="devide-wrap"><span>OR</span></div>

				<div class="login-form">
					<form>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="form-group">
									<label>Full Name</label>
									<div class="input-with-gray">
										<input type="text" class="form-control" placeholder="Your Name">
										<i class="ti-user theme-cl"></i>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="form-group">
									<label>Email</label>
									<div class="input-with-gray">
										<input type="email" class="form-control" placeholder="Email ID">
										<i class="ti-user theme-cl"></i>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="form-group">
									<label>User Name</label>
									<div class="input-with-gray">
										<input type="text" class="form-control" placeholder="Username">
										<i class="ti-user theme-cl"></i>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="form-group">
									<label>Password</label>
									<div class="input-with-gray">
										<input type="password" class="form-control" placeholder="*******">
										<i class="ti-unlock theme-cl"></i>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-md full-width pop-login">Login</button>
								</div>
							</div>
						</div>

					</form>
				</div>
			</div>
			<div class="modal-footer">
				<div class="mf-link"><i class="ti-user"></i>Already Have Account? Sign In</a></div>
				<div class="mf-forget"><a href="#"><i class="ti-help"></i>Need Help</a></div>
			</div>
		</div>
	</div>
</div>
<!-- End Modal -->

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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/select2.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>
<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/summernote.js"></script>
<script src="assets/js/jQuery.style.switcher.js"></script>

<script src="assets/js/counterup.min.js"></script>
<script src="assets/js/custom.js"></script>
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


</body>

<!-- Mirrored from themezhub.net/workstock-2/work-stocks/candidate-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jun 2021 17:43:11 GMT -->

</html>