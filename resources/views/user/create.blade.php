@extends('layouts.master')

@section('content')

@push('css')


@endpush


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
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Create Shareholder</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form role="form" method="POST" action="{{route('user.store')}}" id="quickForm">
                        @csrf
                        @include('user._form')
                        <!-- /.card-body -->
                        <div class="">
                          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                          <a href="{{route('user.index')}}" class="btn btn-sm btn-danger">Cancel</a>
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
