@extends('webuilder.layouts.app')

@section('title','Home')

@section('header-class', 'transparent_menu')

@section('body')
        <!--================Main Slider Area =================-->
        <section class="main_slider_area slider_2">
            <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
                <ul>
                    @if(!$sliders->isEmpty())
                    @foreach($sliders as $slider)
                        <li data-index="rs-{{$slider->id}}" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="img/home-slider/slider-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset($slider->image)}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <div class="slider_text_box2">
                                <div class="tp-caption first_text"
                                data-x="['left','left','left','left','left']"
                                data-y="['middle','middle','middle','middle','middle']"
                                data-hoffset="['0','15','15','15','15']"
                                data-voffset="['-30','-30','-30','-30','-60']"
                                data-fontsize="['60','60','60','60','40']"
                                data-lineheight="['90','90','70','70','50']"
                                data-width="['760','760','760','550','400']"
                                data-height="none"
                                data-whitespace="normal"
                                data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[50,50,50,50]"
                                data-paddingleft="[0,0,0,0]">{{$slider->title}}</div>

                                <div class="tp-caption secand_text"
                                data-x="['left','left','left','left','left']"
                                data-y="['middle','middle','middle','middle']"
                                data-hoffset="['0','15','15','15','15']"
                                data-voffset="['50','50','50','40','0']"
                                data-fontsize="['28','28','28','20','20']"
                                data-lineheight="['38','38','38','30','30']"
                                data-width="['760','760','760','550','400']"
                                data-height="none"
                                data-whitespace="normal"
                                data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[50,50,50,50]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]">{{$slider->sub_title}}</div>
                            </div>
                        </li>
                    @endforeach
                    @else
                    <li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="img/home-slider/slider-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('webuilder/img/home-slider/slider-2.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <div class="slider_text_box2">
                            <div class="tp-caption first_text"
                            data-x="['left','left','left','left','left']"
                            data-y="['middle','middle','middle','middle','middle']"
                            data-hoffset="['0','15','15','15','15']"
                            data-voffset="['-30','-30','-30','-30','-60']"
                            data-fontsize="['60','60','60','60','40']"
                            data-lineheight="['90','90','70','70','50']"
                            data-width="['none','none','none','none']"
                            data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'
                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[10,10,10,10]"
                            data-paddingleft="[0,0,0,0]">we build dream</div>

                            <div class="tp-caption secand_text"
                            data-x="['left','left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-hoffset="['0','15','15','15','15']"
                            data-voffset="['50','50','50','40','0']"
                            data-fontsize="['28','28','28','20','20']"
                            data-lineheight="['38','38','38','30','30']"
                            data-width="['760','760','760','550','400']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]">We made just most advance & user friendly constraction theme in the world</div>
                        </div>
                    </li>
                    @endif
                </ul>
            </div>
        </section>
        <!--================End Main Slider Area =================-->
        <!--================Feature Content Area =================-->
        <section class="feature_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="f_content_item">
                            <img src="{{asset('webuilder/img/kiri.png')}}" width="80" height="80" alt="">
                            <a href="#"><h4>PT. SAC NUSANTARA</h4></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="f_content_item">
                            <img src="{{asset('webuilder/img/tengah1.png')}}" width="80" height="80" alt="">
                            <a href="#"><h4>KEMENTRIAN PEKERJAAN UMUM DAN PERUMAHAN RAKYAT</h4></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="f_content_item">
                            <img src="{{asset('webuilder/img/kanan.png')}}" width="80" height="80" alt="">
                            <a href="#"><h4>KESELAMATAN DAN KESEHATAN KERJA (K3)</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Feature Content Area =================-->

        <!--================Best Company Area =================-->
        @if($about != null)
        <section class="best_company_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="b_companu_l_text">
                        <h4>{{$about->title}}</h4>
                        <p>{{$about->desc}}</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="b_company_image">
                            <img src="{{asset($about->image)}}" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <br><a class="slider_btn" href="{{route('aboutUs')}}">read more</a>
                    </div>
                </div>
            </div>
        </section>
        @endif
        <!--================End Best Company Area =================-->

        <!--================Our Service2 Area =================-->
        <section class="our_service_area2">
            <div class="container">
                <div class="main_c_b_title">
                    <h2>Our<br class="title_br">Services</h2>
                    <h6>All About US</h6>
                </div>
                <div class="row service2_inner">
                    <div class="col-md-4 col-sm-6">
                        <div class="service2_item">
                            <div class="service2_item_inner">
                                <div class="service2_item_inner_content">
                                    <div class="service_icon">
                                        <img src="{{asset('webuilder/img/icon/DREDGING_RECLAMIN.png')}}" width="80" height="80" alt="">
                                        <img src="{{asset('webuilder/img/icon/DREDGING_RECLAMIN2.png')}}" width="80" height="80" alt="">
                                    </div>
                                    <h4>DREDGING & RECLAMATION</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service2_item">
                            <div class="service2_item_inner">
                                <div class="service2_item_inner_content">
                                    <div class="service_icon">
                                        <img src="{{asset('webuilder/img/icon/IRRIGATION.png')}}" width="80" height="80" alt="">
                                        <img src="{{asset('webuilder/img/icon/IRRIGATION2.png')}}" width="80" height="80" alt="">
                                    </div>
                                    <h4>IRRIGATION</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service2_item">
                            <div class="service2_item_inner">
                                <div class="service2_item_inner_content">
                                    <div class="service_icon">
                                        <img src="{{asset('webuilder/img/icon/BENDUNG_BENDUNGAN.png')}}" width="80" height="80" alt="">
                                        <img src="{{asset('webuilder/img/icon/BENDUNG_BENDUNGAN2.png')}}" width="80" height="80" alt="">
                                    </div>
                                    <h4>WEIR & DAM</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="service2_item">
                            <div class="service2_item_inner">
                                <div class="service2_item_inner_content">
                                    <div class="service_icon">
                                        <img src="{{asset('webuilder/img/icon/PORT_BREAKWATER.png')}}" width="80" height="80" alt="">
                                        <img src="{{asset('webuilder/img/icon/PORT_BREAKWATER2.png')}}" width="80" height="80" alt="">
                                    </div>
                                    <h4>PORT & BREAKWATER</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="service2_item">
                            <div class="service2_item_inner">
                                <div class="service2_item_inner_content">
                                    <div class="service_icon">
                                        <img src="{{asset('webuilder/img/icon/CIVILWORKS.png')}}" width="80" height="80" alt="">
                                        <img src="{{asset('webuilder/img/icon/CIVILWORKS2.png')}}" width="80" height="80" alt="">
                                    </div>
                                    <h4>CIVIL WORKS</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our Service2 Area =================-->

        <!--================Our Project2 Area =================-->
        @if(!$galleryCategory->isEmpty())
        <section class="our_project2_area">
            <div class="container">
                <div class="main_c_b_title">
                    <h2>Our<br class="title_br">Gallery</h2>
                    <h6>Great & Awesome Works</h6>
                </div>
                <div class="text-center">
                    <ul class="our_project_filter" style="display:inline-block">
                        <li class="active" data-filter="*"><a href="#">All</a></li>
                        @foreach($galleryCategory as $category)
                                <li data-filter=".cat-{{$category->id}}"><a href="#">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="row our_project_details">
                    @foreach($galleries->take(6) as $gallery)
                    <div class="col-md-4 col-sm-6 cat-{{$gallery->category_id}}">
                        <div class="project_item">
                            <img src="{{asset($gallery->image)}}" alt="" style="height:300px">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <h4>{{$gallery->title}}</h4>
                                        @if(!empty($gallery->location))
                                        <p>{{$gallery->location}} {{!empty($gallery->year) ? "(".$gallery->year.")" : ''}}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>
        @endif
        <!--================End Our Project2 Area =================-->

        <!--================Quoto Slider Area =================-->
        @if(!$infos->isEmpty())
        <section class="quoto_slider_area">
            <div class="container">
                <div class="quoto_slider_inner">
                    <div class="quoto_slider owl-carousel">
                        @foreach ($infos as $info)
                            <div class="item">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <h4>{{$info->title}}</h4>
                                <p>{{$info->description}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @endif
        <!--================End Quoto Slider Area =================-->

        <!--================Clients Area =================-->
        <section class="clients_area">
            <div class="container">
                @php
                    $clients = ["ISO_9001.png","ISO_14001.png","OHSAS_19001.png","LOGO_ISO.png","LOGO_KAN.png","SMK3.png"];
                @endphp
                <div class="clients_slider owl-carousel">
                    @foreach ($clients as $client)
                        <div class="item">
                            <img src="{{asset('images/cooperations/'.$client)}}" alt="" style="width:110px;">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--================End Clients Area =================-->

        <!--================Subscrib Form Area =================-->
        <section class="subscribe_area">
            <div class="container">
                <div class="pull-left">
                    <h4>Subscribe our email newsletter today to receive our special offer</h4>
                </div>
                <div class="pull-right">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Your Email Address">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Subscrib Form Area =================-->

@endsection
