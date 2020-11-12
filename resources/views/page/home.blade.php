@extends('base')

    @section('title',env('APP_NAME'))

    @section('content')

            <img src="{{ asset('img/cm.png') }}" alt="Cameroon Flag" width="15%">

            <h1>Hello from Douala!</h1>

            <p>It's currently {{ date('h:i A') }}</p>

    @endsection


