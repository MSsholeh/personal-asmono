@extends('admin.default')

@section('page-header')
	Services <small>{{ trans('app.add_new_item') }}</small>
@stop


@section('content')
	{!! Form::open([
			'action' => ['Admin\ServicesController@store'],
			'files' => true
		])
	!!}

		@include('admin.services.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
