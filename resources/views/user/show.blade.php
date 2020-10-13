@extends('layouts.master')


@section('content')

    <h1>Name: {{$user->name}}</h1>
    <p> Email: {{$user->email}}</p>
    <p>Total Share:{{$user->total_share}}</p>
    <p>Out of share: {{$user->share}}</p>


    <a href="{{route('user.index')}}" class="btn btn-success">Go back</a>


@endsection
