<div class="card-body">
    <div class="row">
  <div class="form-group col-md-6">
    <label for="">Amount</label>
    <input type="text" name="amount" class="form-control" id="amount" placeholder="Enter Amount" required>
  </div>
  <div class="form-group col-md-6">
    <label for="">Date</label>
    <input type="date" name="date" class="form-control" id="date" placeholder="Enter date" required>
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


