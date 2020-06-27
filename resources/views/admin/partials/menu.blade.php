@php
    $r = \Route::current()->getAction();
    $route = (isset($r['as'])) ? $r['as'] : '';
@endphp

<li class="nav-item mT-30">
    <a class="sidebar-link {{ starts_with($route, ADMIN . '.dash') ? 'active' : '' }}" href="{{ route(ADMIN . '.dash') }}">
        <span class="icon-holder">
            <i class="c-blue-500 ti-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ starts_with($route, ADMIN . '.about') ? 'active' : '' }}" href="{{ route(ADMIN . '.about.index') }}">
        <span class="icon-holder">
            <i class="c-red-500 ti-user"></i>
        </span>
        <span class="title">About Us</span>
    </a>
</li>
<li class="nav-item dropdown">
    <a class="dropdown-toggle" href="javascript:void(0);">
        <span class="icon-holder">
            <i class="c-black-500 ti-bag"></i>
        </span>
        <span class="title">Portfolio</span>
        <span class="arrow">
            <i class="ti-angle-right"></i>
        </span>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a class="sidebar-link {{ starts_with($route, ADMIN . '.portfolio') ? 'active' : '' }}" href="{{ route(ADMIN . '.portfolio.index') }}">List</a>
        </li>
        <li>
            <a class="sidebar-link {{ starts_with($route, ADMIN . '.portfoliocategory') ? 'active' : '' }}" href="{{ route(ADMIN . '.portfoliocategory.index') }}">Category</a>
        </li>
    </ul>
</li>
<li class="nav-item dropdown">
    <a class="dropdown-toggle" href="javascript:void(0);">
        <span class="icon-holder">
            <i class="c-blue-500 ti-gallery"></i>
        </span>
        <span class="title">Gallery</span>
        <span class="arrow">
            <i class="ti-angle-right"></i>
        </span>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a class="sidebar-link {{ starts_with($route, ADMIN . '.gallery') ? 'active' : '' }}" href="{{ route(ADMIN . '.gallery.index') }}">List</a>
        </li>
        <li>
            <a class="sidebar-link {{ starts_with($route, ADMIN . '.gallerycategory') ? 'active' : '' }}" href="{{ route(ADMIN . '.gallerycategory.index') }}">Category</a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ starts_with($route, ADMIN . '.sliders') ? 'active' : '' }}" href="{{ route(ADMIN . '.sliders.index') }}">
        <span class="icon-holder">
            <i class="c-orange-500 ti-layout-slider"></i>
        </span>
        <span class="title">Sliders</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ starts_with($route, ADMIN . '.members') ? 'active' : '' }}" href="{{ route(ADMIN . '.members.index') }}">
        <span class="icon-holder">
            <i class="c-blue-500 fa fa-group"></i>
        </span>
        <span class="title">Member</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ starts_with($route, ADMIN . '.users') ? 'active' : '' }}" href="{{ route(ADMIN . '.users.index') }}">
        <span class="icon-holder">
            <i class="c-red-500 fa fa-user"></i>
        </span>
        <span class="title">Users</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ starts_with($route, ADMIN . '.message') ? 'active' : '' }}" href="{{ route(ADMIN . '.message.index') }}">
        <span class="icon-holder">
            <i class="c-black-500 ti-email"></i>
        </span>
        <span class="title">Message</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ starts_with($route, ADMIN . '.companyprofile') ? 'active' : '' }}" href="{{ route(ADMIN . '.companyprofile.index') }}">
        <span class="icon-holder">
            <i class="c-orange-500 fa fa-building"></i>
        </span>
        <span class="title">Company Profile</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ starts_with($route, ADMIN . '.info') ? 'active' : '' }}" href="{{ route(ADMIN . '.info.index') }}">
        <span class="icon-holder">
            <i class="c-red-500 fa fa-info"></i>
        </span>
        <span class="title">Info</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ starts_with($route, ADMIN . '.generalsetting') ? 'active' : '' }}" href="{{ route(ADMIN . '.generalsetting.edit', '1') }}">
        <span class="icon-holder">
            <i class="c-blue-500 ti-panel"></i>
        </span>
        <span class="title">General Setting</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link" href="/logout">
        <span class="icon-holder">
            <i class="c-red-500 fa fa-power-off"></i>
        </span>
        <span class="title">Logout</span>
    </a>
</li>
