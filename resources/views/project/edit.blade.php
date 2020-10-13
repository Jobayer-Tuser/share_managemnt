@extends('layouts.master')

@section('content')

@push('css')


@endpush

{{$errors}}
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">


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
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Edit Profit</h3>
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
