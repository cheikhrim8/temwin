<nav class="header-navbar navbar-expand-md navbar navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">

                    <!--START Toggle sidebar button -->
                    {{--<li class="nav-item d-none d-md-block">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs"
                           href="#"><i class="ft-menu"></i>
                        </a>
                    </li>--}}
                    <!--END Toggle sidebar button -->
                </ul>

                <!-- START Right navbar -->
                <ul class="nav navbar-nav float-right">
                    <!-- START Languages -->
                    <li class="dropdown dropdown-language nav-item">
                        <a class="dropdown-toggle nav-link"
                           id="dropdown-flag" href="#"
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="flag-icon {{App::isLocale('ar') ? 'flag-icon-sa' : 'flag-icon-fr'}}"></i>
                            <span class="selected-language">{{App::isLocale('ar') ? 'العربية' : 'Farancais'}}</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            <a class="dropdown-item {{App::isLocale('ar') ? 'd-none' : ''}}" href="{{route('lang', 'ar')}}" data-language="ar">
                                <i class="flag-icon flag-icon-sa"></i>العربية</a>
                            <a class="dropdown-item {{App::isLocale('fr') ? 'd-none' : ''}}" href="{{route('lang', 'fr')}}" data-language="fr"><i
                                    class="flag-icon flag-icon-fr"></i> Francais</a>
                        </div>
                    </li>
                    <!-- END Languages -->

                    <!-- START User profile dropdown -->
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span
                                class="mr-1 user-name text-bold-700">{{ auth()->check() ? auth()->user()->name : null }}</span>
                            <span class="avatar avatar-online">
                                <img src="https://ui-avatars.com/api/?name={{ auth()->check() ? auth()->user()->name : null }}"
                                     alt="avatar"><i></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">
                                <i class="ft-user"></i>{{__('menu.edit profile')}}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout').submit()">
                                <i class="ft-power"></i> {{__('menu.logout')}}</a>
                            <form action="{{route('logout')}}" class="d-none" method="get" id="logout">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <!-- END User profile dropdown -->
                </ul>
                <!-- END Right navbar -->
            </div>
        </div>
    </div>
</nav>
