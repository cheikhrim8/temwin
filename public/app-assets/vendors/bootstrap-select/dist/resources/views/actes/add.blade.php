<div class="modal-header">
    <h5 class="modal-title">{{ trans('text_me.new_acte') }}</h5>
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
              <form class="" action="{{ url('actes/add') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <label for="modele" >{{ trans('text_me.actes_modeles') }} <span class="required_field" data-toggle="tooltip" data-placement="right" title="{{ trans('text.champ_obligatoire') }}">*</span></label>
                                    <select class="selectpicker form-control" name="modele" id="modele_acte" onchange="get_elements_acte(this)">
                                        @foreach($modeles as $modele)
                                            <option value="{{ $modele->id }}">{{ $modele->$lib }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="card-body">
                                    <div id="elements_modele">

                                        @include('actes.ajax.getElements',['elements'=>$elements,'last_code'=>$last_code,'parents'=>$parents])
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-12 form-row">
                                <div class="col-md-8 form-group text-left">
                                    (<span class="required_field" data-toggle="tooltip" data-placement="right" title="{{ trans('text.champ_obligatoire') }}">*</span>)
                                    : {{ trans('text_me.msg_asterique') }}
                                </div>
                                <div class="col-md-4 form-group text-right">
                                <button class="btn btn-success btn-icon-split" onclick="addObject(this,'actes')" container="addForm">
                                    <span class="icon text-white-50">
                                        <i class="main-icon fas fa-save"></i>
                                        <span class="spinner-border spinner-border-sm" style="display:none" role="status" aria-hidden="true"></span>
                                        <i class="answers-well-saved text-success fa fa-check" style="display:none" aria-hidden="true"></i>
                                    </span>
                                    <span class="text">{{ trans('text.ajouter') }}</span>
                                </button>
                            </div>
                            <div id="form-errors" class="col-md-12 text-left"></div>
                        </div>
                    </div>
              </form>
          </div>
      </div>
  </div>
