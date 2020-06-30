@extends('webuilder.layouts.app')

@section('title','Podcast')

@section('css-custom')
<style>
    .spotify-embeds {
      width: 100%;
      padding-bottom: 10px;
    }

    .spotify-embed {
      background: #282828;

      &:not(:last-of-type) {
        margin-bottom: 5px;
      }

      iframe {
        display: block;
        transition: opacity 0.125s;
        .js & {
          opacity: 0;

          &.loaded {
            opacity: 1;
          }
        }
      }
    }
</style>
@endsection

@section('body')

@include('webuilder.layouts.parts.banner', ['breadcrumb'  => ['text' => 'Podcast']])
    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @php
                            $increment = ($podcasts->currentPage() - 1) * $podcasts->perPage();
                        @endphp
                        @foreach($podcasts as $podcast)
                        <article class="blog_item">
                            <div class="blog_details">
                                <a class="d-inline-block" href="{{ url('podcast/'.$podcast->id) }}">
                                    <h2>{{ $podcast->title }}</h2>
                                </a>
                                <iframe src="https://open.spotify.com/embed/{{$podcast->link}}" width="100%" height="170" frameborder="0" allowtransparency="true"></iframe>
                                {!! $podcast->description !!}
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="ti-user"></i> {{$generalSetting->about_name}}</a></li>
                                    <li><a href="#"><i class="ti-calendar"></i> {{ Carbon\Carbon::parse($podcast->created_at)->format('d F Y') }}</a></li>
                                </ul>
                            </div>
                        </article>
                        @endforeach

                        <nav class="blog-pagination justify-content-center d-flex">
                            {{$podcasts->links()}}
                        </nav>
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

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Related Podcast</h3>
                            @foreach($related as $v)
                            <div class="media post_item">
                                <div class="media-body">
                                    <a href="{{ url('podcast/'.$v->id) }}">
                                        <h3>{{$v->title}}</h3>
                                    </a>
                                    <p>{{ Carbon\Carbon::parse($v->created_at)->format('d F Y') }}</p>
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
