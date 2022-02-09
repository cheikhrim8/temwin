@php
    $lib = trans('text.lib');
@endphp

@extends('layouts.admin')

@section('page-content')

    <x-page-header>
        <x-slot name="title">
            <i class="fa fa-chart-area"></i> {{ __('menu.menu management') }}
        </x-slot>
        <x-buttons.btn-add onclick="openFormAddInModal('menus')">
            {{ __("menu.add menu item")}}
        </x-buttons.btn-add>
    </x-page-header>
    <x-card>

        <x-table.table
            id="datatableshow"
            link="{{url('menus/getDT/all')}}"
            colonnes="id,libelle,parent_id,link,actions"
            class="table-hover w-100">
            <thead>
            <tr>
                <x-table.th>#ID</x-table.th>
                <x-table.th> {{__('text.libelle')}}</x-table.th>
                <x-table.th> {{__('menu.parent')}}</x-table.th>
                <x-table.th> {{__('menu.url')}}</x-table.th>
                <x-table.th width="160px"> {{__('text.actions')}} </x-table.th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </x-table.table>

    </x-card>
@endsection
