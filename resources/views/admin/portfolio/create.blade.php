@extends('admin.default')

@section('page-header')
	Portfolio <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('css')
    <style>
        .select2-container{
            width: 100% !important
        }
    </style>
@endsection

@section('content')
	{!! Form::open([
			'action' => ['Admin\PortfolioController@store'],
			'files' => true
		])
	!!}

		@include('admin.portfolio.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
