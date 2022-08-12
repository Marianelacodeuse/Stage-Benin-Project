<!-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <input id="role" type="String" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role">

                                @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->
@section('register')
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
                    <h4 class="modal-header-title">Welcome <span>New User</span></h4>
                    <div class="social-login center-tr">
                        <ul>
                            <li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Sign up with Facebook</a></li>
                            <li><a href="#" class="btn connect-linked"><i class="ti-linkedin"></i>Sign up with Linkedin</a></li>
                        </ul>
                    </div>
                    <div class="login-form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf


                            <div class="form-group">
                                <div class="input-with-gray">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Uusername" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <i class="ti-user"></i>
                                </div>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">

                                <div class="input-with-gray">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                    <i class="ti-user"></i>
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="input-with-gray">

                                    <input id="role" type="String" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" placeholder="Role">
                                    <i class="ti-user"></i>
                                    @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-with-gray">
                                    <input type="password" name="password" class="form-control" placeholder="*******">
                                    <i class="ti-unlock"></i>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">

                                <div class="input-with-gray">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="*******">
                                    <i class="ti-unlock"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-md full-width pop-login">Login</button>
                            </div>

                        </form>
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