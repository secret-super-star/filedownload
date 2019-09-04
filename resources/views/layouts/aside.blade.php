<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user">
    <div class="text-center mx-auto">
      <p class="app-sidebar__user-name">{{Auth::user()->name}}</p>
    </div>
  </div>
  <ul class="app-menu">

    @if(Auth::user()->role_id == 1)
      <li><a class="app-menu__item {{ (request()->is('dashboard')) ? 'active' : '' }}" href="{{route('dashboard')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Users</span></a></li>
    @else
      <li><a class="app-menu__item {{ (request()->is('myaccount')) ? 'active' : '' }}" href="{{route('myaccount')}}"><i class="app-menu__icon fa fa-folder"></i><span class="app-menu__label">My files</span></a></li>
    @endif
  </ul>
</aside>