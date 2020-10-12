<div class="card-body">
    <div class="row">
      <div class="form-group col-md-6">
        <label for="">LC or TT Date</label>
        <input type="date" name="lc_or_tt_date" class="form-control" id="" placeholder="<?php echo date('Y-m-d'); ?>">

      </div>
      <div class="form-group col-md-6">
        <label for="">Style Number Order Session</label>
        <input type="text" name="style_number_and_order_session" class="form-control" id="" placeholder="ST1-S1">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-6">
        <label for="">LC Number</label>
        <input type="number" name="lc_number" class="form-control" id="" placeholder="789">
      </div>

      <div class="form-group col-md-6">
        <label for="">LC Value</label>
        <input type="text" name="lc_value" class="form-control" id="" placeholder=" 200000">
      </div>
    </div>

    <div class="row">
         <div class="form-group col-md-6">
           <label for="">Forwarded Lc value</label>
           <input type="text" name="forward_lc_value" class="form-control" id="" placeholder="140000">
         </div>

         <div class="form-group col-md-6">
           <label for="">Total Profit Margin</label>
           <input type="text" name="total_profit_margin" class="form-control" id="" placeholder=" 60000">
         </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
          <label for="">Advanced Payment</label>
          <input type="text" name="advanced_payment" class="form-control" id="" placeholder="3000">
        </div>

        <div class="form-group col-md-6">
          <label for="">Outstanding Payment</label>
          <input type="text" name="outstanding_payment" class="form-control" id="" placeholder=" 140000">
        </div>
    </div>
<div class="row">
    <div class="form-group col-md-6">
      <label for="">Freight Cost</label>
      <input type="number" name="freight_cost" class="form-control" id="" placeholder="1000">
    </div>

    <div class="form-group col-md-6">
      <label for="">Shipment Mode</label>
      <input type="text" name="shipment_mode" class="form-control" id="" placeholder="Ship, Air, Road, Waterway ">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
      <label for="">Shipment Date</label>
      <input type="date" name="shipment_date" class="form-control" id="" placeholder="">
    </div>

    <div class="form-group col-md-6">
      <label for="">Final Invoice Of Manufacturer</label>
      <input type="text" name="final_invoice_of_manufacturer" class="form-control" id="" placeholder=" LCb-INVOICEb=0">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
      <label for="">Final Invoice Of Buyer</label>
      <input type="number" name="final_invoice_amount_of_buyer" class="form-control" id="" placeholder="LCm-INVOICEm=0">
    </div>

    <div class="form-group col-md-6">
      <label for="">Amount Recieved</label>
      <input type="text" name="amount_recieved" class="form-control" id="" placeholder=" 200000">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
      <label for="">Profit Share With Shareholder</label>
      <input type="text" name="profits_shared_with_shareholders" class="form-control" id="" placeholder="60000">
    </div>

    <div class="form-group col-md-6">
      <label for="">Main Acoount Balanced</label>
      <input type="text" name="main_account_balaced_after_profit" class="form-control" id="" placeholder=" 4000">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
      <label for="">Payment Method</label>
      <input type="" name="payment_method" class="form-control" id="" placeholder="Cheque, Cash, TT, Cheque">
    </div>

    <div class="form-group col-md-6">
      <label for="">Payment Record</label>
      <input type="text" name="payment_record" class="form-control" id="" placeholder=" Receipt -01">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
      <label for="">Profit Share Outstanding</label>
      <input type="text" name="profit_share_outstanding" class="form-control" id="" placeholder="200000">
    </div>

    <div class="form-group col-md-6">
      <label for="">Created By</label>
      <input type="text" name="created_by" class="form-control" id="" placeholder="Tuser ">
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
