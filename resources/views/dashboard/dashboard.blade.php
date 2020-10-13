
@extends('layouts.master')

@section('content')
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <h5 class="mb-2">Profit Summery</h5>
        <div class="row">

        <div class="col-md-6">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white"
                   style="background: url('{{asset('dist/img/photo1.png')}}') center center;">
                <h3 class="widget-user-username text-right">{{Auth::user()->name}}</h3>
                <h5 class="widget-user-desc text-right"></h5>
              </div>
              <div class="widget-user-image">
                <!-- <img class="img-circle" src="../dist/img/user3-128x128.jpg" alt="User Avatar"> -->
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-6 border-right">
                    <div class="description-block">
                      <h5 class="description-header">Total Reciveable</h5>
                      <span class="description-text">{{$totalAmount}}</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6 border-right">
                    <div class="description-block">
                      <h5 class="description-header">Total Paid</h5>
                      <span class="description-text">{{$totalGet}}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
</section>


@endsection

@push('script')
    {{-- Custom Scripts--}}
    <script src={{asset("app-assets/js/scripts/dashboard-modern.js")}}></script>
@endpush
