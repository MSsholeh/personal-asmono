@extends('admin.default')

@section('page-header')
	Company Profile <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($item, [
			'action' => ['Admin\CompanyProfileController@update', $item->id],
			'method' => 'put',
			'files' => true
		])
	!!}

        <div class="row mB-40">
            <div class="col-sm-8">
                <div class="bgc-white p-20 bd">

                    {!! Form::myInput('text', 'title', 'Title', ['required' => 'required']) !!}
                    {!! Form::myInput('url', 'link', 'Link',['required' => 'required']) !!}

                </div>
            </div>
        </div>


		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop
