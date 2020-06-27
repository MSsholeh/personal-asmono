@extends('admin.default')

@section('page-header')
	Message <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['Admin\MessageController@store'],
			'files' => true
		])
	!!}

		@include('admin.message.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
