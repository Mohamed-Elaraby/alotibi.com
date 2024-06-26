<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="robots" content="noindex,nofollow">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
{{--    <link rel="stylesheet" href="{{ asset('assets/bower_components/Ionicons/css/ionicons.min.css') }}">--}}
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/skins/_all-skins.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dist/css/main.css') }}">
    <!-- Start Favicon -->

    <!-- End Favicon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.6/sweetalert2.min.css" integrity="sha512-jtQXcnq6H9BVx+dOsdudNCZmNe2hBMqcPpnVgeZcV9L3615F4+QMQebbWW9TV2otOSk/kQgum0MpWefB3uL3pg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Sweet Alert -->

@if (LaravelLocalization::getCurrentLocale() === 'ar')
    <!-- RTL Files -->
    <link rel="stylesheet" href="{{ asset('assets/dist/rtl/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/rtl/css/AdminLTE.RTL.css') }}">
@endif
@stack('links')

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">--}}
    <style>
        @font-face {
            font-family: myFirstFont;
            src:url({{ asset('assets/dist/fonts/sst-arabic-medium.ttf') }});
        }
        body, html, h1, h2, h3, h4, h5, h6, p
        {
            font-family: myFirstFont !important;
        }
    </style>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <!-- Main Header -->
@include('admin.includes.mainHeader')
<!-- Left side column. contains the logo and sidebar -->
@include('admin.includes.mainSidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
{{--        <section class="content-header">
            <h1>
                Page Header
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>--}}

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->

            @yield('content')

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
@include('admin.includes.mainFooter')

<!-- Control Sidebar -->
@include('admin.includes.controlSidebar')
<!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- Sweet Alert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.6/sweetalert2.min.js" integrity="sha512-DyFdigPSyUbsT1ioYelAc+l6T6s2QB9OZv48jBpr589vTJWRmclLAl1sOZ560bOhwwi9Aewr/VrcPLiTXM5W/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- jQuery 3 -->
<script src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
{{--<script src="{{ asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>--}}
<!-- FastClick -->
{{--<script src="{{ asset('assets/bower_components/fastclick/lib/fastclick.js') }}"></script>--}}
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
{{--<script src="{{ asset('assets/dist/js/demo.js') }}"></script>--}}

@if (LaravelLocalization::getCurrentLocale() === 'ar')
<!-- RTL Js Files -->
<script src="{{ asset('assets/dist/rtl/js/adminlte-rtl.js') }}"></script>
@endif

@stack('scripts')
</body>
</html>
