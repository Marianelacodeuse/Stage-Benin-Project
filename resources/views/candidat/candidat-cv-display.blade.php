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
                        @foreach($users as $user)
						<!-- <iframe src="{{asset('uploads/pdf/Attestation.pdf')}}" height="100%" width="100%" frameborder="0"></iframe> -->
						<!-- <iframe src="{{asset('uploads/pdf/Attestation.pdf')}}" height="400" width="400" frameborder="0"></iframe> -->
						<embed src="{{asset('uploads/pdf/'.$user->cv_path)}}"height="100%" width="100%" type="">
                        @endforeach
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