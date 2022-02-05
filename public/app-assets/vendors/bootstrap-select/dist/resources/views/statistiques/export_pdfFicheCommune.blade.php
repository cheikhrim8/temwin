
{{--@if($type !='' || $secteur !='' || $localite !='')--}}
    {{--<div class="filter">
        <table width="100%" >
            <tr><td>{{trans('text_me.filtrage')}} :</td></tr>
            <tr>
                <td>
                    --}}{{--@if($type !='')
                        type : {{ $type  }}
                    @endif
                    @if($secteur !='')
                        secteur : {{$secteur}}
                    @endif
                    @if($localite !='')
                        localite : {{$localite}}
                    @endif--}}{{--
                </td>
            </tr>
        </table>
    </div>--}}
{{--@endif--}}


    <div>
        {!!$data!!}
    </div>

