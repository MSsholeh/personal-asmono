<!--::header part start::-->
<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{route('home')}}"> <img src="{{asset('assets/img/asmono-logo.png')}}" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="ti-menu"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('home')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('about')}}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('article')}}">Article</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('podcast')}}">Podcast</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('video')}}">Video</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('photo')}}">Photo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="social_icon">
                        <a href="{{$generalSetting->facebook}}"><i class="fab fa-facebook-square"></i></a>
                        <a href="{{$generalSetting->instagram}}"><i class="fab fa-instagram"></i></a>
                        <a href="{{$generalSetting->linkedin}}"><i class="fab fa-linkedin"></i></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->
