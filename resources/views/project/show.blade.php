@extends('layouts.master')


@section('content')




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
                    <h3 class="card-title">{{$title}}</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <ul style="list-style: none">
                        <li>LC or TT Date: {{$project['lc_or_tt_date']}}</li>
                        <li>Style Number Order Session: {{$project['style_number_and_order_session']}}</li>
                        <li>LC Number: {{$project['lc_number']}}</li>
                        <li>LC Value: {{$project['lc_value']}}</li>
                        <li>Forwarded Lc value: {{$project['forward_lc_value']}}</li>
                        <li>Total Profit Margin: {{$project['total_profit_margin']}}</li>
                        <li>Advanced Payment: {{$project['advanced_payment']}}</li>
                        <li>Outstanding Payment: {{$project['outstanding_payment']}}</li>
                        <li>Freight Cost: {{$project['freight_cost']}}</li>
                        <li>Shipment Mode: {{$project['shipment_mode']}}</li>
                        <li>Shipment Date: {{$project['shipment_date']}}</li>
                        <li>Final Invoice Of Manufacturer: {{$project['final_invoice_of_manufacturer']}}</li>
                        <li>Final Invoice Of Buyer: {{$project['final_invoice_amount_of_buyer']}}</li>
                        <li>Amount Recieved: {{$project['amount_recieved']}}</li>
                        <li>Profit Share With Shareholder: {{$project['profits_shared_with_shareholders']}}</li>
                        <li>Main Acoount Balanced: {{$project['main_account_balaced_after_profit']}}</li>
                        <li>Payment Method: {{$project['payment_method']}}</li>
                        <li>Payment Record: {{$project['payment_record']}}</li>
                        <li>Profit Share Outstanding: {{$project['profit_share_outstanding']}}</li>
                    </ul>
                    <a href="{{route('project.index')}}" class="btn btn-success">Go back</a>
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



@endsection
