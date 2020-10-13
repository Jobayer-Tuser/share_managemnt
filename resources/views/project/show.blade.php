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

                <h3 class="profile-username text-center">{{Auth::User()->name}}</h3>

                <p class="text-muted text-center">Shareholder Project Details</p>

                <ul class="list-group list-group-unbordered mb-3">


                  <li class="list-group-item">
                    <b> LC or TT Date:</b> <a class="float-right"> {{$project['lc_or_tt_date']}}</a>
                  </li>
                  <li class="list-group-item">
                    <b> Style Number Order Session:</b> <a class="float-right"> {{$project['style_number_and_order_session']}}</a>
                  </li>
                  <li class="list-group-item">
                    <b> LC Number:</b> <a class="float-right"> {{$project['lc_number']}}</a>
                  </li>
                  <li class="list-group-item">
                    <b> Lc value:</b> <a class="float-right"> {{$project['lc_value']}}</a>
                  </li>
                  <li class="list-group-item">
                    <b> Lc value:</b> <a class="float-right"> {{$project['forward_lc_value']}}</a>
                  </li>
                  <li class="list-group-item">
                    <b> Total Profit Margin:</b> <a class="float-right"> {{$project['total_profit_margin']}}</a>
                  </li>
                  <li class="list-group-item">
                    <b> Advanced Payment:</b> <a class="float-right"> {{$project['advanced_payment']}}</a>
                  </li>
                  <li class="list-group-item">
                    <b> Outstanding Payment:</b> <a class="float-right"> {{$project['outstanding_payment']}}</a>
                  </li>
                  <li class="list-group-item">
                    <b> Freight Cost:</b> <a class="float-right"> {{$project['freight_cost']}}</a>
                  </li>
                  <li class="list-group-item">
                    <b> Shipment Mode:</b> <a class="float-right"> {{$project['shipment_mode']}}</a>
                  </li>
                  <li class="list-group-item">
                    <b> Shipment Date:</b> <a class="float-right"> {{$project['shipment_date']}}</a>
                  </li>
                  <li class="list-group-item">
                    <b> Final Invoice Of Manufacturer:</b> <a class="float-right"> {{$project['final_invoice_of_manufacturer']}}</a>
                  </li>
                  <li class="list-group-item">
                    <b> Final Invoice Of Buyer:</b> <a class="float-right"> {{$project['final_invoice_amount_of_buyer']}}</a>
                  </li>
                  <li class="list-group-item">
                    <b> Amount Recieved:</b> <a class="float-right"> {{$project['amount_recieved']}}</a>
                  </li>
                  <li class="list-group-item">
                    <b> Profit Share With Shareholder:</b> <a class="float-right"> {{$project['profits_shared_with_shareholders']}}</a>
                  </li>
                  <li class="list-group-item">
                    <b> Main Acoount Balanced:</b> <a class="float-right"> {{$project['main_account_balaced_after_profit']}}</a>
                  </li>
                  <li class="list-group-item">
                    <b> Payment Method:</b> <a class="float-right"> {{$project['payment_method']}}</a>
                  </li>
                  <li class="list-group-item">
                    <b> Payment Record:</b> <a class="float-right"> {{$project['payment_record']}}</a>
                  </li>
                  <li class="list-group-item">
                    <b> Profit Share Outstanding:</b> <a class="float-right"> {{$project['profit_share_outstanding']}}</a>
                  </li>



                </ul>

                <a href="{{route('disburshment.index')}}" class="btn btn-primary btn-block align-center">Go back</a>
              </div>
              <!-- /.card-body -->
            </div>
           </div>
        </div>
    </div>
</section>


@endsection
