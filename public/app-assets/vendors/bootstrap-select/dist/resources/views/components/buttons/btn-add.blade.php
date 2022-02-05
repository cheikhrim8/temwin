@php
      $bs= (env("BS")) ? env("BS"): 3;
@endphp
@switch($bs)
    @case('3')
        <a href="#" {{ $attributes->merge(['class' => 'd-none d-sm-inline-block btn btn-sm btn-primary shadow-sm']) }} >
            <i class="fa fa-plus fa-sm text-white-50"></i>
            {{ $slot }}
        </a>
    @break
    @case('4')
        <a href="#" {{ $attributes->merge(['class' => 'btn btn-sm btn-primary shadow-sm']) }} >
            <i class="fas fa-plus fa-sm text-white-50"></i>
            {{ $slot }}
        </a>
    @break
@endswitch






