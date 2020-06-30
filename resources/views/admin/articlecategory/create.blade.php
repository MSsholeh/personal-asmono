@extends('admin.default')

@section('page-header')
	Article Category <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['Admin\ArticleCategoryController@store'],
			'files' => true
		])
	!!}

		@include('admin.articlecategory..form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
