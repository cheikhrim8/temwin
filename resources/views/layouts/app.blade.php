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
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/material-icons/material-icons.css">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/material-vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/ui/prism.min.css">
    <!-- END: Vendor CSS-->

@if(app()->isLocale('ar'))
    <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/material.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/components.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/bootstrap-extended.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/material-extended.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/material-colors.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/custom-rtl.css">
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css"
              href="../../../app-assets/css-rtl/core/menu/menu-types/material-vertical-menu-modern.css">
        <link rel="stylesheet" type="text/css"
              href="../../../app-assets/css-rtl/plugins/forms/validation/form-validation.css">
        <link rel="stylesheet" type="text/css"
              href="../../../app-assets/css-rtl/plugins/pickers/daterange/daterange.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
@else
    <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/material.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/material-extended.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/material-colors.css">
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css"
              href="../../../app-assets/css/core/menu/menu-types/material-vertical-menu-modern.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
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
<nav
    class="header-navbar navbar-expand-lg
    navbar navbar-with-menu navbar-without-dd-arrow fixed-top
   @auth() navbar-semi-dark @endauth navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-lg-none mr-auto"><a
                        class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                            class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="index.html">
                        <img class="brand-logo"
                             alt="modern admin logo" src="../../../app-assets/images/logo/logo.png">
                        <h3 class="brand-text">Modern</h3>
                    </a>
                </li>
                @auth()
                    <li class="nav-item d-none d-lg-block nav-toggle">
                        <a class="nav-link modern-nav-toggle pr-0"
                           data-toggle="collapse">
                            <i class="toggle-icon ft-toggle-right font-medium-3 white"
                               data-ticon="ft-toggle-right"></i></a>
                    </li>
                @endauth
                <li class="nav-item d-lg-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse"
                       data-target="#navbar-mobile"><i
                            class="material-icons mt-50">more_vert</i>
                    </a>
                </li>
            </ul>
        </div>
        @auth()
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item"><a class="nav-link nav-link-expand" href="#">
                                <i class="ficon ft-maximize"></i></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item">
                            <a class="dropdown-toggle nav-link"
                               id="dropdown-flag" href="#"
                               data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="flag-icon {{app()->isLocale('ar') ? 'flag-icon-sa' : 'flag-icon-fr'}} "></i>
                                <span class="selected-language">
                                    {{app()->isLocale('ar') ? 'العربية' : 'Francais'}}
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                                <a class="dropdown-item" href="{{route('lang', 'ar')}}" data-language="en">
                                    <i class="flag-icon flag-icon-sa"></i> العربية</a>
                                <a class="dropdown-item" href="{{route('lang', 'fr')}}" data-language="fr">
                                    <i class="flag-icon flag-icon-fr"></i> Francais</a>
                            </div>
                        </li>
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#"
                               data-toggle="dropdown">
                                <span class="mr-1 user-name text-bold-700">{{auth()->user()->name}}</span>
                                <span class="avatar avatar-online">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-19.png"
                                     alt="avatar"><i></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="user-profile.html">
                                    <i class="material-icons">person_outline</i>{{__('text.profile')}}</a>
                                <a class="dropdown-item" href="app-kanban.html">
                                    <i class="material-icons">playlist_add_check</i> Todo</a>
                                <a class="dropdown-item" href="user-cards.html">
                                    <i class="material-icons">content_paste</i> Task</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"
                                   onclick="event.preventDefault(); document.getElementById('logout').submit()"
                                >
                                    <i class="material-icons">power_settings_new</i> {{__('auth.logout')}}</a>
                                <form class="d-none" action="{{route('logout')}}" method="post" id="logout">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        @else
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav ml-auto float-right">
                        <li class="dropdown dropdown-language nav-item">
                            <a class="nav-link" href="{{route('login')}}">
                                <i class="flag-icon flag-icon-gb"></i>
                                <span class="selected-language">{{__('login')}}</span>
                            </a>
                        </li>
                        <li class="dropdown dropdown-language nav-item">
                            <a class="nav-link" href="{{route('register')}}">
                                <i class="flag-icon flag-icon-gb"></i>
                                <span class="selected-language">{{__('register')}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        @endauth

    </div>
</nav>
<!-- END: Header-->

<!-- BEGIN: Main Menu-->
@auth()
    <div class="main-menu material-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="index.html"><i class="material-icons">settings_input_svideo</i><span
                            class="menu-title" data-i18n="Dashboard">Dashboard</span><span
                            class="badge badge badge-info badge-pill float-right mr-2">3</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="dashboard-ecommerce.html"><i class="material-icons"></i><span
                                    data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                        <li><a class="menu-item" href="dashboard-crypto.html"><i class="material-icons"></i><span
                                    data-i18n="Crypto">Crypto</span></a>
                        </li>
                        <li><a class="menu-item" href="dashboard-sales.html"><i class="material-icons"></i><span
                                    data-i18n="Sales">Sales</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="material-icons">tv</i><span class="menu-title"
                                                                                        data-i18n="Templates">Templates</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="Vertical">Vertical</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="../material-vertical-menu-template"><i
                                            class="material-icons"></i><span
                                            data-i18n="Classic Menu">Classic Menu</span></a>
                                </li>
                                <li><a class="menu-item" href="../material-vertical-compact-menu-template"><i
                                            class="material-icons"></i><span
                                            data-i18n="Compact Menu">Compact Menu</span></a>
                                </li>
                                <li><a class="menu-item" href="../material-vertical-collapsed-menu-template"><i
                                            class="material-icons"></i><span
                                            data-i18n="Collapsed Menu">Collapsed Menu</span></a>
                                </li>
                                <li><a class="menu-item" href="../material-vertical-modern-menu-template"><i
                                            class="material-icons"></i><span>Modern Menu</span></a>
                                </li>
                                <li><a class="menu-item" href="../material-vertical-content-menu-template"><i
                                            class="material-icons"></i><span
                                            data-i18n="Content Menu">Content Menu</span></a>
                                </li>
                                <li><a class="menu-item" href="../material-vertical-overlay-menu-template"><i
                                            class="material-icons"></i><span
                                            data-i18n="Overlay Menu">Overlay Menu</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#"><i class="material-icons"></i><span data-i18n="Horizontal">Horizontal</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="../material-horizontal-menu-template"><i
                                            class="material-icons"></i><span data-i18n="Classic">Classic</span></a>
                                </li>
                                <li><a class="menu-item" href="../material-horizontal-menu-template-nav"><i
                                            class="material-icons"></i><span
                                            data-i18n="Full Width">Full Width</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
@endauth
<!-- END: Main Menu-->
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
            {{ app()->getLocale() }}
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
<script src="../../../app-assets/vendors/js/material-vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../../../app-assets/js/core/app-menu.js"></script>
<script src="../../../app-assets/js/core/app.js"></script>
<!-- END: Theme JS-->

</body>
<!-- END: Body-->

</html>
