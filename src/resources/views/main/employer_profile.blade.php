@extends('main.base')

@section('title')
<title>{{ $employer->info->surname}}</title>

@endsection
@section('content')
<p>{{$employer}}</p>
<p>{{$employer->info->name}}</p>
@endsection