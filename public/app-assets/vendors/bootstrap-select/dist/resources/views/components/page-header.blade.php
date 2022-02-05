@php
$bs = (env("BS")) ? env("BS") :3
@endphp

    @switch(env('BS'))
        @case('3')
        <div  style="padding-top: 25px; padding-bottom: 15px;" {{ $attributes->merge(['class' => 'row /*breadcrumb*/']) }}>
            @if(isset($title)) <div class="col-sm-6"><h4 class="header">{{ $title }}</h4></div> @endif
            <div class="col-sm-6">
                <div class="d-flex justify-content-end">
                    {{ $slot }}
                </div>
            </div>
        </div>
        @break
        @case('4')
        <div  style="padding-top: 25px; padding-bottom: 15px;" {{ $attributes->merge(['class' => 'row /*breadcrumb*/']) }}>
            @if(isset($title)) <div class="col-sm-6"><h4 class="header">{{ $title }}</h4></div> @endif
            <div class="col-sm-6">
                <div class="d-flex justify-content-end">
                    {{ $slot }}
                </div>
            </div>
        </div>
        @break
        @default
        @break
    @endswitch



