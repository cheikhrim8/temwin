<div class="modal-header">
    <h5 class="modal-title">{{ trans('text.new_famille') }}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
      <div class="row">
          <div class="col-md-12" id="addForm">
              <form class="" action="{{ url('familles/add') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="col-md-12 form-group">
                            <label for="libelle">{{ trans('text.famille_name') }} <span class="required_field" data-toggle="tooltip" data-placement="right" title="{{ trans('text.champ_obligatoire') }}">*</span></label>
                            <input id="libelle" name="libelle" class="form-control">
                        </div>
                        <div class="col-md-8 form-group">
                            <label for="sousunite_ids">{{ trans('text.sousunite') }} <span class="required_field" data-toggle="tooltip" data-placement="right" title="{{ trans('text.champ_obligatoire') }}">*</span></label>
                            <select id="sousunite_ids" name="sousunite_ids[]" class="form-control selectpicker bordered" disabled="disabled" multiple="multiple" title="Selectionner..." data-live-search="true"> 
                            </select>
                        </div>
                        <div class="col-md-12">
                            <div class="text-right">
                                <button class="btn btn-success btn-icon-split" onclick="addObject(this,'familles')" container="addForm">
                                    <span class="icon text-white-50">
                                        <i class="main-icon fas fa-save"></i>
                                        <span class="spinner-border spinner-border-sm" style="display:none" role="status" aria-hidden="true"></span>
                                        <i class="answers-well-saved text-success fa fa-check" style="display:none" aria-hidden="true"></i>
                                    </span>
                                    <span class="text">{{ trans('text.ajouter') }}</span>
                                </button>
                                <div id="form-errors" class="text-left"></div>
                            </div>
                        </div>
                    </div>
              </form>
          </div>
      </div>
  </div>