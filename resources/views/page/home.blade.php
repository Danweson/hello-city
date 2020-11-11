@extends('base')

    @section('title','Hello City')

    @section('content')

            <h1>Hello from Douala!</h1>

            <p>It's currently {{ date('h:i A') }}</p>

    @endsection

    @section('footer')
        <p>&copy; Copyright {{ date('Y') }} &middot; <a href="/about-us">About us</a></p>
     @stop

