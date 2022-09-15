@extends('layouts.app')
@section('ssg')
<!-- ============================ Search Form Start==================================
 -->
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
<section class="light-search banncer-cent bg-theme" data-overlay="0">
	<div class="container">

		<!-- <form class="search-big-form no-border search-shadow">
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
		</form> -->
		<form action="{{url('/candidat/search-stage')}}" method="POST">
			@csrf
			<div class="col-12 text-center form-group pt-5">
				<input type="text" name="motcle" size="30" placeholder="Mots-clé/Compétences" />
				<select name="localite">
					<option value="null" selected disable hidden>Region</option>
					<option value="Calavi">Abomey-Calavi</option>
					<option value="Cotonou">Cotonou</option>
					<option value="Porto-Novo">Porto-Novo</option>
					<option value="Parakou">Parakou</option>
					<option value="Allada">Allada</option>
					<option value="Dassa">Dassa</option>
				</select>
				<select name="categorie">
					<option value="null" selected disable hidden>Domaines</option>
					<option value="1">Informatique</option>
					<option value="2">Transport</option>
					<option value="Reseau">Administration de base de données</option>
					<option value="Informatique">Sécurité de système d'information</option>
					<option value="Medecine">Médecine</option>
					<option value="Pharmacie">Auxilliaire de pharmacie</option>
					<option value="Graphisme">Graphisme</option>
				</select>

				<button type="submit" class="btn2 my-3">Rechercher un stage</button>
			</div>
		</form>

	</div>
</section>
<!-- ============================ Search Form End ================================== -->
<!-- ============================ Breadcrums Start================================== -->
<div class="container-fluid breadcrumbs breadcrumbs-light">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<a href="{{url('/')}}">
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
</div>
<div class="clearfix"></div>
<!-- ============================ Breadcrums End ================================== -->

<section>
	<div class="container">


		<div class="row">



			<div class="col-xl-12 col-lg-12">

				<div class="row">
					<!-- layout Wrapper -->
					<div class="col-md-12 mb-3">
						<div class="layout-switcher-wrap">
							<div class="layout-switcher-left">{{$nbrPosts}} Result Found</div>
							<div class="layout-switcher">
								<ul>
									<li class="active"><a href="search-with-sidebar-2.html"><i class="ti-layout-grid3"></i></a></li>
									<li><a href="{{route('ssl')}}"><i class="ti-view-list"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="row">

					<!-- Single Job -->
					@foreach($posts as $post)

					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="classic-joblist ultimate small" style="background-color: #5e87eb;">

							<div class="cl-job-employer">
								<div class="cljb-emp-thumg">
									<a href="job-detail.html"><img src="{{asset('uploads/images/'.$post->logo_path)}}" alt="" /></a>
								</div>
								<span class="cljb-emp-detail">
									<h4><a href="{{url('/entreprise/entreprise-detail/'.$post->id)}}" style="color:blue">{!!Str::limit($post->name,'10','...')!!}</a></h4>
									<!-- <span class="cljb-date">Posté le {{$post->created_at}}</span> -->
								</span>
							</div>

							<h4 class="job-title"><a href="{{url('/post-show/'.$post->id)}}">{!!Str::limit($post->title,'20','...')!!}</a></h4>
							<h4 class="job-title">{{$post->duree}} mois</h4>

							<div class="cl-job-intro">
								<span class="cl-jb-loaction"><i class="ti-location-pin"></i>{{$post->adresse_stage}}</span>

								{{-- <span class="cl-jb-type full-time">Full Time</span> --}}
							</div>

						</div>
					</div>
					@endforeach





				</div>

				<!-- Pagination -->
				<!-- <div class="row">
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
				</div> -->
				<!-- Pagination -->

			</div>

		</div>

	</div>
</section>
<div class="clearfix"></div>

<!-- Filter Job Option -->
<div id="filter-sidebar" class="filter-sidebar">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="ti-close"></i></a>
	<div class="show-hide-sidebar">

		<!-- Keyword -->
		<div class="sidebar-widget">
			<div class="form-group">
				<h5 class="mb-3">Keyword</h5>
				<div class="input-with-icon">
					<select id="category-side" class="js-states form-control">
						<option selected>Région</option>
						<option value="Calavi">Abomey-Calavi</option>
						<option value="Cotonou">Cotonou</option>
						<option value="Porto-Novo">Porto-Novo</option>
						<option value="Parakou">Parakou</option>
						<option value="Allada">Allada</option>
						<option value="Dassa">Dassa</option>
					</select>
					<i class="ti-layers"></i>
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
						<option selected disable>Categorie</option>
						<option value="1">Informatique,Telecom,Internet</option>
						<option value="2">Finance</option>
						<option value="3">Banking</option>
						<option value="4">SEO/SMO</option>
						<option value="5">Designing</option>
						<option value="6">Management</option>
					</select>
					<i class="ti-layers"></i>
				</div>
			</div>
		</div>

		<!-- Experince -->
		<div class="sidebar-widget">
			<div class="form-group">
				<h5 class="mb-2">Experience</h5>
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
</div>
<!-- ============================================================== -->
<!-- This page plugins -->
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