@extends('main.base')

@section('title')
<title>{{ $title }}</title>
@endsection

@section('content')
@foreach ($candidates as $candidate)
    <a href="{{route ('candidate_profile', $candidate->id) }}">
        {{$candidate->fullName->name}} {{$candidate->fullName->surname}}
    </a>
    <p>{{$candidate->email}}</p>
@endforeach

@endsection