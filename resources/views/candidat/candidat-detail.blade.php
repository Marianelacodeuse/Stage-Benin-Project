@extends('layouts.app')
@section('candidat-detail')
<!-- Top header  -->
<!-- ============================================================== -->

<!-- ======================= Start Banner ===================== -->
<section class="page-title-banner">
	<div class="container">
		<div class="row m-0 align-items-end detail-swap">
			<div class="tr-list-wrap">
				<div class="tr-list-detail">
					<div class="tr-list-thumb">
						<img src="{{asset('uploads/images/' . $user->logo_path)}}" class="img-responsive" alt="" />
					</div>
					<div class="tr-list-info">
						<h4 class="mb-1">{{$user->name}}</h4>
						<p class="mb-1 text-warning">{{$user->filiere_secteur}}</p>
						<p class="mb-1"><i class="ti-location-pin mr-2"></i>{{$user->adresse}}</p>
					</div>
				</div>
				<div class="listing-detail_right">
					<div class="listing-detail-item">
						<!-- <a href="#" class="btn btn-list full-width mb-2 text-warning"><i class="ti-check mr-2"></i> Shortlist Now</a><br> -->
						<!-- <a href="#" class="btn btn-list full-width color--linkedin"><i class="ti-email mr-2"></i> Send A Message</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ======================= End Banner ===================== -->

<!-- ============== Job Detail ====================== -->
<section class="tr-single-detail gray-bg">
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-sm-12">

				<!-- Candidate Overview -->
				<div class="tr-single-box">
					<div class="tr-single-header">
						<h4><i class="ti-info"></i>Aperçu de l'étudiant</h4>
					</div>
					<div class="tr-single-body">
						<p>{!!$user->description!!}</p>
					</div>
				</div>

				<!-- Extra Skill& Knowledge -->



				<!-- Education & Qualification -->


				<!-- Experience -->



			</div>

			<!-- Sidebar Start -->
			<div class="col-md-4 col-sm-12">

				<!-- <div class="offer-btn-wrap mb-4">
					<a href="#" class="btn btn-info btn-md full-width"><i class="mr-2 ti-bookmark"></i>Dowanload Resume</a>
				</div> -->

				<!-- Candidate Detail -->
				<div class="tr-single-box">
					<div class="tr-single-header">
						<h4><i class="ti-direction"></i> Détail de l'étudiant</h4>
					</div>

					<div class="tr-single-body">
						<ul class="extra-service">
							<!-- <li>
								<div class="icon-box-icon-block">
									<div class="icon-box-round">
										<i class="ti-money"></i>
									</div>
									<div class="icon-box-text">
										<strong class="d-block">Expected Sallery</strong>
										$80k - $270k
									</div>
								</div>
							</li> -->

							<!-- <li>
								<div class="icon-box-icon-block">
									<div class="icon-box-round">
										<i class="ti-time"></i>
									</div>
									<div class="icon-box-text">
										<strong class="d-block">Disponible</strong>
										{{$user->disponible}}
									</div>
								</div>
							</li> -->

							<li>
								<div class="icon-box-icon-block">
									<div class="icon-box-round">
										<i class="lni-users"></i>
									</div>
									<div class="icon-box-text">
										<strong class="d-block">Genre</strong>
										{{$user->genre}}
									</div>
								</div>
							</li>

							<li>
								<div class="icon-box-icon-block">
									<div class="icon-box-round">
										<i class="lni-certificate"></i>
									</div>
									<div class="icon-box-text">
										<strong class="d-block">Filière</strong>
										{{$user->filiere_secteur}}
									</div>
								</div>
							</li>

							<li>
								<div class="icon-box-icon-block">
									<div class="icon-box-round">
										<i class="lni-graduation"></i>
									</div>
									<div class="icon-box-text">
										<strong class="d-block">Niveau</strong>
										{{$user->niveau_taille}}
									</div>
								</div>
							</li>

						</ul>
					</div>

				</div>

				<!-- Candidate Address -->
				<div class="tr-single-box">
					<div class="tr-single-header">
						<h4><i class="ti-direction"></i> Adresse de l'étudiant</h4>
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
											{{$user->adresse}}
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
											{{$user->telephone}}
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
											{{$user->email}}
										</div>
									</a>
								</div>
							</li>

							<!-- <li>
								<div class="icon-box-icon-block">
									<a href="#">
										<div class="icon-box-round">
											<i class="lni-world"></i>
										</div>
										<div class="icon-box-text">
											www.myfinding.com
										</div>
									</a>
								</div>
							</li> -->

						</ul>
					</div>

				</div>

				<!-- Social Links -->
				<div class="tr-single-box">
					<div class="tr-single-header">
						<h4><i class="ti-share"></i> Comptes sociaux</h4>
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

							<!-- <li>
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
							</li> -->

							<!-- <li>
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
							</li> -->

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

							<!-- <li>
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
							</li> -->

							<!-- <li>
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
							</li> -->

						</ul>
					</div>

				</div>

			</div>
			<!-- /col-md-4 -->
		</div>
	</div>
</section>
<!-- ============== Job Detail ====================== -->
@endsection