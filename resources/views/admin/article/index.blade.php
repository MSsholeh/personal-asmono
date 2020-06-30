@extends('admin.default')

@section('page-header')
    Article <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')

    <div class="mB-20">
        <a href="{{ route(ADMIN . '.article.create') }}" class="btn btn-info">
            {{ trans('app.add_button') }}
        </a>
    </div>


    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th width="5%">NO</th>
                    <th width="10%">Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th width="15%">Actions</th>
                </tr>
            </thead>

            <tbody>
                @php $no = 1; @endphp
                @foreach ($items  as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td><img src="{{ asset ($item->image) }}" width="100px"></td>
                        <td>{{ !empty($item->title) ? $item->title : '-' }}</td>
                        <td>{{ !empty($item->category_id) ? $item->category->name : '-'}}</td>
                        <td>
                            @if($item->status==1)
                                <span class="badge badge-success">Publish</span>
                            @else
                                <span class="badge badge-danger">Draf</span>
                            @endif
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="{{ route(ADMIN . '.article.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                <li class="list-inline-item">
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.article.destroy', $item->id),
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
