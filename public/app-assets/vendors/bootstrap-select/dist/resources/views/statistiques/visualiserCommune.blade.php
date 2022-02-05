<div class="card mb-3 shadow-lg" id="saveBatiment">
    <div class="card-header">
        {{ trans('text_me.fiche_communal') }}
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button></div>
    <div class="card-body">
        <div class="form-row col-md-12">
            <div class="col-md-12">{{ trans('text_me.choixstatistiques') }}<br></div>
            <div class="form-check form-check-inline form-group col-md-5">
                <input type="checkbox" class="form-check-input" id="equipement" name="equipement" checked>
                <label class="form-check-label" for="eau">{{ trans('text_me.equipements') }} </label>
            </div>
            <div class="form-check form-check-inline form-group col-md-5">
                <input type="checkbox" class="form-check-input" id="employe" name="employe" checked>
                <label class="form-check-label" for="eau">{{ trans('text_me.employes') }} </label>
            </div>
            <div class="form-check form-check-inline form-group col-md-5" >

                <div class="col-md-6 p-0">
                    <input type="checkbox" class="form-check-input" id="budget" name="budget" onchange="activeAnneBdg()" checked>
                    <label class="form-check-label" for="eau">{{ trans('text_me.budget') }} </label>
                </div>
                <div id="anneeBdg" class="col-md-6" >
                    <select class="form-control " id="annee">
                        <option value="@php echo date('Y'); @endphp">@php echo date('Y'); @endphp</option>
                        @foreach($annees as $annee)
                            <option value="{{$annee->annee}}">{{$annee->annee}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-check form-check-inline form-group col-md-5" >
                <input type="checkbox" class="form-check-input" id="contribuables" name="contribuables" checked>
                <label class="form-check-label" for="eau">{{ trans('text_me.contribuables') }} </label>
            </div>
            <div class="form-check form-check-inline form-group col-md-5">
                <input type="checkbox" class="form-check-input" id="archive" name="archive" checked>
                <label class="form-check-label" for="eau">{{ trans('text_me.courriers') }} </label>
            </div>
            <div class="form-check form-check-inline form-group col-md-5">
                <input type="checkbox" class="form-check-input" id="actes" name="actes" checked>
                <label class="form-check-label" for="eau">{{ trans('text_me.actes') }} </label>
            </div>
            <div class="form-check form-check-inline form-group col-md-5">
                <input type="checkbox" class="form-check-input" id="localites" name="localites" checked>
                <label class="form-check-label" for="eau">{{ trans('text_me.localites') }} </label>
            </div>
        </div>
        <hr>
        <div class="col-md-12 text-right">
               <form role="form"  id="formcom" name="formcom"   method="get" >
                    {{ csrf_field() }}
                   <button type="button" onclick="imprimerFicheCommunal()" class=" btn btn-sm warning shadow-sm">
                       <i class="fas fa-file-pdf"></i> {{ trans('text_me.exporterpdf') }}
                   </button>
               </form>
        </div>
    </div>
</div>
