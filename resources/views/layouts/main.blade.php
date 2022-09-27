<!DOCTYPE html>
<html lang="fr" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Stage Bénin</title>

    <meta name="description" content="" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{('assets/customs_vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/customs_vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('assets/customs_vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('assets/customs_css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assets/customs_vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/customs_vendor/libs/apex-charts/apex-charts.css')}}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('assets/customs_vendor/js/helpers.js')}}"></script>
    <script src="{{asset('assets/customs_js/config.js')}}"></script>
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
                    <li class="menu-item active">
                        <a href="index.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <!-- Mon profile -->

                    <!-- profile end -->
                    <!-- Actions -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Actions</span></li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-table"></i>
                            <div data-i18n="Actions">Gérer les comptes</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{url('/admin/etudiants')}}" class="menu-link">
                                    <div data-i18n="Etudiants">Etudiants</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('/admin/entreprises')}}" class="menu-link">
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

                            <a class="menu-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="menu-icon tf-icons bx bx-log-out"></i>
                                <div data-i18n="logout">{{ __('Deconnexion') }}</div>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
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
                @yield('index')
                @yield('etudiant')
                @yield('entreprise')

                <!-- Overlay -->
                <div class="layout-overlay layout-menu-toggle"></div>
            </div>
            <!-- / Layout wrapper -->
        </div>
    </div>


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('assets/customs_vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('assets/customs_vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('assets/customs_vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/customs_vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('assets/customs_vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('assets/customs_vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('assets/customs_js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('assets/customs_js/dashboards-analytics.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>