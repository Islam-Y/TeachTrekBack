@extends('main.base')

@section('title', "Работодатели")

@section('content')
@foreach ($employers as $employer)
    <a href="{{route ('employer_profile', $employer->id) }}">
        {{$employer->info->name}} {{$employer->info->surname}}
    </a>
    <p>{{$employer->email}}</p>
@endforeach

@endsection