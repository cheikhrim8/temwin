<!DOCTYPE html>
<html class="loading" lang="{{ app()->getLocale() }}"
      data-textdirection="{{app()->getLocale() == 'ar' ? 'rtl' : 'ltr'}}">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Cheikh Ahemed Aloueimin">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name')}}</title>
    <link rel="apple-touch-icon" href="{{asset("app-assets/images/ico/apple-icon-120.png")}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("app-assets/images/ico/favicon.ico")}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/fonts/material-icons/material-icons.css")}}">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/css/material-vendors.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/css/ui/prism.min.css")}}">
    <!-- END: Vendor CSS-->

@if(app()->isLocale('ar'))
    <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css-rtl/material.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css-rtl/components.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css-rtl/bootstrap-extended.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css-rtl/material-extended.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css-rtl/material-colors.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css-rtl/custom-rtl.css")}}">
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css"
              href="{{asset("app-assets/css-rtl/core/menu/menu-types/material-vertical-menu-modern.css")}}">
        <link rel="stylesheet" type="text/css"
              href="{{asset("app-assets/css-rtl/plugins/forms/validation/form-validation.css")}}">
        <link rel="stylesheet" type="text/css"
              href="{{asset("app-assets/css-rtl/plugins/pickers/daterange/daterange.css")}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset("assets/css/style-rtl.css")}}">
        <!-- END: Custom CSS-->
@else
    <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/material.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/components.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/bootstrap-extended.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/material-extended.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/material-colors.css")}}">
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css"
              href="{{asset("app-assets/css/core/menu/menu-types/material-vertical-menu-modern.css")}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset("assets/css/style.css")}}">
        <!-- END: Custom CSS-->
    @endif
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout @auth() vertical-menu-modern @endauth
    material-vertical-layout material-layout 2-columns
    fixed-navbar"
      data-open="click"
      data-menu="vertical-menu-modern"
      data-col="2-columns">

<!-- BEGIN: Header-->
@include('layouts.navigation._navbar')
<!-- END: Header-->

<!-- BEGIN: Main Menu-->
@auth()
    @include('layouts.navigation._sidebar')
@endauth
<!-- END: Main Menu-->
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
{{--            {{ app()->getLocale() }}--}}
            @yield('content')
        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
            class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2"
                                                                                     href="https://1.envato.market/modern_admin"
                                                                                     target="_blank">PIXINVENT</a></span><span
            class="float-md-right d-none d-lg-block">Hand-crafted & Made with<i class="ft-heart pink"></i><span
                id="scroll-top"></span></span></p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{asset("app-assets/vendors/js/material-vendors.min.js")}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset("app-assets/js/core/app-menu.js")}}"></script>
<script src="{{asset("app-assets/js/core/app.js")}}"></script>
<!-- END: Theme JS-->

</body>
<!-- END: Body-->

</html>
