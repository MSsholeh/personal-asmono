@extends('admin.default')

@section('page-header')
	Experiences <small>{{ trans('app.update_item') }}</small>
@stop

@section('css')
@endsection

@section('content')
	{!! Form::model($item, [
			'action' => ['Admin\ExperiencesController@update', $item->id],
			'method' => 'put',
			'files' => true
		])
	!!}

		@include('admin.experiences.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop
