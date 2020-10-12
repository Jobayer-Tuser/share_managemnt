<div class="card-body">
    <div class="row">
  <div class="form-group col-md-6">
    <label for="">Name</label>
    <input type="text" name="name" class="form-control" id="" placeholder="Enter Name">
  </div>
  <div class="form-group col-md-6">
    <label for="">Email</label>
    <input type="email" name="email" class="form-control" id="" placeholder="Enter Email">
  </div>
  </div>
<div class="row">
  <div class="form-group col-md-6">
    <label for="">Password</label>
    <input type="password" name="password" class="form-control" id="" placeholder="Password">
  </div>

  <div class="form-group col-md-6">
    <label for="">Share</label>
    <input type="text" name="share" class="form-control" id="" placeholder="Share ">
  </div>
 </div>


</div>


@push('script')
    <script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
          bsCustomFileInput.init();
        });
    </script>
@endpush

{{--<div class="row">
    <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
        <input name="client_name" id="icon_prefix3" type="text" class="validate" value="{{ isset($clients)? $clients['client_name']:null }}" >
        <label for="icon_prefix3">Full Name</label>
    </div>
    <div class="input-field col s6">
        <i class="material-icons prefix">phone</i>
        <input name="client_phone"  id="icon_telephone" type="number" class="validate" value="{{ isset($clients)? $clients['client_phone']:null }}" >
        <label for="icon_telephone">Telephone</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s6">
        <i class="material-icons prefix">email</i>
        <input name="client_email"  id="icon_prefix3" type="email" class="validate" value="{{ isset($clients)? $clients['client_email']:null }}">
        <label for="email3">Email</label>
    </div>
    <div class="input-field col s6">
        <i class="material-icons prefix">gps_fixed</i>
        <input name="client_address"  id="icon_prefix3" type="text" class="validate" value="{{ isset($clients)? $clients['client_address']:null }}">
        <label for="client_address">Address</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
        <input name="client_type"  id="icon_prefix3" type="text" class="validate" value="{{ isset($clients)? $clients['client_type']:null }}">
        <label for="client_type">Client Type</label>
    </div>
    <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
        <select name="client_status">
            <option value="">Choose your option</option>
            <option value="Active" @if(old('client_status', (isset($clients ) && $clients['client_status'] == 'Active'))) selected @endif > Active</option>
            <option value="Inactive" @if(old('client_status', (isset($clients ) && $clients['client_status'] == 'Inactive'))) selected @endif > Inactive</option>

        </select>
        <label for="client_address">Client Status</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
        <input name="created_by"  id="icon_prefix3" type="text" class="validate" value="{{ isset($clients)? $clients['created_by']:null }}">
        <label for="created_by">Created By</label>
    </div>
    <!--<div class="input-field col s6">
        <i class="material-icons prefix">gps_fixed</i>
        <input name="client_address"  id="icon_prefix3" type="text" class="validate" value="{{ isset($clients)? $clients['client_address']:null }}">
        <label for="client_address">Address</label>
    </div>-->
</div>--}}
