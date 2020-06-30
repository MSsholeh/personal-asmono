@extends('webuilder.layouts.app')

@section('title','About')

@section('body')

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Hi there, This is {{$about->about_name}}</h5>
                            <h1>{{$about->about_caption}}</h1>
                            <div class="banner_btn">
                                <a href="{{url('/contact')}}" class="btn_1">Contact me</a>
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
                        <p>{{ $about->about_short_description }}</p>
                        <div class="experiance">
                            <h2>{{ $about->year_experience }}</h2>
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

    <!-- philosophy part css start -->
    <section class="philosophy_part section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="philophy_text">
                        <h2>{{ $about->about_title }}</h2>
                        {!! $about->about_description !!}
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="philophy_img">
                        <img src="{{ asset($about->about_image) }}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- philosophy part css end -->
@endsection
