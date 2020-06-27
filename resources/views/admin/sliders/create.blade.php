@extends('admin.default')

@section('page-header')
	Slider <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['Admin\SliderController@store'],
			'files' => true
		])
	!!}

		@include('admin.sliders.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
