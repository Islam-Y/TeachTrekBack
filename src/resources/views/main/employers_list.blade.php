@extends('main.base')

@section('title')
<title>{{ $title }}</title>
@endsection

@section('content')
@foreach ($employers as $employer)
    <a href="{{route ('employer_profile', $employer->id) }}">
        {{$employer->employer_info}}
    </a>
    <p>{{$employer->email}}</p>
@endforeach

@endsection