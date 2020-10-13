@extends('layouts.master')


@section('content')

    <h3>Shareholder name: {{$disburshment->shareholder->name}}</h3>
    <p>Amount: {{$disburshment->amount}}</p>
    <p>Date: {{$disburshment->date}}</p>
  

    <a href="{{route('disburshment.index')}}" class="btn btn-success">Go back</a>


@endsection
