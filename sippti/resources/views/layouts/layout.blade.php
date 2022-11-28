@section('head')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PLN | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminLTE/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  @show

  <style>
    .main-sidebar { background: linear-gradient(#ffffff, #006483), #00485e; }

    .nav-pills .nav-treeview .nav-item  .nav-link:not(.active) {
      color: black !important;
    }

    .nav-pills .nav-treeview .nav-link.active {
      color: white !important;
      background-color: #17a2b8 !important;
    }

    

  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-user-circle" aria-hidden="true"></i> {{Auth::user()->name}} &nbsp; &nbsp; &nbsp; &nbsp;|
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('logout')}}" class="nav-link"><i class="nav-icon fas fa-sign-out-alt">&nbsp;</i> Logout</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-cyan elevation-4">

      <!-- Main Logo -->
      <div class="text-center" style="padding-top:10px">
        <a href="{{route('home')}}">
          <img src="{{asset('img/logoSIPPTI.png')}}" width="50">
        </a>
      </div>
      <hr>
      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
						<li class="nav-item">
							<a href="{{route('home')}}" class="nav-link {{set_active('home')}}">
								<i class="nav-icon fas fa-home"></i>
								<p>Home</p>
							</a>
						</li>
            <li class="nav-item {{set_active(['laptop', 'router', 'server'])}}">
              <a href="#" class="nav-link {{set_active(['laptop', 'router', 'server'])}}">
                <i class="nav-icon fas fa-desktop"></i>
                <p>
                  Data Perangkat
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('laptop')}}" class="nav-link {{set_active('laptop')}}">
                    <i class="fas fa-laptop nav-icon"></i>
                    <p>Laptop</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('router')}}" class="nav-link {{set_active('router')}}">
                    <i class="fas fa-wifi nav-icon"></i>
                    <p>Router</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('server')}}" class="nav-link {{set_active('server')}}">
                    <i class="fas fa-server nav-icon"></i>
                    <p>Server</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item {{set_active('user')}}">
              <a href="{{route('user')}}" class="nav-link {{set_active('user')}}">
                <i class="nav-icon fas fa-user"></i>
                <p>User</p>
              </a>
            </li>
          </ul>
        </nav> <!-- /.sidebar-menu -->
      </div> <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    
      @yield('content')

    </div> <!-- ./content-wrapper -->
  </div> <!-- ./wrapper -->

  @section('script')
  <!-- REQUIRED SCRIPTS -->
	
	<!-- jQuery -->
  <script src="{{asset('adminLTE/plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('adminLTE/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{asset('adminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('adminLTE/dist/js/adminlte.js')}}"></script>
</body>
</html>
@show
  