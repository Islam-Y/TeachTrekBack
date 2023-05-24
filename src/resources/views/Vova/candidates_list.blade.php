@extends('base')

@foreach ($candidates as $candidate)
    <p>{{ $candidate->name }}</p>
@endforeach