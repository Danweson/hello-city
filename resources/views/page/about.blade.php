@extends('base')

    @section('title', ' About | Hello City')


    @section('content')
                <p>Built with &hearts; by DANWE Christophe</p>
                <p><a href="/">Revenir à la page d'accueil</a></p>
    @endsection

    @section('footer')
        <p>&copy; Copyright {{ date('Y') }} &middot; </p>
    @endsection
