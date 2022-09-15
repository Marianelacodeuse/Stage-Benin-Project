 @extends('layouts.app')



 @section('main')

 <!-- ============================ Hero Banner  Start================================== -->
 <div class="hero-header jumbo-banner text-center" style="background: url(assets/img/banner-3.jpg);">
     <div class="container">
         <h1>Find All Jobs in Cotonou</h1>
         <p class="lead">Find Jobs, Employment & Best Career Opportunities</p>
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
                     <button type="button" class="btn btn-primary full-width">Find Jobs</button>
                 </div>
             </div>
         </form>
     </div>
 </div>
 <!-- ============================ Hero Banner End ================================== -->

 <!-- ============================ Browse By Category Start ================================== -->
 <section>
     <div class="container">

         <div class="row">
             <div class="col text-center">
                 <div class="sec-heading mx-auto">
                     <p>Search By Category</p>
                     <h2>Popular Jobs Category</h2>
                 </div>
             </div>
         </div>
         <!-- /row -->

         <div class="row">

             <!-- Single category -->
             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="small-category-2">

                     <div class="small-category-2-thumb themes-light">
                         <a href="search.html"><i class="ti-hummer theme-cl"></i></a>
                     </div>
                     <div class="sc-2-detail">
                         <h5 class="sc-jb-title"><a href="search.html">Construction / Facilities</a></h5>
                         <span>6 new job</span>
                     </div>

                 </div>
             </div>

             <!-- Single category -->
             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="small-category-2">

                     <div class="small-category-2-thumb themes-light">
                         <a href="search.html"><i class="ti-money theme-cl"></i></a>
                     </div>
                     <div class="sc-2-detail">
                         <h5 class="sc-jb-title"><a href="search.html">Account / Finance</a></h5>
                         <span>10 new job</span>
                     </div>

                 </div>
             </div>

             <!-- Single category -->
             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="small-category-2">

                     <div class="small-category-2-thumb themes-light">
                         <a href="search.html"><i class="ti-headphone theme-cl"></i></a>
                     </div>
                     <div class="sc-2-detail">
                         <h5 class="sc-jb-title"><a href="search.html">Telecommunications</a></h5>
                         <span>12 new job</span>
                     </div>

                 </div>
             </div>

             <!-- Single category -->
             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="small-category-2">

                     <div class="small-category-2-thumb themes-light">
                         <a href="search.html"><i class="ti-heart-broken theme-cl"></i></a>
                     </div>
                     <div class="sc-2-detail">
                         <h5 class="sc-jb-title"><a href="search.html">Healthcare</a></h5>
                         <span>6 new job</span>
                     </div>

                 </div>
             </div>

             <!-- Single category -->
             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="small-category-2">

                     <div class="small-category-2-thumb themes-light">
                         <a href="search.html"><i class="ti-desktop theme-cl"></i></a>
                     </div>
                     <div class="sc-2-detail">
                         <h5 class="sc-jb-title"><a href="search.html">Designing & Multimedia</a></h5>
                         <span>08 new job</span>
                     </div>

                 </div>
             </div>

             <!-- Single category -->
             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="small-category-2">

                     <div class="small-category-2-thumb themes-light">
                         <a href="search.html"><i class="ti-brush-alt theme-cl"></i></a>
                     </div>
                     <div class="sc-2-detail">
                         <h5 class="sc-jb-title"><a href="search.html">Education Training</a></h5>
                         <span>6 new job</span>
                     </div>

                 </div>
             </div>

             <!-- Single category -->
             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="small-category-2">

                     <div class="small-category-2-thumb themes-light">
                         <a href="search.html"><i class="ti-car theme-cl"></i></a>
                     </div>
                     <div class="sc-2-detail">
                         <h5 class="sc-jb-title"><a href="search.html">Automotive Jobs</a></h5>
                         <span>07 new job</span>
                     </div>

                 </div>
             </div>

             <!-- Single category -->
             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="small-category-2">

                     <div class="small-category-2-thumb themes-light">
                         <a href="search.html"><i class="ti-bar-chart-alt theme-cl"></i></a>
                     </div>
                     <div class="sc-2-detail">
                         <h5 class="sc-jb-title"><a href="search.html">Banking Jobs</a></h5>
                         <span>12 new job</span>
                     </div>

                 </div>
             </div>

             <!-- Single category -->
             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="small-category-2">

                     <div class="small-category-2-thumb themes-light">
                         <a href="search.html"><i class="ti-book theme-cl"></i></a>
                     </div>
                     <div class="sc-2-detail">
                         <h5 class="sc-jb-title"><a href="search.html">Education Training</a></h5>
                         <span>6 new job</span>
                     </div>

                 </div>
             </div>

             <!-- Single category -->
             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="small-category-2">

                     <div class="small-category-2-thumb themes-light">
                         <a href="search.html"><i class="ti-cut theme-cl"></i></a>
                     </div>
                     <div class="sc-2-detail">
                         <h5 class="sc-jb-title"><a href="search.html">Hair & Salon</a></h5>
                         <span>07 new job</span>
                     </div>

                 </div>
             </div>

             <!-- Single category -->
             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="small-category-2">

                     <div class="small-category-2-thumb themes-light">
                         <a href="search.html"><i class="ti-pie-chart theme-cl"></i></a>
                     </div>
                     <div class="sc-2-detail">
                         <h5 class="sc-jb-title"><a href="search.html">Data Analysis</a></h5>
                         <span>6 new job</span>
                     </div>

                 </div>
             </div>

             <!-- Single category -->
             <div class="col-lg-3 col-md-4 col-sm-6">
                 <div class="small-category-2">

                     <div class="small-category-2-thumb themes-light">
                         <a href="search.html"><i class="ti-paint-bucket theme-cl"></i></a>
                     </div>
                     <div class="sc-2-detail">
                         <h5 class="sc-jb-title"><a href="search.html">Graphic Design</a></h5>
                         <span>17 new job</span>
                     </div>

                 </div>
             </div>

         </div>
         <!-- /row -->

         <div class="row mt-4">
             <div class="col-lg-12 col-md-12">
                 <div class="text-center">

                     <a href="grid-job.html" class="btn btn-info">Browse All Category<i class="ti-arrow-right ml-2"></i></a>

                 </div>
             </div>
         </div>

     </div>
 </section>
 <!-- ============================ Browse By Category End ================================== -->

 <!-- ============================ How We Work Start ================================== -->
 <section class="gray text-center">
				<div class="container">
					<div class="row">
					
						<div class="col text-center">
							<div class="sec-heading mx-auto">
								<p>World Popular Agency</p>
								<h2>Top Agency of The Year</h2>
							</div>
						</div>
						
					</div>
					<!-- row -->
					<div class="row">
					
						<!-- Single Employer -->
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="employer-wrap-2">
							
								<div class="employer-thumb">
									<a href="company-detail.html"><img alt="" src="assets/img/asana.png" class="avatar avatar-120 photo"></a>
								</div>
								<div class="employer-detail">
									<div class="employer-detail-inner">
										<h4 class="employer-title"><a href="company-detail.html">Asana Tech</a></h4>
										<div class="employer-locations"><i class="ti-location-pin text-danger"></i><a href="#">Saint Carasia</a>, <a href="#">Austrailia</a></div>
										<div class="employer-rating">
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
										</div>
										<a class="emp-total-vacancy" href="company-detail.html">10 Opening</a>
									</div>
								</div>
								
							</div>
						</div>
						
						<!-- Single Employer -->
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="employer-wrap-2">
							
								<div class="employer-thumb">
									<a href="company-detail.html"><img alt="" src="assets/img/adwords.png" class="avatar avatar-120 photo"></a>
								</div>
								<div class="employer-detail">
									<div class="employer-detail-inner">
										<h4 class="employer-title"><a href="company-detail.html">Adwordlia Tech</a></h4>
										<div class="employer-locations"><i class="ti-location-pin text-danger"></i><a href="#">Saint Francis Way</a>, <a href="#">London</a></div>
										<div class="employer-rating">
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
										</div>
										<a class="emp-total-vacancy" href="company-detail.html">07 Opening</a>
									</div>
								</div>
								
							</div>
						</div>
						
						<!-- Single Employer -->
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="employer-wrap-2">
							
								<div class="employer-thumb">
									<a href="company-detail.html"><img alt="" src="assets/img/bing.png" class="avatar avatar-120 photo"></a>
								</div>
								<div class="employer-detail">
									<div class="employer-detail-inner">
										<h4 class="employer-title"><a href="company-detail.html">Binglolia Soft</a></h4>
										<div class="employer-locations"><i class="ti-location-pin text-danger"></i><a href="#">2022 Virgil Street</a>, <a href="#">Canada</a></div>
										<div class="employer-rating">
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star"></i>
										</div>
										<a class="emp-total-vacancy" href="company-detail.html">12 Opening</a>
									</div>
								</div>
								
							</div>
						</div>
						
						<!-- Single Employer -->
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="employer-wrap-2">
							
								<div class="employer-thumb">
									<a href="company-detail.html"><img alt="" src="assets/img/Atlassian.png" class="avatar avatar-120 photo"></a>
								</div>
								<div class="employer-detail">
									<div class="employer-detail-inner">
										<h4 class="employer-title"><a href="company-detail.html">Allia Tech</a></h4>
										<div class="employer-locations"><i class="ti-location-pin text-danger"></i><a href="#">Saint Francis Way</a>, <a href="#">London</a></div>
										<div class="employer-rating">
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star"></i>
										</div>
										<a class="emp-total-vacancy" href="company-detail.html">10 Opening</a>
									</div>
								</div>
								
							</div>
						</div>
						
						<!-- Single Employer -->
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="employer-wrap-2">
							
								<div class="employer-thumb">
									<a href="company-detail.html"><img alt="" src="assets/img/drive.png" class="avatar avatar-120 photo"></a>
								</div>
								<div class="employer-detail">
									<div class="employer-detail-inner">
										<h4 class="employer-title"><a href="company-detail.html">Dritick Tech</a></h4>
										<div class="employer-locations"><i class="ti-location-pin text-danger"></i><a href="#">12 Loving Acres Road</a>, <a href="#">London</a></div>
										<div class="employer-rating">
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
										</div>
										<a class="emp-total-vacancy" href="company-detail.html">20 Opening</a>
									</div>
								</div>
								
							</div>
						</div>
						
						<!-- Single Employer -->
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="employer-wrap-2">
							
								<div class="employer-thumb">
									<a href="company-detail.html"><img alt="" src="assets/img/e.png" class="avatar avatar-120 photo"></a>
								</div>
								<div class="employer-detail">
									<div class="employer-detail-inner">
										<h4 class="employer-title"><a href="company-detail.html">Elozira</a></h4>
										<div class="employer-locations"><i class="ti-location-pin text-danger"></i><a href="#">2022 Virgil Street</a>, <a href="#">USA</a></div>
										<div class="employer-rating">
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star"></i>
										</div>
										<a class="emp-total-vacancy" href="company-detail.html">02 Opening</a>
									</div>
								</div>
								
							</div>
						</div>
						
						<!-- Single Employer -->
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="employer-wrap-2">
							
								<div class="employer-thumb">
									<a href="company-detail.html"><img alt="" src="assets/img/photos.png" class="avatar avatar-120 photo"></a>
								</div>
								<div class="employer-detail">
									<div class="employer-detail-inner">
										<h4 class="employer-title"><a href="company-detail.html">Photopic X</a></h4>
										<div class="employer-locations"><i class="ti-location-pin text-danger"></i><a href="#">1060 Oakmound Road</a>, <a href="#">London</a></div>
										<div class="employer-rating">
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
										</div>
										<a class="emp-total-vacancy" href="company-detail.html">22 Opening</a>
									</div>
								</div>
								
							</div>
						</div>
						<!-- Single Employer -->
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="employer-wrap-2">
							
								<div class="employer-thumb">
									<a href="company-detail.html"><img alt="" src="assets/img/yelp.png" class="avatar avatar-120 photo"></a>
								</div>
								<div class="employer-detail">
									<div class="employer-detail-inner">
										<h4 class="employer-title"><a href="company-detail.html">Yelp Soft</a></h4>
										<div class="employer-locations"><i class="ti-location-pin text-danger"></i><a href="#">2999 Forest Avenue</a>, <a href="#">Canada</a></div>
										<div class="employer-rating">
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star"></i>
										</div>
										<a class="emp-total-vacancy" href="company-detail.html">10 Opening</a>
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
					<!-- /row -->
					
					<div class="row mt-2">
						<div class="col-lg-12 col-md-12">
							<div class="text-center">
								
								<a href="employers-list.html" class="btn btn-info">Browse All Agencies<i class="ti-arrow-right ml-2"></i></a>
								
							</div>
						</div>
					</div>
					
				</div>
			</section>
 <!-- ============================ How We Work End ================================== -->

 <!-- ============================ Popular Jobs Start ================================== -->
 <section>
     <div class="container">

         <div class="row">
             <div class="col text-center">
                 <div class="sec-heading mx-auto">
                     <p>Browse Popular jobs</p>
                     <h2>Top Trending Jobs</h2>
                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-md-12">

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
                     <a class="btn btn-primary bn-det" href="job-detail.html">Apply Now<i class="ti-arrow-right ml-1"></i></a>
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
                     <a class="btn btn-primary bn-det" href="job-detail.html">Apply Now<i class="ti-arrow-right ml-1"></i></a>
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
                     <a class="btn btn-primary bn-det" href="job-detail.html">Apply Now<i class="ti-arrow-right ml-1"></i></a>
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
                     <a class="btn btn-primary bn-det" href="job-detail.html">Apply Now<i class="ti-arrow-right ml-1"></i></a>
                 </div>

                 <!-- Single Large Job List -->
                 <div class="job-new-list">
                     <div class="vc-thumb">
                         <img class="img-fluid rounded-circle" src="assets/img/photos.png" alt="c2.jpg">
                     </div>
                     <div class="vc-content">
                         <h5 class="title"><a href="job-detail.html">Iphone Developer</a><span class="j-part-time">Part Time</span></h5>
                         <p>Megrolia Soft</p>
                         <ul class="vc-info-list">
                             <li class="list-inline-item">
                                 <h5>Sallery</h5> <i class="ti-credit-card"></i>$7.5k-$15k P.A
                             </li>
                             <li class="list-inline-item">
                                 <h5>Skills</h5>
                                 <div class="skills">
                                     <span>Html</span><span>Css3</span><span>java</span><span>+3 more</span>
                                 </div>
                             </li>
                         </ul>
                     </div>
                     <a class="btn btn-primary bn-det" href="job-detail.html">Apply Now<i class="ti-arrow-right ml-1"></i></a>
                 </div>

                 <!-- Single Large Job List -->
                 <div class="job-new-list mb-0">
                     <div class="vc-thumb">
                         <img class="img-fluid rounded-circle" src="assets/img/paypal.png" alt="c2.jpg">
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
                                     <span>Html</span><span>Css3</span><span>PHP</span><span>+3 more</span>
                                 </div>
                             </li>
                         </ul>
                     </div>
                     <a class="btn btn-primary bn-det" href="job-detail.html">Apply Now<i class="ti-arrow-right ml-1"></i></a>
                 </div>

             </div>
         </div>

     </div>
 </section>
 <div class="clearfix"></div>
 <!-- ============================ Popular Jobs End ================================== -->

 <!-- ============================ Counter Facts  Start================================== -->
 <section class="image-bg text-center" style="background:#00a94f url(assets/img/bg2.png);" data-overlay="0">
     <div class="container">
         <div class="row">

             <div class="col-lg-3 col-md-3 col-sm-6 b-r">
                 <div class="count-facts">
                     <h4>2120</h4>
                     <span>Jobs Posted</span>
                 </div>
             </div>

             <div class="col-lg-3 col-md-3 col-sm-6 b-r">
                 <div class="count-facts">
                     <h4>3117</h4>
                     <span>Jobs Filled</span>
                 </div>
             </div>

             <div class="col-lg-3 col-md-3 col-sm-6 b-r">
                 <div class="count-facts">
                     <h4>872</h4>
                     <span>Companies</span>
                 </div>
             </div>

             <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="count-facts">
                     <h4>3740</h4>
                     <span>Freelancer</span>
                 </div>
             </div>

         </div>
     </div>
 </section>
 <!-- ============================ Counter Facts End ================================== -->

 <!-- ============================ Testimonial Start ================================== -->
 <section class="gray">
     <div class="container">

         <div class="row">
             <div class="col text-center">
                 <div class="sec-heading mx-auto">
                     <p>Our Client Review</p>
                     <h2>What People Saying?</h2>
                 </div>
             </div>
         </div>

         <div class="row">

             <div class="owl-carousel" id="testimonials-two">

                 <!-- Single Testimonials -->
                 <div class="item">
                     <div class="testimonial-wrap style-2">
                         <div class="client-thumb-box">
                             <div class="client-thumb-content">
                                 <div class="client-thumb">
                                     <img src="assets/img/user-5.jpg" class="img-responsive img-circle" alt="">
                                 </div>
                                 <h5 class="mb-0">Adam Gillworm</h5>
                                 <span>Envato Market</span>
                                 <div class="rating">
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                 </div>
                             </div>
                         </div>

                         <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.</p>

                     </div>
                 </div>

                 <!-- Single Testimonials -->
                 <div class="item">
                     <div class="testimonial-wrap style-2">
                         <div class="client-thumb-box">
                             <div class="client-thumb-content">
                                 <div class="client-thumb">
                                     <img src="assets/img/user-3.jpg" class="img-responsive img-circle" alt="">
                                 </div>
                                 <h5 class="mb-0">Jully Jiliven</h5>
                                 <span>Envato Manager</span>
                                 <div class="rating">
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                 </div>
                             </div>
                         </div>

                         <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.</p>

                     </div>
                 </div>

                 <!-- Single Testimonials -->
                 <div class="item">
                     <div class="testimonial-wrap style-2">
                         <div class="client-thumb-box">
                             <div class="client-thumb-content">
                                 <div class="client-thumb">
                                     <img src="assets/img/user-2.jpg" class="img-responsive img-circle" alt="">
                                 </div>
                                 <h5 class="mb-0">Gill Wormdom</h5>
                                 <span>SEO Mind LTD CEO</span>
                                 <div class="rating">
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                 </div>
                             </div>
                         </div>

                         <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.</p>

                     </div>
                 </div>

                 <!-- Single Testimonials -->
                 <div class="item">
                     <div class="testimonial-wrap style-2">
                         <div class="client-thumb-box">
                             <div class="client-thumb-content">
                                 <div class="client-thumb">
                                     <img src="assets/img/user-5.jpg" class="img-responsive img-circle" alt="">
                                 </div>
                                 <h5 class="mb-0">Adam Gillworm</h5>
                                 <span>Envato Market</span>
                                 <div class="rating">
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                 </div>
                             </div>
                         </div>

                         <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.</p>

                     </div>
                 </div>

                 <!-- Single Testimonials -->
                 <div class="item">
                     <div class="testimonial-wrap style-2">
                         <div class="client-thumb-box">
                             <div class="client-thumb-content">
                                 <div class="client-thumb">
                                     <img src="assets/img/user-3.jpg" class="img-responsive img-circle" alt="">
                                 </div>
                                 <h5 class="mb-0">Jully Jiliven</h5>
                                 <span>Envato Manager</span>
                                 <div class="rating">
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                     <span class="fa fa-star"></span>
                                 </div>
                             </div>
                         </div>

                         <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.</p>

                     </div>
                 </div>

             </div>

         </div>

     </div>
 </section>
 <div class="clearfix"></div>
 <!-- ============================ Testimonial End ================================== -->



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

 @endsection