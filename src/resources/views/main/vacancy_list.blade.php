@extends('main.base')

@push('styles')
    <link href="{{ asset('css/list_job_style.css') }}" rel="stylesheet" />
@endpush

@section('title', 'Вакансии')

@section('content')

    <main class="main-2">
        <section class="section-2-1">
            <div class="search">
                <form class="search-job" action="" method="get">

                    <input name="s" placeholder="Поиск вакансий" type="search">
                    <button type="submit" value=""><img src="img/magnifier.svg" alt="Поиск"></button>

                </form>

                <form class="specification">
                    <select атрибуты>
                        <option атрибуты>По соответствию</option>
                        <option атрибуты>По дате размещения</option>
                        <option атрибуты>По убыванию зарплаты</option>
                        <option атрибуты>По возрастанию зарплаты</option>
                    </select>
                </form>

                <div class="search-max">Найдено 300 вакансий</div>
            </div>

            <div class="div-section">
                <ul class="job">
                    @foreach ($vacancies as $vacancy)
                        <li class="job-item">
                            <div class="h2-img">
                                <a href="{{ route('vacancy', $vacancy->id) }}">
                                    <h2 class="title-2-0">{{ $vacancy->name }}</h2>
                                </a>
                                <button class="heart" type="button"><img class="not-heart-active" src='img/heart.png'
                                        width="30px" height="30px" alt="like"> <img class="heart-active"
                                        src='img/heart_active.png' width="30px" height="30px" alt="like"> </button>


                            </div>

                            <div class="salary">{{ $vacancy->salary }}</div>

                            <div class="img-description">
                                <div class="img-job"><img src="img/img-job.svg" alt="Место работы"></div>
                                <div class="description-job">
                                    <div class="description-main">{{ $vacancy->description }}</div>
                                    <div class="city">{{ $vacancy->city_organization }}</div>
                                    <div class="underground">{{ $vacancy->underground }}</div>
                                </div>
                            </div>

                            <p class="requirements">
                                {{ $vacancy->required }}
                            </p>
                            <button class='respond' type="button" name="button-response">Откликнуться</button>

                        </li>
                    @endforeach
                </ul>

                <ul class="filter">

                    <li class="filter-item">
                        <h2 class="filter-item-p">Местоположение</h2>
                        <div>
                            <input type="checkbox" id="kazan" name="kazan">
                            <label for="kazan">Казань</label>
                        </div>

                        <div>
                            <input type="checkbox" id="zelenodolsk" name="zelenodolsk">
                            <label for="zelenodolsk">Зеленодольск</label>
                        </div>

                        <div>
                            <input type="checkbox" id="chistopol" name="chistopol">
                            <label for="chistopol">Чистополь</label>
                        </div>

                        <div>
                            <input type="checkbox" id="naberezhnye-chelny" name="naberezhnye-chelny">
                            <label for="naberezhnye-chelny">Набережные Челны</label>
                        </div>

                        <button class='respond-filter' class="filter-all">Показать все</button>
                    </li>

                    <li class="filter-item">
                        <h2 class="filter-item-p">Специализация</h2>
                        <div>
                            <input type="checkbox" id="primary-classes" name="primary-classes">
                            <label for="primary-classes">начальные классы</label>
                        </div>

                        <div>
                            <input type="checkbox" id="middle-high-school" name="middle-high-school">
                            <label for="middle-high-school">средние и старшие классы</label>
                        </div>

                        <div>
                            <input type="checkbox" id="special-school" name="special-school">
                            <label for="special-school">ССУЗы</label>
                        </div>

                        <div>
                            <input type="checkbox" id="university" name="university">
                            <label for="university">ВУЗы</label>
                        </div>

                    </li>

                    <li class="filter-item">
                        <h2 class="filter-item-p">Уровень дохода</h2>
                        <div class="item-money">
                            <input type="number" placeholder="от" id="money" name="money">
                            <p class="rub">руб.</p>
                        </div>

                        <div>
                            <input type="checkbox" id="exist" name="exist">
                            <label for="exist">Указана</label>
                        </div>

                    </li>

                    <li class="filter-item">
                        <h2 class="filter-item-p">Тип занятости</h2>
                        <div>
                            <input type="checkbox" id="full-day" name="full-day">
                            <label for="full-day">полный рабочий день</label>
                        </div>

                        <div>
                            <input type="checkbox" id="underemployment" name="underemployment">
                            <label for="underemployment">неполный рабочий день</label>
                        </div>

                        <div>
                            <input type="checkbox" id="whatever-time" name="whatever-time">
                            <label for="whatever-time">любой</label>
                        </div>

                    </li>

                    <li class="filter-item">
                        <h2 class="filter-item-p">Требуемый опыт работы</h2>
                        <div>
                            <input type="checkbox" id="whatever-skill" name="whatever-skill">
                            <label for="whatever-skill">любой</label>
                        </div>

                        <div>
                            <input type="checkbox" id="not-skill" name="not-skill">
                            <label for="not-skill">нет опыта</label>
                        </div>

                        <div>
                            <input type="checkbox" id="skill-one-three" name="skill-one-three">
                            <label for="skill-one-three">от 1 года до 3 лет</label>
                        </div>

                        <div>
                            <input type="checkbox" id="skill-three-six" name="skill-three-six">
                            <label for="skill-three-six">от 3 до 6 лет</label>
                        </div>

                        <div>
                            <input type="checkbox" id="skill-six-up" name="skill-six-up">
                            <label for="skill-six-up">более 6 лет</label>
                        </div>

                    </li>

                    <li class="filter-item">
                        <h2 class="filter-item-p">Организация</h2>
                        <div>
                            <input type="checkbox" id="school" name="school">
                            <label for="school">школа</label>
                        </div>

                        <div>
                            <input type="checkbox" id="special-school-2" name="special-school-2">
                            <label for="special-school-2">ССУЗ</label>
                        </div>

                        <div>
                            <input type="checkbox" id="university-2" name="university-2">
                            <label for="university-2">ВУЗ</label>
                        </div>

                    </li>

                    <li class="filter-item">
                        <h2 class="filter-item-p">Дата публикации вакансии</h2>
                        <div>
                            <input type="radio" id="date-1" name="date-create-v">
                            <label for="date-1">не больше 1 месяца</label>
                        </div>

                        <div>
                            <input type="radio" id="date-2" name="date-create-v">
                            <label for="date-2">от 1 до 3 месяцев</label>
                        </div>

                        <div>
                            <input type="radio" id="date-3" name="date-create-v">
                            <label for="date-3">от 3 до 6 месяцев</label>
                        </div>

                        <div>
                            <input type="radio" id="date-4" name="date-create-v">
                            <label for="date-4">от 6 месяцев до 1 года</label>
                        </div>

                        <div>
                            <input type="radio" id="date-5" name="date-create-v">
                            <label for="date-5">любая дата</label>
                        </div>

                    </li>

                </ul>
            </div>
        </section>
    </main>
@endsection