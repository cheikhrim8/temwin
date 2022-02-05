@php
    $bs = (env("BS")) ? env("BS") :3;
@endphp
@switch($bs)
    @case('3')
    <ul class="nav nav-tabs main-tabs" role="tablist">
        @foreach($tabs as $tab_title => $tab_link)
            <li role="presentation" @if($loop->first) class="active" @endif>
                <a link="{{$tab_link}}" href="#tab{{$loop->iteration}}" aria-controls="tab{{$loop->iteration}}"
                   role="tab" id="link{{$loop->iteration}}" data-toggle="tab">
                    {!!$tab_title!!}
                </a>
            </li>
        @endforeach
    </ul>
    <div class="tab-content">
        @foreach($tabs as $tab)
            <div role="tabpanel" class="tab-pane fade @if($loop->first) in active @endif"
                 id="tab{{$loop->iteration}}">
            </div>
        @endforeach
    </div>
    @break
    @case('4')
    <nav>
        <div class="nav nav-tabs main-tabs" id="nav-tab_tab" role="tablist">
            @foreach($tabs as $tab_title => $tab_link)
                @php
                    $it = (isset($numbre)) ? $numbre[$loop->iteration] : $loop->iteration;
                @endphp
                <li class="nav-item">
                    <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">Tab 1</a>
                </li>
                <a link="{{$tab_link}}" href="#tab{{$it}}" @if($loop->first) aria-selected="true"
                   class="nav-item nav-link active" @else class="nav-item nav-link" aria-selected="false"
                   @endif id="link{{$it}}" aria-controls="tab{{$it}}" role="tab"
                   data-toggle="tab"> {!!$tab_title!!} </a>
            @endforeach
        </div>
    </nav>
    <div class="tab-content" style="z-index: 10000!important;">
        @foreach($tabs as $tab)
            @php
                $it = (isset($numbre)) ? $numbre[$loop->iteration] : $loop->iteration;
            @endphp
            <div role="tabpanel" class="tab-pane fade @if($loop->first) show active @endif"
                 aria-labelledby="link{{$it}}" id="tab{{$it}}"></div>
        @endforeach
    </div>
    @break
    @default
    @break
@endswitch


