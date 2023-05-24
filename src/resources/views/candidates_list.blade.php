@extends('base')

@section('content')
@foreach ($candidates as $candidate)
    <p>{{ $candidate->email }}</p>
@endforeach
@endsection