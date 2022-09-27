@extends('layouts.app')
@section('offre-detail')
<!-- ======================= Start Banner ===================== -->
<section class="small-page-title-banner">
	<div class="container">
		<div class="row">
			<div class="tr-list-center">
				<h2>{{$post->title}}</h2>
			</div>
		</div>
	</div>
</section>
<!-- ======================= End Banner ===================== -->

<!-- ============== Job Detail ====================== -->
<section class="tr-single-detail gray-bg">
	<div class="container">
		<div class="row">

			<div class="col-lg-8 col-md-12 col-sm-12">
				@if(Session::has('message'))
				<div class="alert alert-success">{{Session::get('message')}}</div>
				@endif
				<!-- Default Style -->
				<div class="single-job-head head-light">
					<div class="single-job-thumb">
						<img src="{{asset('uploads/images/'.$post->user->logo_path)}}" alt="">
					</div>
					<div class="single-job-info">
						<h4 class="single-job-title">{{$post->title}}<span class="job-type full-time">{{$post->duree}} mois</span></h4>
						<span class="sj-location"><i class="ti-location-pin"></i>{{$post->user->adresse}}</span>
						<ul class="tags-jobs">
							<!-- <li><i class="ti-file"></i> Applications 1</li> -->
							<li><i class="ti-calendar"></i> {{$post->created_at->format('D M Y')}}</li>
							<!-- <li><i class="fa fa-eye"></i> Views 7249</li> -->
						</ul>
					</div>
				</div>

				<!-- Job Overview -->
				<div class="tr-single-box">
					<div class="tr-single-header">
						<h4><i class="ti-info"></i>Job Overview</h4>
					</div>
					<div class="tr-single-body">
						<p>{!!$post->description!!}</p>
					</div>
				</div>

				<!-- Job Qualifications -->
				<!-- <div class="tr-single-box">
					<div class="tr-single-header">
						<h4><i class="ti-book"></i>Skills and Qualifications</h4>
					</div>
					<div class="tr-single-body">
						<ul class="jb-detail-list">
							<li>Hand On experience with Wordpress</li>
							<li>Good understanding of front-end technologies, including HTML5, CSS3, JavaScript, jQuery</li>
							<li>Experience building user interfaces for websites and/or web applications</li>
							<li>Experience designing and developing responsive design websites</li>
							<li>Comfortable working with debugging tools like Firebug, Chrome inspector, etc.</li>
							<li>Ability to understand CSS changes and their ramifications to ensure consistent style across platforms and browsers</li>
							<li>Ability to convert comprehensive layout and wireframes into working HTML pages</li>
							<li>Knowledge of how to interact with RESTful APIs and formats (JSON, XML)</li>
							<li>Proficient understanding of code versioning tool GIT</li>
							<li>Strong understanding of PHP back-end development</li>
						</ul>
					</div>
				</div> -->


				<!-- Job Education -->
				<!-- <div class="tr-single-box">
					<div class="tr-single-header">
						<h4><i class="ti-cup"></i>Education</h4>
					</div>
					<div class="tr-single-body">
						<ul class="jb-detail-list">
							<li>Higher(10th Pass) (Preferred)</li>
							<li>Higher Secondary(12th Pass) (Preferred)</li>
							<li>Any Graduattion Degree(13th Pass) (Preferred)</li>
						</ul>
					</div>
				</div> -->
				@if(Auth::check() && Auth::user()->role == "candidat")


				<button type="submit" class="btn btn-info full-width mb-2" data-toggle="modal" data-target="#postulation">
					Postuler à ce stage
				</button>
				@else


				<form action="{{url('/post/posting/'.$post->id)}}" method="post">
					@csrf

					@if(Session::has('message'))
					<div class="alert alert-success">{{Session::get('message')}}</div>
					@endif


					<input type="submit" class="btn btn-info full-width mb-2" value="Postuler à ce stage">
				</form>
				@endauth
			</div>

			<!-- Sidebar Start -->
			<div class="col-lg-4 col-md-12 col-sm-12">

				<!-- Apply Button Wrap -->
				<div class="apply-wrap-buttons">

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">

							<!-- <form action="{{url('/post/posting/'.$post->id)}}" method="post">
								@csrf

								@if(Session::has('message'))
								<div class="alert alert-success">{{Session::get('message')}}</div>
								@endif

								
								<input type="submit" class="btn btn-info full-width mb-2" value="Postuler à ce stage">
							</form> -->
							@if(Auth::check() && Auth::user()->role == "candidat")


							<button type="button" class="btn btn-info full-width mb-2" data-toggle="modal" data-target="#postulation">
								Postuler à cet offre
							</button>
							@else


							<form action="{{url('/post/posting/'.$post->id)}}" method="post">
								@csrf

								@if(Session::has('message'))
								<div class="alert alert-success">{{Session::get('message')}}</div>
								@endif


								<input type="submit" class="btn btn-info full-width mb-2" value="Postuler à cet offre de stage">
							</form>
							@endauth
							
						</div>
					</div>

					<!-- <div class="row">

						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="input-group">
								<a href="#" class="btn btn-color save-job"><i class="ti-heart"></i>Save Job</a>
							</div>
						</div>
					</div> -->

				</div>

				<!-- Job Overview -->
				<div class="tr-single-box">
					<div class="tr-single-header">
						<h4><i class="ti-direction"></i> Job Overview</h4>
					</div>

					<div class="tr-single-body">
						<ul class="extra-service">
							<li>
								<div class="icon-box-icon-block">
									<div class="icon-box-round">
										<i class="ti-money"></i>
									</div>
									<div class="icon-box-text">
										<strong class="d-block">Gratification</strong>
										{{$post->gratification}}
									</div>
								</div>
							</li>

							<li>
								<div class="icon-box-icon-block">
									<div class="icon-box-round">
										<i class="lni-certificate"></i>
									</div>
									<div class="icon-box-text">
										<strong class="d-block">Niveau Recquis</strong>
										{{$post->niveau_recqui}}
									</div>
								</div>
							</li>

							<li>
								<div class="icon-box-icon-block">
									<div class="icon-box-round">
										<i class="lni-users"></i>
									</div>
									<div class="icon-box-text">
										<strong class="d-block">Nombre de place</strong>
										{{$post->nbr_place}}
									</div>
								</div>
							</li>

							<li>
								<div class="icon-box-icon-block">
									<div class="icon-box-round">
										<i class="ti-home"></i>
									</div>
									<div class="icon-box-text">
										<strong class="d-block">Categorie</strong>
										{{$post->user->filiere_secteur}}
									</div>
								</div>

							</li>

							<li>
								<div class="icon-box-icon-block">
									<div class="icon-box-round">
										<i class="ti-time"></i>
									</div>
									<div class="icon-box-text">
										<strong class="d-block">Durée du stage</strong>
										{{$post->duree}} mois
									</div>
								</div>
							</li>

						</ul>
					</div>

				</div>


				<!-- Company Address -->
				<div class="tr-single-box">
					<div class="tr-single-header">
						<h4><i class="ti-direction"></i> Company Address</h4>
					</div>

					<div class="tr-single-body">
						<ul class="extra-service">
							<li>
								<div class="icon-box-icon-block">
									<a href="#">
										<div class="icon-box-round">
											<i class="lni-map-marker"></i>
										</div>
										<div class="icon-box-text">
											{{$post->user->adresse}}
										</div>
									</a>
								</div>
							</li>

							<li>
								<div class="icon-box-icon-block">
									<a href="#">
										<div class="icon-box-round">
											<i class="lni-phone-handset"></i>
										</div>
										<div class="icon-box-text">
											{{$post->user->telephone}}
										</div>
									</a>
								</div>
							</li>

							<li>
								<div class="icon-box-icon-block">
									<a href="#">
										<div class="icon-box-round">
											<i class="lni-envelope"></i>
										</div>
										<div class="icon-box-text">
											{{$post->user->email}}
										</div>
									</a>
								</div>
							</li>

							<li>
								<div class="icon-box-icon-block">
									<a href="#">
										<div class="icon-box-round">
											<i class="lni-world"></i>
										</div>
										<div class="icon-box-text">
											{{$post->user->site_url}}
										</div>
									</a>
								</div>
							</li>

						</ul>
					</div>

				</div>

				<!-- Share this -->
				<!-- <div class="tr-single-box">
					<div class="tr-single-header">
						<h4><i class="ti-share"></i> Share this Job</h4>
					</div>

					<div class="tr-single-body">
						<ul class="extra-service half">
							<li>
								<div class="icon-box-icon-block">
									<a href="#">
										<div class="icon-box-round">
											<i class="lni-facebook"></i>
										</div>
										<div class="icon-box-text">
											Facebook
										</div>
									</a>
								</div>
							</li>

							<li>
								<div class="icon-box-icon-block">
									<a href="#">
										<div class="icon-box-round">
											<i class="lni-google-plus"></i>
										</div>
										<div class="icon-box-text">
											Google plus
										</div>
									</a>
								</div>
							</li>

							<li>
								<div class="icon-box-icon-block">
									<a href="#">
										<div class="icon-box-round">
											<i class="lni-twitter"></i>
										</div>
										<div class="icon-box-text">
											Twitter
										</div>
									</a>
								</div>
							</li>

							<li>
								<div class="icon-box-icon-block">
									<a href="#">
										<div class="icon-box-round">
											<i class="lni-linkedin"></i>
										</div>
										<div class="icon-box-text">
											LinkedIn
										</div>
									</a>
								</div>
							</li>

							<li>
								<div class="icon-box-icon-block">
									<a href="#">
										<div class="icon-box-round">
											<i class="lni-instagram"></i>
										</div>
										<div class="icon-box-text">
											Instagram
										</div>
									</a>
								</div>
							</li>

							<li>
								<div class="icon-box-icon-block">
									<a href="#">
										<div class="icon-box-round">
											<i class="fa fa-pinterest"></i>
										</div>
										<div class="icon-box-text">
											Pinterest
										</div>
									</a>
								</div>
							</li>

						</ul>
					</div>

				</div> -->

			</div>
			<!-- /col-md-4 -->
		</div>
	</div>
	@auth
	<div class="modal fade" id="postulation" tabindex="-1" role="dialog" aria-labelledby="postulation" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
			<div class="modal-content" id="postulation">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"><i class="ti-close"></i></span>
					</button>
				</div>
				<div class="modal-body">
					<h4 class="modal-header-title"><span class="stage2">Stage</span><span class="stage">Benin</span></h4>
					<div class="login-form">
						<form action="{{url('/post/posting/'.$post->id)}}" method="post">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="form-group">
										<label>Nom</label>
										<div class="input-with-gray">
											<input type="text" name="name" class="form-control" placeholder="{{auth()->user()->name}}" disabled>
											<i class="ti-user theme-cl"></i>
										</div>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="form-group">
										<label>Email</label>
										<div class="input-with-gray">
											<input type="text" name="email" class="form-control" placeholder="{{auth()->user()->email}}" disabled>
											<i class="ti-email theme-cl"></i>
										</div>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="form-group">
										<label class="form-label" for="sexe">Filière</label>
										<div class="input-with-gray">
											<input type="text" name="filiere_secteur" class="form-control" placeholder="{{auth()->user()->filiere_secteur}}" disabled>
											<i class="ti-user theme-cl"></i>
										</div>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="form-group">
										<label class="form-label" for="filière">Adresse</label>
										<div class="input-with-gray">
											<input type="text" name="adresse" class="form-control" placeholder="{{auth()->user()->adresse}}" disabled>
											<i class="ti-user theme-cl"></i>
										</div>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="form-group">
										<!-- <button type="submit" class="btn btn-primary btn-md full-width pop-login">Mettre à jour mes informations</button> -->
										<a href="{{route('candidat-dashboard')}}" class="mt-5 btn btn-info btn-md full-width" target="_blank" rel="noopener noreferrer">Mettre à jour mes informations</a>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="form-group">
										<!-- <button type="submit" class="btn btn-primary btn-md full-width pop-login">Voir mon CV</button> -->
										<a href="{{url('candidat/candidat-cv-display')}}" class="mt-5 btn btn-info btn-md full-width" target="_blank" rel="noopener noreferrer">Revoir mon CV</a>
										
									</div>
								</div>

								<!-- <div class="col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label>Carte étudiant</label>
											<div class="input-with-gray">
												<input type="file" class="form-control">
												<i class="ti-user theme-cl"></i>
											</div>
										</div>
									</div> -->

								<div class="col-lg-12 col-md-12 col-sm-12">



									@csrf

									@if(Session::has('message'))
									<div class="alert alert-success">{{Session::get('message')}}</div>
									@endif

									<!-- <a href="javascript:void(0)" data-toggle="modal" data-target="#apply" class="btn btn-info full-width mb-2"> Apply This Job</a> -->
									<input type="submit" class="btn btn-info full-width mb-2" value="Postuler à ce stage">

								</div>

						</form>
					</div>
				</div>
				<!-- <div class="modal-footer">
						<div class="mf-link"><i class="ti-user"></i>Vous avez déjà un compte?<a href="javascript:void(0)" data-toggle="modal" data-target="#modalEtudiant" data-dismiss="modal"> Se connecter</a></div>
						<div class="mf-forget"><a href="#" data-target="#modalEtudiant"><i class="ti-help"></i>Need Help</a></div>
					</div> -->
			</div>
		</div>
	</div>
	@endauth
</section>
<!-- ============== Job Detail ====================== -->
@endsection