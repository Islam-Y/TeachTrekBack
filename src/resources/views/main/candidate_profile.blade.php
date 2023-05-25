@extends('main.base')

@section('title')
<title>{{ $candidate->fullName->surname}}</title>

@endsection
@section('content')
<p>{{$candidate}}</p>
<p>{{$candidate->fullName}}</p>
<p>{{$candidate->fullName->info}}</p>
@endsection