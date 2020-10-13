@extends('layouts.master')

@section('content')

@push('css')

@endpush
<<<<<<< HEAD
=======


>>>>>>> 5e4170d97c4970452ba774419fe08404f582dac6
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
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
                <h3 class="card-title">Create Disburshment</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('disburshment.store')}}" method="post" id="quickForm">
                @csrf
                @include('disburshment._form')
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                  <a href="{{route('disburshment.index')}}" class="btn btn-sm btn-danger">Back</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

@endsection
