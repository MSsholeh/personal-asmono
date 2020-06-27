@extends('admin.default')

@section('page-header')
	About <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['Admin\AboutController@store'],
			'files' => true
		])
	!!}

		@include('admin.about.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
