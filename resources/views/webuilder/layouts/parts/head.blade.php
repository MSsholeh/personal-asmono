<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" @yield('description') ">

    <link rel="icon" href="{{asset($generalSetting->website_favicon)}}" type="image/x-icon" />

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title') - {{$generalSetting->website_name}}</title>

    <!-- Icon css link -->
    <link href="{{asset('webuilder/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('webuilder/css/materialdesignicons.min.css')}}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{asset('webuilder/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="{{asset('webuilder/vendors/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('webuilder/vendors/revolution/css/layers.css')}}" rel="stylesheet">
    <link href="{{asset('webuilder/vendors/revolution/css/navigation.css')}}" rel="stylesheet">
    <link href="{{asset('webuilder/vendors/animate-css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('webuilder/vendors/owl-carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{asset('webuilder/css/style.css?v=99')}}" rel="stylesheet">
    <link href="{{asset('webuilder/css/responsive.css')}}" rel="stylesheet">
    @yield('css-custom')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
