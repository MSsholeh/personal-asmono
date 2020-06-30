<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content=" @yield('description') ">
    <link rel="icon" href="{{asset($generalSetting->website_favicon)}}" type="image/x-icon" />

    <title>@yield('title') - {{$generalSetting->website_name}}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gijgo.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link href="//vjs.zencdn.net/7.3.0/video-js.min.css" rel="stylesheet">
    <script src="//vjs.zencdn.net/7.3.0/video.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/videojs-youtube/2.6.1/Youtube.min.js"></script>
    @yield('css-custom')

</head>
