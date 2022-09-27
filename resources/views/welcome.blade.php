@extends('layouts.app')
@section('main')
<!-- ========================================Hero 1=====================================  -->
<div class="slide-wrapper owl-carousel owl-theme" id="hero-slider">
    <div class="slide1 pt-5 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-2 my-3 text-white text-uppercase">StageBenin</h1>
                    <h6 class="text-white">Trouver votre lieu de stage avec StageBenin</h6>
                    <a href="{{route('candidat-dashboard')}}" class="btn btn-brand">Je suis un étudiant</a>

                    <a href="{{route('entreprise-dashboard')}}" class="btn btn-outline-light ms-md-3">Je suis une entreprise</a>
                </div>
                
                <form action="{{url('/candidat/search-stage')}}" method="POST">
                    @csrf
                    <div class="col-12 text-center form-group pt-5">
                        <input type="text" name="motcle" size="30" placeholder="Mots-clé/Compétences" />
                        <select name="localite">
                            <option selected>Région</option>
                            <option value="Calavi">Abomey-Calavi</option>
                            <option value="Cotonou">Cotonou</option>
                            <option value="Porto-Novo">Porto-Novo</option>
                            <option value="Parakou">Parakou</option>
                            <option value="Allada">Allada</option>
                            <option value="Dassa">Dassa</option>
                        </select>
                        <select name="categorie">
                            <option selected>Domaines</option>
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
        </div>
    </div>
</div>
<!-- =============================================Stages populaires========================= -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 intro-section">
                <p>Découvrez des stages par catégorie</p>
                <h2>Catégories de stages </h2>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <div class="stage-populaire custom-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-tower-cell"></i>
                    </div>
                    <h5><a href="{{route('ssg')}}">Télécommunications</a></h5>
                    <span>10 Stages</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="stage-populaire custom-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-fill-drip"></i>
                    </div>
                    <h5><a href="{{route('ssg')}}">Design & Graphisme</a></h5>
                    <span>15 Stages</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="stage-populaire custom-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-desktop"></i>
                    </div>
                    <h5><a href="{{route('ssg')}}">Devellopement web</a></h5>
                    <span>08 Stages</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="stage-populaire custom-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-scissors"></i>
                    </div>
                    <h5><a href="{{route('ssg')}}">Banque & Assurance</a></h5>
                    <span>06 Stages</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="stage-populaire custom-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-wifi"></i>
                    </div>
                    <h5><a href="{{route('ssg')}}">Réseaux informatiques</a></h5>
                    <span>10 Stages</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="stage-populaire custom-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-plate-wheat"></i>
                    </div>
                    <h5><a href="{{route('ssg')}}">Commerce & Marketing</a></h5>
                    <span>04 Stages</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =============================================Totales des offres============================ -->
<section id="totales" class="bg-cover">
    <div class="container">
        <div class="row gy-4 text-center">
            <div class="col-lg-4">
                <div class="display-4">{{$totalPosts}}</div>
                <p class="mb-0">Offres disponibles</p>
            </div>
            <div class="col-lg-4">
                <!-- <div class="display-4"> <i class="fa fa-add"></i> {{$totalEtudiants}}</div> -->
                <div class="display-4">{{$totalEtudiants}}</div>
                <p class="mb-0">Etudiants </p>
            </div>
            <div class="col-lg-4">
                <div class="display-4">{{$totalEntreprises}}</div>
                <p class="mb-0">Entreprises</p>
            </div>
        </div>
    </div>
</section>

<!-- ===============================================Entreprises populaires============================== -->
<section id="société" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 intro-section">
                <p>Découvrez des entreprises qui recrutent</p>
                <h2>Entreprises populaires</h2>
            </div>
        </div>
    </div>
    <div id="entreprise-slider" class="owl-theme owl-carousel">
        @foreach($entreprises as $entreprise)
        <div class="entreprise">
            <img src="{{asset('uploads/images/'.$entreprise->logo_path)}}" alt="">
            <!-- <img src="{{asset('uploads/images/'.$entreprise->logo_path?$entreprise->logo_path:'logo_default')}}" alt=""> -->
            <!-- <img src="{{Storage::url($entreprise->logo_path? $entreprise->logo_path:'images/logo_default.jpg')}}" alt=""> -->
            <div class="overlay"></div>
            <div class="content">
                <h1>{{$entreprise->name}}</h1>
                <h6 style="color:black">{!!Str::words($entreprise->description,'20','...')!!} </h6>
                <!-- <button type="submit" class="btn btn-brand"><a href="">Demander un stage</a></button> -->
                <a href="{{url('/entreprise/entreprise-detail/'.$entreprise->id)}}" class="btn btn-brand mx-2">Demander un stage</a>
                <a href="{{url('/entreprise/entreprise-detail/'.$entreprise->id)}}" class="btn btn-brand mx-2">En Savoir plus</a>
            </div>
            <!-- <div class="lire">
                <a href="" class="btn btn-brand">Lire plus</a>
            </div> -->
        </div>
        @endforeach
        <!-- <div class="entreprise">
            <img src="../asset/img/LaPosteBenin.jpg" alt="">
            <div class="overlay"></div>
            <div class="content">
                <h1>La Poste</h1>
                <h6>La Poste du Bénin est l'opérateur chargé de la collecte, de l'acheminement...</h6>
                <button type="submit" class="btn btn-brand"><a href="">Demander un stage</a></button>
                <a href="" class="btn btn-brand mx-2">Lire plus</a>
            </div>
        </div>
        <div class="entreprise">
            <img src="../asset/img/MOOV-CCIB.jpg" alt="">
            <div class="overlay"></div>
            <div class="content">
                <h1>Moov-Bénin</h1>
                <h6>Moov Africa Bénin est le nom d'un l'opérateur téléphonique...</h6>
                <button type="submit" class="btn btn-brand"><a href="">Demander un stage</a></button>
                <a href="" class="btn btn-brand mx-2">Lire plus</a>
            </div>
        </div>
        <div class="entreprise">
            <img src="../asset/img/Port.jpg" alt="">
            <div class="overlay"></div>
            <div class="content">
                <h1>Port Autonome de Cotonou</h1>
                <h6>Le Port de Cotonou est un port autonome béninois situé dans la ville de Cotonou...</h6>
                <button type="submit" class="btn btn-brand"><a href="">Demander un stage</a></button>
                <a href="" class="btn btn-brand mx-2">Lire plus</a>
            </div>
        </div>
        <div class="entreprise">
            <img src="../asset/img/soneb.jpg" alt="">
            <div class="overlay"></div>
            <div class="content">
                <h1>Soneb</h1>
                <h6>La Société nationale des eaux du Bénin a été créée en 2003 par le décret n° 2003-203 du 12 juin 2003...</h6>
                <button type="submit" class="btn btn-brand"><a href="">Demander un stage</a></button>
                <a href="" class="btn btn-brand mx-2">Lire plus</a>
            </div>
        </div>
        <div class="entreprise">
            <img src="../asset/img/STTB.jpg" alt="">
            <div class="overlay"></div>
            <div class="content">
                <h1>STTB SA</h1>
                <h6>STTB SA est une société de droit béninois qui a comme partenaire principal le Port Autonome </h6>
                <button type="submit" class="btn btn-brand"><a href="">Demander un stage</a></button>
                <a href="" class="btn btn-brand mx-2">Lire plus</a>
            </div>
        </div> -->

    </div>
</section>

<!-- ===================================================Stage récent=================================== -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 intro-section">
                <p>Découvrez les offres de stages</p>
                <h2>Stages récents</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10 stage-infos">
                @foreach($posts as $post)
                <div class="stage-récent">
                    <div class="stage-informations">
                        <h3 style="padding-left:70px">{{$post->title}}</h3>
                        <div class="mg-list-thumb">

                            <img src="{{asset('uploads/images/'.$post->logo_path)}}" class="mx-auto" alt="" />
                        </div>
                        <div class="mg-list-caption">
                            <h4 style="color:blue"><b>{{$post->name}}</b></h4>

                            <div>
                                <i class="fa-solid fa-briefcase" style="color:blue"></i><span>{{$post->duree}} mois</span><br>
                                <div><i class="fa-solid fa-location-dot" style="color:blue"></i><span>{{$post->adresse_stage}}</span></div>
                            </div>

                            <!-- <p>Compétences <i class="fa-solid fa-angle-right"></i><small>Laravel</small><small>Python</small><small>JavaScript</small><small>HTML,CSS</small></p> -->
                        </div>


                    </div>
                    <div class="postuler">
                        <!-- <button type="submit" class="btn btn-primary">Consulter l'offre</button> -->
                        <a href="{{url('/post-show/'.$post->id)}}" class="btn btn-primary">Consulter l'offre</a>
                    </div>
                </div>
                @endforeach
                <!-- <div class="stage-récent">
                    <div class="stage-informations">
                        <h4><b>Novotel</b></h4>
                        <p>Stagiaire en Cuisine</p>
                        <i class="fa-solid fa-briefcase"></i><span>2 mois</span><br>
                        <i class="fa-solid fa-location-dot"></i><span>1821 Boulevard de la Marina, Cotonou</span>
                        <p>Compétences <i class="fa-solid fa-angle-right"></i><small>Débutant accepté</small></p>
                    </div>
                    <div class="postuler">
                        <button type="submit" class="btn btn-primary">Consulter l'offre</button>
                    </div>
                </div>
                <div class="stage-récent">
                    <div class="stage-informations">
                        <h4><b>Novotel</b></h4>
                        <p>Stagiaire en Cuisine</p>
                        <i class="fa-solid fa-briefcase"></i><span>2 mois</span><br>
                        <i class="fa-solid fa-location-dot"></i><span>1821 Boulevard de la Marina, Cotonou</span>
                        <p>Compétences <i class="fa-solid fa-angle-right"></i><small>Débutant accepté</small></p>
                    </div>
                    <div class="postuler">
                        <button type="submit" class="btn btn-primary">Consulter l'offre</button>
                    </div>
                </div> -->
                <!-- <ul class="pagelink text-center">
                    <li class="left-arrow">&#8592;</li>
                    <li class="active">1</li>
                    <li>2</li>
                    <li>3</li>
                    <li class="right-arrow">&#8594;</li>
                </ul> -->
            </div>
        </div>
    </div>
</section>

<!-- ================================================Avis internautes================================ -->
<!-- <section id="avis" class="bg-cover">
    <div class="container">
        <div class="row">
            <div class="col-12 intro-section">
                <p>Des avis?</p>
                <h2>Que disent les gens?</h2>
            </div>
        </div>

        <div class="owl-carousel owl-theme" id="avis-slider">
            <div class="avis">
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum exercitationem ratione necessitatibus molestias placeat distinctio minima numquam ducimus optio unde hic deserunt ex id laborum dolor, amet labore ut quod.
                </p>
                <div class="personne d-flex align-items-center">
                    <img src="{{asset('assets/img/user-3.jpg')}}" class="me-3" alt="">

                    <div>
                        <h6 class="mb-0">PayPlus</h6>
                        <small>Passerelle de paiement</small>
                    </div>
                </div>

            </div>
            <div class="avis">
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum exercitationem ratione necessitatibus molestias placeat distinctio minima numquam ducimus optio unde hic deserunt ex id laborum dolor, amet labore ut quod.
                </p>
                <div class="personne d-flex align-items-center">
                    <img src="{{asset('assets/img/user-3.jpg')}}" class="me-3" alt="">

                    <div>
                        <h6 class="mb-0">PayPlus</h6>
                        <small>Passerelle de paiement</small>
                    </div>
                </div>

            </div>
            <div class="avis">
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum exercitationem ratione necessitatibus molestias placeat distinctio minima numquam ducimus optio unde hic deserunt ex id laborum dolor, amet labore ut quod.
                </p>
                <div class="personne d-flex align-items-center">
                    <img src="{{asset('assets/img/user-3.jpg')}}" class="me-3" alt="">

                    <div>
                        <h6 class="mb-0">PayPlus</h6>
                        <small>Passerelle de paiement</small>
                    </div>
                </div>

            </div>
            <div class="avis">
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum exercitationem ratione necessitatibus molestias placeat distinctio minima numquam ducimus optio unde hic deserunt ex id laborum dolor, amet labore ut quod.
                </p>
                <div class="personne d-flex align-items-center">
                    <img src="{{asset('assets/img/user-3.jpg')}}" class="me-3" alt="">

                    <div>
                        <h6 class="mb-0">PayPlus</h6>
                        <small>Passerelle de paiement</small>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section> -->






@endsection