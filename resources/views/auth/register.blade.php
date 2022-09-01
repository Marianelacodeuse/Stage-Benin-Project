@extends('layouts.app')
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
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Uusername" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                    <i class="ti-user"></i>
                                </div>

                            </div>

                            <div class="form-group">

                                <div class="input-with-gray">
                                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <i class="ti-envelope"></i>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="input-with-gray">
                                    <select id="role" class="form-control @error('role') is-invalid @enderror" id="role" name="role" title="Hey">
                                        <!-- <option value="">&nbsp;</option> -->

                                        <option value="" disabled selected hidden>Vous etes un Candidat? Entreprise?</option>
                                        <option value="candidat">Candidat</option>
                                        <option value="recruteur">Entreprise</option>

                                    </select>
                                    @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <i class="ti-user"></i>
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="input-with-gray">
                                    <input id="img_carte" type="file" class="form-control @error('img_carte') is-invalid @enderror" placeholder="Photo de la carte Etudiant" name="card" value="{{ old('card') }}" style='display:none'>
                                    @error('card')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                    <!-- <i class="ti-user"></i> -->
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-with-gray">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('name') }}" placeholder="*******">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <i class="ti-unlock"></i>
                                </div>

                            </div>
                            <div class="form-group">

                                <div class="input-with-gray">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="*******">
                                    <i class="ti-unlock"></i>
                                </div>
                            </div>
                            <!-- <input type="checkbox" onClick="afficher_cacher(this)" />

                            <br><br>

                            <input type="text" id='inpt' value="coucou" style='display:none'><br /> -->

                            <!-- <input type="hidden" name="age" id="age" value="Your Age" >
                            <input type="hidden" name="genre" id="genre" value="Filiere">
                            <input type="hidden" name="specialite" id="specialite" value="Specialite">
                            <input type="hidden" name="niveau" id="niveau" value="Niveau">
                            <input type="hidden" name="telephone" id="telephone" value="telephone">
                            <input type="hidden" name="adresse" id="adresse" value="adresse"> -->
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
<script>
    var elt = document.getElementById('role');
    elt.addEventListener('change', function() {
        console.log('value => ' + this.value);
        console.log(elt.value);
        if (elt.value == "candidat") {
            console.log('true')
            document.getElementById("img_carte").style.display = 'block';
        } else {
            document.getElementById("img_carte").style.display = 'none';
        }
    })

    // function afficher_cacher(elem) {

    //     if (elem.checked) {

    //         document.getElementById("inpt").style.display = 'block';
    //     } else
    //         document.getElementById("inpt").style.display = 'none';
    // }
</script>
@endsection