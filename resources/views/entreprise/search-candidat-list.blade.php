@extends('layouts.app')
@section('search-candidat-list')

<!-- ============================ Search Form Start================================== -->
<!-- <section class="light-search banncer-cent bg-theme" data-overlay="0">
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
</section> -->
<section>
	<div class="container">
		<div class="row row-stage">
			<form action="{{url('/candidat/search-candidat')}}" method="POST">
				@csrf
				<div class="col-12 text-center form-group pt-3">
					<input type="text" name="motcle" size="30" placeholder="Mots-clé" class="text" />
					<select name="localite" class="text">
						<option value="null" selected disable hidden>Region</option>
						<option value="Calavi">Abomey-Calavi</option>
						<option value="Cotonou">Cotonou</option>
						<option value="Porto-Novo">Porto-Novo</option>
						<option value="Parakou">Parakou</option>
						<option value="Allada">Allada</option>
						<option value="Dassa">Dassa</option>
					</select>
					<select name="categorie" class="text">
						<option value="null" selected disable hidden>Filière</option>
						<option value="Finance et Comptabilité (FC)">Finance et Comptabilité (FC)</option>
						<option value="Banque et assurance (BA)">Banque et assurance (BA)</option>
						<option value="Technique Commerciale et Marketing (TCM)">Technique Commerciale et Marketing (TCM)</option>
						<option value="Gestion des Ressources Humaines et Communication (GRHC)">Gestion des Ressources Humaines et Communication (GRHC)</option>
						<option value="Transport et Logistique (TL)">Transport et Logistique (TL)</option>
						<option value="Informatique de Gestion (IG)">Informatique de Gestion (IG)</option>

					</select>

					<button type="submit" class="btn2 my-3">Rechercher un candidat</button>
				</div>
			</form>

		</div>
	</div>

</section>
<!-- ============================ Search Form End ================================== -->

<!-- ============================ Breadcrums Start================================== -->
<!-- <div class="container-fluid breadcrumbs breadcrumbs-light">
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
</div> -->
<div class="clearfix"></div>
<!-- ============================ Breadcrums End ================================== -->

<!-- ============================ Main Wrap Start ================================== -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4">

				<div class="d-block d-none d-sm-block d-md-none mb-3">
					<a href="javascript:void(0)" onclick="openNav()" class="btn btn-info full-width btn-md"><i class="ti-filter mrg-r-5"></i>Filter Search</a>
				</div>

				<div class="sidebar-container d-sm-none d-md-block d-none">

					<!-- Category -->
					<div class="sidebar-widget">
						<div>
							<h5 class="mb-2">Catégories</h5>
							<div class="side-imbo">
								<select class="text1">
									<option selected>Domaines</option>
									<option value="Données">Analysse de données</option>
									<option value="Veb">Développement web</option>
									<option value="Reseau">Administration de base de données</option>
									<option value="Informatique">Sécurité de système d'information</option>
									<option value="Medecine">Médecine</option>
									<option value="Pharmacie">Auxilliaire de pharmacie</option>
									<option value="Graphisme">Graphisme</option>
								</select>
							</div>
						</div>
					</div>

					<!-- Experince -->
					<div class="sidebar-widget">
						<div>
							<h5 class="mb-2">Skills</h5>
							<div class="side-imbo">
								<select class="text1">
									<option selected>Domaines</option>
									<option value="Données">Analysse de données</option>
									<option value="Veb">Développement web</option>
									<option value="Reseau">Administration de base de données</option>
									<option value="Informatique">Sécurité de système d'information</option>
									<option value="Medecine">Médecine</option>
									<option value="Pharmacie">Auxilliaire de pharmacie</option>
									<option value="Graphisme">Graphisme</option>
								</select>
							</div>
						</div>
					</div>

					<!-- Experince -->
					<div class="sidebar-widget">
						<div>
							<h5 class="mb-2">Experince</h5>
							<div class="side-imbo">
								<select class="text1">
									<option selected>Domaines</option>
									<option value="Données">Analysse de données</option>
									<option value="Veb">Développement web</option>
									<option value="Reseau">Administration de base de données</option>
									<option value="Informatique">Sécurité de système d'information</option>
									<option value="Medecine">Médecine</option>
									<option value="Pharmacie">Auxilliaire de pharmacie</option>
									<option value="Graphisme">Graphisme</option>
								</select>
							</div>
						</div>
					</div>

					<!-- Job Type -->
					<div class="sidebar-widget">
						<div>
							<h5 class="mb-2">Job Type</h5>
							<div class="side-imbo">
								<select class="text1">
									<option selected>Domaines</option>
									<option value="Données">Analysse de données</option>
									<option value="Veb">Développement web</option>
									<option value="Reseau">Administration de base de données</option>
									<option value="Informatique">Sécurité de système d'information</option>
									<option value="Medecine">Médecine</option>
									<option value="Pharmacie">Auxilliaire de pharmacie</option>
									<option value="Graphisme">Graphisme</option>
								</select>
							</div>
						</div>
					</div>

					<input type="submit" class="btn btn-info btn-md full-width" value="Envoyer">
				</div>
			</div>

			<div class="col-xl-9 col-lg-8">

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
								<p>{{$user->filiere_secteur}}</p>
								<!-- <div class="rating-review">
									<i class="ti-star filled"></i>
									<i class="ti-star filled"></i>
									<i class="ti-star filled"></i>
									<i class="ti-star filled"></i>
									<i class="ti-star"></i>
								</div> -->
								<ul class="vc-info-list">
									<li class="list-inline-item"><a href="#">
											<h5></h5> <i class="ti-location-pin"></i>{{$user->adresse}}
										</a></li>
									<!-- <li class="list-inline-item"><a href="#"><h5>Rate</h5> <i class="ti-credit-card"></i>$18.00 hour</a></li>
									<li class="list-inline-item"><a href="#"><h5>Job Success</h5> 95%</a></li> -->
								</ul>

							</div>
							<div class="vc-right">
								<a class="btn btn-primary" href="{{url('candidat/candidat-detail/'.$user->id)}}">Consulter le Profile<i class="ti-arrow-right ml-1"></i></a>
							</div>

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

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
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