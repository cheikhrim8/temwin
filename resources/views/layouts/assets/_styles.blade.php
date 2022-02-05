{{-- Icons--}}
<link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/fonts/material-icons/material-icons.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/fonts/fontawesome/css/all.min.css')}}">

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/vendors.min.css')}}">

{{-- Bootstrap-select --}}
<link rel="stylesheet" type="text/css"
      href="{{URL::asset('app-assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css')}}">

{{-- Select2--}}
<link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/forms/selects/select2.min.css')}}">

{{-- Jquery-ui --}}
<link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/jquery-ui/jquery-ui.min.css')}}">

{{-- Jquery-confirm --}}
<link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/jquery-confirm/dist/jquery-confirm.min.css')}}">

{{-- Datatable and datatable-responsive --}}
<link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/datatables-responsive/dataTables.responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/datatables/dataTables.bootstrap4.min.css')}}">
<!-- END: Vendor CSS-->

@if(App::isLocale('ar'))

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css-rtl/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css-rtl/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css-rtl/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css-rtl/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css-rtl/custom-rtl.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.min.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/style-rtl.css')}}">
    <!-- END: Custom CSS-->
@else
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/components.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/style.css')}}">
    <!-- END: Custom CSS-->

@endif
