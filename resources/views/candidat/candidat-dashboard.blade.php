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
			<div class="container">
				<nav id="navigation" class="navigation navigation-landscape">
					<div class="nav-header">
						<a class="nav-brand" href="#">
							<img src="{{asset('assets/img/logo.png')}}" class="logo" alt="" />
						</a>
						<div class="nav-toggle"></div>
					</div>
					<div class="nav-menus-wrapper" style="transition-property: none;">
						<ul class="nav-menu">

							<li class="active"><a href="{{url('/')}}">Accueil<span class="submenu-indicator"></span></a>

							</li>

							<li><a href="#">Etudiants<span class="submenu-indicator"></span></a>
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
									<li><a href="{{route('candidat-dashboard')}}">Espace Etudiant</a></li>
								</ul>
							</li>

							<li><a href="#">Entreprise<span class="submenu-indicator"></span></a>
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
							<li><a href="{{route('entreprise-dashboard')}}">Espace Entreprise</a></li>
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
									{{ __('Deconnexion') }}
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
						<h1>Bienvenu! {{auth()->user()->namei}}</h1>
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
										{{ __('Deconnexion') }}
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
						@if(Session::has('error'))

						<div class="alert alert-danger">{{Session::get('error')}}</div>

						@endif
						@if(Session::has('success'))

						<!-- <div class="alert alert-success">{{Session::get('success')}}</div> -->
						<div class="alert alert-success alert-white rounded">
                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
                            <!-- <div class="icon">
                                <i class="fa fa-check"></i>
                            </div> -->
                            <strong>Success!</strong>
                            {{Session::get('success')}}
                        </div>
						@endif
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
															<option value="{{auth()->user()->genre}}" selected disable hidden>{{auth()->user()->genre}}</option>
															<option value="masculin">Masculin</option>
															<option value="feminin">Feminin</option>

														</select>
														<!-- <input class="form-control" type="text" value="Masculin"> -->
													</div>
												</div>

												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="form-group">
														<label>Filière</label>
														<!-- <input class="form-control" type="text" name="filiere_secteur" value="{{auth()->user()->filiere_secteur}}"> -->
														<select name="filiere_secteur" id="genre" class="form-control">
															<option value="{{auth()->user()->filiere_secteur}}" selected disable hidden>{{auth()->user()->filiere_secteur}}</option>
															<option value="Finance et Comptabilité (FC)">Finance et Comptabilité (FC)</option>
															<option value="Banque et assurance (BA)">Banque et assurance (BA)</option>
															<option value="Technique Commerciale et Marketing (TCM)">Technique Commerciale et Marketing (TCM)</option>
															<option value="Gestion des Ressources Humaines et Communication (GRHC)">Gestion des Ressources Humaines et Communication (GRHC)</option>
															<option value="Transport et Logistique (TL)">Transport et Logistique (TL)</option>
															<option value="Informatique de Gestion (IG)">Informatique de Gestion (IG)</option>

														</select>
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
														<select name="niveau_taille" id="niveau_taille" class="form-control">
															<option value="{{auth()->user()->niveau_taille}}" selected disable hidden>{{auth()->user()->niveau_taille}}</option>
															<option value="1ère année">1ère année</option>
															<option value="2ème année">2ème année</option>
															<option value="3ème année">3ème année</option>

														</select>
													</div>
												</div>

												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="form-group">
														<label>Aperçu du profil</label>
														<textarea class="ckeditor" name="description">
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
											<h4><i class="ti-headphone"></i> Informations de Contact</h4>
										</div>

										<div class="tr-single-body">
											<div class="row">

												<div class="col-lg-6 col-md-6 col-sm-12">
													<div class="form-group">
														<label class="social-nfo">Téléphone</label>
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
											<h4><i class="ti-new-window"></i> Comptes sociaux</h4>
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
														<input class="form-control" type="text" name="linkedin_url" value="{{auth()->user()->linkedin_url}}">
													</div>
												</div>

											</div>
										</div>

									</div>
									<!-- /Social Account -->
									<input type="hidden" value="{{auth()->user()->id}}" name="id_user" id="id_user">

									<button type="submit" class="btn btn-info btn-md full-width">Sauvegarder & Mettre à jour </button>
									<!-- 
								<a href="{{route('uui')}}" onclick="event.preventDefault();
								document.getElementById('update-user-info').submit();" class="btn btn-info btn-md full-width" >Save & Update<i class="ml-2 ti-arrow-right"></i></a>
								<form action="{{route('uui')}}" id="update-user-info" method="post">
									@csrf
								</form> -->
								</form>
							</div>




							<!-- Préselctionnés -->
							<div class="tab-pane" id="shortlisted">

								<div class="tr-single-box">
									<div class="tr-single-header">
										<h4><i class="ti-check"></i> Postulations</h4>
									</div>

									<div class="tr-single-body">

										<!-- Single Manage List -->
										@forelse(auth()->user()->posts as $post)
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
													<a href="{{url('post-show/'.$post->id)}}" class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Consulter l'offre de stage"><i class="ti-eye"></i></a>
												</div>
												@if($post->status==-1)
												<div class="btn-group ml-2">
													<div>En cours</div>
												</div>
												@endif
												@if($post->status==1)
												<div class="btn-group ml-2">
													<span class="mg-valider">Accepter</span>
												</div>
												@endif
												@if($post->status==0)
												<div class="btn-group ml-2">
													<span class="mg-delete">Refuser</span>
												</div>
												@endif
											</div>

										</div>

										@empty
										<div class="alert alert-success">Aucune candidatures éffectuées</div>
										@endforelse
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
												<!-- <div class="btn-group custom-drop">
													<button type="button" class="btn btn-more" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="ti-more"></i>
													</button>
													<div class="dropdown-menu pull-right animated flipInX">
														<a href="#">Send Message</a>
														<a href="{{url('/entreprise/entreprise-dashboard/'.$demande->entreprises->id)}}">View Profile</a>
														<a href="#">Download</a>
													</div>
												</div> -->
												<div class="btn-group ml-2">
													<a href="#" class="mg-delete"><span>Annuler</span> </a>
												</div>
												<div class="btn-group ml-2">
													<a href="{{url('/entreprise/entreprise-detail/'.$demande->entreprises->id)}}" class="btn btn-view" data-toggle="tooltip" data-placement="top" title="Consulter le profil de l'entreprise"><i class="ti-eye"></i></a>
												</div>



												@if($demande->status==-1)
												<div class="btn-group ml-2">
													<div>En cours</div>
												</div>
												@endif
												@if($demande->status==1)
												<div class="btn-group ml-2">
													<span class="mg-valider">Accepter</span>
												</div>
												@endif
												@if($demande->status==0)
												<div class="btn-group ml-2">
													<span class="mg-delete">Refuser</span>
												</div>
												@endif
											</div>

										</div>
										@empty
										<div class="alert alert-success">Aucune demandes enregistrées</div>
										@endforelse

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
									<form action="{{route('ucv')}}" method="post" enctype="multipart/form-data">


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
										<button type="submit" class="btn btn-info btn-md full-width">Sauvegarder & Mettre à jour</button>
										<a href="{{url('candidat/candidat-cv-display')}}" class="mt-5 btn btn-info btn-md full-width" target="_blank" rel="noopener noreferrer"> Voir le CV</a>

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

										<!-- @if(Session::has('error'))

										<div class="alert alert-danger">{{Session::get('error')}}</div>

										@endif
										@if(Session::has('success'))

										<div class="alert alert-success">{{Session::get('success')}}</div>

										@endif -->
										<div class="tr-single-body">
											<div class="form-group">
												<label>Mot de passe actuel</label>
												<div class="input-with-gray">
													<input type="password" name="password" class="form-control">
													<i class="ti-unlock"></i>
												</div>
											</div>
											<div class="form-group">
												<label>Nouveau mot de passe</label>
												<div class="input-with-gray">
													<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('name') }}" placeholder="*******">
													@error('password')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
													@enderror
													<i class="ti-unlock"></i>
												</div>

											</div>
											<div class="form-group">
												<label>CConfimer mot de passe</label>
												<div class="input-with-gray">
													<input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="*******">
													<i class="ti-unlock"></i>
												</div>
											</div>
										</div>

									</div>
									<input type="hidden" value="{{auth()->user()->id}}" name="id_user" id="id_user">

									<button type="submit" class="btn btn-info btn-md full-width">Sauvegarder et mettre à jour</button>



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
	<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.ckeditor').ckeditor();
		});
	</script>


</body>

<!-- Mirrored from themezhub.net/workstock-2/work-stocks/candidate-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jun 2021 17:43:10 GMT -->

</html>