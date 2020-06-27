@extends('admin.default')

@section('page-header')
	Portfolio Category <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['Admin\PortfolioCategoryController@store'],
			'files' => true
		])
	!!}

		@include('admin.portfoliocategory.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
