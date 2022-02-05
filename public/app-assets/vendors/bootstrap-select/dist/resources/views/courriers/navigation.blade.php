@php
    $uri = \Illuminate\Support\Facades\Route::getCurrentRoute()->uri;
@endphp
<x-subnav.nav>
    <x-subnav.li
        class=" {{ $uri == 'courriers' ? session()->get('module')->subnav_active : ''}}">
        <a class="nav-link" href="{{ url('courriers') }}"> {{ trans('text_archive.courriers') }}</a>
    </x-subnav.li>
    <x-subnav.li class="{{ $uri == 'archives' ? session()->get('module')->subnav_active : ''}}">
        <a class="nav-link" href="{{ url('archives') }}">{{ trans('text_archive.archives') }}</a>
    </x-subnav.li>
</x-subnav.nav>


