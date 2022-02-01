<nav
    class="header-navbar navbar-expand-lg
    navbar navbar-with-menu navbar-without-dd-arrow fixed-top
   @auth() navbar-semi-dark @endauth navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-lg-none mr-auto"><a
                        class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                            class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="index.html">
                        <img class="brand-logo"
                             alt="modern admin logo" src="../../../app-assets/images/logo/logo.png">
                        <h3 class="brand-text">Modern</h3>
                    </a>
                </li>
                @auth()
                    <li class="nav-item d-none d-lg-block nav-toggle">
                        <a class="nav-link modern-nav-toggle pr-0"
                           data-toggle="collapse">
                            <i class="toggle-icon ft-toggle-right font-medium-3 white"
                               data-ticon="ft-toggle-right"></i></a>
                    </li>
                @endauth
                <li class="nav-item d-lg-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse"
                       data-target="#navbar-mobile"><i
                            class="material-icons mt-50">more_vert</i>
                    </a>
                </li>
            </ul>
        </div>
        @auth()
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item"><a class="nav-link nav-link-expand" href="#">
                                <i class="ficon ft-maximize"></i></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item">
                            <a class="dropdown-toggle nav-link"
                               id="dropdown-flag" href="#"
                               data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="flag-icon {{app()->isLocale('ar') ? 'flag-icon-sa' : 'flag-icon-fr'}} "></i>
                                <span class="selected-language">
                                    {{app()->isLocale('ar') ? 'العربية' : 'Francais'}}
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                                <a class="dropdown-item" href="{{route('lang', 'ar')}}" data-language="en">
                                    <i class="flag-icon flag-icon-sa"></i> العربية</a>
                                <a class="dropdown-item" href="{{route('lang', 'fr')}}" data-language="fr">
                                    <i class="flag-icon flag-icon-fr"></i> Francais</a>
                            </div>
                        </li>
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#"
                               data-toggle="dropdown">
                                <span class="mr-1 user-name text-bold-700">{{auth()->user()->name}}</span>
                                <span class="avatar avatar-online">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-19.png"
                                     alt="avatar"><i></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="user-profile.html">
                                    <i class="material-icons">person_outline</i>{{__('text.profile')}}</a>
                                <a class="dropdown-item" href="app-kanban.html">
                                    <i class="material-icons">playlist_add_check</i> Todo</a>
                                <a class="dropdown-item" href="user-cards.html">
                                    <i class="material-icons">content_paste</i> Task</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"
                                   onclick="event.preventDefault(); document.getElementById('logout').submit()"
                                >
                                    <i class="material-icons">power_settings_new</i> {{__('auth.logout')}}</a>
                                <form class="d-none" action="{{route('logout')}}" method="post" id="logout">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        @else
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav ml-auto float-right">
                        <li class="dropdown dropdown-language nav-item">
                            <a class="nav-link" href="{{route('login')}}">
                                <i class="flag-icon flag-icon-gb"></i>
                                <span class="selected-language">{{__('login')}}</span>
                            </a>
                        </li>
                        <li class="dropdown dropdown-language nav-item">
                            <a class="nav-link" href="{{route('register')}}">
                                <i class="flag-icon flag-icon-gb"></i>
                                <span class="selected-language">{{__('register')}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        @endauth

    </div>
</nav>
