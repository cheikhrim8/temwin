@php
    $content_value = trans('text.content_value');
    $lib = trans('text.lib');

@endphp
<div class="form-row">
    <div class="col-md-6 form-group">
        <label for="last_code">@lang("text.numero")</label>
        <input name="last_code" class="form-control" readonly type="text" value="{{ $last_code }}"/>
    </div>

    @foreach($elements as $element)

        @if($element->type==1)
            @php
                $elem_tab =  \App\Models\ModelesActesItem::where('modeles_acte_id',$element->modeles_acte_id)->where('parent',$element->id)->get();
            @endphp
            @if($elem_tab)
                <div class="col-md-12 mb-3">
                    <div class="card mr-0 p-0 ">
                        <div class="card-body  mr-0 p-0 ">
                            <table class="table table-bordered" id="rows_add">
                                <thead>
                                <tr>
                                    @foreach($elem_tab as $el_table)
                                        <th scope="col">{{  $el_table->$content_value }}</th>
                                    @endforeach

                                    <th scope="col" width="10px">
                                        <button type="button"
                                                onclick="add_rows_element(this,{{ $element->id }},'th_body1')"
                                                class="btn btn-primary btn-sm">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </th>
                                </tr>
                                </thead>
                                <tbody id="th_body1">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endif
        @elseif(in_array($element->parent,$parents)==false)
            @switch($element->type_content)
                @case(1)
                <div class="col-md-6 form-group">
                    <label for="{{$element->$content_value}}">{{$element->$content_value}}</label>
                    <input name="{{$element->id}}" class="form-control" type="text" value=""/>
                </div>
                @break
                @case(2)
                <div class="col-md-6 form-group">
                    <label for="{{$element->$content_value}}">{{$element->$content_value}}</label>
                    <input name="{{$element->id}}" class="form-control" type="number" value=""/>
                </div>
                @break
                @case(3)
                <div class="col-md-6 form-group">
                    <label for="{{$element->$content_value}}">{{$element->$content_value}}</label>
                    <select name="{{$element->id}}" class="form-control selectpicker">
                        @if($element->ref_choix_itemes_actes->count() > 1)
                            <option value=""></option>
                        @endif
                        @foreach($element->ref_choix_itemes_actes as $choix)
                            <option value="{{ $choix->id }}">{{ $choix->$lib }}</option>
                        @endforeach
                    </select>
                </div>
                @break
                @case(4)
                <div class="col-md-6 form-group">
                    <label for="{{$element->$content_value}}">{{$element->$content_value}}</label>
                    <input name="{{$element->id}}" class="form-control" type="date" value=" "/>
                </div>
                @break
                @case(5)
                <div class="col-md-6 form-group">
                    <label for="{{$element->$content_value}}">{{$element->$content_value}}</label>
                    <input name="{{$element->id}}" class="form-control" type="text" disabled value=" "/>
                </div>
                @break
            @endswitch
        @endif


    @endforeach
</div>
