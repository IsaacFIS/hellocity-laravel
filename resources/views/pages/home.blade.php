@extends('base')
    @section('title','Hello City')

    @section('content')
    <img src="/images/quebec.png" alt="" class="mt-12 rounded shadow-md ht-32">
        <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Quebec!</h1>


        <p class="text-lg text-gray-500">It's currently {{date('h:i A')}}</p>
    @endsection
