@extends('admin.default')

@section('page-header')
	Gallery <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['Admin\GalleryController@store'],
			'files' => true
		])
	!!}

		@include('admin.gallery.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
