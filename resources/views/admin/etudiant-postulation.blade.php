<!DOCTYPE html>
<html
  lang="fr"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Dashboard</title>

    <meta name="description" content="" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"/>
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
            
              <span class="app-brand-text demo menu-text fw-bolder ms-2">StageBenin</span>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Mon profile -->

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Profile</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bx-user-circle'></i>
                <div data-i18n="Account Settings">Profile</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="pages-account-settings-account.html" class="menu-link">
                    <div data-i18n="Account">Mon profile</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div data-i18n="Contacts">Contacts</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-connections.html" class="menu-link">
                    <div data-i18n="Réseaux">Réseaux sociaux</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- profile end -->
             <!-- Actions -->
             <li class="menu-header small text-uppercase"><span class="menu-header-text">Actions</span></li>
             <li class="menu-item active open">
               <a href="javascript:void(0);" class="menu-link menu-toggle">
                 <i class="menu-icon tf-icons bx bx-table"></i>
                 <div data-i18n="Actions">Gérer les comptes</div>
               </a>
               <ul class="menu-sub">
                 <li class="menu-item active">
                   <a href="etudiant.html" class="menu-link">
                     <div data-i18n="Etudiants">Etudiants</div>
                   </a>
                 </li>
                 <li class="menu-item">
                   <a href="entreprise.html" class="menu-link">
                     <div data-i18n="Entreprises">Entreprises</div>
                   </a>
                 </li>
               </ul>
             </li>
 
             <!-- actions end -->

             <!-- Change password -->
          <li class="menu-item">
            <a href="auth-register-basic.html" class="menu-link">
              <i class="menu-icon tf-icons bx bxs-lock"></i>
              <div data-i18n="MDP">Changer le mot de passe</div>
            </a>
          </li>

          <!-- logout -->
          <li class="menu-item">
            <a href="" class="menu-link">
              <i class="menu-icon tf-icons bx bx-log-out"></i>
              <div data-i18n="logout">Se déconnecter</div>
            </a>
          </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
  
            <!-- / Navbar -->
  
            <!-- Content wrapper -->
            <div class="content-wrapper">
              <!-- Content -->
  
              <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4">Actions</h4>
  
                <div class="row">
                  <div class="col-md-12">
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                      <li class="nav-item">
                        <a class="nav-link  active" href="javascript:void(0);"
                          ><i class="bx bxs-heart me-1"></i> Postulations</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="etudiant_demande.html">
                            <i class="bx bxs-briefcase me-1"></i>Demande</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="CV1.html">
                            <i class="bx bx-user me-1"></i>CV</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="bx bx-user me-1"></i>Voir profile</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="etudiant.html">
                            <i class="bx bx-left-arrow-alt me-1"></i>Retour</a>
                      </li>
                    </ul>
  
             
                <!-- Bordered Table -->
              <div class="card">
                <h5 class="card-header"></h5>
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Intitulé de l'offre</th>
                          <th>Entreprise</th>
                          <th>Date de postulation</th>
                          <th>Statut</th>
                          <th>Action 1</th>
                          <th>Action 2</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Concepteur Web</strong></td>
                          <td>PayPlus</td>
                          <td>02 Avril 2022</td>
                          <td><span class="badge bg-label-primary me-1">Accepté</span></td>
                          <td>
                            <a href="" class="btn btn-primary"><i class="bx bx-show me-1"></i> Consulter l'offre</a>
                          </td>
                          <td>
                            <a href="" class="btn btn-danger"><i class="bx bx-trash me-1"></i> Supprimer</a>
                          </td>
                        </tr>
                        <tr>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Concepteur Web</strong></td>
                          <td>PayPlus</td>
                          <td>02 Avril 2022</td>
                          <td><span class="badge bg-label-danger me-1">Rufusé</span></td>
                          <td>
                            <a href="" class="btn btn-primary"><i class="bx bx-show me-1"></i> Consulter l'offre</a>
                          </td>
                          <td>
                            <a href="" class="btn btn-danger"><i class="bx bx-trash me-1"></i> Supprimer</a>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!--/ Bordered Table -->

                </div>
                </div>
            </div>
              <!-- / Content -->
  
              <!-- Footer -->
              <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                  <div class="mb-2 mb-md-0">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by
                    <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">M&H</a>
                  </div>
                  <div>
                    <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                    <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>
  
                    <a
                      href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >
  
                    <a
                      href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                      target="_blank"
                      class="footer-link me-4"
                      >Support</a
                    >
                  </div>
                </div>
              </footer>
              <!-- / Footer -->
  
              <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
          </div>
          <!-- / Layout page -->
        </div>
  
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
      </div>
      <!-- / Layout wrapper -->
      <script src="../assets/vendor/libs/jquery/jquery.js"></script>
      <script src="../assets/vendor/libs/popper/popper.js"></script>
      <script src="../assets/vendor/js/bootstrap.js"></script>
      <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  
      <script src="../assets/vendor/js/menu.js"></script>
      <!-- endbuild -->
  
      <!-- Vendors JS -->
  
      <!-- Main JS -->
      <script src="../assets/js/main.js"></script>
  
      <!-- Page JS -->
  
      <!-- Place this tag in your head or just before your close body tag. -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
  </html>
  