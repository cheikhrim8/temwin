<div class="modal-header">
    <h5 class="modal-title">{{ trans('text_archive.new_courrier') }}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@php
    $lib=trans('text_me.lib');
@endphp
<div class="modal-body">
    <div class="row">
        <div class="col-md-12" id="addForm">
            <form class="" action="{{ url('courriers/add') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                                  
                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <label for="titre">{{ trans('text_archive.titre') }} <span class="required_field" data-toggle="tooltip" data-placement="right" title="{{ trans('text.champ_obligatoire') }}">*</span></label>
                        <input id="titre" name="titre" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="secteur_id">{{ trans('text.type') }} <span class="required_field" data-toggle="tooltip" data-placement="right" title="{{ trans('text.champ_obligatoire') }}">*</span></label>
                        <select id="type" name="type" onchange="changeType_courrier()"  class="form-control selectpicker bordered"  title="{{ trans('text_archive.selectionner') }}" data-live-search="true"> 
                            <option value="1" >{{ trans('text_archive.entrant') }}</option>
                            <option value="2" >{{ trans('text_archive.sortant') }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="secteur_id" id="orig">{{ trans('text_archive.origine') }} <span class="required_field" data-toggle="tooltip" data-placement="right" title="{{ trans('text.champ_obligatoire') }}">*</span></label>
                        <select id="ar_origine_id" name="ar_origine_id" class="form-control selectpicker bordered"  title="{{ trans('text_archive.selectionner') }}" data-live-search="true"> 
                            @foreach($origines as $origine)
                                <option value="{{$origine->id}}" >{{$origine->$lib}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="secteur_id">{{ trans('text_archive.service') }} <span class="required_field" data-toggle="tooltip" data-placement="right" title="{{ trans('text.champ_obligatoire') }}">*</span></label>
                        <select id="service_id" name="service_id" class="form-control selectpicker bordered"  title="{{ trans('text_archive.selectionner') }}" data-live-search="true"> 
                            @foreach($services as $service)
                                <option value="{{$service->id}}" >{{$service->$lib}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="libelle_ar">{{ trans('text.date') }} <span class="required_field" data-toggle="tooltip" data-placement="right" title="{{ trans('text.champ_obligatoire') }}">*</span> </label>
                        <input type="date" value="{{date('Y-m-d')}}" id="date_transaction" name="date_transaction" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="secteur_id">{{ trans('text_archive.nivea_importance') }} <span class="required_field" data-toggle="tooltip" data-placement="right" title="{{ trans('text.champ_obligatoire') }}">*</span></label>
                        <select id="ref_niveau_importances" name="ref_niveau_importances" class="form-control selectpicker bordered"  title="{{ trans('text_archive.selectionner') }}" data-live-search="true"> 
                            @foreach($niv_impotances as $niv_impotance)
                                <option value="{{$niv_impotance->id}}" >{{$niv_impotance->$lib}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="fichier">{{ trans('text_archive.fichier') }} <span class="required_field" data-toggle="tooltip" data-placement="right" title="{{ trans('text.champ_obligatoire') }}">*</span> </label>
                        <input type="file" id="fichier"  name="fichier[]" multiple class="form-control" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="description">{{ trans('text_archive.description') }} </label>
                        <textarea id="desc" name="description" class="form-control" ></textarea>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="text-right">
                            <button class="btn btn-success btn-icon-split" onclick="addObject(this,'courriers')"
                                    container="addForm">
                                <span class="icon text-white-50">
                                    <i class="main-icon fas fa-save"></i>
                                    <span class="spinner-border spinner-border-sm" style="display:none" role="status"
                                          aria-hidden="true"></span>
                                    <i class="answers-well-saved text-success fa fa-check" style="display:none"
                                       aria-hidden="true"></i>
                                </span>
                                <span class="text">{{ trans('text.ajouter') }}</span>
                            </button>
                            <div id="form-errors" class="text-left"></div>
                        </div>
                    </div>

                     <!-- <input type="submit" value="Valider" /> -->
            </form>
        </div>
    </div>
</div>

    @section('module-js')
        <script type="text/javascript">
            
            let origined = 'Origiiigig';

        </script>
        
            
    @endsection
