<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Stage Benin</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
	<link rel="stylesheet" href="{{asset('assets/custom_css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/custom_css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/custom_css/owl.theme.default.min.css')}}">
	<!-- All Plugins Css -->
	<link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet">


	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('/assets/css/style1.css')}}">
	<link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">


	<!-- Custom Color -->
	<link href="{{asset('assets/css/skin/default.css')}}" rel="stylesheet">
</head>

<body class="blue-skin bg-light" data-bs-spy="scroll" data-bs-target=".navbar" id="etudiants">
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
		<!-- Start Navigation Template -->
		<!-- <div class="header header-dark">
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

							<li class="active"><a href="{{url('/')}}">Accueil<span class="submenu-indicator"></span></a>

							</li>

							<li><a href="#">For Candidates<span class="submenu-indicator"></span></a>
								<ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
									<li><a href="{{route('ssg')}}">Trouver un stage<span class="submenu-indicator"></span></a>

									</li>
									<li><a href="{{route('seg')}}">Trouver une entreprise<span class="submenu-indicator"></span></a>

									</li>

									<li><a href="{{route('candidat-dashboard')}}">Candidate Dashboard</a></li>
								</ul>
							</li>

							<li><a href="#">For Employers<span class="submenu-indicator"></span></a>
								<ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
									<li><a href="{{route('scg')}}">Trouver un candidat</a></li>

									<li><a href="{{route('entreprise-dashboard')}}">Employer Dashboard</a></li>
								</ul>
							</li>

							<li><a href="{{route('blog')}}">Blog<span class="submenu-indicator"></span></a>

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
							@if(Auth::user()->role=="recruteur")
							<li class="add-listing theme-bg">
								<a href="#">
									<i class="ti-plus"></i> Post Job
								</a>

							</li>

							@endif
							@else
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
							@endauth


						</ul>
					</div>
				</nav>
			</div>
		</div> -->
		<!-- Start Navigation Customize -->
		<!-- ===================================Navbar=================================== -->
		<!-- <div class="top-nav">
			<div class="container">
				<div class="row">
					<div class="top">
						<p>StageBenin</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<nav class="cc-navbar navbar navbar-expand-lg  navbar-light sticky-top">
				<a class="navbar-brand" href="#"> <span class="stage2">Stage</span><span class="stage">Benin</span></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav m-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="../../index.html">Accueil</a>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Etudiants
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="../../Template/work-stocks/candidate-grid.html">Trouver une entreprise </a></li>
								<li><a class="dropdown-item" href="../../sneat-1.0.1/html/index.html">Accéder au dashboard </a></li>
							</ul>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Entreprises
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#dashboard_entreprise">Accéder au dashboard </a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">Contact</a>
						</li>
					</ul>
					<form class="d-flex">
						<button class="btn0">Rechercher un stage</button>
						<button class="btn1 mx-2">Poster un stage</button>
					</form>
				</div>
			</nav>
		</div> -->

		<!-- End Navigation -->
		<!-- Start Navigation New Customzise -->
		<!-- ===================================Navbar=================================== -->
		<div class="top-nav">
			<div class="container">
				<div class="row">
					<div class="top">
						<p>StageBenin</p>
					</div>
				</div>
			</div>
		</div>

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
									<li><a href="{{route('ssl')}}">Trouver un stage<span class="submenu-indicator"></span></a>
									</li>
									<li><a href="{{route('sel')}}">Trouver une entreprise<span class="submenu-indicator"></span></a>
									</li>
									<li><a href="{{route('candidat-dashboard')}}">Espace Etudiant<span class="submenu-indicator"></span></a>
									</li>
								</ul>
							</li>

							<li><a href="#">Entreprise<span class="submenu-indicator"></span></a>
								<ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
									<li><a href="{{route('scg')}}">Trouver un étudiant</a></li>
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
							@else
							<!-- <li class="add-listing theme-bg">
								<a href="#">
									Rechercher un stage
								</a>
							</li> -->
							<ul class="nav-menu nav-menu-social align-to-right">

								<li class="add-listing theme-bg mx-2">
									<a href="#">
										<i class="ti-plus"></i> Poster un stage
									</a>
								</li>
							</ul>
							@endauth
						</ul>


						<!-- <form class="d-flex">
							<button class="btn0">Rechercher un stage</button>
							<button class="btn1 mx-2">Poster un stage</button>
						</form> -->
					</div>
				</nav>
			</div>
		</div>
		<!-- End Navigation -->





		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->
		@yield('contact')
		@yield('main')
		@yield('login')
		@yield('register')
		@yield('blog')
		@yield('blog-detail')
		@yield('offre-detail')
		@yield('candidat-dashboard')
		@yield('entreprise-dashboard')
		@yield('half-map-list')
		@yield('half-map-grid')
		@yield('search-entreprise-grid')
		@yield('search-entreprise-list')
		@yield('search-candidat-grid')
		@yield('search-candidat-list')
		@yield('candidat-detail')
		@yield('ssg')

		<!-- ============================ Footer Start ================================== -->
		<!-- <footer class="dark-footer skin-dark-footer">
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
		</footer> -->
		<footer style="background: linear-gradient(rgba(9, 32, 50, 0.868), rgba(9, 32, 50, 0.868)), url({{ asset('/assets/img/entreprise.jpg')}})">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 mx-auto">
							<a href="#" class="navbar-brand">StageBenin</a>
							<p>Contrairement à certaines plateformes de recherche de stage, StageBenin se focalise uniquement sur le bien-être
								des étudiants. Il aide les étudiants à se trouver un lieu de stage afin d'améliorer leur connaissances et leur
								garanti un lieu de stage. Avec cette plateforme, n'importe qui peut demander un stage à conditions d'être étudiant.
								StageBenin accueil toute entreprise à la recherche de stagiaires et leur offre l'opportunité de poster leurs offres de stages
								et de recruter les meilleurs ou les étudiants qui correspondent à leur profil.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<p class="mb-0">Copyright@2022. All rights reserved</p>
				</div>
			</div>
		</footer>
		<!-- ============================ Footer End ================================== -->

		<!-- Log In Modal -->
		<!-- <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
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
		</div> -->
		<!-- End Modal -->

		<!-- Sign Up Modal -->
		<!-- <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
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
		</div> -->
		<!-- End Modal -->
		<!-- Modal -->
		<div class="modal fade" id="modalEtudiant" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
			<div class="modal-dialog modal-xl modal-dialog-centered login-pop-form" role="document">
				<div class="modal-content" id="registermodal">
					<div class="modal-header">
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true"><i class="ti-close"></i></span>
						</button>
					</div>
					<div class="modal-body">
						<h4 class="modal-header-title"><span class="stage2">Stage</span><span class="stage">Benin</span></h4>
						<div class="login-form">
							<form>

								<div class="form-group">
									<label>Email</label>
									<div class="input-with-gray">
										<input type="text" name="email" class="form-control" placeholder="Votre Email">
										<i class="ti-email theme-cl"></i>
									</div>
								</div>

								<div class="form-group">
									<label>Votre mot de passe</label>
									<div class="input-with-gray">
										<input type="password" class="form-control" placeholder="*******">
										<i class="ti-unlock theme-cl"></i>
									</div>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-md full-width pop-login">Se connecter</button>
								</div>

							</form>
						</div>
					</div>
					<div class="modal-footer">
						<div class="mf-link"><i class="ti-user"></i>Vous n'avez pas de compte?<a href="javascript:void(0)" data-toggle="modal" data-target="#signupEtud" data-bs-dismiss="modal"> S'inscrire</a></div>
						<div class="mf-forget"><a href="#"><i class="ti-help"></i>Mot de passe oublié</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="modalEntreprise" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
			<div class="modal-dialog modal-xl modal-dialog-centered login-pop-form" role="document">
				<div class="modal-content" id="registermodal">
					<div class="modal-header">
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true"><i class="ti-close"></i></span>
						</button>
					</div>
					<div class="modal-body">
						<h4 class="modal-header-title"><span class="stage2">Stage</span><span class="stage">Benin</span></h4>
						<div class="login-form">
							<form>

								<div class="form-group">
									<label>Email</label>
									<div class="input-with-gray">
										<input type="text" name="email" class="form-control" placeholder="Votre Email">
										<i class="ti-email theme-cl"></i>
									</div>
								</div>

								<div class="form-group">
									<label>Votre mot de passe</label>
									<div class="input-with-gray">
										<input type="password" class="form-control" placeholder="*******">
										<i class="ti-unlock theme-cl"></i>
									</div>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-md full-width pop-login">Se connecter</button>
								</div>

							</form>
						</div>
					</div>
					<div class="modal-footer">
						<div class="mf-link"><i class="ti-user"></i>Vous n'avez pas de compte?<a href="javascript:void(0)" data-toggle="modal" data-target="#signupEtu" data-bs-dismiss="modal"> S'inscrire</a></div>
						<div class="mf-forget"><a href="#"><i class="ti-help"></i>Mot de passe oublié</a></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Sign Up Modal -->

		<div class="modal fade" id="signupEtu" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
				<div class="modal-content" id="sign-up">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true"><i class="ti-close"></i></span>
						</button>
					</div>
					<div class="modal-body">
						<h4 class="modal-header-title"><span class="stage2">Stage</span><span class="stage">Benin</span></h4>
						<div class="login-form">
							<form>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<label>Nom</label>
											<div class="input-with-gray">
												<input type="text" name="nom" class="form-control" placeholder="Votre nom">
												<i class="ti-user theme-cl"></i>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<label>Numero IFU</label>
											<div class="input-with-gray">
												<input type="text" name="prenom" class="form-control" placeholder="Votre prénom">
												<i class="ti-user theme-cl"></i>
											</div>
										</div>
									</div>



									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<label class="form-label" for="filière">Secteur</label>
											<div class="input-with-gray">
												<select id="sexe" class="select2 form-select input-with-gray">
													<option value="" disabled selected>Sélectionner</option>
													<option value="finance">Finance et Comptabilité (FC)</option>
													<option value="banque">Banque et assurance (BA)</option>
													<option value="commerce">Technique Commerciale et Marketing (TCM)</option>
													<option value="ressources">Gestion des Ressources Humaines et Communication (GRHC)</option>
													<option value="transport">Transport et Logistique (TL)</option>
													<option value="informatique">Informatique de Gestion (IG)</option>
													<option value="réseau">Réseaux Informatique et Maintenance (RIM)</option>
												</select>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<label>Email</label>
											<div class="input-with-gray">
												<input type="text" name="email" class="form-control" placeholder="Votre email">
												<i class="ti-email theme-cl"></i>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<label>Password</label>
											<div class="input-with-gray">
												<input type="password" class="form-control" placeholder="*******">
												<i class="ti-unlock theme-cl"></i>
											</div>
										</div>
									</div>



									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<button type="submit" class="btn btn-primary btn-md full-width pop-login">Login</button>
										</div>
									</div>

							</form>
						</div>
					</div>
					<div class="modal-footer">
						<div class="mf-link"><i class="ti-user"></i>Vous avez déjà un compte?<a href="javascript:void(0)" data-toggle="modal" data-target="#modalEntreprise" data-dismiss="modal"> Se connecter</a></div>
						<div class="mf-forget"><a href="#" data-target="#modalEntreprise"><i class="ti-help"></i>Need Help</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="signupEtud" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
				<div class="modal-content" id="sign-up">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true"><i class="ti-close"></i></span>
						</button>
					</div>
					<div class="modal-body">
						<h4 class="modal-header-title"><span class="stage2">Stage</span><span class="stage">Benin</span></h4>
						<div class="login-form">
							<form>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<label>Nom</label>
											<div class="input-with-gray">
												<input type="text" name="nom" class="form-control" placeholder="Votre nom">
												<i class="ti-user theme-cl"></i>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<label>Prénoms</label>
											<div class="input-with-gray">
												<input type="text" name="prenom" class="form-control" placeholder="Votre prénom">
												<i class="ti-user theme-cl"></i>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<label class="form-label" for="sexe">Sexe</label>
											<div class="input-with-gray">
												<select id="sexe" class="select2 form-select input-with-gray">
													<option value="" disabled selected>Sélectionner</option>
													<option value="Masculin">Masculin</option>
													<option value="Féminin">Féminin</option>
												</select>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<label class="form-label" for="filière">Filières</label>
											<div class="input-with-gray">
												<select id="sexe" class="select2 form-select input-with-gray">
													<option value="" disabled selected>Sélectionner</option>
													<option value="finance">Finance et Comptabilité (FC)</option>
													<option value="banque">Banque et assurance (BA)</option>
													<option value="commerce">Technique Commerciale et Marketing (TCM)</option>
													<option value="ressources">Gestion des Ressources Humaines et Communication (GRHC)</option>
													<option value="transport">Transport et Logistique (TL)</option>
													<option value="informatique">Informatique de Gestion (IG)</option>
													<option value="réseau">Réseaux Informatique et Maintenance (RIM)</option>
												</select>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<label>Email</label>
											<div class="input-with-gray">
												<input type="text" name="email" class="form-control" placeholder="Votre email">
												<i class="ti-email theme-cl"></i>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<label>Password</label>
											<div class="input-with-gray">
												<input type="password" class="form-control" placeholder="*******">
												<i class="ti-unlock theme-cl"></i>
											</div>
										</div>
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label>Carte étudiant</label>
											<div class="input-with-gray">
												<input type="file" class="form-control">
												<i class="ti-user theme-cl"></i>
											</div>
										</div>
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<button type="submit" class="btn btn-primary btn-md full-width pop-login">Login</button>
										</div>
									</div>

							</form>
						</div>
					</div>
					<div class="modal-footer">
						<div class="mf-link"><i class="ti-user"></i>Vous avez déjà un compte?<a href="javascript:void(0)" data-toggle="modal" data-target="#modalEtudiant" data-dismiss="modal"> Se connecter</a></div>
						<div class="mf-forget"><a href="#" data-target="#modalEtudiant"><i class="ti-help"></i>Need Help</a></div>
					</div>
				</div>
			</div>
		</div>
		<!-- ENTREPRISE MODALE -->
		<!-- POSTULATION Modal -->
		
		<!-- End Modal -->

	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->
	<script src="{{asset('assets/custom_js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/custom_js/bootstrap.bundle.js')}}"></script>
	<script src="{{asset('assets/custom_js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/custom_js/app.js')}}"></script>
	<!-- ============================================================== -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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

<!-- Mirrored from themezhub.net/workstock-2/work-stocks/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jun 2021 17:43:13 GMT -->

</html>