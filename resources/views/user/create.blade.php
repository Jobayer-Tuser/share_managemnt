@extends('layouts.master')

@section('content')

@push('css')


@endpush


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Validation</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Validation</li>
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
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Create Shareholder</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form role="form" method="POST" action="{{route('user.store')}}" id="quickForm">
                        @csrf
                        @include('user._form')
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <button type="submit" class="btn btn-primary">Cancle</button>
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
