@extends('admin.default')

@section('content')

    <div class="row gap-30 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>
        <div class="masonry-item  w-100">
            <div class="row gap-30">

                <!-- #Total Portfolio ==================== -->
                <div class='col-md-4'>
                    <div class="layers bd bgc-white p-30">
                        <div class="layer w-100 mB-10">
                            <h6 class="lh-">Portfolio</a></h6>
                        </div>
                        <div class="layer w-100">
                            <div class="peers ai-sb fxw-nw">
                                <div class="peer peer-greed">
                                    <span class="icon-holder">
                                        <i class="c-orange-500 fa fa-briefcase fa-5x"></i>
                                    </span>
                                </div>
                                <div class="peer">
                                    <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-20 pY-20 bgc-blue-50 c-blue-500">{{ $portfolio }} Total Post</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- #Total Gallery ==================== -->
                <div class='col-md-4'>
                    <div class="layers bd bgc-white p-30">
                        <div class="layer w-100 mB-10">
                            <h6 class="lh-">Gallery</a></h6>
                        </div>
                        <div class="layer w-100">
                            <div class="peers ai-sb fxw-nw">
                                <div class="peer peer-greed">
                                    <span class="icon-holder">
                                        <i class="c-red-500 fa fa-image fa-5x"></i>
                                    </span>
                                </div>
                                <div class="peer">
                                    <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-20 pY-20 bgc-purple-50 c-purple-500">{{ $gallery }} Total Post</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- #Total Slider ==================== -->
                <div class='col-md-4'>
                    <div class="layers bd bgc-white p-30">
                        <div class="layer w-100 mB-10">
                            <h6 class="lh-">Slider</a></h6>
                        </div>
                        <div class="layer w-100">
                            <div class="peers ai-sb fxw-nw">
                                <div class="peer peer-greed">
                                    <span class="icon-holder">
                                        <i class="c-purple-500 fa fa-film fa-5x"></i>
                                    </span>
                                </div>
                                <div class="peer">
                                    <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-20 pY-20 bgc-red-50 c-red-500">{{ $slider }} Total Post</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- #Total Message ==================== -->
                <div class='col-md-4'>
                    <div class="layers bd bgc-white p-30">
                        <div class="layer w-100 mB-10">
                            <h6 class="lh-">Message</a></h6>
                        </div>
                        <div class="layer w-100">
                            <div class="peers ai-sb fxw-nw">
                                <div class="peer peer-greed">
                                    <span class="icon-holder">
                                        <i class="c-black-500 fa fa-envelope fa-5x"></i>
                                    </span>
                                </div>
                                <div class="peer">
                                    <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-20 pY-20 bgc-purple-50 c-purple-500">{{ $message }} Total Post</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- #Total Member ==================== -->
                <div class='col-md-4'>
                    <div class="layers bd bgc-white p-30">
                        <div class="layer w-100 mB-10">
                            <h6 class="lh-">Member</a></h6>
                        </div>
                        <div class="layer w-100">
                            <div class="peers ai-sb fxw-nw">
                                <div class="peer peer-greed">
                                    <span class="icon-holder">
                                        <i class="c-blue-500 fa fa-users fa-5x"></i>
                                    </span>
                                </div>
                                <div class="peer">
                                    <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-20 pY-20 bgc-red-50 c-red-500">{{ $member }} Total Post</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- #Total Admin ==================== -->
                <div class='col-md-4'>
                    <div class="layers bd bgc-white p-30">
                        <div class="layer w-100 mB-10">
                            <h6 class="lh-">Admin</a></h6>
                        </div>
                        <div class="layer w-100">
                            <div class="peers ai-sb fxw-nw">
                                <div class="peer peer-greed">
                                    <span class="icon-holder">
                                        <i class="c-red-500 fa fa-user fa-5x"></i>
                                    </span>
                                </div>
                                <div class="peer">
                                    <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-20 pY-20 bgc-blue-50 c-blue-500">{{ $admin }} Total Post</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
