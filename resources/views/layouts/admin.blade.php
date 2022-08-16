<!DOCTYPE html>
<!--This is a starter template page. Use this page to start your new project from scratch. This page gets rid of all links and provides the needed markup only.-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">@yield('title')</a>
        </li>
      </ul>
  
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
  
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-2">
      <!-- Brand Logo -->
      <div class="sidebar">
          <a href="#" class="brand-link">
              <span class="brand-text font-weight-light">Admin</span>
          </a>
      </div>
  
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          </div>
        </div>
  
        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>
  
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{ url('admin/dashboard') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('agenda') }}" class="nav-link">
                <i class="nav-icon fas fa-folder"></i>
                <p>Agenda</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('guru') }}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>Guru</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('kelas') }}" class="nav-link">
                <i class="nav-icon fas fa-user-friends"></i>
                <p>Kelas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>{{ __('Logout') }}</p>
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
          </ul>
        </nav>
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
          <div class="row">
            @yield('content')
          </div>
        </div>
      </div>
      <!-- /.content -->
  
    </div>
  </div>

<!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{asset('plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>