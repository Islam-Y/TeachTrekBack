@extends('main.base')

@section('content')
@foreach ($candidates as $candidate)
    <p>{{$candidate->email}}</p>
    <p>{{$candidate->candidateFullName}}</p>
@endforeach

@endsection