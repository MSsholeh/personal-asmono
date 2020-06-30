@extends('admin.default')

@section('page-header')
	Experiences <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('css')
@endsection

@section('content')
	{!! Form::open([
			'action' => ['Admin\ExperiencesController@store'],
			'files' => true
		])
	!!}

		@include('admin.experiences.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
