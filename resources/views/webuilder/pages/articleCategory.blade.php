@extends('webuilder.layouts.app')

@section('title','Article')

@section('css-custom')

@endsection

@section('body')

@include('webuilder.layouts.parts.banner', ['breadcrumb'  => ['text' => 'Article Category']])
    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <h4>Category "{{$categories->name}}"</h4><br>
                        @php
                            $increment = ($articles->currentPage() - 1) * $articles->perPage();
                        @endphp
                        @if($articles->count() > 0)
                            @foreach($articles as $item)
                            <article class="blog_item" @if($item->image==null) style="margin-top:100px" @endif>
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ asset ($item->image) }}" height="300px" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>{{ Carbon\Carbon::parse($item->created_at)->format('d') }}</h3>
                                        <p>{{ Carbon\Carbon::parse($item->created_at)->format('F') }}</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{url('/article/'.$item->slug)}}">
                                        <h2>{{$item->title}}</h2>
                                    </a>
                                    <p>{{substr(strip_tags($item->description),0,160).'...'}}</p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="far fa-user"></i> {{$generalSetting->about_name}}</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> {{$item->comments->count()}} Comments</a></li>
                                    </ul>
                                </div>
                            </article>
                            @endforeach
                            <nav class="blog-pagination justify-content-center d-flex">
                                {{$articles->links()}}
                            </nav>
                        @else
                        <article class="blog_item">

                            <div class="blog_details">
                                <p>No post in category "{{$categories->name}}"</p>
                            </div>
                        </article>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Search</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="{{url('article')}}" class="d-flex">
                                        <p>All Category </p>
                                        <p>({{ $articleCount->count() }})</p>
                                    </a>
                                </li>
                                @foreach($category as $item)
                                <li>
                                    <a href="{{url('/article/category/'.$item->slug)}}" class="d-flex">
                                        <p>{{$item->name}} </p>
                                        <p>({{$articleCount->where('category_id',$item->id)->count()}})</p>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Related Post</h3>
                            @foreach($related as $item)
                            <div class="media post_item">
                                <img src="{{ !empty($item->image) ? asset($item->image) : 'https://via.placeholder.com/100?text=No+Image'}}" alt="{{$item->title}}" width="60px">
                                <div class="media-body">
                                    <a href="{{url('/article/'.$item->slug)}}">
                                        <h3>{{$item->title}}</h3>
                                    </a>
                                    <p>{{ Carbon\Carbon::parse($item->created_at)->format('d F Y') }}</p>
                                </div>
                            </div>
                            @endforeach
                        </aside>
                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Instagram Feeds</h4>
                            <ul class="instagram_row flex-wrap">
                                <div id="instagram-feed-asmono" class="instagram_feed"></div>
                            </ul>
                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
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
        'items': 9,
        'items_per_row': 3
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
