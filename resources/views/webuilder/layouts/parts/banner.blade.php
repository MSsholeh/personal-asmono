<!--================Banner Area =================-->
<section class="banner_area" style="background-position: 0 65%">
        <div class="container">
            <div class="banner_inner_text">
                <h4>{{$breadcrumb['text']}}</h4>
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                <li class="active"><a href="{{$breadcrumb['href']}}">{{$breadcrumb['text']}}</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->
