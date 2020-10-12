@extends('layouts.master')

@section('content')

@push('css')


@endpush

{{$errors}}
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{ isset($title) ? $title : "Title Not Found" }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{ isset($title) ? $title : "Title Not Found" }}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                <!-- jquery validation -->
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">{{ isset($title) ? $title : "Title Not Found" }}</small></h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form method="post" role="form" id="quickForm" action="{{route('project.update', $projects['id'])}}">
                          <!-- {{@csrf_field()}}-->
                            @csrf
                            {{method_field('post')}}
                            @include('project._form')

                        <!-- /.card-body -->
                        <div class="card-footer">
                          <button type="submit" class="btn btn-xs btn-success">Submit</button>
                          <a href="{{route('project.index')}}" type="submit" class="btn btn-xs btn-danger">Cancle</a>
                        </div>
                      </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection
