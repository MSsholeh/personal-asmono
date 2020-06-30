@extends('webuilder.layouts.app')

@section('title','Photo')

@section('body')

@include('webuilder.layouts.parts.banner', ['breadcrumb'  => ['text' => 'Photo']])

    <!-- portfolio part css start -->
    <section class="portfolio_part section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <p>My Photo</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="mesonary_part">
                        <div class="grid">
                            <div class="grid-sizer"></div>
                            @php
                                $increment = ($photos->currentPage() - 1) * $photos->perPage();
                            @endphp
                            @foreach($photos as $photo)
                            <a href="{{ asset ($photo->image) }}" class="grid-item img_gallery">
                                <img src="{{ asset ($photo->image) }}">
                                <div class="portfolio_hover_text">
                                    <i class="ti-zoom-in" style="font-size: 40px;">
                                        <p>{{ $photo->description }}</p>
                                    </i>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        <nav class="blog-pagination justify-content-center d-flex">
                            {{$photos->links()}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio part css end -->

@endsection
