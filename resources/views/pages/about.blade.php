@extends('base')

    @section('title','About us |'.env('APP_NAME'))


    @section('content')
        <p>Built with &hearts; by BOSS ISAAC!</p>
        <p> <a href="{{ route('home')}}">Revenir vers la page d'accueil</a></p>
    @endsection

