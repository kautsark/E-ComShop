{{-- @extends('index_homeadm') --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }} || @yield('title') </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('AdminAutoBot/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('AdminAutoBot/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminAutoBot/dist/css/adminlte.min.css')}}">
  <!-- DataTable -->
  <link rel="stylesheet" href="{{ asset('AdminAutoBot/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
</head>
<body class="hold-transition white-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  
  @includeIf('admin.topbar_admin')

  @includeIf('admin.sidebar_admin')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h4 class="m-0">@yield('title')</h4>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                @section('badge')
                <li class="breadcrumb-item">
                    <a href="{{ url('/dashboard') }}">Home</a></li>
                @show
                <li class="breadcrumb-item active">@yield('title')</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    <section class="content">
        @yield('content')
    </section>
    <!-- /.content -->

    {{-- @yield('breadcrumb') --}}
    <!-- /.content-header -->

    <!-- Main content -->

    {{-- @includeIf('admin.content_admin') --}}
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  {{-- <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside> --}}
  <!-- /.control-sidebar -->

  @includeIf('admin.footer_admin')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('AdminAutoBot/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ asset('AdminAutoBot/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('AdminAutoBot/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminAutoBot/dist/js/adminlte.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('AdminAutoBot/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('AdminAutoBot/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('AdminAutoBot/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('AdminAutoBot/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('AdminAutoBot/plugins/chart.js/Chart.min.js') }}"></script>

<script src="{{ asset('AdminAutoBot/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('AdminAutoBot/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
{{-- <script src="{{ asset('AdminAutoBot/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script> --}}
{{-- <script src="{{ asset('AdminAutoBot/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script> --}}
{{-- <script src="{{ asset('AdminAutoBot/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script> --}}
{{-- <script src="{{ asset('AdminAutoBot/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script> --}}

<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('AdminAutoBot/dist/js/demo.js') }}"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{ asset('AdminAutoBot/dist/js/pages/dashboard2.js') }}"></script> --}}

<script src="{{ asset('js/validator.min.js') }}"></script>


@stack('scripts')


</body>
</html>
