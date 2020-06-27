@extends('admin.default')

@section('page-header')
    Members <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')

    <div class="mB-20">
        <a href="{{ route(ADMIN . '.members.create') }}" class="btn btn-info">
            {{ trans('app.add_button') }}
        </a>
    </div>


    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Instagram</th>
                    <th>Facebook</th>
                    <th>Website</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @php $no = 1; @endphp
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td><img src="{{ asset ($item->image) }}" width="200px"></td>
                        <td>{{ $item->name }}</td>
                        <td>{{ !empty($item->desc) ? $item->desc : '-' }}</td>
                        <td>{{ !empty($item->instagram) ? $item->instagram : '-' }}</td>
                        <td>{{ !empty($item->facebook) ? $item->facebook : '-' }}</td>
                        <td>{{ !empty($item->website) ? $item->website : '-' }}</td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="{{ route(ADMIN . '.members.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                <li class="list-inline-item">
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.members.destroy', $item->id),
                                        'method' => 'DELETE',
                                        ])
                                    !!}

                                        <button class="btn btn-danger btn-sm" title="{{ trans('app.delete_title') }}"><i class="ti-trash"></i></button>

                                    {!! Form::close() !!}
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

@endsection
