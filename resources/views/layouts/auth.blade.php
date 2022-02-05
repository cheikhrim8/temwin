<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>{{env('APP_NAME')}}</title>
    <link rel="apple-touch-icon" href="{{URL::asset('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('app-assets/images/ico/favicon.ico')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700"
        rel="stylesheet">

 {{--    Styles --}}
    @include('layouts.assets._styles')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout fixed-navbar">

<!-- BEGIN: Header-->
@include('menu.layouts.navbar._without-menu')
<!-- END: Header-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
            @yield('page-content')
        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

{{-- Models --}}

@include('layouts._modal')

{{--END: Model--}}

<!-- BEGIN: Footer-->
@include('layouts.footer._footer')
<!-- END: Footer-->

{{--Scripts--}}
@include('layouts.assets._scripts')
</body>
<!-- END: Body-->

</html>
