@foreach($children as $child)
    <ul class="menu-content menu">
        <li class="{{Route::getCurrentRoute()->uri == $child->link ? 'active' : ''}}">
            <a href="{{url($child->link)}}" class="nav-item">
                <span>{{$child->libelle}}</span>
                <p>{{Route::getCurrentRoute()->uri == $child->link ? 'active' : ''}}</p>
            </a>
            @if(count($child->children))
                @include('menu.layouts.sidebar._child', ['children' => $child->children])
            @endif
        </li>
    </ul>
@endforeach
