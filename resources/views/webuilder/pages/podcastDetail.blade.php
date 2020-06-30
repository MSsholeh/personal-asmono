@extends('webuilder.layouts.app')

@section('title','Podcast')

@section('body')

@include('webuilder.layouts.parts.banner', ['breadcrumb'  => ['text' => 'Podcast']])

    <!-- philosophy part css start -->
    <section class="philosophy_part project_details section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-md-6">
                    <iframe src="https://open.spotify.com/embed/{{$podcast->link}}" width="100%" height="170" frameborder="0" allowtransparency="true"></iframe>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="philophy_text">
                        <h2>{{$podcast->title}}</h2>
                        {!! $podcast->description !!}
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
                        <h2>Related Podcast</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($related as $v)
                <div class="col-lg-4 col-sm-6" style="margin-bottom:20px">
                    <div class="single_project_details">
                        <iframe src="https://open.spotify.com/embed/{{$v->link}}" width="100%" height="170" frameborder="0" allowtransparency="true"></iframe>
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
