<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="au theme template" />
    <meta name="author" content="Hau Nguyen" />
    <meta name="keywords" content="au theme template" />
    <!-- Title Page-->
    <title>Admin | Al-ikhlas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Fontfaces CSS-->
    <link href="{{ url('/') }}/assetsL/css/font-face.css" rel="stylesheet" media="all" />
    <link href="{{ url('/') }}/assetsL/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet"
        media="all" />
    <link href="{{ url('/') }}/assetsL/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet"
        media="all" />
    <link href="{{ url('/') }}/assetsL/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet"
        media="all" />
    <!-- Bootstrap CSS-->
    <link href="{{ url('/') }}/assetsL/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all" />
    <!-- Vendor CSS-->
    <link href="{{ url('/') }}/assetsL/vendor/animsition/animsition.min.css" rel="stylesheet" media="all" />
    <link href="{{ url('/') }}/assetsL/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"
        rel="stylesheet" media="all" />
    <link href="{{ url('/') }}/assetsL/vendor/wow/animate.css" rel="stylesheet" media="all" />
    <link href="{{ url('/') }}/assetsL/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all" />
    <link href="{{ url('/') }}/assetsL/vendor/slick/slick.css" rel="stylesheet" media="all" />
    <link href="{{ url('/') }}/assetsL/vendor/select2/select2.min.css" rel="stylesheet" media="all" />
    <link href="{{ url('/') }}/assetsL/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet"
        media="all" />
    <!-- Main CSS-->
    <link href="{{ url('/') }}/assetsL/css/theme.css" rel="stylesheet" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class="animsition">
    <div class="page-wrapper">
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="dashboard">Dashbord</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-money"></i>Zakat Masuk</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{ url('/zakat') }}">Data Zakat Masuk</a>
                                </li>
                                <li>
                                    <a href="{{ url('/mustahiknonaktif') }}">Non-Aktif</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/saran') }}">Saran Masuk</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-account"></i>Mustahik</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('/mustahik') }}">Aktif</a>
                                </li>
                                <li>
                                    <a href="{{ url('/mustahiknonaktif') }}">Non-Aktif</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h2>Al - Ikhlas</h2>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="dashboard">Dashbord</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="bi bi-wallet2"></i>Zakat Masuk</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('/zakat') }}">Zakat Mal</a>
                                </li>
                                <li>
                                    <a href="{{ url('/zakatpenghasilan') }}">Zakat Penghasilan</a>
                                </li>
                                <li>
                                    <a href="{{ url('/zakatfitrah') }}">Zakat Fitrah</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/saran') }}">Saran Masuk</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="bi bi-people-fill"></i>Mustahik</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('/mustahik') }}">Aktif</a>
                                </li>
                                <li>
                                    <a href="{{ url('/mustahiknonaktif') }}">Non-Aktif</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap justify-content-end">
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{ url('/') }}/assetsL/images/icon/avatar-01.jpg"
                                                alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{ url('/') }}/images/icon/avatar-01.jpg"
                                                            alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <x-dropdown-link :href="route('profile.edit')" style="color:black">
                                                        <i class="zmdi zmdi-account"></i>Akun
                                                    </x-dropdown-link>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <x-dropdown-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                        <i class="zmdi zmdi-power"></i>{{ __('Log Out') }}
                                                    </x-dropdown-link>

                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
        </div>

        @yield('contentadm')
    </div>
    <!-- Jquery JS-->
    <script src="{{ url('/') }}/assetsL/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="{{ url('/') }}/assetsL/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="{{ url('/') }}/assetsL/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="{{ url('/') }}/assetsL/vendor/slick/slick.min.js"></script>
    <script src="{{ url('/') }}/assetsL/vendor/wow/wow.min.js"></script>
    <script src="{{ url('/') }}/assetsL/vendor/animsition/animsition.min.js"></script>
    <script src="{{ url('/') }}/assetsL/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="{{ url('/') }}/assetsL/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="{{ url('/') }}/assetsL/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="{{ url('/') }}/assetsL/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{ url('/') }}/assetsL/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ url('/') }}/assetsL/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="{{ url('/') }}/assetsL/vendor/select2/select2.min.js"></script>
    <!-- Main JS-->
    <script src="{{ url('/') }}/assetsL/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
<!-- end document-->
