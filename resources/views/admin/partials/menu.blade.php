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
    <a class="sidebar-link" href="{{ route(ADMIN . '.about.edit', '1') }}">
        <span class="icon-holder">
            <i class="c-red-500 ti-user"></i>
        </span>
        <span class="title">About</span>
    </a>
</li>

<li class="nav-item">
    <a class="sidebar-link" href="{{ route(ADMIN . '.experiences.index') }}">
        <span class="icon-holder">
            <i class="c-yellow-500 ti-star"></i>
        </span>
        <span class="title">Experiences</span>
    </a>
</li>


<li class="nav-item dropdown">
    <a class="dropdown-toggle" href="javascript:void(0);">
        <span class="icon-holder">
            <i class="c-blue-500 ti-pencil-alt"></i>
        </span>
        <span class="title">Article</span>
        <span class="arrow">
            <i class="ti-angle-right"></i>
        </span>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a class="sidebar-link" href="{{ route(ADMIN . '.article.index') }}">List</a>
        </li>
        <li>
            <a class="sidebar-link" href="{{ route(ADMIN . '.articlecategory.index') }}">Category</a>
        </li>
    </ul>
</li>

<li class="nav-item">
    <a class="sidebar-link {{ starts_with($route, ADMIN . '.podcast') ? 'active' : '' }}" href="{{ route(ADMIN . '.podcast.index') }}">
        <span class="icon-holder">
            <i class="c-orange-500 ti-announcement"></i>
        </span>
        <span class="title">Podcast</span>
    </a>
</li>

<li class="nav-item">
    <a class="sidebar-link {{ starts_with($route, ADMIN . '.video') ? 'active' : '' }}" href="{{ route(ADMIN . '.video.index') }}">
        <span class="icon-holder">
            <i class="c-red-500 ti-video-clapper"></i>
        </span>
        <span class="title">Video</span>
    </a>
</li>

<li class="nav-item">
    <a class="sidebar-link {{ starts_with($route, ADMIN . '.photo') ? 'active' : '' }}" href="{{ route(ADMIN . '.photo.index') }}">
        <span class="icon-holder">
            <i class="c-purple-500 ti-image"></i>
        </span>
        <span class="title">Photo</span>
    </a>
</li>

<li class="nav-item">
    <a class="sidebar-link {{ starts_with($route, ADMIN . '.testimonial') ? 'active' : '' }}" href="{{ route(ADMIN . '.testimonial.index') }}">
        <span class="icon-holder">
            <i class="c-blue-500 ti-comment-alt"></i>
        </span>
        <span class="title">Testimonial</span>
    </a>
</li>

<li class="nav-item">
    <a class="sidebar-link {{ starts_with($route, ADMIN . '.message') ? 'active' : '' }}" href="{{ route(ADMIN . '.message.index') }}">
        <span class="icon-holder">
            <i class="c-orange-500 ti-email"></i>
        </span>
        <span class="title">Message</span>
    </a>
</li>

<li class="nav-item">
    <a class="sidebar-link {{ starts_with($route, ADMIN . '.generalsetting') ? 'active' : '' }}" href="{{ route(ADMIN . '.generalsetting.edit', '1') }}">
        <span class="icon-holder">
            <i class="c-black-500 ti-panel"></i>
        </span>
        <span class="title">General Setting</span>
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
    <a class="sidebar-link" href="/logout">
        <span class="icon-holder">
            <i class="c-red-500 fa fa-power-off"></i>
        </span>
        <span class="title">Logout</span>
    </a>
</li>
