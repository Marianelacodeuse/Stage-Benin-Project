@extends('layouts.app')
@section('contact')
<!-- ============================ Hero Banner  Start================================== -->
<div class="page-title-wrap pt-img-wrap" style="background:url(assets/img/bn-4.jpg) no-repeat;">
	<div class="container">
		<div class="col-lg-12 col-md-12">
			<div class="pt-caption text-center">
				<h1>
					Conatctez-nous</h1>

			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<!-- ============================ Hero Banner End ================================== -->

<!-- ============================ Who We Are Start ================================== -->
<section class="gray">
	<div class="container">

		<div class="row">

			<div class="col-lg-5 col-md-5 bg-white">
				<div class="contact-address">
					<div class="add-box">
						<div class="add-icon-box">
							<i class="ti-home theme-cl"></i>
						</div>
						<div class="add-text-box">
							<h4>Administrateurs</h4>
							CEO: MOUTALABI Habib<br>
							CEO: HOUNSOU Mariane<br>
						</div>
					</div>

					<div class="add-box">
						<div class="add-icon-box">
							<i class="ti-map-alt theme-cl"></i>
						</div>
						<div class="add-text-box">
							<h4>Localisation</h4>
							Cotonou (Littoral - Bénin)<br>
							Gbégamey, au bord du pavé avant le marché
						</div>
					</div>

					<div class="add-box">
						<div class="add-icon-box">
							<i class="ti-email theme-cl"></i>
						</div>
						<div class="add-text-box">
							<h4>Emails</h4>
							moutalabihabib2002@gmail.com<br>
							hounsounorma@gmail.com<br>
						</div>
					</div>
					<div class="add-box">
						<div class="add-icon-box">
							<i class="ti-headphone theme-cl"></i>
						</div>
						<div class="add-text-box">
							<h4>Téléphones</h4>
							+229 94 43 98 34<br>
							+229 62 40 49 07<br>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-md-7">
				<div class="contact-form">
					@if(Session::has('message'))
					<div class="alert alert-success">{{Session::get('message')}}</div>
					@endif

					<form action="{{url('/contact/sendMail')}}" method="post">
						@csrf
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>Nom Complet</label>
								<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Entrez votre nom ">

								@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="form-group col-md-6">
								<label>Email</label>
								<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Entrez votre adresse mail">
								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
						<div class="form-group">
							<label>Objet</label>
							<input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" placeholder="Ecrivez l'objet du mail">
							@error('subject')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control @error('msg') is-invalid @enderror" name="msg" placeholder="Ecvrivez votre message ici..."></textarea>
							@error('msg')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						<button type="submit" class="btn btn-primary full-width">Envoyer</button>
					</form>
				</div>
			</div>

		</div>

	</div>
</section>
<div class="clearfix"></div>
<!-- ============================ Who We Are End ================================== -->
@endsection