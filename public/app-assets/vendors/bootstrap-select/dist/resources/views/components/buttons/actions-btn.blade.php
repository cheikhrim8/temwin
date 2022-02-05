@php
     $bs = (env("BS")) ? env("BS") : 3;
@endphp

@switch($bs)
    @case('3')
    <a {{ $attributes->merge(['class' => 'btn btn-default actions-btn']) }}   data-toggle="tooltip" data-placement="top">
       {{ $slot }}
    </a>
    @break
    @case('4')
    <a {{ $attributes->merge(['class' => 'btn btn-sm btn-dark']) }}   data-toggle="tooltip" data-placement="top">
        {{ $slot }}
    </a>
    @break
@endswitch
