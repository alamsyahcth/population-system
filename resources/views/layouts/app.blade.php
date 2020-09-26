<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('user/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('user/assets/vendors/jquery-bar-rating/css-stars.css')}}" />
    <link rel="stylesheet" href="{{asset('user/fontawesome-free/css/all.css')}}" />
    <link rel="stylesheet" href="{{asset('user/assets/vendors/font-awesome/css/font-awesome.min.css')}}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('user/assets/css/demo_2/style.css')}}" />
    <link rel="stylesheet" href="{{asset('user/app.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('user/assets/images/favicon.png')}}" />
    <style>
      p, h1, h2, h3, h4, h5, h6{
        font-family: 'PT Sans', sans-serif !important;
      }
    </style>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Sistem Kependudukan RT.003 RW.003 Sawah Baru') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

    <div class="container-scroller">
      <!-- partial:partials/_horizontal-navbar.html -->
        <div class="horizontal-menu">
            <nav class="navbar top-navbar col-lg-12 col-12 p-0">
                <div class="container">
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                        <a class="navbar-brand brand-logo pt-3" href="{{ url('/') }}">
                            <h4 class="d-block font-weight-bold">Sisduk </span>
                            <span class="font-12 d-block text-secondary">RT.003 RW.03 Sawah baru </span>
                        </a>
                        <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}">
                            <h4 class="d-block font-weight-bold">Sisduk </span>
                            <span class="font-12 d-block text-secondary">RT.003 RW.03 Sawah baru </span>
                        </a>
                    </div>
                    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item nav-profile dropdown">
                                <a class="btn btn-primary" href="{{ url('/login/penduduk')}}">  
                                    Masuk
                                </a>
                                <a class="btn btn-outline-primary ml-2" href="{{ url('/login/penduduk')}}">  
                                    Daftar
                                </a>
                            </li>
                        </ul>
                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                            <span class="mdi mdi-menu"></span>
                        </button>
                    </div>
                </div>
            </nav>
            <nav class="bottom-navbar">
                <div class="container">
                    <ul class="nav page-navigation">
                        <li class="nav-item">
                            <a class="nav-link nav-link-active" href="{{ url('/login/penduduk')}}">
                                <i class="mdi mdi-view-grid menu-icon"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login/penduduk')}}">
                                <i class="fas fa-file-alt menu-icon"></i>
                                <span class="menu-title">Surat Pengantar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login/penduduk')}}">
                                <i class="fas fa-file-alt menu-icon"></i>
                                <span class="menu-title">Penduduk Masuk</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login/penduduk')}}">
                                <i class="fas fa-file-alt menu-icon"></i>
                                <span class="menu-title">Penduduk Keluar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login/penduduk')}}">
                                <i class="fas fa-file-alt menu-icon"></i>
                                <span class="menu-title">Laporan Kelahiran</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login/penduduk')}}">
                                <i class="fas fa-file-alt menu-icon"></i>
                                <span class="menu-title">Laporan Kematian</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login/penduduk')}}">
                                <i class="fas fa-file-alt menu-icon" style="font-size:14px;"></i>
                                <span class="menu-title">Aspirasi Anda</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- plugins:js -->
    <script src="{{asset('user/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('user/assets/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('user/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('user/assets/vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('user/assets/vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('user/assets/vendors/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('user/assets/vendors/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{asset('user/assets/vendors/flot/jquery.flot.stack.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('user/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('user/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('user/assets/js/misc.js')}}"></script>
    <script src="{{asset('user/assets/js/settings.js')}}"></script>
    <script src="{{asset('user/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('user/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
</body>
</html>
