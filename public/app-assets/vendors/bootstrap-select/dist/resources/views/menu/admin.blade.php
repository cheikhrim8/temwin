@if(Auth::check() && Auth::user()->hasAccess([1]))
<li class="nav-item">
  <a class="nav-link collapsed @if(App::isLocale('ar')) text-right @endif" href="#" data-toggle="collapse" data-target="#collapseEquipements" aria-expanded="true" aria-controls="collapseEquipements">
    <i class="fas fa-fw fa-building"></i>
    <span>{{trans("text_menu.patrimoine")}}</span>
  </a>
  <div id="collapseEquipements" class="collapse" aria-labelledby="headingEquipements" data-parent="#mainMenu">
    <div class="bg-white py-2 collapse-inner">
        <a class="collapse-item" href="{{url('patrimoine/typesEquipements')}}">{{trans("text_me.types_equipement")}} </a>
      <a class="collapse-item" href="{{url('patrimoine/localites')}}">{{trans("text_me.localites")}} </a>
        <a class="collapse-item" href="{{url('patrimoine/emplacements')}}">{{trans("text_me.emplacements")}} </a>
      <a class="collapse-item" href="{{url('patrimoine/secteurs')}}">{{trans("text_me.secteurs")}} </a>
    </div>
  </div>
</li>
<hr class="sidebar-divider my-0">
<li class="nav-item">
  <a class="nav-link collapsed @if(App::isLocale('ar')) text-right @endif" href="#" data-toggle="collapse" data-target="#collapseRH" aria-expanded="true" aria-controls="collapseRH">
    <i class="fas fa-fw fa-users"></i>
    <span>{{trans("text_menu.rh")}}</span>
  </a>
  <div id="collapseRH" class="collapse" aria-labelledby="headingRH" data-parent="#mainMenu">
    <div class="bg-white py-2 collapse-inner">
      <a class="collapse-item" href="{{url('ref/Specialite')}}">{{trans("text_hb.specialites")}} </a>
      <a class="collapse-item" href="{{url('ref/RefNiveauEtude')}}">{{trans("text_hb.niveau_etudes")}} </a>
      <a class="collapse-item" href="{{url('ref/Service')}}">{{trans("text_hb.services")}} </a>
      <a class="collapse-item" href="{{url('ref/RefAppreciationsHierarchy')}}">{{trans("text_hb.Appreciation_heirarchie")}} </a>
      <a class="collapse-item" href="{{url('ref/RefTypesContrat')}}">{{trans("text_hb.type_contrat")}} </a>
      <a class="collapse-item" href="{{url('ref/RefSituationFamilliale')}}">{{trans("text_hb.sit_fam")}} </a>
    </div>
  </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed @if(App::isLocale('ar')) text-right @endif" href="#" data-toggle="collapse" data-target="#collapseActe" aria-expanded="true" aria-controls="collapseActe">
        <i class="fas fa-fw fa-address-book"></i>
        <span>{{trans("text_menu.actes")}}</span>
    </a>
    <div id="collapseActe" class="collapse" aria-labelledby="headingActe" data-parent="#mainMenu">
        <div class="bg-white py-2 collapse-inner">
            <a class="collapse-item" href="{{url('modeles')}}">{{trans("text_me.actes")}} </a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed @if(App::isLocale('ar')) text-right @endif" href="#" data-toggle="collapse" data-target="#collapseArchive" aria-expanded="true" aria-controls="collapseArchive">
        <i class="fas fa-fw fa-address-book"></i>
        <span>{{trans("text_archive.courrierrs_archives")}}</span>
    </a>
    <div id="collapseArchive" class="collapse" aria-labelledby="headingArchive" data-parent="#mainMenu">
        <div class="bg-white py-2 collapse-inner">
            <a class="collapse-item" href="{{url('ref/RefTypeArchive')}}">{{trans("text_archive.categories_archive")}} </a>
            <a class="collapse-item" href="{{url('ref/ArEmplacement')}}">{{trans("text_archive.emplacements")}} </a>
            <a class="collapse-item" href="{{url('ref/ArQualite')}}">{{trans("text_archive.qualites")}} </a>
            <a class="collapse-item" href="{{url('ref/ArOrigine')}}">{{trans("text_archive.origines")}} </a>
            <a class="collapse-item" href="{{url('ref/RefNiveauImportance')}}">{{trans("text_archive.niveau_importance")}} </a>

        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed @if(App::isLocale('ar')) text-right @endif" href="#" data-toggle="collapse" data-target="#collapseRecettes" aria-expanded="true" aria-controls="collapseRecettes">
        <i class="far fa-money-bill-alt"></i>
        <span>{{trans("text_menu.recettes")}}</span>
    </a>
    <div id="collapseRecettes" class="collapse" aria-labelledby="headingRecettes" data-parent="#mainMenu">
        <div class="bg-white py-2 collapse-inner">
            <a class="collapse-item" href="{{url('activites')}}">{{trans("text_me.activites")}} </a>
            <a class="collapse-item" href="{{url('forchets')}}">{{trans("text_me.forchets")}} </a>
            <a class="collapse-item" href="{{url('categories')}}">{{trans("text_me.categories")}} </a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed @if(App::isLocale('ar')) text-right @endif" href="#" data-toggle="collapse" data-target="#collapseQuartiers" aria-expanded="true" aria-controls="collapseQuartiers">
        <i class="far fa-money-bill-alt"></i>
        <span>{{trans("text_menu.quartiers")}}</span>
    </a>
    <div id="collapseQuartiers" class="collapse" aria-labelledby="headingQuartiers" data-parent="#mainMenu">
        <div class="bg-white py-2 collapse-inner">
            <a class="collapse-item" href="{{url('quartiers')}}">{{trans("text_menu.quartiers")}} </a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed @if(App::isLocale('ar')) text-right @endif" href="#" data-toggle="collapse" data-target="#collapseQuestionnaire" aria-expanded="true" aria-controls="collapseQuestionnaire">
        <i class="far fa-map"></i>
        <span>{{trans("text_menu.questionnaire")}}</span>
    </a>
    <div id="collapseQuestionnaire" class="collapse" aria-labelledby="headingQuestionnaire" data-parent="#mainMenu">
        <div class="bg-white py-2 collapse-inner">
            <a class="collapse-item" href="{{url('qst/questionnaires')}}">{{trans("questionnaire::questionnaire.questionnaires")}} </a>
            <a class="collapse-item" href="{{url('qst/groupes')}}">{{trans("questionnaire::groupe.groupes")}} </a>
            <a class="collapse-item" href="{{url('qst/questions')}}">{{trans("questionnaire::questionnaire.questions")}} </a>
        </div>
    </div>
</li>

<hr class="sidebar-divider my-0">
  <li class="nav-item">
      <a class="nav-link collapsed @if(App::isLocale('ar')) text-right @endif" href="#" data-toggle="collapse" data-target="#collapseManageUsers" aria-expanded="true" aria-controls="collapseManageUsers">
        <i class="fas fa-fw fa-cog"></i>
        <span>{{trans("text_menu.gestion_utilisateurs")}}</span>
      </a>
      <div id="collapseManageUsers" class="collapse" aria-labelledby="heaManageUsers" data-parent="#mainMenu">
        <div class="bg-white py-2 collapse-inner">
          <a class="collapse-item" href="{{url('admin/users')}}">{{trans("text_menu.utilisateurs")}}</a>
          <a class="collapse-item d-none" href="{{url('admin/users/disabled')}}">{{trans("text_menu.utilisateurs_suspendus")}}</a>
          <a class="collapse-item" href="{{url('admin/profiles')}}">{{trans("text_menu.profils")}}</a>
          <a class="collapse-item" href="{{url('admin/droits')}}">{{trans("text_menu.droits")}}</a>
        </div>
      </div>
  </li>
@endif
