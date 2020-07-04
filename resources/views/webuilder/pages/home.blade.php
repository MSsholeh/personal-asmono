@extends('webuilder.layouts.app')

@section('title','Home')

@section('header-class', 'transparent_menu')

@section('body')

<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h5>Hi there, This is {{$setting->about_name}}</h5>
                        <h1>{{$setting->about_caption}}</h1>
                        <div class="banner_btn">
                            <a href="{{route('contact')}}" class="btn_1">Contact me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->

<!-- about part start-->
<section class="about_part section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about_text">
                    <h4>about me</h4>
                    <p>{{ $setting->about_short_description }}</p>
                    <div class="experiance">
                        <h2>{{ $setting->year_experience }}</h2>
                        <p>Years of <span>Experiences</span></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="experiance_list">
                    <h4>Experiences</h4>
                    <div class="experiance_list_iner">
                        @foreach($experiences as $experience)
                        <div class="single_experiance_list">
                            <h5>{{$experience->title}}</h5>
                            <p>{{$experience->description}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about part end-->

<!-- Service part start-->
<section class="service_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_tittle text-center">
                    <h2>My services</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            @php
                $i=1;
            @endphp
            @foreach($services as $service)
            <div class="col-lg-4 col-sm-6">
                <div class="single_service_part">
                    <div class="single_service_text @if($i==2) active @endif">
                        <span class="{{$service->icon}}"></span>
                        <h2>{{$service->title}}n</h2>
                        <p>{{$service->description}}</p>
                    </div>
                </div>
            </div>
            @php
                $i++;
            @endphp
            @endforeach
        </div>
    </div>
</section>
<!-- Service part end-->

@if($videos->count() > 0)
<!-- podcast part css start -->
<section class="related_project padding_bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section_tittle">
                    <p>My Videos</p>
                    <h2>Take a look around some of my awesome works</h2>
                </div>
            </div>
            <div class="col-lg-6">
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($videos as $video)
            <div class="col-lg-4 col-sm-6" style="margin-bottom:20px">
                <div class="single_project_details">
                    <a href="{{ url('video/'.$video->id) }}" class="grid-item">
                        <img src="https://img.youtube.com/vi/{{$video->link}}/maxresdefault.jpg" alt="">
                        <div class="portfolio_hover_text">
                            <i class="ti-control-play" style="font-size:40px;top:35%;">
                                <p>{{ $video->title }}</p>
                            </i>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
         <div class="section_btn">
            <br><center><a href="{{route('video')}}" class="btn_2">More videos</a></center>
        </div>
    </div>
</section>
<!-- podcast part css end -->
@endif

@if($podcasts->count() > 0)
<!-- podcast part css start -->
<section class="portfolio_part padding_bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-6">
                <div class="section_tittle text-right">
                    <p>My Podcast</p>
                    <h2>Take a look around some of my awesome works</h2>
                </div>

            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($podcasts as $podcast)
            <div class="col-lg-4 col-sm-6" style="margin-bottom:20px">
                <div class="single_project_details">
                    <iframe src="https://open.spotify.com/embed/{{$podcast->link}}" width="100%" height="170" frameborder="0" allowtransparency="true"></iframe>
                </div>
            </div>
            @endforeach
        </div>
        <div class="section_btn">
            <br><center><a href="{{route('podcast')}}" class="btn_2">More podcast</a></center>
        </div>
    </div>
</section>
<!-- podcast part css end -->
@endif

<!-- Instagram part css start -->
<section class="portfolio_part padding_bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section_tittle">
                    <p>My instagram</p>
                    <h2>Follow me on Instagram</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section_btn text-right">
                    <a href="https://instagram.com/asmonowikan" class="btn_2">@asmonowikan</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="mesonary_part">
                    <div id="instagram-feed-asmono" class="instagram_feed"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram part css end -->

@if($testimonials->count() > 0)
<!--::review_part start::-->
<section class="review_part section_padding">
    <div class="container">
       <div class="row">
          <div class="col-xl-5">
             <div class="section_tittle">
                <p>Word from my clients</p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-12">
             <div class="client_review_part owl-carousel">
                @foreach($testimonials as $testimonial)
                <div class="client_review_single">
                   <div class="client_review_text">
                      <p>
                        “{{$testimonial->description}}
                      </p>
                      <div class="client_review_img">
                        <img src="{{ asset($testimonial->image) }}" class="rounded-circle" alt="{{$testimonial->name}}" />
                        <h4>{{$testimonial->name}}</h4>
                        <p>{{$testimonial->position}}</p>
                      </div>
                   </div>
                </div>
                @endforeach
             </div>
          </div>
       </div>
    </div>
</section>
 <!--::review_part end::-->
@endif

@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="{{asset('js/jquery.instagramFeed.js')}}"></script>

<script>
    $(window).on('load',function(){
      $.instagramFeed({
        'username':'asmonowikan',
        'container':"#instagram-feed-asmono",
        'display_profile':false,
        'display_biography':false,
        'items': 8,
        'items_per_row': 4
      });
    });

    $(window).on('load resize', function() {
      $('iframe[src*="embed.spotify.com"]').each( function() {
        $(this).css('width', $(this).parent().css('width'));
        $(this).attr('src', $(this).attr('src'));
        $(this).removeClass('loaded');

        $(this).on('load', function(){
          $(this).addClass('loaded');
        });
      });
    });
</script>
@endsection
