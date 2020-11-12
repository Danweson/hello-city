@extends('base')

    @section('title', ' About | '.config('app.name'))


    @section('content')

        <img src="{{ asset('img/prog.png') }}" alt="IT Prog" width="15%">


        <p>Built with &hearts; by DANWE Christophe</p>

        <p><a href="{{ route('home') }}">Revenir à la page d'accueil</a></p>
    @endsection

