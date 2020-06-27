@extends('webuilder.layouts.app')

@section('title','Our Gallery')

@section('body')

@include('webuilder.layouts.parts.banner', ['breadcrumb'  => ['href' => route('gallery'), 'text' => 'Gallery']])

@if(!$galleryCategory->isEmpty())
        <section class="our_project2_area">
            <div class="container">
                <div class="text-center">
                    <ul class="our_project_filter" style="display:inline-block">
                        <li class="active" data-filter="*"><a href="#">All</a></li>
                        @foreach($galleryCategory as $category)
                                <li data-filter=".cat-{{$category->id}}"><a href="#">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="row our_project_details">
                    @foreach($galleries as $gallery)
                    <div class="col-md-4 col-sm-6 cat-{{$gallery->category_id}}">
                        <div class="project_item">
                            <img src="{{asset($gallery->image)}}" alt="" style="height:300px">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <h4>{{$gallery->title}}</h4>
                                        @if(!empty($gallery->location))
                                        <p>{{$gallery->location}} {{!empty($gallery->year) ? "(".$gallery->year.")" : ''}}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>
@else
    <div class="main_c_b_title" style="margin: 100px 0">
        <h2>Sorry<br class="title_br">No Gallery Yet</h2>
    </div>
@endif

@endsection
