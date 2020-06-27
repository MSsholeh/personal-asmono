@extends('admin.default')

@section('page-header')
	Message <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($item, [
			'action' => ['Admin\MessageController@update', $item->id],
			'method' => 'put',
			'files' => true
		])
	!!}

		@include('admin.message.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop
