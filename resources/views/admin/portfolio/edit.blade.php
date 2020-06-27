@extends('admin.default')

@section('page-header')
	Portfolio <small>{{ trans('app.update_item') }}</small>
@stop

@section('css')
    <style>
        .select2-container{
            width: 100% !important
        }
    </style>
@endsection

@section('content')
	{!! Form::model($item, [
			'action' => ['Admin\PortfolioController@update', $item->id],
			'method' => 'put',
			'files' => true
		])
	!!}

		@include('admin.portfolio.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop
