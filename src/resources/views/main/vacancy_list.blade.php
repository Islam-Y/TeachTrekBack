@extends('main.base')

@push('styles')
    <link href="{{ asset('css/list_job_style.css') }}" rel="stylesheet" />
@endpush

@section('title', 'Вакансии')

@section('content')

    @foreach ($vacancies as $vacancy)
        <div class="div-section">
            <ul class="job">

                <li class="job-item">
                    <div class="h2-img">
                        <a href="{{ route('vacancy', $vacancy->id) }}">
                            <h2 class="title-2-0">{{ $vacancy->name }}</h2>
                        </a>
                        <button class="heart" type="button"><img class="not-heart-active" src='img/heart.png' width="30px"
                                height="30px" alt="like"> <img class="heart-active" src='img/heart_active.png'
                                width="30px" height="30px" alt="like"> </button>
                    </div>

                    <div class="salary">{{ $vacancy->salary }}</div>

                    <div class="img-description">
                        <div class="img-job"><img src="img/img-job.svg" alt="Место работы"></div>
                        <div class="description-job">
                            <div class="description-main">{{ $vacancy->description }}</div>
                            <div class="city">{{ $vacancy->city_vacancy }}</div>
                            <div class="underground">{{ $vacancy->underground }}</div>
                        </div>
                    </div>

                    <p class="requirements">
                        {{ $vacancy->requirements }}
                    </p>
                    <button class='respond' type="button" name="button-response">Откликнуться</button>

            </ul>
        </div>
    @endforeach
@endsection
