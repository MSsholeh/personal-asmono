 <!-- footer css start -->
 <footer class="footer_Part padding_top">
     <div class="container">
         <div class="row alingn-item-center">
             <div class="col-lg-6">
                 <div class="footer_text">
                     <span>Discuss your project now</span>
                     <h2>{{$generalSetting->email}}</h2>
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="footer_btn">
                     <a href="{{route('contact')}}" class="btn_1">Contact</a>
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="footer_menu">
                     <a href="{{route('about')}}">About</a>
                     <a href="{{route('article')}}">Article</a>
                     <a href="{{route('podcast')}}">Podcast</a>
                     <a href="{{route('video')}}">Video</a>
                     <a href="{{route('photo')}}">Photo</a>
                 </div>
             </div>
             <div class="col-lg-6">
                <div class="social_icon">
                    <a href="{{$generalSetting->facebook}}"><i class="fab fa-facebook-square"></i></a>
                    <a href="{{$generalSetting->instagram}}"><i class="fab fa-instagram"></i></a>
                    <a href="{{$generalSetting->linkedin}}"><i class="fab fa-linkedin"></i></a>
                </div>
             </div>
             <div class="col-lg-12">
                    <div class="copyright_part text-center">
                        <p class="footer-text m-0">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Design with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://mssholeh.github.io" target="_blank">Mssholeh</a>
                        </p>
                    </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- footer css end -->

<!-- jquery plugins here-->
<script src="{{asset('assets/js/jquery-1.12.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- easing js -->
<script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
<!-- masonry js -->
<script src="{{asset('assets/js/masonry.pkgd.js')}}"></script>
<!-- particles js -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<!-- custom js -->
<script src="{{asset('assets/js/custom.js')}}"></script>
