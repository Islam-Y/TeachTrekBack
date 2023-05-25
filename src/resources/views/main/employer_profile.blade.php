@extends('main.base')

@section('title', $employer->info->surname)

@section('content')
<p>{{$employer}}</p>
<p>{{$employer->info->name}}</p>
@endsection