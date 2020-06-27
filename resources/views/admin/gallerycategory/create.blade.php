@extends('admin.default')

@section('page-header')
	Gallery Category <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['Admin\GalleryCategoryController@store'],
			'files' => true
		])
	!!}

		@include('admin.gallerycategory..form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
