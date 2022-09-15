<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themezhub.net/workstock-2/work-stocks/candidate-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jun 2021 17:43:09 GMT -->

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
	<!-- include summernote css/js-->
	<link href="summernote-bs5.css" rel="stylesheet">
	<script src="summernote-bs5.js"></script>
</head>

<body class="blue-skin">
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
									<!-- <li><a href="{{route('hmg')}}">Search job Option<span class="submenu-indicator"></span></a>
										<ul class="nav-dropdown nav-submenu" style="display: none;">
											<li><a href="search-full-width.html">Search Job Full Width</a></li>
											<li><a href="search-with-sidebar.html">Search Job with Sidebar</a></li>
											<li><a href="search-with-sidebar-2.html">Search job with Sidebar 2</a></li>
											<li><a href="search-with-sidebar-3.html">Search Job with Sidebar 3</a></li>
											<li><a href="search-with-detail-job.html">Search job With Detail</a></li>
											<li><a href="search-with-sidebar-list.html">Search Jobs List</a></li>
											<li><a href="search-with-sidebar-list-2.html">Search jobs List 2</a></li>
											<li><a href="employers-list.html">Search Employers Sidebar</a></li>
											<li><a href="freelancer-detail.html">Employers Detail</a></li>
										</ul>
									</li> -->
									<li><a href="{{route('ssg')}}">Trouver un stage<span class="submenu-indicator"></span></a>
										<!-- <ul class="nav-dropdown nav-submenu" style="display: none;">
											<li><a href="half-map-grid.html">Find Job On Map</a></li>
											<li><a href="half-map-list.html">Fins Job On Map List</a></li>
										</ul> -->
									</li>
									<li><a href="{{route('seg')}}">Trouver une entreprise<span class="submenu-indicator"></span></a>
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
									<li><a href="{{route('scg')}}">Trouver un candidat</a></li>
									<!-- <li><a href="candidate-list.html">Browse Candidates List</a></li>
									<li><a href="search-freelancers.html">Search Freelancers</a></li>
									<li><a href="search-freelancers-list.html">Search Freelancers List</a></li>
									<li><a href="freelancer-detail.html">Freelancer Detail</a></li> -->
									<!-- <li><a href="#">Search with Map<span class="submenu-indicator"></span></a> -->
									<!-- <ul class="nav-dropdown nav-submenu" style="display: none;">
											<li><a href="browse-candidates-with-map-grid.html">Search Candidate Grid</a></li>
											<li><a href="browse-candidates-with-map.html">Search Candidate List</a></li>
										</ul> -->
							</li>
							<li><a href="{{route('entreprise-dashboard')}}">Employer Dashboard</a></li>
						</ul>
						</li>

						<!-- <li><a href="{{route('blog')}}">Blog<span class="submenu-indicator"></span></a>
						</li> -->

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
							@endauth


						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->

		<!-- ============================ Hero Banner  Start================================== -->
		<div class="page-title-wrap">
			<div class="container">
				<div class="col-lg-12 col-md-12">
					<div class="pt-caption">
						<h1>Hello! {{auth()->user()->namei}}</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<!-- ============================ Hero Banner End ================================== -->


		<!-- ============== Candidate Dashboard ====================== -->
		<section class="tr-single-detail gray-bg">
			<div class="container">
				<div class="row">

					<!-- Sidebar Start -->
					<div class="col-md-4 col-sm-12">
						<div class="dashboard-wrap">

							<div class="dashboard-thumb">
								<div class="dashboard-th-pic">
									<img src="{{asset('uploads/images/' . auth()->user()->logo_path)}}" class="img-fluid mx-auto img-circle" alt="" />
								</div>
								<h4 class="mb-1">{{auth()->user()->name}}</h4>
								<!-- <span class="text-success">Web Designer</span> -->
							</div>

							<!-- Nav tabs -->
							<ul class="nav dashboard-verticle-nav">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#profile"><i class="ti-user"></i>Mon profile</a>
								</li>
								<!-- <li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#resume"><i class="ti-file"></i>Mon parcours</a>
								</li> -->
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#shortlisted"><i class="lni-heart-filled"></i>Postulations</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#shortlistedDemandes"><i class="lni-briefcase"></i>Demandes de stages</a>
								</li>
								<!-- <li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#alert"><i class="lni-alarm"></i>Alert job</a>
								</li> -->
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#cv"><i class="ti-email"></i>Mon CV </a>
								</li>
								<!-- <li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#package"><i class="lni-tag"></i>Package</a>
								</li> -->
								<li class="nav-item">
									<a class="nav-link" href="{{url('candidat/candidat-detail/'.auth()->user()->id)}}"><i class="lni-user"></i>Voir Profile</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#change-password"><i class="lni-lock"></i>Changer mot de passe</a>
								</li>
								<li class="nav-item">
									<!-- <a class="nav-link" href="{{route('delete')}}" onclick=" event.preventDefault();
									document.getElementById('delete-form').submit();"><i class="lni-trash"></i>Supprimer le compte</a>
									<form action="{{route('delete')}}" method="post" id="delete-form"> @csrf</form> -->
									<a href="#" data-toggle="modal" data-target="#confirmDelete" class="nav-link">
										<i class="lni-trash"></i>Supprimer le compte
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="lni-exit"></i>
										{{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</li>
							</ul>

						</div>
					</div>
					<!-- /col-md-4 -->

					<div class="col-md-8 col-sm-12">
						<!-- Tab panes -->
						<div class="tab-content">

							<!-- My Profile -->

							<div class="tab-pane active container" id="profile">
								<form action="{{route('uui')}}" method="post" enctype="multipart/form-data">
									@csrf
									<!-- Basic Info -->
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="ti-desktop"></i> Informations personnelles</h4>
										</div>

										<div class="tr-single-body">
											<div class="row">

												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="form-group">
														<label>Nom Complet</label>
														<input class="form-control" type="text" value="{{auth()->user()->name}}" name="name" id="name">
													</div>
												</div>

												<div class="col-lg-6 col-md-6 col-sm-12">
													<div class="form-group">
														<label>Age</label>
														<input class="form-control" type="number" value="{{auth()->user()->age}}" name="age" id="age">
													</div>
												</div>

												<div class="col-lg-6 col-md-6 col-sm-12">
													<div class="form-group">
														<label>Genre</label>
														<select name="genre" id="genre" class="form-control">
															<option value="" selected disable hidden>{{auth()->user()->genre}}</option>
															<option value="masculin">Masculin</option>
															<option value="feminin">Feminin</option>

														</select>
														<!-- <input class="form-control" type="text" value="Masculin"> -->
													</div>
												</div>

												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="form-group">
														<label>Filiere</label>
														<input class="form-control" type="text" name="filiere_secteur" value="{{auth()->user()->filiere}}">
													</div>
												</div>

												<div class="col-lg-6 col-md-6 col-sm-12">
													<div class="form-group">
														<label>Spécialité</label>
														<input class="form-control" type="text" name="specialite" value="{{auth()->user()->specialite}}">
													</div>
												</div>

												<div class="col-lg-6 col-md-6 col-sm-12">
													<div class="form-group">
														<label>Niveau</label>
														<!-- <input class="form-control" type="text" name="niveau" value="{{auth()->user()->niveau}}"> -->
														<select name="niveau" id="niveau" class="form-control">
															<option value="" selected disable hidden>{{auth()->user()->niveau}}</option>
															<option value="1ère année">1ère année</option>
															<option value="2ème année">2ème année</option>
															<option value="3ème année">3ème année</option>

														</select>
													</div>
												</div>

												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="form-group">
														<label>Aperçu du profil</label>
														<textarea id="summernote" name="description">
															<p> {{auth()->user()->description}}</p>
														</textarea>
													</div>
												</div>

												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="form-group">
														<label>Photo de profil</label>
														<input type="file" class="form-control" accept="image/*" id="logo" name="logo" value="hey">

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
														<input class="form-control" type="text" name="telephone" value="{{auth()->user()->telephone}}">
													</div>
												</div>

												<div class="col-lg-6 col-md-6 col-sm-12">
													<div class="form-group">
														<label class="social-nfo">Email</label>
														<input class="form-control" type="text" name="email" value="{{auth()->user()->email}}">
													</div>
												</div>


												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="form-group">
														<label class="social-nfo">Adresse Complète</label>
														<input class="form-control" type="text" name="adresse" value="{{auth()->user()->adresse}}">
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
														<input class="form-control" type="text" name="facebook_url" value="{{auth()->user()->facebook_url}}">
													</div>
												</div>

												<div class="col-lg-6 col-md-6 col-sm-12">
													<div class="form-group">
														<label class="social-nfo"><i class="lni-linkdin"></i>LinkedIn URL</label>
														<input class="form-control" type="text" name="linkedin_url" value="{{auth()->user()->linkdin_url}}">
													</div>
												</div>

											</div>
										</div>

									</div>
									<!-- /Social Account -->
									<input type="hidden" value="{{auth()->user()->id}}" name="id_user" id="id_user">

									<button type="submit" class="btn btn-info btn-md full-width">Save & Update</button>
									<!-- 
								<a href="{{route('uui')}}" onclick="event.preventDefault();
								document.getElementById('update-user-info').submit();" class="btn btn-info btn-md full-width" >Save & Update<i class="ml-2 ti-arrow-right"></i></a>
								<form action="{{route('uui')}}" id="update-user-info" method="post">
									@csrf
								</form> -->
								</form>
							</div>


							<!-- My Resume -->
							<div class="tab-pane" id="resume">

								<!-- Add Educations -->
								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="lni-graduation"></i> Add Education</h4>
									</div>

									<div class="tr-single-body">
										<table class="table table-striped mb-5">
											<thead class="thead-dark">
												<tr>
													<th scope="col">Qualification</th>
													<th scope="col">Dates</th>
													<th scope="col">School / Colleges</th>
													<th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">Masters In Fine Arts</th>
													<td>2002 - 2004</td>
													<td>Virazia University</td>
													<td>
														<div class="dash-action">
															<a href="#" class="dg-edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="ti-pencil"></i></a>
															<a href="#" class="dg-delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="ti-trash"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<th scope="row">Tommers College</th>
													<td>2012 - 2015</td>
													<td>Bachlors in Fine Arts</td>
													<td>
														<div class="dash-action">
															<a href="#" class="dg-edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="ti-pencil"></i></a>
															<a href="#" class="dg-delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="ti-trash"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<th scope="row">Diploma In Fine Arts</th>
													<td>2014 - 2015</td>
													<td>Imperieal of Art Direction</td>
													<td>
														<div class="dash-action">
															<a href="#" class="dg-edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="ti-pencil"></i></a>
															<a href="#" class="dg-delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="ti-trash"></i></a>
														</div>
													</td>
												</tr>
											</tbody>
										</table>

										<table class="price-list-wrap">
											<tbody class="ui-sortable">
												<tr class="pricing-list-item pattern ui-sortable-handle">
													<td>
														<div class="box-close"><a class="delete" href="#"><i class="ti-close"></i></a></div>
														<div class="row">

															<div class="col-lg-12 col-md-12 col-sm-12">
																<div class="form-group">
																	<label>Title</label>
																	<input class="form-control" type="text" value="Adam Muklarial">
																</div>
															</div>

															<div class="col-lg-6 col-md-6 col-sm-6">
																<div class="form-group">
																	<label>From</label>
																	<input placeholder="06.11.2007" type="text" class="form-control datepicker">
																</div>
															</div>

															<div class="col-lg-6 col-md-6 col-sm-6">
																<div class="form-group">
																	<label>To</label>
																	<input placeholder="07.17.2010" type="text" class="form-control datepicker">
																</div>
															</div>


															<div class="col-lg-12 col-md-12 col-sm-12">
																<div class="form-group">
																	<label>University</label>
																	<input placeholder="University Name" type="text" class="form-control">
																</div>
															</div>

														</div>
													</td>
												</tr>
											</tbody>
										</table>
										<a href="#" class="btn add-pr-item-btn">Add Item</a>
									</div>

								</div>
								<!-- /Education Info -->


								<!-- Add Skills -->
								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="lni-briefcase"></i> Skill Or Expertise</h4>
									</div>

									<div class="tr-single-body">
										<table class="table table-striped mb-5">
											<thead class="thead-dark">
												<tr>
													<th scope="col">Skills @ Company</th>
													<th scope="col">Lavel</th>
													<th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">Graphic Design</th>
													<td>65</td>
													<td>
														<div class="dash-action">
															<a href="#" class="dg-edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="ti-pencil"></i></a>
															<a href="#" class="dg-delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="ti-trash"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<th scope="row">PHP Developer</th>
													<td>75</td>
													<td>
														<div class="dash-action">
															<a href="#" class="dg-edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="ti-pencil"></i></a>
															<a href="#" class="dg-delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="ti-trash"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<th scope="row">Web Designer</th>
													<td>88</td>
													<td>
														<div class="dash-action">
															<a href="#" class="dg-edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="ti-pencil"></i></a>
															<a href="#" class="dg-delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="ti-trash"></i></a>
														</div>
													</td>
												</tr>
											</tbody>
										</table>

										<table class="price-list-wrap">
											<tbody class="ui-sortable">
												<tr class="pricing-list-item pattern ui-sortable-handle">
													<td>
														<div class="box-close"><a class="delete" href="#"><i class="ti-close"></i></a></div>
														<div class="row">

															<div class="col-lg-9 col-md-9 col-sm-8">
																<div class="form-group">
																	<label>Skills</label>
																	<input class="form-control" type="text" value="Skills">
																</div>
															</div>

															<div class="col-lg-3 col-md-3 col-sm-4">
																<div class="form-group">
																	<label>Lavel</label>
																	<input placeholder="68" type="text" class="form-control">
																</div>
															</div>

														</div>
													</td>
												</tr>
											</tbody>
										</table>
										<a href="#" class="btn add-pr-item-btn">Add Item</a>
									</div>

								</div>
								<!-- /Skills Info -->

								<a href="#" class="btn btn-info btn-md full-width">Save & Update<i class="ml-2 ti-arrow-right"></i></a>

							</div>

							<!-- Préselctionnés -->
							<div class="tab-pane" id="shortlisted">

								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="ti-check"></i> Shortlisted Jobs</h4>
									</div>

									<div class="tr-single-body">

										<!-- Single Manage List -->
										@foreach(auth()->user()->posts as $post)
										<div class="manage-list">

											<div class="mg-list-wrap">
												<div class="mg-list-thumb">
													<img src="{{asset('uploads/images/'.$post->user->logo_path)}}" class="mx-auto" alt="" />
												</div>

												<div class="mg-list-caption">
													<h4 class="mg-title">{{$post->title}}</h4>
													<h4 class="mg-title">{{$post->user->name}}</h4>
													<span class="mg-subtitle">{!!Str::limit($post->description,'10','...')!!}</span>
													<div> <em>Posté le</em> {{$post->created_at->format('D M Y')}}</div>

												</div>
											</div>

											<div class="mg-action">
												<div class="btn-group ml-2">
													<a href="job-detail.html" class="btn btn-view" data-toggle="tooltip" data-placement="top" title="View Job"><i class="ti-eye"></i></a>
												</div>
											</div>

										</div>
										@endforeach
									</div>
								</div>

							</div>

							<!-- Demandes -->
							<div class="tab-pane" id="shortlistedDemandes">

								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="ti-check"></i> Mes demandes</h4>
									</div>

									<div class="tr-single-body">

										<!-- Single Manage List -->
										@forelse($demandes as $demande)
										<div class="manage-list">

											<div class="mg-list-wrap">
												<div class="mg-list-thumb">
													<img src="{{asset('uploads/images/logo_default4.png')}}" class="mx-auto" alt="" />
												</div>
												<div class="mg-list-caption">
													<h4 class="mg-title">Demande n°{{$demande->id}}</h4>
													<h4 class="mg-title">{{$demande->entreprises->name}}</h4>

													<span> <em>Fait le</em> {{$demande->created_at->format('D M Y')}}</span>

												</div>
											</div>

											<!-- <div class="mg-action">
												<div class="btn-group ml-2">
													<a href="{{url('/entreprise/entreprise-dashboard/'.$demande->entreprises->id)}}" class="btn btn-view" data-toggle="tooltip" data-placement="top" title="View Job"><i class="ti-eye"></i></a>
												</div>
											</div> -->
											<div class="mg-action">
												<div class="btn-group custom-drop">
													<button type="button" class="btn btn-more" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="ti-more"></i>
													</button>
													<div class="dropdown-menu pull-right animated flipInX">
														<!-- <a href="#">Send Message</a> -->
														<a href="{{url('/entreprise/entreprise-dashboard/'.$demande->entreprises->id)}}">View Profile</a>
														<!-- <a href="#">Download</a> -->
													</div>
												</div>
												<div class="btn-group ml-2">
													<a href="#" class="mg-valider"><span>Annuler</span> </a>
												</div>
												<div class="btn-group ml-2">
													<div>Status
														<span href="#" class="mg-delete"><span>Refuser</span> </span>
													</div>
												</div>
											</div>

										</div>
										@empty
										<div class="alert alert-success">Aucune demandes enregistrées</div>
										@endforelse

										<!-- Single Manage List -->
										<!-- <div class="manage-list">

											<div class="mg-list-wrap">
												<div class="mg-list-thumb">
													<img src="assets/img/google.png" class="mx-auto" alt="" />
												</div>
												<div class="mg-list-caption">
													<h4 class="mg-title">Web Designer</h4>
													<span class="mg-subtitle">Google Info</span>
													<span><em>Last activity</em> 4 weeks ago. <em>Posted</em> 4 weeks ago</span>

												</div>
											</div>

											<div class="mg-action">
												<div class="btn-group ml-2">
													<a href="job-detail.html" class="btn btn-view" data-toggle="tooltip" data-placement="top" title="View Job"><i class="ti-eye"></i></a>
												</div>
											</div>

										</div> -->

										<!-- Single Manage List -->
										<!-- <div class="manage-list">

											<div class="mg-list-wrap">
												<div class="mg-list-thumb">
													<img src="assets/img/google.png" class="mx-auto" alt="" />
												</div>
												<div class="mg-list-caption">
													<h4 class="mg-title">Web Designer</h4>
													<span class="mg-subtitle">Google Info</span>
													<span><em>Last activity</em> 4 weeks ago. <em>Posted</em> 4 weeks ago</span>

												</div>
											</div>

											<div class="mg-action">
												<div class="btn-group ml-2">
													<a href="job-detail.html" class="btn btn-view" data-toggle="tooltip" data-placement="top" title="View Job"><i class="ti-eye"></i></a>
												</div>
											</div>

										</div> -->

									</div>
								</div>

							</div>
							<!-- applied job -->
							<div class="tab-pane" id="applied">

								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="ti-briefcase"></i> Applied job</h4>
									</div>

									<div class="tr-single-body">

										<!-- Single Manage List -->
										<div class="manage-list">

											<div class="mg-list-wrap">
												<div class="mg-list-thumb">
													<img src="assets/img/google.png" class="mx-auto" alt="" />
												</div>
												<div class="mg-list-caption">
													<h4 class="mg-title">Web Designer</h4>
													<span class="mg-subtitle">Google Info</span>
													<span><em>Last activity</em> 4 weeks ago. <em>Posted</em> 4 weeks ago</span>

												</div>
											</div>

											<div class="mg-action">
												<div class="btn-group ml-2">
													<a href="job-detail.html" class="btn btn-view" data-toggle="tooltip" data-placement="top" title="View Job"><i class="ti-eye"></i></a>
													<a href="#" class="mg-delete ml-2" data-toggle="tooltip" data-placement="top" title="Delete"><i class="ti-trash"></i></a>
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
											<strong>Hi Dear!</strong> There is no any job alert.
										</div>
									</div>
								</div>

							</div>

							<!-- CV & Cover letter -->
							<div class="tab-pane" id="cv">
								<!-- CV & Cover letter -->
								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="ti-desktop"></i> CV & Cover letter</h4>
									</div>
									<form action="{{route('uui')}}" method="post" enctype="multipart/form-data">
									
									
									@csrf
										<div class="tr-single-body">
											<div class="row">

												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="form-group">
														<label>Nom Complet</label>
														<input class="form-control" type="text" name="name" value="{{auth()->user()->name}}">
													</div>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12">

													<div class="form-group">
														<label>Mon Cv</label>
														<label for="cv">{{auth()->user()->cv_path}}</label>
														<input type="file" class="form-control" id="cv" name="cv" accept="application/pdf" placeholder="{{auth()->user()->cv_path}}" value="{{auth()->user()->cv_path}}">

													</div>

												</div>

											</div>
										</div>
										<input type="hidden" value="{{auth()->user()->id}}" name="id_user" id="id_user">
										<input type="hidden" value="{{auth()->user()->email}}" name="email" id="email">
<!-- <input type="submit" value="Envoyer"> -->
										<button type="submit" class="btn btn-info btn-md full-width">Save & Update</button>
									
									</form>
								</div>
								<!-- /CV -->
							</div>

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
													<input type="text" name="password" class="form-control">
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
		<!-- ============== Candidate Dashboard ====================== -->

		@include('layouts.footer')

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

</body>

<!-- Mirrored from themezhub.net/workstock-2/work-stocks/candidate-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jun 2021 17:43:10 GMT -->

</html>