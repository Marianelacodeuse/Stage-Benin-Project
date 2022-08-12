@extends('layouts.app')
@section('half-map-list')
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
<script src="assets/js/map_infobox.js"></script>
<script src="assets/js/markerclusterer.js"></script>
<script src="assets/js/map.js"></script>
@endsection