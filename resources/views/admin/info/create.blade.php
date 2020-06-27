@extends('admin.default')

@section('page-header')
	Info <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['Admin\InfoController@store'],
		])
	!!}

		@include('admin.info.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
