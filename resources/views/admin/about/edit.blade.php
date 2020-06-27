@extends('admin.default')

@section('page-header')
	About <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($item, [
			'action' => ['Admin\AboutController@update', $item->id],
			'method' => 'put',
			'files' => true
		])
	!!}

		@include('admin.about.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop
