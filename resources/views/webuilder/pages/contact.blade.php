@extends('webuilder.layouts.app')

@section('title','Contact')

@section('body')

@include('webuilder.layouts.parts.banner', ['breadcrumb'  => ['text' => 'Contact Us']])

<!-- ================ contact section start ================= -->
<section class="contact-section section_padding">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="contact-title">Get in Touch</h2>
			</div>
			<div class="col-lg-8">@if (session('status'))
				<div class="alert alert-success">{{ session('status') }}</div>@endif
				<form class="form-contact contact_form" action="{{route('contact.submit')}}" method="post" id="contactForm" novalidate="novalidate">@csrf
					<div class="row">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder='Enter Message'>{{old('message')}}</textarea>@if($errors->has('message')) <small class="form-text text-danger">{{$errors->first('message')}}</small>
									@endif</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name' value="{{old('name')}}" required>@if($errors->has('name')) <small class="form-text text-danger">{{$errors->first('name')}}</small>
									@endif</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address' value="{{old('email')}}" required>@if($errors->has('email')) <small class="form-text text-danger">{{$errors->first('email')}}</small>
									@endif</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject' value="{{old('subject')}}" required>@if($errors->has('subject')) <small class="form-text text-danger">{{$errors->first('subject')}}</small>
									@endif</div>
							</div>
						</div>
						<div class="form-group mt-3">
							<button type="submit" class="button button-contactForm btn_4">Send Message</button>
						</div>
				</form>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="media contact-info"> <span class="contact-info__icon"><i class="ti-home"></i></span>
					<div class="media-body">
						<h3>{{$generalSetting->address}}</h3>
					</div>
				</div>
				<div class="media contact-info"> <span class="contact-info__icon"><i class="ti-email"></i></span>
					<div class="media-body">
						<h3>{{$generalSetting->email}}</h3>
						<p>Send us your query anytime!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ================ contact section end ================= -->

@endsection
