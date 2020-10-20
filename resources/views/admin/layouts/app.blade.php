<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('administrator/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('administrator/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('administrator/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('administrator/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('administrator/plugins/summernote/summernote-bs4.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('administrator/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('administrator/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('administrator/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('administrator/app.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i>
            Keluar
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text ml-4">Admin RT.003 RW.03</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column pb-5" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <!--Dashboard-->
          <li class="nav-item mt-3">
            <a href="{{ url('admin') }}" class="nav-link">
              <i class="fas fa-tachometer-alt mr-3"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <!--Data Penduduk-->
          <div class="nav-header ml-2">Data Penduduk</div>
          <li class="nav-item">
            <a href="{{ url('admin/penduduk-tetap') }}" class="nav-link">
              <i class="fas fa-user mr-3"></i>
              <p>
                Penduduk Tetap
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/penduduk-sementara') }}" class="nav-link">
              <i class="far fa-user mr-3"></i>
              <p>
                Penduduk Sementara
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/keluarga') }}" class="nav-link">
              <i class="fas fa-users mr-3"></i>
              <p>
                Data Keluarga
              </p>
            </a>
          </li>
          <!--End Data Penduduk-->

          <!--Pelayanan-->
          <div class="nav-header">Pelayanan</div>
          <li class="nav-item">
            <a href="{{ url('admin/pelayanan') }}" class="nav-link">
              <i class="fas fa-file-alt mr-3"></i>
              <p>
                Surat Pengantar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/penduduk-masuk') }}" class="nav-link">
              <i class="fas fa-sign-in-alt mr-3"></i>
              <p>
                Penduduk Masuk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/penduduk-keluar') }}" class="nav-link">
              <i class="fas fa-sign-out-alt mr-3"></i>
              <p>
                Penduduk Keluar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/kelahiran-penduduk') }}" class="nav-link">
              <i class="fas fa-baby mr-3"></i>
              <p>
                Kelahiran Penduduk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/kematian-penduduk') }}" class="nav-link">
              <i class="fas fa-book-dead mr-3"></i>
              <p>
                Kematian Penduduk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/edit-data') }}" class="nav-link">
              <i class="fas fa-pencil-alt mr-3"></i>
              <p>
                Perubahan Data
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/aspirasi') }}" class="nav-link">
              <i class="fas fa-headset mr-3"></i>
              <p>
                Data Aspirasi
              </p>
            </a>
          </li>

          <!--Pelayanan-->
          <div class="nav-header">Laporan</div>
          <li class="nav-item">
            <a href="{{ url('admin/laporan-pelayanan') }}" class="nav-link">
              <i class="fas fa-book-open mr-3"></i>
              <p>
                Lap Pelayanan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/laporan-penduduk-masuk') }}" class="nav-link">
              <i class="fas fa-book-open mr-3"></i>
              <p>
                Lap Penduduk Masuk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/laporan-penduduk-keluar') }}" class="nav-link">
              <i class="fas fa-book-open mr-3"></i>
              <p>
                Lap Penduduk Keluar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/laporan-kelahiran-penduduk') }}" class="nav-link">
              <i class="fas fa-book-open mr-3"></i>
              <p>
                Lap Kelahiran Penduduk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/laporan-kematian-penduduk') }}" class="nav-link">
              <i class="fas fa-book-open mr-3"></i>
              <p>
                Lap Kematian Penduduk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/laporan-data-aspirasi') }}" class="nav-link">
              <i class="fas fa-book-open mr-3"></i>
              <p>
                Lap Data Aspirasi
              </p>
            </a>
          </li>

          <div class="nav-header">Data Master</div>
          <li class="nav-item">
            <a href="{{ url('admin/pengumuman') }}" class="nav-link">
              <i class="fas fa-info mr-3"></i>
              <p>
                Buat Pengumuman
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/keperluan') }}" class="nav-link">
              <i class="fas fa-info mr-3"></i>
              <p>
                Data Keperluan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/alasan') }}" class="nav-link">
              <i class="fas fa-info mr-3"></i>
              <p>
                Alasan Sementara
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/kategori-aspirasi') }}" class="nav-link">
              <i class="fas fa-info mr-3"></i>
              <p>
                Kategori Aspirasi
              </p>
            </a>
          </li>

          <div class="nav-header">Management Administrator</div>
          <li class="nav-item">
            <a href="{{ url('admin/administrator') }}" class="nav-link">
              <i class="fas fa-user mr-3"></i>
              <p>
                Kelola Administrator
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('title')</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        @yield('content')
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!--Logout-->
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
          <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </div>
      </div>
    </div>
  </div>
<!--Logout-->

<!-- jQuery -->
<script src="{{asset('administrator/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('administrator/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('administrator/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('administrator/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('administrator/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('administrator/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('administrator/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- Select 2 -->
<script src="{{asset('administrator/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('administrator/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('administrator/dist/js/demo.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $("#example2").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });

  $('.select2').select2();

  $(".alert").delay(2000).slideUp(200, function() {
    $(this).alert('close');
  });

  $(function () {
    $('.textarea').summernote()
  })
</script>
</body>
</html>
