@extends('layouts.main')

@section('index')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-12 mb-4 py-5 order-0">
        <div class="card mb-5">
          <div class="d-flex align-items-end row">
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title text-primary">Bienvenue John! 🎉</h5>
                <p class="mb-4">
                  Nous sommes heureux de vous revoir en pleine forme</p>
                <p class="mb-4">
                  Voici les nouveaux inscrits sur la plateforme</p>
                <!-- <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a> -->
              </div>
            </div>
            <div class="col-sm-5 text-center text-sm-left">
              <div class="card-body pb-0 px-0 px-md-4">
                <img src="{{asset('assets/customs_img/illustrations/man-with-laptop-light.png')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <h5 class="card-header"></h5>
          <div class="card-body">
            <div class="table-responsive text-nowrap">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Photo Profil</th>
                    <th>Numéro IFU/Maticule</th>
                    <th>Nom</th>
                    <th>Filière/Secteur</th>
                    <th>Email</th>
                    <th>Téléphones</th>
                    <th>Carte Etudiant</th>
                    <th>Actions</th>

                  </tr>
                </thead>
                <tbody>
                  @forelse($users as $user)

                  <tr>
                    <td>
                      <center><img src="{{asset('uploads/images/' . $user->logo_path)}}" height="100px" width="95px" alt="" /> </center>
                    </td>
                    
                    <td>
                      <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>N°: {{$user->matricule}}</strong>
                    </td>

                    <td>{{$user->name}}</td>
                    <td>{{$user->filiere_secteur}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->telephone}}</td>
                    <td>
                      <center><img src="{{asset('uploads/images/' . $user->carte_etudiant_path)}}" height="100px" width="95px" alt="Pas d'image pour les entreprises" /> </center>
                    </td>
                    <td>
                      <center>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('/verifier/'.$user->carte_etudiant_path)}}">
                              <i class="bx bx-show me-1"></i>Vérifier</a>
                            <!-- <a class="dropdown-item" href=""><i class="bx bx-show me-1"></i>Consulter le profil</a> -->
                            <a class="dropdown-item" href=""><i class="bx bx-trash me-1"></i>Désactiver</a>
                          </div>
                        </div>
                      </center>
                    </td>

                  </tr>
                  @empty
                  <div class="alert alert-success">Aucuns Etudiants</div>
                  @endforelse

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


      <!-- Footer -->
      <footer class="content-footer footer bg-footer-theme">
        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
          <div class="mb-2 mb-md-5">
            ©
            <script>
              document.write(new Date().getFullYear());
            </script>
            , Made with ❤️ by
            <a href="#" target="_blank" class="footer-link fw-bolder">M&H</a>
          </div>
      </footer>
      <!-- / Footer -->

      <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
  </div>
  <!-- / Layout page -->
</div>

@endsection