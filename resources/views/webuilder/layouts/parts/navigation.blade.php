<!--================Header Area =================-->
<header class="main_header_area @yield('header-class')">
    <div class="header_top_area">
        <div class="container">
            <div class="pull-left">
            <a href="#"><i class="fa fa-phone"></i>{{$generalSetting->phone_number}}</a>
            <a href="#"><i class="fa fa-map-marker"></i>{{$generalSetting->address}}</a>
                <a href="#"><i class="mdi mdi-clock"></i>08 AM - 05 PM</a>
            </div>
            <div class="pull-right">
                <ul class="header_social">
                    <li><a href="{{$generalSetting->facebook}}"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{$generalSetting->twitter}}"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="{{$generalSetting->instagram}}"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main_menu_area">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('home')}}"><img src="{{($generalSetting->website_logo != null ? asset($generalSetting->website_logo) : asset('webuilder/img/footer-logo.png'))}}" alt=""><img src="{{($generalSetting->website_logo != null ? asset($generalSetting->website_logo) : asset('webuilder/img/footer-logo.png'))}}" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="{{ Request::is('/') ? 'active' : ''}}"><a href="{{route('home')}}">Home</a></li>
                        <li class="{{ Request::is('about-us') ? 'active' : ''}}"><a href="{{route('aboutUs')}}">About Us</a></li>
                        <li class="{{ Request::is('projects') ? 'active' : ''}}"><a href="{{route('projects')}}">Projects</a></li>
                        <li class="{{ Request::is('gallery') ? 'active' : ''}}"><a href="{{route('gallery')}}">Gallery</a></li>
                        <li class="{{ Request::is('contact-us') ? 'active' : ''}}"><a href="{{route('contactUs')}}">Contact Us</a></li>
                    <li><a href="{{!empty($companyProfile->link) ?  $companyProfile->link : '#'}}" target="_blank">Download Company Profile</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</header>
<!--================Header Area =================-->
