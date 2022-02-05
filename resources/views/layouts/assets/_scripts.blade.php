<script type="text/javascript">
    var racine = '{{url("/")}}/';
    var msg_chargement = '{{ trans("message_erreur.chargement") }}';
    var erreur_req = "{{ trans('message_erreur.request_error') }}";
    var erreur_validation = "{{ trans('message_erreur.validate_error') }}";
    var champs_obigatoire_st = "{{ trans("message_erreur.champs_obligatoire_st") }}";
    var prametre_st = "{{ trans("message_erreur.prametre_st") }}";
    var msg_erreur = "{{ trans("message_erreur.msg_erreur") }}";
    var origine = "{{ trans("text_archive.origine") }}";
    var destination = "{{ trans("text_archive.destination") }}";
    var lang = '{{app()->getLocale()}}';
</script>

<!-- BEGIN: Vendor JS-->
<script src="{{URL::asset('app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

{{-- Datatable and datatable-responsive --}}
<script src="{{URL::asset('app-assets/vendors/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('app-assets/vendors/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('app-assets/vendors/datatables-responsive/dataTables.responsive.min.js')}}"></script>

{{-- Jquery-ui --}}
<script src="{{URL::asset('app-assets/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{URL::asset('app-assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>

{{-- Jquery-confirm --}}
<script src="{{URL::asset('app-assets/vendors/jquery-confirm/dist/jquery-confirm.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{URL::asset('app-assets/js/core/app-menu.js')}}"></script>
<script src="{{URL::asset('app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<script src="{{URL::asset('assets/js/init.js')}}"></script>

@stack('js')
