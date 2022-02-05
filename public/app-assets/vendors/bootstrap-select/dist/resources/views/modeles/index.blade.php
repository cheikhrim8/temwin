@extends('layout')
@section('page-title')
    {{ trans('text_me.gestion_modeles_actes') }}
@endsection
@php
    $lib=trans('text.li');
@endphp
@section('page-content')

    <x-page-header>
        <x-slot name="title">
            <i class="fa fa-copy"></i>  {{ trans('text_me.gestion_modeles_actes') }}
        </x-slot>

        <x-buttons.btn-add onclick="openFormAddInModal('modeles')">
            @lang("text_me.add_modele_acte")
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
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatableshow" selected="" link="{{url("modeles/getDT")}}" colonnes="id,titre{{$lib}},actions" class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th width="30px"></th>
                                    <th>{{ trans('text.libelle') }}</th>
                                    <th width="80px">{{ trans('text.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
