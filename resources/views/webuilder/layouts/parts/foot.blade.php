<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="footer_widgets_area footer_bg">
        <div class="container">
            <div class="row footer_widgets_inner">
                <div class="col-md-3 col-sm-6">
                    <aside class="f_widget about_widget">
                        <img src="{{($generalSetting->website_logo != null ? asset($generalSetting->website_logo) : asset('webuilder/img/footer-logo.png'))}}" alt="">
                        <p>{{$generalSetting->keyword}}</p>
                        <ul>
                            <li><a href="{{$generalSetting->facebook}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$generalSetting->twitter}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$generalSetting->instagram}}"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </aside>
                </div>

                <div class="col-md-3 col-sm-6">
                    <aside class="f_widget address_widget">
                        <div class="f_w_title">
                            <h3>Office Address</h3>
                        </div>
                        <div class="address_w_inner">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="media-body">
                                    <p>{{$generalSetting->address}}</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <p>{{$generalSetting->phone_number}}</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <p>{{$generalSetting->email}}</p>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>

            </div>
        </div>
    </div>

</footer>
<!--================End Footer Area =================-->









<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('webuilder/js/jquery-2.2.4.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('webuilder/js/bootstrap.min.js')}}"></script>
<!-- Rev slider js -->
<script src="{{asset('webuilder/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('webuilder/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('webuilder/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('webuilder/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('webuilder/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('webuilder/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>

<script src="{{asset('webuilder/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('webuilder/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('webuilder/vendors/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('webuilder/vendors/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('webuilder/vendors/counterup/waypoints.min.js')}}"></script>
<script src="{{asset('webuilder/vendors/counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('webuilder/vendors/flex-slider/jquery.flexslider-min.js')}}"></script>

<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="{{asset('webuilder/js/gmaps.min.js')}}"></script>

<script src="{{asset('webuilder/js/theme.js')}}"></script>
@yield('js-custom')
