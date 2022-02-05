@extends('layout_without_menu')
@section('page-content')
    <div class="row justify-content-md-center" id="dgctMenu">
        <div class="col-md-10 col-lg-8 p-0 shadow">
            <?php
            $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
            if(stripos($ua, 'android') !== false) { // && stripos($ua,'mobile') !== false) {
            ?>
            <div class="alert alert-success" role="alert">
                <strong>Information </strong> <a href="{{ url('data/kachel.apk')  }}" download target="_blank"> <i
                        class="fa fa-download"></i> Cliquez ici pour télécharger la version mobile de système d'information
                </a></h4>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php } ?>
            <div class="row justify-content-center m-2">
                @foreach($modules as $module)

                    @if(Auth::user())
                        <div
                            class="card mb-0 col-sm-6 col-md-4 {{$module->bg_color}} @if(!Auth::user()->hasAccess($module->sys_groupes_traitement_id))
                                item-disabled @endif rounded-0 border-dash">
                            <div class="card-body py-4" id="module{{$module->id}}">
                                <div class="dgct-title text-center {{$module->text_color}}">
                                    @if($module->is_externe)
                                        <div class="card-badge"><i class="fas fa-share-square" aria-hidden>
                                            </i> Lien externe
                                        </div>
                                    @endif
                                    <div id="img{{$module->id}}">
                                        <img src="{{url('img/modules/'.$module->id.'.png')}}" class="dgct-icon" alt="">
                                    </div>
                                    @if(Auth::user()->hasAccess($module->sys_groupes_traitement_id))
                                        <a href="{{ url('selectModule/'.$module->id) }}"
                                           @if(!$module->is_externe) onclick="$('#img{{$module->id}}').html(loading_content)"
                                           @endif @if($module->is_externe) target="_blank"
                                           @endif class="btn btn-link btn-block {{$module->text_color}} stretched-link">
                                            <span>{{(App::isLocale('ar')) ? $module->libelle_ar : $module->libelle}}</span>
                                        </a>
                                    @else
                                        <span>{{(App::isLocale('ar')) ? $module->libelle_ar : $module->libelle}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($loop->iteration == 8 )
                        <div class="card mb-0 d-none @if(($modules->count() + 1) % 2 == 0) d-sm-block @endif d-md-block  col-sm-6 col-md-4 bg-secondary rounded-0 border-dash">
                            <div class="card-body py-4"></div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
