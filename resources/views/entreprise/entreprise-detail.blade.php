@extends('layouts.app')
@section('candidat-detail')
<!-- ======================= Start Banner ===================== -->
<section class="page-title-banner" style="background-image:url(assets/img/des-6.jpg);">
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
						<a href="#" class="btn btn-list full-width color--linkedin"><i class="ti-email mr-2"></i> Send A Message</a>
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

				<!-- Job Overview -->
				<div class="tr-single-box">
					<div class="tr-single-header">
						<h4><i class="ti-info"></i>Company Overview</h4>
					</div>
					<div class="tr-single-body">
						<p>{!!$user->description!!}</p>

					</div>
				</div>

				<!-- Job Qualifications -->



				<!-- Job Education -->
				<div class="tr-single-box">
					<div class="tr-single-header">
						<h4><i class="ti-cup"></i>Stage Recent</h4>
					</div>
					<div class="tr-single-body">
						<div class="owl-carousel" id="rl-list">
							@forelse($posts as $post)
							<!-- Single Job -->
							<div class="item">
								<div class="job-grid style-1">
									<div class="job-grid-wrap">
										<span class="job-type j-part-time">Part Time</span>
										<div class="job-grid-thumb">
											<a href="{{url('/post-show/'.$post->id)}}"><img src="{{asset('uploads/images/'.$post->user->logo_path)}}" class="img-fluid mx-auto" alt="" /></a>
										</div>
										<h4 class="job-title"><a href="{{url('/post-show/'.$post->id)}}">{{$post->title}}</a></h4>
										<hr>
										<div class="job-grid-detail">
											<h4 class="jbc-name"><a href="{{url('/post-show/'.$post->id)}}">{{$post->user->name}}</a></h4>
											<p><i class="ti-location-pin"></i>{{$post->category->title}} </p>
										</div>
										<div class="job-grid-footer">

											<a href="{{url('/post-show/'.$post->id)}}" class="btn btn-outline-info">Apply</a>
										</div>

									</div>
								</div>
							</div>
							@empty
							<div class="alert alert-info ">Any Posts Yet</div>
							@endforelse


						</div>
					</div>
				</div>

				<form action="{{url('/demande/demande-stage/'.$user->id)}}" method="post">
					@csrf

					@if(Session::has('message'))
					<div class="alert alert-success">{{Session::get('message')}}</div>
					@endif

					<!-- <a href="javascript:void(0)" data-toggle="modal" data-target="#apply" class="btn btn-info full-width mb-2"> Apply This Job</a> -->
					<input type="submit" class="btn btn-info full-width mb-2" value="Faire une demande de Stage">
				</form>
			</div>

			<!-- Sidebar Start -->
			<div class="col-md-4 col-sm-12">

				<div class="offer-btn-wrap mb-4">
					<a href="#" class="btn btn-info btn-md full-width"><i class="mr-2 ti-bell"></i>Demander un stage</a>
				</div>

				<!-- Company Overview -->
				<div class="tr-single-box">
					<div class="tr-single-header">
						<h4><i class="ti-direction"></i> Company Overview</h4>
					</div>

					<div class="tr-single-body">
						<ul class="extra-service">
							<li>
								<div class="icon-box-icon-block">
									<div class="icon-box-round">
										<i class="lni-users"></i>
									</div>
									<div class="icon-box-text">
										<strong class="d-block">Total Employee</strong>
										{{$user->niveau_taille}}
									</div>
								</div>
							</li>

										{{-- <li>
											<div class="icon-box-icon-block">
												<div class="icon-box-round">
													<i class="fa fa-leaf"></i>
												</div>
												<div class="icon-box-text">
													<strong class="d-block">Branches</strong>
													102+
												</div>
											</div>
										</li> --}}

							<li>
								<div class="icon-box-icon-block">
									<div class="icon-box-round">
										<i class="ti-home"></i>
									</div>
									<div class="icon-box-text">
										<strong class="d-block">Secteur</strong>
										{{$user->filiere_secteur}}
									</div>
								</div>
							</li>

							<li>
								<div class="icon-box-icon-block">
									<div class="icon-box-round">
										<i class="lni-certificate"></i>
									</div>
									<div class="icon-box-text">
										<strong class="d-block">Success Year</strong>
										{{$user->age}}
									</div>
								</div>
							</li>

							{{-- <li>
									<div class="icon-box-icon-block">
												<div class="icon-box-round">
													<i class="lni-graduation"></i>
												</div>
												<div class="icon-box-text">
													<strong class="d-block">Min Qualification</strong>
													Master Degree
												</div>
									</div>
								</li> --}}


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
									<a href="mailto:{{$user->email}}">
										<div class="icon-box-round">
											<i class="lni-envelope"></i>
										</div>
										<div class="icon-box-text">
											{{$user->email}}
										</div>
									</a>
								</div>
							</li>

							<li>
								<div class="icon-box-icon-block">
									<a href="{{$user->site_url}}" target="_blank">
										<div class="icon-box-round">
											<i class="lni-world"></i>
										</div>
										<div class="icon-box-text">
											{{$user->site_url}}
										</div>
									</a>
								</div>
							</li>

						</ul>
					</div>

				</div>

				<!-- Follow this -->
				<div class="tr-single-box">
					<div class="tr-single-header">
						<h4><i class="ti-share"></i> Follow Us</h4>
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
											{{$user->facebook_url}}
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
											{{$user->linkedin_url}}
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
											{{$user->twitter_url}}
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
											{{$user->instagrame_url}}
										</div>
									</a>
								</div>
							</li>

							{{-- <li>
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
										</li> --}}

						</ul>
					</div>

				</div>

			</div>
			<!-- /col-md-4 -->
		</div>
	</div>
</section>
<!-- ============== Job Detail ====================== -->

<!-- ============================ Newsletter Start ================================== -->
<!-- <section class="alert-wrap pt-5 pb-5" style="background: #00a94f url(assets/img/bg2.png);">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="jobalert-sec">
					<h3 class="mb-1 text-light">Get New Jobs Notification!</h3>
					<p class="text-light">Subscribe & get all related jobs notification.</p>
				</div>
			</div>

			<div class="col-lg-6 col-md-6">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Enter Your Email">
					<div class="input-group-append">
						<button type="button" class="btn btn-black black">Subscribe</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
@endsection