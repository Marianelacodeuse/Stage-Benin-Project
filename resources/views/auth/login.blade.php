@extends('layouts.app')



@section('login')
<!-- ============================ Hero Banner  Start================================== -->
<div class="page-title-wrap pt-img-wrap" style="background:url(assets/img/banner-4.jpg) no-repeat;">
	<div class="container">
		<div class="col-lg-12 col-md-12">
			<div class="pt-caption text-center">
				<h1>Sign In Your Account</h1>
				<p><a href="index-2.html">Home</a><span class="current-page">Log In</span></p>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<!-- ============================ Hero Banner End ================================== -->

<!-- ============================ Who We Are Start ================================== -->
<section>
	<div class="container">

		<div class="row justify-content-center">

			<div class="col-lg-7 col-md-7 col-sm-12">
				<div class="modal-body">
					<h4 class="modal-header-title">Welcome <span>Back</span></h4>
					<div class="social-login center-tr">
						<ul>
							<li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Login with Facebook</a></li>
							<li><a href="#" class="btn connect-linked"><i class="ti-linkedin"></i>Login with Linkedin</a></li>
						</ul>
					</div>
					<div class="login-form">
						<form method="POST" action="{{ route('login') }}">
							@csrf
							<div class="form-group">
								<label>Email</label>
								<div class="input-with-gray">
									<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Username">
									@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
									<i class="ti-user"></i>
								</div>
							</div>

							<div class="form-group">
								<label>Password</label>
								<div class="input-with-gray">
									<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="*******">
									@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
									<i class="ti-unlock"></i>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-md full-width pop-login">Login</button>
							</div>

						</form>
						<div>
							<span class="mf-link"><i class="ti-user"></i>Haven't An Account?<a href="{{route('register')}}"> Sign Up</a></span>
							&nbsp;
							<span class="mf-forget"><a href="#"><i class="ti-help"></i>Forget Password</a></span>
						</div>
					</div>
				</div>
			</div>

		</div>


	</div>
</section>
<div class="clearfix"></div>
<!-- ============================ Who We Are End ================================== -->

<!-- ============================ Newsletter Start ================================== -->
<section class="alert-wrap pt-5 pb-5" style="background: #00a94f url(assets/img/bg2.png);">
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
</section>
<!-- ============================ Newsletter Start ================================== -->
@endsection