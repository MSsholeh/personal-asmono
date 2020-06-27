@extends('webuilder.layouts.app')

@section('title','About Us')

@section('body')

@include('webuilder.layouts.parts.banner', ['breadcrumb'  => ['href' => route('aboutUs'), 'text' => 'About Us']])


        <section class="our_project2_area our_project_two_column">
            <div class="container">
                @php
                    $increment = 1;
                @endphp
                @foreach($abouts as $about)
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            @if($increment % 2 == 0)
                                <h3 style="margin-bottom:5px"><strong>{{$about->title}}</strong></h3>
                                <p class="text-justify">{{$about->desc}}</p>
                            @else
                            <img class="img-responsive" src="{{asset($about->image)}}" style="margin: 0px auto 20px auto">
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            @if($increment % 2 == 0)
                                <img class="img-responsive" src="{{asset($about->image)}}" style="margin: 0 auto">
                            @else
                                <h3 style="margin-bottom:5px"><strong>{{$about->title}}</strong></h3>
                                <p class="text-justify" style="margin-bottom:20px">{{$about->desc}}</p>
                            @endif
                        </div>
                    </div>
                    @php
                     $increment++;
                    @endphp
                @endforeach
            </div>
        </section>

@endsection
