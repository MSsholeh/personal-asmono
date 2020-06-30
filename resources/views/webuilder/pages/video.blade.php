@extends('webuilder.layouts.app')

@section('title','Video')

@section('body')

@include('webuilder.layouts.parts.banner', ['breadcrumb'  => ['text' => 'Video']])

    <section class="related_project section_padding">
        <div class="container">
             <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <p>My Video</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @php
                    $increment = ($videos->currentPage() - 1) * $videos->perPage();
                @endphp
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
            <nav class="blog-pagination justify-content-center d-flex">
                {{$videos->links()}}
            </nav>
        </div>
    </section>

@endsection
