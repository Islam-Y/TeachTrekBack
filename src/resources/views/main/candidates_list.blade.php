@extends('layout.app')

@section('content')
@include('partials.header')

@push('styles')
<link href="{{ asset('css/candidates.css') }}" rel="stylesheet" />
@endpush

@section('title')
$title
@endsection

@section('content')

<div class="search">
    <form class="search-candidate" action="" method="get">

        <input name="s" placeholder="Поиск специалиста" type="search">
        <button type="submit" value=""><img src="img/magnifier.svg" alt="Поиск"></button>

    </form>

    <form class="specification">
        <select атрибуты>
            <option атрибуты>По соответствию</option>
            <option атрибуты>По дате визита</option>
            <option атрибуты>По убыванию зарплаты</option>
            <option атрибуты>По возрастанию зарплаты</option>
        </select>
    </form>

    <div class="search-max">Найдено 30 соискателей</div>
</div>

@foreach ($candidates as $candidate)


<main class="main-candidates">
    <section class="section-candidates">
        <div class="div-section">

            <ul class="candidates">

                <li class="candidates-item">
                    <div class="description-candidate">
                        <h2 class="name-candidate">
                            <a href="{{route ('candidate_profile', $candidate->id) }}">
                                {{$candidate->fullName->name}}
                                {{$candidate->fullName->surname}}
                                {{$candidate->fullName->patronymic}}
                            </a>
                        </h2>


                        <div class="description-mini-candidate">{{$candidate->fullName->info->profession}}</div>
                        <div class="salary">От 30 000 руб.</div>

                        <ul>
                            <li><b>Опыт работы:</b>3 года</li>
                            <li><b>Специализация:</b> {{$candidate->fullName->info->specialization}}</li>
                            <li><b>Образование:</b> {{$candidate->fullName->education->first()->name_educational_university}}</li>
                        </ul>
                        <button class='button-write' type="button" name="button-response">Написать</button>
                    </div>

                    <img src="img/candidate-img.svg" alt="Cоискатель">
                    <button class="heart" type="button"><img class="not-heart-active" src='img/heart.png' width="30px" height="30px" alt="like"><img class="heart-active" src='img/heart_active.png' width="30px" height="30px" alt="like"></button>
                </li>


                @endforeach

                @endsection