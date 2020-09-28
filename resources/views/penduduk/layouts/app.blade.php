<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title')</title>
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
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_horizontal-navbar.html -->
      <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
          <div class="container">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo pt-3" href="index.html">
                <h4 class="d-block font-weight-bold">Sisduk </span>
                <span class="font-12 d-block text-secondary">RT.003 RW.03 Sawah baru </span>
              </a>
              <a class="navbar-brand brand-logo-mini" href="index.html">
                <h4 class="d-block font-weight-bold">Sisduk </span>
                <span class="font-12 d-block text-secondary">RT.003 RW.03 Sawah baru </span>
              </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link nav-link-account" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <div class="nav-profile-img">
                      <i class="mdi mdi-account mr-2 text-primary"></i>
                    </div>
                    <div class="nav-profile-text">
                      <p class="text-black font-weight-semibold m-0">{{ Auth::user()->name }}</p>
                    </div>
                  </a>
                  <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                      <i class="mdi mdi-logout mr-2 text-primary"></i> Keluar
                    </a>
                  </div>
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
                  <a class="nav-link nav-link-active" href="index.html">
                    <i class="mdi mdi-view-grid menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/forms/basic_elements.html">
                    <i class="fas fa-file-alt menu-icon"></i>
                    <span class="menu-title">Surat Pengantar</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/icons/mdi.html">
                    <i class="fas fa-file-alt menu-icon"></i>
                    <span class="menu-title">Penduduk Masuk</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/charts/chartjs.html">
                    <i class="fas fa-file-alt menu-icon"></i>
                    <span class="menu-title">Penduduk Keluar</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/tables/basic-table.html">
                    <i class="fas fa-file-alt menu-icon"></i>
                    <span class="menu-title">Laporan Kelahiran</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/tables/basic-table.html">
                    <i class="fas fa-file-alt menu-icon"></i>
                    <span class="menu-title">Laporan Kematian</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/tables/basic-table.html">
                    <i class="fas fa-file-alt menu-icon" style="font-size:14px;"></i>
                    <span class="menu-title">Aspirasi Anda</span>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper pt-4">
            @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          {{-- <footer class="footer">
            <div class="container">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.bootstrapdash.com/" target="_blank">Sisduk RT.003 RW.03 Sawah Baru</a></span>
              </div>
            </div>
          </footer> --}}
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Apakah anda yakin akan keluar ?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{{ url('penduduk/logout') }}">Keluar</a>
            {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form> --}}
          </div>
        </div>
      </div>
    </div>
    <!-- container-scroller -->
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