@extends('layouts.app')



@section('search-entreprise-grid')


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
		<form action="{{url('/candidat/search-entreprise')}}" method="POST">
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
					<option value="null" selected disable hidden>Secteur</option>
					<option value="Informatique">Informatique </option>
					<option value="Transport">Transport & Logistique</option>
					<option value="Informatique">Devellopement web</option>
					<option value="Informatique">Réseaux</option>
					<option value="Marketing">Marketing</option>
					<option value="Banque">Assurance </option>
					<option value="Graphisme">Graphisme</option>
				</select>

				<button type="submit" class="btn2 my-3">Rechercher une entreprise</button>
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
					Search Employers In Grid
				</a>
			</div>
		</div>
	</div>
</div> -->
<div class="clearfix"></div>
<!-- ============================ Breadcrums End ================================== -->

<!-- ============================ All Employers ================================== -->
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
									<li class="active"><a href="{{route('seg')}}"><i class="ti-layout-grid3"></i></a></li>
									<li><a href="{{route('sel')}}"><i class="ti-view-list"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<!-- Row -->
				<div class="row">

					@foreach($users as $user)
					<!-- Single Employer -->
					<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
						<div class="employer-wrap small">

							<div class="employer-cover-image" style="background-image: url(assets/img/des-2.jpg)">
								<div class="employer-thumb">
									<a href="#"><img alt="" src="{{asset('uploads/images/'.$user->logo_path)}}" class="avatar avatar-120 photo"></a>
								</div>
							</div>
							<div class="employer-detail">
								<div class="employer-detail-inner">
									<h4 class="employer-title"><a class="theme-cl" href="{{url('entreprise/entreprise-detail/'.$user->id)}}">{{$user->name}}</a></h4>
									<div class="employer-locations"><i class="ti-location-pin text-danger"></i><a href="#">{{$user->adresse}}</a></div>
									<!-- <div class="employer-rating">
										<i class="ti-star filled"></i>
										<i class="ti-star filled"></i>
										<i class="ti-star filled"></i>
										<i class="ti-star filled"></i>
										<i class="ti-star"></i>
									</div> -->
									<a class="total-vacancy text-success" href="{{url('entreprise/entreprise-detail/'.$user->id)}}">Voir les details</a>
								</div>
							</div>

						</div>
					</div>
					@endforeach
				</div>

				<!-- Pagination -->
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<ul class="pagination mt-0">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span class="ti-arrow-left"></span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item active"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">...</a></li>
							<li class="page-item"><a class="page-link" href="#">18</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span class="ti-arrow-right"></span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- Pagination -->

			</div>
		</div>

	</div>
</section>


@endsection