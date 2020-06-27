@extends('admin.default')

@section('page-header')
	General Setting <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($item, [
			'action' => ['Admin\GeneralSettingController@update', $item->id],
			'method' => 'put',
			'files' => true
		])
	!!}

		@include('admin.generalsetting.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop
