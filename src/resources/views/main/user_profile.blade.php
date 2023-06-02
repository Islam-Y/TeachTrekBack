@extends('layouts.app')
@section('content')
    @include('partials.header')

@section('title')
    <title>{{ $user->fullName->surname }}</title>

@endsection
@section('content')
    <p>{{ $user }}</p>
    <p>{{ $user->fullName }}</p>
    <p>{{ $user->fullName->info }}</p>
@endsection
