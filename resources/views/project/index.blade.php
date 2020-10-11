@extends('layouts.master')

@section('content')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/themes/vertical-modern-menu-template/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/themes/vertical-modern-menu-template/style.min.css')}}">
@endpush

    <!-- BEGIN: Page Main-->

        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span></span></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active"><span>{{ isset($title) ? $title : "Title Not Found" }}</span>
                  </li>
                </ol>
              </div>
              <div class="col s2 m6 l6">
                <a class="btn indigo waves-effect waves-light breadcrumbs-btn right" href="#" type="button" class="btn btn-light">Create Project</a>
                <!--<ul class="dropdown-content" id="dropdown1" tabindex="0">
                  <li tabindex="0"><a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span class="new badge red">2</span></a></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a></li>
                  <li class="divider" tabindex="-1"></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="user-login.html">Logout</a></li>
                </ul>-->
              </div>
            </div>
          </div>
        </div>
       
<!-- users list start -->
<section class="users-list-wrapper section">
  <div class="users-list-filter">
    <div class="card-panel">
      <div class="row">
        <form>
          <div class="col s12 m6 l3">
            <label for="users-list-verified">Verified</label>
            <div class="input-field">
              <select class="form-control" id="users-list-verified">
                <option value="">Any</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
            </div>
          </div>
          <div class="col s12 m6 l3">
            <label for="users-list-role">Role</label>
            <div class="input-field">
              <select class="form-control" id="users-list-role">
                <option value="">Any</option>
                <option value="User">User</option>
                <option value="Staff">Staff</option>
              </select>
            </div>
          </div>
          <div class="col s12 m6 l3">
            <label for="users-list-status">Status</label>
            <div class="input-field">
              <select class="form-control" id="users-list-status">
                <option value="">Any</option>
                <option value="Active">Active</option>
                <option value="Close">Close</option>
                <option value="Banned">Banned</option>
              </select>
            </div>
          </div>
          <div class="col s12 m6 l3 display-flex align-items-center show-btn">
            <button type="submit" class="btn btn-block indigo waves-effect waves-light">Show</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="users-list-table">
    <div class="card">
      <div class="card-content">
        <!-- datatable start -->
        <div class="responsive-table">
          <table id="users-list-datatable" class="table">
            <thead>
              <tr>
                <th></th>
                <th>id</th>
                <th>LC/TT Date</th>
                <th>Style Number & Order Session</th>
                <th>LC number</th>
                <th>LC value</th>
                <th>Forwarded LC value</th>
                <th>Total profit</th>
                <th>Advanced payment</th>
                <th>LC Outstanding payment</th>
                <th>LC freight cost settle</th>
                <th>Shipement mode & date</th>
                <th>Final invoice of manufacturer</th>
                <th>Final invoice amount of buyer</th>
                <th>Amount recieve date</th>
                <th>Profit shared</th>
                <th>Account balance</th>
                <th>Payment method</th>
                <th>Payment date</th>
                <th>Profit share outstanding</th>
                <th>Created by</th>
                <th>Updated by</th>
                
              </tr>
            </thead>
            {{--  <tbody>
            @if(count($clients) > 0)
                @foreach($clients AS $eachClient)
                  <tr>
                    <td>{{$n++}}</td>
                    <td>{{$n++}}</td>
                    <td>
                    {{$eachClient['client_name']}}<!--<a href="page-users-view.html"></a>-->
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
              @endif
            </tbody>  --}}
          </table>
        </div>
        <!-- datatable ends -->
      </div>
    </div>
  </div>
</section>


  <div id="delete-modal" class="modal">
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
  </div>


  @push('script')
      <!-- BEGIN PAGE VENDOR JS-->
      <script src="{{asset('js/custom/custom-script.min.js')}}"></script>
      <script src="{{asset('js/scripts/customizer.min.js')}}"></script>
      <script src="{{asset('js/scripts/advance-ui-modals.min.js')}}"></script>
      <!-- END PAGE VENDOR JS-->
      
      
      
      <!-- Script for Modal Delete -->
      <script>
        $('.delete-client').click(function(){
            let id = $(this).attr('data-id');
            let value = $('#id').val(id);
        });
      <!-- Script for Modal Delete -->
      
      
      </script>
      
      
  @endpush

@endsection