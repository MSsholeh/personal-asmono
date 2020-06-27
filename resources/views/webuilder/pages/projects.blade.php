@extends('webuilder.layouts.app')

@section('title','Our Projects')

@section('body')

@include('webuilder.layouts.parts.banner', ['breadcrumb'  => ['href' => route('projects'), 'text' => 'Projects']])

@if(!$projects->isEmpty())
        <section class="our_project2_area our_project_two_column">
                <div class="container">
                <div class="table-responsive">
                        <table class="table">
                          <tr class="bg-danger">
                              <th>Nomor</th>
                              <th>Nama Proyek</th>
                              <th>Tahun</th>
                              <th>Lokasi</th>
                              <th>Jenis Pekerjaan</th>
                              <th>Status</th>
                          </tr>
                          @php
                            $increment = ($projects->currentPage() - 1) * $projects->perPage();
                          @endphp
                          @foreach($projects as $project)
                          <tr>
                          <td>{{++$increment}}</td>
                          <td>{{$project->title}}</td>
                          <td>{{$project->year}}</td>
                          <td>{{$project->location}}</td>
                          <td>{{(!empty($project->category_id) ? $project->category->name: '-')}}</td>
                          <td>{{ucwords($project->status)}}</td>
                          </tr>
                          @endforeach


                        </table>

                      </div>
                      <div class="text-center">
                        {{$projects->links()}}
                      </div>
                </div>


        </section>
@else
    <div class="main_c_b_title" style="margin: 100px 0">
        <h2>Sorry<br class="title_br">No Projects Yet</h2>
    </div>
@endif

@endsection
