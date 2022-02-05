@extends('layout_without_menu')
@section('page-menu')
    @php
    $lib=trans('text.lib');
    @endphp
  @if(Auth::check() && Auth::user()->hasAccess([1]) && session()->get('module') && session()->get('module')->id == 8)
  <ul class="navbar-nav {{session()->get('module')->bg_color}} sidebar p-0 sidebar-dark accordion" id="mainMenu">

      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
       <span class="">
           <img src="{{URL::asset('img/kakhel_logo.png')}}" height="60" alt=""> &nbsp;&nbsp;
                        <span style="font-size: 1rem">
                            @if(session()->get('module') ) {{session()->get('module')->$lib}} @else SI @endif
                              </span>
                    </span>
      </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link @if(App::isLocale('ar')) text-right @endif" href="{{url('dashboard')}}">
        <i class="fas fa-fw fa-list"></i>
        <span>{{trans("text_menu.menu_principal")}}</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    @switch(session()->get('module')->id)
      @case(1) @include('menu.finances') @break
      @case(2) @include('menu.patrimoines1') @break
      @case(3) @include('menu.employes') @break
      @case(8) @include('menu.admin') @break
      @case(6) @include('menu.archives') @break
      @case(9) @include('menu.quartiers') @break
    @endswitch
    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  </ul>
  @endif
@endsection

