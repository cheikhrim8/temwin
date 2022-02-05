<div class="row">
    @php
        $lib=trans('text_me.lib');
    @endphp
    <div class="col-md-12">
        <fieldset @if(!Auth::user()->hasAccess(8,2) )  disabled="true" @endif>
            <form class="" action="{{ url('actes/edit') }}" method="post">
                {{ csrf_field() }}
                <div class="form-row">

                    {{-- <div class="col-md-6 form-group">
                         <label for="libelle_ar" >{{ trans('text.libelle_ar') }} <span class="required_field" data-toggle="tooltip" data-placement="right" title="{{ trans('text.champ_obligatoire') }}">*</span></label>
                         <input type="" class="form-control" name="libelle_ar" value="{{ $acte->libelle_ar }}">
                     </div>--}}
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <label for="modele">{{ trans('text_me.actes_modeles') }} <span class="required_field"
                                                                                               data-toggle="tooltip"
                                                                                               data-placement="right"
                                                                                               title="{{ trans('text.champ_obligatoire') }}">*</span></label>
                                <select class="selectpicker form-control" disabled="true">
                                    <option>{{ $acte->modeles_acte->$lib }}</option>
                                </select>
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-md-6 form-group">
                                        <label for="last_code">@lang("text.numero")</label>
                                        <input name="last_code" class="form-control" readonly type="text"
                                               value="{{ $acte->code }}"/>
                                    </div>
                                    @foreach($modles_actes as $element)

                                        @if($element->type==1)
                                            @php
                                                $elem_tab =  \App\Models\ModelesActesItem::where('modeles_acte_id',$element->modeles_acte_id)->where('parent',$element->id)->get();
                                               $lignes = \App\Models\ActesLigne::where(['acte_id'=>$acte->id,"parent"=>$element->id])->get();
                                            @endphp
                                            @if($elem_tab)
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <table class="table table-bordered" id="rows_add">
                                                                <thead>
                                                                <tr>
                                                                    @foreach($elem_tab as $el_table)
                                                                        <th scope="col">{{  $el_table->$content_value }}</th>
                                                                    @endforeach
                                                                    <th scope="col" width="10px">
                                                                        <button type="button"
                                                                                onclick="add_rows_element(this,{{ $element->id }})"
                                                                                class="btn btn-primary btn-sm">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </th>
                                                                </tr>
                                                                </thead>
                                                                <tbody id="th_body">
                                                                @foreach($lignes as $ligne)
                                                                    <tr>
                                                                        @foreach($elem_tab as $ele)
                                                                            <td>
                                                                                @php
                                                                                    $value_ele = \App\Models\ActesValue::where(["acte_id"=>$acte->id,'modeles_actes_item_id'=>$ele->id,'actes_ligne_id'=>$ligne->id])->first();
                                                                                    $rep_ele = ($value_ele) ? $value_ele->	value :'';
                                                                                @endphp
                                                                                @switch($ele->type_content)
                                                                                    @case(1)
                                                                                    <input name="ele_{{$ele->id}}[]"
                                                                                           class="form-control"
                                                                                           type="text"
                                                                                           value="{{ $rep_ele }}"/>
                                                                                    @break
                                                                                    @case(2)
                                                                                    <input name="ele_{{$ele->id}}[]"
                                                                                           class="form-control"
                                                                                           type="number"
                                                                                           value="{{ $rep_ele }}"/>
                                                                                    @break
                                                                                    @case(3)

                                                                                    <select name="ele_{{$ele->id}}[]"
                                                                                            class="form-control selectpicker">
                                                                                        @foreach($element->ref_choix_itemes_actes as $choix)
                                                                                            @if($rep_ele == $choix->id)
                                                                                                <option
                                                                                                    value="{{ $choix->id }}"
                                                                                                    selected>{{ $choix->$lib }}</option>
                                                                                            @else
                                                                                                <option
                                                                                                    value="{{ $choix->id }}">{{ $choix->$lib }}</option>
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </select>
                                                                                    @break
                                                                                    @case(4)
                                                                                    <input name="ele_{{$ele->id}}[]"
                                                                                           class="form-control"
                                                                                           type="date"
                                                                                           value="{{$rep_ele }}"/>
                                                                                    @break
                                                                                    @case(5)
                                                                                    <input name="{{$ele->id}}"
                                                                                           class="form-control"
                                                                                           type="text"
                                                                                           disabled
                                                                                           value=" {{ $rep_ele }}"/>
                                                                                    @break
                                                                                @endswitch
                                                                            </td>
                                                                        @endforeach
                                                                        <td width="10%">
                                                                            <button type="button" class="btn btn-danger"
                                                                                    onclick="remove_tr(this)"
                                                                                    id="remove"><i
                                                                                    class="fas fa-trash"></i></button>
                                                                        </td>

                                                                    </tr>
                                                                @endforeach
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
                                                    <label
                                                        for="{{$element->$content_value}}">{{$element->$content_value}}</label>
                                                    <input name="{{$element->id}}" class="form-control" type="text"
                                                           value="{{ $element->value_acte($acte->id) }}"/>
                                                </div>
                                                @break
                                                @case(2)
                                                <div class="col-md-6 form-group">
                                                    <label
                                                        for="{{$element->$content_value}}">{{$element->$content_value}}</label>
                                                    <input name="{{$element->id}}" class="form-control" type="number"
                                                           value="{{ $element->value_acte($acte->id) }}"/>
                                                </div>
                                                @break
                                                @case(3)
                                                <div class="col-md-6 form-group">
                                                    <label
                                                        for="{{$element->$content_value}}">{{$element->$content_value}}</label>
                                                    <select name="{{$element->id}}" class="form-control selectpicker">
                                                        @foreach($element->ref_choix_itemes_actes as $choix)
                                                            @if($element->value_acte($acte->id) == $choix->id)
                                                                <option value="{{ $choix->id }}"
                                                                        selected>{{ $choix->$lib }}</option>
                                                            @else
                                                                <option
                                                                    value="{{ $choix->id }}">{{ $choix->$lib }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @break
                                                @case(4)
                                                <div class="col-md-6 form-group">
                                                    <label
                                                        for="{{$element->$content_value}}">{{$element->$content_value}}</label>
                                                    <input name="{{$element->id}}" class="form-control" type="date"
                                                           value="{{ $element->value_acte($acte->id) }}"/>
                                                </div>
                                                @break
                                                @case(5)
                                                <div class="col-md-6 form-group">
                                                    <label for="{{$element->$content_value}}">{{$element->$content_value}}</label>
                                                    <input name="{{$element->id}}" class="form-control" type="text"
                                                           disabled value=" "/>
                                                </div>
                                                @break
                                            @endswitch

                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--}}<input type="submit">--}}
                    <input type="hidden" value="{{ $acte->id }}" name="id">
                    <input type="hidden" value="{{ $acte->modeles_acte_id }}" name="modele">
                    <div class="col-md-12 form-row">
                        <div class="col-md-8 form-group text-left">
                            (<span class="required_field" data-toggle="tooltip" data-placement="right"
                                   title="{{ trans('text.champ_obligatoire') }}">*</span>)
                            : {{ trans('text_me.msg_asterique') }}
                        </div>
                        <div class="col-md-4 form-group text-right">
                            <button class="btn btn-success btn-icon-split" onclick="saveform(this)" container="tab1">
                        <span class="icon text-white-50">
                            <i class="main-icon fas fa-save"></i>
                            <span class="spinner-border spinner-border-sm" style="display:none" role="status"
                                  aria-hidden="true"></span>
                            <i class="answers-well-saved text-success fa fa-check" style="display:none"
                               aria-hidden="true"></i>
                        </span>
                                <span class="text">{{ trans('text.enregistrer') }}</span>
                            </button>
                        </div>
                        <div id="form-errors" class="col-md-12 text-left"></div>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
</div>
