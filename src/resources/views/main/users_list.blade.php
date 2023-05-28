@extends('main.base')

@push('styles')
    <link href="{{ asset('css/users.css') }}" rel="stylesheet" />
@endpush

@section('title', 'Соискатели')

@section('content')
    <div class="search">
        <form class="search-user" action="" method="get">

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

    @foreach ($users as $user)
        <main class="main-users">
            <section class="section-users">
                <div class="div-section">

                    <ul class="users">

                        <li class="users-item">
                            <div class="description-user">
                                <h2 class="name-user">
                                    <a href="{{ route('user_profile', $user->id) }}">
                                        {{ $user->fullName->name }}
                                        {{ $user->fullName->surname }}
                                        {{ $user->fullName->patronymic }}
                                    </a>
                                </h2>


                                <div class="description-mini-user">{{ $user->fullName->info->profession }}</div>
                                <div class="salary">От 30 000 руб.</div>

                                <ul>
                                    <li><b>Опыт работы:</b>3 года</li>
                                    <li><b>Специализация:</b> {{ $user->fullName->info->specialization }}</li>
                                    <li><b>Образование:</b>
                                        {{ $user->fullName->education->first()->name_educational_university }}</li>
                                </ul>
                                <button class='button-write' type="button" name="button-response">Написать</button>
                            </div>

                            <img src="img/user-img.svg" alt="Cоискатель">
                            <button class="heart" type="button"><img class="not-heart-active" src='img/heart.png'
                                    width="30px" height="30px" alt="like"><img class="heart-active"
                                    src='img/heart_active.png' width="30px" height="30px" alt="like"></button>
                        </li>
    @endforeach
@endsection
