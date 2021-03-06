<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{env('APP_NAME')}} | @yield("page-title")</title>
    <link rel="icon" type="image/jpg" href="{{ URL::asset('img/Desktop_icon.ico') }}">
    <link href="{{ URL::asset('vendor/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
{{-- <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}"> --}}
<!-- Jquery-ui CSS -->
    <link href="{{ URL::asset('vendor/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
    <!-- Datatables -->
    <link rel="stylesheet" href="{{ URL::asset('vendor/datatables/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/datatables-responsive/dataTables.responsive.css') }}">
    <!-- Bootstrap-select -->
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <!-- JQuery-confirm -->
    <link rel="stylesheet" href="{{ URL::asset('vendor/jquery-confirm/css/jquery-confirm.css') }}">

    <!-- leaflet -->
    <link href="{{  URL::asset('vendor/leaflet/leaflet.css') }}" rel="stylesheet">
    <!-- leaflet label -->
    <!-- Locate -->
    <link href="{{  URL::asset('vendor/leaflet/L.Control.Locate.min.css') }}" rel="stylesheet">
<!-- leaflet.tooltip
    <link href="{{  URL::asset('vendor/leaflet/leaflet.tooltip.css') }}" rel="stylesheet">
-->
<!--
    <link href="{{ URL::asset('css/style_pdf.css') }}" rel="stylesheet">
-->

    <link href="{{ URL::asset('vendor/jstreenew/dist/themes/default/style.css') }}" rel="stylesheet">
    <!-- group layout -->
    <link href="{{  URL::asset('vendor/leaflet/leaflet.groupedlayercontrol.css') }}" rel="stylesheet">
    <!-- wather_map -->
    <link href="{{  URL::asset('vendor/leaflet/leaflet-openweathermap.css') }}" rel="stylesheet">
    <!-- miniMap -->
    <link href="{{  URL::asset('vendor/leaflet/Control.MiniMap.css') }}" rel="stylesheet">

    <!-- font-awesome -->
    <link href="{{  URL::asset('vendor/leaflet/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('vendor/fontawesome-free/css/brands.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('vendor/fontawesome-free/css/solid.min.css') }}" rel="stylesheet" type="text/css">

    <!-- leaflet.awesome-markers -->
    <link href="{{  URL::asset('vendor/leaflet/leaflet.awesome-markers.css') }}" rel="stylesheet">

    <!-- leaflet.position -->
    <link href="{{  URL::asset('vendor/leaflet/L.Control.MousePosition.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{  URL::asset('vendor/leaflet/src/leaflet.draw.css')}}"/>
    <!-- edition -->

    <link rel="stylesheet" href="{{URL::asset('css/subnav.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/module_dropdown.css')}}">

    <!-- end leaflet -->

    <!-- sb-admin-2 -->

@if(App::isLocale('ar'))

    {{--    fonts --}}

    <!-- Bootstrap Core CSS -->
        <link href="{{ URL::asset('vendor/sb-admin-2-rtl/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="{{ URL::asset('vendor/sb-admin-2-rtl/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ URL::asset('vendor/sb-admin-2/css/sb-admin-2.min.css') }}">
        <link href="{{ URL::asset('vendor/sb-admin-2-rtl/dist/css/sb-admin-2.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/portail.css') }}" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <link rel="stylesheet" href="{{URL::asset('css/style_rtl.css')}}">
    @else
        <link rel="stylesheet" href="{{ URL::asset('vendor/sb-admin-2/css/sb-admin-2.min.css') }}">
    @endif
<!-- Fontawsome -->
    <link href="{{ URL::asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('vendor/fontawesome-free/css/brands.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('vendor/fontawesome-free/css/solid.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('vendor/fontawesome-free/css/solid.min.css') }}" rel="stylesheet" type="text/css">
    <!--
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
     -->
    <!-- tagsinput css -->
    <link href="{{ URL::asset('vendor/tagsinput/jquery.tagsinput.min.css') }}" rel="stylesheet" type="text/css">
    <!-- fileinput css -->
    <link href="{{ URL::asset('vendor/bootstrap-fileinput-master/css/fileinput.min.css') }}" rel="stylesheet">
    <!-- file mask css -->
    <link href="{{ URL::asset('vendor/jquery-mask/css/inputmask.css') }}" rel="stylesheet">
    <!-- Style -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/loading.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/portail.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/style_sd.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/style_my.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/style_ah.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/style_me.css') }}" rel="stylesheet" type="text/css">
    @yield("module-css")
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
</head>
<body>
<div id="wrapper">
    @php
        $lib = trans('text.lib');
    @endphp
    @yield('page-menu')
    {{--    @dd(session()->get('module'))--}}
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

            <nav
                class="navbar navbar-expand navbar-dark @if(session()->get('module')) {{session()->get('module')->bg_color}} @else bg-dark @endif topbar static-top shadow">

                <div class="container-fluid justify-content-between align-items-center">
                    <div id="modules-dropdown">
                        <a class="navbar-brand dropdown-toggle no-arrow" href="{{url('/')}}" id="dropdown-menu-modules"
                           type="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>

                        @php
                            $uri = \Illuminate\Support\Facades\Route::getCurrentRoute()->uri;
                        @endphp

                        @if(session()->get('module'))
                            @if(session()->get('module')->lien !='admin/users' && $uri!='dashboard' && $uri!='/')
                                <a class="navbar-brand dropdown-toggle no-arrow" href="{{url('/')}}" id="dropdown-menu-modules"
                                   type="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <span class=""> <img src="{{URL::asset('img/kakhel_logo.png')}}" height="60" alt=""> &nbsp;&nbsp;

                                        <span style="font-size: 1.5rem">
                                             @if(session()->get('module') && $uri !='/'  ) {{session()->get('module')->$lib}} @endif
                                              </span>
                                    </span>

                                </a>&nbsp;&nbsp;
                            @elseif($uri =='/')
                                <a class="navbar-brand pl-1" href="{{url('/')}}">
                                        <span class=""> <img src="{{URL::asset('img/kakhel_logo.png')}}" height="60"
                                                             alt=""> &nbsp;&nbsp;

                                            <span style="font-size: 1.5rem">

                                                  </span>
                                        </span>

                                </a>&nbsp;&nbsp;
                            @elseif($uri =='dashboard')
                                <a class="navbar-brand pl-1" href="{{url('/')}}">
                                    <span class=""> <img src="{{URL::asset('img/kakhel_logo.png')}}" height="60" alt=""> &nbsp;&nbsp;

                                        <span style="font-size: 1.5rem">

                                              </span>
                                    </span>
                                </a>&nbsp;&nbsp;
                             @endif
                        @else
                            <a class="navbar-brand pl-1" href="{{url('/')}}">
                                <span class=""> <img src="{{URL::asset('img/kakhel_logo.png')}}" height="60" alt=""> &nbsp;&nbsp;

                                    <span style="font-size: 1.5rem">

                                          </span>
                                </span>
                            </a>&nbsp;&nbsp;
                        @endif

                        <div class="dropdown-menu shadow-md no-arrow" aria-labelledby="dropdown-menu-modules">
                            <div class="row">
                                @foreach(\App\Models\Module::all() as $module)
                                    <div class="card border-0 bg-transparent col-6 col-sm-4 card-hover
                                        @if(Auth::check() && !Auth::user()->hasAccess($module->sys_groupes_traitement_id)) item-disabled @endif">
                                        <div class="card-body" id="module-{{$module->id}}">
                                            <div class="text-white d-flex flex-column align-items-center">
                                                <img id="image{{$module->id}}"
                                                     class="{{$module->bg_color}} p-2 rounded dgct-icon"
                                                     src="{{url('img/modules/'.$module->id.'.png')}}" width="60"
                                                     height="60" alt="">
                                                @if(Auth::check() && Auth::user()->hasAccess($module->sys_groupes_traitement_id))
                                                    <a href="{{ url('selectModule/'.$module->id) }}"
                                                       @if(!$module->is_externe)
                                                       onclick="$('#image{{$module->id}}').html(loading_content)"
                                                       @endif @if($module->is_externe)
                                                       target="_blank"
                                                       @endif class="btn btn-link {{$module->text_color}} stretched-link">
                                                        <span
                                                            style="color: #333333">{{(App::isLocale('ar')) ? $module->libelle_ar : $module->libelle}}</span>
                                                    </a>
                                                @else
                                                    <span>{{(App::isLocale('ar')) ? $module->libelle_ar : $module->libelle}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <span class="d-flex flex-column justify-content-center align-items-center">
                                    <img height="65" src="{{asset(env('LOGO_COMMUNE'))}}" alt=""/>
                                    {{--}}<span style="font-size: 16px; color: white">{{ (App::isLocale('ar')) ?  \App\Models\Commune::find(env('APP_COMMUNE'))->libelle_ar :
                                        \App\Models\Commune::find(env('APP_COMMUNE'))->libelle }}</span> --}}
                                @if(session()->get('module') && Auth::check() && !Auth::user()->hasAccess(1))
                            <span> {{(App::isLocale('ar')) ? session()->get('module')->libelle_ar : session()->get('module')->libelle}}</span>
                        @endif
                            </span>

                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a href="#" onclick="visualiserFicheComunne()"
                               class=" social-icon nav-link text-white"
                               data-toggle="tooltip"
                               data-placement="bottom" title=""
                               data-original-title="{{ trans('text_me.imprimer_fiche_communal') }}">
                                <i class="fa fa-bar-chart-o"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link"
                               href="{{(App::isLocale('ar')) ? url('/lang/fr') : url('lang/ar') }}">
                            <span
                                class="mx-2 d-none d-lg-inline text-light">
                                {{ (App::isLocale('ar')) ? 'Fran??ais' : '??????????????'}}
                            </span>
                                <i class="fa fa-globe"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span
                                class="mx-2 d-none d-lg-inline text-light">{{ (Auth::check()) ? Auth::user()->name : ''}}</span>
                                <i class="fa fa-user-circle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                 aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{trans('text_ah.deconnexion')}}
                                </a>
                            </div>
                        </li>
                    </ul>

                </div>
            </nav>

            @yield('subnav')

            <div class="container-fluid">
                @yield("page-content")
            </div>
        </div>
        <footer class="sticky-footer bg-light mt-4">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; AMM 2020</span>
                </div>
            </div>
        </footer>
    </div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@foreach (['main','second','third','forth','add','de_tab','de'] as $type_modal)
    <div id="{{$type_modal}}-modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header-body">
                </div>
            </div>
        </div>
    </div>
@endforeach
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('text_ah.confirm_logout')</h5>
                <button class="close @if(App::isLocale('ar')) d-none @endif" type="button" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">??</span>
                </button>
            </div>
            <div class="modal-body">@lang('text_ah.click_to_logout')</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">@lang('text_ah.retourner')</button>
                <a class="btn btn-primary" href="{{ url('logout') }}">
                    <i class="fa fa-sign-out fa-fw"></i> @lang('text_ah.deconnecter')
                </a>
            </div>
        </div>
    </div>
</div>

@if((App::isLocale('ar')))
    <!-- jQuery -->
    <script src="{{ URL::asset('vendor/sb-admin-2-rtl/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('vendor/sb-admin-2-rtl/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/sb-admin-2-rtl/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ URL::asset('vendor/sb-admin-2-rtl/vendor/metisMenu/metisMenu.min.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ URL::asset('vendor/sb-admin-2-rtl/dist/js/sb-admin-2.js') }}"></script>

@else
    <!-- jquery -->
    <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/sb-admin-2/js/sb-admin-2.min.js') }}"></script>
@endif

<!-- jquery-ui-sortable -->
<script src="{{ URL::asset('vendor/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- Popper -->
<script src="{{ URL::asset('vendor/popper/popper.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- jquery-confirm -->
<script src="{{ URL::asset('vendor/jquery-confirm/js/jquery-confirm.js') }}"></script>
<!-- bootstrap Select -->
<script src="{{ URL::asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<!-- DataTables JavaScript -->
<script src="{{ URL::asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables-responsive/dataTables.responsive.min.js') }}"></script>
{{-- <script src="{{ URL::asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script> --}}
{{-- <script src="{{ URL::asset('vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script> --}}
<!-- datepicker  -->
<script src="{{ URL::asset('vendor/datepicker/bootstrap-datepicker.min.js') }}"></script>
<!-- Core plugin JavaScript-->
<script src="{{ URL::asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- Page level plugins -->
<script src="{{ URL::asset('vendor/chart.js/Chart.min.js') }}"></script>
<!-- Custom scripts for all pages-->

<!-- tagsinput -->
<script src="{{ URL::asset('vendor/tagsinput/jquery.tagsinput.min.js') }}"></script>
<!-- jquery mask -->
<script src="{{ URL::asset('vendor/jquery-mask/jquery.mask.js') }}"></script>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
{{--<script src="{{ URL::asset('vendor/jstreenew/dist/jquery.js') }}"></script>
<script src="{{ URL::asset('vendor/jstreenew/dist/jstree.min.js') }}"></script>--}}
{{----}}
<!-- Page level custom scripts -->
{{-- <script src="{{ URL::asset('vendor/sb-admin-2/js/demo/chart-area-demo.js') }}"></script> --}}
{{-- <script src="{{ URL::asset('vendor/sb-admin-2/js/demo/chart-pie-demo.js') }}"></script> --}}

<script src="{{ URL::asset('vendor/jstreenew/dist/jstree.min.js') }}"></script>

<!-- start block leaflet  leaflet -->
<script src="{{ URL::asset('vendor/leaflet/leaflet.js') }}"></script>
<!-- leaflet label -->
<!--<script src="{{ URL::asset('vendor/leaflet/leaflet.label.js') }}"> </script>-->
<!-- easyPrint -->
<script src="{{ URL::asset('vendor/leaflet/leaflet.easyPrint.js') }}"></script>
<!-- Locate -->
<script src="{{ URL::asset('vendor/leaflet/L.Control.Locate.js')}}"></script>
<!-- group layout -->
<script src="{{ URL::asset('vendor/leaflet/leaflet.groupedlayercontrol.js')}}"></script>
<!-- wather_map  -->
<script src="{{ URL::asset('vendor/leaflet/leaflet-openweathermap.js') }}"></script>

<!-- miniMap -->
<script src="{{ URL::asset('vendor/leaflet/Control.MiniMap.js') }}"></script>

<!-- leaflet.awesome-markers  -->
<script src="{{ URL::asset('vendor/leaflet/leaflet.awesome-markers.js') }}"></script>

<!-- leaflet.tooltip -->
<script src="{{ URL::asset('vendor/leaflet/leaflet-pip.js') }}"></script>

<!-- Position -->
<script src="{{ URL::asset('vendor/leaflet/L.Control.MousePosition.js') }}"></script>

<script src="{{ URL::asset('vendor/leaflet/src/Leaflet.draw.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/Leaflet.Draw.Event.js')}}"></script>

<script src="{{ URL::asset('vendor/leaflet/src/edit/handler/Edit.Poly.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/edit/handler/Edit.SimpleShape.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/edit/handler/Edit.Rectangle.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/edit/handler/Edit.Marker.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/edit/handler/Edit.CircleMarker.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/edit/handler/Edit.Circle.js')}}"></script>

<script src="{{ URL::asset('vendor/leaflet/src/draw/handler/Draw.Feature.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/draw/handler/Draw.Polyline.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/draw/handler/Draw.Polygon.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/draw/handler/Draw.SimpleShape.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/draw/handler/Draw.Rectangle.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/draw/handler/Draw.Circle.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/draw/handler/Draw.Marker.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/draw/handler/Draw.CircleMarker.js')}}"></script>

<script src="{{ URL::asset('vendor/leaflet/src/ext/TouchEvents.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/ext/LatLngUtil.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/ext/GeometryUtil.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/ext/LineUtil.Intersect.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/ext/Polyline.Intersect.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/ext/Polygon.Intersect.js')}}"></script>

<script src="{{ URL::asset('vendor/leaflet/src/Control.Draw.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/Tooltip.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/Toolbar.js')}}"></script>

<script src="{{ URL::asset('vendor/leaflet/src/draw/DrawToolbar.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/edit/EditToolbar.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/edit/handler/EditToolbar.Edit.js')}}"></script>
<script src="{{ URL::asset('vendor/leaflet/src/edit/handler/EditToolbar.Delete.js')}}"></script>

<!--<script src="{{ URL::asset('vendor/leaflet/api-google.js')}}" ></script>
    <script src="{{ URL::asset('vendor/leaflet/leaflet-google.js')}}" ></script>-->

<!-- leaflet.tooltip -->
<script src="{{ URL::asset('vendor/leaflet/leaflet.tooltip.js') }}"></script>

<!-- end leaflet -->

<!-- fileinput js -->
<script src="{{ URL::asset('vendor/bootstrap-fileinput-master/js/fileinput.min.js') }}"></script>
<script src="{{ URL::asset('vendor\bootstrap-fileinput-master/js/locales/fr.js') }}"></script>

<!-- Main JS -->
<script src="{{ URL::asset('js/init.js?v=3') }}"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>
<script src="{{ URL::asset('js/my.js') }}"></script>
<script src="{{ URL::asset('js/ah.js') }}"></script>
<script src="{{ URL::asset('js/sd.js') }}"></script>
<script src="{{ URL::asset('js/map.js?v=1') }}"></script>
<script src="{{ URL::asset('js/ged.js') }}"></script>
<script src="{{ URL::asset('js/me.js') }}"></script>
<script src="{{ URL::asset('js/hb.js') }}"></script>
<script src="{{ URL::asset('js/statistique.js') }}"></script>
@yield("module-js")

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<![endif]-->
{{--plugin treeview--}}{{--
<script src="{{ URL::asset('vendor/tree-view-bootstrap4-bstree/dist/js/jquery.bstree.js') }}"></script>--}}

</body>
</html>
