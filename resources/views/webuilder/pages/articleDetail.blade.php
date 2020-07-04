@extends('webuilder.layouts.app')

@section('title',$article->title)

@section('css-custom')

@endsection

@section('body')

@include('webuilder.layouts.parts.banner', ['breadcrumb'  => ['text' => 'Blog Detail']])
    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                   <div class="single-post">
                      <div class="feature-img text-center">
                         <img class="img-fluid" src="{{ asset ($article->image) }}" width="100%" alt="{{$article->title}}">
                      </div>
                      <div class="blog_details">
                         <h2>{{$article->title}}</h2>
                         <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="ti-user"></i> {{ $generalSetting->about_name }}</a></li>
                            <li><a href="#"><i class="ti-calendar"></i> {{ Carbon\Carbon::parse($article->created_at)->format('d F Y') }}</a></li>
                         </ul>
                            {!! $article->description !!}
                      </div>
                   </div>

                   <div class="comments-area">
                      <h4>{{$article->comments->count()}} Comments</h4>

                        @foreach ($article->comments->where('parent_id',null) as $row)
                        <div class="row" style="margin-bottom:20px">
                            <div class="col-1 text-center">
                                <img src="{{asset('assets/img/comment/comment_1.png')}}" alt="">
                            </div>
                            <div class="col-11 text-justify">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <h5>
                                            <a href="#">{{$row->name}}</a>
                                        </h5>
                                        <p class="date">{{ Carbon\Carbon::parse($row->created_at)->format('d F Y H:i') }}</p>
                                    </div>
                                </div>
                                <p class="comment">
                                    {{$row->message}}
                                </p>

                                <div class="d-flex justify-content-between">
                                    <a class="reply" href="javascript:void(0);" onclick="balasKomentar({{ $row->id }}, '{{substr(strip_tags($row->message),0,100).'...'}}')">Reply</a>
                                </div>
                            </div>
                        </div>
                            @foreach ($row->child as $val)
                                <div class="row" style="margin-bottom:20px">
                                    <div class="col-1"></div>
                                    <div class="col-1 text-center">
                                        <img src="{{asset('assets/img/comment/comment_1.png')}}" alt="">
                                    </div>
                                    <div class="col-10 text-justify">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">{{$val->name}}</a>
                                                </h5>
                                                <p class="date">{{ Carbon\Carbon::parse($val->created_at)->format('d F Y H:i') }}</p>
                                            </div>
                                        </div>
                                        <p class="comment">
                                            {{$val->message}}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                   </div>
                   <div class="comment-form" id="comment-form">
                      <h4>Leave a Reply</h4>
                      <form class="form-contact comment_form" action="{{route('comment.submit')}}" method="post" id="commentForm">
                          @csrf
                         <input type="hidden" name="article_id" value="{{ $article->id }}" class="form-control">
                         <input type="hidden" name="user_id" id="user_id" class="form-control">
                         <input type="hidden" name="parent_id" id="parent_id" class="form-control">
                         <div class="row">
                             <div class="col-12">
                                <div class="form-group" style="display: none" id="formReplyComment">
                                    <label for="">Reply Comment</label>
                                    <input type="text" id="replyComment" class="form-control" readonly>
                                </div>
                             </div>
                            <div class="col-12">
                               <div class="form-group" id="formReplyComment">
                                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                     placeholder="Write Comment"></textarea>
                               </div>
                            </div>
                            <div class="col-sm-6">
                               <div class="form-group">
                                  <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                               </div>
                            </div>
                            <div class="col-sm-6">
                               <div class="form-group">
                                  <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                               </div>
                            </div>
                            <div class="col-12">
                               <div class="form-group">
                                  <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                               </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <button type="submit" class="button button-contactForm btn_4 mt-3">Send Message</button>
                         </div>
                      </form>
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
                                        <p>({{ $articles->count() }})</p>
                                    </a>
                                </li>
                                @foreach($category as $item)
                                <li>
                                    <a href="{{url('/article/category/'.$item->slug)}}" class="d-flex">
                                        <p>{{$item->name}} </p>
                                        <p>({{$articles->where('category_id',$item->id)->count()}})</p>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            @foreach($recent as $item)
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
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{asset('js/jquery.instagramFeed.js')}}"></script>
<script>
        function balasKomentar(id, title) {
            $('#formReplyComment').show();
            $('#parent_id').val(id)
            $('#replyComment').val(title)
        }
        $(".reply").click(function() {
            $('html, body').animate({
                scrollTop: $("#comment-form").offset().top
            }, 1500);
        });
    </script>
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
