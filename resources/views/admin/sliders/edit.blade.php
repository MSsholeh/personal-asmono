@extends('admin.default')

@section('page-header')
	Slider <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($item, [
			'action' => ['Admin\SliderController@update', $item->id],
			'method' => 'put',
			'files' => true
		])
	!!}

		@include('admin.sliders.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop
