@extends('main.base')

@push('styles')
    <link href="{{ asset('css/inf_org_style.css') }}" rel="stylesheet" />
@endpush


@section('title', $organization->name)

@section('content')

    <div class="div-main-org">

        <div class="inf-mini">
            <section class="section-inf-mini">
                <div class="div-section-inf-mini">
                    <div class="div-img-org"><img class="img-org" src="img/img-school.png" width="227px" height="200px"
                            alt="Изображение школы"></div>
                    <h1 class="description-main">{{ $organization->name }}</h1>
                    <div class="city-underground">
                        <div class="city">{{ $organization->city_organization }}</div>
                        <div class="underground">Проспект Победы</div>
                    </div>

                    <div class="edu-estimation">
                        @foreach ($organization->social() as $social)
                            <a href='#' class="edu">
                                {{ $social->social_links }}
                            </a>
                        @endforeach
                        <div class="estimation">5.0</div>
                    </div>
                    @foreach ($organization->social() as $social)
                        <a class='tel' href="tel: +78432621108">{{ $social->phone_number }}</a>
                    @endforeach
                    <a class="mail-org" href="mailto: sch144kzn@mail.ru"> ch144kzn@mail.ru </a>

                    <div class="mini-briefly">
                        <p class="mini-briefly-item">Вакансии:</p>
                        <p class="mini-briefly-item-num">3</p>
                    </div>

                    <div class="mini-briefly">
                        <p class="mini-briefly-item">Учащиеся:</p>
                        <p class="mini-briefly-item-num">{{ $organization->number_students }}</p>
                    </div>

                    <div class="mini-briefly">
                        <p class="mini-briefly-item">Сотрудники:</p>
                        <p class="mini-briefly-item-num">{{ $organization->number_employees }}</p>
                    </div>

                    <ul class="ul-you-estimation">
                        <li class="you-estimation">Оценить:</li>

                        <input type="radio" id="5-star" name="crating" value="5">
                        <label for="5-star" title="Amazing">5 stars</label>

                        <input type="radio" id="4-star" name="crating" value="4">
                        <label for="4-star" title="Good">4 stars</label>

                        <input type="radio" id="3-star" name="crating" value="3">
                        <label for="3-star" title="Average">3 stars</label>

                        <input type="radio" id="2-star" name="crating" value="2">
                        <label for="2-star" title="Not Good">2 stars</label>

                        <input type="radio" id="1-star" required="" name="crating" value="1"
                            aria-required="true">
                        <label for="1-star" title="Bad">1 star</label>
                    </ul>

                </div>
            </section>
        </div>

        <div class="inf-many">

            <section class="section-inf-many">
                <div class="description-hero">
                    {{ $organization->description }}
                </div>
            </section>

            <section class="gallery">
                <div class="slider">
                    <img class="active-photo" src="img/img-org-1.jpg" alt="">
                    <ul class="preview-list">

                        <li class="active-li">
                            <a href="img/img-org-1.jpg">
                                <img src="img/img-org-1.jpg" width='220px' alt="">
                            </a>
                        </li>
                        <li class="active-li">
                            <a href="img/img-org-2.jpg">
                                <img src="img/img-org-2.jpg" width='220px' alt="">
                            </a>
                        </li>
                        <li class="active-li">
                            <a href="img/img-org-1.jpg">
                                <img src="img/img-org-1.jpg" width='220px' alt="">
                            </a>
                        </li>
                        <li>
                            <a href="img/img-org-1.jpg">
                                <img src="img/img-org-1.jpg" width="220" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="img/img-org-1.jpg">
                                <img src="img/img-org-1.jpg" width='220px' alt="">
                            </a>
                        </li>
                        <li>
                            <a href="img/img-org-2.jpg">
                                <img src="img/img-org-2.jpg" width="220" alt="">
                            </a>
                        </li>
                    </ul>
                    <div class="gallery-button">
                        <button class="more active-more" type="button"><img src="img/arrow-down.png" width="40px"
                                height="40px" alt="show all"></button>
                        <button class="more-hidden" type="button"><img src="img/arrow-up.png" width="40px"
                                height="40px" alt="hide"></button>
                    </div>

                </div>

            </section>

            {{-- @foreach() --}}
            <article class="job-3">

                <div class="h2-like">
                    <h2 class="title-3">Учитель информатики</h2>
                    <button class="heart" type="button"><img class="not-heart-active" src='img/heart.png'
                            width="30px" height="30px" alt="like"><img class="heart-active"
                            src='img/heart_active.png' width="30px" height="30px" alt="like"></button>
                </div>

                <p class="main-price">от 30 000 руб.</p>

                <ul class="requirements-briefly">
                    <li class="requirements-briefly-item">Требуемый опыт: 2 года</li>
                    <li class="requirements-briefly-item">Полная занятость</li>
                </ul>
                <ul class="briefly">
                    <li class="briefly-item">Составление рабочей программы по информатике.</li>
                    <li class="briefly-item">Проведение уроков информатики в 5-11-х классах.</li>
                    <li class="briefly-item">Помощь в техническом обеспечении спец. уроков.</li>
                    <li class="briefly-item">Педагогическое образование (высшее или среднее).</li>
                </ul>
                <button class='respond' type="button" name="button-response">Откликнуться</button>

            </article>
            {{-- @endforeach --}}
        </div>

    </div>

@endsection
