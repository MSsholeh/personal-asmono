@extends('webuilder.layouts.app')

@section('title','Video')

@section('body')

@include('webuilder.layouts.parts.banner', ['breadcrumb'  => ['text' => 'Video']])

    <!-- philosophy part css start -->
    <section class="philosophy_part project_details section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7 col-md-8">
                    <div class="philophy_img">
                        <video-js
                            oncontextmenu="return false;"
                            id="myVideo"
                            class="video-js vjs-default-skin vjs-big-play-centered"
                            controls
                            width="700" height="400"
                            data-setup='{"fluid": true}'>
                            <source src="https://www.youtube.com/watch?v=8nA-apwq0aY" type="video/youtube"></source>
                         </video>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="philophy_text">
                        <h2>{{$video->title}}</h2>
                        {!! $video->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- philosophy part end -->

    <!-- related project part start -->
    <section class="related_project padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <h2>Related Video</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($related as $v)
                <div class="col-lg-4 col-sm-6" style="margin-bottom:20px">
                    <div class="single_project_details">
                        <a href="{{ url('video/'.$v->id) }}" class="grid-item">
                            <img src="https://img.youtube.com/vi/{{$v->link}}/maxresdefault.jpg" alt="">
                            <div class="portfolio_hover_text">
                                <i class="ti-control-play" style="font-size:40px;top:35%;">
                                    <p>{{ $v->title }}</p>
                                </i>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- related project part end -->

@endsection

@section('js')
<script>
    var player = videojs('myVideo', {
      responsive: true
    });
</script>
@endsection
