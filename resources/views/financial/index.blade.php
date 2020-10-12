@extends('layouts.master')
@section('content')

@push('css')
      <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href=" {{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href=" {{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <!-- Theme style -->
@endpush

<!-- BEGIN: Page Main-->

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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Project id</th>
                    <th>Shareholder Id</th>
                    <th>Share Percentage</th>
                    <th>Amount</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    {{-- @if(count($clients) > 0)
                        @foreach($clients AS $eachClient)
                          <tr>
                            <td>{{$n++}}</td>
                            <td>{{$n++}}</td>
                            <td>
                            {{$eachClient['client_name']}}<a href="page-users-view.html"></a>
                            </td>
                            <td>{{$eachClient['client_type']}}</td>
                            <td>{{$eachClient['client_status']}}</td>
                            <td>
                                <span class="chip green lighten-5">
                                    {{$eachClient['created_by']}}<span class="green-text"></span>
                                </span>
                            </td>
                            <td>
                              <span class="chip green lighten-5">
                                  <span class="green-text">Active</span>
                              </span>
                            </td>
                            <td><a href=""><i class="material-icons">remove_red_eye</i></a></td>

                            <td><a href="{{route('clients.edit', $eachClient['id'])}}"><i class="material-icons">edit</i></a></td>

                            <td><a data-id="{{$eachClient['id']}}" class="waves-effect waves-light modal-trigger mb-2 mr-1 delete-client" href="#delete-modal"><i class="material-icons">delete</i></a></td>

                            <td>{{$eachClient['client_phone']}}</td>
                            <td>{{$eachClient['client_email']}}</td>
                            <td>{{$eachClient['client_address']}}</td>
                          </tr>
                        @endforeach
                      @endif --}}
                  </tr>
                  <tr>
                      <td>Gecko</td>
                      <td>Seamonkey 1.1</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.8</td>
                      <td>A</td>
                  </tr>

                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>


{{-- <div id="delete-modal" class="modal">
<div class="modal-content">
  <h4>Delete Client</h4>
  <p>Are Sure To Delete This Clients From your List</p>
</div>
<div class="modal-footer">

    <form method="post" action="#">
      {{@csrf_field()}}
      {{method_field('delete')}}
      <input type="hidden" id="id" name="id" name="_method" value="" />
      <a href="#!"  class="modal-action modal-close waves-effect waves-red btn-flat ">Disagree</a>
      <button type="submit" class="modal-action btn modal-close waves-effect waves-green btn-flat ">Agree</button>
    </form>

</div>
</div> --}}


     @push('script')
        <!-- DataTables -->
        <script src=" {{asset('plugins/datatables/jquery.dataTables.min.js')}} "></script>
        <script src=" {{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}} "></script>
        <script src=" {{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}} "></script>
        <script src=" {{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}} "></script>
        <!-- AdminLTE App -->
          <!-- END PAGE VENDOR JS-->



          <!-- Script for Modal Delete -->
          <script>
            $('.delete-client').click(function(){
                let id = $(this).attr('data-id');
                let value = $('#id').val(id);
            });
          <!-- Script for Modal Delete -->
           $(function () {
            $("#example1").DataTable({
              "responsive": true,
              "autoWidth": false,
            });
            $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false,
              "responsive": true,
            });
          });

          </script>
    @endpush
@endsection
