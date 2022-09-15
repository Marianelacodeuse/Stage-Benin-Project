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
	<!-- include libraries(jQuery, bootstrap) -->
	<script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
	<script type="text/javascript" src="cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

	<!-- include summernote css/js-->
	<link href="summernote-bs5.css" rel="stylesheet">
	<script src="summernote-bs5.js"></script>

	<!-- <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script> -->
</head>

<body class="blue-skin bg-light">
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
									<li><a href="{{route('ssg')}}">Trouver un stage<span class="submenu-indicator"></span></a>
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
									<li><a href="{{route('seg')}}">Trouver une entreprise<span class="submenu-indicator"></span></a>
										<!-- <ul class="nav-dropdown nav-submenu" style="display: none;">
											<li><a href="half-map-grid.html">Find Job On Map</a></li>
											<li><a href="half-map-list.html">Fins Job On Map List</a></li>
										</ul> -->
									</li>
									<!-- <li><a href="#">Find Employer<span class="submenu-indicator"></span></a>
										<ul class="nav-dropdown nav-submenu" style="display: none;">
											<li><a href="job-detail.html">Single Job 1</a></li>
											<li><a href="job-detail-2.html">Single Job 2</a></li>
											<li><a href="job-detail-3.html">Single Job 3</a></li>
										</ul>
									</li> -->
									<li><a href="{{route('candidat-dashboard')}}">Candidate Dashboard</a></li>
								</ul>
							</li>

							<li><a href="#">For Employers<span class="submenu-indicator"></span></a>
								<ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
									<li><a href="{{route('scg')}}">Trouver un candidat</a></li>
									<!-- <li><a href="candidate-list.html">Browse Candidates List</a></li>
									<li><a href="search-freelancers.html">Search Freelancers</a></li>
									<li><a href="search-freelancers-list.html">Search Freelancers List</a></li>
									<li><a href="freelancer-detail.html">Freelancer Detail</a></li> -->
									<!-- <li><a href="#">Search with Map<span class="submenu-indicator"></span></a>
										<ul class="nav-dropdown nav-submenu" style="display: none;">
											<li><a href="browse-candidates-with-map-grid.html">Search Candidate Grid</a></li>
											<li><a href="browse-candidates-with-map.html">Search Candidate List</a></li>
										</ul>
									</li> -->
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
							@auth
							<li class="add-listing theme-bg">
								<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ti-plus mr-1"></i>
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</li>

							<li class="add-listing theme-bg">
								<!-- <a href="#">
									<i class="ti-plus"></i> Post Job
								</a> -->
								<a class="nav-link" data-toggle="tab" href="#post-new-job"><i class="ti-plus"></i>Post New job</a>
							</li>

							@endauth


						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!-- End Navigation -->
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->

		<!-- ============================ Hero Banner  Start================================== -->
		<div class="page-title-wrap">
			<div class="container">
				<div class="col-lg-12 col-md-12">
					<div class="pt-caption">
						<h1>Hello! Asana</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<!-- ============================ Hero Banner End ================================== -->


		<!-- ============== Candidate Dashboard ====================== -->








		<!-- ============================ Newsletter Start ================================== -->
		<section class="tr-single-detail gray-bg">
			<div class="container">
				<div class="row">

					<!-- Sidebar Start -->
					<div class="col-md-4 col-sm-12">
						<div class="dashboard-wrap">

							<div class="dashboard-thumb">
								<div class="dashboard-th-pic">
									<img src="assets/img/asana.png" class="img-fluid mx-auto img-circle" alt="" />
								</div>
								<h4 class="mb-1">Asana</h4>
								<span class="text-success">Project Management</span>
							</div>

							<!-- Nav tabs -->
							<ul class="nav dashboard-verticle-nav">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#c-profile"><i class="ti-user"></i>Company Profile</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#manage-jobs"><i class="ti-file"></i>Manage jobs</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#transactions"><i class="lni-heart-filled"></i>Transactions</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#shortlisted"><i class="lni-briefcase"></i>Shortlisted</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#alert"><i class="lni-alarm"></i>Alert job</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#post-new-job"><i class="ti-plus"></i>Post New job</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#package"><i class="lni-tag"></i>Package</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="employer-detail.html"><i class="lni-user"></i>View Profile</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#change-password"><i class="lni-lock"></i>Change Password</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="javascript:void(0)"><i class="lni-trash"></i>Delete Account</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="login.html"><i class="lni-exit"></i>Log Out</a>
								</li>
							</ul>

						</div>
					</div>
					<!-- /col-md-4 -->
					@if(Session::has('success'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Hi! &nbsp;</strong>{{Session::get('success')}}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					@endif
					<div class="col-md-8 col-sm-12">
						<!-- Tab panes -->
						<div class="tab-content">

							<!-- My Profile -->
							<div class="tab-pane active container" id="c-profile">

								<!-- Company Information -->
								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="ti-home"></i> Company Information</h4>
									</div>

									<div class="tr-single-body">
										<div class="row">

											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Company Name</label>
													<input class="form-control" type="text" value="Drizvato Ltd">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Company Slogan</label>
													<input class="form-control" type="text" value="Design & Development Company">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Allow Search listing</label>
													<select id="search-allow" class="js-states form-control">
														<option value="">&nbsp;</option>
														<option value="1">Yes</option>
														<option value="2">No</option>
													</select>
												</div>
											</div>

											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Overview</label>
													<textarea class="form-control" name="summernote" id="summernote"></textarea>
												</div>
											</div>

											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Employer Logo</label>
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="customFile">
														<label class="custom-file-label" for="customFile">Choose file</label>
													</div>
												</div>
											</div>

											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Cover Picture</label>
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="customFile2">
														<label class="custom-file-label" for="customFile2">Choose file</label>
													</div>
												</div>
											</div>

										</div>
									</div>

								</div>
								<!-- /Basic Info -->

								<!-- Contact Info -->
								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="ti-headphone"></i> Contact Info</h4>
									</div>

									<div class="tr-single-body">
										<div class="row">

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label class="social-nfo">Phone Number</label>
													<input class="form-control" type="text" value="91 254 548 7584">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label class="social-nfo">Email</label>
													<input class="form-control" type="text" value="drizvato@gmail.com">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label class="social-nfo">Website</label>
													<input class="form-control" type="text" value="https://drizvato.com/">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label class="social-nfo">Country</label>
													<input class="form-control" type="text" value="India">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label class="social-nfo">City</label>
													<input class="form-control" type="text" value="Chandigarh">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label class="social-nfo">Complete Address</label>
													<input class="form-control" type="text" value="2850, Near Gurudwara">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label class="social-nfo">Latitude</label>
													<input class="form-control" type="text" value="-0.3306495">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label class="social-nfo">Longitude</label>
													<input class="form-control" type="text" value="51.5353994">
												</div>
											</div>

										</div>
									</div>

								</div>
								<!-- /Contact Info -->

								<!-- Social Account -->
								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="ti-new-window"></i> Social Account</h4>
									</div>

									<div class="tr-single-body">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label class="social-nfo"><i class="lni-facebook"></i>Facebook URL</label>
													<input class="form-control" type="text" value="https://facebook.com/">
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label class="social-nfo"><i class="lni-google-plus"></i>Google+ URL</label>
													<input class="form-control" type="text" value="https://plus.google.com/">
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label class="social-nfo"><i class="lni-linkedin"></i>LinkedIn URL</label>
													<input class="form-control" type="text" value="https://linkedin.com/">
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label class="social-nfo"><i class="lni-twitter"></i>Twitter URL</label>
													<input class="form-control" type="text" value="htps://twitter.com">
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label class="social-nfo"><i class="lni-instagram"></i>Instagram URL</label>
													<input class="form-control" type="text" value="https://instagram.com/">
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label class="social-nfo"><i class="lni-pinterest"></i>Pinterest URL</label>
													<input class="form-control" type="text" value="https://pinterest.com/">
												</div>
											</div>
										</div>
									</div>

								</div>
								<!-- /Social Account -->

								<!-- Advance Information -->
								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="ti-heart"></i> Advance Information</h4>
									</div>

									<div class="tr-single-body">
										<div class="row">

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label class="social-nfo">Est. Since</label>
													<input class="form-control" type="text" value="1992">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label class="social-nfo">Team Size</label>
													<input class="form-control" type="text" value="80+">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label class="social-nfo">Branches</label>
													<input class="form-control" type="text" value="10">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label class="social-nfo">Business Type</label>
													<select id="business-type" class="js-states form-control">
														<option value="">Please Select</option>
														<option value="1" selected>Limited Company</option>
														<option value="2">Private Limited</option>
														<option value="3">C Corporations</option>
														<option value="4">S Corporations</option>
													</select>
												</div>
											</div>

										</div>
									</div>

								</div>
								<!-- /Advance Information -->

								<a href="#" class="btn btn-info btn-md full-width">Save & Update<i class="ml-2 ti-arrow-right"></i></a>

							</div>

							<!-- Manage jobs -->
							<div class="tab-pane" id="manage-jobs">

								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="lni-file"></i> Manage jobs</h4>
									</div>

									<div class="tr-single-body">
										<div class="row">

											<div class="col-md-12">
												<!-- Single Manage job -->
												@forelse(auth()->user()->posts as $post)
												<div class="manage-list">

													<div class="mg-list-wrap">
														<div class="mg-list-thumb">
															<img src="assets/img/adwords.png" class="mx-auto" alt="" />
														</div>
														<div class="mg-list-caption">
															<h4 class="mg-title">{{$post->title}}</h4>
															<div>{!!Str::words($post->description,'10','....')!!}</div>
															<span><em>Last Update</em> {{$post->updated_at->format('D M Y')}} <em>Creer il y {{$post->created_at}} </em></span>

														</div>
													</div>

													<div class="mg-action">
														<!-- <div class="btn-group custom-drop">
															<button type="button" class="btn btn-more" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<i class="ti-more"></i>
															</button>
															<div class="dropdown-menu pull-right animated flipInX">
																<a href="#">Accending</a>
																<a href="#">Decending</a>
																<a href="#">By Date</a>
															</div>
														</div> -->
														<div class="btn-group ml-2">
															<a href="#" class="mg-succes"><i class="ti-eye"></i></a>
														</div>
														<div class="btn-group ml-2">
															<button type="submit"></button>
															<a href="{{url('/post-delete/'.$post->id)}}" class="mg-delete" onclick="confirm('voulez vous vraiment supprimer')"><i class="ti-trash"></i></a>
														</div>
														<div class="btn-group ml-2">
															<a href="#" class="mg-edit"><i class="ti-pencil"></i></a>
														</div>
													</div>

												</div>
												@empty
												<div class="alert alert-info">Not job yet</div>
												@endforelse

											</div>

										</div>
									</div>

								</div>
								<!-- /Manage jobs -->

								<a href="#" class="btn btn-info btn-md full-width">Save & Update<i class="ml-2 ti-arrow-right"></i></a>

							</div>

							<!-- Transactions-->
							<div class="tab-pane" id="transactions">

								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="ti-stats-up"></i> Transactions</h4>
									</div>

									<div class="tr-single-body">
										<div class="alert alert-success">
											<strong>Hi Dear!</strong> There is no record in transaction list
										</div>
									</div>
								</div>

							</div>

							<!-- Shortlisted -->
							<div class="tab-pane" id="shortlisted">

								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="ti-briefcase"></i> Shortlisted</h4>
									</div>

									<div class="tr-single-body">
										<div class="row">

											<div class="col-md-12">

												<!-- Single Resume -->
												<div class="manage-list">

													<div class="mg-list-wrap">
														<div class="mg-list-thumb">
															<img src="assets/img/user-3.jpg" class="mx-auto" alt="" />
														</div>
														<div class="mg-list-caption">
															<h4 class="mg-title">Shaurya Preet</h4>
															<span class="mg-subtitle">Web Designer</span>
															<span><em>Last activity</em> 4 weeks ago. <em>Registered</em> 4 weeks ago</span>

														</div>
													</div>

													<div class="mg-action">
														<div class="btn-group custom-drop">
															<button type="button" class="btn btn-more" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<i class="ti-more"></i>
															</button>
															<div class="dropdown-menu pull-right animated flipInX">
																<a href="#">Send Message</a>
																<a href="#">View Profile</a>
																<a href="#">Download</a>
															</div>
														</div>
														<div class="btn-group ml-2">
															<a href="#" class="mg-delete"><i class="ti-trash"></i></a>
														</div>
													</div>

												</div>

												<!-- Single Resume -->
												<div class="manage-list">

													<div class="mg-list-wrap">
														<div class="mg-list-thumb">
															<img src="assets/img/user-7.jpg" class="mx-auto" alt="" />
														</div>
														<div class="mg-list-caption">
															<h4 class="mg-title">Adam Drivakla</h4>
															<span class="mg-subtitle">Product Designer</span>
															<span><em>Last activity</em> 4 weeks ago. <em>Registered</em> 4 weeks ago</span>

														</div>
													</div>

													<div class="mg-action">
														<div class="btn-group custom-drop">
															<button type="button" class="btn btn-more" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<i class="ti-more"></i>
															</button>
															<div class="dropdown-menu pull-right animated flipInX">
																<a href="#">Send Message</a>
																<a href="#">View Profile</a>
																<a href="#">Download</a>
															</div>
														</div>
														<div class="btn-group ml-2">
															<a href="#" class="mg-delete"><i class="ti-trash"></i></a>
														</div>
													</div>

												</div>

												<!-- Single Resume -->
												<div class="manage-list">

													<div class="mg-list-wrap">
														<div class="mg-list-thumb">
															<img src="assets/img/user-4.jpg" class="mx-auto" alt="" />
														</div>
														<div class="mg-list-caption">
															<h4 class="mg-title">Dhananjay Preet</h4>
															<span class="mg-subtitle">UI/UX Designer</span>
															<span><em>Last activity</em> 4 weeks ago. <em>Registered</em> 4 weeks ago</span>

														</div>
													</div>

													<div class="mg-action">
														<div class="btn-group custom-drop">
															<button type="button" class="btn btn-more" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<i class="ti-more"></i>
															</button>
															<div class="dropdown-menu pull-right animated flipInX">
																<a href="#">Send Message</a>
																<a href="#">View Profile</a>
																<a href="#">Download</a>
															</div>
														</div>
														<div class="btn-group ml-2">
															<a href="#" class="mg-delete"><i class="ti-trash"></i></a>
														</div>
													</div>

												</div>

												<!-- Single Resume -->
												<div class="manage-list">

													<div class="mg-list-wrap">
														<div class="mg-list-thumb">
															<img src="assets/img/user-5.jpg" class="mx-auto" alt="" />
														</div>
														<div class="mg-list-caption">
															<h4 class="mg-title">Daniel Duke</h4>
															<span class="mg-subtitle">PHP Developer</span>
															<span><em>Last activity</em> 4 weeks ago. <em>Registered</em> 4 weeks ago</span>

														</div>
													</div>

													<div class="mg-action">
														<div class="btn-group custom-drop">
															<button type="button" class="btn btn-more" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<i class="ti-more"></i>
															</button>
															<div class="dropdown-menu pull-right animated flipInX">
																<a href="#">Send Message</a>
																<a href="#">View Profile</a>
																<a href="#">Download</a>
															</div>
														</div>
														<div class="btn-group ml-2">
															<a href="#" class="mg-delete"><i class="ti-trash"></i></a>
														</div>
													</div>

												</div>

												<!-- Single Resume -->
												<div class="manage-list">

													<div class="mg-list-wrap">
														<div class="mg-list-thumb">
															<img src="assets/img/user-6.jpg" class="mx-auto" alt="" />
														</div>
														<div class="mg-list-caption">
															<h4 class="mg-title">Abhay Shukla</h4>
															<span class="mg-subtitle">App Designer</span>
															<span><em>Last activity</em> 4 weeks ago. <em>Registered</em> 4 weeks ago</span>

														</div>
													</div>

													<div class="mg-action">
														<div class="btn-group custom-drop">
															<button type="button" class="btn btn-more" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<i class="ti-more"></i>
															</button>
															<div class="dropdown-menu pull-right animated flipInX">
																<a href="#">Send Message</a>
																<a href="#">View Profile</a>
																<a href="#">Download</a>
															</div>
														</div>
														<div class="btn-group ml-2">
															<a href="#" class="mg-delete"><i class="ti-trash"></i></a>
														</div>
													</div>

												</div>

											</div>

										</div>
									</div>
								</div>

							</div>

							<!-- alert job -->
							<div class="tab-pane" id="alert">

								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="ti-bell"></i> Alert Jobs</h4>
									</div>

									<div class="tr-single-body">
										<div class="alert alert-success">
											<strong>Hi Dear!</strong> There is no record in transaction list
										</div>
									</div>
								</div>

							</div>

							<!-- Add New jobs -->
							<div class="tab-pane" id="post-new-job">
								<!-- Add New jobs -->
								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="ti-plus"></i> Post A New jobs</h4>
									</div>

									<div class="tr-single-body">
										<div class="row">

											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Job Title</label>
													<input class="form-control" type="text" value="Web Designer">
												</div>
											</div>

											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Job Description</label>
													<div id="jb-description">
														<p>Job Description</p>
													</div>
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Email</label>
													<input class="form-control" type="email" value="youremail@gmail.com">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Phone</label>
													<input class="form-control" type="text" value="123 254 4875">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>UserName</label>
													<input class="form-control" type="text" value="drizvato47">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Job Type</label>
													<select id="jb-type" class="form-control">
														<option value="">&nbsp;</option>
														<option value="1">Full Time</option>
														<option value="2">Part Time</option>
														<option value="3">Freelancing</option>
														<option value="4">Internship</option>
													</select>
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Career Level</label>
													<select id="career-lavel" class="form-control">
														<option value="">&nbsp;</option>
														<option value="1">Manager</option>
														<option value="2">Officer</option>
														<option value="3">Student</option>
														<option value="4">Executive</option>
													</select>
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Offerd Salary</label>
													<select id="offerd-sallery" class="form-control">
														<option value="">&nbsp;</option>
														<option value="1">$0 - $15,000</option>
														<option value="2">$15,000 - $20,000</option>
														<option value="3">$20,000 - $25,000</option>
														<option value="4">$25,000 - $50,000</option>
													</select>
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Experience</label>
													<select id="experience" class="form-control">
														<option value="">&nbsp;</option>
														<option value="1">Entry Level</option>
														<option value="2">Less Then One Year</option>
														<option value="3">2 Years</option>
														<option value="4">3 Years</option>
														<option value="5">4 Years</option>
														<option value="6">5+ Years</option>
													</select>
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Gender</label>
													<select id="gender" class="form-control">
														<option value="">&nbsp;</option>
														<option value="1">Male</option>
														<option value="2">Female</option>
														<option value="3">Both</option>
													</select>
												</div>
											</div>

											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Specialisms</label>
													<select id="specialisms" class="form-control" multiple="multiple">
														<option value="">&nbsp;</option>
														<option value="1">Accounting</option>
														<option value="2">Constructions</option>
														<option value="3">Retail</option>
														<option value="4">Technology</option>
														<option value="5">Sales & Marketing</option>
														<option value="6">Telecommunications</option>
													</select>
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Industry</label>
													<select id="industry" class="form-control">
														<option value="">&nbsp;</option>
														<option value="1">Development</option>
														<option value="2">Finance</option>
														<option value="3">Banking</option>
														<option value="4">SEO/SMO</option>
														<option value="5">Designing</option>
														<option value="6">Management</option>
													</select>
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Qualification</label>
													<select id="qualification" class="form-control">
														<option value="">&nbsp;</option>
														<option value="1">Certificate</option>
														<option value="2">Diploma</option>
														<option value="3">Bachelor Degree</option>
														<option value="4">Master Degree</option>
														<option value="5">Post Graduate</option>
													</select>
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Country</label>
													<input class="form-control" type="text" value="Country">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>City</label>
													<input class="form-control" type="text" value="Your City">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Full Address</label>
													<input class="form-control" type="text" value="Full Address">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Find On Map</label>
													<input class="form-control" type="text" value="Map Address">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Latitude</label>
													<input class="form-control" type="text" value="45.5073509">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Longitude</label>
													<input class="form-control" type="text" value="-0.12775829999">
												</div>
											</div>

										</div>
									</div>

								</div>
								<!-- /CV -->

								<a href="#" class="btn btn-info btn-md full-width">Save & Update<i class="ml-2 ti-arrow-right"></i></a>

							</div>

							<!-- package -->
							<!-- <div class="tab-pane" id="package">
							<table class="table table-striped tbl-big center mb-5">
								<thead class="bg-primary text-light">
									<tr>
										<th scope="col">Select</th>
										<th scope="col">Title</th>
										<th scope="col">Jobs Remaining</th>
										<th scope="col">Features Remaining</th>
										<th scope="col">Renew Remaining</th>
										<th scope="col">Duration</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>
											<input type="radio" class="radio-custom" id="basic" name="cm-r" checked>
											<label for="basic" class="radio-custom-label"></label>
										</th>
										<td>Basic</td>
										<td>15</td>
										<td>07</td>
										<td>5</td>
										<td>30 Days</td>
									</tr>
									<tr>
										<th>
											<input type="radio" class="radio-custom" id="premium" name="cm-r">
											<label for="premium" class="radio-custom-label"></label>
										</th>
										<td>Premium</td>
										<td>18</td>
										<td>12</td>
										<td>2</td>
										<td>60 Days</td>
									</tr>

								</tbody>
							</table>

							<table class="table table-striped tbl-big center mb-5">
								<thead class="bg-primary text-light">
									<tr>
										<th scope="col">Select</th>
										<th scope="col">Title</th>
										<th scope="col">Price</th>
										<th scope="col">Jobs Posting</th>
										<th scope="col">Feature Jobs</th>
										<th scope="col">Renew Jobs</th>
										<th scope="col">Duration</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>
											<input type="radio" class="radio-custom" id="basic-p" name="nm-r" checked>
											<label for="basic-p" class="radio-custom-label"></label>
										</th>
										<td>Basic</td>
										<td>$49</td>
										<td>50</td>
										<td>50</td>
										<td>30</td>
										<td>30 Days</td>
									</tr>
									<tr>
										<th>
											<input type="radio" class="radio-custom" id="premium-p" name="nm-r">
											<label for="premium-p" class="radio-custom-label"></label>
										</th>
										<td>Premium</td>
										<td>$99</td>
										<td>99</td>
										<td>50</td>
										<td>30</td>
										<td>30 Days</td>
									</tr>
									<tr>
										<th>
											<input type="radio" class="radio-custom" id="standard-p" name="nm-r">
											<label for="standard-p" class="radio-custom-label"></label>
										</th>
										<td>Standard</td>
										<td>$149</td>
										<td>170</td>
										<td>10</td>
										<td>50</td>
										<td>60 Days</td>
									</tr>
									<tr>
										<th>
											<input type="radio" class="radio-custom" id="platinum-p" name="nm-r">
											<label for="platinum-p" class="radio-custom-label"></label>
										</th>
										<td>Platinum</td>
										<td>$499</td>
										<td>250</td>
										<td>100</td>
										<td>70</td>
										<td>60 Days</td>
									</tr>

								</tbody>
							</table>

							<button class="btn btn-md btn-info" type="submit">Continue<i class="ti-arrow-right ml-2"></i></button>
						</div> -->

							<!-- change-password -->
							<div class="tab-pane" id="change-password">
								<form action="{{route('uup')}}" method="post">
									@csrf
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="lni-lock"></i> Change Password</h4>
										</div>

										@if(Session::has('error'))

										<div class="alert alert-danger">{{Session::get('error')}}</div>

										@endif
										@if(Session::has('success'))

										<div class="alert alert-success">{{Session::get('success')}}</div>

										@endif
										<div class="tr-single-body">
											<div class="form-group">
												<label>Current Password</label>
												<div class="input-with-gray">
													<input type="text" name="password" class="form-control" placeholder="{{(auth()->user()->password)}}">
													<i class="ti-unlock"></i>
												</div>
											</div>
											<div class="form-group">
												<label>New Password</label>
												<div class="input-with-gray">
													<input type="text" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('name') }}" placeholder="*******">
													@error('password')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
													@enderror
													<i class="ti-unlock"></i>
												</div>

											</div>
											<div class="form-group">
												<label>Confirm Password</label>
												<div class="input-with-gray">
													<input id="password-confirm" type="text" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="*******">
													<i class="ti-unlock"></i>
												</div>
											</div>
										</div>

									</div>
									<input type="hidden" value="{{auth()->user()->id}}" name="id_user" id="id_user">

									<button type="submit" class="btn btn-info btn-md full-width">Save & Update</button>



								</form>
							</div>

						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- ============================ Footer Start ================================== -->
		<footer class="dark-footer skin-blue-footer">
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

		<!--==============================================================-->
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







		<!-- Pluggins of this pages -->
		<script>
			$(function() {
				$('.datepicker').datepicker({
					format: 'mm-dd-yyyy'
				});
			});
		</script>
		<script>
			$('#summernote').summernote({
				placeholder: 'Hello Bootstrap 5',
				tabsize: 2,
				height: 100
			});
		</script>
		<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.ckeditor').ckeditor();
			});
		</script>


</body>

</html>