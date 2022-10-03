<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themezhub.net/workstock-2/work-stocks/employer-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jun 2021 17:43:12 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stage Benin</title>

    <!-- All Plugins Css -->
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('assets/css/style1.css')}}" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="{{asset('/assets/css/style1.css')}}"> -->
    <!-- Custom Color -->
    <link href="{{asset('assets/css/skin\default.css')}}" rel="stylesheet">
    <!-- include libraries(jQuery, bootstrap) -->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <script type="text/javascript" src="cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- include summernote css/js-->
    <link href="summernote-bs5.css" rel="stylesheet">
    <script src="summernote-bs5.js"></script>

    <!-- <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script> -->
</head>


<body class="blue-skin">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="Loader"></div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <!-- Start Navigation -->
        <div class="header header-light">
            <div class="container">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand" href="#">
                            <img src="{{asset('assets/img/logo.png')}}" class="logo" alt="" />
                        </a>
                        <div class="nav-toggle"></div>
                    </div>
                    <div class="nav-menus-wrapper" style="transition-property: none;">
                        <ul class="nav-menu">

                            <li class="active"><a href="{{url('/')}}">Accueil<span class="submenu-indicator"></span></a>

                            </li>

                            <li><a href="#">Etudiants<span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">

                                    <li><a href="{{route('ssl')}}">Trouver un stage<span class="submenu-indicator"></span></a>

                                    </li>
                                    <li><a href="{{route('sel')}}">Trouver une entreprise<span class="submenu-indicator"></span></a>

                                    </li>
                                    <li><a href="{{route('candidat-dashboard')}}">Espace Etudiant</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Entreprise<span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                                    <li><a href="{{route('scg')}}">Trouver un candidat</a></li>

                            </li>
                            <li><a href="{{route('entreprise-dashboard')}}">Espace Entreprise</a></li>
                        </ul>
                        </li>

                        <!-- <li><a href="{{route('blog')}}">Blog<span class="submenu-indicator"></span></a>
                        </li> -->

                        <li><a href="{{route('contact')}}">Contacts</a></li>

                        </ul>


                        <ul class="nav-menu nav-menu-social align-to-right">
                            @auth
                            <li class="add-listing theme-bg">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ti-plus mr-1"></i>
                                    {{ __('Deconnexion') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                            @endauth


                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->

        <!-- ============================ Hero Banner  Start================================== -->
        <div class="page-title-wrap">
            <div class="container">
                <div class="col-lg-12 col-md-12">
                    <div class="pt-caption">
                        <h1>Hello!!{{auth()->user()->name}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- ============================ Hero Banner End ================================== -->


        <!-- ============== Employee Dashboard ====================== -->
        <section class="tr-single-detail gray-bg">
            <div class="container">
                <div class="row">

                    <!-- Sidebar Start -->
                    <div class="col-md-4 col-sm-12">
                        <div class="dashboard-wrap">

                            <div class="dashboard-thumb">
                                <div class="dashboard-th-pic">
                                    <img src="{{asset('uploads/images/'.auth()->user()->logo_path)}}" class="img-fluid mx-auto img-circle" alt="" />
                                </div>

                                {{-- <span class="text-success">Project Management</span> --}}
                            </div>

                            <!-- Nav tabs -->
                            <ul class="nav dashboard-verticle-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#c-profile"><i class="ti-user"></i>Profil Entreprise</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#manage-jobs"><i class="ti-file"></i>Gérer nos offres</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#transactions"><i class="lni-heart-filled"></i>Transactions</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#shortlisted"><i class="lni-briefcase"></i>Présélectionnés</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#candidatures"><i class="lni-heart-filled"></i>Demandes</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#alert"><i class="lni-alarm"></i>Alert job</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#post-new-job"><i class="ti-plus"></i>Ajouter une offre</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#package"><i class="lni-tag"></i>Package</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/entreprise/entreprise-detail/'.auth()->user()->id)}}"><i class="lni-user"></i>Voir le Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#change-password"><i class="lni-lock"></i>Changer le Mot de passe</a>
                                </li>
                                <li class="nav-item">
                                    <!-- <a class="nav-link" href="{{route('delete')}}" onclick=" event.preventDefault();
									document.getElementById('delete-form').submit();"><i class="lni-trash"></i>Supprimer le compte</a>
									<form action="{{route('delete')}}" method="post" id="delete-form"> @csrf</form> -->
                                    <a href="#" data-toggle="modal" data-target="#confirmDelete" class="nav-link">
                                        <i class="lni-trash"></i>Supprimer le compte
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="lni-exit"></i>
                                        {{ __('Deconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <!-- /col-md-4 -->

                    <div class="col-md-8 col-sm-12">
                        <!-- Tab panes -->
                        @if(Session::has('error'))

                        <!-- <div class="alert alert-danger">{{Session::get('error')}}</div> -->
                        <div class="alert alert-danger alert-white rounded">
                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
                            <!-- <div class="icon">
                                <i class="fa fa-check"></i>
                            </div> -->
                            <strong>Erreur!</strong>
                            {{Session::get('error')}}
                        </div>
                        @endif
                        @if(Session::has('success'))
                        <!-- <div class="col-sm-6 col-md-6">
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    ×</button>
                                <span class="glyphicon glyphicon-ok"></span> <strong>Success Message</strong>
                                <hr class="message-inner-separator">
                                <p>
                                    You successfully read this important alert message.</p>
                            </div>
                        </div> -->
                        <!-- <div class="alert alert-success"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></div> -->
                        <div class="alert alert-success alert-white rounded">
                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
                            <!-- <div class="icon">
                                <i class="fa fa-check"></i>
                            </div> -->
                            <strong>Success!</strong>
                            {{Session::get('success')}}
                        </div>
                        @endif
                        <div class="tab-content">

                            <!-- My Profile -->

                            <div class="tab-pane active container" id="c-profile">
                                <form action="{{route('uui')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Company Information -->
                                    <div class="tr-single-box">
                                        <div class="tr-single-header">
                                            <h4><i class="ti-home"></i> Informations sur l'entreprise</h4>
                                        </div>

                                        <div class="tr-single-body">
                                            <div class="row">

                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Nom de l'entreprise</label>
                                                        <input class="form-control" type="text" value="{{auth()->user()->name}}" name="name" id="name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Aperçu du profil</label>
                                                        <textarea class="ckeditor" name="description">
                                                        <p> {{auth()->user()->description}}</p>
                                                    </textarea>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Entreprise logo</label>

                                                        <input type="file" class="form-control" id="logo" name="logo" value="hey">

                                                    </div>
                                                </div>
                                                <!-- <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label>Cover Picture</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile2">
                                                        <label class="custom-file-label" for="customFile2">Choose file</label>
                                                    </div>
                                                </div>
                                            </div> -->

                                            </div>
                                        </div>

                                    </div>
                                    <!-- /Basic Info -->

                                    <!-- Contact Info -->
                                    <div class="tr-single-box">
                                        <div class="tr-single-header">
                                            <h4><i class="ti-headphone"></i> Informations de contact</h4>
                                        </div>

                                        <div class="tr-single-body">
                                            <div class="row">

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="social-nfo">Numéro de téléphone</label>
                                                        <input class="form-control" type="text" name="telephone" value="{{auth()->user()->telephone}}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="social-nfo">Email</label>
                                                        <input class="form-control" type="text" name="email" value="{{auth()->user()->email}}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="social-nfo">Website</label>
                                                        <input class="form-control" type="text" name="site_url" value="{{auth()->user()->site_url}}">
                                                    </div>
                                                </div>



                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="social-nfo">Localité</label>

                                                        <select name="ville" id="ville" class="form-control">
                                                            <option value="{{auth()->user()->ville}}" selected disable hidden>{{auth()->user()->ville}}</option>
                                                            <option value="Calavi">Abomey-Calavi</option>
                                                            <option value="Cotonou">Cotonou</option>
                                                            <option value="Porto-Novo">Porto-Novo</option>
                                                            <option value="Parakou">Parakou</option>
                                                            <option value="Allada">Allada</option>
                                                            <option value="Dassa">Dassa</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="social-nfo">Adresse Complète</label>
                                                        <input class="form-control" type="text" name="adresse" value="{{auth()->user()->adresse}}">
                                                    </div>
                                                </div>



                                            </div>
                                        </div>

                                    </div>
                                    <!-- /Contact Info -->

                                    <!-- Social Account -->
                                    <div class="tr-single-box">
                                        <div class="tr-single-header">
                                            <h4><i class="ti-new-window"></i>Comptes sociaux</h4>
                                        </div>

                                        <div class="tr-single-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="social-nfo"><i class="lni-facebook"></i>Facebook URL</label>
                                                        <input class="form-control" type="text" name="facebook_url" value="{{auth()->user()->facebook_url}}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="social-nfo"><i class="lni-linkedin"></i>LinkedIn URL</label>
                                                        <input class="form-control" type="text" name="linkedin_url" value="{{auth()->user()->linkedin_url}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="social-nfo"><i class="lni-twitter"></i>Twitter URL</label>
                                                        <input class="form-control" type="text" name="twitter_url" value="{{auth()->user()->twitter_url}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="social-nfo"><i class="lni-instagram"></i>Instagram URL</label>
                                                        <input class="form-control" type="text" name="instagrame_url" value="{{auth()->user()->instagrame_url}}">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <!-- /Social Account -->

                                    <!-- Advance Information -->
                                    <div class="tr-single-box">
                                        <div class="tr-single-header">
                                            <h4><i class="ti-heart"></i>Informations avancées</h4>
                                        </div>

                                        <div class="tr-single-body">
                                            <div class="row">

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="social-nfo">Date de Creation</label>
                                                        <input class="form-control" type="date" name="age" value="{{auth()->user()->age}}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="social-nfo">Nbr de Membres</label>
                                                        <input class="form-control" type="number" name="niveau_taille" value="{{auth()->user()->niveau_taille}}">
                                                    </div>
                                                </div>



                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Secteur d'activité</label>
                                                        <!-- <input class="form-control" type="text" name="niveau" value="{{auth()->user()->genre}}"> -->
                                                        <select name="filiere_secteur" id="secteur" class="form-control">
                                                            <option value="{{auth()->user()->filiere_secteur}}" selected disable hidden>{{auth()->user()->filiere_secteur}}</option>
                                                            <option value="Informatique,Telecom,Internet">Informatique,Telecom,Internet</option>
                                                            <option value="Transport,Logistique">Transport & Logistique</option>
                                                            <option value="Banque,Assurance,Finance">Banque,Assurance,Finance</option>
                                                            <option value="Distribution,Commerce">Distribution,Commerce</option>
                                                            <option value="Services">Services</option>
                                                            <option value="Industrie">Industrie</option>
                                                            <option value="Fonction publique,Administration">Fonction publique,Administration</option>
                                                            <option value="BTP,Construction,Immobilier">BTP,Construction,Immobilier</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <!-- /Advance Information -->


                                    <input type="hidden" value="{{auth()->user()->id}}" name="id_user" id="id_user">

                                    <button type="submit" class="btn btn-info btn-md full-width">Sauvegarder & Mettre à jour</button>

                                </form>
                            </div>

                            <!-- Manage jobs -->
                            <div class="tab-pane" id="manage-jobs">

                                <div class="tr-single-box">
                                    <div class="tr-single-header">
                                        <h4><i class="lni-file"></i> Manage jobs</h4>
                                    </div>

                                    <div class="tr-single-body">
                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <!-- Single Manage job -->
                                                    @forelse(auth()->user()->posts as $post)
                                                    <div class="manage-list">

                                                        <div class="mg-list-wrap">
                                                            <div class="mg-list-thumb">
                                                                <img src="{{asset('uploads/images/'.$post->user->logo_path)}}" class="mx-auto" alt="" />
                                                            </div>
                                                            <div class="mg-list-caption">
                                                                <h4 class="mg-title"> <a href="{{url('/post-show/'.$post->id)}}"> {{$post->title}}</a></h4>
                                                                <h5> {{$post->user->name}}</h5>

                                                                <!-- <h6>{!!Str::words($post->description,'7','....')!!}</h6> -->
                                                                <span><em>Creer le {{$post->created_at->format('D M Y')}} </em></span>

                                                            </div>
                                                        </div>

                                                        <div class="mg-action">
                                                            <!-- <div class="btn-group custom-drop">
                                                                <button type="button" class="btn btn-more" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="ti-more"></i>
                                                                </button>
                                                                <div class="dropdown-menu pull-right animated flipInX">
                                                                    <a href="#">Accending</a>
                                                                    <a href="#">Decending</a>
                                                                    <a href="#">By Date</a>
                                                                </div>
                                                            </div> -->
                                                            <div class="btn-group ml-2">
                                                                <a href="{{url('/post-show/'.$post->id)}}" class="mg-succes"><i class="ti-eye"></i></a>
                                                            </div>
                                                            <div class="btn-group ml-2">
                                                                <a href="{{url('/post-delete/'.$post->id)}}" data-toggle="modal" data-target="#confirmDeletePost" class="nav-link">
                                                                    <i class="lni-trash"></i>
                                                                </a>
                                                            </div>
                                                            <div class="btn-group ml-2">
                                                                <a href="#" class="mg-edit"><i class="ti-pencil"></i></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    @empty
                                                    <div class="alert alert-info">Not job yet</div>
                                                    @endforelse

                                                </div>
                                                <!-- Single Manage job -->
                                                {{-- <div class="manage-list">

                                                    <div class="mg-list-wrap">
                                                        <div class="mg-list-thumb">
                                                            <img src="assets/img/adwords.png" class="mx-auto" alt="" />
                                                        </div>
                                                        <div class="mg-list-caption">
                                                            <h4 class="mg-title"></h4>
                                                            <span class="mg-subtitle">{</span>
                                                            <span><em>Updated</em>  <em>Créer</em> </span>

                                                        </div>
                                                    </div>

                                                    <div class="mg-action">
                                                        <div class="btn-group custom-drop">
                                                            <button type="button" class="btn btn-more" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="ti-more"></i>
                                                            </button>
                                                            <div class="dropdown-menu pull-right animated flipInX">
                                                                <a href="#">Accending</a>
                                                                <a href="#">Decending</a>
                                                                <a href="#">By Date</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group ml-2">
                                                            <a href="#" class="mg-delete"><i class="ti-trash"></i></a>
                                                        </div>
                                                    </div>

                                                </div> --}}



                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>



                            <!-- Shortlisted -->
                            <div class="tab-pane" id="shortlisted">

                                <div class="tr-single-box">
                                    <div class="tr-single-header">
                                        <h4><i class="ti-briefcase"></i> Préselectionés</h4>
                                    </div>

                                    <div class="tr-single-body">
                                        <div class="row">

                                            <div class="col-md-12">
                                                <!-- Single Resume -->
                                                <div class="manage-list">

                                                    <div class="mg-list-wrap">
                                                        <div class="mg-list-thumb">
                                                            <img src="assets/img/user-3.jpg" class="mx-auto" alt="" />
                                                        </div>
                                                        <div class="mg-list-caption">
                                                            <h4 class="mg-title">Shaurya Preet</h4>
                                                            <span class="mg-subtitle">Web Designer</span>
                                                            <span><em>Last activity</em> 4 weeks ago. <em>Registered</em> 4 weeks ago</span>

                                                        </div>
                                                    </div>

                                                    <div class="mg-action">
                                                        <div class="btn-group custom-drop">
                                                            <button type="button" class="btn btn-more" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="ti-more"></i>
                                                            </button>
                                                            <div class="dropdown-menu pull-right animated flipInX">
                                                                <a href="#">Send Message</a>
                                                                <a href="#">View Profile</a>
                                                                <a href="#">Download</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group ml-2">
                                                            <a href="#" class="mg-delete"><i class="ti-trash"></i></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Candidatures -->
                            <div class="tab-pane" id="candidatures">

                                <div class="tr-single-box">
                                    <div class="tr-single-header">
                                        <h4><i class="ti-briefcase"></i> Demandes de Stage</h4>
                                    </div>

                                    <div class="tr-single-body">
                                        <div class="row">

                                            <div class="col-md-12">

                                                <!-- Single Resume -->
                                                @forelse($demandes as $demande)
                                                <div class="manage-list">

                                                    <div class="mg-list-wrap">
                                                        <div class="mg-list-thumb">
                                                            <img src="assets/img/user-5.jpg" class="mx-auto" alt="" />
                                                        </div>
                                                        <div class="mg-list-caption">
                                                            <h4 class="mg-title">Demande n°{{$demande->id}}</h4>
                                                            <span class="mg-subtitle">{{$demande->etudiants->name}}</span>
                                                            <span><em>Demande fait le</em> {{$demande->created_at->format('D M Y')}}</span>

                                                        </div>
                                                    </div>

                                                    <div class="mg-action">
                                                        <div class="btn-group custom-drop">
                                                            <button type="button" class="btn btn-more" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="ti-more"></i>
                                                            </button>
                                                            <div class="dropdown-menu pull-right animated flipInX">
                                                                <a href="#">Send Message</a>
                                                                <a href="{{url('/candidat/candidat-detail/'.$demande->etudiants->id)}}">View Profile</a>
                                                                <a href="{{url('/download/'.$demande->etudiants->cv_path)}}">Download</a>
                                                            </div>
                                                        </div>


                                                        @if($demande->status==-1)
                                                        <div class="btn-group ml-2">
                                                            <form action="{{route('accuseDemande')}}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{$demande->id}}">
                                                                <input type="submit" name="accepter" class="mg-valider" value="Accepter">


                                                                <input type="submit" name="refuser" class="mg-delete" value="Refuser">

                                                            </form>
                                                        </div>
                                                        @endif
                                                        @if($demande->status==1)
                                                        <div class="btn-group ml-2">
                                                            <span class="mg-valider">Accepter</span>
                                                        </div>
                                                        @endif
                                                        @if($demande->status==0)
                                                        <div class="btn-group ml-2">
                                                            <span class="mg-delete">Refuser</span>
                                                        </div>
                                                        @endif




                                                    </div>

                                                </div>
                                                @empty
                                                <div class="alert alert-success">Aucune demandes </div>
                                                @endforelse


                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Add New jobs -->
                            <div class="tab-pane" id="post-new-job">
                                <!-- Add New jobs -->
                                <form action="{{route('create-post')}}" method="post">
                                    <div class="tr-single-box">
                                        <div class="tr-single-header">
                                            <h4><i class="ti-plus"></i> Ajouter une offre de stage</h4>
                                        </div>

                                        <div class="tr-single-body">
                                            <div class="row">

                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Titre de l'offre</label>
                                                        <input class="form-control" name="title" type="text" value="Web Designer">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Description de l'offre</label>
                                                        <textarea name="description" class="ckeditor" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Durée du stage</label>
                                                        <input class="form-control" type="number" min="1" name="duree" placeholder="Entrer la durée du stage">

                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Date d'expiration</label>
                                                        <input class="form-control" type="date" name="expiration" placeholder="Entrer la date d'expiration de l'offre">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Gratification</label>
                                                        <input class="form-control" type="number" name="gratification" placeholder="Entrez un montant ">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Nombre de places disponible</label>
                                                        <input class="form-control" type="number" min="1" name="nbr_place" placeholder="Entrez un nombre">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Lieu de déroulement du stage</label>
                                                        <input class="form-control" type="text" name="adresse_stage" value="{{auth()->user()->adresse}}" placeholder="{{auth()->user()->adresse}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Catégorie</label>
                                                        <select id="category" name="category" class="form-control">
                                                            <option value="" selected hidden disable>Selectionner la categorie du stage</option>
                                                            <option value="Informatique,Telecom,Internet">Informatique,Telecom,Internet</option>
                                                            <option value="Transport & Logistique">Transport & Logistique</option>
                                                            <option value="Banque,Assurance,Finance">Banque,Assurance,Finance</option>
                                                            <option value="Distibution,Commerce">Distibution,Commerce</option>
                                                            <option value="Fonction publique,Administration">Fonction publique,Administration</option>
                                                            <option value="Management">Management</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Niveau Recquis</label>
                                                        <select id="qualification" class="form-control" name="niveau_recqui">

                                                            <option value="" selected hidden disable>Selectionner le niveau recquis</option>
                                                            <option value="1ere année">1ere année</option>
                                                            <option value="2eme année">2eme année</option>
                                                            <option value="3eme année">3e année</option>

                                                        </select>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </div>

                                    @csrf

                                    <button type="submit" class="btn btn-info btn-md full-width">Sauvegarder</button>
                                </form>
                                <!-- /CV -->



                            </div>

                            <!-- change-password -->
                            <div class="tab-pane" id="change-password">
                                <form action="{{route('uup')}}" method="post">
                                    @csrf
                                    <div class="tr-single-box">
                                        <div class="tr-single-header">
                                            <h4><i class="lni-lock"></i> Changer le mot de passe</h4>
                                        </div>


                                        <div class="tr-single-body">
                                            <div class="form-group">
                                                <label>Mot de passe actuel</label>
                                                <div class="input-with-gray">
                                                    <input type="password" name="password" class="form-control">
                                                    <i class="ti-unlock"></i>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Nouveau mot de passe</label>
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
                                                <label>Confirmer le mot de passe</label>
                                                <div class="input-with-gray">
                                                    <input id="password-confirm" type="text" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="*******">
                                                    <i class="ti-unlock"></i>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <input type="hidden" value="{{auth()->user()->id}}" name="id_user" id="id_user">

                                    <button type="submit" class="btn btn-info btn-md full-width">Sauvegarder et Mettre à jour</button>



                                </form>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ============== Employee Dashboard ====================== -->

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
        <!-- ============================ Newsletter Start ================================== -->

        <!-- ============================ Footer Start ================================== -->
        <footer class="dark-footer skin-dark-footer">


            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-6 col-md-6">
                            <p class="mb-0">Copyright@2022. All rights reserved</p>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!-- <footer style="background: linear-gradient(rgba(9, 32, 50, 0.868), rgba(9, 32, 50, 0.868)), url({{ asset('/assets/img/entreprise.jpg')}})">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 mx-auto">
							<a href="#" class="navbar-brand">StageBenin</a>
							<p>Contrairement à certaines plateformes de recherche de stage, StageBenin se focalise uniquement sur le bien-être
								des étudiants. Il aide les étudiants à se trouver un lieu de stage afin d'améliorer leur connaissances et leur
								garanti un lieu de stage. Avec cette plateforme, n'importe qui peut demander un stage à conditions d'être étudiant.
								StageBenin accueil toute entreprise à la recherche de stagiaires et leur offre l'opportunité de poster leurs offres de stages
								et de recruter les meilleurs ou les étudiants qui correspondent à leur profil.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<p class="mb-0">Copyright@2022. All rights reserved</p>
				</div>
			</div>
		</footer> -->
        <!-- ============================ Footer End ================================== -->

        <div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Suppression</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Voulez-vous vraiment supprimer votre compte? Cette action est definitve</p>
                    </div>
                    <div class="modal-footer">
                        <!-- <a class="nav-link" href="{{route('delete')}}" onclick=" event.preventDefault();
									document.getElementById('delete-form').submit();"><i class="lni-trash"></i>Supprimer le compte</a>
									<form action="{{route('delete')}}" method="post" id="delete-form"> @csrf</form> -->
                        <button type="button" class="btn btn-danger"><a href="{{route('delete')}}" onclick=" event.preventDefault();
									document.getElementById('delete-form').submit();" style="color:white"><i class="lni-trash"></i>Supprimer</a>
                            <form action="{{route('delete')}}" method="post" id="delete-form"> @csrf</form>
                        </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Log In Modal -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
                <div class="modal-content" id="registermodal">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="ti-close"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4 class="modal-header-title">SignIn</h4>
                        <div class="social-login">
                            <ul>
                                <li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Login with Facebook</a></li>
                                <li><a href="#" class="btn connect-gplus"><i class="ti-google"></i>Login with Gmail</a></li>
                            </ul>
                        </div>

                        <div class="devide-wrap"><span>OR</span></div>

                        <div class="login-form">
                            <form>

                                <div class="form-group">
                                    <label>User Name</label>
                                    <div class="input-with-gray">
                                        <input type="text" class="form-control" placeholder="Username">
                                        <i class="ti-user theme-cl"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-with-gray">
                                        <input type="password" class="form-control" placeholder="*******">
                                        <i class="ti-unlock theme-cl"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-md full-width pop-login">Login</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="mf-link"><i class="ti-user"></i>Haven't An Account?<a href="javascript:void(0)" data-toggle="modal" data-target="#signup" data-dismiss="modal"> Sign Up</a></div>
                        <div class="mf-forget"><a href="#"><i class="ti-help"></i>Forget Password</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->

        <!-- Sign Up Modal -->
        <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
                <div class="modal-content" id="sign-up">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="ti-close"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4 class="modal-header-title">Sign Up</h4>
                        <div class="social-login">
                            <ul>
                                <li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Login with Facebook</a></li>
                                <li><a href="#" class="btn connect-gplus"><i class="ti-google"></i>Login with Gmail</a></li>
                            </ul>
                        </div>

                        <div class="devide-wrap"><span>OR</span></div>

                        <div class="login-form">
                            <form>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <div class="input-with-gray">
                                                <input type="text" class="form-control" placeholder="Your Name">
                                                <i class="ti-user theme-cl"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <div class="input-with-gray">
                                                <input type="email" class="form-control" placeholder="Email ID">
                                                <i class="ti-user theme-cl"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>User Name</label>
                                            <div class="input-with-gray">
                                                <input type="text" class="form-control" placeholder="Username">
                                                <i class="ti-user theme-cl"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <div class="input-with-gray">
                                                <input type="password" class="form-control" placeholder="*******">
                                                <i class="ti-unlock theme-cl"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-md full-width pop-login">Login</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="mf-link"><i class="ti-user"></i>Already Have Account? Sign In</a></div>
                        <div class="mf-forget"><a href="#"><i class="ti-help"></i>Need Help</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->

    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/js/aos.js')}}"></script>
    <script src="{{asset('assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('assets/js/summernote.js')}}"></script>
    <script src="{{asset('assets/js/jQuery.style.switcher.js')}}"></script>

    <script src="{{asset('assets/js/counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script>
        $(function() {
            $('.datepicker').datepicker({
                format: 'mm-dd-yyyy'
            });
        });
    </script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello Bootstrap 5',
            tabsize: 2,
            height: 100
        });
    </script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>

</body>


</html>