@php
    $bs = (env("BS")) ? env("BS") :4;
@endphp

@switch($bs)
    @case('3')
    <button {{ $attributes->merge(['class' => 'btn btn-success btn-icon-split']) }} >
        <span class="icon text-white-50">
            <i class="main-icon fas fa-save"></i>
            <span class="spinner-border spinner-border-sm" style="display:none"
                  role="status" aria-hidden="true"></span>
            <i class="answers-well-saved text-success fa fa-check" style="display:none"
               aria-hidden="true"></i>
        </span>
        <span class="text">{{ $slot }}</span>
    </button>
    @break
    @case('4')
    <button {{ $attributes->merge(['class' => 'btn btn-success btn-icon-split']) }} >
        <span class="icon text-white-50">
            <i class="main-icon fas fa-save"></i>
            <span class="spinner-border spinner-border-sm" style="display:none" role="status"
                  aria-hidden="true"></span>
                <i class="answers-well-saved text-success fa fa-check" style="display:none"
                   aria-hidden="true"></i>
        </span>
        <span class="text">{{ $slot }}</span>
    </button>
    @break
@endswitch


