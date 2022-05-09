@extends('base')

    @section('title','About us |'.env('APP_NAME'))


    @section('content')
     <img src="/images/téléchargement.png" alt="" class="my-12 rounded-full shadow-md">
        <h2 class="mb-5 text-gray-700 text-lg">Built with <span class="text-pink-500"> &hearts;</span> by BOSS ISAAC!</h2>
        <p> <a href="{{ route('home')}}" class="text-indigo-600 underline">Revenir vers la page d'accueil</a></p>
    @endsection

