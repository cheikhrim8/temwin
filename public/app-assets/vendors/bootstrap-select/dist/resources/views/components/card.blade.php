@php
     $bs = (env("BS")) ? env("BS") : 3;
@endphp

@switch($bs)
    @case('3')
    <div {{ $attributes->merge(['class' => 'panel panel-default']) }}>
        @if(isset($heading))
            <div class="panel-heading">{{ $heading }}</div> @endif
        <div class="panel-body">
            <div class="row">
                {{ $slot }}
            </div>
        </div>
    </div>
    @break
    @case('4')
    <div {{ $attributes->merge(['class' => 'card shadow']) }}>
        @if(isset($heading))
            <div class="card-header">{{ $heading }}</div> @endif
        <div class="card-body">
            <div class="row">
                {{ $slot }}
            </div>
        </div>
    </div>
    @break
    @default
    @break
@endswitch




