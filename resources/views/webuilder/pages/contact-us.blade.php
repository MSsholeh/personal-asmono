@extends('webuilder.layouts.app')

@section('title','Contact Us')

@section('body')

@include('webuilder.layouts.parts.banner', ['breadcrumb'  => ['href' => route('contactUs'), 'text' => 'Contact Us']])



        <section>

                <div class="container" style="margin: 30px auto">
                    <div class="row" style="margin-bottom:10px">
                        <div class="col-md-4 " style="margin-bottom:10px;">
                            <div class="bg-secondary img-thumbnail text-center" style="padding:15px;width:100%">
                                <i class="fa fa-map-marker" style="font-size:25px"></i><br>
                                {{$generalSetting->address}}
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-bottom:10px;">
                            <div class="bg-secondary img-thumbnail text-center" style="padding:15px;width:100%">
                                <i class="fa fa-phone" style="font-size:25px"></i><br>
                                {{$generalSetting->phone_number}}
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-bottom:10px;">
                            <div class="bg-secondary img-thumbnail text-center" style="padding:15px;width:100%">
                                <i class="fa fa-envelope" style="font-size:25px"></i><br>
                                {{$generalSetting->email}}
                            </div>
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="comment_form_area">

                <form class="contact_us_form row" action="{{route('contactUs.submit')}}" method="post" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" value="{{old('name')}}" required>
                                @if($errors->has('name'))
                                    <small class="form-text text-danger">{{$errors->first('name')}}</small>
                                @endif

                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" value="{{old('email')}}" required>
                                @if($errors->has('email'))
                                    <small class="form-text text-danger">{{$errors->first('email')}}</small>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Message Subject" value="{{old('subject')}}" required>
                                @if($errors->has('subject'))
                                    <small class="form-text text-danger">{{$errors->first('subject')}}</small>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" value="{{old('phone')}}" required>
                                    @if($errors->has('phone'))
                                        <small class="form-text text-danger">{{$errors->first('phone')}}</small>
                                    @endif
                                </div>
                            <div class="form-group col-md-12">
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Your Message" required>{{old('message')}}</textarea>
                                @if($errors->has('message'))
                                    <small class="form-text text-danger">{{$errors->first('message')}}</small>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
        </section>


@endsection
