<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow py-2"
     data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation"
            data-menu="menu-navigation">
            <li class="nav-item {{Route::getCurrentRoute()->uri == '/' ? 'active' : ''}}">
                <a href="{{url('/')}}" class="nav-item">
                    <i class="la la-dashboard"></i>
                    <span class="menu-title">{{__('menu.dashboard')}}</span>
                </a>
            </li>
            @foreach($menu as $menu_item)
                <li class="nav-item {{Route::getCurrentRoute()->uri == str_replace("\\", "/", $menu_item->link) ? 'active' : ''}}">
                    <a href="{{url($menu_item->link)}}" class="nav-item">
                        <i class="la {{$menu_item->icon}}"></i>
                        <span class="menu-title">{{$menu_item->libelle}}</span>
                    </a>
                    @foreach($menu_item->children as $sub_menu)
                        <ul class="menu-content">
                            <li class="{{Route::getCurrentRoute()->uri == str_replace("\\", "/", $sub_menu->link) ? 'active' : ''}}">
                                <a href="{{url($sub_menu->link)}}" class="menu-item">
                                    <span>{{$sub_menu->libelle}}</span>
                                </a>
                                @include('menu.layouts.sidebar._child', ['children' => $sub_menu->children])
                            </li>
                        </ul>
                    @endforeach
                </li>
            @endforeach
        </ul>
    </div>
</div>


