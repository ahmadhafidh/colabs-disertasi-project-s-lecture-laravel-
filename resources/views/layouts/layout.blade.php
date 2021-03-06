<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
  <title>Adminmart Template - The Ultimate Multipurpose admin template</title>
  <!-- Custom CSS -->
  <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

  <style>
    th,
    tr {
      text-align: center;
      vertical-align: middle;
    }
  </style>
</head>

<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6">
      <nav class="navbar top-navbar navbar-expand-md">
        <div class="navbar-header" data-logobg="skin6">
          <!-- This is for the sidebar toggle which is visible on mobile only -->
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
              class="ti-menu ti-close"></i></a>
          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <div class="navbar-brand">
            <!-- Logo icon -->
            <a href="index.html">
              <b class="logo-icon">
                <!-- Dark Logo icon -->
                <img src="{{ asset('images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                <!-- Light Logo icon -->
                <img src="{{ asset('images/logo-icon.png') }}" alt="homepage" class="light-logo" />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text">
                <!-- dark Logo text -->
                <img src="{{ asset('images/logo-text.png') }}" alt="homepage" class="dark-logo" />
                <!-- Light Logo text -->
                <img src="{{ asset('images/logo-light-text.png') }}" class="light-logo" alt="homepage" />
              </span>
            </a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Toggle which is visible on mobile only -->
          <!-- ============================================================== -->
          <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
            data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
          </ul>
          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-right">
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <img src="{{ asset('images/profile-pic.jpg') }}" alt="user" class="rounded-circle" width="40">
                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                    class="text-dark">{{ Auth::user()->name }}</span>
                  <i data-feather="chevron-down" class="svg-icon"></i></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                    data-feather="power" class="svg-icon mr-2 ml-1"></i>
                  Logout</a>
              </div>
            </li>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
          </ul>
        </div>
      </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin6">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav">
            <li class="sidebar-item"> <a class="sidebar-link" href="{{ url('/') }}" aria-expanded="false"><i
                  data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
            <li class="list-divider"></li>
            <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>
            <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('datas') }}" aria-expanded="false"><i
                  data-feather="list" class="feather-icon"></i><span class="hide-menu">Data List
                </span></a>
            </li>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('users') }}" aria-expanded="false"><i
                  data-feather="users" class="feather-icon"></i><span class="hide-menu">Users</span></a></li>
            <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('logout') }}" aria-expanded="false"
                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                  data-feather="log-out" class="feather-icon"></i><span class="hide-menu">Logout</span></a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-7 align-self-center">
            {{-- <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning
              {{ Auth::user()->name }}!</h3> --}}
            <div class="d-flex align-items-center">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                  <li class="breadcrumb-item"><a href="">Dashboard</a>
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="col-5 align-self-center">
            <div class="customize-input float-right">
              {{ \Carbon\Carbon::now()->format('d-m-Y H:i:s') }}
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        <div class="row bg-light p-3">
          @yield('content')
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      <footer class="footer text-center text-muted">
        All Rights Reserved by Adminmart. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
      </footer>
      <!-- ============================================================== -->
      <!-- End footer -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- apps -->
  <!-- apps -->
  <script src="{{ asset('js/app-style-switcher.min.js') }}"></script>
  <script src="{{ asset('js/feather.min.js') }}"></script>
  <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
  <script src="{{ asset('js/sidebarmenu.min.js') }}"></script>
  <!--Custom JavaScript -->
  <script src="{{ asset('js/custom.min.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>