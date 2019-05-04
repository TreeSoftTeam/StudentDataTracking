<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @yield('head')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
</head>
@section('content')
  <body class="fixed-left">
    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <!--   <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i></a>-->
                    <!-- Image Logo here -->
                    <a href="{{ route('home') }}" class="logo">
                        <i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="30" /> </i>
                        <span><img src="assets/images/logo_light.png" height="20" /></span>
                        <!--</a>-->
                </div>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">

                    <div class="container">
                      <a class="navbar-brand" href="http://127.0.0.1:8000">
                            StudentDataTracking
                        </a>
                        <button class="navbar-toggler" aria-expanded="false" aria-controls="navbarSupportedContent" aria-label="Toggle navigation" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                          <span class="navbar-toggler-icon"></span>
                        </button> <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <li class="list-inline-item notification-list">
                        <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                            <i class="dripicons-expand noti-icon"></i>
                              </div>
                            </div>
                        </a>
                    </li>
                  </nav>


        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>

                        <li class="text-muted menu-title">Navigation</li>

                        <li>
                            <a href="{{ route('home') }}" class="waves-effect"><i class="ti-home"></i><span>หน้าหลัก</span></a>
                        </li>

                        <li>
                            <a href="search.html" class="waves-effect"><i class="ti-search"></i>
                                <span>ค้นหาข้อมูลนักศึกษา</span></a>
                        </li>

                        <li>
                            <a href="{{ route('student.index') }}" class="waves-effect"><i class="ti-pencil-alt"></i>
                                <span>จัดการข้อมูลนักศึกษา</span></a>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-layout-media-right-alt"></i>
                                <span>กำหนดข้อมูล</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="course.html">หลักสูตรสาขาคณะ</a></li>
                                <li><a href="visa">ประเภทวีซ่า</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-settings"></i>
                                <span>ตั้งค่าระบบ</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="course.html">ผู้ใช้</a></li>
                                <li><a href="alert.html">การแจ้งเตือน</a></li>
                            </ul>
                        </li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        
          <main class="py-4">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-8">
                  <div class="card">
                  <div class="card-header">Create status</div>
                  <div class="card-body">

      <h3>{{$StatusData->status_name}}</h3>
      <form method="post" action="{{ route('status.update', $StatusData->status_id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <input type="text" name="status_name" class="form-control" placeholder="Enter status_name"/>
            <input type="submit" name="save" class="btn btn-primary" value="save" />
          </div>
      </form>

    </div>
  </div>
  </div>
  </div>
  </div>
  <div class="content-page">
          <!-- Start content -->
          <div class="content">
              <div class="container-fluid">

  @yield('content')

      </div> <!-- content -->

      <footer class="footer text-right">
          &copy; 2019 - 2030. All rights reserved.
      </footer>

  </div>
</div>

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script><!-- Popper for Bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/detect.js') }}"></script>
<script src="{{ asset('assets/js/fastclick.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('assets/js/waves.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
<script src=" {{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>


<!-- jQuery  -->
@yield('bottom')

<script src="{{ asset('assets/js/jquery.core.js') }}"></script>
<script src="{{ asset('assets/js/jquery.app.js') }}"></script>
</main>
</body>
  </html>
