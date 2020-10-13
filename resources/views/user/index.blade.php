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
                    <th>Serial</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Total Share</th>
                    <th>Share</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($users as $user)
                    <tr>
                      <td>{{$serial++}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->total_share}}</td>
                      <td>{{$user->share}}</td>
                      <td><a href="{{route('user.edit',$user->id)}}" class="btn btn-xs btn-warning">Edit</a> <a href="#" class="btn btn-xs btn-danger">Delete</a> <a class='btn btn-xs btn-default' href="{{route('user.show',$user->id)}}"> See more</a></td>
                      
                      
                      
                  </tr>
                    @endforeach
                    


                  </tbody>

                </table>
                
              </div>
              
              <!-- /.card-body -->
            </div>
            <div class="d-flex justify-content-center">
              {!! $users->links() !!}
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
