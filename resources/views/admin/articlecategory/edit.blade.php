@extends('admin.default')

@section('page-header')
	Article Category <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($item, [
			'action' => ['Admin\ArticleCategoryController@update', $item->id],
			'method' => 'put',
			'files' => true
		])
	!!}

		@include('admin.articlecategory.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop
