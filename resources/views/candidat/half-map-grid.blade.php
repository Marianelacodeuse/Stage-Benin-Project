@extends('layouts.app')
@section('half-map-grid')
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
						<button type="submit" class="btn full-width ft-search btn-primary"><i class="ti-search"></i></button>
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
							<a href="half-map-grid.html" class="active"><i class="ti-layout-grid2"></i></a>
							<a href="half-map-list.html"><i class="ti-view-list"></i></a>
						</div>

					</div>
				</div>
			</div>

			<!-- Job List Start -->
			<div class="row">

				<!-- Single New Job -->
				<div class="col-md-6 col-sm-12">
					<div class="classic-joblist ultimate">

						<div class="cl-job-employer">
							<div class="cljb-emp-thumg">
								<a href="job-detail.html"><img src="assets/img/asana.png" alt="" /></a>
							</div>
							<div class="cljb-emp-detail">
								<h5><a href="employer-detail.html">Google Ltd</a></h5>
								<span class="cljb-date">3 days ago</span>
							</div>
						</div>

						<h4 class="job-title"><a href="job-detail.html">Frontend Developer For Growing Brands</a></h4>

						<div class="cl-job-intro">
							<span class="cl-jb-loaction"><i class="ti-location-pin"></i>Isva, Canada</span>
							<span class="cl-jb-type full-time">Full Time</span>
						</div>

					</div>
				</div>

				<!-- Single New Job -->
				<div class="col-md-6 col-sm-12">
					<div class="classic-joblist ultimate">

						<div class="cl-job-employer">
							<div class="cljb-emp-thumg">
								<a href="job-detail.html"><img src="assets/img/photos.png" alt="" /></a>
							</div>
							<div class="cljb-emp-detail">
								<h5><a href="employer-detail.html">Google photos</a></h5>
								<span class="cljb-date">10 min ago</span>
							</div>
						</div>

						<h4 class="job-title"><a href="job-detail.html">UI/UX Designer For Next projects</a></h4>

						<div class="cl-job-intro">
							<span class="cl-jb-loaction"><i class="ti-location-pin"></i>Isva, Canada</span>
							<span class="cl-jb-type internship">Internship</span>
						</div>

					</div>
				</div>

				<!-- Single New Job -->
				<div class="col-md-6 col-sm-12">
					<div class="classic-joblist ultimate">

						<div class="cl-job-employer">
							<div class="cljb-emp-thumg">
								<a href="job-detail.html"><img src="assets/img/e.png" alt="" /></a>
							</div>
							<div class="cljb-emp-detail">
								<h5><a href="employer-detail.html">Elisvar Ltd</a></h5>
								<span class="cljb-date">20 min ago</span>
							</div>
						</div>

						<h4 class="job-title"><a href="job-detail.html">Front-End Developer For Products</a></h4>

						<div class="cl-job-intro">
							<span class="cl-jb-loaction"><i class="ti-location-pin"></i>Isva, Canada</span>
							<span class="cl-jb-type part-time">Part Time</span>
						</div>

					</div>
				</div>

				<!-- Single New Job -->
				<div class="col-md-6 col-sm-12">
					<div class="classic-joblist ultimate">

						<div class="cl-job-employer">
							<div class="cljb-emp-thumg">
								<a href="job-detail.html"><img src="assets/img/drive.png" alt="" /></a>
							</div>
							<div class="cljb-emp-detail">
								<h5><a href="employer-detail.html">Google Drive</a></h5>
								<span class="cljb-date">1 days ago</span>
							</div>
						</div>

						<h4 class="job-title"><a href="job-detail.html">WordPress Developer For UK Agencies</a></h4>

						<div class="cl-job-intro">
							<span class="cl-jb-loaction"><i class="ti-location-pin"></i>Isva, Canada</span>
							<span class="cl-jb-type contract">Contract</span>
						</div>

					</div>
				</div>

				<!-- Single New Job -->
				<div class="col-md-6 col-sm-12">
					<div class="classic-joblist ultimate">

						<div class="cl-job-employer">
							<div class="cljb-emp-thumg">
								<a href="job-detail.html"><img src="assets/img/paypal.png" alt="" /></a>
							</div>
							<div class="cljb-emp-detail">
								<h5><a href="employer-detail.html">Paypal Inc.</a></h5>
								<span class="cljb-date">2 days ago</span>
							</div>
						</div>

						<h4 class="job-title"><a href="job-detail.html">Google Play Store Managing Developer</a></h4>

						<div class="cl-job-intro">
							<span class="cl-jb-loaction"><i class="ti-location-pin"></i>Isva, Canada</span>
							<span class="cl-jb-type part-time">Part Time</span>
						</div>

					</div>
				</div>

				<!-- Single New Job -->
				<div class="col-md-6 col-sm-12">
					<div class="classic-joblist ultimate">

						<div class="cl-job-employer">
							<div class="cljb-emp-thumg">
								<a href="job-detail.html"><img src="assets/img/google.png" alt="" /></a>
							</div>
							<div class="cljb-emp-detail">
								<h5><a href="employer-detail.html">Google Ltd</a></h5>
								<span class="cljb-date">3 days ago</span>
							</div>
						</div>

						<h4 class="job-title"><a href="job-detail.html">Logo Designer To Launch New Brands</a></h4>

						<div class="cl-job-intro">
							<span class="cl-jb-loaction"><i class="ti-location-pin"></i>Isva, Canada</span>
							<span class="cl-jb-type full-time">Full Time</span>
						</div>

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
<script src="assets/js/map_infobox.js"></script>
<script src="assets/js/markerclusterer.js"></script>
<script src="assets/js/map.js"></script>
@ensection