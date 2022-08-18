<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CCR - @yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('assets/feather/feather.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('assets/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assets/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <!-- evo calendar -->
  <link rel="stylesheet" href="{{ asset('assets/evo-calendar/css/evo-calendar.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/evo-calendar/css/evo-calendar.orange-coral.min.css')}}">
  <!-- end evo -->
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        {{-- <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/logo.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a> --}}
        <a href="#" class="navbar-brand brand-logo mr-5">CCR</a>
        <a class="navbar-brand brand-logo-mini" href="">CCR</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item d-none d-md-block h3 font-weight-light mt-2">
            INFORMATION CCR
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
              <span class="d-none d-sm-block" id="clock"></span>
            </li>
          </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item {{ str_contains(Route::currentRouteName(), 'dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard')}}">
                    <i class="ti-dashboard menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ str_contains(Route::currentRouteName(), 'block') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('block.add')}}">
                    <i class="ti-pencil-alt menu-icon"></i>
                    <span class="menu-title">Block</span>
                </a>
            </li>
            <li class="nav-item {{ str_contains(Route::currentRouteName(), 'crank') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('crank.add')}}">
                    <i class="ti-pencil-alt menu-icon"></i>
                    <span class="menu-title">Crank</span>
                </a>
            </li>
            <li class="nav-item {{ str_contains(Route::currentRouteName(), 'head') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('head.add')}}">
                    <i class="ti-pencil-alt menu-icon"></i>
                    <span class="menu-title">Head</span>
                </a>
            </li>
            <li class="nav-item {{ str_contains(Route::currentRouteName(), 'cam') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('cam.add')}}">
                    <i class="ti-pencil-alt menu-icon"></i>
                    <span class="menu-title">Cam</span>
                </a>
            </li>
            <li class="nav-item {{ str_contains(Route::currentRouteName(), 'assy') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('assy.add')}}">
                    <i class="ti-pencil-alt menu-icon"></i>
                    <span class="menu-title">Assy</span>
                </a>
            </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
                @yield('content')
            </div>
          </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('assets/script/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('assets/script/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('assets/script/dataTables.bootstrap4.js')}}"></script>
  <script src="{{ asset('assets/script/dataTables.select.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('assets/script/off-canvas.js')}}"></script>
  <script src="{{ asset('assets/script/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('assets/script/template.js')}}"></script>
  <!-- endinject -->

  <!-- moment js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js"></script>

  <!-- evo calendar -->
  <script src="{{ asset('assets/evo-calendar/js/evo-calendar.min.js')}}"></script>
  <!-- end evo -->

  @yield('script')

  <script>
    $(document).ready(function(){
      window.setInterval(function () {
          $('#clock').html(moment().format('dddd Do MMMM YYYY - HH:mm:ss'))
      }, 1000);
    });
  </script>
</body>

</html>

