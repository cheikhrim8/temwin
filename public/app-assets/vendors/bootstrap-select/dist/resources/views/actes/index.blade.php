@extends('layout')
@section('page-title')
    {{ trans('text_me.modeles') }}
@endsection
@php
    $lib=trans('text.lib');
@endphp

@section('page-content')
    <x-page-header>
        <x-slot name="title">
            <i class="fa fa-copy"></i>  {{ trans('text_me.modeles') }}
        </x-slot>

        <x-buttons.btn-add onclick="openFormAddInModal('actes')">
            @lang("text_me.add_modele")
        </x-buttons.btn-add>
    </x-page-header>

    <div class="row">
        <div class="col-lg-12">
            @if (session('successmsg') || session('errormsg'))
                <div class="alert alert-{{(session('successmsg'))?'success':'danger'}} alert-dismissible">
                    {{ session('successmsg') }}{{ session('errormsg') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
            @endif
            <div class="card shadow">
                <div class="card-header">
                    <div class="form-row">
                        <div class="col-md-4 filters-item">
                            <div class="filters-label">
                                <i class="fa fa-filter"></i> {{ trans('text_me.actes_modeles') }}
                            </div>
                            <div class="filters-input">
                                <select id="modele"  name="modele" data-live-search="true" class="selectpicker form-control" onchange="filterActeModele(this)"  >
                                    <option value="all" >{{ trans('text_me.tous') }}</option>
                                    @foreach($modeles as $modele)
                                        <option value="{{ $modele->id }}">{{ $modele->$lib }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 filters-item">
                            <div class="filters-label">
                                <i class="fa fa-filter"></i> {{ trans('text_me.Du') }}
                            </div>
                            <div class="filters-input">
                                <input id="date1"  name="date1"  class="form-control" type="date" onchange="filterActeModeleDate(this)" >
                            </div>
                        </div>
                        <div class="col-md-4 filters-item">
                            <div class="filters-label">
                                <i class="fa fa-filter"></i> {{ trans('text_me.Au') }}
                            </div>
                            <div class="filters-input">
                                <input id="date2"  name="date2"  class="form-control" type="date" onchange="filterActeModeleDate(this)" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body" >
                    <div class="table-responsive">
                        <form role="form"  id="formspdf" name="formspdf" class=""  method="get" >
                        <table id="datatableshow" selected="" link="{{url("actes/getDT/all/all/all")}}" colonnes="id,code,modeles_acte.{{$lib}},actions" class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th width="30px"></th>
                                    <th>{{ trans('text_me.numero') }}</th>
                                    <th>{{ trans('text_me.actes_modeles') }}</th>
                                    <th width="80px">{{ trans('text.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
