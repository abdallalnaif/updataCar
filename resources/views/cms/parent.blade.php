<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ __('message.APP_NAME') }} | @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('cms/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('cms/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('cms/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('cms/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('cms/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('cms/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('cms/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('cms/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('cms/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Bootstrap 4 RTL -->
  <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
  <!-- Custom style for RTL -->
  <link rel="stylesheet" href="{{ asset('cms/dist/css/custom.css') }}">
  @yield('styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">{{ __('message.Home') }}</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">{{ __('message.Contact') }}</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto-navbav">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{asset('cms/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{__('message.APP_NAME')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('storage/Image/user/' . Auth::user()->attachments->first()->url) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <h6>" {{ Auth::user()->roles->first()->name }} "</h6></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


@canany(['Index-User','Create-User'])
    

               <li class="nav-header">{{ __('message.User Mangment') }}</li>

               {{-- user --}}
               <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user-tag"></i>
                  <p>
                    {{ __('message.User') }}
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    @can('Index-User')
                    <a href="{{ route('users.index') }}" class="nav-link">
                      <i class="fas fa-list nav-icon"></i>
                      <p>{{ __('message.index') }}</p>
                    </a>
                  </li>
                  @endcan

                  @can('Create-User')
                  <li class="nav-item">
                    <a href="{{ route('users.create') }}" class="nav-link">
                      <i class="fas fa-plus nav-icon"></i>
                      <p>{{ __('message.create') }}</p>
                    </a>
                  </li>
                  @endcan

                </ul>
              </li>

@endcanany

@canany(['Index-Country','Create-Country','Index-City','Create-City','Index-Car','Create-Car'])
               <li class="nav-header">{{ __('message.Content Mangment') }}</li>
               @canany(['Index-Country','Create-Country'])
               <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user-tag"></i>
                  <p>
                    {{ __('message.Country') }}
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    @can('Index-Country')
                  <li class="nav-item">
                    <a href="{{ route('countries.index') }}" class="nav-link">
                      <i class="fas fa-list nav-icon"></i>
                      <p>{{ __('message.index') }}</p>
                    </a>
                  </li>
                  @endcan

                  @can('Create-Country')
                  <li class="nav-item">
                    <a href="{{ route('countries.create') }}" class="nav-link">
                      <i class="fas fa-plus nav-icon"></i>
                      <p>{{ __('message.create') }}</p>
                    </a>
                  </li>
                    @endcan

                </ul>
              </li>
              @endcanany

              @canany(['Index-City','Create-City'])
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user-tag"></i>
                  <p>
                    {{ __('message.City') }}
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    @can('Index-City')
                  <li class="nav-item">
                    <a href="{{ route('cities.index') }}" class="nav-link">
                      <i class="fas fa-list nav-icon"></i>
                      <p>{{ __('message.index') }}</p>
                    </a>
                  </li>
                  @endcan

                  @can('Create-City')
                  <li class="nav-item">
                    <a href="{{ route('cities.create') }}" class="nav-link">
                      <i class="fas fa-plus nav-icon"></i>
                      <p>{{ __('message.create') }}</p>
                    </a>
                  </li>
                @endcan

                </ul>
              </li>
                @endcanany

                @canany(['Index-Car','Create-Car'])
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user-tag"></i>
                  <p>
                    {{ __('message.cars') }}
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    @can('Index-Car')
                  <li class="nav-item">
                    <a href="{{ route('cars.index') }}" class="nav-link">
                      <i class="fas fa-list nav-icon"></i>
                      <p>{{ __('message.index') }}</p>
                    </a>
                  </li>
                  @endcan

                @can('Create-Car')
                  <li class="nav-item">
                    <a href="{{ route('cars.create') }}" class="nav-link">
                      <i class="fas fa-plus nav-icon"></i>
                      <p>{{ __('message.create') }}</p>
                    </a>
                  </li>
                  @endcan
                </ul>
              </li>
              @endcanany
@endcanany
{{--
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user-tag"></i>
                  <p>
                    {{ __('message.Irregularity') }}
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('irregularities.index') }}" class="nav-link">
                      <i class="fas fa-list nav-icon"></i>
                      <p>{{ __('message.index') }}</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('irregularities.create') }}" class="nav-link">
                      <i class="fas fa-plus nav-icon"></i>
                      <p>{{ __('message.create') }}</p>
                    </a>
                  </li>

                </ul>--}}


              </li>


 @canany(['Index-AnotherExpense','Create-AnotherExpense','Index-CatchReceipt','Create-CatchReceipt','Index-Asset','Create-Asset'])
               <li class="nav-header">{{ __('message.Business office') }}</li>
               @canany(['Index-AnotherExpense','Create-AnotherExpense'])               
               <li class="nav-item">
                 <a href="#" class="nav-link">
                   <i class="nav-icon fas fa-city"></i>
                   <p>
                     {{ __('message.Another Expense') }}
                     <i class="fas fa-angle-left right"></i>

                   </p>
                 </a>
                 <ul class="nav nav-treeview">
                    @can('Index-AnotherExpense')
                   <li class="nav-item">
                     <a href="{{ route('anotherexpenses.index') }}" class="nav-link">
                       <i class="fas fa-list nav-icon"></i>

                       <p>{{ __('message.index') }}</p>
                     </a>
                   </li>
                   @endcan

                    @can('Create-AnotherExpense')
                   <li class="nav-item">
                     <a href="{{ route('anotherexpenses.create') }}" class="nav-link">
                       <i class="fas fa-plus nav-icon"></i>

                       <p>{{ __('message.create') }}</p>
                     </a>
                   </li>
                   @endcan

                 </ul>
               </li>

            @endcanany

            @canany(['Index-CatchReceipt','Create-CatchReceipt'])
               <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-city"></i>
                  <p>
                    {{ __('index.catch receipts') }}
                    <i class="fas fa-angle-left right"></i>

                  </p>
                </a>
                <ul class="nav nav-treeview">


                    @can(['Index-CatchReceipt'])
                  <li class="nav-item">
                    <a href="{{ route('catchreceipts.index') }}" class="nav-link">
                      <i class="fas fa-list nav-icon"></i>

                      <p>{{ __('message.index') }}</p>
                    </a>
                  </li>
                    @endcan

                    @canany(['Create-CatchReceipt'])
                  <li class="nav-item">
                    <a href="{{ route('catchreceipts.create') }}" class="nav-link">
                      <i class="fas fa-plus nav-icon"></i>

                      <p>{{ __('message.create') }}</p>
                    </a>
                  </li>

                  @endcan
                </ul>
              </li>
            @endcanany

            @canany(['Index-Asset','Create-Asset'])


              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-city"></i>
                  <p>
                    {{ __('index.assets') }}
                    <i class="fas fa-angle-left right"></i>

                  </p>
                </a>
                <ul class="nav nav-treeview">



                  <li class="nav-item">
                    <a href="{{ route('assets.index') }}" class="nav-link">
                      <i class="fas fa-list nav-icon"></i>

                      <p>{{ __('message.index') }}</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('assets.create') }}" class="nav-link">
                      <i class="fas fa-plus nav-icon"></i>

                      <p>{{ __('message.create') }}</p>
                    </a>
                  </li>

                </ul>
              </li>

              @endcanany
@endcanany

              {{--  --}}
        <li class="nav-header">الاعدادات</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p class="text">الملف الشخصي</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>تسجيل الخروج</p>
            </a>
          </li>

          
          <br><br><br>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield('main-title')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">{{ __('message.Home') }}</a></li>
              <li class="breadcrumb-item active">@yield('sub-title')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>{{ __('message.Copyright') }} &copy; {{now()->year}}-{{now()->year+1}} <a href="#">{{env('APP_NAME')}}</a>.</strong>
   {{__('message.All rights reserved')}}.
    <div class="float-right d-none d-sm-inline-block">
      <b>{{ __('message.Version') }}</b> {{env('APP_VERSION')}}
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('cms/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('cms/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 rtl -->
<script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('cms/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('cms/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('cms/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('cms/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('cms/plugins/jqvmap/maps/jquery.vmap.world.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('cms/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('cms/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('cms/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('cms/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('cms/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('cms/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('cms/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('cms/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('cms/dist/js/demo.js') }}"></script>
<script src="{{ asset('cms/build/js/crud.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

@yield('scripts')
</body>
</html>
