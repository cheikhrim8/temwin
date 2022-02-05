@extends('layout')
@php
    $lib=trans('text_me.lib');
@endphp
@section('subnav')
    @include('courriers.navigation')
@stop
@section('page-content')
    <x-page-header>
        <x-slot name="title">
            <i class="fa fa-file-archive"></i> {{ trans('text_archive.courriers') }}
        </x-slot>
        @if(Auth::user()->hasAccess([7],2))
            <x-buttons.btn-add onclick="openFormAddInModal('courriers')">
                @lang("text_archive.add_courriers")
            </x-buttons.btn-add>
        @endif
    </x-page-header>

    <div class="row">
        <div class="col-lg-12" id="page">
            @if (session('successmsg') || session('errormsg'))
                <div class="alert alert-{{(session('successmsg'))?'success':'danger'}} alert-dismissible">
                    {{ session('successmsg') }}{{ session('errormsg') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
            @endif
            <div class="card shadow">
                <div class="card-header">
                    <form role="form" id="formst" name="formst" class="" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6 col-md-4 filters-item">
                                <div class="filters-label">
                                    <i class="fa fa-filter"></i> {{ trans('text_archive.type_courrier') }}
                                </div>
                                <div class="filters-input">
                                    <select class="form-control selectpicker " name="type" id="type_cour"
                                            data-live-search="true" onchange="filterCourriers(this)">
                                        <option value="all">{{ trans('text_hb.all') }}</option>
                                        <option value="1">{{ trans('text_archive.entrant') }}</option>
                                        <option value="2">{{ trans('text_archive.sortant') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 filters-item">
                                <div class="filters-label">
                                    <i class="fa fa-filter"></i> {{ trans('text_archive.service') }}
                                </div>
                                <div class="filters-input">
                                    <select class="form-control selectpicker " name="service" id="service"
                                            data-live-search="true" onchange="filterCourriers(this)">
                                        <option value="all">{{ trans('text_hb.all') }}</option>
                                        @foreach($services as $services)
                                            <option value="{{ $services->id }}">{{ $services->$lib }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 filters-item">
                                <div class="filters-label">
                                    <i class="fa fa-filter"></i> {{ trans('text_archive.origine') }}
                                </div>
                                <div class="filters-input">
                                    <select class="form-control selectpicker " name="origine" id="origine"
                                            data-live-search="true" onchange="filterCourriers(this)">
                                        <option value="all">{{ trans('text_hb.all') }}</option>
                                        @foreach($origines as $origine)
                                            <option value="{{ $origine->id }}">{{ $origine->$lib }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 filters-item">
                                <div class="filters-label">
                                    <i class="fa fa-filter"></i> {{ trans('text_archive.date_du') }}
                                </div>
                                <div class="filters-input">
                                    <input class="form-control" type="date" id="date_debut"
                                           onchange="filterCourriers(this)" value="{{ $date_min }}" name="date_debut">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 filters-item">
                                <div class="filters-label">
                                    <i class="fa fa-filter"></i> {{ trans('text_archive.au') }}
                                </div>
                                <div class="filters-input">
                                    <input class="form-control" type="date" id="date_fin"
                                           onchange="filterCourriers(this)" value="{{date('Y-m-d')}}" name="date_fin">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 filters-item">
                                <div class="filters-label">
                                    <i class="fa fa-filter"></i> {{ trans('text_archive.nivea_importance') }}
                                </div>
                                <div class="filters-input">
                                    <select class="form-control selectpicker " name="niveau" id="niveau"
                                            data-live-search="true" onchange="filterCourriers(this)">
                                        <option value="all">{{ trans('text_hb.all') }}</option>
                                        @foreach($niv_impotances as $niv_impotance)
                                            <option value="{{ $niv_impotance->id }}">{{ $niv_impotance->$lib }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group float-right mt-1">
                            <button type="button" onclick="getObjectPDF('courriers/export_pdf')"
                                    class="mr-1 btn btn-sm btn-info float-right"><i
                                    class="fas fa-file-pdf"></i> {{ trans('text_archive.export_pdf') }} </button>
                            <button type="button" onclick="getObjectPDF('courriers/export_excel')"
                                    class="btn btn-sm btn-primary float-right mr-1"><i
                                    class="fas fa-file-excel"></i> {{ trans('text_archive.export_excel') }} </button>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="clearfix"></div>
                    <hr>
                    <div id="resultat_msg"></div>
                    <div class="table-responsive table table-bordered">
                        <table id="datatableshow" link="{{url("courriers/getDT/all/all/all/all/$date_min/$date_max")}}"
                               colonnes="id,code,titre,type,date_transaction,service.{{$lib}},actions"
                        >
                            <thead>
                            <tr>
                                <th width="30px"></th>
                                <th>{{ trans('text.code') }}</th>
                                <th>{{ trans('text_archive.titre') }}</th>
                                <th>{{ trans('text.type') }}</th>
                                <th>{{ trans('text.date') }}</th>
                                <th>{{ trans('text_archive.service') }}</th>
                                <th width="80px">{{ trans('text.actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
