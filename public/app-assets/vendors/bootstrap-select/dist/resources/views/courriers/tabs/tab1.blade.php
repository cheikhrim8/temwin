<div class="col-md-12">
    @php
        $lib=trans('text_me.lib');
    @endphp
    <div class="row">
        <div class="col-md-12">
            <form class="" action="{{ url('courriers/edit') }}" method="post">
                {{ csrf_field() }}
                <fieldset @if(!Auth::user()->hasAccess([7],2)) disabled="disabled" @endif >
                    <div class="form-row">
                    <div class="col-md-6 form-group">
                        <label for="titre">{{ trans('text_archive.titre') }} <span class="required_field" data-toggle="tooltip" data-placement="right" title="{{ trans('text.champ_obligatoire') }}">*</span></label>
                        <input id="titre" name="titre" value="{{ $courrier->titre }}" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="secteur_id">{{ trans('text.type') }} <span class="required_field" data-toggle="tooltip" data-placement="right" title="{{ trans('text.champ_obligatoire') }}">*</span></label>
                        <select id="type" disabled name="type" onchange="changeType_courrier()"  class="form-control selectpicker bordered"  title="{{ trans('text_archive.selectionner') }}" data-live-search="true">
                            <option value="1" @if($courrier->type == 1) selected="selected" @endif>{{ trans('text_archive.entrant') }}</option>
                            <option value="2" @if($courrier->type == 2) selected="selected" @endif>{{ trans('text_archive.sortant') }}</option>
                        </select>
                    </div>
                    <input type="hidden" id="type" name="type" value="{{ $courrier->type }}" class="form-control">

                    <div class="col-md-6 form-group">
                        <label for="secteur_id" id="orig">@if($courrier->type == 1) {{ trans('text_archive.origine') }} @else {{ trans('text_archive.destination') }} @endif <span class="required_field" data-toggle="tooltip" data-placement="right" title="{{ trans('text.champ_obligatoire') }}">*</span></label>
                        <select id="ar_origine_id" name="ar_origine_id" class="form-control selectpicker bordered"  title="{{ trans('text_archive.selectionner') }}" data-live-search="true">
                            @foreach($origines as $origine)
                                <option value="{{$origine->id}}" @if($origine->id==$courrier->ar_origine_id) selected="selected" @endif>{{$origine->$lib}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="secteur_id">{{ trans('text_archive.service') }} <span class="required_field" data-toggle="tooltip" data-placement="right" title="{{ trans('text.champ_obligatoire') }}">*</span></label>
                        <select id="service_id" name="service_id" class="form-control selectpicker bordered"  title="{{ trans('text_archive.selectionner') }}" data-live-search="true">
                            @foreach($services as $service)
                                <option value="{{$service->id}}" @if($service->id==$courrier->service_id) selected="selected" @endif>{{$service->$lib}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="libelle_ar">{{ trans('text.date') }} <span class="required_field" data-toggle="tooltip" data-placement="right" title="{{ trans('text.champ_obligatoire') }}">*</span> </label>
                        <input type="date" value="{{ $courrier->date_transaction }}" id="date_transaction" name="date_transaction" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="secteur_id">{{ trans('text_archive.nivea_importance') }} <span class="required_field" data-toggle="tooltip" data-placement="right" title="{{ trans('text.champ_obligatoire') }}">*</span></label>
                        <select id="ref_niveau_importances" name="ref_niveau_importances" class="form-control selectpicker bordered"  title="{{ trans('text_archive.selectionner') }}" data-live-search="true">
                            @foreach($niv_impotances as $niv_impotance)
                                <option value="{{$niv_impotance->id}}" @if($niv_impotance->id==$courrier->ref_niveau_importances) selected="selected" @endif>{{$niv_impotance->$lib}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="description">{{ trans('text_archive.description') }} </label>
                        <textarea id="desc" name="description" class="form-control" > {{ $courrier->description }}</textarea>
                    </div>
                    </div>
                    <input type="hidden" value="{{ $courrier->id }}" name="id">
                </fieldset>
                <div class="col-md-12 text-right">
                    <!-- @if($document)
                        <a class=" btn btn-warning shadow-sm" target="_blank" href="{{url("$document->emplacement/$document->id.$document->extension") }}" ><i class="fa fa-fw fa-file" ></i> {{ trans('text_archive.voir_fichier') }}</a>
                    @endif -->

                        <button @if(!Auth::user()->hasAccess([7],2)) disabled="disabled" @endif  class="btn btn-success btn-icon-split" onclick="saveform(this)" container="tab1">
                            <span class="icon text-white-50">
                                <i class="main-icon fas fa-save"></i>
                                <span class="spinner-border spinner-border-sm" style="display:none" role="status" aria-hidden="true"></span>
                                <i class="answers-well-saved text-success fa fa-check" style="display:none" aria-hidden="true"></i>
                            </span>
                            <span class="text">{{ trans('text.enregistrer') }}</span>
                        </button>

                    <div id="form-errors" class="text-left"></div>
                </div>

                <!-- <input type="submit" value="OK"/> -->
            </form>
        </div>
    </div>
</div>
