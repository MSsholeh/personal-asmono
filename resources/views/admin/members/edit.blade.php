@extends('admin.default')

@section('page-header')
	Member <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($item, [
			'action' => ['Admin\MemberController@update', $item->id],
			'method' => 'put',
			'files' => true
		])
	!!}

		@include('admin.members.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop
