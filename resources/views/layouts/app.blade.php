<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SIBONGKAR PT BPU </title>

  <!-- DataTables -->
  <link rel="stylesheet" href="/theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/theme/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  @include('layouts.css')
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="/" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">@yield('title')</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="/" class="brand-link">
        {{-- <img src="" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">Selamat Datang</span>
      </a>
      <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="/theme/dist/img/profile.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{Auth::user()->name}}</a>
          </div>
        </div>
        @if (Auth::user()->roles == 'superadmin')
        @include('layouts.menu_superadmin')
        @elseif (Auth::user()->roles == 'customer')
        @include('layouts.menu_customer')
        @else
        @include('layouts.menu_foreman')
        @endif


      </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          @yield('content')
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>

    <footer class="main-footer">
      <div class="float-right d-none d-sm-inline">
      </div>
      <strong></strong>
    </footer>
  </div>

  @include('layouts.js')

  <!-- DataTables  & Plugins -->
  <script src="/theme/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="/theme/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="/theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="/theme/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script>
    $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  </script>
</body>

</html>