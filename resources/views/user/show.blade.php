@extends('layouts.master')


@section('content')
  <!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 align-center">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <!-- <img class="profile-user-img img-fluid img-circle"
                   src="../../dist/img/user4-128x128.jpg"
                   alt="User profile picture"> -->
            </div>

            <h3 class="profile-username text-center">{{$user->name}}</h3>

            <p class="text-muted text-center">Shareholder</p>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Name:</b> <a class="float-right"> {{$user->name}}</a>
              </li>
              <li class="list-group-item">
                <b>Email:</b> <a class="float-right">{{$user->email}}</a>
              </li>
              <li class="list-group-item">
                <b>Total Share:</b> <a class="float-right">{{$user->total_share}}</a>
              </li>
              <li class="list-group-item">
                <b>Out of share:</b> <a class="float-right">{{$user->share}}</a>
              </li>
            </ul>

            <a href="{{route('user.index')}}" class="btn btn-primary btn-block align-center">Go back</a>
          </div>
          <!-- /.card-body -->
        </div>
        </div>
      </div>
    </div>
</section>


@endsection
